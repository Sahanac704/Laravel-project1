<nav class="navbar navbar-expand-lg navbar-light bg-white mx-auto">
    <div class="container-fluid border p-2">

      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mx-5">
          <li class="nav-item drop">
            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item drop">
            <a class="nav-link active" href="{{ route('about') }}">About</a>
          </li>
          <li class="nav-item drop">
            <a class="nav-link active" href="{{ route('category') }}">Category</a>
          </li>
          <li class="nav-item drop">
            <a class="nav-link active" href="{{ route('product') }}">Product Details</a>
          </li>
          <li class="nav-item drop">
            <a class="nav-link active" href="{{ route('cart') }}">Cart</a>
          </li>
          <li class="nav-item drop">
            <a class="nav-link active" href="{{ route('checkout') }}">Checkout</a>
          </li>
          <li class="nav-item dropdown drop">
            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Dropdown 1</a></li>
              <li class="dropdown-submenu">
                <a class="dropdown-item dropdown-toggle" href="#">Deep Dropdown</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Deep dropdown 1</a></li>
                    <li><a class="dropdown-item" href="#">Deep dropdown 2</a></li>
                    <li><a class="dropdown-item" href="#">Deep dropdown 3</a></li>
                    <li><a class="dropdown-item" href="#">Deep dropdown 4</a></li>
                    <li><a class="dropdown-item" href="#">Deep dropdown 5</a></li>
                </ul>
            </li>
              <li><a class="dropdown-item" href="#">Dropdown 2</a></li>
              <li><a class="dropdown-item" href="#">Dropdown 3</a></li>
              <li><a class="dropdown-item" href="#">Dropdown 4</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown drop">
            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Megamenu 1
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Dropdown 1</a></li>
              <li><a class="dropdown-item" href="#">Deep Dropdown</a></li>
              <li><a class="dropdown-item" href="#">Dropdown 2</a></li>
              <li><a class="dropdown-item" href="#">Dropdown 3</a></li>
              <li><a class="dropdown-item" href="#">Dropdown 4</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown drop">
            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Megamenu 2
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Dropdown 1</a></li>
              <li><a class="dropdown-item" href="#">Deep Dropdown</a></li>
              <li><a class="dropdown-item" href="#">Dropdown 2</a></li>
              <li><a class="dropdown-item" href="#">Dropdown 3</a></li>
              <li><a class="dropdown-item" href="#">Dropdown 4</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="{{ route('contact') }}">Contact</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
