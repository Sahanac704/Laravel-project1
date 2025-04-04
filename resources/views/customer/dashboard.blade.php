@extends('frontend.layout.master')
@section('container')

<nav class="navbar navbar-expand-lg navbar-light bg-light p-3">
    <div class="container-fluid">
        <h2 class="navbar-brand mb-0">Customer Dashboard</h2>
    </div>
</nav>

<div class="container-fluid d-flex">
    <aside class="sidebar p-3" style="width: 250px; background-color: #f8f9fa;">
        <div class="profile text-center mb-4">
            <img src="profile.jpg" alt="Profile Picture" class="img-fluid rounded-circle mb-2" style="width: 100px; height: 100px;">
            <h3>John Doe</h3>
        </div>
        <nav>
            <ul class="list-unstyled">
                <li class="mb-3"><i class="bi bi-heart"></i> Wishlist</li>
                <li class="mb-3"><i class="bi bi-cart"></i> Cart</li>
                <li class="mb-3"><i class="bi bi-box"></i> Orders</li>
                <li class="mb-3"><i class="bi bi-gear"></i> Settings</li>
                <li><i class="bi bi-box-arrow-right"></i> Logout</li>
            </ul>
        </nav>
    </aside>

    <main class="content p-5" style="flex-grow: 1;">
        <section class="profile-summary mb-5">
            <h3>Profile Summary</h3>
            <p>Email: johndoe@example.com</p>
            <p>Phone: +123 456 7890</p>
            <button class="btn btn-primary">Edit Profile</button>
        </section>

        <section class="order-history mb-5">
            <h3>Order History</h3>
            <ul class="list-group">
                <li class="list-group-item">Order #1234 - Delivered</li>
                <li class="list-group-item">Order #1235 - Shipped</li>
                <li class="list-group-item">Order #1236 - Processing</li>
            </ul>
        </section>

        <section class="history mb-5">
            <h3>History</h3>
            <ul class="list-group">
                <li class="list-group-item">Item 1: Purchased on 2025-01-01</li>
                <li class="list-group-item">Item 2: Purchased on 2025-02-15</li>
                <li class="list-group-item">Item 3: Purchased on 2025-03-01</li>
            </ul>
        </section>

        <section class="notifications mb-5">
            <h3>Notifications</h3>
            <p>No new notifications.</p>
        </section>

        <section class="support">
            <h3>Support & Help</h3>
            <button class="btn btn-primary">Contact Support</button>
        </section>
    </main>
</div>

@endsection
