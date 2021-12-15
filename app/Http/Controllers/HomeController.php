<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

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
    public function index(): \Illuminate\Contracts\Support\Renderable
    {
        $messages = [
            'today' => Auth::user()->getLastMessage(false),
            'last' => [
                'mate' => Auth::user()->mate->getLastMessage(),
                'self' => Auth::user()->getLastMessage(),
            ]
        ];

        return view('home', compact('messages'));
    }
}
