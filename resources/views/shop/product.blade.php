@extends('layouts.main')
@section('content')


    <style>

        .gold {
            color: #FFDF00;
        }

        .product {
            border: 1px solid #dddddd;
            height: 330px;
        }

        .product-title {
            font-size: 20px;
        }

        .product-desc {
            font-size: 15px;
        }

        .product-price {
            font-size: 24px;
        }

        .product-rating {
            font-size: 22px;
            margin-bottom: 30px;
        }

        .product-stock {
            color: #42FF00;
            font-size: 20px;
            margin-top: 10px;
        }
        
        .display-items {
            padding: 0px 0 0px 0;
            float: left;
            position: relative;
            overflow: hidden;
            max-width: 100%;
            height: 350px;
            width: 150px;
        }

        .display-item {
            height: 110px;
            width: 125px;
            display: block;
            float: left;
            position: relative;
            padding-right: 25px;
            border-right: 1px solid #DDD;
            border-top: 1px solid #DDD;
            border-bottom: 1px solid #DDD;
        }

        .display-item > img {
            max-height: 120px;
            max-width: 120px;
            opacity: 0.75;
            transition: all .2s ease-in;
            -o-transition: all .2s ease-in;
            -moz-transition: all .2s ease-in;
            -webkit-transition: all .2s ease-in;
        }

        .display-item > img:hover {
            cursor: pointer;
            opacity: 1;
        }

        .display-image-left > center > img, .display-image-right > center > img {
            max-height: 175px;
        }

    </style>

    <div class="container-fluid">
        <div class="content-wrapper">
            <div class="item-container">
                <div class="container">
                    <div class="col-md-12">

                        <div class="col-md-6">
                            <div class="product col-md-3 service-image-left">

                                    <img id="item-display" src="" alt=""></img>
                            </div>

                            <div class="container display-items col-sm-2 col-md-2 pull-left">
                                <center>
                                    <a id="item-1" class="display-item">
                                        <img src="" alt=""></img>
                                    </a>
                                    <a id="item-2" class="display-item">
                                        <img src="" alt=""></img>
                                    </a>
                                    <a id="item-3" class="display-item">
                                        <img src="" alt=""></img>
                                    </a>
                                </center>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="product-title">Product Name</div>
                            <div class="product-desc">Product Descriptions - Tag Line</div>
                            <div class="product-rating"><i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i>
                                <i class="fa fa-star gold"></i> <i class="fa fa-star-o"></i> <i
                                        class="fa fa-star-o"></i></div>
                            <hr>
                            <div class="product-price">$ 1000.00</div>
                            <div class="product-stock">In Stock</div>
                            <hr>
                            <div class="btn-group cart">
                                <button type="button" class="btn btn-success">
                                    Add to cart
                                </button>
                            </div>
                            <div class="btn-group wishlist">
                                <button type="button" class="btn btn-danger">
                                    Add to wishlist
                                </button>
                            </div>
                        </div>


                    </div>


                </div>
            </div>

            <div class="container-fluid" style="margin-top:5% ">
                <div class="col-md-12 product-info">
                    <ul id="myTab" class="nav nav-tabs nav_tabs">

                        <li class="active"><a href="#service-one" data-toggle="tab">DETAILS</a></li>
                        <li><a href="#service-three" data-toggle="tab">REVIEWS</a></li>

                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade in active" id="service-one">

                            <section class="container product-info">

                                Details of the product

                            </section>

                        </div>
                        <div class="tab-pane fade" id="service-two">

                            <section class="container">

                            </section>

                        </div>
                        <div class="tab-pane fade" id="service-three">

                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>

@stop