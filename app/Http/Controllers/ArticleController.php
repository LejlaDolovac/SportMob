<?php

namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
      public function index() {
      $articles = DB::table('articles')->orderby('rank')->get();
          return view('articleList', [
              'articles' => $articles
          ]);
        }

      public function basketball() {
        $articles = DB::table('articles')->where('category', 'Basketball')->get();
            return view('articleList', [
                'articles' => $articles
            ]);
          }

          public function football() {
            $articles = DB::table('articles')->where('category', 'Football')->get();
                return view('articleList', [
                    'articles' => $articles
                ]);
              }

              public function baseball() {
                $articles = DB::table('articles')->where('category', 'Baseball')->get();
                    return view('articleList', [
                        'articles' => $articles
                    ]);
                  }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('addArticle')
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {

    $article = Article::find($id);
      return view('singleArticle', [
          'article' => $article
      ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
