@extends('layouts.app')

@section('title', $movie['title'])

@section('content')

<h2 class="mb-4">🎬 Movie Details</h2>

<table class="table table-bordered table-striped" style="max-width: 500px;">
    <tr>
        <th style="width: 120px;">ID</th>
        <td>{{ $movie['id'] }}</td>
    </tr>
    <tr>
        <th>Title</th>
        <td>{{ $movie['title'] }}</td>
    </tr>
    <tr>
        <th>Genre</th>
        <td>{{ $movie['genre'] }}</td>
    </tr>
</table>

<a href="{{ route('movies.index') }}" class="btn btn-primary">← Back to All Movies</a>

@endsection