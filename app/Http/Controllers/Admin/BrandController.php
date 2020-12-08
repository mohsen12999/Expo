<?php

namespace App\Http\Controllers\Admin;

use App\Brand;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic;

class BrandController extends Controller
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
        $menu = 'brands';
        $brands = Brand::orderBy('id', 'desc')->get();

        return view('admin.brands.index', compact('brands', 'menu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $menu = 'brands';
        return view('admin.brands.create', compact('menu'));
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

        if ($request->hasFile('pic')) {
            $brand = new Brand;

            $file = $request->file('pic');

            $image_resize = ImageManagerStatic::make($file->getRealPath());
            $image_resize->resize(168, 168);

            $filename = '/img/brands/' . time() . '_' . $file->getClientOriginalName();
            $filename = str_replace(" ", "", $filename);
            $path = str_replace("index/public/img", "img", public_path($filename));
            $image_resize->save($path);
            $brand->pic = $filename;

            $brand->save();
        }


        return redirect('admin\category')->with('success', 'Information has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = Brand::find($id);

        if ($brand->pic != '' && file_exists(public_path($brand->pic))) {
            unlink(public_path($brand->pic));
        }

        $brand->delete();
        return redirect('admin\brand')->with('success', 'Information has been Removed');
    }
}
