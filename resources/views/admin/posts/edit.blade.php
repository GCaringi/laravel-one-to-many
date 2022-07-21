@extends('layouts.app');

@section('content')
    <div class="w-[1200px] m-auto">
        <h1>Edit Post</h1>
        <form action="{{route('admin.posts.update', $post->id)}}" method="POST" class="flex flex-col justify-start items-start">
            @csrf
            @method('PUT')
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="" @error('title') is-invalid @enderror value="{{old('title', $post->title)}}">
                @error('title')
                    <p class="text-red-500">{{$message}}</p>
                @enderror
                <label for="content">Content</label>
                <textarea name="content" id="content" cols="30" rows="10" @error('content') is-invalid @enderror >{{old('content', $post->content)}}
                </textarea>
                @error('content')
                    <p class="text-red-500">{{$message}}</p>
                @enderror
                <label for="published">Pubblicato</label>
                <input type="checkbox" name="published" id="published" @error('published') is-invalid @enderror {{old('published', $post->published) ? 'checked' : ''}}>
                @error('published')
                    <p class="text-red-500">{{$message}}</p>
                @enderror
                <button type="submit">Modifica</button>
        </form>
    </div>
@endsection
