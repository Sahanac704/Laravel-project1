@extends('frontend.layout.master')
@section('container')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
        /* General Styling */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

/* Navbar */
.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #003366;
    color: white;
    padding: 15px 30px;
}

.cart-btn {
    background-color: #ff4500;
    color: white;
    border: none;
    padding: 10px 15px;
    cursor: pointer;
    border-radius: 5px;
}

/* Product Container */
.product-container {
    display: flex;
    max-width: 1100px;
    margin: 50px auto;
    padding: 20px;
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* Carousel */
.carousel {
    width: 50%;
    position: relative;
}

.carousel img {
    width: 100%;
    display: none;
    border-radius: 5px;
}

.carousel img.active {
    display: block;
}

.carousel-controls {
    position: absolute;
    width: 100%;
    top: 50%;
    display: flex;
    justify-content: space-between;
    transform: translateY(-50%);
}

.carousel-controls button {
    background-color: rgba(0, 0, 0, 0.5);
    color: white;
    border: none;
    padding: 10px;
    cursor: pointer;
}

/* Product Info */
.product-info {
    width: 50%;
    padding: 20px;
}

h1 {
    font-size: 24px;
}

.price {
    font-size: 24px;
    font-weight: bold;
    color: #ff4500;
}

.old-price {
    font-size: 18px;
    color: gray;
    text-decoration: line-through;
    margin-left: 10px;
}

.discount {
    background-color: red;
    color: white;
    padding: 3px 6px;
    border-radius: 5px;
    margin-left: 10px;
}

.description {
    font-size: 16px;
    margin: 15px 0;
}

/* Quantity Selector */
.quantity {
    margin-top: 10px;
}

.qty-btn {
    background-color: #ddd;
    border: none;
    padding: 5px 10px;
    cursor: pointer;
}

#quantity {
    width: 30px;
    text-align: center;
}

/* Buttons */
.buttons {
    margin-top: 15px;
}

.add-to-cart, .buy-now {
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    font-size: 16px;
    margin-right: 10px;
}

.add-to-cart {
    background-color: #007bff;
    color: white;
}

.buy-now {
    background-color: #ff4500;
    color: white;
}

/* Additional Info */
.additional-info {
    margin-top: 20px;
}

.additional-info ul {
    list-style-type: square;
    padding-left: 20px;
}

    </style>
</head>
<body>

    <header>
        <div class="navbar">
            <h2>eShop</h2>
            <button class="cart-btn">🛒 Cart</button>
        </div>
    </header>

    <div class="product-container">
        <!-- Product Image Carousel -->
        <div class="carousel">
            @foreach ($product->files as $index=> $file)
            <img src="{{ $file->file_url }}" class="{{ $index===0 ? 'active': '' }}" alt="Product Image{{ $index + 1 }}">
            @endforeach
            <div class="carousel-controls">
                <button id="prev">❮</button>
                <button id="next">❯</button>
            </div>
        </div>

        <!-- Product Details -->
        <div class="product-info">
            <h1>Luxury Leather Handbag</h1>
            <p class="price">$149.99 <span class="old-price">$199.99</span> <span class="discount">-25%</span></p>
            <p class="description">Premium quality leather handbag with spacious compartments and an elegant design.</p>

            <div class="quantity">
                <label>Quantity:</label>
                <button class="qty-btn" id="minus">-</button>
                <input type="text" id="quantity" value="1">
                <button class="qty-btn" id="plus">+</button>
            </div>

            <div class="buttons">
                <button class="add-to-cart">Add to Cart</button>
                <button class="buy-now">Buy Now</button>
            </div>

            <div class="additional-info">
                <h3>Product Details</h3>
                <ul>
                    <li>Material: Genuine Leather</li>
                    <li>Color Options: Black, Brown, Red</li>
                    <li>Dimensions: 30cm x 25cm x 15cm</li>
                    <li>Shipping: Free worldwide shipping</li>
                </ul>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
    let images = document.querySelectorAll(".carousel img");
    let currentIndex = 0;

    function showImage(index) {
        images.forEach(img => img.classList.remove("active"));
        images[index].classList.add("active");
    }

    document.getElementById("next").addEventListener("click", function () {
        currentIndex = (currentIndex + 1) % images.length;
        showImage(currentIndex);
    });

    document.getElementById("prev").addEventListener("click", function () {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        showImage(currentIndex);
    });

    showImage(currentIndex);

    // Quantity Selector
    document.getElementById("plus").addEventListener("click", function () {
        let qty = document.getElementById("quantity");
        qty.value = parseInt(qty.value) + 1;
    });

    document.getElementById("minus").addEventListener("click", function () {
        let qty = document.getElementById("quantity");
        if (parseInt(qty.value) > 1) {
            qty.value = parseInt(qty.value) - 1;
        }
    });
});

    </script>
    <script src="script.js"></script>
</body>
</html>




@endsection

