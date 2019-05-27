<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\DB;
use App\Admin;
use App\Ad;
use App\Article;
use Illuminate\Http\Request;
use URL;
use validator;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index() {
       $articles = DB::table('articles')->orderBy('rank')->Paginate(5); // för att få ut endast 5 åt gången när man ska edit
       $ads = DB::table('ads')->orderby('rank')->get();
     return view('articleList', [
     'articles' => $articles,
     'ads' => $ads
   ]);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
     public function edit($id)
  {
      $article = Article::find($id);
      return view('private', [
          'article' => $article
      ]);
  }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, $id)
      {
          $article = Article::find($id);
          $article->text = Input::get('text');
          $article->author = Input::get('author');
          $article->save();
          return redirect('articles');
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
