<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = [
        'name'
    ];

    public function getLists()
    {
        $categories = Category::orderBy('id','asc')->pluck('name', 'id');
        return $categories;
    }

    public function articles()
    {
     return $this->hasMany('App\Article');
    }
}
