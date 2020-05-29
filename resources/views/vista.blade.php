  @extends('welcome')

 @section('title',"View: Vista")

 @section('content')
   <p>Hola</p>
   <img src="{{ asset('img/gatito.jpg') }}" alt="">
 @endsection


 @section('sidebar')
 @parent
   <p>Hola desde vista</p>
 @endsection
