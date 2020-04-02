<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class); // select * from users where project_id = Project.id
    }

    // hasOne
    // hasMany
    // belongsTo
    // belongsToMany
    // morphMany
    // morphToMany

}
