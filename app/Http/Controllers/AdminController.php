<?php

namespace App\Http\Controllers;
Session();
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

use App\Admin;
use App\Ad;
use App\Article;
use Illuminate\Http\Request;
use URL;

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
          $articles = DB::table('articles')->orderBy('rank')->Paginate(5); // för att få ut endast 5 åt gången när man ska edit
        $ads = DB::table('ads')->orderby('rank')->get();
            return view('private', [
            'articles' => $articles,
            'ads' => $ads
        ]);


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
        
        $article = Article::find($product);
        return $article;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit( article $article )
    {
        $article = Article::find($article->id);
        return view('layouts.edit')->with('article', $article);
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        Article::destroy($article->id);

            // redirect
            Session::flash('message', 'Successfully deleted the article!' );
            return redirect('/private')->with('status', 'Article deleted!');
    }
}
