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

    public function show(Article $article)
    {
        return view('article.show', ['article' => $article]);
    }


    public function create()
    {
        return view('article.create');
    }

    public function store()
    {
        Article::create($this->validateArticle());

        return redirect('/articles');
    }

    public function edit(Article $article)
    {
        // find the article associated with the id
        return view('article.edit', compact('article'));
    }

    public function update(Article $article)
    {
        $article::update($this->validateArticle());

        return redirect('/articles/' . $article->id);
    }

    public function destroy()
    {

    }

    /**
     * @return array
     */
    protected function validateArticle(): array
    {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
        ]);
    }
}
