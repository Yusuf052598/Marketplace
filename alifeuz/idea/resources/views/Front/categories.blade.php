@extends('Front.layouts.layout')
@section('content')
    <div class="col-sm-8 col-12 col12">
        @if(!$news->isEmpty())
        <div class="container">
            <div class="header" style="height: 300px">
                <div class="head1" style="height: 200px"></div>
                @if(isset($news) and !$news->isEmpty())
                    <div class="img" style="top: 110px;">
                        <img src="{{'/'.$news[0]->category->image}}" style="width: 105px; height: 107px" class="rounded" alt="">
                    </div>
                    <div class="head2" style="height: 130px;">
                        <h2>{{$news[0]->category->name()}}</h2>
                        <p></p>
                    </div>
                @endif
            </div>

            <div class="navbar">
                <div class="dropdown dropdown2">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Популярное
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
                <div class="sviji" style="margin-top: 30px"> <a href="#">Свежее</a> </div>
            </div>
            <div class="banner">
                <div class="row">
                    <div class="col-12 col-sm-7" style="left:15px">
                        <div class="bg-white menu">
                             @if(isset($news))
                                @foreach($news as $new)
                                    <div class="posts" style="padding-bottom: 1px; width: 100%">
                                        <div class="posts__info">
                                            <p>
                                                <img src="{{'/'.$new->category->image}}" class="icons" alt="bu rasm" style="height: 25px;width: 25px">
                                                <a href="#" style="color: black;text-decoration: none">{{$new->category->name()}}</a>
                                            </p>
                                            <p class="username"> {{$new->user->name}}</p>
                                            <p class="data">
                                              {{MonthFunction($new->created_at)}}
                                            </p>
                                            <p>
                                                <i class="fa fa-eye" style="padding-right: 5px"></i>{{$new->read_count}}
                                            </p>
                                        </div>
                                        <div class="posts__head">
                                            <p>
                                                {{$new->title()}}
                                            </p>
                                        </div>
                                        <div class="posts__text">
                                            <p>
                                                {{$new->title()}}
                                            </p>
                                        </div>
                                        <div class="posts__foto">
                                            <img src="{{'/'.$new->img}}"  alt="">
                                        </div>
                                        <div class="posts__coments">
                                            <a href="#" style="color: #0c0c0c; text-decoration: none"><i class="far fa-comment"></i>   135</a>
                                            <a href="#" style="color: #0c0c0c;text-decoration: none"><i class="far fa-bookmark"></i>  25</a>
                                            <a href="#" style="color: #0c0c0c;text-decoration: none"><i class="fas fa-retweet" style="padding-right: 3px"></i>100</a>
                                            <a href="#" style="color: #0c0c0c;text-decoration: none">
                                                <i class="fas fa-angle-down" style="padding-right: 4px"></i>125<i class="fas fa-angle-up" style="padding-left: 1px"></i>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-12 col-sm-4" style="top: 20px;right: 15px;">
                        <div class="bg-white rounded p-3">
                            <h5>Компании <span>158</span></h5>
                            <div class="mt-3">
                                <a href=""><img src="https://leonardo.osnova.io/9577d1b1-e56d-47cb-9e4a-a7d33094387d/-/scale_crop/108x108/" alt="">
                                    Тинькофф
                                </a>
                            </div>
                            <div class="mt-3">
                                <a href=""><img src="https://leonardo.osnova.io/5e6466d8-b600-a623-fd15-771423fb3d45/-/scale_crop/108x108/" alt="">
                                    Сбер
                                </a>
                            </div>
                            <div class="mt-3">
                                <a href=""><img src="https://leonardo.osnova.io/18a76546-2d4c-0ed6-c40d-dec63037cda0/-/scale_crop/108x108/" alt="">
                                    Mail.ru Group
                                </a>
                            </div>
                            <div class="mt-3">
                                <a href=""><img src="https://leonardo.osnova.io/ebbbc02e-ce70-561e-95af-163d182cdb0f/-/scale_crop/108x108/" alt="">
                                    ВКонтакте
                                </a>
                            </div>
                            <div class="mt-3">
                                <a href=""><img src="https://leonardo.osnova.io/822b0586-68a2-8f8e-8a6e-b59e73ffd5d5/-/scale_crop/108x108/" alt="">
                                    hh.ru
                                </a>
                            </div>
                            <div class="mt-3">
                                <a href=""><img src="https://leonardo.osnova.io/5db5f1fd-215b-39f3-bc0c-7ec34f7316e0/-/scale_crop/108x108/" alt="">
                                    Яндекс Go
                                </a>
                            </div>
                            <div class="mt-3">
                                <a href=""><img src="https://leonardo.osnova.io/5db5f1fd-215b-39f3-bc0c-7ec34f7316e0/-/scale_crop/108x108/" alt="">
                                    Авито
                                </a>
                            </div>
                            <div class="mt-3">
                                <a href=""><img src="https://leonardo.osnova.io/612c2592-1a05-9d37-7f71-49c468c8f2d5/-/scale_crop/108x108/" alt="">
                                    Microsoft
                                </a>
                            </div>
                            <div class="mt-3">
                                <a href=""><img src="https://leonardo.osnova.io/90c7613d-f37b-ae74-cb1e-aa3d07934d20/-/scale_crop/108x108/" alt="">
                                    Ozon
                                </a>
                            </div>
                            <div class="mt-3">
                                <a href=""><img src="https://leonardo.osnova.io/24020010-ad23-c586-d8a2-6aea59330446/-/scale_crop/108x108/" alt="">
                                    Skillbox
                                </a>
                            </div>
                            <div class="mt-3 pokazat"><a href="#">Показать все</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else
            <div class="container">
                <div class="banner">
                    <div class="row">
                        <div class="col-12 col-sm-8" id="12">
                            <div class="bg-white menu text-center" style="position: center">
                              Page not Found
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="bg-white rounded p-3">
                                <h5>Компании <span>158</span></h5>
                                <div class="mt-3">
                                    <a href=""><img src="https://leonardo.osnova.io/9577d1b1-e56d-47cb-9e4a-a7d33094387d/-/scale_crop/108x108/" alt="">
                                        Тинькофф
                                    </a>
                                </div>
                                <div class="mt-3">
                                    <a href=""><img src="https://leonardo.osnova.io/5e6466d8-b600-a623-fd15-771423fb3d45/-/scale_crop/108x108/" alt="">
                                        Сбер
                                    </a>
                                </div>
                                <div class="mt-3">
                                    <a href=""><img src="https://leonardo.osnova.io/18a76546-2d4c-0ed6-c40d-dec63037cda0/-/scale_crop/108x108/" alt="">
                                        Mail.ru Group
                                    </a>
                                </div>
                                <div class="mt-3">
                                    <a href=""><img src="https://leonardo.osnova.io/ebbbc02e-ce70-561e-95af-163d182cdb0f/-/scale_crop/108x108/" alt="">
                                        ВКонтакте
                                    </a>
                                </div>
                                <div class="mt-3">
                                    <a href=""><img src="https://leonardo.osnova.io/822b0586-68a2-8f8e-8a6e-b59e73ffd5d5/-/scale_crop/108x108/" alt="">
                                        hh.ru
                                    </a>
                                </div>
                                <div class="mt-3">
                                    <a href=""><img src="https://leonardo.osnova.io/5db5f1fd-215b-39f3-bc0c-7ec34f7316e0/-/scale_crop/108x108/" alt="">
                                        Яндекс Go
                                    </a>
                                </div>
                                <div class="mt-3">
                                    <a href=""><img src="https://leonardo.osnova.io/5db5f1fd-215b-39f3-bc0c-7ec34f7316e0/-/scale_crop/108x108/" alt="">
                                        Авито
                                    </a>
                                </div>
                                <div class="mt-3">
                                    <a href=""><img src="https://leonardo.osnova.io/612c2592-1a05-9d37-7f71-49c468c8f2d5/-/scale_crop/108x108/" alt="">
                                        Microsoft
                                    </a>
                                </div>
                                <div class="mt-3">
                                    <a href=""><img src="https://leonardo.osnova.io/90c7613d-f37b-ae74-cb1e-aa3d07934d20/-/scale_crop/108x108/" alt="">
                                        Ozon
                                    </a>
                                </div>
                                <div class="mt-3">
                                    <a href=""><img src="https://leonardo.osnova.io/24020010-ad23-c586-d8a2-6aea59330446/-/scale_crop/108x108/" alt="">
                                        Skillbox
                                    </a>
                                </div>
                                <div class="mt-3 pokazat"><a href="#">Показать все</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
@push('css')
    <style>
        .container {
            background-color: #F2F2F2;
            padding-bottom: 100px;
            margin-bottom: 100px; }
        .container .header {
            height: 490px;
            position: relative; }
        .container .header .head1 {
            background-color: #FEE8EC;
            height: 300px; }
        .container .header .head2 {
            height: 150px;
            background-color: #fff;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px; }
        .container .header .head2 h2 {
            padding-top: 50px;
            padding-left: 20px;
            font-weight: 700; }
        .container .header .head2 p {
            padding-left: 20px; }
        .container .header .img {
            position: absolute;
            top: 213px;
            left: 20px;
            border: 5px solid white;
            border-radius: 8px; }
        .container .navbar {
            justify-content: end;
            padding: 30px 0 0 0;
        }
        .container .navbar .dropdown2{
            margin-left: 0;
        }
        .container .navbar .dropdown .btn {
            background-color: #fff;
            border-radius: 20px;
        }
        .container .navbar .sviji {
            margin-left:0; }
        .container .navbar .sviji a {
            color: #000;
            text-decoration: none;
            padding: 5px 10px;
        }
        .container .navbar .sviji a:hover {
            background-color: #fff;
            border-radius: 20px; }
        .container .banner .row .col-sm-8 .menu {
            padding: 20px;
            border-radius: 10px; }
        .container .banner .row .col-sm-8 .menu .d-flex p {
            margin-left: 30px;
            color: #595959;
            font-size: 14px; }
        .container .banner .row .col-sm-8 .menu .button {
            border: 1px solid #D9D9D9;
            border-radius: 5px;
            padding: 0 5px; }
        .container .banner .row .col-sm-8 .menu .button .btn {
            padding: 0;
            padding-top: 4px; }
        .container .banner .row .col-sm-8 .menu .button .bi {
            margin-bottom: 3px; }
        .container .banner .row .col-sm-4 .bg-white span {
            font-size: 14px;
            color: #939292; }
        .container .banner .row .col-sm-4 .bg-white a {
            color: #000;
            text-decoration: none; }
        .container .banner .row .col-sm-4 .bg-white a img {
            width: 24px;
            height: 24px;
            border-radius: 5px;
            margin-right: 10px; }
        .container .banner .row .col-sm-4 .bg-white a:hover {
            color: #589dee; }
        .container .banner .row .col-sm-4 .bg-white .pokazat a {
            color: #589dee; }
        .container .banner .row .col-sm-4 .bg-white .pokazat a:hover {
            color: #da746e; }
        .col12{
            left: 400px;top: 87px
        }
        .dropdown2 {
            margin-left: 0;
        }
        .col-12 .posts .posts__foto img{
            width: 95%;
            height: auto;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        /*# sourceMappingURL=main.css.map */
        @media screen and (max-width: 600px) {
           .row .col-12 .posts{
                 width: 100%;
             }
            header .row .col-12 .posts .posts__foto img{
                width: 100%;
                height: auto;
            }
            .col12{
                left:0;
                top: 87px
            }
            .username{
                display: none;
            }
            .data{
                display: none;
            }
        }
    </style>
@endpush
