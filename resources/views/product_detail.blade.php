@extends('layouts.layout1')

@section('content')
    @include('user.subpage.breadcrumb')
    <section class="product-sec">
        <div class="container">
            <h1>{{$data->tensach}}</h1>
            <div class="row">
                <div class="col-md-6 slider-sec">
                    <!-- main slider carousel -->
                    <div id="myCarousel" class="carousel slide">
                        <!-- main slider carousel items -->
                        <div class="carousel-inner">
                            <div class="active item carousel-item" data-slide-number="0">
                                <img src="{{url('book-store')}}/html/images/product1.jpg" class="img-fluid">
                            </div>
                            <div class="item carousel-item" data-slide-number="1">
                                <img src="{{url('book-store')}}/html/images/product2.jpg" class="img-fluid">
                            </div>
                            <div class="item carousel-item" data-slide-number="2">
                                <img src="{{url('book-store')}}/html/images/product3.jpg" class="img-fluid">
                            </div>
                        </div>
                        <!-- main slider carousel nav controls -->
                        <ul class="carousel-indicators list-inline">
                            <li class="list-inline-item active">
                                <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#myCarousel">
                                <img src="{{url('book-store')}}/html/images/product1.jpg" class="img-fluid">
                            </a>
                            </li>
                            <li class="list-inline-item">
                                <a id="carousel-selector-1" data-slide-to="1" data-target="#myCarousel">
                                <img src="{{url('book-store')}}/html/images/product2.jpg" class="img-fluid">
                            </a>
                            </li>
                            <li class="list-inline-item">
                                <a id="carousel-selector-2" data-slide-to="2" data-target="#myCarousel">
                                <img src="{{url('book-store')}}/html/images/product3.jpg" class="img-fluid">
                            </a>
                            </li>
                        </ul>
                    </div>
                    <!--/main slider carousel-->
                </div>
                <div class="col-md-6 slider-content">
                    <p>{{$data->mota}}</p>
                    <ul>
                        <li>
                            <span class="name">Giá của sản phẩm</span><span class="clm">:</span>
                            <span class="price final">{{number_format($data->gia)}}VNĐ</span>
                        </li>
                    </ul>
                    <div class="btn-sec">
                        <button class="btn ">Add To cart</button>
                        <button class="btn black">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection