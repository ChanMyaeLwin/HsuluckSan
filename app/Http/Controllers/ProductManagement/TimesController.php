<?php

namespace App\Http\Controllers\ProductManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Times;
use DB;

class TimesController extends Controller
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
        $times = Times::orderBy('id','DESC')->paginate(5);
        return view('times.index',compact('times'))->with('i', ($request->input('page', 1)-1) * 5);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('times.create');
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
            'name' => 'required|unique:times,name',
        ]);

        $times = Times::create(['name' => $request->input('name')]);

        return redirect()->route('times.index')->with('success','Times created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $time = Times::find($id);
        return view('times.show',compact('time'));
    }

    public function edit($id)
    {
        $time = Times::find($id);
        return view('times.edit',compact('time'));
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

        $time = Times::find($id);
        $time->name = $request->input('name');
        $time->save();

        return redirect()->route('times.index')->with('success','Times updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('times')->where('id',$id)->delete();
        return redirect()->route('times.index')->with('success','Times deleted successfully');
    }
}
