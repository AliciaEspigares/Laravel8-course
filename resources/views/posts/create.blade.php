@extends('layouts.app')


@section('content')

<h1>Creando un nuevo post</h1>
<br>
<h2>Form</h2>
<br>

    <form method="post" action="/posts" enctype="multipart/form-data"> {{-- post indica la forma de enviar la información. (Opciones: GET/POST) --}}

        {{-- Token --}}
        @csrf <!-- or {{ csrf_field() }} https://laravel.com/docs/8.x/csrf#csrf-introduction -->

        {{-- Form --}}
        Title: <input type="text" name="title" placeholder="Enter title"> <!--title es el nombre de una columna en la tabla posts-->
        <br>
        <input type="hidden" name="user_id" value="1">
        Content: <input type="text" name="content" placeholder="Enter the content" size="100">
        <br>
        <div class="form-group">
            <input type="file" class="form-control-file" name="fileToUpload" id="exampleInputFile">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>


    @if(count($errors)>0) {{-- or @if ($errors->any())  --}}
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror --}}


@endsection
