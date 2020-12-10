<?php

namespace App\Http\Controllers\Admin;

use App\Booth;
use App\Expo;
use App\Http\Controllers\Controller;
use App\Image;
use App\Theme;
use App\UserExpoPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic;

//use FFMpeg;
//use Imagick;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;
use Spatie;

class BoothController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $menu = 'booth';
        $user_id = Auth::user()->id;
        $booths = Booth::with('expo')->where('user_id', $user_id)->get();
        return view('admin.booths.index', compact('booths', 'menu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $menu = 'booth';
        $user_id = Auth::user()->id;
        $userPackages = UserExpoPackage::with('package')
            ->where([
                ['user_id', '=', $user_id],
                ['status', '=', 0],
                ['booth_id', '=', null],
            ])
            ->get();

        return view('admin.booths.choose_package', compact('userPackages', 'menu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function choosePackage(Request $request)
    {
        //
        $menu = 'booth';
        $package_id =  $request->id;
        $expos = Expo::where('status', 1)->get();
        return view('admin.booths.choose_expo', compact('expos', 'package_id', 'menu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function chooseExpo(Request $request)
    {
        //
        $menu = 'booth';
        $package_id =  $request->package_id;
        $expo_id =  $request->id;

        $themes = Theme::all();

        return view('admin.booths.create', compact('themes', 'expo_id', 'package_id', 'menu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userPackage = UserExpoPackage::with('package')->find($request->package_id);
        $package = $userPackage->package;

        $booth = new Booth;

        $booth->pic = '';

        if ($request->hasFile('pic')) {
            $file = $request->file('pic');

            $image_resize = ImageManagerStatic::make($file->getRealPath());
            $image_resize->resize(800, 600);

            $filename = '/img/booths/' . time() . '_' . $file->getClientOriginalName();
            $filename = str_replace(" ", "", $filename);
            $path = str_replace("index/public/img", "img", public_path($filename));
            $image_resize->save($path);
            $booth->pic = $filename;
        }


        $booth->title = $request->title ?? "";
        $booth->description = $request->description ?? "";

        $booth->video = '';
        if ($request->hasFile('video')) {
            $file = $request->file('video');
            $file_type = $file->getMimeType(); //$file->getType();
            if (explode('/', $file_type)[0] == "video") {

                $file_size = true;
                try {
                    if ($package && $package->video_time && $package->video_time > 0) {
                        // $ffprobe = FFMpeg\FFProbe::create();
                        // $duration = $ffprobe
                        //     ->format($filename) // extracts file informations
                        //     ->get('duration');

                        $media = FFMpeg::open($filename);
                        $durationInSeconds = $media->getDurationInSeconds();
                        $duration = $durationInSeconds / 60;

                        if ($duration > $package->video_time) {
                            $file_size = false;
                        }
                    }
                } catch (\Throwable $th) {
                    //throw $th;
                }

                if ($file_size) {
                    $filename = time() . "_" . $file->getClientOriginalName();
                    $filename = str_replace(" ", "", $filename);
                    $file->move(public_path("/img/booths/video/"), $filename);
                    $booth->video = "/img/booths/video/" . $filename;
                }
            }
        }

        $booth->catalog = '';
        if ($request->hasFile('catalog')) {
            $file = $request->file('catalog');
            // $file_type = $file->getMimeType(); //$file->getType();

            $file_page_count = true;
            try {
                if ($package && $package->catalog_page && $package->catalog_page > 0) {
                    // $im = new Imagick();
                    // $im->pingImage($file);
                    // $count = $im->getNumberImages();
                    $pdf = new Spatie\PdfToImage\Pdf($file);
                    $count = $pdf->getNumberOfPages(); //returns an int

                    if ($count > $package->catalog_page) {
                        $file_page_count = false;
                    }
                }
            } catch (\Throwable $th) {
                //throw $th;
            }

            if ($file_page_count) {
                $filename = time() . "_" . $file->getClientOriginalName();
                $filename = str_replace(" ", "", $filename);
                $file->move(public_path("/img/booths/catalog/"), $filename);
                $booth->catalog = "/img/booths/catalog/" . $filename;
            }
        }

        $booth->theme = "";
        $booth->status = 0;
        $booth->user_id = Auth::user()->id;

        $booth->user_package_id = $request->package_id;
        $booth->expo_package_id = $package->id;

        $booth->expo_id = $request->expo_id;
        $booth->theme_id = $request->theme_id;
        $booth->save();


        $image_count = 1;
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {

                if ($package && $package->photo_count && $package->photo_count > 0 && $package->photo_count < $image_count) {
                    break;
                }

                $image_resize = ImageManagerStatic::make($file->getRealPath());
                $image_resize->resize(800, 600);

                $filename = '/img/booths/gallery/' . time() . '_' . $file->getClientOriginalName();
                $filename = str_replace(" ", "", $filename);
                $path = str_replace("index/public/img", "img", public_path($filename));

                $image_resize->save($path);

                $img = new Image;
                $img->title = $file->getClientOriginalName();
                $img->description = "";
                $img->path = $filename;

                $img->booth_id = $booth->id;
                $img->save();

                $image_count++;
            }
        }

        $userPackage->status = 1;
        $userPackage->booth_id = $booth->id;
        $userPackage->save();

        $menu = 'booth';
        $booth_id = $booth->id;
        $map_ids = Booth::where('expo_id', $booth->expo_id)->select('booth_map_id')->get()->toArray();

        return view('admin.booths.booth_location', compact('menu', 'booth_id', 'map_ids'));
        // return redirect('admin\booth')->with('success', 'Information has been modified');
    }


    public function booth_location(Request $request, $id)
    {
        $id = $request->id;
        $booth = Booth::find($id);
        $booth->booth_map_id = $id;
        $booth->save();

        return redirect('admin\booth')->with('success', 'Information has been modified');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booth  $booth
     * @return \Illuminate\Http\Response
     */
    public function show(Booth $booth)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booth  $booth
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $menu = 'booth';
        $booth = Booth::find($id);

        $expos = Expo::where('status', 1)->get();
        $themes = Theme::all();

        $user_id = Auth::user()->id;
        $userPackages = UserExpoPackage::with('package')->where('user_id', $user_id)->get();

        $booth_images = Image::where('booth_id', $id);

        return view('admin.booths.edit', compact('booth', 'id', 'expos', 'themes', 'userPackages', 'booth_images', 'menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booth  $booth
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $booth = Booth::find($id);

        $userPackage = UserExpoPackage::with('package')->find($request->package_id);
        $package = $userPackage->package;

        if ($request->hasFile('pic')) {

            $file = $request->file('pic');
            $image_resize = ImageManagerStatic::make($file->getRealPath());
            $image_resize->resize(800, 600);

            $filename = '/img/booths/' . time() . '_' . $file->getClientOriginalName();
            $filename = str_replace(" ", "", $filename);
            $path = str_replace("index/public/img", "img", public_path($filename));
            $image_resize->save($path);

            if ($booth->pic != '' && file_exists(public_path($booth->pic))) {
                unlink(public_path($booth->pic));
            }
            $booth->pic = $filename;
        }

        if ($request->hasFile('video')) {
            $file = $request->file('video');
            $file_type = $file->getMimeType(); //$file->getType();
            if (explode('/', $file_type)[0] == "video") {
                $file_size = true;
                try {
                    if ($package && $package->video_time && $package->video_time > 0) {
                        // $ffprobe = FFMpeg\FFProbe::create();
                        // $duration = $ffprobe
                        //     ->format($filename) // extracts file informations
                        //     ->get('duration');

                        $media = FFMpeg::open($filename);
                        $durationInSeconds = $media->getDurationInSeconds();
                        $duration = $durationInSeconds / 60;

                        if ($duration > $package->video_time) {
                            $file_size = false;
                        }
                    }
                } catch (\Throwable $th) {
                    //throw $th;
                }

                if ($file_size) {
                    $filename = time() . "_" . $file->getClientOriginalName();
                    $filename = str_replace(" ", "", $filename);
                    $file->move(public_path("/img/booths/video/"), $filename);

                    if ($booth->video != '' && $booth->video != null && file_exists(public_path($booth->video))) {
                        unlink(public_path($booth->video));
                    }

                    $booth->video = "/img/booths/video/" . $filename;
                }
            }
        }

        $booth->catalog = '';
        if ($request->hasFile('catalog')) {
            $file = $request->file('catalog');
            // $file_type = $file->getMimeType(); //$file->getType();

            $file_page_count = true;
            try {
                if ($package && $package->catalog_page && $package->catalog_page > 0) {
                    $pdf = new Spatie\PdfToImage\Pdf($file);
                    $count = $pdf->getNumberOfPages(); //returns an int

                    if ($count > $package->catalog_page) {
                        $file_page_count = false;
                    }
                }
            } catch (\Throwable $th) {
                //throw $th;
            }

            if ($file_page_count) {
                $filename = time() . "_" . $file->getClientOriginalName();
                $filename = str_replace(" ", "", $filename);
                $file->move(public_path("/img/booths/catalog/"), $filename);

                if ($booth->catalog != '' && $booth->catalog != null && file_exists(public_path($booth->catalog))) {
                    unlink(public_path($booth->catalog));
                }

                $booth->catalog = "/img/booths/catalog/" . $filename;
            }
        }

        $booth->theme = "";
        $booth->status = 0;
        $booth->user_id = Auth::user()->id;

        $booth->user_package_id = $request->package_id;
        $booth->package_id = $package->id;

        $booth->expo_id = $request->expo_id;
        $booth->theme_id = $request->theme_id;
        $booth->save();

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {

                $image_resize = ImageManagerStatic::make($file->getRealPath());
                $image_resize->resize(800, 600);

                $filename = '/img/booths/gallery/' . time() . '_' . $file->getClientOriginalName();
                $filename = str_replace(" ", "", $filename);
                $path = str_replace("index/public/img", "img", public_path($filename));

                $image_resize->save($path);

                $img = new Image;
                $img->title = $file->getClientOriginalName();
                $img->description = "";
                $img->path = $filename;

                $img->booth_id = $booth->id;
                $img->save();
            }
        }

        return redirect('admin\booth')->with('success', 'Information has been Removed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booth  $booth
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $booth = Booth::find($id);

        if ($booth->pic != '' && file_exists(public_path($booth->pic))) {
            unlink(public_path($booth->pic));
        }

        $booth->delete();
        return redirect('admin\booth')->with('success', 'Information has been Removed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booth  $booth
     * @return \Illuminate\Http\Response
     */
    public function deleteBoothImage($id)
    {
        //
        $img = Image::find($id);

        if ($img->pic != '' && file_exists(public_path($img->pic))) {
            unlink(public_path($img->pic));
        }

        $img->delete();
        return redirect('admin\booth')->with('success', 'Information has been Removed');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function dashboard()
    {
        //
        $menu = 'dashboard';
        $user_id = Auth::user()->id;
        $booths = Booth::where('user_id', $user_id)->get();

        return view('admin.dashboard', compact('booths', 'menu'));
    }
}
