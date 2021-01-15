@extends('Front.Layouts.layout')
@section('content')
<section class="ftco-section bg-light ftco-no-pb pb-5">
    <div class="container-fluid px-0">
        <div class="row no-gutters justify-content-center mb-3 ">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Velara Rooms</span>
                <h2 class="mb-4">Categories</h2>
            </div>
        </div>
        <div class="container">
            <div class="row no-gutters">
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
                @if(isset($rooms))
                    @foreach($rooms as $model)
                        <div class="col-lg-6">
                            <div class="room-wrap d-md-flex">
                                <a href="#" class="img" style="background-image: url({{'/'.$model->img}});"></a>
                                <div class="half left-arrow d-flex align-items-center">
                                    <div class="text p-4 p-xl-5 text-center">
                                        <p class="star mb-0"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
                                        <p class="mb-0"><span class="price mr-1">${{$model->price}}</span> <span class="per">per night</span></p>
                                        <h3 class="mb-3"><a href="#">{{$model->name}}</a></h3>
                                        <p class="pt-1"><a href="#" class="btn-custom px-3 py-2">View Room Details <span class="icon-long-arrow-right"></span></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</section>
<section class="instagram pt-5">
    <div class="container-fluid">
        <div class="row no-gutters justify-content-center pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Photos</span>
                <h2><span>Rooms</span></h2>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-sm-12 col-md ftco-animate">
                <a href="/Front/images/10.jpg" class="insta-img image-popup" style="background-image: url('/Front/images/10.jpg');">
                    <div class="icon d-flex justify-content-center">
                        <span class="icon-instagram align-self-center"></span>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md ftco-animate">
                <a href="/Front/images/11.jpg" class="insta-img image-popup" style="background-image: url('/Front/images/11.jpg');">
                    <div class="icon d-flex justify-content-center">
                        <span class="icon-instagram align-self-center"></span>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md ftco-animate">
                <a href="/Front/images/rasm14.jpg" class="insta-img image-popup" style="background-image: url('/Front/images/rasm14.jpg');">
                    <div class="icon d-flex justify-content-center">
                        <span class="icon-instagram align-self-center"></span>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md ftco-animate">
                <a href="/Front/images/rasm10.jpg" class="insta-img image-popup" style="background-image: url('/Front/images/rasm10.jpg');">
                    <div class="icon d-flex justify-content-center">
                        <span class="icon-instagram align-self-center"></span>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md ftco-animate">
                <a href="/Front/images/3.jpg" class="insta-img image-popup" style="background-image: url('/Front/images/3.jpg');">
                    <div class="icon d-flex justify-content-center">
                        <span class="icon-instagram align-self-center"></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
