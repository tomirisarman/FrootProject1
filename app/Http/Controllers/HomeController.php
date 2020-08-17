<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Invoice;

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
        if(Auth::user()->hasAnyRole('admin')){
          return view('admin_board', ['invoices' => Invoice::all()]);
        }elseif (Auth::user()->hasAnyRole('moderator')) {
          return view('moder_board', ['invoices' => Invoice::all()]);
        }elseif (Auth::user()->hasAnyRole('guest')) {
          return view('guest_board', ['invoices' => Invoice::all()]);
        }
        return view('home');
    }

}
