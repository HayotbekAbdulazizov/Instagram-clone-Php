<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User;
use \App\Models\Post;
use \App\Models\Profile;
use Intervention\Image\Facades\Image;



class PostsController extends Controller{

    public function __construct(){
        $this->middleware('auth');
    }


    public function index(){
        $users = auth()->user()->following()->pluck('profiles.user_id');
        $posts = Post::whereIn('user_id', $users)->with('user')->latest()->paginate(1);        
        return view('posts.index', compact('posts'));
    }



    public function show(Post $post){
        return view('posts.show', compact('post'));
    }



    ### Following Post.create method just return form for creating new Post
    public function create(){
        return view('posts.create');
    }



    ##   Post.store method gets the data got from front end template form: validates and stores as new Post
    public function store(){
        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required','image'],
        ]);
        
        $imagePath = request('image')->store('uploads', 'public');
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
        $image->save();

        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagePath
        ]);

        return redirect('/profile/'. auth()->user()->id);

    }
}
