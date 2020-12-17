<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Message;
use App\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $menu = 'tickets';
        $tickets = Ticket::where('sender_id', Auth::user()->id)->orderBy('id', 'desc')->get();

        return view('admin.tickets.index', compact('tickets', 'menu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $menu = 'tickets';
        return view('admin.tickets.create', compact('menu'));
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
        $user = Auth::user();

        $ticket = new Ticket;

        $ticket->title = $request->title;
        $ticket->description = $request->description;
        $ticket->name = $user->name;
        $ticket->email = $user->email;

        $ticket->type = $request->type;
        $ticket->status = 0;
        $ticket->sender_id = $user->id;

        $ticket->save();

        $message = new Message;

        $message->title = $request->title;
        $message->description = $request->description;

        $message->type = 0;
        $message->status = 0;

        $message->sender_id = $user->id;

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
        $message->save();

        return redirect('admin\ticket')->with('success', 'Information has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $menu = 'tickets';
        $ticket = Ticket::find($id);
        $messages = Message::with('sender')->where('ticket_id', $id)->get();

        return view('admin.tickets.ask', compact('ticket', 'messages', 'menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $user_id = Auth::user()->id;
        $ticket = Ticket::find($id);
        if ($ticket->sender_id == $user_id) {
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
            $message->sender_id = $user_id;
            $message->save();

            $ticket->status = 2;
            $ticket->save();
        }

        return redirect('admin\ticket')->with('success', 'Information has been added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $ticket = Ticket::find($id);
        $ticket->status = 3; // close ticket
        $ticket->save();

        return redirect('admin\ticket')->with('success', 'Ticket Closed');
    }
}
