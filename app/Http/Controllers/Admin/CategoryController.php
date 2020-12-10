<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic;

class CategoryController extends Controller
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
        $menu = 'categories';
        $categories = Category::orderBy('id', 'desc')->get();

        return view('admin.categories.index', compact('categories', 'menu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $menu = 'categories';
        return view('admin.categories.create', compact('menu'));
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
        $category = new Category;
        $category->pic = '';

        if ($request->hasFile('pic')) {
            $file = $request->file('pic');

            $image_resize = ImageManagerStatic::make($file->getRealPath());
            $image_resize->resize(394, 140);

            $filename = '/img/categories/' . time() . '_' . $file->getClientOriginalName();
            $filename = str_replace(" ", "", $filename);
            $path = str_replace("index/public/img", "img", public_path($filename));
            $image_resize->save($path);
            $category->pic = $filename;
        }

        $category->title = $request->title;
        $category->description = '';
        $category->status = $request->status == "on";

        $category->save();

        return redirect('admin\category')->with('success', 'Information has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $menu = 'categories';
        $category = Category::find($id);

        return view('admin.categories.edit', compact('id', 'category', 'menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $category = Category::find($id);

        if ($request->hasFile('pic')) {

            $file = $request->file('pic');
            $image_resize = ImageManagerStatic::make($file->getRealPath());
            $image_resize->resize(394, 140);

            $filename = '/img/categories/' . time() . '_' . $file->getClientOriginalName();
            $filename = str_replace(" ", "", $filename);
            $path = str_replace("index/public/img", "img", public_path($filename));
            $image_resize->save($path);

            if ($category->pic != '' && file_exists(public_path($category->pic))) {
                unlink(public_path($category->pic));
            }

            $category->pic = $filename;
        }

        $category->title = $request->title ?? "";
        $category->description = '';
        $category->price = $request->price ?? "";
        $category->status = $request->status == "on";

        $category->save();

        return redirect('admin\category')->with('success', 'Information has been modified');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $category = Category::find($id);

        if ($category->pic != '' && file_exists(public_path($category->pic))) {
            unlink(public_path($category->pic));
        }

        $category->delete();
        return redirect('admin\category')->with('success', 'Information has been Removed');
    }
}
