@extends('Front.Layout.layout')
@section('content')
    <section class="size">
        <div class="size__main">
            @if(isset($categories))
                @foreach($categories as $category)
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
    <main class="marketPage">
        <div class="marketPage__body">
            <div class="marketPage__body__top">
                @if(isset($products))
                 <div class="marketPage__body__top-name">
                    <div class="marketPage__body__top-name-img">
                        <img class="img" alt="" src="{{'/'.$products[0]->category->market->img}}"/>
                    </div>
                    <div class="marketPage__body__top-name-text">
                        <h3>{{$products[0]->category->market->name}}</h3>
                        <div class="category"><span>Здоровье | Спорт</span></div>
                        <div class="order">Заказы от:<span> 0 сум</span></div>
                        <div class="delivery">
                            <i class="fas fa-shuttle-van"></i>
                            <p>Сумма доставки <span>Бесплатно</span></p>
                        </div>
                    </div>
                </div>
                @endif
                <div class="marketPage__body__top-about">
                    <button class="about">
                        <i class="far fa-question-circle"></i> Информация о заведений
                    </button>
                </div>
            </div>
            <div class="marketPage__body__nav">
                <div class="marketPage__body__nav-items">
                    <div class="marketPage__body__nav-item market-active">
                        Настольный теннис и спортивно-игоровое оборудование
                    </div>
                    <div class="marketPage__body__nav-item">
                        Надувная кровать
                    </div>
                    <div class="marketPage__body__nav-item">
                        Велотренажер
                    </div>
                    <div class="marketPage__body__nav-item">
                        Беговая дорожка
                    </div>
                </div>
                <div class="about-more about">
                    <i class="fas fa-bars"></i>
                    <p>Еще</p>
                </div>
            </div>
            <div class="marketPage__body__products">
                <div class="search">
                    <input type="text" />
                    <i class="fas fa-search"></i>
                </div>
                <div class="marketPage__body__products__hits">
                    <div class="marketPage__body__products__hits-title title">
                        <h3>Хиты продаж</h3>
                    </div>
                    <div class="marketPage__body__products__hits-products">
                        <div class="marketPage__body__products__hits-products-item">
                            <img
                                src="https://express24.uz/upload/resize_cache/iblock/da4/450_300_0/da4857e53bf3f0b9497ae4e9e47441a8.jpg"
                                alt=""
                            />
                            <h3>Велотренажер MAXFIT 07</h3>
                            <p>3 770 000 сум</p>
                        </div>
                        <div class="marketPage__body__products__hits-products-item">
                            <img
                                src="https://express24.uz/upload/resize_cache/iblock/da4/450_300_0/da4857e53bf3f0b9497ae4e9e47441a8.jpg"
                                alt=""
                            />
                            <h3>Велотренажер MAXFIT 07</h3>
                            <p>3 770 000 сум</p>
                        </div>
                        <div class="marketPage__body__products__hits-products-item">
                            <img
                                src="https://express24.uz/upload/resize_cache/iblock/da4/450_300_0/da4857e53bf3f0b9497ae4e9e47441a8.jpg"
                                alt=""
                            />
                            <h3>Велотренажер MAXFIT 07</h3>
                            <p>3 770 000 сум</p>
                        </div>
                        <div class="marketPage__body__products__hits-products-item">
                            <img
                                src="https://express24.uz/upload/resize_cache/iblock/da4/450_300_0/da4857e53bf3f0b9497ae4e9e47441a8.jpg"
                                alt=""
                            />
                            <h3>Велотренажер MAXFIT 07</h3>
                            <p>3 770 000 сум</p>
                        </div>
                        <div class="marketPage__body__products__hits-products-item">
                            <img
                                src="https://express24.uz/upload/resize_cache/iblock/da4/450_300_0/da4857e53bf3f0b9497ae4e9e47441a8.jpg"
                                alt=""
                            />
                            <h3>Велотренажер MAXFIT 07</h3>
                            <p>3 770 000 сум</p>
                        </div>
                        <div class="marketPage__body__products__hits-products-item">
                            <img
                                src="https://express24.uz/upload/resize_cache/iblock/da4/450_300_0/da4857e53bf3f0b9497ae4e9e47441a8.jpg"
                                alt=""
                            />
                            <h3>Велотренажер MAXFIT 07</h3>
                            <p>3 770 000 сум</p>
                        </div>
                    </div>
                </div>
                <div class="marketPage__body__products__all">
                    <div class="marketPage__body__products__all-title title">
                        <h3>Все товары</h3>
                    </div>
                    <div class="marketPage__body__products__all-products">
                        @if(isset($products))
                            @foreach($products as $product)
                                 <div class="marketPage__body__products__all-products-item">
                                     <img class="img" alt="img" src="{{'/'.$product->photos[0]->filename}}"  style="cursor: pointer; max-width: 258px;height: 300px" @auth data-market="{{$product->category->market_id}}" data-id="{{$product->id}}" data-price="{{$product->price}}" @endauth />
                                     <h3>
                                        <a href="{{route('markets.show',$product->id)}}">{{$product->name()}}</a>
                                    </h3>
                                    <p>{{$product->price}} сум</p>
                                 </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
            <button class="show-more">Показать еще</button>
        </div>
    </main>
@endsection
@push('js')
    <script type="text/javascript">
        $(document).ready(function (){
            let all_sum=0;
            $('.img').click(function (e){
                e.preventDefault();
                @auth
                let price= $(this).data('price');
                let id=$(this).data('id');
                let market_id=$(this).data('market');
                all_sum+=parseInt(price);
                $('.all_summa').html(all_sum);
               let b, a=$('.count_product').text();
                b=parseInt(a)+1;
                $('.count_product').html(b);
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
                            // $('#sub_id').html(data.success);
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

