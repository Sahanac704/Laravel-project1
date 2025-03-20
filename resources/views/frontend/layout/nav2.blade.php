

<nav class="navbar navbar-light bg-white">
    <div class="container-fluid mx-5">
        <a class="navbar-brand">eStore</a>
        <form class="d-flex mx-auto" role="search">
            <input class="form-control px-5 me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

        <div class="icon d-flex align-items-center">
            <!-- User Dropdown -->
            <div class="dropdown me-3">
                <ion-icon name="person-outline" class="dropdown-toggle" data-bs-toggle="dropdown" style="cursor: pointer;"></ion-icon>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="#"><i class="bi1 bi-person-circle"></i> Profile</a></li>
                    <li><a class="dropdown-item" href="#"><i class="bi1 bi-bag-check"></i> Orders</a></li>
                    <li><a class="dropdown-item" href="#"><i class="bi1 bi-heart"></i> Wishlist</a></li>
                    <li><a class="dropdown-item" href="#"><i class="bi1 bi-gear"></i> Settings</a></li>
                    <li><hr class="dropdown-divider"></li>
                </ul>
            </div>

            <ion-icon name="heart-outline" class="me-3"></ion-icon>
            <ion-icon name="cart-outline"></ion-icon>
        </div>
    </div>
</nav>

