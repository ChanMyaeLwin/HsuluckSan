<?php

namespace App\Http\Controllers\UserManagement;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//custom Spatie\Permission
use Spatie\Permission\Models\Role;
use App\User;
use App\UserBalance;
use App\UserTickets;
use DB;
use Hash;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::orderBy('id','DESC')->paginate(5);
        return view('users.index',compact('users'))
        ->with('i',($request->input('page', 1)- 1) * 5);
    }

    public function create()
    {
        $roles = Role::pluck('name','name')->all();
        return view('users.create',compact('roles'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);
        $user->assignRole($request->input('roles'));

        return redirect()->route('users.index')->with('success','User created successfully');
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('users.show',compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();

        return view('users.edit',compact('user','roles','userRole'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            //'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);
         
        $input = $request->all();
        
        if(!empty($input['password']) || $input['password'] !== null){
            $input['password'] = Hash::make($input['password']);
        }else{
            unset($input['password']);
        }

        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete();

        $user->assignRole($request->input('roles'));

        return redirect()->route('users.index')->with('success','User updated successfully');
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('users.index')->with('success','User deleted successfully');
    }

    public function addbalance($id)
    {
        $user = User::find($id);
        return view('users.addbalance',compact('user'));
    }

    public function updatebalance(Request $request, $id)
    {
        $this->validate($request, [
            'newbalance' => 'required'
        ]);
         
        $input = $request->all();
        $input['balance'] = $input['balance'] + $input['newbalance'];

        $user = User::find($id);
        $user->update($input);
        
        $balance['user_id'] = $user->id;
        $balance['amount'] = $input['newbalance'];
        $balance['operation'] = 'Add Balance';
        $balance['operator'] = Auth::user()->id;

        $user = UserBalance::create($balance);

        return redirect()->route('users.index')->with('success','User\'s balance updated successfully');
    }


    public function userbalance()
    {
        $balance = Auth::user()->balance;
        return view('users.balance',compact('balance'));
    }

    public function useraccount()
    {
        $user = Auth::user();
        return view('users.account',compact('user'));
    }
    public function usertickets()
    {
        $user = Auth::user();
        $usertickets = UserTickets::where('user_id',$user->id)->with('tickets')->orderby('created_at','desc')->paginate(5);
        return view('users.tickets',compact('user','usertickets'));
    }
}