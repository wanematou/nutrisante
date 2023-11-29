<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
  
        public function index()
    {
        $posts = Post::with('category', 'user')->paginate(6);
        return view ('pages.back-office.posts.index', compact('posts'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $post = new Post();
        $categories= Category::all();
        return view('pages.back-office.posts.create', compact('post' ,'categories' ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( StorePostRequest $request)
    {
        $user_id = 1;
        $post = new Post();

        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->category_id = $request->input('category_id');
        $post->user_id = $user_id; 
        $post->online = $request->input('online');        
        $post->image = $request->input('image');
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time(). '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $fileName);
            $post->image= $fileName;
        }
    
        // Assurez-vous que la propriété $post->image est définie, même si aucun fichier n'a été téléchargé
        $post->image = $fileName ?? null;
    
        $post->save();
    
        return redirect('/dashboard')->with('success', 'Post crée avec succes');
       
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $categories= Category::all();
        return view('pages.back-office.posts.update', compact('post','categories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories= Category::all();
        return view('pages.front-office.details', compact('post','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $user_id = 1;
        $id=$post->id;
        
        $post = Post::Find($id);
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->category_id = $request->input('category_id');
        $post->user_id = $user_id; 
        $post->online = $request->has('online') ? 1 : 0;        
        $post->image = $request->input('image');
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time(). '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $fileName);
            $post->image= $fileName;
        }
    
        // Assurez-vous que la propriété $post->image est définie, même si aucun fichier n'a été téléchargé
        $post->image = $fileName ?? null;
    
        $post->save();
    
        return redirect('/dashboard')->with('success', 'Post modifié avec succes'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/dashboard')->with('success', 'Post supprimer avec succes'); 
    }

    public function search(StorePostRequest $request)
{
    $query = $request->input('query');

    $posts = Post::where('title', 'like', "%$query%")
                  ->orWhere('content', 'like', "%$query%")
                  ->orWhere('category_id', 'like', "%$query%")
                  ->get();

    return view('posts.index', compact('posts'));
}

public function article()
{
    $posts = Post::with('category', 'user')->paginate(6);
    return view ('pages.front-office.blog', compact('posts'));;
}
    
}
