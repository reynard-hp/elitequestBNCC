@extends('layouts.main')

@section('container')
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>{{ $recipe->title }}</h1>
                @if ($recipe->image)
                    <div style="max-height: 400px; overflow: hidden;">
                        <img src="{{ asset('storage/' . $recipe->image) }}" alt="{{ $recipe->category->name }}"
                            class="img-fluid mt-3">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $recipe->category->name }}{{ $recipe->category->name === 'Main Courses' ? ' Dish' : '' }}"
                        alt="{{ $recipe->category->name }}" class="img-fluid mt-3">
                @endif
                <div class="info mt-4 fs-5">
                    <p>{{ $recipe->description }}</p>
                    <h6>
                        <a href="/recipes?category={{ $recipe->category->slug }}"
                            class="text-decoration-none">{{ $recipe->category->name }}</a>
                        by <a href="/recipes?creator={{ $recipe->creator->username }}"
                            class="text-decoration-none">{{ $recipe->creator->name }}</a>
                    </h6>
                </div>

                <div class="mt-4 how-to-make fs-6">
                    <h6>How to make:</h6>
                    {!! $recipe->body !!}
                </div>
                <a href="/recipes" class="text-decoration-none d-block mt-5">Back to Recipes</a>
            </div>
        </div>
    </div>
@endsection
