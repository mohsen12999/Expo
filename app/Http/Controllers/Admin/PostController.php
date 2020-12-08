<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic;

class PostController extends Controller
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
        $menu = 'posts';
        $posts = Post::orderBy('id', 'desc')->get();

        return view('admin.posts.index', compact('posts', 'menu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $menu = 'posts';
        return view('admin.posts.create', compact('menu'));
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
        $filename = '';

        if ($request->hasFile('pic')) {
            $file = $request->file('pic');

            $image_resize = ImageManagerStatic::make($file->getRealPath());
            $image_resize->resize(800, 600);

            $filename = '/img/posts/' . time() . '_' . $file->getClientOriginalName();
            $filename = str_replace(" ", "", $filename);
            $path = str_replace("index/public/img", "img", public_path($filename));
            $image_resize->save($path);
        }

        $post = new Post;

        $post->pic = $filename;

        $post->title = $request->title;
        $post->abstract = $request->abstract;
        $post->description = $request->description;

        $post->status = $request->status == "on";

        $post->save();

        return redirect('admin\post')->with('success', 'Information has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $menu = 'posts';
        $post = Post::find($id);
        return view('admin.posts.edit', compact('post', 'id',  'menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $post = Post::find($id);;

        if ($request->hasFile('pic')) {

            $file = $request->file('pic');
            $image_resize = ImageManagerStatic::make($file->getRealPath());
            $image_resize->resize(800, 600);

            $filename = '/img/posts/' . time() . '_' . $file->getClientOriginalName();
            $filename = str_replace(" ", "", $filename);
            $path = str_replace("index/public/img", "img", public_path($filename));
            $image_resize->save($path);

            if ($post->pic != '' && file_exists(public_path($post->pic))) {
                unlink(public_path($post->pic));
            }
            $post->pic = $filename;
        }

        $post->title = $request->title;
        $post->abstract = $request->abstract;
        $post->description = $request->description;

        $post->status = $request->status == "on";

        $post->save();

        return redirect('admin\post')->with('success', 'Information has been modified');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post = Post::find($id);;

        if ($post->pic != '' && file_exists(public_path($post->pic))) {
            unlink(public_path($post->pic));
        }

        $post->delete();
        return redirect('admin\post')->with('success', 'Information has been Removed');
    }
}
