<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Post extends Model
{
    use HasFactory,SoftDeletes;

    public function category(){
        return $this->belongsTo(Category::class);
    }
    //Question 6
    public static function postCount($id)
    {
        return self::where('category_id',$id)->count();
    }
    //Question 8
    public static function softDeletedPosts()
    {
        return self::onlyTrashed()->get();
    }
}
