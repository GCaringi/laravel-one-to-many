@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <small>Login succesfully completed</small>
                    <h2 class="text-2xl font-bold py-4">Welcome to admin panel</h2>
                    <a href="{{route('admin.posts.index')}}">Visualizza tutti i post</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
