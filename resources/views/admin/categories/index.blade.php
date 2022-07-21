@extends('layouts.app')

@section('content')
    <div class="w-[1200px] m-auto">
        <div class="grid grid-cols-6">
            @foreach ($categories as $category)
                <a href="{{route('admin.categories.show', $category->id)}}">
                    {{$category->name}}    
                </a>
                <a href="{{route('admin.categories.edit', $category->id)}}">Edit</a>
                <form action="{{route('admin.categories.destroy', $category->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            @endforeach
        </div>
        <a href="{{route('admin.categories.create')}}">Create</a>
    </div>
@endsection