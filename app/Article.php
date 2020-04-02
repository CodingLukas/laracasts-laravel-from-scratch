<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $fillable = ['title', 'excerpt', 'body'];
    protected $guarded = [];

    public function path(){
        return route('articles.show', $this);
    }
//    public function getRouteKeyName()
//    {
//        return 'slug'; // Article::where('slug',$articles->first())
//    }

        public function user(){
            return $this->belongsTo(User::class, 'user_id'); // user_id if function named author() will look for author_id
        }
}
