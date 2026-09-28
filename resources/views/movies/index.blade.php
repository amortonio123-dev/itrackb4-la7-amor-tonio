@extends('layouts.app')

@section('title', 'Movies')

@section('content')

<h1 class="mb-4">🎬 Movie List</h1>

{{-- Filter Links --}}
<div class="mb-4">
    <strong>Filter by Genre:</strong>
    <a href="{{ route('movies.index', ['genre' => 'Romance']) }}" class="btn btn-sm btn-outline-primary ms-2">Romance</a>
    <a href="{{ route('movies.index', ['genre' => 'Drama']) }}" class="btn btn-sm btn-outline-primary ms-1">Drama</a>
    <a href="{{ route('movies.index', ['genre' => 'Action']) }}" class="btn btn-sm btn-outline-primary ms-1">Action</a>
    <a href="{{ route('movies.index', ['genre' => 'Comedy / Self-help']) }}" class="btn btn-sm btn-outline-primary ms-1">Comedy</a>
    <a href="{{ route('movies.index', ['genre' => 'Sci-Fi']) }}" class="btn btn-sm btn-outline-primary ms-1">Sci-Fi</a>
    <a href="{{ route('movies.index') }}" class="btn btn-sm btn-secondary ms-2">Clear All</a>
</div>

{{-- Search + Genre Combined --}}
<div class="mb-4">
    <form action="{{ route('movies.index') }}" method="GET" class="row g-2">
        <div class="col-auto">
            <input type="text" name="search" class="form-control" placeholder="Search title..." value="{{ request('search') }}">
        </div>
        <div class="col-auto">
            <select name="genre" class="form-select">
                <option value="">All Genres</option>
                <option value="Romance" @selected(request('genre') === 'Romance')>Romance</option>
                <option value="Drama" @selected(request('genre') === 'Drama')>Drama</option>
                <option value="Action" @selected(request('genre') === 'Action')>Action</option>
                <option value="Comedy / Self-help" @selected(request('genre') === 'Comedy / Self-help')>Comedy</option>
                <option value="Sci-Fi" @selected(request('genre') === 'Sci-Fi')>Sci-Fi</option>
            </select>
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary">Apply</button>
            @if(request()->hasAny(['genre', 'search']))
                <a href="{{ route('movies.index') }}" class="btn btn-secondary">Reset</a>
            @endif
        </div>
    </form>
</div>

{{-- Movie Table --}}
<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Genre</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($movies as $movie)
        <tr>
            <td>{{ $movie['id'] }}</td>
            <td>{{ $movie['title'] }}</td>
            <td>{{ $movie['genre'] }}</td>
            <td>
                <a href="{{ route('movies.show', $movie['id']) }}" class="btn btn-sm btn-info">View</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<p class="text-center mt-5 text-muted">
    <strong>Prepared by:</strong> Edshieline Kaye Ternida
</p>

@endsection