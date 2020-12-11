@extends('Front.Layout.layout')
@section('content')
    <main class="cart">
        <div class="cart__title title">
            <h3>Корзина</h3>
        </div>
        @if(isset($cards))
            <div id="form_result"></div>
            <form id="form_modal" method="post"  action="javascript:void(0)">
                @csrf
                <div class="cart__body">
            <table>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Товар</td>
                    <td>Цена</td>
                    <td>Количество</td>
                    <td>Подытог</td>
                </tr>
                  @foreach($cards as $card)
                        <tr>
                            <th>
                                <a href="{{route('card.delete',$card->id)}}"><i class="fa fa-remove"></i></a>
                            </th>
                            <th>
                                <img src="{{'/'.$card->product->photos[0]->filename}}" style="max-width: 100px;max-height: 100px "  alt=""/>
                            </th>
                            <th>{{$card->product->name()}}</th>
                              <th class="product_price" id="product_price">{{$card->product->price}}</th>
                            <th class="count-table">
                                    <input type="hidden" class="product_id" name="product_id[]" value="{{$card->product->id}}">
                                    <input type="button" id="minus" class="minus btn btn-secondary" value="-">
                                    <input type="text"  class="quantity form-group"  name="quantity[]" value="{{$card->quantity}}" style="margin: 0; border: 0; width:30px; padding: 5px 0 2px 7px; border-radius: 0">
                                    <input type="button" class="pilus btn btn-secondary" name="pilus"  id="pilus" value="+">
                             </th>
                            <th class="pod_summa">{{$card->product->price}}</th>
                        </tr>
                  @endforeach
            </table>
        </div>
        <div class="conclude-cart">
            <div class="conclude-cart-title">
                <h3>Сумма заказов</h3>
            </div>
            <div class="conclude-cart-conclude">
                <div class="conclude-item">
                    <p>Итого</p>
                    <p><span class="summa">{{$sum}}</span> сум</p>
                </div>
            </div>
            <button class="conclude-btn" type="submit" style="cursor: pointer">
                Оформить заказ <i class="fas fa-long-arrow-alt-right"></i>
            </button>
        </div>
       </form>
        @else
            <div class="cart__body">
                <table>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Товар</td>
                        <td>Цена</td>
                        <td>Количество</td>
                        <td>Подытог</td>
                    </tr>
                </table>
            </div>
        @endif
    </main>
@endsection
@push('css')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
@endpush
@push('js')
    <script src="/Front/js/card.js"></script>
    <script >
        $(document).ready(function (){
            $('#form_modal').submit(function (e){
                let formData = new FormData(this);
                @auth
                    $.ajax({
                        type: 'POST',
                        url: "{{route('orders.store')}}",
                        data:formData,
                        cache:false,
                        contentType: false,
                        processData: false,
                        dataType:"JSON",
                        success: function (data) {
                            if (data.success){
                                let html='';
                                if (data.errors){
                                    html="<div class='alert alert-danger'>";
                                    for (let count=0;data.errors.length;count++){
                                        html+='<p>'+data.errors[count]+'<p>';
                                    }
                                    html+='<div>';
                                }
                                if(data.success){
                                    html="<div class='alert alert-success'>"+data.success+"<div>";
                                    $("#form_modal")[0].reset();
                                }
                                $("#form_result").html(html);
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
