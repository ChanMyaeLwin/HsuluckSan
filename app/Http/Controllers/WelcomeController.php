<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tickets;

class WelcomeController extends Controller
{
    public function index()
    {
        $tickets = Tickets::where('status',1)->get();
        if(!$tickets->isEmpty())
            $tickets = $tickets->random(3);
        else
            $tickets = null;
        return view('welcome',compact('tickets'));
    }
}
