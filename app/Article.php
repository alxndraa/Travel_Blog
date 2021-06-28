<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function categories(){
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function users(){
       return $this->belongsTo(User::class, 'user_id'); 
    }
    protected $fillable = [
        'title', 'category_id', 'user_id', 'image', 'description'
    ];
}