@extends('layouts.app')



@section('content')









              
           
<div class="container mt-5">
    

<h3>  <p>{{ $post->title }}</p></h3>
    <div class="alert alert-primary" role="alert">

                <div class="border-b mb-5 pb-5 border-gray-200">
                
                    <p>{{ $post->body }}</p>
                </div>
          
</div>
@yield('main_content')
@endsection


