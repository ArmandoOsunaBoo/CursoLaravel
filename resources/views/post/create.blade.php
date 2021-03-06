@extends('layouts.app')


@section('content')

@if($errors->any())
  @foreach($errors->all() as $error)
  <div class="alert alert-danger" role="alert">
    {{ $error }}
  </div>
  @endforeach
@endif


<form  method="post" action=" {{ route('post.store') }}  ">
  @csrf
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="form-group">
              <label for="title">Titulo</label>
              <input type="text" class="form-control" name="title" placeholder="" value="{{ old('title') }}" >
            </div>
            <div class="form-group">
              <label for="content">Contenido</label>
            <textarea class="form-control" aria-label="With textarea" style="margin-top: 0px; margin-bottom: 0px; height: 134px;" name="content">{{ old('content') }}</textarea>
            </div>
             <div class="form-group">
             <hr class="mb-4">
             <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
           </div>
          </div>

      </form>



@endsection
