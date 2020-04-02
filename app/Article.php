<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $fillable = ['title', 'excerpt', 'body'];
    protected $guarded = [];

    public function path()
    {
        return route('articles.show', $this);
    }
//    public function getRouteKeyName()
//    {
//        return 'slug'; // Article::where('slug',$articles->first())
//    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id'); // user_id if function named author() will look for author_id
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

}


// an article has many tags
// tag belongs to an article

// Learn Laravel (many to many)
// php, laravel, work, education
