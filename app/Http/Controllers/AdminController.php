<?php


namespace App\Http\Controllers;
Session();
use Illuminate\Support\Facades\Gate;
use DB, Session, Crypt, Hash;


use App\Admin;
use App\Article;
use Illuminate\Http\Request;

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
        $articles = Article::paginate(10); 
        return view('layouts.private', [
            'articles' => $articles
        ]);
      
        if (Gate::allows('adminonly', auth()->user())) {
            return view('layouts.private');
        }
        return 'You are not admin!!!!';
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
    public function edit(article $article) 
    {
        $article = Article::find($id);
        return view('edit')->with('article', $article);
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
        $article = Article::find($id);
        return view('create')->with('article', $article);
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
            return redirect('private')->with('status', 'Article deleted!');
    }
}

