<?php

namespace App\Http\Controllers;

use App\Rating;
use App\Article;
use App\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $articles = Article::all();
        return view('articles.index',['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('articles.create',['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:40',
            'category' => 'required',
            'description' => 'required|max:250',
            'price' => 'required|numeric|max:999999',
            'quantity' => 'required|numeric|max:999999'
        ]);
        $article = new Article();
        $article->name = $request->name;
        $article->description =$request->description;
        $article->price = $request->price;
        $article->quantity = $request->quantity;
        $article->category_id = $request->category;
        $article->save();
        $type_picture = 'articles';
        $picture=\App\Picture::store($request, $article->id, $type_picture);        
        return redirect('articles/'.$article->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($article)
    {
        $article = Article::findOrFail($article);
        $rate = "0";
        if ($article->ratings != null) {  
            $sum = $article->ratings->sum('rating');
            $rate = $sum/$article->ratings->count();
        }
 return view('articles.show',['article' => $article,'rate'=>$rate]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit($article)
    {
        $article = Article::findOrFail($article);
        return view('articles.edit',['article' => $article]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$article)
    {       
         $request->validate([
        'name' => 'required|max:40',
        'category' => 'required',
        'description' => 'required|max:250',
        'price' => 'required|numeric|max:999999',
        'quantity' => 'required|numeric|max:999999'
    ]);

        $article = Article::findOrFail($article);
        $article->name = $request->name;
        $article->description = $request->description;
        $article->price = $request->price;
        $article->quantity = $request->quantity;
        $article->category_id = $request->category;
        $article->save();
        return redirect('article.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy($article)
    {
        $article = Article::findOrFail($article);
        $article->delete();
        return back();
    }
}
