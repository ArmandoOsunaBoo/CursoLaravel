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
        </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    {{ $posts->links()}}
  </div>
</div>
@endsection
