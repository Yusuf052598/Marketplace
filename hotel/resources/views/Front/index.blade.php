@extends('Front.Layouts.layout')
@section('content')
<section class="ftco-section ftco-no-pt ftco-no-pb ftco-services-wrap">
    <div class="col-md-7 heading-section text-center ftco-animate  py-5" style="margin: 0 auto" >
        <span class="subheading">Our facilities</span>
        <h2 class="mb-4">Facilities</h2>
    </div>
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-3">
                <a href="{{route('failes')}}" class="services-wrap img align-items-end d-flex" style="background-image: url('/Front/images/room.jpg');">
                    <div class="text text-center pb-2">
                        <h3>Special Rooms</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{route('failes')}}" class="services-wrap img align-items-end d-flex" style="background-image: url('/Front/images/meeting.jpg');">
                    <div class="text text-center pb-2">
                        <h3>Congress hall</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{route('failes')}}" class="services-wrap img align-items-end d-flex" style="background-image: url('/Front/images/resto.jpg');">
                    <div class="text text-center pb-2">
                        <h3>Restaurant</h3>
                    </div>
                </a>
            </div>
               <div class="col-md-3">
                <a href="{{route('failes')}}" class="services-wrap img align-items-end d-flex" style="background-image: url('/Front/images/img3.jpg');">
                    <div class="text text-center pb-2">
                        <h3>Fitness hall</h3>
                    </div>
                </a>
            </div>
        <!--     <div class="col-md-3">
                <div class="services-wrap services-overlay img align-items-center d-flex" style="background-image: url('/Front/images/img3.jpg');">
                    <div class="text text-center pb-2">
                        <h3 class="mb-0">Fitness hall</h3>
                        <div class="d-flex mt-2 justify-content-center">
                            <div class="icon">
                                <a href="#"><span class="ion-ios-arrow-forward"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>
<section class="mt-5">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Welcome to Velara Hotel</span>
                <h2 class="mb-4">About us</h2>
                <p>VELARA HOTEL offers its guests accommodation in one of 50 spacious and comfortable rooms,
                     designed in a modern and elegant European style. 
                    Guests can choose from rooms of various categories from Standard rooms to Business Suites.</p>
            </div>
        </div>
        <div class="row d-flex">
            <div class="col-md pr-md-1 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services py-4 d-block text-center">
                    <div class="d-flex justify-content-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            {{-- <span class="flaticon-reception-bell"></span> --}}
                            <img src="/Front/images/icon1.png" alt="">
                        </div>
                    </div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Friendly Service</h3>
                    </div>
                </div>
            </div>
            {{-- <div class="col-md px-md-1 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services active py-4 d-block text-center">
                    <div class="d-flex justify-content-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            
                            <img src="/Front/images/icon2.png" alt="">
                        </div>
                    </div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Get Breakfast</h3>
                    </div>
                </div>
            </div> --}}
            <div class="col-md px-md-1 d-flex align-sel Searchf-stretch ftco-animate">
                <div class="media block-6 services py-4 d-block text-center">
                    <div class="d-flex justify-content-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                        
                            <img src="/Front/images/icon2.png" alt="">
                        </div>
                    </div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Transfer Services</h3>
                    </div>
                </div>
            </div>
            <div class="col-md px-md-1 d-flex align-sel Searchf-stretch ftco-animate">
                <div class="media block-6 services py-4 d-block text-center">
                    <div class="d-flex justify-content-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            {{-- <span class="ion-ios-car"></span> --}}
                            <img src="/Front/images/icon3.png" alt="">
                        </div>
                    </div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Transfer Services</h3>
                    </div>
                </div>
            </div>
            <div class="col-md px-md-1 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services py-4 d-block text-center">
                    <div class="d-flex justify-content-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            {{-- <span class="ion-ios-spa"></span> --}}
                            <img src="/Front/images/icon4.png" alt="">
                        </div>
                    </div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Suits &amp; SPA</h3>
                    </div>
                </div>
            </div>
            <div class="col-md pl-md-1 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services py-4 d-block text-center">
                    <div class="d-flex justify-content-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            {{-- <span class="ion-ios-bed"></span> --}}
                            <img src="/Front/images/icon5.png" alt="">
                        </div>
                    </div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Cozy Rooms</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section bg-light ftco-room container">
    <div class="container-fluid px-0">
        <div class="row no-gutters justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Verala Rooms</span>
                <h2 class="mb-4">Hotel Master's Rooms</h2>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-6">
                <div class=" room-wrap1">
                    <div class="img img2 d-flex align-items-center">
                        <div class="wrap2">
                            
                        <div class="text text-center px-4 py-4">
                            <h2>Welcome to <a href="{{route('hotel')}}">Verala </a> Hotel</h2>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            @if(isset($rooms_model))
               @foreach($rooms_model as $model)
                <div class="col-lg-6">
                <div class="room-wrap d-md-flex">
                        <a href="{{route('rooms')}}" class="img" style="background-image: url({{'/'.$model->img}});"></a>
                     <div class="half left-arrow d-flex align-items-center">
                        <div class="text p-4 p-xl-5 text-center">
                            <p class="star mb-0"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
                            <p class="mb-0"><span class="price mr-1">${{$model->price}}</span> <span class="per">per night</span></p>
                            <h3 class="mb-3"><a href="#">{{$model->name}}</a></h3>
                            <p class="pt-1"><a href="{{route('rooms')}}" class="btn-custom px-3 py-2">View Room Details <span class="icon-long-arrow-right"></span></a></p>
                        </div>
                        </div>
                </div>
            </div>
                @endforeach
            @endif
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb px-0">
    <div class="container-fluid px-0">
        <div class="row no-gutters justify-content-end">
            <div class="col-md-12">
                <div id="homee" class="videoo">
                    <video width="1200" height="600px" autoplay muted="muted" loop="loop">
                      <source src="/Front/images/velara.mp4" type="video/mp4" >
                      <source src="mov_bbb.ogg" type="video/ogg">
                    </video>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section ftco-menu" style="background-image: url('/Front/images/restaurant-pattern.jpg);">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Restaurant</span>
                <h2>Restaurant</h2>
            </div>
        </div>
        <div class="row">
            @if(isset($res))
              @for($i=1;$i<sizeof($res);$i++)
                    <div class="col-md-6">
                        <div class="pricing-entry d-flex ftco-animate">
                            <div class="img order-md-last" style="background-image: url('{{'/'.$res[$i-1]->img}}');"></div>
                            <div class="desc pr-3 text-md-right">
                                <div class="d-md-flex text align-items-center">
                                    <h3 class="order-md-last heading-left"><span>{{$res[$i-1]->name}}</span></h3>
                                    <span class="price price-left">$20.00</span>
                                </div>
                                <div class="d-block">
                                    <p>{{$res[$i-1]->title['uz']}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="pricing-entry d-flex ftco-animate">
                            <div class="img" style="background-image: url('{{'/'.$res[$i]->img}}');"></div>
                            <div class="desc pl-3">
                                <div class="d-md-flex text align-items-center">
                                    <h3><span>{{$res[$i]->name}}</span></h3>
                                    <span class="price">$49.91</span>
                                </div>
                                <div class="d-block">
                                    <p>{{$res[$i]->title['uz']}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            @endif
        </div>
    </div>
</section>
<section class="">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Read Blog</span>
                <h2>Recent Blog</h2>
            </div>
        </div>
        <div class="row d-flex">
            @if(isset($news_model))
              @foreach($news_model as $model)
                <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="" class="block-20" style="background-image: url('{{'/'.$model->img}}');">
                    </a>
                    <div class="text mt-3 text-center">
                        <div class="meta mb-2">
                            <!-- <div><a href="#">July 03, 2019</a></div> -->
                            <!-- <div><a href="#">Admin</a></div> -->
                            <!-- <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div> -->
                        </div>
                        <h3 class="heading">
                            <a href="#">{{$model->title['uz']}}</a>
                        </h3>
                        <p><a href="#" class="btn-custom">Read more</a></p>
                    </div>
                </div>
            </div>
              @endforeach
            @endif
        </div>
    </div>
</section>
<section class="instagram pt-5">
    <div class="container-fluid">
        <div class="row no-gutters justify-content-center pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Photos</span>
                <h2><span>Social Setworks</span></h2>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-sm-12 col-md ftco-animate">
                <a href="/Front/images/6.jpg" class="insta-img image-popup" style="background-image: url('/Front/images/6.jpg');">
                    <div class="icon d-flex justify-content-center">
                        <span class="icon-instagram align-self-center"></span>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md ftco-animate">
                <a href="/Front/images/9.jpg" class="insta-img image-popup" style="background-image: url('/Front/images/9.jpg');">
                    <div class="icon d-flex justify-content-center">
                        <span class="icon-instagram align-self-center"></span>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md ftco-animate">
                <a href="/Front/images/10.jpg" class="insta-img image-popup" style="background-image: url('/Front/images/10.jpg');">
                    <div class="icon d-flex justify-content-center">
                        <span class="icon-instagram align-self-center"></span>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md ftco-animate">
                <a href="/Front/images/rasm22.jpg" class="insta-img image-popup" style="background-image: url('/Front/images/rasm22.jpg');">
                    <div class="icon d-flex justify-content-center">
                        <span class="icon-instagram align-self-center"></span>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md ftco-animate">
                <a href="/Front/images/1.jpg" class="insta-img image-popup" style="background-image: url('/Front/images/1.jpg');">
                    <div class="icon d-flex justify-content-center">
                        <span class="icon-instagram align-self-center"></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
