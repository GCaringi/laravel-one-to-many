@extends('layouts.app')

@section('content')
    <div class="w-[1200px] m-auto">
        <h1>{{$category->name}}</h1>
        <a href="{{route('admin.categories.index')}}">Back Home</a>
    </div>
@endsection