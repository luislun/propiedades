<?php

namespace App\Http\Controllers;

class PostsController extends Controller {
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $categories = \App\Models\Category::all();
        $posts      = \App\Models\Post::all();

        return View('posts.home')->with('categories', $categories)->with('posts', $posts);
    }

    public function show($id) { 

    }

    public function create() {
       $categories = \App\Models\Category::lists('category', 'id');
       $post = new \App\Models\Post();

        $data = [
            'categories' => $categories,
            'post'       => $post,
            'url'        => '/post/save',
            'title'      => 'Publicar'
        ];

       return View('posts.create')->with( $data );
    }

    public function save() {
       $post = new \App\Models\Post();
       $post->title = \Input::get('title');
       $post->comment = \Input::get('comment');
       $post->category_id = \Input::get('category_id');
       $post->user_id = \Auth::user()->id;
       $post->save();
       return \Redirect::to('/')->with('notice', 'Se publico tu comentario con exit&oacute;samente.');
    }

    public function edit($id) {
        $categories = \App\Models\Category::lists('category', 'id');
        $post = \App\Models\Post::find($id);
        
        $data = [
            'categories' => $categories,
            'post'       => $post,
            'url'        => '/post/update',
            'title'      => 'Editar publicaci&oacute;n'
        ];

        return View('posts.create')->with( $data );
    }

    public function update() {
        $post = \App\Models\Post::find( \Input::get('id') );
        $post->title = \Input::get('title');
        $post->comment = \Input::get('comment');
        $post->category_id = \Input::get('category_id');
        $post->user_id = \Auth::user()->id;
        $post->save();
        return \Redirect::to('/')->with('notice', 'El post ha sido modificado exit&oacute;samente.');
    }

    public function delete($id) {
        $post = \App\Models\Post::find($id);
        $post->delete();
        return \Redirect::to('/')->with('notice', 'El post ha sido eliminado exit&oacute;samente.');
    }
}
