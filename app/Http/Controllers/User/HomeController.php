<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function dashboard()
    {
        if (Auth::user()->level == 'admin') {
            $admins = User::where('level', 'admin')->get();
            $users = User::where('level', 'user')->get();
            return view('admin.User.index', compact('admins', 'users'));
        }
        return view('users.dashboard');
    }

    public function adminDashboard()
    {
        return view('admin.admin-dashboard');
    }

    public function about()
    {
        return view('users.about');
    }
}
