@extends('layouts.app')

@section('content')
    <div class = "w-[1200px] m-auto">
        <div class="grid grid-cols-6">
            <form action="{{route('admin.categories.update', $category->id)}}" method="POST">
                @csrf
                @method('PUT')
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class= "@error('name') is-invalid @enderror" value="{{old('name', $category->name)}}">
                @error('name')
                    <p class="error">{{$message}}</p>
                @enderror
                <button type="submit">Modify</button>
            </form>
        </div>
        <a href="{{route('admin.categories.index')}}">Back Home</a>
@endsection