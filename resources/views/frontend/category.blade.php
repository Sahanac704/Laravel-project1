@extends('frontend.layout.master')
@section('container')


<nav class="navbar navbar-expand-lg navbar-light bg-light border border-secondary mb-2">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Categories</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">


          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Clothing
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Men's Wear</a></li>
              <li><a class="dropdown-item" href="#">Womens's Wear</a></li>
              <li><a class="dropdown-item" href="#">Kid's Clothing</a></li>
              <li><a class="dropdown-item" href="#">Accessories</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Electronics
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Smartphones</a></li>
              <li><a class="dropdown-item" href="#">Laptops</a></li>
              <li><a class="dropdown-item" href="#">Tablets</a></li>
              <li><a class="dropdown-item" href="#">Accessories</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Home & Kitchen
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Furniture</a></li>
              <li><a class="dropdown-item" href="#">Kitchen Appliances</a></li>
              <li><a class="dropdown-item" href="#">Home Decor</a></li>
              <li><a class="dropdown-item" href="#">Bedding</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Beauty & Personal Care
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Skincare</a></li>
              <li><a class="dropdown-item" href="#">Makeup</a></li>
              <li><a class="dropdown-item" href="#">Hair are</a></li>
              <li><a class="dropdown-item" href="#">Fragrances</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Sports & Outdoors
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Fitness Equipment</a></li>
              <li><a class="dropdown-item" href="#">Outdoor Gear</a></li>
              <li><a class="dropdown-item" href="#">Sports Apparel</a></li>
              <li><a class="dropdown-item" href="#">Team Sports</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Books
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Lovestory</a></li>
              <li><a class="dropdown-item" href="#">History</a></li>
              <li><a class="dropdown-item" href="#">Mystery</a></li>
              <li><a class="dropdown-item" href="#">Fiction</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Toys & Games
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Board Games</a></li>
              <li><a class="dropdown-item" href="#">Puzzles</a></li>
              <li><a class="dropdown-item" href="#">Action Figures</a></li>
              <li><a class="dropdown-item" href="#">Educational Toys</a></li>
            </ul>
          </li>

        </ul>

      </div>
    </div>
  </nav>


@endsection
