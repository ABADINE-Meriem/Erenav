<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

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
        $user =Auth::user();

        if ($user->isAdmin()) {

            return redirect(route('Rapports.index')); 
        }
        else {
            
            return redirect(route('Rapports.users'));
        }
    }
}
