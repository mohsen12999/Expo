<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Package;
use App\User;
use App\UserCategory;
use App\UserPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic;
use Carbon\Carbon;



class ProfileController extends Controller
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
        $menu = 'profile';
        $user = Auth::user();
        $presenters = User::where('id', '!=', $user->id)->get();

        return view('admin.profile', compact('user', 'presenters', 'menu'));
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
        $user_id = Auth::user()->id;
        $user = User::find($user_id);


        if ($request->hasFile('pic')) {
            $file = $request->file('pic');

            $image_resize = ImageManagerStatic::make($file->getRealPath());
            $image_resize->resize(160, 160);

            $filename = '/img/avatars/' . time() . '_' . $file->getClientOriginalName();
            $path = str_replace("index/public/img", "img", public_path($filename));
            $image_resize->save($path);
            if ($request->avatar != null && $request->avatar != '' && file_exists(public_path($filename))) {
                unlink(public_path($filename));
            }
            $user->avatar = $filename;
        }

        if ($request->name != null && $request->name != '') {
            $user->name = $request->name;
        }

        if ($request->mobile != null && $request->mobile != '') {
            $user->mobile = $request->mobile;
        }

        if ($request->tel != null && $request->tel != '') {
            $user->tel = $request->tel;
        }

        if ($request->address != null && $request->address != '') {
            $user->address = $request->address;
        }

        if ($request->country != null && $request->country != '') {
            $user->country = $request->country;
        }

        if ($request->presenter != null && $request->presenter != '') {
            $user->presenter = $request->presenter;
        }

        $user->color = $request->color;

        $user->save();
        return redirect('admin\profile')->with('success', 'Information has been added');
    }

    public function yourCategory()
    {
        //
        $menu = 'my_category';
        $user_id = Auth::user()->id;
        $userCategories = UserCategory::with(['category', 'package'])->where('user_id', $user_id)->get();

        return view('admin.user_categories.index', compact('userCategories', 'menu'));
    }

    public function choosePackage(Request $request)
    {
        $menu = 'my_category';
        $user_id = Auth::user()->id;
        $userPackages = UserPackage::with('package')->where([['user_id', $user_id], ['status', 0]])->get();
        return view('admin.user_categories.choose_package', compact('userPackages', 'menu'));
    }

    public function chooseCategory(Request $request)
    {
        //
        $menu = 'my_category';
        $categories = Category::all();
        $package_id = $request->id;
        return view('admin.user_categories.choose_category', compact('categories', 'package_id', 'menu'));
    }

    public function storeCategory(Request $request)
    {
        $user_id = Auth::user()->id;

        $userPackages = UserPackage::find($request->package_id);
        $package = Package::find($userPackages->package_id);
        $userPackages->start = Carbon::now();
        $userPackages->end = Carbon::now()->addMonth($package->duration);
        $userPackages->save();

        $userCategory = new UserCategory;
        $userCategory->user_id = $user_id;
        $userCategory->category_id = $request->id;
        $userCategory->package_id = $request->package_id;
        $userCategory->save();

        $category = Category::find($userCategory->category_id);
        $userPackages->item_id = $userCategory->id;
        $userPackages->item_id = $category->title;
        $userPackages->save();

        return redirect("/admin/user-category")->with('success', 'Information has been added');
    }

    // public function boughtCategoryBank(Request $request)
    // {
    //     //
    //     $menu = 'my_category';
    //     $category = Category::find($request->id);
    //     $price = $category->price;
    //     $user_package = UserPackage::find($request->package_id);
    //     return view('admin.user_categories.bank_page', compact('category', 'price', 'menu'));
    // }

    // public function boughtCategory(Request $request)
    // {
    //     //
    //     $category = Category::find($request->id);

    //     $menu = 'my_category';
    //     $user_id = Auth::user()->id;

    //     $userCategory = new UserCategory;
    //     $userCategory->user_id = $user_id;
    //     $userCategory->category_id = $request->id;
    //     $userCategory->start = Carbon::now();
    //     $userCategory->end = Carbon::now()->addMonth($category->duration);
    //     $userCategory->save();

    //     $invoice = new Invoice;

    //     $invoice->title = 'Buy Category ' . $category->title;
    //     $invoice->description = 'Buy package ' . $category->title . ' with ' . $category->price;
    //     $invoice->price = $category->price;
    //     $invoice->bankName = 'Test bank';
    //     $invoice->bankCode = 'Test bank code';

    //     $invoice->type = 0;
    //     $invoice->status = 0;

    //     $invoice->user_id = Auth::user()->id;

    //     $invoice->save();

    //     return view('admin.user_categories.bought_category', compact('userCategory', 'menu'));
    // }
}
