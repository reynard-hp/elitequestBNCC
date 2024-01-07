@extends('layouts.main')

@section('container')
    <div class="container-fluid">
        <header class="bg-success text-white text-center py-5 rounded">
            <div class="container">
                <h1 class="display-4">Cook Share</h1>
                <p class="lead">Discover, Create, Share - Your Culinary Journey Starts Here</p>
            </div>
        </header>
        <div class="container mt-4">
            <section>
                <h2 class="text-success mb-4">Explore Features</h2>

                <div class="row">

                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="https://source.unsplash.com/500x500?cold-drinks" alt="Search Menu" class="card-img">
                            <div class="card-img-overlay d-flex flex-column justify-content-end bg-dark bg-opacity-50">
                                <div class="card-body text-white">
                                    <h3 class="card-title">Search Menu</h3>
                                    <p class="card-text">Find your favorite recipes quickly with our powerful search
                                        feature.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="https://source.unsplash.com/500x500?breakfast" alt="Create Your Own Menu"
                                class="card-img ">
                            <div class="card-img-overlay d-flex flex-column justify-content-end bg-dark bg-opacity-50">
                                <div class="card-body text-white">
                                    <h3 class="card-title">Create Your Own Menu</h3>
                                    <p class="card-text">Customize and save your personalized menus for easy access.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="https://source.unsplash.com/500x500?appetizer" alt="Browse by Category"
                                class="card-img">
                            <div class="card-img-overlay d-flex flex-column justify-content-end bg-dark bg-opacity-50">
                                <div class="card-body text-white">
                                    <h3 class="card-title">Browse by Category</h3>
                                    <p class="card-text">Explore recipes based on categories such as beverages, main dishes,
                                        and
                                        desserts.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </section>

            <div class="text-center">
                <h2 class="text-success mb-4">Let's Get Into It!</h2>
                <p>Ready to dive into the world of delicious recipes?</p>

                <a href="/categories" class="btn btn-warning">Browse Recipes</a>
                <a href="/categories" class="btn btn-dark">Check Categories</a>
            </div>

        </div>
    </div>
@endsection
