<?php

namespace App\Http\Controllers\BackendManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class DashboardController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:role-list|role-create|role-edit|role-delete', ['only' => ['index','store']]);
        $this->middleware('permission:role-create', ['only' => ['create','store']]);
        $this->middleware('permission:role-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:role-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $roles = Role::orderBy('id','DESC')->paginate(5);
        return view('backend.dashboard',compact('roles'));
    }
}
