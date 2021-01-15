@extends('Front.layouts.layout')
@section('content')
    <div class="col-sm-6 col-12" id="col12" style="">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    @if(isset($news))
                        @foreach($news as $new)
                            <div class="posts" style="width: 100%">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="posts__info" style="width: 80% ;padding-top: 0">
                                       <span>
                                           <img src="{{'/'.$new->category->image}}" class="icons" alt="bu rasm" style="height: 25px;width: 25px">
                                           <a href="#" style="color: black;text-decoration: none">{{$new->category->name()}}</a>
                                       </span>
                                            <span>{{$new->user->name}}</span>
                                            <span>
                                         {{MonthFunction($new->created_at)}}
                                       </span>
                                            <span><i class="fa fa-eye" style="padding-right: 5px"></i>{{$new->read_count}}</span>
                                        </div>
                                        <div class="posts__head" style="padding: 0 20px">
                                            <h2 class="text-dark text-center">
                                                {{$new->title()}}
                                            </h2>
                                        </div>
                                        <div class="posts__text" style="padding: 0 20px">
                                            {!! $new->content_name() !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="col-3 scroll" id="col3" style="overflow-x:auto; top:6px; position: fixed;right: 20px;height: 90%">
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
            <div>
        @if(isset($article) and !$article->isEmpty())
            @foreach($article as $model)
                <div class="info" style="overflow: hidden">
                    <p><a href="">{{$model->title['uz']}}</a></p>
                </div>
            @endforeach
        @endif
            </div>
        <div class="info mb-5">
        </div>
    </div>
    <style>
        div::-webkit-scrollbar{
            width: 10px;
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

        @media screen and (min-width: 1200px) {
            #col3{
                right: 0;
            }

        }
        @media screen and (max-width: 600px) {
            #col3{
                display: none;
            }
        }

    </style>
@endsection
@push('css')
    <style>
        #col12{
            top: 90px;
            left: 350px;
            right: 0
        }
        #col3{
            padding-left: 30px;
            margin-top: 90px;
            position: fixed;
            right: 0;
            height:auto;
        }
        @media screen and (max-width: 600px) {
            #col12{
                top:0;
                left:0;
                right: 0
            }
            #col3{
                padding-left:50px;
                padding-top: 20px;
                margin-top:0;
                right: 0;
                height:auto;
                position: static;
            }
        }
    </style>
@endpush
