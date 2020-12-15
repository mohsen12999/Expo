<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic;

use App\Expo;
use App\ExpoCategory;
use App\ExpoComment;
use App\ExpoImage;

class ExpoController extends Controller
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

    //
    // public function __construct()
    // {
    //     //$this->middleware('auth');
    //     //$this->middleware('role:admin');
    // }

    public function index()
    {
        //
        // $courses = Course::all();
        $menu = 'expo';
        $expos = Expo::with(['expoComments', 'expoImages'])->orderBy('id', 'desc')->get();

        return view('admin.expos.index', compact('expos', 'menu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $menu = 'expo';
        $categories = ExpoCategory::all();
        return view('admin.expos.create', compact('categories', 'menu'));
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
        $expo = new Expo;

        $expo->pic = '';
        if ($request->hasFile('pic')) {
            $file = $request->file('pic');

            $image_resize = ImageManagerStatic::make($file->getRealPath());
            $image_resize->resize(600, 400);

            $filename = '/img/expos/' . time() . '_' . $file->getClientOriginalName();
            $filename = str_replace(" ", "", $filename);
            $path = str_replace("index/public/img", "img", public_path($filename));
            $image_resize->save($path);
            $expo->pic = $filename;
        }

        if ($request->hasFile('video')) {
            $file = $request->file('video');
            $filename = "video_" . time() . "_" . $file->getClientOriginalName();
            $filename = str_replace(" ", "", $filename);
            $file->move(str_replace("index/public/img", "img", public_path("/img/expos/")), $filename);
            $expo->video = "/img/expos/" . $filename;
        }

        $expo->title = $request->title;
        $expo->description = $request->description ?? "";

        $expo->start = $request->start;
        $expo->end = $request->end;
        $expo->type = $request->type ?? 0;
        $expo->type_desc = $request->type == 0 ? "Periodic" : "Yearly";
        $expo->history = $request->history == "on";
        $expo->status = $request->status == "on";
        $expo->theme = "";
        $expo->expo_category_id = $request->category_id;

        $expo->save();

        return redirect('admin\expo')->with('success', 'Information has been added');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $menu = 'expo';
        $expo = Expo::find($id);
        $categories = ExpoCategory::all();
        return view('admin.expos.edit', compact('expo', 'id', 'categories', 'menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $expo = Expo::find($id);

        if ($request->hasFile('pic')) {

            $file = $request->file('pic');
            $image_resize = ImageManagerStatic::make($file->getRealPath());
            $image_resize->resize(600, 400);

            $filename = '/img/expos/' . time() . '_' . $file->getClientOriginalName();
            $filename = str_replace(" ", "", $filename);
            $path = str_replace("index/public/img", "img", public_path($filename));
            $image_resize->save($path);

            if ($expo->pic != '' && file_exists(public_path($expo->pic))) {
                unlink(public_path($expo->pic));
            }
            $expo->pic = $filename;
        }

        if ($request->hasFile('video')) {
            $file = $request->file('video');
            $filename = "video_" . time() . "_" . $file->getClientOriginalName();
            $filename = str_replace(" ", "", $filename);
            $file->move(str_replace("index/public/img", "img", public_path("/img/expos/")), $filename);
            if ($expo->video != '' && file_exists(public_path($expo->video))) {
                unlink(public_path($expo->video));
            }
            $expo->video = "/img/expos/" . $filename;
        }

        $expo->title = $request->title ?? "";
        $expo->description = $request->description ?? "";

        $expo->start = $request->start;
        $expo->end = $request->end;
        $expo->type = $request->type ?? 0;
        $expo->type_desc = $request->type == 0 ? "Periodic" : "Yearly";
        $expo->status = $request->status == "on";
        $expo->theme = "";
        $expo->expo_category_id = $request->category_id;

        $expo->save();

        return redirect('admin\expo')->with('success', 'Information has been modified');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $expo = Expo::find($id);

        if ($expo->pic != '' && file_exists(public_path($expo->pic))) {
            unlink(public_path($expo->pic));
        }

        $expo->delete();
        return redirect('admin\expo')->with('success', 'Information has been Removed');
    }


    public function expoComment($id)
    {
        $menu = 'expo';
        $comments = ExpoComment::where('expo_id', $id)->orderBy('id', 'desc')->get();
        return view('admin.expos.comments', compact('comments', 'menu'));
    }

    public function deleteComment($id)
    {
        //
        $comment = ExpoComment::find($id);
        $expo_id = $comment->expo_id;
        $comment->delete();

        return redirect('admin/expo-comment/' . $expo_id)->with('success', 'Information has been Removed');
    }

    public function acceptComment($id)
    {
        //
        $comment = ExpoComment::find($id);
        $expo_id = $comment->expo_id;
        $comment->status = 1;
        $comment->save();

        return redirect('admin/expo-comment/' . $expo_id)->with('success', 'Information has been Accepted');
    }

    public function expoImage($id)
    {
        $menu = 'expo';
        $images = ExpoImage::where('expo_id', $id)->get();
        $expo_id = $id;
        return view('admin.expos.images', compact('images', 'menu', 'expo_id'));
    }

    public function addImage(Request $request, $id)
    {
        $image = new ExpoImage;
        $image->expo_id = $id;

        $file = $request->file('pic');
        $image_resize = ImageManagerStatic::make($file->getRealPath());
        $image_resize->resize(400, 600);

        $filename = '/img/expos/img_' . time() . '_' . $file->getClientOriginalName();
        $filename = str_replace(" ", "", $filename);
        $path = str_replace("index/public/img", "img", public_path($filename));
        $image_resize->save($path);
        $image->title = "";
        $image->description = "";
        $image->path = $filename;

        $image->save();

        return redirect('admin/expo-image/' . $id)->with('success', 'Information has been Removed');
    }

    public function deleteImage($id)
    {
        $image = ExpoImage::find($id);
        $expo_id = $image->expo_id;
        if ($image->path != '' && file_exists(public_path($image->path))) {
            unlink(public_path($image->path));
        }
        $image->delete();

        return redirect('admin/expo-image/' . $expo_id)->with('success', 'Information has been Removed');
    }
}
