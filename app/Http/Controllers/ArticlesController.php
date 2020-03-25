<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->get();
        return view('article.index', ['articles' => $articles]);
    }

    public function show($id)
    {
        $article = Article::find($id);
        return view('article.show', ['article' => $article]);
    }

    public function create()
    {

    }

    public function store()
    {

    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy(){

    }
}
