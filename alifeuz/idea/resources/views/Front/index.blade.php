@extends('Front.layouts.layout')
@section('content')
    <div class="col-12 col-sm-6 col6"  id="col6">
        <div class="jadval">
            <span class="sana">{{MonthFunction(date('Y-m-d'))}} {{WeekFunction()}}</span>
           {{-- <a href="#" class="ss">
             <span class="svernut">
               <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                 <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
               </svg>
                 <span class="ml-1">свернут</span>
             </span>
            </a>--}}
        @if(isset($latest_news))
          @foreach($latest_news as  $new)
            <div class="d-flex mt-3">
                <div class="soat">
                      <p class="mx-2">
                          {{timeFunction($new->created_at)}}
                      </p>
                </div>
                <div>
                    <div>
                        <a href="{{route('blog.show',['user'=>$new->user->name,'id'=>$new->id,'url'=>$new->slugName()])}}">
                            <h6>{{$new->title()}}</h6>
                        </a>
                    </div>
                </div>
            </div>
          @endforeach
        @endif
            <a href="#" class="pokazat"><span>@lang('msg.koproq_korsatish')</span>
                <span class="ml-2">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                     </svg>
                </span>
            </a>
        </div>

        <div class="d-flex">
           {{-- <div class="nastroyka">
                <a href="#">
                    <h5><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gear mx-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z"/>
                            <path fill-rule="evenodd" d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z"/>
                        </svg> <span>Настроить ленту</span></h5>
                </a>
            </div>--}}

            <div class="dropdown ">
                <button class="btn bg-white dropdown-toggle px-3" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   @lang('msg.ommabop')
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{route('index')}}">@lang('msg.bugungi')</a>
                    <a class="dropdown-item" href="#">@lang('msg.hafta')</a>
                    <a class="dropdown-item" href="#">@lang('msg.oyiga')</a>
                    <a class="dropdown-item" href="#">@lang('msg.hamma_vaqt')</a>
                </div>
            </div>

            <div class="sveji">
                <a href="#">@lang('msg.yangi')</a>
            </div>
        </div>
        <div class="component-2">

            <div class="d-flex">
                <div><h6>@lang('msg.ish_joyi')</h6></div>
                <div> <button type="button" class="btn bg-white">Разместить</button></div>
            </div>
            @if(isset($notify) and !$notify->isEmpty())
            @foreach( $notify as $model)
                    <div class="mb-3">
                        <span class="jirni">{{$model->title}}..</span><span class="aa"><img src="/Front/img/img2.1.png" alt="">{{$model->company}}   Санкт-Пе   от  {{$model->salary}}$</span> <br>
                    </div>
                @endforeach
            @endif
            <button class="btn pokazat">Показать еще <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                </svg>
            </button>


        </div>
        <div class="component-3">

            <div class="nav d-flex">
                <div class="ob">Обьявление на vc.ru</div>
                <div class="otl">Отключить рекламу</div>
            </div>
            <div class="header d-flex">
                <div class="d-flex">
                    <div class="telegram"><img src="/Front/img/telegram.png" alt=""></div>
                    <div class="teleg-info"><h5 class="m-0">Маркетинг для бизнеса</h5>
                        <p>Новый Telegram-канал - @slononru</p>
                    </div>
                </div>
                <div><button class="btn bg-white">Перейти</button></div>
            </div>

            <div class="footer">
                <div class="d-flex ">
                    <div class="d-flex">
                        <div><img src="/Front/img/logo3.1.png" alt=""></div>
                        <div><h6>Торговля</h6></div>
                        <div class="svet">Светлана Никонова</div>
                        <div class="svet">4 часа</div>
                    </div>
                    <div><button type="button" class="btn"><img src="/Front/img/3nuqtaa.png" alt=""></button></div>
                </div>

                <h4>
                    Погоня за скидками, или на чём экономят россияне в
                    пандемийный год
                </h4>

                <p style="font-size: 15px">
                    Подробно о том какие товары россияне чаще всего покупают со скидкой в <br>
                    2020 году что заказывают на китайских том какие товары россияне <br>
                    чаще всего покупают со скидкой.
                </p>
                <div class="d-flex justify-content-between">
                    <div>
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chat mr-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
                        </svg><span style="font-size: 12px">18</span>
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bookmark ml-2 mr-1 " fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
                        </svg><span style="font-size: 12px">14</span>
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-repeat ml-2 mr-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z"/>
                            <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z"/>
                        </svg><span style="font-size: 12px">2</span>
                    </div>
                    <div>
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down mr-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                        </svg><span style="color: #19A949; font-weight: 500">27</span>
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
                        </svg>
                    </div>
                </div>
            </div>

        </div>
        @if(isset($news))
          @foreach($news as $new)
           <div class="posts" style="padding-bottom: 1px">
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
                    {{--<img src="/Front/img/plus.png" class="icons">Подписаться--}}
            </div>
            <div class="posts__head">
                <a href="{{route('blog.show',['user'=>$new->user->name,'id'=>$new->id,'url'=>$new->slugName()])}}" style="text-decoration: none;color: black">
                    <p>{{$new->title()}}</p>
                </a>
            </div>
            <div class="posts__text">
                <p>
                    {{$new->subtitle()}}
                </p>
            </div>
            <div class="posts__foto">
                <img src="{{'/'.$new->img}}"  alt="">
            </div>
           {{-- <div class="posts__coments">
                <a href="#" style="color: #0c0c0c; text-decoration: none"><i class="far fa-comment"></i>   135</a>
                <a href="#" style="color: #0c0c0c;text-decoration: none"><i class="far fa-bookmark"></i>  25</a>
                <a href="#" style="color: #0c0c0c;text-decoration: none"><i class="fas fa-retweet" style="padding-right: 3px"></i>100</a>
                <a href="#" style="color: #0c0c0c;text-decoration: none">
                    <i class="fas fa-angle-down" style="padding-right: 4px"></i>125<i class="fas fa-angle-up" style="padding-left: 1px"></i>
                </a>
            </div>--}}
        </div>
          @endforeach
        @endif
    </div>
    <div class="col-3 scroll" id="col3" style="overflow-x:auto; top:103px; position: fixed;right: 20px;height: 90%">
        @if(isset($notify) and !$notify->isEmpty())
            <div class="ish_joy">
                <h4>Ish joylari <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-compact-right" style="width: 20px;height: 20px" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M6.776 1.553a.5.5 0 0 1 .671.223l3 6a.5.5 0 0 1 0 .448l-3 6a.5.5 0 1 1-.894-.448L9.44 8 6.553 2.224a.5.5 0 0 1 .223-.671z"/>
                    </svg></h4>
                @foreach($notify as $model)
                    <div class="info" style="overflow: hidden">
                        <p><a href="">{{$model->title}}</a></p>
                    </div>
                @endforeach
            </div>
        @endif
        <div class="maqola">
            <h4>Maqolalar <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-compact-right" style="width: 20px;height: 20px" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M6.776 1.553a.5.5 0 0 1 .671.223l3 6a.5.5 0 0 1 0 .448l-3 6a.5.5 0 1 1-.894-.448L9.44 8 6.553 2.224a.5.5 0 0 1 .223-.671z"/>
                </svg></h4>
            @if(isset($announce) and !$announce->isEmpty())
                @foreach($announce as $model)
                    <div class="info" style="overflow: hidden">
                        <img class="mr-1" src="{{'/'.$model->img}}" style="margin-top: 10px; width: 50px;height: 50px; float: left" alt="">
                        <p style="margin-left: 70px"><a href="">{{$model->title}}</a></p>
                    </div>
                @endforeach
            @endif
        </div>
        <div class="info mb-5">
        </div>
    </div>
    <style>
        .col-12 .component-3 {
            background-color:antiquewhite;
            width: 100%;
            height: auto;
            padding: 20px;
            margin-bottom: 100px; }
        .col-12 .component-3 .nav {
            justify-content: space-between;
        }
        .col-12 .component-3 .nav .ob {
            background-color: #FFF5F7;
            color: #DFAEB9;
            border-radius: 10px;
            padding: 0 7px;
            font-size: 13px; }
        .col-6 .component-3 .nav .otl {
            color: #656565;
            font-size: 12px; }
        .col-12 .component-3 .header {
            background-color: #FFF5F7;
            justify-content: space-between;
            padding: 15px 15px 0 15px;
            margin: 10px 0 25px 0;
            border-radius: 5px;
        }
        .col-12 .component-3 .header .telegram {
            margin-top: -4px; }
        .col-12 .component-3 .header .teleg-info {
            margin-left: 10px; }
        .col-12 .component-3 .header .teleg-info h5 {
            font-size: 16px; }
        .col-12 .component-3 .header .teleg-info p {
            font-size: 13px; }
        .col-12 .component-3 .header .btn {
            padding: 3px 12px;
            font-weight: 600;
            font-size: 12px;
            margin-top: 8px; }
        .col-12 .component-3 .footer {
            background-color: #fff;
            padding: 15px;
            border-radius: 5px; }
        .col-12 .component-3 .footer .d-flex {
            justify-content: space-between; }
        .col-12 .component-3 .footer .d-flex .d-flex img {
            margin-bottom: 10px; }
        .col-12 .component-3 .footer .d-flex .d-flex h6 {
            margin-left: 8px;
            margin-right: 10px;
            margin-bottom: 0;
            font-size: 14px; }
        .col-12 .component-3 .footer .d-flex .d-flex .svet {
            font-size: 12px;
            margin-right: 25px;
            color: #959191; }
        .col-12 .component-3 .footer .d-flex .btn img {
            margin-bottom: 10px; }
        .row .col-12 .component-2 {
            background-color: #EDF5FD;
            width: 100%;
            height: 300px;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 100px; }
        .row .col-12 .component-2 .d-flex {
            justify-content: space-between; }
        .row .col-12 .component-2 .d-flex div h6 {
            color: #4384BE;
            font-size: 15px; }
        .row .col-12 .component-2 .d-flex .btn {
            padding: 0px 7px;
            border: 1px solid moccasin; }
        .row .col-12 .component-2 .jirni {
            font-weight: 600;
            font-size: 17px; }
        .row .col-12 .component-2 .aa {
            font-size: 14px; }
        .row .col-12 .component-2 img {
            margin-left: 15px;
            margin-right: 8px;
            width: 11px;
            height: 11px; }
        .row .col-12 .component-2 .pokazat {
            padding-left: 0;
            font-weight: 800; }
        div::-webkit-scrollbar{
            width: 10px;
        }
        header .row .col-12 .jadval{
            width: 100%;
        }
        .posts{
            width: 100%;
        }
        .maqola{
            background-color: white;
            margin-top: 15px;
            border-radius:10px;
            padding: 10px 0 0 20px;
        }
        .ish_joy{
            background-color: white;
            border-radius: 10px;
            padding: 10px 0 0 20px;
        }
        .col-12 .posts .posts__foto img{
            width: 95%;
            height: auto;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        .col6{
            top:90px
        }
        @media screen and (min-width: 1200px) {
            .col6{
                left: 290px;
            }
            #col3{
                right: 0;
            }


        }
        @media screen and (max-width: 600px) {
            #col3{
                display: none;
            }
            #col6{
             left: 0;
            }
            header .row .col-12 .jadval{
                width: 100%;
            }header .row .col-12 .posts{
                 width: 100%;
             }
            header .row .col-12 .posts .posts__foto img{
                width: 95%;
                height: auto;
                display: block;
                margin-left: auto;
                margin-right: auto;
            }
            .username{
                display: none;
            }
            .data{
                display: none;
            }
        }

    </style>
@endsection
