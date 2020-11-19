<?php

namespace App\Http\Controllers\ProductManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Times;
use App\Tickets;
use App\UserTickets;
use App\User;
use App\UserBalance;
use DB;

class TicketController extends Controller
{
    function __construct()
    {
        // $this->middleware('permission:role-list|role-create|role-edit|role-delete', ['only' => ['index','store']]);
        // $this->middleware('permission:role-create', ['only' => ['create','store']]);
        // $this->middleware('permission:role-edit', ['only' => ['edit','update']]);
        // $this->middleware('permission:role-delete', ['only' => ['destroy']]);
    }
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tickets = Tickets::orderBy('id','DESC')->paginate(5);
        return view('tickets.index',compact('tickets'))->with('i', ($request->input('page', 1)-1) * 5);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $times = Times::latest()->first();
        return view('tickets.create',compact('times'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $times_id = Times::latest()->first()->id;
        $this->validate($request, [
            'name' => [
                'required',
                Rule::unique('tickets')->where(function($query) {
                  $query->where('times', '<>', $times_id);
    })
   ],
        ]);
        $tickets = Tickets::create(['name' => $request->input('name'),
                                    'owner'=> Auth::user()->id,
                                    'times_id' => $request->input('times_id'),
                                    'status'=>'1']);

        return redirect()->route('tickets.index')->with('success','tickets created successfully');
    }

    public function multicreate(Request $request)
    {
        $times = Times::latest()->first();
        return view('tickets.multicreate',compact('times'));
    }

    public function multistore(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:tickets,name',
        ]);
        $tickets = Tickets::create(['name' => $request->input('name'),
                                    'owner'=> Auth::user()->id,
                                    'times_id' => $request->input('times_id'),
                                    'status'=>'1']);

        return redirect()->route('tickets.index')->with('success','tickets created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ticket = Tickets::find($id);
        return view('tickets.show',compact('ticket'));
    }

    public function edit($id)
    {
        $ticket = Tickets::find($id);
        return view('tickets.edit',compact('ticket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      
        $this->validate($request, [
            'name' => 'required',
        ]);

        $ticket = Tickets::find($id);
        $ticket->name = $request->input('name');
        $ticket->save();

        return redirect()->route('tickets.index')->with('success','tickets updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tickets')->where('id',$id)->delete();
        return redirect()->route('tickets.index')->with('success','tickets deleted successfully');
    }

    public function showSearchView()
    {
        $tickets = Tickets::orderBy('status','ASC')->paginate(30);
        $ticket_no = null;
        return view('tickets.searchView',compact('tickets','ticket_no'));
    }

    public function showcheckView()
    {
        $tickets = null;
        $ticket_no = null;
        return view('tickets.checkView',compact('tickets','ticket_no'));
    }

    public function advancedSearchView()
    {
        $tickets = null;
        $ticket_no = null;
        return view('tickets.advancedSearchView',compact('tickets','ticket_no'));
    }


    public function search(Request $request)
    {
        $tickets = null;
        $ticket_no = null;
        if($request->input("ticket_no"))
        {
            $ticket_no = $request->input("ticket_no");
            $tickets = Tickets::where('name','Like','%'.$ticket_no.'%')
                    ->orderby('status','asc')->paginate(20);
        }else
        {
            $tickets = Tickets::orderby('status','asc')->paginate(20);
        }
        return view('tickets.searchView',compact('tickets','ticket_no'));
    }

    public function buyticket($id)
    {
        $ticket = Tickets::where('status',1)->where('id',$id)->first();
        if($ticket){
            $ticket_name = $ticket->name;
            $ticket_price = 1000;
            $ticketId = $ticket->id;
            $userId = Auth::user()->id;
            $userbalance = Auth::user()->balance;
            if($userbalance >= $ticket_price){
                $tickets = UserTickets::create(['user_id' => $userId,
                'ticket_id'=> $ticketId]);
                $ticket = Tickets::find($id);
                $ticket->status = 2;
                $ticket->save();

                $user = User::find($userId);
                $input['balance'] = $userbalance - $ticket_price;
                $user->update($input);

                $balance['user_id'] = $user->id;
                $balance['amount'] = $ticket_price;
                $balance['operation'] = 'Buy Ticket'.$ticket_name;
                $balance['operator'] =$user->id;

                $user = UserBalance::create($balance);


                return response()->json(["response_code" => 200,"ticket_name" => $ticket->name]);
            }
            else{
                return response()->json(["response_code" => 300]);
            }
            
        }
        else{
            return response()->json(["response_code" => 400]);
        }
      
        // return redirect()->route('welcome')->with('success','tickets created successfully');  
    }


    public function ticketStatus(Request $request)
    {
        return 'aa';
        $userId = Auth::user()->id;
        $tickets = Tickets::Join('user_ticket','user_ticket.ticket_id','tickets.id')->where('user_ticket.user_id',$userId)
        ->paginate(5);
        return view('tickets.mytickets',compact('tickets'))->with('i', ($request->input('page', 1)-1) * 5);

    }
}
