<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
     
        $posts = $category->blogPosts()->paginate(9);

        return view('categories.show', compact('category', 'posts'));
    }
}
