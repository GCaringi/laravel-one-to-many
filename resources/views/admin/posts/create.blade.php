@extends('layouts.app');

@section('content')
    <div class="w-[1200px] m-auto">
        <h1>Create Post</h1>
        <form action="{{route('admin.posts.store', $post->id)}}" method="POST" class="flex flex-col justify-start items-start">
            @csrf
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="@error('title') is-invalid @enderror" value="{{old('title')}}">
            @error('title')
                <p class="text-red-500">{{$message}}</p>
            @enderror
            <label for="content">Content</label>
            <textarea name="content" id="content" cols="30" rows="10" class=" @error('content') is-invalid @enderror" >
                {{old('content')}}
            </textarea>
            @error('content')
                <p class="text-red-500">{{$message}}</p>
            @enderror
            <label for="category">Category</label>
            <select name="category_id" id="category"class = "@error('category_id') is-invalid @enderror">
                <option value="">Select category</option>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}" {{old('category_id') == $category->id ? 'selected' : ''}}>
                        {{$category->name}}
                    </option>
                @endforeach
            </select>
            @error('category_id')
                <p class="text-red-500">{{$message}}</p>
            @enderror
            <label for="published">Pubblicato</label>
            <input type="checkbox" name="published" id="published" class = "@error('published') is-invalid @enderror" {{old('published') ? 'checked' : ''}}>
            @error('published')
                <p class="text-red-500">{{$message}}</p>
            @enderror
            <button type="submit">Crea Post</button>
        </form>
    </div>
@endsection
