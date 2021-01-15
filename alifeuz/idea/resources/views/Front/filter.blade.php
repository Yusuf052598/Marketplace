@extends('Front.layouts.layout')
@section('content')
    <?php
    $title='title_'.lang();
    $category='category_'.lang();
    $subtitle='subtitle_'.lang();
    ?>
    <div class="col-sm-6" id="col6" >
        @if(!$filter->isEmpty())
            <div class="container">
                <div class="navbar">
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Популярное
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>

                    <div class="sviji"> <a href="#">Свежее</a> </div>
                </div>

                <div class="banner">
                    <div class="row">
                        <div class="col-12 col-sm-11">
                            <div class="bg-white menu" >
                                @if(isset($filter))
                                    @foreach($filter as $model)
                                        <div class="posts" style="padding-bottom: 1px; width: 100%">
                                            <div class="posts__info">
                                                <p>
                                                    <img src="{{'/'.$model->ca_img}}" class="icons" alt="bu rasm" style="height: 25px;width: 25px">
                                                    <a href="#" style="color: black;text-decoration: none">{{$model->$category}}</a>
                                                </p>
                                                <p class="username" > {{$model->username}}</p>
                                                <p  class="data">
                                                    {{MonthFunction($model->created_at)}}
                                                </p>
                                                <a href="#" class="subs">
                                                    <img src="/Front/img/plus.png" class="icons">Подписаться
                                                </a>
                                            </div>
                                            <div class="posts__head">
                                                <p>
                                                    {{$model->$title}}
                                                </p>
                                            </div>
                                            <div class="posts__text">
                                                <p>
                                                    {{$model->$subtitle}}
                                                </p>
                                            </div>
                                            <div class="posts__foto">
                                                <img src="{{'/'.$model->img}}" width="100%" height="460px"  style="margin-left: 0" alt="">
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
                    </div>
                </div>
            </div>
        @else
            <div class="container">
                <div class="banner">
                    <div class="row">
                        <div class="col-sm-11 col-11">
                            <div class="bg-white menu text-center" style="position: center">
                                Data not Found
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
    <div class="col-12 col-sm-4 " id="col4" >
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
@endsection
@push('css')
    <style>
       .col-sm-4 .bg-white span {
            font-size: 14px;
            color: #939292; }
        .col-sm-4 .bg-white a {
            color: #000;
            text-decoration: none; }
       .col-sm-4 .bg-white a img {
            width: 24px;
            height: 24px;
            border-radius: 5px;
            margin-right: 10px; }
       .col-sm-4 .bg-white a:hover {
            color: #589dee; }
        .col-sm-4 .bg-white .pokazat a {
            color: #589dee; }
        .col-sm-4 .bg-white .pokazat a:hover {
            color: #da746e; }
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
            padding: 20px 0; }
        .container .navbar .dropdown .btn {
            background-color: #fff;
            border-radius: 20px; }
        .container .navbar .sviji {
            margin-left: 30px; }
        .container .navbar .sviji a {
            color: #000;
            text-decoration: none;
            padding: 5px 10px; }
        .container .navbar .sviji a:hover {
            background-color: #fff;
            border-radius: 20px; }
        .container .banner .row .col-8 .menu {
            padding: 20px;
            border-radius: 10px; }
        .container .banner .row .col-8 .menu .d-flex p {
            margin-left: 30px;
            color: #595959;
            font-size: 14px; }
        .container .banner .row .col-8 .menu .button {
            border: 1px solid #D9D9D9;
            border-radius: 5px;
            padding: 0 5px; }
        .container .banner .row .col-8 .menu .button .btn {
            padding: 0;
            padding-top: 4px; }
        .container .banner .row .col-8 .menu .button .bi {
            margin-bottom: 3px; }
        .container .banner .row .col-4 .bg-white span {
            font-size: 14px;
            color: #939292; }
        .container .banner .row .col-4 .bg-white a {
            color: #000;
            text-decoration: none; }
        .container .banner .row .col-4 .bg-white a img {
            width: 24px;
            height: 24px;
            border-radius: 5px;
            margin-right: 10px; }
        .container .banner .row .col-4 .bg-white a:hover {
            color: #589dee; }
        .container .banner .row .col-4 .bg-white .pokazat a {
            color: #589dee; }
        .container .banner .row .col-4 .bg-white .pokazat a:hover {
            color: #da746e; }
        #col4{
            right: 15px;
            top: 185px;
            position: absolute;
            width: 25%;
        }
        #col6{
            left: 400px;
            top: 87px;
        }
       @media screen and (max-width: 600px) {
           #col6{
               left:0;
               right: 0
           }
           #col4{
               right: 0;
               position: static;
           }
           .posts__foto img{
               width: 100%;
               height: auto;
           }
           .username{
               display: none;
           }
           .data{
               display: none;
           }
       }
        /*# sourceMappingURL=main.css.map */

    </style>
@endpush
