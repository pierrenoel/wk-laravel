@extends('layouts.app')

@section('title', "Ajouter un article")

@section('content')

<div class="container mx-auto">
   <div class="w-full lg:w-6/12">
       
        <form method="POST" action="{{Route('post.store')}}">
            @csrf
            <div>
                <input type="text" name="title" value="{{ old('title') }}"
                class="outline-none border p-2 w-full @error('title') border border-red-600 @enderror"
                placeholder="Titre">
                <span class="text-sm text-red-500">@error('title') {{$message}} @enderror</span>
            </div>
            <div class="my-5">
                <input type="text" name="excerpt" value="{{ old('excerpt') }}"
                class="outline-none border p-2 w-full @error('excerpt') border border-red-600 @enderror"
                placeholder="Déscription de l'article">
                <span class="text-sm text-red-500">@error('excerpt') {{$message}} @enderror</span>
            </div>
            <div class="mb-5">
                <textarea name="body" placeholder="Le contenu de votre article"
                class="outline-none border p-2 w-full @error('body') border border-red-600 @enderror"></textarea>
                <span class="text-sm text-red-500">@error('body') {{$message}} @enderror</span>
            </div>
            <div>
                <input type="submit" value="Publier" class="p-2 w-full text-white bg-violet-500">
            </div>
        </form>

   </div>
</div>

@endsection