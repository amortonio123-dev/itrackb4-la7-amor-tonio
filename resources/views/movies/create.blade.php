@extends('layouts.app')

@section('title', 'Add Movie')

@section('content')

<div class="container mt-4">

    <h1>Add Movie</h1>

    <form action="{{ route('movies.store') }}" method="POST">

        @csrf

        <!-- Title -->
        <div class="mb-3">

            <label for="title" class="form-label">
                Title
            </label>

            <input
                type="text"
                name="title"
                id="title"
                value="{{ old('title') }}"
                class="form-control @error('title') is-invalid @enderror"
            >

            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror

        </div>


        <!-- Director -->
        <div class="mb-3">

            <label for="director" class="form-label">
                Director
            </label>

            <input
                type="text"
                name="director"
                id="director"
                value="{{ old('director') }}"
                class="form-control @error('director') is-invalid @enderror"
            >

            @error('director')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror

        </div>


        <!-- Genre -->
        <div class="mb-3">

            <label for="genre" class="form-label">
                Genre
            </label>

            <select
                name="genre"
                id="genre"
                class="form-select @error('genre') is-invalid @enderror"
            >

                <option value="">
                    Select Genre
                </option>

                <option value="Sci-Fi"
                    @selected(old('genre') == 'Sci-Fi')>
                    Sci-Fi
                </option>

                <option value="Action"
                    @selected(old('genre') == 'Action')>
                    Action
                </option>

                <option value="Crime"
                    @selected(old('genre') == 'Crime')>
                    Crime
                </option>

            </select>

            @error('genre')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror

        </div>


        <!-- Year -->
        <div class="mb-3">

            <label for="year" class="form-label">
                Year
            </label>

            <input
                type="number"
                name="year"
                id="year"
                value="{{ old('year') }}"
                class="form-control @error('year') is-invalid @enderror"
            >

            @error('year')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror

        </div>


        <!-- Buttons -->
        <div class="mb-4">

            <button type="submit" class="btn btn-success">
                + Add Movie
            </button>

            <a href="{{ route('movies.index') }}"
               class="btn btn-secondary">
                Cancel
            </a>

        </div>

    </form>


    <!-- Prepared By -->

    <div class="text-center mt-5 mb-3">

        <p>
            Prepared by:
            <strong>Aira Basco</strong>
        </p>

    </div>

</div>

@endsection