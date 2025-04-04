

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
                @if(Auth::guard('customer')->user())

                   <ul class="dropdown-menu dropdown-menu-end">
                   <li><a class="dropdown-item" href="{{ route('customer.dashboard') }}">
                  <i class="bi1 bi-person-circle"></i> Profile of {{ Auth::guard('customer')->user()?->name }}
                     </a></li>

                    <li><a class="dropdown-item" href="#"><i class="bi1 bi-bag-check"></i> Orders</a></li>
                    <li><a class="dropdown-item" href="#"><i class="bi1 bi-heart"></i> Wishlist</a></li>

                    <li>
                        <form action="{{ route('customer.logout') }}" method="post">
                            @csrf
                            @method('PUT')
                             <button type="submit" class="dropdown-item"><i class="bi1 bi-box-arrow-right me-1"></i>Sign Out</button>
                            </form></li>
                    <li><hr class="dropdown-divider"></li>
                </ul>
                @else
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="{{ route('customer.register') }}"><i class="bi1 bi-person-circle"></i> Register</a></li>
                    <li><a class="dropdown-item" href="{{ route('customer.loginPage') }}"><i class="bi1 bi-bag-check"></i> Login</a></li>
                    <li><hr class="dropdown-divider"></li>
                </ul>
                @endif
            </div>

            <ion-icon name="heart-outline" class="me-3"></ion-icon>
            <ion-icon name="cart-outline"></ion-icon>
        </div>
    </div>
</nav>

