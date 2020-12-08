<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Slider;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic;

class SliderController extends Controller
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
        $menu = 'sliders';
        $sliders = Slider::orderBy('id', 'desc')->get();

        return view('admin.sliders.index', compact('sliders', 'menu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $menu = 'sliders';
        return view('admin.sliders.create', compact('menu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slider = new Slider;
        $slider->pic = '';

        if ($request->hasFile('pic')) {
            $file = $request->file('pic');

            $image_resize = ImageManagerStatic::make($file->getRealPath());
            $image_resize->resize(1263, 750);

            $filename = '/img/slider/' . time() . '_' . $file->getClientOriginalName();
            $filename = str_replace(" ", "", $filename);
            $path = str_replace("index/public/img", "img", public_path($filename));
            $image_resize->save($path);
            $slider->pic = $filename;
        }

        $slider->title = $request->title;
        $slider->description = $request->description;
        $slider->btn_title = $request->btn_title;
        $slider->btn_link = $request->btn_link;
        $slider->save();

        return redirect('admin\slider')->with('success', 'Information has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $menu = 'sliders';
        $slider = Slider::find($id);

        return view('admin.sliders.edit', compact('id', 'slider', 'menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $slider = Slider::find($id);

        if ($request->hasFile('pic')) {

            $file = $request->file('pic');
            $image_resize = ImageManagerStatic::make($file->getRealPath());
            $image_resize->resize(1263, 750);

            $filename = '/img/slider/' . time() . '_' . $file->getClientOriginalName();
            $filename = str_replace(" ", "", $filename);
            $path = str_replace("index/public/img", "img", public_path($filename));
            $image_resize->save($path);

            if ($slider->pic != '' && file_exists(public_path($slider->pic))) {
                unlink(public_path($slider->pic));
            }

            $slider->pic = $filename;
        }

        $slider->title = $request->title;
        $slider->description = $request->description;
        $slider->btn_title = $request->btn_title;
        $slider->btn_link = $request->btn_link;

        $slider->save();

        return redirect('admin\slider')->with('success', 'Information has been modified');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $slider = Slider::find($id);

        if ($slider->pic != '' && file_exists(public_path($slider->pic))) {
            unlink(public_path($slider->pic));
        }

        $slider->delete();
        return redirect('admin\slider')->with('success', 'Information has been Removed');
    }
}
