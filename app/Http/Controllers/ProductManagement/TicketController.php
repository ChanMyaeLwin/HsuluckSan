<?php

namespace App\Http\Controllers\ProductManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tickets;
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
        return view('tickets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:tickets,name',
        ]);
        $tickets = Tickets::create(['name' => $request->input('name'),
                                    'owner'=> '1',
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

    public function search(Request $request)
    {
        $tickets = null;
        if($request->input("ticket_no")){
        $ticket_no = $request->input("ticket_no");
        $tickets = Tickets::where('name','Like','%'.$ticket_no.'%')
                ->where('status',1)->paginate(20);
            }
        return view('result',compact('tickets'));
    }
}
