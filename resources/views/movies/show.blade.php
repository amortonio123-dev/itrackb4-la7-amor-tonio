@extends('layouts.app')

@section('title', $movie['title'])

@section('content')

<div class="container mt-4">

    <h1>{{ $movie['title'] }}</h1>

    <table class="table table-bordered">

        <tr>
            <th>ID</th>
            <td>{{ $movie['id'] }}</td>
        </tr>

        <tr>
            <th>Title</th>
            <td>{{ $movie['title'] }}</td>
        </tr>

        <tr>
            <th>Director</th>
            <td>{{ $movie['director'] }}</td>
        </tr>

        <tr>
            <th>Genre</th>
            <td>{{ $movie['genre'] }}</td>
        </tr>

        <tr>
            <th>Year</th>
            <td>{{ $movie['year'] }}</td>
        </tr>

    </table>

    <a href="{{ route('movies.index') }}"
       class="btn btn-secondary">
        Back to Movies
    </a>

</div>

@endsection