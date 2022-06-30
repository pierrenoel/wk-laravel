@extends('layouts.app')

@section('title', "Ajouter un article")

@section('content')

<div class="container mx-auto">
   <div class="w-6/12">
       <h2>{{ $category->name}} ({{count($category->posts)}})</h2>
        @foreach($category->posts as $post)
            <h3 class="underline">{{ $post->title }}</h3>
        @endforeach
   </div>
</div>

@endsection