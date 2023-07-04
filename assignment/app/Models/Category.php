<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    //Question 11
    public function latestPost()
    {
        $post=Post::with('category')->where('category_id',$this->id)->orderBy('created_at','desc')->first();
        return $post;
    }
}
