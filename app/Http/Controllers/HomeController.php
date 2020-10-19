<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Needy;
use App\Contributor;

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
        $users = User::whereNotNull('password')->get();
        $donation = Needy::where('donation_status',1)->get();

        return view('home')->with('needies', Needy::where('admin_approval',0)->get())
                            ->with('needy', Needy::all())
                           ->with('contributors', Contributor::all())
                           ->with('donation',$donation) 
                            ->with('users',$users);


       
    }
}
