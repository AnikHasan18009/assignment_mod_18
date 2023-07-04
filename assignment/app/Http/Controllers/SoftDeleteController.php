<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class SoftDeleteController extends Controller
{
    public function deleteById(Request $request,$id)
    {
        $post=Post::find($id);
        if(!empty($post))
        {
            $post->delete();
            return "post deleted";
        }
        else
        return "post not found";
        
    }

    public function getSoftDeletedPosts(Request $request)
    {
      
        return Post::softDeletedPosts();
        
    }
}
