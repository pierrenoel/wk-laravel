@extends('layouts.app')

@section('title', $post->slug)

@section('content')

<div class="container mx-auto flex flex-col lg:flex-row gap-2">
   <div class="w-full lg:w-6/12 flex flex-col justify-between">
         
         <div>
            <h2 class="text-4xl font-bold">{{ $post->title }}</h2>
            <p class="mb-5 text-sm font-light"><span class="font-bold">Categorie:</span> {{ $post->category->name }}</p>
            <p class="mb-5 leading-10">{{ $post->body }}</p>
         </div>

         <div>
            <a href="{{Route('welcome')}}" class="p-2 text-white bg-violet-500">Retour articles</a>
         </div>
         
   </div>
</div>

@endsection