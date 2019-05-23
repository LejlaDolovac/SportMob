<?php

namespace App\Http\Controllers;
use App\Article;
use validator; // måste jag installera ?
 use DB, Session, Crypt, Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
  public function index() {
        $articles = Article::all(); // för att få ut endast tex 5 åt gången anvönd paginate(5)
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
        return view('articleList'); // addArticle a
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        /*
        $this->validate($request, [
          'title'  => 'required|unique:articles|max:200',
          'category'  =>   'required|numeric'
        ]);
        
        Article::create($request->all());
        return redirect('article');
        }
*/
        
        $rules = array(
            'name'    =>'required',
        );
        $validator = Validator::make(Input::all(), $rules);

        $this->validate($request, [
            'name' => 'required'
        ]);

        if($validator => fails()) {
            return redirect('layouts/create')
                     ->withErrors($validator)
                     ->withInput();
        }else {
            
            $article = new Article;
            $article->title    =Input::get('name');
            $article->visible   =''; //  vilken categori den ska till
            $article->save();

            //redirect
            session::flash('message', 'Successfully created article!');
           return redirect('articleList');


        }
    }
        
    /**
     * Display the specified resource.
     
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
    public function update(Request $request, Article $article) // id
    {
        /*
        DB::table('article')
            ->where('id', 1)
            ->update(['articleList' => 10]);
       */
    
     
        $rules = array(
            'name'    =>'required',
        );
        $validator = Validator::make(Input::all(), $rules);

        $this->validate($request, [
            'name' => 'required'
        ]);

        if($validator::fails()){
            return redirect('layouts/create')
                     ->withErrors($validator)
                     ->withInput();
        }else {
            // store
            $article = Article::find($id);
            $article->title    =Input::get('title');
            $article->visible   =''; // 1 vilken categori den ska till
            $article->save();

            //redirect
            session::flash('message', 'Successfully created article!');
           return redirect('edit')->with('status', 'Article created!'); // admin/categorys 


        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {

        $article = Article::find($id);
            $article->delete();

            // redirect
            Session::flash('message', 'Successfully deleted the article!' );
            return redirect('private')->with('status', 'Article deleted!');



    }
}
