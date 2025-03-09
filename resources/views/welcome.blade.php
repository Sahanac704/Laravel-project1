@extends('frontend.layout.master')
@section('container')
{{-- two column --}}
<div class="container-fluid">
    <div class="row p-5">
        <div class="col-md-6">

            <div class="badge rounded-pill p-2">
                <span class="round"><h6>New Collection 2025</h6></span>
            </div>

            <div class="heading1 mt-3">
                <h1 class="heading1">Discover Stylish <span class="fashion">Fashion</span> For Every Season</h1>
            </div>

            <p class="paragraph1 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum accusantium at alias illum itaque vero eaque consequuntur molestiae blanditiis similique saepe eveniet soluta ab illo commodi laborum, aut, eius eligendi.</p>

            <div class="button1 mt-4 ">
                <button type="button" class="btn btn-primary px-3">Shop Now <ion-icon name="arrow-forward-outline"></ion-icon></button>
                <button type="button" class="btn btn-white border border-secondary px-3">View Collection</button>
            </div>

            <div class="feature mt-4">
                <div class="row">
                <div class="col-md-4">
                <div class="feature-item">
                    <i class="bi1 bi-truck"></i>
                    <span>Free Shipping</span>
                </div>
                </div>
                <div class="col-md-4">
                <div class="feature-item">
                    <i class="bi1 bi-shield-check"></i>
                    <span>Secure Payment</span>
                </div>
                </div>
                <div class="col-md-4">
                <div class="feature-item">
                    <i class="bi1 bi-arrow-repeat"></i>
                    <span>Easy Returns</span>
                </div>
                </div>
                </div>
            </div>

        </div>

        <div class="col-md-6">
            <div>
                <img class="image1" src="https://bootstrapmade.com/content/demo/eStore/assets/img/product/product-f-9.webp" alt="">
            </div>
        </div>


    </div>
</div>

{{-- four column --}}
<div class="container-fluid bg bg-light mt-5">
    <div class="row mx-5 p-5 text-center">

        <div class="col-md-3">
            <div class="hover1">
                <i class="bi bi-truck"></i>
                <h3>Free Shipping</h3>
                <p> Assumenda molestiae reprehenderit ducimus, dolore pariatur nesciunt qui accusantium?</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="hover1">
                <i class="bi bi-piggy-bank"></i>
                <h3>Money Back Guarantee</h3>
                <p> Assumenda molestiae reprehenderit ducimus, dolore pariatur nesciunt qui accusantium?</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="hover1">
                <i class="bi bi-percent"></i>
                <h3>Discount Offers</h3>
                <p> Assumenda molestiae reprehenderit ducimus, dolore pariatur nesciunt qui accusantium?</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="hover1">
                <i class="bi bi-headset"></i>
                <h3>24/7 Support</h3>
                <p> Assumenda molestiae reprehenderit ducimus, dolore pariatur nesciunt qui accusantium?</p>
            </div>
        </div>

    </div>
</div>

{{-- slider --}}
<div class="container-fluid mt-5 bg bg-white p-5">
    <div class="slider">
        <div class="row">
            <div class="col-md-2">
                <div class="card text-center" style="width: 200px;">
                    <img src="assets/images/bag.webp" class="card-img-top slideimage" alt="...">
                    <div class="card-body">
                        <h6>Bag</h6>
                        <p class="card-text">12 Products</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card text-center" style="width: 200px;">
                    <img src="assets/images/hoodie.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6>Hoodie</h6>
                        <p class="card-text">10 Products</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card text-center" style="width: 200px;">
                    <img src="assets/images/leatherbag.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6>Leather Bag</h6>
                        <p class="card-text">5 Products</p>
                    </div>
                </div>
            </div><div class="col-md-2">
                <div class="card text-center" style="width: 200px;">
                    <img src="assets/images/jacket.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6>Jacket</h6>
                        <p class="card-text">8 Products</p>
                    </div>
                </div>
            </div><div class="col-md-2">
                <div class="card text-center" style="width: 200px;">
                    <img src="assets/images/shoes.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6>Shoes</h6>
                        <p class="card-text">15 Products</p>
                    </div>
                </div>
            </div><div class="col-md-2">
                <div class="card text-center" style="width: 200px;">
                    <img src="assets/images/glasses.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6>Glasses</h6>
                        <p class="card-text">12 Products</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- best seller --}}
<div class="container-fluid">
    <div class="heading text-center mb-5">
        <h2>Best Sellers</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div>
    <div class="row mx-5">
        <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                <span class="badge new">New</span>
                <img src="assets/images/shoes.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h6><a href="">lorem conseqedsh ex aliquid fuga</a></h6>
                    <h6 class="price mt-4">$89.99</h6>
                    <div class="rating mt-3"><i class="biss bi-star-fill"></i><i class="bis bi-star-fill"></i><i class="bis bi-star-fill"></i><i class="bis bi-star-fill"></i><i class="bis bi-star-half"></i></div>
                    <a href="#" class="btn btn-primary px-5 mt-3"><i class="bi1 bi-bag-plus"></i> Add to Cart</a>
                </div>
              </div>
        </div>
        <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                <span class="badge sale">Sale</span>
                <img src="assets/images/jacket.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h6><a href="">lorem conseqedsh ex aliquid fuga</a></h6>
                    <h6 class="price mt-4">$55.99</h6>
                    <div class="rating mt-3"><i class="biss bi-star-fill"></i><i class="bis bi-star-fill"></i><i class="bis bi-star-fill"></i><i class="bis bi-star-half"></i><i class="bis bi-star"></i></div>
                    <a href="#" class="btn btn-primary px-5 mt-3"><i class="bi1 bi-bag-plus"></i> Add to Cart</a>
                </div>
              </div>
        </div>
        <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                <span class="badge sale">Sale</span>
                <img src="assets/images/hoodie.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h6><a href="">lorem conseqedsh ex aliquid fuga</a></h6>
                    <h6 class="price mt-4">$59.99</h6>
                    <div class="rating mt-3"><i class="biss bi-star-fill"></i><i class="bis bi-star-fill"></i><i class="bis bi-star-fill"></i><i class="bis bi-star-fill"></i><i class="bis bi-star-fill"></i></div>
                    <a href="#" class="btn btn-primary px-5 mt-3"><i class="bi1 bi-bag-plus"></i> Add to Cart</a>
                </div>
              </div>
        </div>
        <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                <span class="badge new">New</span>
                <img src="assets/images/bag.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h6><a href="">lorem conseqedsh ex aliquid fuga</a></h6>
                    <h6 class="price mt-4">$39.99</h6>
                    <div class="rating mt-3"><i class="biss bi-star-fill"></i><i class="bis bi-star-fill"></i><i class="bis bi-star-fill"></i><i class="bis bi-star"></i><i class="bis bi-star"></i></div>
                    <a href="#" class="btn btn-primary px-5 mt-3"><i class="bi1 bi-bag-plus"></i>Add to Cart</a>
                </div>
              </div>
        </div>
    </div>
</div>

{{-- categories --}}
<div class="container-fluid p-5 mt-5">
    <div class="category text-center">
        <a class="btn btn-primary rounded-pill px-4" href="#" role="button">All</a>
        <a class="btn btn-primary rounded-pill px-2" href="#" role="button">Clothing</a>
        <a class="btn btn-primary rounded-pill px-2" href="#" role="button">Accessories</a>
        <a class="btn btn-primary rounded-pill px-2" href="#" role="button">Electronics</a>
    </div>
    <div class="row mx-5 mt-5">
        <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                <span class="badge new">New</span>
                <img src="assets/images/shoes.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h6><a href="">lorem conseqedsh ex aliquid fuga</a></h6>
                    <h6 class="price mt-4">$59.99</h6>
                    <div class="rating mt-3"><i class="biss bi-star-fill"></i><i class="bis bi-star-fill"></i><i class="bis bi-star-fill"></i><i class="bis bi-star-fill"></i><i class="bis bi-star-fill"></i></div>
                    <a href="#" class="btn btn-primary px-5 mt-3"><i class="bi1 bi-bag-plus"></i> Add to Cart</a>
                    <div class="overlayimg">
                        <img src="assets/images/shoes1.webp" class="card-img-top" alt="...">
                        <button type="button" class="btn btn-white rounded-circle"><i class="bi1 bi-heart"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                <span class="badge new">New</span>
                <img src="assets/images/leatherbag.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h6><a href="">lorem conseqedsh ex aliquid fuga</a></h6>
                    <h6 class="price mt-4">$89.99</h6>
                    <div class="rating mt-3"><i class="biss bi-star-fill"></i><i class="bis bi-star-fill"></i><i class="bis bi-star-fill"></i><i class="bis bi-star-fill"></i><i class="bis bi-star-half"></i></div>
                    <a href="#" class="btn btn-primary px-5 mt-3"><i class="bi1 bi-bag-plus"></i> Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                <span class="badge new">New</span>
                <img src="assets/images/bag.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h6><a href="">lorem conseqedsh ex aliquid fuga</a></h6>
                    <h6 class="price mt-4">$89.99</h6>
                    <div class="rating mt-3"><i class="biss bi-star-fill"></i><i class="bis bi-star-fill"></i><i class="bis bi-star-fill"></i><i class="bis bi-star"></i><i class="bis bi-star"></i></div>
                    <a href="#" class="btn btn-primary px-5 mt-3"><i class="bi1 bi-bag-plus"></i> Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                <span class="badge new">New</span>
                <img src="assets/images/jacket.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h6><a href="">lorem conseqedsh ex aliquid fuga</a></h6>
                    <h6 class="price mt-4">$55.99</h6>
                    <div class="rating mt-3"><i class="biss bi-star-fill"></i><i class="bis bi-star-fill"></i><i class="bis bi-star-fill"></i><i class="bis bi-star-fill"></i><i class="bis bi-star-half"></i></div>
                    <a href="#" class="btn btn-primary px-5 mt-3"><i class="bi1 bi-bag-plus"></i> Add to Cart</a>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- view button --}}
<div class="button2 text-center mt-5 mb-5">
    <button type="button" class="btn btn-primary px-5 rounded-pill">View All Products<ion-icon name="arrow-forward-outline"></ion-icon></button>
</div>
@endsection
