@extends('layouts.app')


@section('content')

<h1>Creando un nuevo post</h1>
<br>
<h2>Form</h2>
<br>

    <form method="post" action="/posts"> {{-- post indica la forma de enviar la información. (Opciones: GET/POST) --}}

        {{-- Token --}}
        @csrf <!-- or {{ csrf_field() }} https://laravel.com/docs/8.x/csrf#csrf-introduction -->

        {{-- Form --}}
        Title: <input type="text" name="title" placeholder="Enter title"> <!--title es el nombre de una columna en la tabla posts-->
        <br>
        <input type="hidden" name="user_id" value="1">
        Content: <input type="text" name="content" placeholder="Enter the content" size="100">
        <br><br>
        <input type="submit" name="submit">

    </form>




@endsection
