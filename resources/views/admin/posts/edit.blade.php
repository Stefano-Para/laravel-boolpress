@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Modifica articolo: <span class="text-info">{{ $post->title }}</span></h1>


        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.posts.update', $post->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $post->title) }}" placeholder="Enter article's title">
                @error('title')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="content">Testo</label>
                <textarea class="form-control @error('content') is-invalid @enderror" name="content" placeholder="Enter article's text" rows="6">{{ old('content', $post->content ) }}</textarea>
                @error('content')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="category_id">Categoria</label>
                <select class="form-control @error('category_id') is-invalid @enderror" name="category_id" id="category_id" >
                    <option value="">-- Seleziona una categoria --</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ ($category->id == old('category_id')) ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <small>{{ $message }}</small>
                @enderror
            </div>

            {{-- tags  --}}
            <div class="form-group">
                <h5>Tags</h5>
                @foreach ($tags as $tag)
                    <div class="form-check form-check-inline">
                        @if ($errors->any())
                            <input type="checkbox"  name="tags[]" class="form-check-input" id="tag-{{ $tag->id }}" value="{{ $tag->id }}"
                            {{ in_array($tag->id, old('tags', [])) ? 'checked' : ''}}
                            >                        
                        @else
                            <input type="checkbox"  name="tags[]" class="form-check-input" id="tag-{{ $tag->id }}" value="{{ $tag->id }}"
                            {{ $post->tags->contains($tag->id) ? 'checked' : '' }}
                            >
                        @endif
                        <label class="form-check-label" for="tag-{{ $tag->id }}">{{ $tag->name }}</label>
                    </div>
                @endforeach
                @error('tags')
                    <div>
                        <small class="text-danger d-block">{{ $message }}</small>
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Salve modifica</button>
            <a class="btn btn-secondary ml-2" href="{{ route('admin.posts.index') }}">Elenco Post</a>
        </form>
    </div>
@endsection