<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IncomeController extends Controller
{
    public function incomereport(Request $request)
    {
        return 'bb';
        $userId = Auth::user()->id;
        $tickets = Tickets::Join('user_ticket','user_ticket.ticket_id','tickets.id')->where('user_ticket.user_id',$userId)
        ->paginate(5);
        return view('tickets.mytickets',compact('tickets'))->with('i', ($request->input('page', 1)-1) * 5);

    }

    public function balance(Request $request)
    {
        return 'beeb';
        $userId = Auth::user()->id;
        $tickets = Tickets::Join('user_ticket','user_ticket.ticket_id','tickets.id')->where('user_ticket.user_id',$userId)
        ->paginate(5);
        return view('tickets.mytickets',compact('tickets'))->with('i', ($request->input('page', 1)-1) * 5);

    }
}
