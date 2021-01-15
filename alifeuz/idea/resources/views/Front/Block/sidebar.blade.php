<div class="col-3 col-sm-3 navСol3  overflow-auto" id="col_3">
    <div class="menu-nav">
        <img src="/Front/img/alov.png" alt="">
        <span>Лента</span>
        <a href="#"> <i class="far fa-clock"></i></a>
        <a href="javascript:void(0)" style="position: absolute;right: 30px;top: 20px;" id="closeId" class="close-btn" onclick="closeNav()"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
            </svg></a>
    </div>
    <div class="menu-item">
        <a class="nav_link" href="{{route('category','Biznes & IT')}}"><i class="far fa-building mr-2 ml-3"></i><span>@lang('msg.biznes_it')</span></a>
    </div>
    <div class="menu-item">
        <a href="{{route('category','Dasturlash')}}"><i class="fas fa-user-md mr-2 ml-3"></i><span>@lang('msg.dasturlash')</span></a>
    </div>
    <div class="menu-item">
        <a href="{{route('category','Iqtisod & Siyosat')}}"><i class="fas fa-calendar-week mr-2 ml-3"></i><span>@lang('msg.iqtisod_siyosat')</span></a>
    </div>
    <div class="menu-item">
        <a href="{{route('category','Internet & Menejment')}}"><i class="fas fa-retweet mr-2 ml-3"></i><span>@lang('msg.internet_menejment')</span></a>
    </div>
    <div class="menu-item">
        <a href="{{route('category','Yangiliklar & Ijtimoiy')}}"><i class="fas fa-newspaper mr-2 ml-3"></i><span>@lang('msg.yangiliklar_ijtimoiy')</span></a>
    </div>
    <div class="menu-item">
        <a href="{{route('category','Biografiya')}}"><i class="fab fa-accusoft mr-2 ml-3"></i><span>@lang('msg.biografiya')</span></a>
    </div>
    <div class="menu-item">
        <a href="{{route('front')}}"><i class="fas fa-shopping-cart mr-2 ml-3"></i><span>@lang('msg.lifeshop')</span></a>
    </div>
    <div class="menu-item">
        <a href="#"><svg width="1em"  height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down mr-2 ml-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
            </svg><span>Еще 1</span>
        </a>
    </div>
    <div class="menu-item">

    </div>
</div>
<style>
    div::-webkit-scrollbar{
        width: 10px;
    }
    #col_3{
        padding:0 0 30px 0;
        height: 100%;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 90px;
    }
    header .row .col-3 .menu-item:hover {
        background-color: #d2cfcf;
        border-radius: 10px;
        width:250px;
        height: 43px;
    }
    #closeId{
        display: none;
    }
    @media screen and (max-width: 600px) {
        #col_3{
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            overflow-x: hidden;
            transition: 1s;
            padding-top: 60px;
            background-color: #FEEBEF;
        }
        #closeId{
            display: flex;
        }
        .menu-item{
            width: 250px;
        }
        div::-webkit-scrollbar{
            width: 10px;
        }
    }
</style>
