<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //
    public function index(Request $request){


    	return view('Home.dashboard');
    }

     public function shop(Request $request){


    	return view('Home.shop');
    }

    public function listView(Request $request){


    	return view('Home.list');
    }

    public function payment(Request $request){


    	return view('Home.payment');
    }
}
