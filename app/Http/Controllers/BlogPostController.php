<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;
use App\Models\Category;
class BlogPostController extends Controller
{
    public function index()
    {
        $posts = BlogPost::latest()->paginate(9);
        // dd($posts)->all();
        return view('blog.index', compact('posts'));
     
       
    }
   
    
    public function show($id)
    {
        $post = BlogPost::findOrFail($id);
        return view('blog.show', compact('post'));
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        echo "<pre>";
        print_r($request->all());
        
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $post = new BlogPost();
        $post->title = $request->title;
        $post->content = $request->content;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads', 'public');
            $post->image = $imagePath;
          
        }

        $post->save();
        // dd($post);

        return redirect()->route('blog.index')->with('success', 'Blog post created successfully.');
    }
    public function search(Request $request)
{
    $query = $request->input('query');
    $posts = BlogPost::where('title', 'LIKE', "%{$query}%")
                     ->orWhere('content', 'LIKE', "%{$query}%")
                     ->paginate(9);
                     

    return view('blog.index', compact('posts'));
   
}
// public function getPostsJson(){
//     $posts = BlogPost::latest()->paginate(9);
//     return response()->json($posts);
// }



}
