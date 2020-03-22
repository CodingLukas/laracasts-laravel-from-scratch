<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticlesController extends Controller
{
    public function show($id)
    {
        $article = Article::find($id);
        return view('article.show', ['article' => $article]);
    }
}
