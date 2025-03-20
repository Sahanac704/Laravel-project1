@extends('frontend.layout.master')
@section('container')

{{-- about us --}}
<div class="container-fluid mt-5 px-5">
    <div class="row">
        <div class="col-md-6">
            <button type="button" class="btn btn-light rounded-pill text-primary"><i class="bi1 bi-info-circle"></i> About Us</button>
            <h1>Lorem ipsum dolor sit, amet consectetur adipisicing elit</h1>
            <p>Numquam voluptatem facere similique obcaecati cumque molestiae, totam vitae a aliquam labore quisquam neque vero ducimus nisi reprehenderit itaque beatae dolorum quae.</p>
        </div>
        <div class="col-md-6 mt-5">
            <p>Numquam voluptatem facere similique obcaecati cumque molestiae, totam vitae a aliquam labore quisquam neque vero ducimus nisi reprehenderit itaque beatae dolorum quae.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione architecto consequatur nemo adipisci quisquam ullam ut voluptas, hic vitae ipsam cumque animi, reiciendis iusto magni omnis ipsa saepe quis? Repudiandae.</p>
        </div>
    </div>
</div>


{{-- for 3 column --}}
<div class="container-fluid mt-5 px-5">
    <div class="row">
        <div class="col-md-4">
            <button type="button" class="abbtn"><i class="bi3 bi-bullseye"></i></button>
            <h4 style="margin-top: 20px; margin-bottom: 20px;">At vero eos</h4>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit nobis deleniti quia assumenda omnis iure, ex commodi molestias eveniet rem hic explicabo dignissimos, pariatur ullam dolores, at esse in iusto?</p>
        </div>
        <div class="col-md-4">
            <button type="button" class="abbtn"><i class="bi3 bi-person-check"></i></button>
            <h4 style="margin-top: 20px; margin-bottom: 20px;">At vero eos</h4>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit nobis deleniti quia assumenda omnis iure, ex commodi molestias eveniet rem hic explicabo dignissimos, pariatur ullam dolores, at esse in iusto?</p>
        </div>
        <div class="col-md-4">
            <button type="button" class="abbtn"><i class="bi3 bi-clipboard-data"></i></button>
            <h4 style="margin-top: 20px; margin-bottom: 20px;">At vero eos</h4>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit nobis deleniti quia assumenda omnis iure, ex commodi molestias eveniet rem hic explicabo dignissimos, pariatur ullam dolores, at esse in iusto?</p>
        </div>
    </div>
</div>

{{-- image --}}
<div class="container-fluid mt-5 px-5">
    <div >
        <img class="imageplay" src="assets/images/imageplay.webp" alt="">
    </div>
</div>

{{-- staff --}}
<div class="container-fluid mt-5 p-5">
    <div class="row">
        <div class="col-md-3">

        </div>
        <div class="col-md-3">
            <h1>185+</h1>
            <h6>Nemo enim ipsam</h6>
        </div>
        <div class="col-md-3">
            <h1>32K</h1>
            <h6>Voluptatem sequi</h6>
        </div>
        <div class="col-md-3">
            <h1>128+</h1>
            <h6>Dolor sit consectetur</h6>
        </div>
    </div>
</div>




@endsection
