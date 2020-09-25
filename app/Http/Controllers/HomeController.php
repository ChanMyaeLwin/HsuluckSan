<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;
use App\User;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function profile()
    {       
        return view('auth.profile');
    }

    public function changePassword(Request $request)
    {       
        $this->validate($request, [
            'password' => 'required',
            'new_password' => 'same:confirm-password',
        ]);
        $id = Auth::user()->id;
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $user = User::find($id);
        $user->update($input);

        return view('auth.profile');
    }
}
