<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Counter;
use App\Expo;
use App\Http\Controllers\Controller;
use App\Invoice;
use App\Message;
use App\Package;
use App\Ticket;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home');
        $menu = 'admin';

        $expo_count = Expo::count();
        $category_count = Category::count();
        $package_count = Package::count();
        $User_count = User::count();
        $invoice_count = Invoice::count();
        $ticket_count = Ticket::where('status', "<", '3')->count();

        return view('admin.admin', compact('expo_count', 'category_count', 'package_count', 'User_count', 'invoice_count', 'ticket_count', 'menu'));
    }

    public function users()
    {
        //
        $menu = 'users';
        $users = User::all();
        $user_id = Auth::user()->id;

        return view('admin.users', compact('users', 'user_id', 'menu'));
    }

    public function deleteUsers($id)
    {
        //
        $user = User::find($id);

        if ($user->avatar != '' && file_exists(public_path($user->avatar))) {
            unlink(public_path($user->avatar));
        }

        $user->delete();
        return redirect('admin\users')->with('success', 'User has been Removed');
    }

    public function invoices()
    {
        //
        $menu = 'invoices';
        $invoices = Invoice::with('user')->get();
        $expo_invoices = $invoices->where('type', 1);
        $cat_invoices = $invoices->where('type', 0);

        return view('admin.invoices', compact('invoices', 'menu', 'expo_invoices', 'cat_invoices'));
    }

    public function categories()
    {
        //
        $menu = 'categories';
        $categories = Category::all();

        return view('admin.categories.index', compact('categories', 'menu'));
    }

    public function tickets()
    {
        $menu = 'tickets';
        $tickets = Ticket::orderBy('id', 'desc')->get();
        $open_tickets = $tickets->where('status', '<', 3);
        $close_tickets = $tickets->where('status', '=', 3);

        return view('admin.tickets.tickets', compact('tickets', 'menu', 'open_tickets', 'close_tickets'));
    }

    public function closeTicket(Request $request, $id)
    {
        $ticket = Ticket::find($id);
        $ticket->status = 3; // close ticket
        $ticket->save();

        return redirect('admin\tickets')->with('success', 'Ticket Closed');
    }

    public function answerTicket($id)
    {
        $menu = 'tickets';
        $ticket = Ticket::with('messages')->find($id);

        return view('admin.tickets.answer', compact('ticket', 'menu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function answeringTicket(Request $request, $id)
    {
        $user = Auth::user();
        // store the answer
        $ticket = Ticket::find($id);

        $message = new Message;

        $message->title = $request->title;
        $message->description = $request->description;

        $message->type = 0;
        $message->status = 0;

        $message->file = '';
        if ($request->hasFile('attachment')) {
            $file = $request->file('attachment');
            $file_type = $file->getMimeType();
            $file_type_kind = explode('/', $file_type)[0];
            if ($file_type_kind == 'video' || $file_type_kind = "image" || $file_type_kind = 'application' || $file_type_kind = 'text') {
                $filename = time() . "_" . $file->getClientOriginalName();
                $filename = str_replace(" ", "", $filename);
                $file->move(str_replace("index/public/img", "img", public_path("/img/tickets/")), $filename);
                $message->file = "/img/tickets/" . $filename;
            }
        }

        $message->ticket_id = $ticket->id;
        $message->sender_id = $user->id;
        $message->save();

        $ticket->receiver_id = Auth::user()->id;
        $ticket->status = 1;
        $ticket->save();

        return redirect('admin\tickets')->with('success', 'Ticket has been saved');
    }

    public function counter()
    {
        //
        $menu = 'counter';
        $counter = Counter::first();
        if (!$counter) {
            $counter = new Counter;
        }
        $expos = Expo::all();

        return view('admin.counter', compact('counter',  'expos', 'menu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateCounter(Request $request, $id)
    {

        // store the answer
        $counter = Counter::find($id);
        if (!$counter) {
            $counter = new Counter;
        }

        $counter->title = $request->title;
        $counter->description = $request->description;
        $counter->launch_day = $request->launch_day;
        $counter->expo_id = $request->expo_id;

        if ($counter->launch_day == null || $counter->launch_day == '') {
            $expo = Expo::find($request->expo_id);
            if ($expo) {
                if ($expo->type == 0 && $expo->start) {
                    $counter->launch_day = $expo->start;
                }
            }
        }

        $counter->status = $request->status == "on";

        $counter->save();

        return redirect('admin\counter')->with('success', 'Information has been saved');
    }
}
