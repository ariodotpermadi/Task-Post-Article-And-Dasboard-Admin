@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Articles</h1>
        <a href="{{ route('admin.articles.create') }}" class="btn btn-primary mb-3">Create New Article</a>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $article->title }}</td>
                        <td>
                            <a href="{{ route('admin.articles.edit', $article->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.articles.destroy', $article->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
