@extends('Front.Marketplace.Layout.layout')
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
        <section class="size">
            <div class="size__main">
                @if(isset($market_categories))
                   @foreach($market_categories as $category)
                      <div class="size__main__item">
                        <div class="size__main__item-text">
                            <p>
                                {{$category->name()}} <br />
                                <span></span>
                            </p>
                        </div>
                    </div>
                   @endforeach
                @endif
            </div>
        </section>
        <section class="newProducts">
            <div class="newProducts__title title">
                <h3>Новинки</h3>
                <a href="#">Все новинки</a>
            </div>
            <div class="newProducts__body">
                @if(isset($last_products))
                    @foreach($last_products as $model)
                        <div class="newProducts__body__item" style="cursor:pointer">
                            <img class="img" alt="" src="{{'/'.$model->photos[0]->filename}}"  @auth data-market="{{$model->category->market_id}}" data-id="{{$model->id}}" data-price="{{$model->price}}" @endauth width="210px" height="210px"/>
                            <div class="newProducts__body__item-title">
                                <a href="{{route('markets.show',$model->id)}}">
                                    <p>{{$model->name()}}</p>
                                </a>
                            </div>
                            <div class="newProducts__body__item-price">
                                <p>{{$model->price}} som</p>
                            </div>
                            <div class="newProducts__body__item-category">
                                <a href="#">{{$model->category->name()}}</a>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </section>
        <section class="recomenProduct">
            <div class="recomenProduct__title title">
                <h3>Рекомендуемые</h3>
                <a href="#">Все рекомендации</a>
            </div>
            <div class="recomenProduct__body" style="cursor:pointer">
                @if(isset($recommen))
                    @foreach($recommen as $model)
                        <div class="recomenProduct__body__item">
                            <img class="img" alt="bu rasm" src="{{'/'.$model->photos[0]->filename}}" width="210px" height="210px"/>
                            <div class="recomenProduct__body__item-title">
                                <a href="{{route('markets.show',$model->id)}}">
                                    <p>{{$model->name()}}</p>
                                </a>
                            </div>
                            <div class="recomenProduct__body__item-price">
                                <a href="{{route('markets.show',$model->id)}}">
                                    <p>{{$model->price}} sum</p>
                                </a>
                            </div>
                            <div class="recomenProduct__body__item-category">
                                <p>{{$model->category->name()}}</p>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </section>

        <section class="allProduct">
            <div class="allProduct__title title">
                <h3>Все товары</h3>
                <a href="#">Показать все товары</a>
            </div>
            <div class="allProduct__body" >
                @if($products)
                   @foreach($products as $product)
                                <div class="allProduct__body__item" style="cursor:pointer">
                                        <img class="img" alt="img" src="{{'/'.$product->photos[0]->filename}}"  style="max-width: 258px;height: 300px" @auth data-market="{{$product->category->market_id}}" data-id="{{$product->id}}" data-price="{{$product->price}}" @endauth />
                                        <div class="allProduct__body__item-title">
                                            <a href="{{route('markets.show',$product->id)}}">
                                                <p>{{$product->name()}}</p>
                                            </a>
                                        </div>
                                        <div class="allProduct__body__item-price">
                                            <p>{{$product->price}} сумм</p>
                                        </div>
                                        <div class="allProduct__body__item-category">
                                            <p>{{$product->category->name()}}</p>
                                        </div>
                                </div>
                    @endforeach
                @endif
            </div>
        </section>
        <section class="blog">
            <div class="blog__title title">
                <h3>Наш блок</h3>
                <a href="#">Все записи из блога</a>
            </div>
            <div class="blog__body">
                <div class="blog__body__item">
                    <img
                        src="https://4fresh.ru/upload/resize_cache/iblock/fba/220_165_2/fbaddb3b93290097db85c44146769b2a.jpg"
                        alt=""
                    />
                    <div class="blog__body__item-title">
                        <h4>15 книг для соверменных родителей</h4>
                        <p>Новая рубрика - книжная полка</p>
                    </div>
                </div>
                <div class="blog__body__item">
                    <img
                        src="https://4fresh.ru/upload/resize_cache/iblock/fba/220_165_2/fbaddb3b93290097db85c44146769b2a.jpg"
                        alt=""
                    />
                    <div class="blog__body__item-title">
                        <h4>15 книг для соверменных родителей</h4>
                        <p>Новая рубрика - книжная полка</p>
                    </div>
                </div>
                <div class="blog__body__item">
                    <img
                        src="https://4fresh.ru/upload/resize_cache/iblock/fba/220_165_2/fbaddb3b93290097db85c44146769b2a.jpg"
                        alt=""
                    />
                    <div class="blog__body__item-title">
                        <h4>15 книг для соверменных родителей</h4>
                        <p>Новая рубрика - книжная полка</p>
                    </div>
                </div>
                <div class="blog__body__item">
                    <img
                        src="https://4fresh.ru/upload/resize_cache/iblock/fba/220_165_2/fbaddb3b93290097db85c44146769b2a.jpg"
                        alt=""
                    />
                    <div class="blog__body__item-title">
                        <h4>15 книг для соверменных родителей</h4>
                        <p>Новая рубрика - книжная полка</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="subscribe">
            <div class="subscribe__body">
                <h2>А ВЫ ПОДПИСАНЫ НА НАШУ РАССЫЛКУ? НЕТ?</h2>
                <p>
                    Статьи, рекомендации и новости от 4fresh.ru. Бесплатные советы экспертов о
                    натуральных продуктах, косметике, красоте и здоровье.
                </p>
                <form action="">
                    <input type="email" class="subcsr-inp" placeholder="Введите ваш email" />
                    <input type="submit" class="subcsr-btn" value="Подписаться" />
                </form>
            </div>
        </section>
@endsection
@push('js')
    <script type="text/javascript">
          $(document).ready(function (){
              let all_sum=0;
              let count=0;
              $('.img').click(function (e){
                  e.preventDefault();
                  @auth
                  let price= $(this).data('price');
                  let id=$(this).data('id');
                  let market_id=$(this).data('market');
                  all_sum+=parseInt(price);
                  count++;
                  $('.all_summa').html(all_sum);
                  $('.count_product').html(count);
                  $.ajax({
                      type: 'POST',
                      url: "{{route('card.store')}}",
                      data: {
                          id:id,
                          market_id:market_id,
                          _token:'{{csrf_token()}}'
                      },
                      dataType:"JSON",
                      success: function (data) {
                          if (data.success){
                          }
                      }
                  });
                  @else
                   window.location='/sign/register'
                  @endauth
              });
          });
    </script>
@endpush

