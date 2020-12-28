<?php

namespace App\Http\Controllers\Admin;

use App\Booth;
use App\Invoice;
use App\UserPackage;
use App\UserExpoPackage;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Ticket;

class DashboardController extends Controller
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

    public function home()
    {
        // return view('home');
        if (Auth::user()->is_admin() == 1) {
            return redirect('admin\admin');
        }
        return redirect('admin\dashboard');
    }

    public function index()
    {
        //
        $menu = 'dashboard';
        $user_id = Auth::user()->id;

        $package_count = UserPackage::where('user_id', $user_id)->count();
        $expo_package_count = UserExpoPackage::where('user_id', $user_id)->count();
        $booth_count = Booth::where('user_id', $user_id)->count();
        $invoice_count = Invoice::where('user_id', $user_id)->count();
        $ticket_count = Ticket::where('sender_id', $user_id)->count();

        return view('admin.dashboard', compact('package_count', 'expo_package_count', 'booth_count', 'invoice_count', 'ticket_count', 'menu'));
    }


    // public function index()
    // {
    //     $menu = 'dashboard';
    //     $user = Auth::user();
    //     $id = Auth::user()->id;
    //     $user_package = User::find($id)->packages();

    //     return view('admin.dashboard', compact('user_package', 'menu'));
    // }

    public function yourInvoices()
    {
        $menu = 'invoice';
        $user = Auth::user();
        $id = Auth::user()->id;
        $invoices = Invoice::where('user_id', $id)->get();

        return view('admin.your_invoices', compact('invoices', 'menu'));
    }
}
