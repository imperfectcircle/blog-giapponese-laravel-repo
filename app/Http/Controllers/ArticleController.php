<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->except(['index', 'show']);
    }
    public function index()
    {
        $articles = Article::all();
        return view('home', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $user->articles()->create([
            'title'=>$request->title,
                'image'=>$request->file('image')->store('public/article/image'),
                'body'=>$request->body,
                'author'=>Auth::user()->name,
        ]);
        
        // $article = Article::create(
        //     [
        //         'title'=>$request->title,
        //         'image'=>$request->file('image')->store('public/article/image'),
        //         'body'=>$request->body,
        //         'author'=>Auth::user()->name
        //     ]
        // );
        
        // $article = Article::create(
        //     [
        //         'title'=>$request->title,
        //         'image'=>$request->file('image')->store('public/article/image'),
        //         'body'=>$request->body,
        //         'author'=>Auth::user()->name
        //     ]
        // );
        
        return redirect(route('homepage'))->with('message', Auth::user()->name." Il tuo articolo è stato inserito");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $article->title = $request->title;
        if ($request->file('image')) {
            $article->image = $request->file('image')->store('public/article/image');
        }
        $article->body = $request->body;
        $article->save();
        return redirect(route('homepage'))->with('message', Auth::user()->name." Il tuo articolo è stato modificato");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect(route('homepage'))->with('message', Auth::user()->name." Il tuo articolo è stato eliminato");
    }
    public function userArticle() {
        $articles = Auth::user()->articles()->get();
        //$articles = Article::where('author', Auth::user()->name)->get();
        return view('article.user', compact('articles'));
    }
}
