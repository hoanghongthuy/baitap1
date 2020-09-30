@extends('layouts.layout1')

@section('banner')
    @parent
@stop

@section('sachbanchay')
<section class="recomended-sec">
    <div class="container">
        <div class="title">
            <h2>Sách bán chạy</h2>
            <hr>
        </div>
        <div class="row">
        @foreach ($banchay as $item)
            <div class="col-lg-3 col-md-6">
                <div class="item">
                    <img src="{{url('book-store')}}/html/images/img1.jpg" alt="img">
                    <h3>{{ $item->tensach }}</h3>
                    <h6><span class="price">$49</span> / <a href="#">Buy Now</a></h6>
                    <div class="hover">
                        <a href="product-single.html">
                        <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</section>
@endsection
