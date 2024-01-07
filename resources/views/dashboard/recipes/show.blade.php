@extends('dashboard.layouts.main')

@section('container')
    <div class="container my-4">
        <div class="row">
            <div class="col-lg-8">
                <h1>{{ $recipe->title }}</h1>
                <h6>Category: {{ $recipe->category->name }}</h6>
                <div class="mt-3">
                    <a href="/dashboard/recipes" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my
                        posts</a>
                    <a href="/dashboard/recipes/{{ $recipe->slug }}/edit" class="btn btn-warning"><span
                            data-feather="edit"></span> Edit</a>
                    <form action="/dashboard/recipes/{{ $recipe->slug }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger"
                            onclick="return confirm('Are you sure want to delete [{{ $recipe->title }}] ?')">
                            <span data-feather="x-circle"></span> Delete
                        </button>
                    </form>
                </div>
                @if ($recipe->image)
                    <div style="max-height: 400px; overflow: hidden;">
                        <img src="{{ asset('storage/' . $recipe->image) }}" alt="{{ $recipe->category->name }}"
                            class="img-fluid mt-3">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $recipe->category->name }}{{ $recipe->category->name === 'Main Courses' ? ' Dish' : '' }}"
                        alt="{{ $recipe->category->name }}" class="img-fluid mt-3">
                @endif

                <div class="mt-4 how-to-make fs-6">
                    <h6>How to make:</h6>
                    {!! $recipe->body !!}
                </div>
            </div>
        </div>
    </div>
@endsection
