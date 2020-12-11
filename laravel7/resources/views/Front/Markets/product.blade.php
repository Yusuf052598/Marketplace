@extends('Front.Layout.layout')
@section('content')
    <main class="main-productPage">
        <section class="productPage">
            @if(isset($products))
            @foreach($products as $product)
               <div class="productPage__body">
                    <div class="productPage__body__left">
                        <img class="img" src="{{'/'.$product->photos[0]->filename}}" style="max-width: 600px ;max-height: 600px" alt=""/>
                    </div>
                <div class="productPage__body__right">
                    <div class="productPage__body__right-title">
                        <h2>Кеды OYO XL</h2>
                        <p>329 000 UZS</p>
                    </div>
                    <div class="productPage__body__right-variants">
                        @foreach($product->photos as $photo)
                              <img src="{{'/'.$photo->filename}}" style="max-width: 100px;height: 100px" alt=""/>
                        @endforeach
                    </div>
                    <div class="productPage__body__right-advice">
                        <p>
                            СОВЕТ! Добавьте дополнительный размер для примерки или воспользуйтесь нашим
                            шаблоном для точного определения: Найти правильный размер
                        </p>
                    </div>

                    <div class="productPage__body__right-size">
                        <label for="">Размер</label>
                        <select name="" id="">
                            <option value="">Выбрать опцию</option>
                            <option value="">31</option>
                            <option value="">32</option>
                            <option value="">33</option>
                            <option value="">34</option>
                        </select>
                    </div>

                    <div class="productPage__body__right-addCart">
                        <div class="count">
                            <button>-</button>
                            <p>1</p>
                            <button>+</button>
                        </div>

                        <button class="addCart">В КОРЗИНУ</button>
                    </div>

                    <div class="productPage__body__right-izbran">
                        <i class="far fa-heart"></i>
                        <p>В избранное</p>
                    </div>

                    <div class="productPage__body__right-details">
                        <h3>Детали</h3>
                        <div class="details-block">
                            <strong>Коллекций</strong>
                            <p>Back To School</p>
                        </div>
                        <div class="details-block">
                            <strong>Цвет</strong>
                            <p>Черный</p>
                        </div>
                        <div class="details-block">
                            <strong>Пол</strong>
                            <p>Для девочек, Для мальчиков/p></p>
                        </div>

                        <div class="details-block">
                            <strong>Стелька</strong>
                            <p>Анатомическая</p>
                        </div>
                        <div class="details-block">
                            <strong>Материал</strong>
                            <p>экокожа</p>
                        </div>
                        <div class="details-block">
                            <strong>Размер</strong>
                            <p>31,32,33,34,35,36,37,38,39</p>
                        </div>
                    </div>

                    <div class="productPage__body__right-category">
                        <div class="articul">
                            <strong>Артикул:</strong>
                            <p>93818K103</p>
                        </div>
                        <div class="productPage__body__right-category-category">
                            <strong>Категории:</strong>
                            <p>
                                Кроссовки и Кеды, Одежда
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </section>

        <section class="productPage-recomen">
            <div class="productPage-recomen title">Рекомендации</div>
            <a href="">Все рекомендации</a>
            <div class="productPage-recomen__body">
                <div class="productPage-recomen__body__item">
                    <img
                        src="https://vicco.uz/wp-content/uploads/2020/03/C0ADD7E8F2718EC6C72020D259E6D851_032920212002-1024x1024.jpeg"
                        alt=""
                    />
                    <p class="recomen-title">Кожаные мокасины Fredo</p>
                    <div class="price">
                        <p class="price-now">149 000 UZS</p>
                    </div>
                </div>
                <div class="productPage-recomen__body__item">
                    <img
                        src="https://vicco.uz/wp-content/uploads/2020/03/C0ADD7E8F2718EC6C72020D259E6D851_032920212002-1024x1024.jpeg"
                        alt=""
                    />
                    <p class="recomen-title">Кожаные мокасины Fredo</p>
                    <div class="price">
                        <p class="price-prev">399 000 UZS</p>
                        <p class="price-now">149 000 UZS</p>
                    </div>
                </div>
                <div class="productPage-recomen__body__item">
                    <img
                        src="https://vicco.uz/wp-content/uploads/2020/03/C0ADD7E8F2718EC6C72020D259E6D851_032920212002-1024x1024.jpeg"
                        alt=""
                    />
                    <p class="recomen-title">Кожаные мокасины Fredo</p>
                    <div class="price">
                        <p class="price-prev">399 000 UZS</p>
                        <p class="price-now">149 000 UZS</p>
                    </div>
                </div>
                <div class="productPage-recomen__body__item">
                    <img
                        src="https://vicco.uz/wp-content/uploads/2020/03/C0ADD7E8F2718EC6C72020D259E6D851_032920212002-1024x1024.jpeg"
                        alt=""
                    />
                    <p class="recomen-title">Кожаные мокасины Fredo</p>
                    <div class="price">
                        <p class="price-prev">399 000 UZS</p>
                        <p class="price-now">149 000 UZS</p>
                    </div>
                </div>
                <div class="productPage-recomen__body__item">
                    <img
                        src="https://vicco.uz/wp-content/uploads/2020/03/C0ADD7E8F2718EC6C72020D259E6D851_032920212002-1024x1024.jpeg"
                        alt=""
                    />
                    <p class="recomen-title">Кожаные мокасины Fredo</p>
                    <div class="price">
                        <p class="price-prev">399 000 UZS</p>
                        <p class="price-now">149 000 UZS</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="feedback">
            <div class="feedback__title title">
                <h3>Отзывы</h3>
                <span>318</span>
            </div>
            <div class="feedback__body">
                <div class="feedback__body__item-top">
                    <p>Фотографии покупателей</p>
                    <div class="item-left-img">
                        <div class="feedback__body__item-img">
                            <img
                                src="https://cdn1.ozone.ru/s3/rp-photo-4/wc175/2968d71b-1c5f-4b63-91d5-3550d78b91e2.jpeg"
                                alt=""
                            />
                        </div>
                        <div class="feedback__body__item-img">
                            <img
                                src="https://cdn1.ozone.ru/s3/rp-photo-4/wc175/2968d71b-1c5f-4b63-91d5-3550d78b91e2.jpeg"
                                alt=""
                            />
                        </div>
                        <div class="feedback__body__item-img">
                            <img
                                src="https://cdn1.ozone.ru/s3/rp-photo-4/wc175/2968d71b-1c5f-4b63-91d5-3550d78b91e2.jpeg"
                                alt=""
                            />
                        </div>
                        <div class="feedback__body__item-img">
                            <img
                                src="https://cdn1.ozone.ru/s3/rp-photo-4/wc175/2968d71b-1c5f-4b63-91d5-3550d78b91e2.jpeg"
                                alt=""
                            />
                        </div>
                        <div class="feedback__body__item-img">
                            <img
                                src="https://cdn1.ozone.ru/s3/rp-photo-4/wc175/2968d71b-1c5f-4b63-91d5-3550d78b91e2.jpeg"
                                alt=""
                            />
                        </div>
                        <div class="feedback__body__item-img">
                            <img
                                src="https://cdn1.ozone.ru/s3/rp-photo-4/wc175/2968d71b-1c5f-4b63-91d5-3550d78b91e2.jpeg"
                                alt=""
                            />
                        </div>
                        <div class="feedback__body__item-img">
                            <img
                                src="https://cdn1.ozone.ru/s3/rp-photo-4/wc175/2968d71b-1c5f-4b63-91d5-3550d78b91e2.jpeg"
                                alt=""
                            />
                        </div>
                        <div class="feedback__body__item-img">
                            <img
                                src="https://cdn1.ozone.ru/s3/rp-photo-4/wc175/2968d71b-1c5f-4b63-91d5-3550d78b91e2.jpeg"
                                alt=""
                            />
                        </div>
                        <div class="feedback__body__item-img">
                            <img
                                src="https://cdn1.ozone.ru/s3/rp-photo-4/wc175/2968d71b-1c5f-4b63-91d5-3550d78b91e2.jpeg"
                                alt=""
                            />
                        </div>
                        <div class="feedback__body__item-img">
                            <img
                                src="https://cdn1.ozone.ru/s3/rp-photo-4/wc175/2968d71b-1c5f-4b63-91d5-3550d78b91e2.jpeg"
                                alt=""
                            />
                        </div>
                    </div>
                </div>

                <div class="feedback__body__item-main">
                    <div class="feedback__body__item-main-left">
                        <div class="item-main-filter">
                            <select name="" id="">
                                <option value="">Сначала полезные</option>
                                <option value="">Сначала новые</option>
                                <option value="">Сначала последние</option>
                                <option value="">Сначала с низкой оценкой</option>
                            </select>

                            <input type="checkbox" />
                            <label>Только с фото</label>
                        </div>

                        <div class="item-main-feedback">
                            <div class="item-main-feedback-top">
                                <div class="feedback-top-name">
                                    <img
                                        src="https://cdn1.ozone.ru/s3/fs-my-account-avatar/wc50/sVfKWERZQx6dZs1GNeFd3A.jpg"
                                        alt=""
                                    />
                                    <p>Ольга</p>
                                </div>
                                <div class="feedback-top-stars">
                                    <p>5 ноября 2019</p>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="item-main-feedback-text">
                                <div class="whii">
                                    <p><i class="fas fa-check"></i> Товар приобретен на MarketPlace</p>
                                    <span>Обьем: 1 ТБ</span>
                                </div>
                                <div class="feedback-text-main">
                                    <p>
                                        <span>Достоинства</span> <br />
                                        Легкий, быстрый (USB-порт 3.0), большой объем (1 ТБ), стильный. Одни
                                        положительные впечатления.
                                    </p>
                                    <p>
                                        <span>Недостатки</span> <br />
                                        нет
                                    </p>

                                    <p>
                                        <span>Комментарий</span> <br />
                                        Покупкой довольна. Озон доставил быстро, упаковал очень хорошо (см.фото),
                                        сам диск выполнен из качественных материалов, почти невесомый, в хозяйстве
                                        необходимая вещь (в день доставки разгрузила ноутбук и телефон от
                                        накопившихся фото и видео). Данные передает очень быстро, 57 гб
                                        перекинулись с ноутбука на диск за 30 минут. Рекомендую к покупке.
                                        Спасибо, Озон!
                                    </p>
                                </div>

                                <div class="feedback-text-img">
                                    <img
                                        src="https://cdn1.ozone.ru/s3/rp-photo-4/wc175/2968d71b-1c5f-4b63-91d5-3550d78b91e2.jpeg"
                                        alt=""
                                    />
                                    <img
                                        src="https://cdn1.ozone.ru/s3/rp-photo-4/wc175/2968d71b-1c5f-4b63-91d5-3550d78b91e2.jpeg"
                                        alt=""
                                    />
                                    <img
                                        src="https://cdn1.ozone.ru/s3/rp-photo-4/wc175/2968d71b-1c5f-4b63-91d5-3550d78b91e2.jpeg"
                                        alt=""
                                    />
                                    <img
                                        src="https://cdn1.ozone.ru/s3/rp-photo-4/wc175/2968d71b-1c5f-4b63-91d5-3550d78b91e2.jpeg"
                                        alt=""
                                    />
                                </div>
                                <div class="feedback-text-fingers">
                                    <div class="like">
                                        <i class="fas fa-thumbs-up"></i>
                                        <p>64</p>
                                    </div>
                                    <div class="dislike">
                                        <i class="fas fa-thumbs-down"></i>
                                        <p>0</p>
                                    </div>
                                </div>
                            </div>
                            <div class="otherFeedback">
                                <div class="otherFeedback__body">
                                    <div class="otherFeedback__body-top">
                                        <div class="otherFeedback__body-top-name">
                                            <div class="name-title">
                                                <img
                                                    src="https://cdn1.ozone.ru/s3/fs-my-account-avatar/wc50/fe40a5262847938e88992fde645b9c3047dccdbc2190a7c33f.jpg"
                                                    alt=""
                                                />
                                                <div class="name-title-text">
                                                    Пользователь OZON <br />
                                                    <span>в ответ Ольга</span>
                                                </div>
                                            </div>

                                            <div class="name-date">
                                                <p>24 мая 2020</p>
                                            </div>
                                        </div>
                                        <div class="otherFeedback__body-top-text">
                                            <p>
                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa,
                                                repellendus. Possimus, accusamus modi.
                                            </p>
                                            <div class="feedback-text-fingers">
                                                <div class="like">
                                                    <i class="fas fa-thumbs-up"></i>
                                                    <p>0</p>
                                                </div>
                                                <div class="dislike">
                                                    <i class="fas fa-thumbs-down"></i>
                                                    <p>0</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-main-feedback">
                            <div class="item-main-feedback-top">
                                <div class="feedback-top-name">
                                    <img
                                        src="https://cdn1.ozone.ru/s3/fs-my-account-avatar/wc50/sVfKWERZQx6dZs1GNeFd3A.jpg"
                                        alt=""
                                    />
                                    <p>Ольга</p>
                                </div>
                                <div class="feedback-top-stars">
                                    <p>5 ноября 2019</p>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="item-main-feedback-text">
                                <div class="whii">
                                    <p><i class="fas fa-check"></i> Товар приобретен на MarketPlace</p>
                                    <span>Обьем: 1 ТБ</span>
                                </div>
                                <div class="feedback-text-main">
                                    <p>
                                        <span>Достоинства</span> <br />
                                        Легкий, быстрый (USB-порт 3.0), большой объем (1 ТБ), стильный. Одни
                                        положительные впечатления.
                                    </p>
                                    <p>
                                        <span>Недостатки</span> <br />
                                        нет
                                    </p>

                                    <p>
                                        <span>Комментарий</span> <br />
                                        Покупкой довольна. Озон доставил быстро, упаковал очень хорошо (см.фото),
                                        сам диск выполнен из качественных материалов, почти невесомый, в хозяйстве
                                        необходимая вещь (в день доставки разгрузила ноутбук и телефон от
                                        накопившихся фото и видео). Данные передает очень быстро, 57 гб
                                        перекинулись с ноутбука на диск за 30 минут. Рекомендую к покупке.
                                        Спасибо, Озон!
                                    </p>
                                </div>

                                <div class="feedback-text-img">
                                    <img
                                        src="https://cdn1.ozone.ru/s3/rp-photo-4/wc175/2968d71b-1c5f-4b63-91d5-3550d78b91e2.jpeg"
                                        alt=""
                                    />
                                    <img
                                        src="https://cdn1.ozone.ru/s3/rp-photo-4/wc175/2968d71b-1c5f-4b63-91d5-3550d78b91e2.jpeg"
                                        alt=""
                                    />
                                    <img
                                        src="https://cdn1.ozone.ru/s3/rp-photo-4/wc175/2968d71b-1c5f-4b63-91d5-3550d78b91e2.jpeg"
                                        alt=""
                                    />
                                    <img
                                        src="https://cdn1.ozone.ru/s3/rp-photo-4/wc175/2968d71b-1c5f-4b63-91d5-3550d78b91e2.jpeg"
                                        alt=""
                                    />
                                </div>
                                <div class="feedback-text-fingers">
                                    <div class="like">
                                        <i class="fas fa-thumbs-up"></i>
                                        <p>64</p>
                                    </div>
                                    <div class="dislike">
                                        <i class="fas fa-thumbs-down"></i>
                                        <p>0</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-main-feedback">
                            <div class="item-main-feedback-top">
                                <div class="feedback-top-name">
                                    <img
                                        src="https://cdn1.ozone.ru/s3/fs-my-account-avatar/wc50/sVfKWERZQx6dZs1GNeFd3A.jpg"
                                        alt=""
                                    />
                                    <p>Ольга</p>
                                </div>
                                <div class="feedback-top-stars">
                                    <p>5 ноября 2019</p>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="item-main-feedback-text">
                                <div class="whii">
                                    <p><i class="fas fa-check"></i> Товар приобретен на MarketPlace</p>
                                    <span>Обьем: 1 ТБ</span>
                                </div>
                                <div class="feedback-text-main">
                                    <p>
                                        <span>Достоинства</span> <br />
                                        Легкий, быстрый (USB-порт 3.0), большой объем (1 ТБ), стильный. Одни
                                        положительные впечатления.
                                    </p>
                                    <p>
                                        <span>Недостатки</span> <br />
                                        нет
                                    </p>

                                    <p>
                                        <span>Комментарий</span> <br />
                                        Покупкой довольна. Озон доставил быстро, упаковал очень хорошо (см.фото),
                                        сам диск выполнен из качественных материалов, почти невесомый, в хозяйстве
                                        необходимая вещь (в день доставки разгрузила ноутбук и телефон от
                                        накопившихся фото и видео). Данные передает очень быстро, 57 гб
                                        перекинулись с ноутбука на диск за 30 минут. Рекомендую к покупке.
                                        Спасибо, Озон!
                                    </p>
                                </div>

                                <div class="feedback-text-img">
                                    <img
                                        src="https://cdn1.ozone.ru/s3/rp-photo-4/wc175/2968d71b-1c5f-4b63-91d5-3550d78b91e2.jpeg"
                                        alt=""
                                    />
                                    <img
                                        src="https://cdn1.ozone.ru/s3/rp-photo-4/wc175/2968d71b-1c5f-4b63-91d5-3550d78b91e2.jpeg"
                                        alt=""
                                    />
                                    <img
                                        src="https://cdn1.ozone.ru/s3/rp-photo-4/wc175/2968d71b-1c5f-4b63-91d5-3550d78b91e2.jpeg"
                                        alt=""
                                    />
                                    <img
                                        src="https://cdn1.ozone.ru/s3/rp-photo-4/wc175/2968d71b-1c5f-4b63-91d5-3550d78b91e2.jpeg"
                                        alt=""
                                    />
                                </div>
                                <div class="feedback-text-fingers">
                                    <div class="like">
                                        <i class="fas fa-thumbs-up"></i>
                                        <p>64</p>
                                    </div>
                                    <div class="dislike">
                                        <i class="fas fa-thumbs-down"></i>
                                        <p>0</p>
                                    </div>
                                </div>
                            </div>

                            <div class="otherFeedback">
                                <div class="otherFeedback__body">
                                    <div class="otherFeedback__body-top">
                                        <div class="otherFeedback__body-top-name">
                                            <div class="name-title">
                                                <img
                                                    src="https://cdn1.ozone.ru/s3/fs-my-account-avatar/wc50/fe40a5262847938e88992fde645b9c3047dccdbc2190a7c33f.jpg"
                                                    alt=""
                                                />
                                                <div class="name-title-text">
                                                    Пользователь OZON <br />
                                                    <span>в ответ Ольга</span>
                                                </div>
                                            </div>

                                            <div class="name-date">
                                                <p>24 мая 2020</p>
                                            </div>
                                        </div>
                                        <div class="otherFeedback__body-top-text">
                                            <p>
                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa,
                                                repellendus. Possimus, accusamus modi.
                                            </p>
                                            <div class="feedback-text-fingers">
                                                <div class="like">
                                                    <i class="fas fa-thumbs-up"></i>
                                                    <p>0</p>
                                                </div>
                                                <div class="dislike">
                                                    <i class="fas fa-thumbs-down"></i>
                                                    <p>0</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="feedback__body__item-main-right">
                        <div class="right-top">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p>4.8 / 5</p>
                        </div>
                        <div class="right-descr">
                            <div class="right-descr-item">
                                <p>5 звезд</p>
                                <div class="line">
                                    <span class="secondLine five"> </span>
                                </div>
                                <p class="descr-count">
                                    281
                                </p>
                            </div>
                            <div class="right-descr-item">
                                <p>4 звезд</p>
                                <div class="line">
                                    <span class="secondLine four"> </span>
                                </div>
                                <p class="descr-count">
                                    22
                                </p>
                            </div>
                            <div class="right-descr-item">
                                <p>3 звезд</p>
                                <div class="line">
                                    <span class="secondLine three"> </span>
                                </div>
                                <p class="descr-count">
                                    7
                                </p>
                            </div>
                            <div class="right-descr-item">
                                <p>2 звезд</p>
                                <div class="line">
                                    <span class="secondLine two"> </span>
                                </div>
                                <p class="descr-count">
                                    4
                                </p>
                            </div>
                            <div class="right-descr-item">
                                <p>1 звезд</p>
                                <div class="line">
                                    <span class="secondLine one"> </span>
                                </div>
                                <p class="descr-count">
                                    4
                                </p>
                            </div>
                        </div>

                        <div class="right-btn">
                            <button class="feedback-btn">Написать отзыв</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
