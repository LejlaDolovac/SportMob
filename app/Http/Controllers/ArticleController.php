<?php

namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Ad;
use Illuminate\Support\Facades\Input;
//use DB, Session, Crypt, Hash;
use validator;

class ArticleController extends Controller
{

  public function ad() {
    $ads = DB::table('ads')->orderby('rank')->get();
        return view('articleList', [
            'ads' => $ads
        ]);
}


      public function basketball() {
        $articles = DB::table('articles')->where('category', 'Basketball')->orderby('rank')->Paginate(5);
        $ads = DB::table('ads')->orderby('rank')->get();
        return view('articleList', [
          'articles' => $articles,
          'ads' => $ads
                ]);
              }

              public function index() {
                $articles = DB::table('articles')->orderBy('rank')->Paginate(5); // för att få ut endast 5 åt gången när man ska edit
                $ads = DB::table('ads')->orderby('rank')->get();
              return view('articleList', [
              'articles' => $articles,
              'ads' => $ads
            ]);
    }

          public function football() {
            $articles = DB::table('articles')->where('category', 'Football')->orderby('rank')->Paginate(5);
            $ads = DB::table('ads')->orderby('rank')->get();
          return view('articleList', [
          'articles' => $articles,
          'ads' => $ads
                ]);
              }

              public function baseball() {
                $articles = DB::table('articles')->where('category', 'Baseball')->orderby('rank')->Paginate(5);
                $ads = DB::table('ads')->orderby('rank')->get();
              return view('articleList', [
              'articles' => $articles,
              'ads' => $ads
                    ]);
                  }

                  public function getArticle($id) {
                    $article = Article::where('id', $id)->first();
                  return view('article.article', [
                  'article' => $article
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
    public function edit( article $article)
   {

       $article = Article::find($article->id);
       return view('private', [
           'article' => $article
       ]);

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
        $article = Article::find($article->id);
        $article->text = Input::get('text');
        $article->title = Input::get('title');
        $article->save();
        return redirect('articles');


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
