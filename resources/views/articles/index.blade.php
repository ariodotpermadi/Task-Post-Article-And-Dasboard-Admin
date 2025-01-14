@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Articles</h1>
        <div class="row">
            @foreach ($articles as $article)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="{{ asset('storage/' . $article->image) }}" class="card-img-top" alt="{{ $article->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <p class="card-text">{{ Str::limit($article->content, 100) }}</p>
                            <a href="{{ route('articles.show', $article->id) }}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $articles->links() }}
    </div>
@endsection
