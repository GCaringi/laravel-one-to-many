@extends('layouts.app');

@section('content')
    <div class="max-w-[1200px] m-auto grid grid-cols-6 ">
        @foreach ($posts as $post)
        <a href="{{route('admin.posts.show', $post->id)}}">
            <div class="h-[100px] flex items-center">
                {{$post->title}}
            </div>
        </a>
        <a href="{{route('admin.posts.edit', $post->id)}}">Edit</a>
        <form action="{{route('admin.posts.destroy', $post->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
        @endforeach
        <a href="{{route('admin.posts.create')}}">Aggiungi Post</a>
    </div>
@endsection
