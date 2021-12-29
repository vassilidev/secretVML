<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Contracts\View\View;

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
     * @return View
     */
    public function index(): View
    {
        $messages = [
            'today' => Auth::user()->getLastMessage(false),
            'last' => [
                'mate' => Auth::user()->mate->getLastMessage(),
                'self' => Auth::user()->getLastMessage(),
            ]
        ];

        return view('pages.homepage', compact('messages'));
    }
}
