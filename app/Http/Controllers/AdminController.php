<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;

use App\Admin;
use Illuminate\Http\Request;

use App\Ad;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // anvönd denna
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function secret()
    {
        if (Gate::allows('adminonly', auth()->user())) {
            return view('private');
        }
        return 'You are not admin!!!!';
    }

    public function UserSecret()
    {
        if (Gate::allows('subscribers', auth()->user())) {
          $articles = DB::table('articles')->orderBy('rank')->Paginate(5); // för att få ut endast 5 åt gången när man ska edit
          $ads = DB::table('ads')->orderby('rank')->get();
            return view('user', [
            'articles' => $articles,
            'ads' => $ads
        ]);
      }
        return 'You are not inlogged!!!!';
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(admin $admin)
    {
        // skapa PUT
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
