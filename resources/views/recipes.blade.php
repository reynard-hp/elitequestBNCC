@extends('layouts.main')

@section('container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/recipes">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('creator'))
                    <input type="hidden" name="creator" value="{{ request('creator') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="search" aria-label="Search Recipe"
                        placeholder="Search Recipe.." value="{{ request('search') }}">
                    <button class="btn btn-danger" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($recipes->count())
        {{-- Hero Recipes --}}
        <div class="card mb-3">
            @if ($recipes[0]->image)
                <div style="max-height: 400px; overflow: hidden;">
                    <img src="{{ asset('storage/' . $recipes[0]->image) }}" alt="{{ $recipes[0]->category->name }}"
                        class="img-fluid rounded-top">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $recipes[0]->category->name }}{{ $recipes[0]->category->name === 'Main Courses' ? ' Dish' : '' }}"
                    alt="{{ $recipes[0]->category->name }}" class="img-fluid rounded-top">
            @endif
            <div class="card-body text-center">
                <h5 class="card-title"><a href="/recipes/{{ $recipes[0]->slug }}"
                        class="text-decoration-none text-dark">{{ $recipes[0]->title }}</a></h5>
                <p class="card-text">{{ $recipes[0]->description }}</p>
                <h6>
                    <small class="text-muted">
                        <a href="/recipes?category={{ $recipes[0]->category->slug }}"
                            class="text-decoration-none">{{ $recipes[0]->category->name }}</a>
                        by <a href="/recipes?creator={{ $recipes[0]->creator->username }}"
                            class="text-decoration-none">{{ $recipes[0]->creator->name }}</a>
                        {{ $recipes[0]->created_at->diffForHumans() }}
                    </small>
                </h6>
                <a href="/recipes/{{ $recipes[0]->slug }}" class="text-decoration-none btn btn-primary">Read More</a>
            </div>
        </div>

        <div class="container mb-5">
            <div class="row">
                @foreach ($recipes->skip(1) as $recipe)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            @if ($recipe->image)
                                <div style="max-height: 195px; overflow: hidden;">
                                    <img src="{{ asset('storage/' . $recipe->image) }}"
                                        alt="{{ $recipe->category->name }}" class="img-fluid rounded-top">
                                </div>
                            @else
                                <img src="https://source.unsplash.com/900x500?{{ $recipe->category->name }}{{ $recipe->category->name === 'Main Courses' ? ' Dish' : '' }}"
                                    alt="{{ $recipe->category->name }}" class="img-fluid rounded-top">
                            @endif
                            {{-- category anchor --}}
                            <div class="position-absolute bg-secondary bg-opacity-50 px-3 py-2 rounded">
                                <a href="/recipes?category={{ $recipe->category->slug }}"
                                    class="text-decoration-none text-white ">
                                    {{ $recipe->category->name }}
                                </a>
                            </div>
                            {{-- card content --}}
                            <div class="card-body">
                                <h5 class="card-title"><a href="/recipes/{{ $recipe->slug }}"
                                        class="text-decoration-none">{{ $recipe->title }}</a></h5>
                                <p class="card-text"><small>{{ $recipe->description }}</small></p>
                                <h6>
                                    <small class="text-muted">
                                        By <a href="/recipes?creator={{ $recipe->creator->username }}"
                                            class="text-decoration-none">{{ $recipe->creator->name }}</a>
                                        {{ $recipe->created_at->diffForHumans() }}
                                    </small>
                                </h6>
                                <a href="/recipes/{{ $recipe->slug }}" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <p class="text-center fs-4">No recipes found.</p>
    @endif

    <div class="d-flex justify-content-center">
        {{ $recipes->links() }}
    </div>
@endsection
