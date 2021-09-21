<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Http\Requests\CreatePostRequest;

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
        $posts=Post::get();
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
    public function store(CreatePostRequest $request)
    {

        //Método para almacenar la información en la base de datos


    //VALIDAR DATOS CON EL CONTROLADOR

    //     $this->validate($request, [

    //     'title'=>'required|max:50', //Obliga a que el título tenga un valor con máximo 50 caracteres
    //     'content'=>'required',
    //     'user_id'=>'required'

    // ]);


    // // tambien se puede hacer así:
    // $validated = $request->validate([
    //     'title' => 'required|max:50',
    //     'content' => ['required', 'max:50'],
    // ]);




    //MOSTRAR POR PANTALLA
        // //Mostrar por pantalla toda la información recibida
        // return $request->all();

        // //Mostrar por pantalla el título obtenido - Forma 1
        // return $request->get('title');
        // //Mostrar por pantalla el título obtenido - Forma 2
        // return $request->title;

    //GUARDAR INFO EN LA DB
        // //Guardar información obtenida en tabla post - Forma 1
        //Post::create($request->all());

        //Guardar información obtenida en tabla post - Forma 2
        // $post = new Post;
        // $post->title = $request->title;
        // $post->content = $request->content;
        // $post->user_id = $request->user_id;
        // $post->save();


    //OBTENER ARCHIVOS SUBIDOS AL FORM
        //Obtener dirección de la carpeta donde se ha almacenado temporalmente el archivo
            // return $request->file('fileToUpload');
        //Obtener nombre del archivo
            // $file = $request->file('fileToUpload');
            // return $file->getClientOriginalName();
        //Obtener tamaño del archivo
            // $file = $request->file('fileToUpload');
            // return $file->getMaxFilesize();

        //Obtener la extensión del archivo
            // $file = $request->file('fileToUpload');
            // return $file->getClientOriginalExtension();


        //AÑADIR ARCHIVOS A LA BASE DE DATOS
            $input = $request->all();

            if($file = $request->file('nameFile')){
                $name = $file->getClientOriginalName();
                $file->move('FolderName', $name);
                $input['ColumnName'] = $name;
            }

            Post::create($input);





        // return redirect('/posts');

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
        $users = User::all();
        return view('posts.show', compact('post','users'));
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
