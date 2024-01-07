@extends('layouts.main')

@section('container')
    <div class="container">
        <h3>Profile</h3>
        <h5>Name : Reynard Hans Prayoga</h5>
        <p>Email : reynard.prayoga@binus.ac.id</p>
        <img src="assets/reynard.png" alt="My Photo" class="img-thumbnail rounded-circle">
    </div>


    <div class="container rounded border border-dark p-0 mt-5 mb-3">
        <div class="container bg-secondary text-white rounded p-4">
            <h2>Contact Us</h2>
            <p>Got a question? Send a message and it will be responded as soon as possible.</p>
        </div>
        <form class="mt-3 p-3">
            <div class="mb-3">
                <label for="nameInput" class="form-label">Full Name</label>
                <input type="email" class="form-control" id="nameInput" placeholder="Full Name">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Your Email">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Your Message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
