@extends('layouts.app')


@section('content')
<h2>EDIT PAGE</h2>


<form method="post" action="/posts/{{$post->id}}"> {{-- post indica la forma de enviar la información. (Opciones: GET/POST) --}}

    {{-- Token --}}
    @csrf <!-- or {{ csrf_field() }} https://laravel.com/docs/8.x/csrf#csrf-introduction -->

    {{-- Convert into put method --}}
    <input type="hidden" name="_method", value="PUT">

    {{-- Form --}}
    Title: <input type="text" name="title" value={{$post->title}}> <!--title es el nombre de una columna en la tabla posts-->
    <br>
    user_id: <input type="text" name="user_id" value={{$post->user->name}}>
    <br>
    Content: <input type="text" name="content" value={{$post->content}}>
    <br><br>
    <input type="submit" name="submit" value="Update">

</form>

<form method="post" action="/posts/{{$post->id}}"> {{-- post indica la forma de enviar la información. (Opciones: GET/POST) --}}

    {{-- Token --}}
    @csrf <!-- or {{ csrf_field() }} https://laravel.com/docs/8.x/csrf#csrf-introduction -->

    {{-- Convert into put method --}}
    @method('DELETE')

    <input type="submit" name="delete" value="Delete">

</form>






@endsection
