@extends('layouts.app')

@section('content')
<div class="container my-4">
    <h1>
        {{ $post->title }}
        @if ($post->category)
            <a
                href="{{ route('admin.categories.show', $post->category->id) }}"
                class="badge badge-info">{{ $post->category->name}}
            </a>
        @else
            {{-- per categoria non dichiarata  --}}
            <span class="badge badge-secondary">Nessuna categoria associata </span>
        @endif
    </h1>

    {{-- @dd($post->category) --}}

    <small>{{ $post->slug }}</small>
    <div class="mt-3">
        <a class="btn btn-warning" href="{{ route('admin.posts.edit', $post->id) }}">Modifica</a>
        <a class="btn btn-secondary ml-2" href="{{ route('admin.posts.index') }}">Elenco Post</a>
    </div>
    <div class="mt-3">{{ $post->content }}</div>
    </div>
@endsection