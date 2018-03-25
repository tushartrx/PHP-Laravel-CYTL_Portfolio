<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sitename;
use App\Home;
use App\Ourservice;
use App\AmazingLeft;
class FontendController extends Controller
{
    public function index()
    {
        return view('fontend.master')
            ->with('SiteName',Sitename::get())
            ->with('Home',Home::get())
            ->with('ourservice',Ourservice::get())
            ->with('amazingLeft',AmazingLeft::get());
    }
}
