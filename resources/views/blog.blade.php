@extends('layouts.app')

@section('content')





<div class="container mt-5">

@foreach(\App\Post::all() as $post)
<div class="alert alert-primary" role="alert">
       
    <div class="border-b mb-5 pb-5 border-gray-200">
                 <h3>  {{ $post->title }}</h3>

                

                </div>
                    <p>{{ $post->body }}</p>
               
               
</div>



@endforeach

</div>



@endsection
