@extends('layouts.app')


@section('content')

<br>
<h2>{{$post->title}}</h2>

{{$post->content}}
<br><br>
<img height="300" src={{$post->path}} alt="">
<br><br>
Made by: {{$post->user->name}}

<br><br>
<table>
    <tr>
        <td>
            <form action="{{route('posts.edit', $post)}}"> {{-- post indica la forma de enviar la información. (Opciones: GET/POST) --}}

            <input type="submit" name="edit" value="Edit">

        </form>
    </td>
        <td>
            <form method="post" action="/posts/{{$post->id}}"> {{-- post indica la forma de enviar la información. (Opciones: GET/POST) --}}

                {{-- Token --}}
                @csrf <!-- or {{ csrf_field() }} https://laravel.com/docs/8.x/csrf#csrf-introduction -->

                {{-- Convert into put method --}}
                <input type="hidden" name="_method" value="DELETE">

                <input type="submit" name="delete" value="Delete">

            </form>
        </td>
    </tr>

</table>

<br><br><a href="{{route('posts.index')}}">Ir al listado</a>



@endsection
