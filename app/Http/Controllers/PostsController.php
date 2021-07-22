<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{

//INDEX
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::all();
        return view('posts.index', compact('posts'));

    }


//CREATE
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create'); //La vista está en posts\create.blade.php
    }


//STORE
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Método para almacenar la información en la base de datos

    //MOSTRAR POR PANTALLA
        // //Mostrar por pantalla toda la información recibida
        // return $request->all();

        // //Mostrar por pantalla el título obtenido - Forma 1
        // return $request->get('title');
        // //Mostrar por pantalla el título obtenido - Forma 2
        // return $request->title;

    //GUARDAR INFO EN LA DB
        // //Guardar información obtenida en tabla post - Forma 1
        Post::create($request->all());

        //Guardar información obtenida en tabla post - Forma 2
        // $post = new Post;
        // $post->title = $request->title;
        // $post->content = $request->content;
        // $post->user_id = $request->user_id;
        // $post->save();


        return redirect('/posts');

    }


//SHOW
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('posts.show', compact('post'));
    }

//EDIT
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);


        return view('posts.edit',compact('post'));
    }


//UPDATE
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->update($request->all());

        return redirect('/posts');
    }


//DESTROY
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::whereId($id)->delete();

        return redirect('/posts');
    }
}
