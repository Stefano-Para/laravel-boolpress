@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $category->name }}</h1>
        {{-- @dd($category->posts) --}}
        
    </div>
@endsection