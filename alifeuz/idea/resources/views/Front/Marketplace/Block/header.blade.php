<header class="header">
    <div class="header__body">
        <div class="header__body__top">
            <div class="header__body__top__item">
                <a href="#">Как оформить заказ</a>
            </div>
            <div class="header__body__top__item">
                <a href="#">Реферальная программа</a>
            </div>
            <div class="header__body__top__item">
                <a href="#">Подарочные сертификаты</a>
            </div>
            <div class="header__body__top__item">
                <a href="#">Помощь</a>
            </div>
            <div class="header__body__top__item">
                <a href="#">Доставка</a>
            </div>
        </div>
        <div class="header__body__bottom">
            <div class="header__body__bottom__logo">
                <a href="{{route('front')}}"><img src="https://4fresh.ru/img/logo.png" alt="" width="250px" /></a>
            </div>
            <div class="header__body__bottom__phone">
                <a href="">+998935678559</a>
            </div>
            <div class="header__body__bottom__user">
                <div class="header__body__bottom__user-reg">
                    @auth
                        <a class="nav-link" style="background-color: blue;padding: 10px;border-radius: 5px;color: white" href="{{ route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            Logout
                            <form id="logout-form" action="{{route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </a>
                    @else
                        <a href="{{route('login')}}" style="padding: 10px"  class="reg-log">Вход</a>
                        <a href="{{route('sign.register')}}" style="padding: 10px" class="reg-reg py-2 px-1">Регистрация</a>
                    @endauth
                </div>
                <div class="header__body__bottom__user-check">
                    <a href="#"
                    ><i class="fas fa-heart"></i>
                        <p>Избранное(0)</p></a
                    >
                    <a href="#"
                    ><i class="fas fa-eye"></i>
                        <p>Вы недавно смотрели</p></a
                    >
                </div>
            </div>

            <div class="header__body__bottom__cart">
                <div class="cart-cart">
                    <i class="fas fa-shopping-cart"></i>
                    <p>Корзина</p>
                </div>
                <div class="cart-result">
                    <div class="result-text">
                        <p>Товаров: <span class="count_product text-danger" >@auth {{$counts}} @else 0  @endauth</span> шт</p>
                        <p>Сумма: <span class="all_summa">@auth {{$sum}} @else 0  @endauth</span> сумм</p>
                    </div>
                    <div class="result-order">
                        <a href="{{route('card')}}" id="#a_link" style=" border-radius:5px;background-color: green; color:white; padding: 10px">Оформить заказ</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__body__nav">
            <ul>
                <li class="header__body__nav__item"><a href="#">Акций</a></li>
                <li class="header__body__nav__item"><a href="#">Продукты</a></li>
                <li class="header__body__nav__item"><a href="#">Косметика</a></li>
                <li class="header__body__nav__item"><a href="#">Ароматерапия</a></li>
                <li class="header__body__nav__item"><a href="#">Для дома</a></li>
                <li class="header__body__nav__item"><a href="#">Для здоровья</a></li>
                <li class="header__body__nav__item"><a href="#">Прочее</a></li>
                <li class="header__body__nav__item"><a href="#">Производители</a></li>
            </ul>
        </div>
    </div>
</header>
