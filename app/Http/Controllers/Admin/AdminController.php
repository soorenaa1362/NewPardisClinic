<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Provider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }


    public function users()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }


    public function providers()
    {
        $providers = Provider::all();
        return view('admin.providers.index', compact('providers'));
    }
}
