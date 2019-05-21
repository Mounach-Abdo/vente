<?php

namespace App\Http\Controllers;

use App\Rating;
use App\Article;
use App\Brand;
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
        return view('articles.index',[
            'articles' => $articles]);
    }

    public function search( Request $request) {
        $request->validate([
            's' => 'required'
        ]);
        $s= $request->s;
        $filteredProducts = Article::where('name', 'like', '%' . $s . '%')
                                ->orWhere('description', 'like', '%' . $s . '%')->get();
        if ($filteredProducts->count()) {
            return view('articles.index')->with([
                'articles' =>  $filteredProducts
            ]);
        } else {
            
            return redirect('/articles')->with([
                'status' => 'search failed , please try again'
            ]);
        }
        
    }
    
    public function showmenu()
    {
        return view('staff.menu');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('articles.create',[
            'categories' => $categories,
            'brands'=>$brands,
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $article = new Article();
        $article->name = $request->name;
        $article->description =$request->description;
        $article->price = $request->price;
        $article->quantity = $request->quantity;
        $article->category_id = $request->category;
        $article->brand_id = $request->brand;
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
        $rate = $article->ratings->avg('rating');
        $rate = round($rate,2);
        return view('articles.show',[
            'article' => $article,
            'rate'=>$rate]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        $brands=Brand::all();
        $categories=Category::all();
        return view('articles.edit',[
            'article' => $article,
            'categories'=>$categories,
            'brands'=>$brands
            ]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function showeditpage()
    {
        return view('articles.editing');
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
        'name' => 'required|max:80',
        'description' => 'required|max:250',
        'price' => 'required|numeric|max:999999969999',
        'quantity' => 'required|numeric|max:999999999'
    ]);

        $article = Article::findOrFail($article);
        $article->name = $request->name;
        $article->description = $request->description;
        $article->price = $request->price;
        $article->quantity = $request->quantity;
        $article->category_id = $request->category;
        $article->brand_id = $request->brand;
        $article->save();
        if($request->hasFile('img')){
            $type_picture = 'articles';
            $picture=\App\Picture::store($request, $article->id, $type_picture);  

            $type_picture = 'articles';
        $picture=\App\Picture::store($request, $article->id, $type_picture);        
        return redirect('articles/'.$article->id);
        }
        return redirect('articles');
        
    }

    public function showtrash()
    {
        $articles = Article::onlyTrashed()->get();
        return view('articles.trash',[
            'articles' => $articles,
        ]);
        
    }
    public function restore($id)
    {
        Article::onlyTrashed()->find($id)->restore();
        return back();
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
        return redirect('articles/');
    }
}
