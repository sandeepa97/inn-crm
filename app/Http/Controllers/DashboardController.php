<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {

        if(Auth::check()) {
            return view('admin.dashboard');
        }

        return redirect("/user-login")->withSuccess('Opps! You do not have access');
    }
}
