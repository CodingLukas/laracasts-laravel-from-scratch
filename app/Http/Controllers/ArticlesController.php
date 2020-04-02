<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Tag;

class ArticlesController extends Controller
{
    public function index()
    {
        if (request('tag')) {
            $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;
        } else {
            $articles = Article::latest()->get();
        }
        return view('articles.index', ['articles' => $articles]);
    }

    public function show(Article $article)
    {
        return view('articles.show', ['article' => $article]);
    }


    public function create()
    {
        return view('articles.create', [
            'tags' => Tag::all()
        ]);
    }

    public function store()
    {
        $article = new Article(request(['title', 'excerpt', 'body']));
        $article->user_id = 1; // auth()->id()
        $article->save();

        if (request()->has('tags'))
            $article->tags()->attach(\request('tags'));

        return redirect(route('articles.index'));
    }

    public function edit(Article $article)
    {
        // find the articles associated with the id
        return view('articles.edit', compact('article'));
    }

    public function update(Article $article)
    {
        $article::update($this->validateArticle());

        return redirect($article->path());
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
            'tags' => 'exists:tags,id'
        ]);
    }
}
