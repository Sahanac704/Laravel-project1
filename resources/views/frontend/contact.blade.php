@extends('frontend.layout.master')
@section('container')

<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><h2>Contact</h2></a>
      </div>
</nav>

<div class="container-fluid mt-5 mb-5 px-5 text-center">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="">

                </div>
                <h5>Address</h5>
                <p>A108 Adam Street, New York, NY 535022</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <h5>Call Us</h5>
                <p>+1 5589 55488 55</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <h5>Email Us</h5>
                <p>info@example.com</p>
            </div>
        </div>
    </div>
</div>

@endsection
