<nav class="navbar navbar-expand-lg navbar-light" id="navbar" style="width: 100%;position: fixed; z-index: 1">
    <i class="fas fa-align-justify" onclick="mediaOpen()"></i>
    <a class="navbar-brand" href="{{route('index')}}"><img style="width: 50px;height: 50px" class="img-logo" src="/Front/img/logo1.png" alt=""></a>
    <form class="form-inline my-2 my-lg-0" id="form_search" action="{{route('index.filter')}}">
        <input name="name" id="input_line"  class="form-control mr-sm-2 pl-5" type="search" placeholder="Поиск">
        <i class="fas fa-search" id="input_line"></i>
{{--        <div class="dropdown">--}}
{{--            <a  class="btn bg-white dropdown-toggle" style="font-weight: 700" href="{{route('index')}}" role="button" id="dropdownMenuLink" data-toggle="dropdown"                  aria-haspopup="true" aria-expanded="false">--}}
{{--               @lang('msg.yangi_maqola')--}}
{{--            </a>--}}
{{--            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">--}}
{{--                <a class="dropdown-item" href="{{route('index')}}">@lang('msg.bosh_ish_joy')</a>--}}
{{--                <hr class="m-0">--}}
{{--                <a class="dropdown-item" href="#">@lang('msg.tadbirni_nashir_etish')</a>--}}
{{--                <hr class="m-0">--}}
{{--                <a class="dropdown-item" href="#">@lang('msg.reklama_yaratish')</a>--}}
{{--            </div>--}}
{{--        </div>--}}
    </form>
    <div class="user user2">
        @auth
        <a href="">{{Auth::user()->name}}</a>
        @endauth
        <a href="/locale/uz" class="{{(app()->getLocale()=="uz")? 'text-danger':''}}" style="margin-right: 5px; text-decoration: none">UZ</a>
        <a href="/locale/ru" class="{{(app()->getLocale()=="ru")? 'text-danger':''}}" style="margin-right: 5px; text-decoration: none">RU</a>
        <a href="#"><div class="far fa-bell" style="font-size: 25px"></div></a>
        <a href="#" style="text-decoration: none">
            <i class="far  fa-user mx-2" style="border: 1px solid;padding: 5px;border-radius: 50%;"></i>
            <span class="ml-1">@lang('msg.login')</span>
        </a>
    </div>
</nav>
<style>

        @media screen and (max-width: 600px) {
            #form_search{
                display: none;
            }
            #navbar{
                height: 70px;
            }
            nav .user{
                margin-left: 0;
            }
        }
        @media screen and (min-width: 1200px) {
            nav .user2{
                margin-left: 700px;
            }
        }
</style>
<script type="text/javascript">
    const mediaQuery = window.matchMedia('(max-width:600px)');
    if (mediaQuery.matches) {
        function mediaOpen(){
            document.getElementById("col_3").style.padding= "0 100% 0 0";
        }
        function closeNav() {
            document.getElementById("col_3").style.padding= "0 0 0 0";
            document.getElementById("col_3").style.marginLeft= "0";
        }
    }
</script>

