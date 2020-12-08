@extends('layouts.app')

@section('content')

    <div class="container mx-auto p-5">
        <h1 class="text-4xl mt-32 text-center tracking-tight leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none md:text-6xl">
            Welcome to The Blog
        </h1>

        <div class="mt-10 max-w-xl mx-auto">
            @foreach(\App\Post::all() as $post)
                <div class="border-b mb-5 pb-5 border-gray-200">
                 <h3 class="text-4xl mt-32 text-center " >  <a href="/review/{{ $post->id }}" class="text-2xl font-bold mb-2">{{ $post->title }}</a>     
              </h3>
                </div>
            @endforeach
        </div>
    </div>

@endsection



