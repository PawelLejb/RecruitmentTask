<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'id',
        'title',
        'content',
        'created_at',
        'updated_at'
    ];
    use HasFactory;


    public function categories(){
        return $this->belongsToMany(Category::class,'posts_has_categories','posts_id','categories_id')->withTimestamps();

    }
}
