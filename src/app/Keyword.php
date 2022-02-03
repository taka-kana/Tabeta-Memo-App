<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
    protected $fillable = [
        'name'
    ];

    public function getLists()
    {
        $keywords = Keyword::orderBy('id','asc')->pluck('name', 'id');
        return $keywords;
    }

    public function articles()
    {
     return $this->hasMany('App\Article');
    }
}
