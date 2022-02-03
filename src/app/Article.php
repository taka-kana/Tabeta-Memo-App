<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title',
        'summary',
        'image',
        'category_id',
        'keyword_id',
        'revue_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function keyword()
    {
        return $this->belongsTo('App\Keyword');
    }
    public function revue()
    {
        return $this->belongsTo('App\Revue');
    }

    public function getRevueNameAttribute()
    {
        return config('revue.'.$this->revue_id);
    }
}
