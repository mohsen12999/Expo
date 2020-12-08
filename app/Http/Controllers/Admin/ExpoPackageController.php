<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\ExpoPackage;
use App\UserPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic;

class PackageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('check_admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $menu = 'expo_packages';
        $packages = ExpoPackage::all();

        return view('admin.packages.index', compact('packages', 'menu'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $menu = 'expo_packages';
        return view('admin.expo_packages.create', compact('menu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $package = new ExpoPackage;
        $package->pic = '';

        if ($request->hasFile('pic')) {
            $file = $request->file('pic');

            $image_resize = ImageManagerStatic::make($file->getRealPath());
            $image_resize->resize(394, 140);

            $filename = '/img/packages/' . time() . '_' . $file->getClientOriginalName();
            $filename = str_replace(" ", "", $filename);
            $path = str_replace("index/public/img", "img", public_path($filename));
            $image_resize->save($path);
            $package->pic = $filename;
        }

        $package->title = $request->title;
        $package->description = $request->description ?? "";

        if (is_numeric($request->price)) {
            $package->price = $request->price;
        }

        $package->video_time = $request->video_time;
        $package->photo_count = $request->photo_count;
        $package->catalog_page = $request->catalog_page;
        $package->color = $request->color;

        $package->type = 0;
        $package->status = 0;

        $package->save();

        return redirect('admin\expo-package')->with('success', 'Information has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $menu = 'expo_packages';
        $package = ExpoPackage::find($id);

        return view('admin.expo_packages.edit', compact('id', 'package', 'menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $package = ExpoPackage::find($id);

        if ($request->hasFile('pic')) {

            $file = $request->file('pic');
            $image_resize = ImageManagerStatic::make($file->getRealPath());
            $image_resize->resize(394, 140);

            $filename = '/img/packages/' . time() . '_' . $file->getClientOriginalName();
            $filename = str_replace(" ", "", $filename);
            $path = str_replace("index/public/img", "img", public_path($filename));
            $image_resize->save($path);

            if ($package->pic != '' && file_exists(public_path($package->pic))) {
                unlink(public_path($package->pic));
            }

            $package->pic = $filename;
        }

        $package->title = $request->title;
        $package->description = $request->description ?? "";

        if (is_numeric($request->price)) {
            $package->price = $request->price;
        }

        $package->video_time = $request->video_time;
        $package->photo_count = $request->photo_count;
        $package->catalog_page = $request->catalog_page;
        $package->color = $request->color;

        $package->save();

        return redirect('admin\expo-package')->with('success', 'Information has been modified');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $package = ExpoPackage::find($id);

        if ($package->pic != '' && file_exists(public_path($package->pic))) {
            unlink(public_path($package->pic));
        }

        $package->delete();
        return redirect('admin\expo-package')->with('success', 'Information has been Removed');
    }
}
