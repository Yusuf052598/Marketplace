<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{route('hotel')}}"><img src="/Front/images/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <!-- <span class="oi oi-menu"></span> -->
            Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{route('hotel')}}" class="nav-link">About hotel</a></li>
                <li class="nav-item"><a href="{{route('rooms')}}" class="nav-link">Rooms</a></li>
                <li class="nav-item"><a href="{{route('booking')}}" class="nav-link">Booking</a></li>
                <li class="nav-item"><a href="{{route('failes')}}" class="nav-link">Facilities</a></li>
                <li class="nav-item"><a href="{{route('news')}}" class="nav-link">News</a></li>
                <li class="nav-item"><a href="{{route('contacts')}}" class="nav-link">Contacts</a></li>
            </ul>
        </div>
    </div>
</nav>
@if(isset($news))
<div class="hero-wrap" style="background-image: url('/Front/images/rasm1.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
                <div class="text">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="{{route('hotel')}}">Home</a></span> <span>News</span></p>
                    <h1 class="mb-4 bread">News</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@elseif(isset($contacts))
<div class="hero-wrap" style="background-image: url('/Front/images/rasm8.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
                <div class="text">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="{{route('hotel')}}">Home</a></span> <span>Contact</span></p>
                    <h1 class="mb-5 bread">Contact us</h1>
                </div>
            </div>
        </div>
    </div>
</div>

@elseif(isset($books))
<div class="hero-wrap" style="background-image: url('/Front/images/rasm9.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
                <div class="text">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="{{route('hotel')}}">Home</a></span> <span>Booking</span></p>
                    <h1 class="mb-4 bread">About us</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@elseif(isset($rooms))
<div class="hero-wrap" style="background-image: url('/Front/images/5.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
                <div class="text">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="{{route('hotel')}}{{route('hotel')}}">Home</a></span> <span>About</span></p>
                    <h1 class="mb-4 bread">Rooms</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@elseif(isset($failes))
<div class="hero-wrap" style="background-image: url('/Front/images/rasm21.jpg');overflow: hidden;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
                <div class="text">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="{{route('hotel')}}">Home</a></span> <span>Facilies</span></p>
                    <h1 class="mb-4 bread">Facilies</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@else
<div class="hero">
    <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image:url('/Front/images/rasm5.jpg');">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center">
                    <div class="col-md-8 ftco-animate">
                        <div class="text mb-5 pb-5">
                            <h1 class="mb-3">Velara hotel</h1>
                            <h2>More than a hotel... an experience</h2>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 pr-1 aside-stretch">
                                        <form action="#" class="booking-form  p-4"  style="color: white;">
                                            <div class="row">
                                                VELARA HOTEL offers its guests its spacious and comfortable rooms, which impress with their unforgettable sensations.
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-item" style="background-image:url('/Front/images/rasm22.jpg'); overflow: hidden;">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center">
                    <div class="col-md-8 ftco-animate">
                        <div class="text mb-5 pb-5">
                            <h1 class="mb-3">Velara hotel</h1>
                            <h2>Velara Hotel &amp; Resort</h2>
                            <!-- <section class="ftco-booking text-begin"> -->
                                <!-- <div class="container"> -->
                                    <!-- <div class="row"> -->
                                        <div class="col-lg-12 pr-1 aside-stretch">
                                            <form action="#" class="booking-form  p-4"  style="color: white;">
                                                <div class="row">
                                                    VELARA HOTEL offers its guests its spacious and comfortable rooms, which impress with their unforgettable sensations.
                                                </div>
                                            </form>
                                        </div>
                                    <!-- </div> -->
                                <!-- </div> -->
                                <!-- </section> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @endif
