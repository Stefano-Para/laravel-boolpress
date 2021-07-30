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

    @if (count($post->tags) > 0)
        <div class="mt-3">
            @foreach ($post->tags as $tag)
                <span class="badge badge-pill badge-dark">{{ $tag->name }}</span>            
            @endforeach
        </div> 
    @else
        <div>
            <h5 class="badge badge-pill badge-dark">Nessun tag collegato</h5>
        </div>
    @endif

    <div class="mt-3">
        <a class="btn btn-warning" href="{{ route('admin.posts.edit', $post->id) }}">Modifica</a>
        <a class="btn btn-secondary ml-2" href="{{ route('admin.posts.index') }}">Elenco Post</a>
    </div>
    <div class="mt-3">{{ $post->content }}</div>
    </div>
@endsection