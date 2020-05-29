@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
  <div class="col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content">
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Content</th>
          <th scope="col">user_id</th>
          <th>Herramientas</th>
        </tr>
      </thead>
      <tbody>
        @foreach($posts as $post)
          <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->content }}</td>
            <td>{{ $post->user_id }}</td>
            <td>
              <button type="button" class="btn btn-outline-primary"><a href="{{ route('post.show',['post'=>$post])}}">Ver</a></button>
              <button type="button" class="btn btn-outline-secondary"><a href="{{ route('post.edit',['post'=>$post])}}">Editar</a></button>
              <form action="{{ route('post.destroy',['post'=>$post])}}" method="POST">
                  <input type="hidden" name="_method" value="DELETE">
                  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <button type="submit" class="btn btn-outline-danger">Borrar</button>
              </form>
        </td>
          </tr>
        @endforeach
      </tbody>
    </table>
      {{ $posts->links()}}
  </div>
</div>
@endsection
