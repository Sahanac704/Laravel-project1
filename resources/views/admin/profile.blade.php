@extends('admin.layout.master')
@section('container')


<div class="container mt-5">
    <div class="card text-justify p-5 profilecard">
        <!-- Profile Image -->
        <img src="{{ $user->image }}" class="rounded-circle mx-auto" width="150" alt="Profile Picture">

        <!-- User Name -->
        <h2 class="mt-3">{{Auth::user()->name}}</h2>

        <!-- User Bio -->
        <p class="text-muted">Web Developer | Tech Enthusiast | Blogger</p>

        <!-- Profile Details -->
        <div class="profileform">
        <form action="{{ route('admin.profile.update') }} " method="post" enctype="multipart/form-data">
@csrf
@method('PUT')

            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value={{ $user->name }} required><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value={{ $user->email }} required><br><br>


            <label for="image">Image:</label>
            <input type="file" id="image" name="image" value={{ $user->image }} required><br><br>


            <label for="address">Address:</label>
            <input type="string" id="address" name="address" value={{ $user->address }} required><br><br>


            <label for="phone_number">Phone Number:</label>
            <input type="numeric" id="phone_number" name="phone_number" value={{ $user->phone_number }}><br><br>

            <button class="btn btn-primary" type="submit">Edit Profile</button>

        </form>
        </div>
    </div>
</div>



@endsection
