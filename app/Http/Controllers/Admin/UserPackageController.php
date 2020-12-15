<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Invoice;
use App\Package;
use App\UserPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserPackageController extends Controller
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
    public function yourPackage()
    {
        //
        $menu = 'my_package';
        $user_id = Auth::user()->id;
        $userPackages = UserPackage::with('package')->where('user_id', $user_id)->get();

        return view('admin.user_packages.index', compact('userPackages', 'menu'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function buyPackage()
    {
        //
        $menu = 'my_package';
        $packages = Package::all();
        return view('admin.user_packages.buy_package', compact('packages', 'menu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function boughtPackageBank(Request $request)
    {
        //
        $menu = 'my_package';
        $request_id = $request->id;
        $package = Package::find($request->id);
        $price = $package->price;

        return view('admin.user_packages.bank_page', compact('request_id', 'price', 'menu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function boughtPackage(Request $request)
    {
        //
        $menu = 'my_package';
        $userPackage = new UserPackage;

        $userPackage->user_id = Auth::user()->id;
        $userPackage->package_id = $request->id;

        $package = Package::find($request->id);
        $userPackage->title = $package->title;
        $userPackage->description = '';
        $userPackage->start = $package->start ?? null;
        $userPackage->end = $package->end ?? null;
        $userPackage->type = $package->type;
        $userPackage->status = 0;

        $userPackage->save();

        $invoice = new Invoice;

        $invoice->title = 'Buy package ' . $package->title;
        $invoice->description = 'Buy package ' . $package->title . ' with ' . $package->price;
        $invoice->price = $package->price;
        $invoice->bankName = 'Test bank';
        $invoice->bankCode = 'Test bank code';

        $invoice->type = 0;
        $invoice->status = 0;

        $invoice->user_id = Auth::user()->id;
        $invoice->item_id = $userPackage->id;

        $invoice->save();

        $userPackage->invoice_id = $invoice->id;
        $userPackage->save();

        return view('admin.user_packages.bought_package', compact('userPackage', 'menu'));
    }
}
