@extends('layouts.main')

@section('container')
    <div class="container">
        <h1>Recipes Categories</h1>
        <div class="row mt-4">
            @foreach ($categories as $category)
                <div class="col-md-4 my-3">
                    <a href="/recipes?category={{ $category->slug }}">
                        <div class="card text-bg-dark">
                            <img src="https://source.unsplash.com/500x500?{{ $category->name }}{{ $category->name === 'Main Courses' ? ' Dish' : '' }}"
                                class="card-img" alt="{{ $category->name }}">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                <h5 class="card-title text-center flex-fill p-4 bg-secondary bg-opacity-50 fs-3">
                                    {{ $category->name }}
                                </h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
