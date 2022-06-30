@extends('layouts.app')

@section('title','welcome')

@section('content')

<div class="container mx-auto grid grid-colx-1 lg:grid-cols-3 gap-5">
    @foreach($posts as $post)
        <div class="bg-gray-100 p-5">
            <h2 class="font-bold">{{ $post->title }}</h2>
            <p class="font-light text-sm mb-5">{{ $post->excerpt }}</p>

            <div class="flex gap-2">
                <a href="{{ Route('post.show',[$post->slug]) }}"
                    class="bg-violet-500 text-white p-1">Lire la suite</a>
                <a href="{{ Route('post.edit',[$post->slug]) }}"
                    class="bg-green-500 text-white p-1">Editer</a>

                <form method="POST" action="{{ Route('post.delete',[$post->slug]) }}">
                    @csrf
                    @method('delete')
                    <input type="submit" class="bg-red-500 text-white p-1" value="Supprimer">
                </form>
            </div>
        </div>
    @endforeach
</div>

@endsection
