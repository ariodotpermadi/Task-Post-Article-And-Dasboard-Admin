@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $article->title }}</h1>
        <img src="{{ asset('storage/' . $article->image) }}" class="img-fluid mb-4" alt="{{ $article->title }}">
        <p>{{ $article->content }}</p>
        <a href="{{ route('articles.index') }}" class="btn btn-secondary">Back to Articles</a>
    </div>
@endsection
