@extends('Front.Layout.layout')
@section('content')
    <section class="main__news">
        <div class="main__news__title title">
            <h3>Новости и акций</h3>
        </div>
        <div class="main__news__body">
            @if(isset($aksiy))
                @foreach($aksiy as $model)
                    <div class="main__news__body__item">
                        <img src="{{'/'.$model->photos[0]->filename}}" alt=""/>
                        <div class="main__news__body__item-title">
                            <img src="{{'/'.$model->category->market->img}}" alt=""/>
                            <p>
                                <a href="{{route('markets.page',[$model->category->market->id])}}" class="bg-white" style="color: white">{{$model->category->market->name}}</a>
                            </p>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </section>
    <section class="allMarkets">
        <div class="allMarkets__body">
          @if(isset($markets))
            @foreach($markets as $market)
              <div class="allMarkets__body__item">
                <div class="allMarkets__body__item-title">
                    <img src="{{'/'.$market->img}}" style="max-width: 52px; max-height: 52px" alt=""/>
                    <div class="allMarkets-title">
                        <h3>
                            <a href="{{route('markets.page',$market->id)}}">{{$market->name}}</a>
                        </h3>
                        <p>title{{--{{$market->category[0]->product[0]->title()}}--}}</p>
                    </div>
                </div>
                <div class="allMarkets__body__item-img">
                    <div class="allMarkets-img-left">
                        <img src="{{'/'.$market->category[0]->product[0]->photos[0]->filename}}" style="max-width: 220px; max-height: 250px" alt="" />
                    </div>
                    <div class="allMarkets-img-right">
                        <div class="right-top">
                            <img src="{{'/'.$market->category[0]->product[0]->photos[1]->filename}}"  style="max-width: 45px; max-height: 100px" alt="" />
                        </div>
                        <div class="right-bottom">
                            <img src="{{'/'.$market->category[0]->product[0]->photos[2]->filename}}" alt="" style="max-width: 45px; max-height: 100px"/>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
          @endif
        </div>
        <div class="allMarkets__body ajax_load" id="ajax_load"></div>
        <button class="show-more" id="show-more">Показать еще</button>
    </section>
@endsection
@push('js')
    <script>
        $(document).ready(function () {
            $('#show-more').click(function (){
                let id=2;
               $.ajax({
                   type: 'POST',
                   url: "{{route('markets.load_more')}}",
                   data: {
                       id:id,
                       _token:'{{csrf_token()}}'
                   },
                   dataType:"JSON",
                   success: function (data) {
                       if (data.success){
                           $(".ajax_load").html(data.success);
                       }
                   }
               })

            });

        })
    </script>
@endpush
