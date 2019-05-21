<?php

namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{

        public function index() {
          $articles = DB::table('articles')->orderBy('rank')->Paginate(5); // för att få ut endast 5 åt gången när man ska edit
      return view('articleList', [
          'articles' => $articles
      ]);
    }

      public function basketball() {
        $articles = DB::table('articles')->where('category', 'Basketball')->orderby('rank')->get();
            return view('articleList', [
                'articles' => $articles
            ]);
          }

          public function football() {
            $articles = DB::table('articles')->where('category', 'Football')->orderby('rank')->get();
                return view('articleList', [
                    'articles' => $articles
                ]);
              }

              public function baseball() {
                $articles = DB::table('articles')->where('category', 'Baseball')->orderby('rank')->get();
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
        return view('addArticle');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $this->validate($request, [
          'title'  => 'required|unique:articles|max:200',
          'category'  =>   'required|numeric'
        ]);

        Article::create($request->all());
        return redirect('article');
        }

    /**
     * Display the specified resource.

     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $article = article::finde($id);
        return view('article.edit')->with('article', $article);
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
        DB::table('user')
            ->where('id', 1)
            ->update(['userLevel' => 10]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        DB::table('title')->where('id', '>', 100)->delete();

    }
}
