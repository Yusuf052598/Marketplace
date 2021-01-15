@extends('Front.Layouts.layout')
@section('content')
    @if(isset($news))
        @foreach($news as $model)
         <section class="ftco-section ftc-no-pb ftc-no-pt my-3">
        <div class="container">
            <div class="row ">
                <div class="col-lg-6 news" >
                    <img src="{{'/'.$model->img}}" alt="" style="width: 100%;">
                </div>
                <div class="col-lg-6  wrap-about  ftco-animate">
                    <div class="heading-section heading-section-wo-line">
                        <div class="ml-md-0">
                            <h4 class="">{{$model->title['uz']}}</h4>
                        </div>
                    </div>
                    <div class="pb-md-5">
                        <p>{{$model->body['uz']}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
        @endforeach
    @endif
@endsection
