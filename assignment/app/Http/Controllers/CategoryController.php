<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function getPostByCategory(Request $request,$id)
    {
        if(!empty(Category::find($id))){
        $category= Category::with('posts')->where('id',$id)->get();
        $posts=$category[0]->posts;
        if(count($posts)===0)
        return "No posts for this category.";
        else
        return $posts;
        }
        else
        return "Category doesnt exist.";
    }

    function getLatestPostByCategory(Request $request)
    {
        $categories=Category::get();
        return view('latest-posts',compact('categories'));

    }
}
