@extends('Front.layouts.layout')
@section('content')
   <div class="section">
       <div class="container" style="margin-top: 30px">

           <div class="row">
               <div class="col-xl-12">
                   <div class="card card-body-title py-3 px-2">
                       @if(session()->get('success'))
                           <div class="alert alert-success text-dark">
                               {{session()->get('success')}}
                           </div>
                       @endif
                       @if($errors->any())
                           <div class="alert alert-danger">
                               @foreach($errors->all() as $error)
                                   <p>{{$error}}</p>
                               @endforeach
                           </div>
                       @endif
                   </div>
               </div>
               <form action="{{route('article.store')}}" method="post" >
                   @csrf
                   <div class="col-lg-12">
                       <h1 class="text-center">@lang('msg.sorovnoma_jonatish')</h1>
                       <div class="row">
                           <div class="col-lg-6" style="margin-top: 10px">
                               <label for="name">@lang('msg.ism')</label>
                               <input type="text"  class="form-control" id="name" name="name" placeholder="@lang('msg.ism')">
                           </div>
                           <div class="col-lg-6" style="margin-top: 10px">
                               <label for="name">@lang('msg.familiya')</label>
                               <input type="text" id="name" class="form-control" name="last_name" placeholder="@lang('msg.familiya')">
                           </div>
                           <div class="col-lg-6" style="margin-top: 10px">
                               <label for="name">@lang('msg.username')</label>
                               <input type="text"  class="form-control" id="name" name="username" placeholder="@lang('msg.username')">
                           </div>
                           <div class="col-lg-6" style="margin-top: 10px">
                               <label for="phone">@lang('msg.telefon')</label>
                               <input type="text" id="phone" class="form-control" name="phone" placeholder="@lang('msg.telefon')">
                           </div>
                           <div class="col-lg-6" style="margin-top: 10px">
                               <label for="name">@lang('msg.email')</label>
                               <input type="email"  class="form-control" id="name" name="email" placeholder="@lang('msg.email')">
                           </div>
                           <div class="col-lg-6" style="margin-top: 10px">
                               <label for="name">@lang('msg.telegram_nick')</label>
                               <input type="text" id="name" class="form-control" name="tg_nick" placeholder="@telegram_username">
                           </div>
                           <div class="col-lg-12" style="margin-top: 10px">
                               <label for="name">@lang('msg.theme')</label>
                               <textarea class="form-control" name="theme" id="name"  cols="30" rows="10">

                               </textarea>
                           </div>
                           <div class="col-lg-12" style="margin-top: 10px">
                               <h2 class="text-center">@lang('msg.i_t_s')</h2>
                           </div>
                           <div class="col-lg-4" style="margin-top: 10px">
                               <label for="name">@lang('msg.telegram_kanal')</label>
                               <input type="text" id="name" class="form-control" name="tg_canal" placeholder="@lang('msg.telegram_kanal')">
                           </div>
                           <div class="col-lg-4" style="margin-top: 10px">
                               <label for="name">@lang('msg.facebook_kanal')</label>
                               <input type="text" id="name" class="form-control" name="fac_canal" placeholder="@lang('msg.facebook_kanal')">
                           </div>
                           <div class="col-lg-4" style="margin-top: 10px">
                               <label for="name">@lang('msg.instagram_kanal')</label>
                               <input type="text" id="name" class="form-control" name="insta_canal" placeholder="@lang('msg.instagram_kanal')">
                           </div>
                           <div class="col-lg-12 text-center" style="margin-top: 15px">
                               <input type="submit" class="btn btn-success" value="@lang('msg.jonatish')" >
                           </div>
                       </div>
                   </div>
               </form>
           </div>
       </div>
   </div>
@endsection
@push('js')   
<script src="/Front/js/jquery.maskedinput.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function (){
 $.mask.definitions['9']='';
 $.mask.definitions['n']='[0-9]';
 jQuery(function($){
    $("#phone").mask("+998 nn nnn nn nn");
   });
});
</script>
@endpush

