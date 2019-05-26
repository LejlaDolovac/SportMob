<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Article;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $Basketball = DB::table('articles')->where('category', "Basketbal")->orderBy('created_at', 'desc')->first();
        $Football = DB::table('articles')->where('category', 'Fotbal')->orderBy('created_at', 'desc')->first();
        $Baseball = DB::table('articles')->where('category', 'Baseboll')->orderBy('created_at', 'desc')->first();
        $ranking = DB::table('articles')->orderBy('rank', 'desc')->limit(2)->get();
     
        return view('welcome', compact(['Basketball','Football','Baseball','ranking']));
    }
}
