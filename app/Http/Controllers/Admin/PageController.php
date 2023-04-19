<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Helpers
use Illuminate\Support\Facades\Auth;


class PageController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        return view('admin.dashboard', compact('user'));

        // VERSION 2
        
        // $user = Auth::user();
        // $restaurant = $user->restaurant;
        // return view('admin.dashboard', compact('restaurant','user'));
    }
}
