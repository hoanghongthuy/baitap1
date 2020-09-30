<!DOCTYPE html>
<html lang="en">

@include('user.subpage.head')

<body>
@include('user.subpage.header')

@section('banner')
    <section class="slider">
        <div class="container">
            <div id="owl-demo" class="owl-carousel owl-theme">
                <div class="item">
                    <div class="slide">
                        <img src="{{url('book-store')}}/html/images/slide1.jpg" alt="slide1">
                        <div class="content">
                            <div class="title">
                                <h3>welcome to bookstore</h3>
                                <h5>Discover the best books online with us</h5>
                                <a href="#" class="btn">shop books</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="slide">
                        <img src="{{url('book-store')}}/html/images/slide2.jpg" alt="slide1">
                        <div class="content">
                            <div class="title">
                                <h3>welcome to bookstore</h3>
                                <h5>Discover the best books online with us</h5>
                                <a href="#" class="btn">shop books</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="slide">
                        <img src="{{url('book-store')}}/html/images/slide3.jpg" alt="slide1">
                        <div class="content">
                            <div class="title">
                                <h3>welcome to bookstore</h3>
                                <h5>Discover the best books online with us</h5>
                                <a href="#" class="btn">shop books</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="slide">
                        <img src="{{url('book-store')}}/html/images/slide4.jpg" alt="slide1">
                        <div class="content">
                            <div class="title">
                                <h3>welcome to bookstore</h3>
                                <h5>Discover the best books online with us</h5>
                                <a href="#" class="btn">shop books</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@show

@yield('sachbanchay')

@section('about')
    <section class="about-sec">
        <div class="about-img">
            <figure style="background:url({{url('book-store')}}/html/images/about-img.jpg)no-repeat;"></figure>
        </div>
        <div class="about-content">
            <h2>About bookstore,</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and Scrambled it to make a type and typesetting industry. Lorem Ipsum has been the book. </p>
            <p>It has survived not only fiveLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and</p>
            <div class="btn-sec">
                <a href="shop.html" class="btn yellow">shop books</a>
                <a href="login.html" class="btn black">subscriptions</a>
            </div>
        </div>
    </section>
@show

@yield('sachkhuyenmai')
    <section class="recent-book-sec">
        <div class="container">
            <div class="title">
                <h2>highly recommendes books</h2>
                <hr>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="item">
                        <img src="{{url('book-store')}}/html/images/r1.jpg" alt="img">
                        <h3><a href="#">Keepers of the kalachakara</a></h3>
                        <h6><span class="price">$19</span> / <a href="#">Buy Now</a></h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="item">
                        <img src="{{url('book-store')}}/html/images/r2.jpg" alt="img">
                        <h3><a href="#">Keepers of the kalachakara</a></h3>
                        <h6><span class="price">$19</span> / <a href="#">Buy Now</a></h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="item">
                        <img src="{{url('book-store')}}/html/images/r3.jpg" alt="img">
                        <h3><a href="#">Keepers of the kalachakara</a></h3>
                        <h6><span class="price">$19</span> / <a href="#">Buy Now</a></h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="item">
                        <img src="{{url('book-store')}}/html/images/r4.jpg" alt="img">
                        <h3><a href="#">Keepers of the kalachakara</a></h3>
                        <h6><span class="price">$19</span> / <a href="#">Buy Now</a></h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="item">
                        <img src="{{url('book-store')}}/html/images/r5.jpg" alt="img">
                        <h3><a href="#">Keepers of the kalachakara</a></h3>
                        <h6><span class="price">$19</span> / <a href="#">Buy Now</a></h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="item">
                        <img src="{{url('book-store')}}/html/images/r1.jpg" alt="img">
                        <h3><a href="#">Keepers of the kalachakara</a></h3>
                        <h6><span class="price">$19</span> / <a href="#">Buy Now</a></h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="item">
                        <img src="{{url('book-store')}}/html/images/r2.jpg" alt="img">
                        <h3><a href="#">Keepers of the kalachakara</a></h3>
                        <h6><span class="price">$19</span> / <a href="#">Buy Now</a></h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="item">
                        <img src="{{url('book-store')}}/html/images/r3.jpg" alt="img">
                        <h3><a href="#">Keepers of the kalachakara</a></h3>
                        <h6><span class="price">$19</span> / <a href="#">Buy Now</a></h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="item">
                        <img src="{{url('book-store')}}/html/images/r4.jpg" alt="img">
                        <h3><a href="#">Keepers of the kalachakara</a></h3>
                        <h6><span class="price">$19</span> / <a href="#">Buy Now</a></h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="item">
                        <img src="{{url('book-store')}}/html/images/r5.jpg" alt="img">
                        <h3><a href="#">Keepers of the kalachakara</a></h3>
                        <h6><span class="price">$19</span> / <a href="#">Buy Now</a></h6>
                    </div>
                </div>
            </div>
            <div class="btn-sec">
                <a href="#" class="btn gray-btn">view all books</a>
            </div>
        </div>
    </section>
    <section class="features-sec">
        <div class="container">
            <ul>
                <li>
                    <span class="icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                    <h3>SAFE SHOPPING</h3>
                    <h5>Safe Shopping Guarantee</h5>
                    <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's...</h6>
                </li>
                <li>
                    <span class="icon return"><i class="fa fa-reply-all" aria-hidden="true"></i></span>
                    <h3>30- DAY RETURN</h3>
                    <h5>Moneyback guarantee</h5>
                    <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's...</h6>
                </li>
                <li>
                    <span class="icon chat"><i class="fa fa-comments" aria-hidden="true"></i></span>
                    <h3>24/7 SUPPORT</h3>
                    <h5>online Consultations</h5>
                    <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's...</h6>
                </li>
            </ul>
        </div>
    </section>
    <section class="offers-sec" style="background:url(images/offers.jpg)no-repeat;">
        <div class="cover"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="detail">
                        <h3>Top 50% OFF on Selected</h3>
                        <h6>We are now offering some good discount 
                    on selected books go and shop them</h6>
                        <a href="products.html" class="btn blue-btn">view all books</a>
                        <span class="icon-point percentage">
                            <img src="{{url('book-store')}}/html/images/precentagae.png" alt="">
                        </span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="detail">
                        <h3>Shop $ 500 Above and Get Extra!</h3>
                        <h6>We are now offering some good discount 
                    on selected books go and shop them</h6>
                        <a href="products.html" class="btn blue-btn">view all books</a>
                        <span class="icon-point amount"><img src="{{url('book-store')}}/html/images/amount.png" alt=""></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonial-sec">
        <div class="container">
            <div id="testimonal" class="owl-carousel owl-theme">
                <div class="item">
                    <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and Scrambled it to make a type and typesetting industry. been the book</h3>
                    <div class="box-user">
                        <h4 class="author">Susane Mathew</h4>
                        <span class="country">Australia</span>
                    </div>
                </div>
                <div class="item">
                    <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and Scrambled it to make a type and typesetting industry. been the book</h3>
                    <div class="box-user">
                        <h4 class="author">Susane Mathew</h4>
                        <span class="country">Australia</span>
                    </div>
                </div>
                <div class="item">
                    <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and Scrambled it to make a type and typesetting industry. been the book</h3>
                    <div class="box-user">
                        <h4 class="author">Susane Mathew</h4>
                        <span class="country">Australia</span>
                    </div>
                </div>
                <div class="item">
                    <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and Scrambled it to make a type and typesetting industry. been the book</h3>
                    <div class="box-user">
                        <h4 class="author">Susane Mathew</h4>
                        <span class="country">Australia</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="left-quote">
            <img src="{{url('book-store')}}/html/images/left-quote.png" alt="quote">
        </div>
        <div class="right-quote">
            <img src="{{url('book-store')}}/html/images/right-quote.png" alt="quote">
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="address">
                        <h4>Our Address</h4>
                        <h6>The BookStore Theme, 4th Store
                        Beside that building, USA</h6>
                        <h6>Call : 800 1234 5678</h6>
                        <h6>Email : info@bookstore.com</h6>
                    </div>
                    <div class="timing">
                        <h4>Timing</h4>
                        <h6>Mon - Fri: 7am - 10pm</h6>
                        <h6>​​Saturday: 8am - 10pm</h6>
                        <h6>​Sunday: 8am - 11pm</h6>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="navigation">
                        <h4>Navigation</h4>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="privacy-policy.html">Privacy Policy</a></li>
                            <li><a href="terms-conditions.html">Terms</a></li>
                            <li><a href="products.html">Products</a></li>
                        </ul>
                    </div>
                    <div class="navigation">
                        <h4>Help</h4>
                        <ul>
                            <li><a href="">Shipping & Returns</a></li>
                            <li><a href="privacy-policy.html">Privacy</a></li>
                            <li><a href="faq.html">FAQ’s</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form">
                        <h3>Quick Contact us</h3>
                        <h6>We are now offering some good discount 
                            on selected books go and shop them</h6>
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <input placeholder="Name" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" placeholder="Email" required>
                                </div>
                                <div class="col-md-12">
                                    <textarea placeholder="Messege"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn black">Alright, Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h5>(C) 2017. All Rights Reserved. BookStore Wordpress Theme</h5>
                    </div>
                    <div class="col-md-6">
                        <div class="share align-middle">
                            <span class="fb"><i class="fa fa-facebook-official"></i></span>
                            <span class="instagram"><i class="fa fa-instagram"></i></span>
                            <span class="twitter"><i class="fa fa-twitter"></i></span>
                            <span class="pinterest"><i class="fa fa-pinterest"></i></span>
                            <span class="google"><i class="fa fa-google-plus"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    @include('user.subpage.script')
</body>

</html>