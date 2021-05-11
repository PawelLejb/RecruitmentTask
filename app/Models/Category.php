<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'created_at',
        'updated_at'
    ];



    public function posts(){
        return $this->belongsToMany(Post::class,'posts_has_categories','categories_id','posts_id')->withTimestamps();
    }
}
