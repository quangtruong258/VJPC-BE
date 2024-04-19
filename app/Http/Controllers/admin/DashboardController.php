<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $template = 'admin.dashboard.home.index';
        $user = auth()->user();
        //dd($user);
        return view ('admin.dashboard.layout',compact('template','user'));
    }
}
