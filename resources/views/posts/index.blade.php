@extends('layouts.app')


@section('content')
<h2>INDEX PAGE</h2>

{{-- <ul>

    @foreach ($posts as $post)
        <!--<li><a href="posts/{{$post->id}}"> {{$post->title}} </a></li> Muestra todos los posts y los linkea con /posts/{id}-->
         <li><a href="{{route('posts.show', $post->id)}}"> {{$post->title}} </a></li> <a href="{{route('posts.edit',$post)}}">edit</a>
    @endforeach

</ul> --}}






<table>

        @foreach ($posts as $post)
        <tr>
            <td><a href="{{route('posts.show', $post->id)}}"> {{$post->title}} </a></td>
            <td><br></td>
            <td>
                <form action="{{route('posts.edit', $post)}}">  <!--post indica la forma de enviar la información. (Opciones: GET/POST)-->

                <input type="submit" name="edit" value="Edit">

                </form>
            </td>
            <td><br></td>
            <td>
                <form method="post" action="/posts/{{$post->id}}"> <!-- post indica la forma de enviar la información. (Opciones: GET/POST)-->

                     {{-- Token --}}
                    @csrf <!-- or {{ csrf_field() }} https://laravel.com/docs/8.x/csrf#csrf-introduction -->

                     {{-- Convert into put method --}}
                    <input type="hidden" name="_method" value="DELETE">

                    <input type="submit" name="delete" value="Delete">

                </form>
            </td>
        </tr>
        @endforeach

</table>

<br><br>
<form  action="{{route('posts.create')}}">

    <input type="submit" name="create" value="Create a new post">

</form>


{{--
<table class="" id="dataTableEmp" >
    <thead>
        <tr>
            <th><button style="border: none; background: transparent; font-size: 14px;" id="MyTableCheckAllButton">
<i class=""></i>
</button></th>
            <th>Titulo</th>
            <th>Contenido</th>
            <th>Id</th>
            <th>Admin</th>

        </tr>
    </thead>
    <tbody>
        <?php foreach ($posts as $post): 	?>
                    <td></td>
                    <td><?= $post['title'] ?></a></td>
                    <td><?= $post['content'] ?></td>
                    <td><?= $post['id'] ?></td>
                    <td><?= $post['is_admin'] ?></td>
                </tr>
        <?php endforeach; ?>


    </tbody>
</table> --}}
@endsection
