@extends('layouts.default' , ['bodyClass' => 'companies'])

@section('meta_title', 'Companies')
@section('meta_description', '')
@section('meta_keywords', '')

@section('stylesheet')

@endsection

@section('content')
<div class="product-deails-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-9">
                <div class="product-details-content row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="zoomWrapper">
                            <div id="img-1" class="zoomWrapper single-zoom">
                                <a href="#">
                                    <img id="zoom1" src="/assets/img/product/20.jpg" data-zoom-image="/assets/img/product/20.jpg" alt="big-1">
                                </a>
                            </div>
                            <div class="product-thumb row">
                                <ul class="p-details-slider" id="gallery_01">
                                    <li class="col-lg-12">
                                        <a class="elevatezoom-gallery" href="#" data-image="/assets/img/product/20.jpg" data-zoom-image="/assets/img/product/20.jpg"><img src="/assets/img/product/20.jpg" alt=""></a>
                                    </li>
                                    <li class="col-lg-12">
                                        <a class="elevatezoom-gallery" href="#" data-image="/assets/img/product/11.jpg" data-zoom-image="/assets/img/product/11.jpg"><img src="/assets/img/product/11.jpg" alt=""></a>
                                    </li>
                                    <li class="col-lg-12">
                                        <a class="elevatezoom-gallery" href="#" data-image="/assets/img/product/4.jpg" data-zoom-image="/assets/img/product/4.jpg"><img src="/assets/img/product/4.jpg" alt=""></a>
                                    </li>
                                    <li class="col-lg-12">
                                        <a class="elevatezoom-gallery" href="#" data-image="/assets/img/product/7.jpg" data-zoom-image="/assets/img/product/7.jpg"><img src="/assets/img/product/7.jpg" alt=""></a>
                                    </li>
                                    <li class="col-lg-12">
                                        <a class="elevatezoom-gallery" href="#" data-image="/assets/img/product/14.jpg" data-zoom-image="/assets/img/product/14.jpg"><img src="/assets/img/product/14.jpg" alt=""></a>
                                    </li>
                                    <li class="col-lg-12">
                                        <a class="elevatezoom-gallery" href="#" data-image="/assets/img/product/16.jpg" data-zoom-image="/assets/img/product/16.jpg"><img src="/assets/img/product/16.jpg" alt=""></a>
                                    </li>
                                    <li class="col-lg-12">
                                        <a class="elevatezoom-gallery" href="#" data-image="/assets/img/product/18.jpg" data-zoom-image="/assets/img/product/18.jpg"><img src="/assets/img/product/18.jpg" alt=""></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="product-details-conetnt">

                            <div class="product-name">
                                <h1> Donec ac tempus </h1>
                            </div>
                            <p class="no-rating no-margin"><a href="#">Be the first to review this product</a></p>
                            <p class="availability">Availability: <span>In stock</span></p>
                            <div class="price-box">
                                <p class="old-price">
                                    <span class="price">$170.00</span>
                                </p>
                                <p class="special-price">
                                    <span class="price">$120.00</span>
                                </p>
                            </div>
                            <div class="details-description">
                                <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et
                                  mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum
                                  ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia 
                                </p>
                            </div>

                            <div class="add-to-cart-qty">

                                <div class="cart-qty-button">
                                    <label for="qty">Qty:</label>
                                    <input type="text" class="input-text qty" value="1" maxlength="12" id="qty" name="qty">
                                    <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3">
            </div>
        </div>
    </div>
</div>
<!--End of Product Details Area-->


  @endsection

  @section('javascript')

  @stop
