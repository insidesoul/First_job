<?php
$phone = '8 (961) 331-39-51';
$tel = preg_replace(['/\D/', '/^[78]/'], ['', '+7'], $phone);
?>
<?php include_once __DIR__ . '/multi-regionality.php'; ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="yandex-verification" content="71149ceae4e3a8a8" />
    <title>Заём под залог ПТС грузовых авто <?= $in_city ?></title>
    <meta name="description" content="Автоломбард под залог ПТС   <?= $in_city ?>" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <meta property="og:type" content="website/">
    <meta property="og:url" content="" />
    <meta property="og:locale" content="ru" />
    <link rel="stylesheet" href="css-web/common.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="images/icon/favicon.png" />
</head>

<body>

    <a class="gotopbtn" href="#"><i class="fas fa-arrow-up"></i></a>

    <div title="взять кредит в залог автомобиля" class="bgImageAvto">

        <header class="header header-transparent ">
            <div class="header-top">
                <div class="container">
                    <div class="inner-header">
                        <a class="inner-brand" href="/">
                            <img class="img-logo-top-onWhite " style="margin-top: -88px" src="./images/bg/moskovBg.png" alt="logo">
                        </a>
                    </div>

                    <div class="inner-navigation visible-on-wade">
                        <div class="inner-nav">
                            <div class="inner-block">

                                    <div class="dropdown">
                                      <button class="dropbtn">Выбрать регион</button>
                                      <div class="dropdown-content">
                                        <a href="krasnodar.carzaem.com">Краснодар</a>
                                        <a href="/">Ставрополь</a>
                                        <a href="novorossiysk.carzaem.com">Новороссийск</a>
                                      </div>
                                    </div>

                                <div class="header-phone"><a href="tel:<?= $tel ?>"><?= $phone ?></a><br /></div>

                                <button type="button" class="btn btn-line-red" data-toggle="modal" data-target="#CallPhone-ver-2">
                                    Обратный звонок
                                </button>

                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#CallPhone-ver-4">Оформить займ
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="extra-nav">
                        <ul>
                            <li class="icon-phone"><a href="tel:<?= $tel ?>"><span class="icon-item-span"></span></a></li>
                            <li>
                                <a class="off-canvas-open" href="#"><span></span><span class="menu-item-span"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <main>
            <section class="overlay-background" style="height: 557px;">
                <div class="container responceHide">
                    <div class="row">
                        <div class="col-md-6 col-sm-7">
                            <div class="header-form-block">
                                <h1 class="h1"><span class="h1-span">Заём под залог ПТС грузовых авто <br><?= $in_city ?></span></h1>

                                <div class="row">
                                    <div class="col-md-4 introduction">
                                        <div class="introduction-image" style='margin-bottom: 4px;'>
                                            <img style="width: 44px;" src="images/icon/p4298/icon_15.png" alt="icon" />
                                        </div>
                                        Ставка <span>от 2% в мес.</span>
                                    </div>
                                    <div class="col-md-4 introduction">
                                        <div class="introduction-image">
                                            <img style="width: 44px;" src="images/icon/p4298/money-bag.png" alt="icon" />
                                        </div>
                                        Сумма <span>от 50 000 руб.</span>
                                    </div>
                                    <div class="col-md-4 introduction">
                                        <div class="introduction-image">
                                            <img style="width: 44px;" src="images/icon/p4298/calendarRed.png" alt="icon" />
                                        </div>
                                        Срок займа <span>до 60 мес.</span>
                                    </div>
                                    <div class="col-md-4 introduction">
                                        <div class="introduction-image">
                                            <img style="width: 44px;" src="images/icon/p4298/icon_40.png" alt="icon" />
                                        </div>
                                        Без кредитной истории
                                    </div>
                                    <div class="col-md-4 introduction">
                                        <div class="introduction-image" style='margin-bottom: 4px;'>
                                            <img style="width: 44px;" src="images/icon/p4298/icon_19.png" alt="icon" />
                                        </div>
                                        Без комиссий
                                    </div>
                                </div>

                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#CallPhone-ver-4">Оформить займ</button>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
    </div>
<section id=products-3>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <h3 class=h1><span class="h1-span">Принимаем в залог любые </span>грузовики</h3>
                    <div class="visible-on-wade visible-on-tablet">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="product-template-bg">
                                    <div title="взять кредит в залог автомобиля" class="element-img grey" style="background-image: url(images/product/gazel3.jpg);"></div>
                                    <div class="element-title">Газели</div>
                                    <div class="element-text">грузовые, пассажирские</div>

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="product-template-bg">
                                    <div title="кредит под залог грузового автомобиля в банке" class="element-img grey" style="background-image: url(images/product/truck2.jpg);"></div>
                                    <div class="element-title">Грузовые авто</div>
                                    <div class="element-text">Газели, тягачи, фуры</div>

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="product-template-bg">
                                    <div title="кредит под залог птс спецтехники москва" class="element-img grey" style="background-image: url(images/product/tyagach2.jpg);"></div>
                                    <div class="element-title">Тягачи</div>
                                    <div class="element-text">отечественные и импортные</div>

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="product-template-bg">
                                    <div title="кредит под залог птс" class="element-img grey" style="background-image: url(images/product/pricep.jpg);"></div>
                                    <div class="element-title">Прицепы</div>
                                    <div class="element-text">Прицепы и полуприцепы</div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="visible-on-mobile">
                        <div class="owl-carousel owl-theme product">
                            <div class="product-template-bg">
                                <div class="element-img grey" style="background-image: url(images/product/gazel3.jpg);"></div>
                                <div class="element-title">Газели</div>
                                <div class="element-text">грузовые, пассажирские</div>

                            </div>

                            <div class="product-template-bg">
                                <div class="element-img grey" style="background-image: url(images/product/truck2.jpg);"></div>
                                <div class="element-title">Грузовые авто</div>
                                <div class="element-text">Газели, тягачи, фуры</div>

                            </div>

                            <div class="product-template-bg">
                                <div class="element-img grey" style="background-image: url(images/product/tyagach2.jpg);"></div>
                                <div class="element-title">Тягачи</div>
                                <div class="element-text">отечественные и импортные</div>

                            </div>

                            <div class="product-template-bg">
                                <div class="element-img grey" style="background-image: url(images/product/pricep.jpg);"></div>
                                <div class="element-title">Прицепы</div>
                                <div class="element-text">Прицепы и полуприцепы</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<section id="calculate-2-3-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="h1">
                    <span class="h1-span">Калькулятор займа</span>
                </h3>
            </div>

            <div id="calculator" class="col-md-12">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="calculate-item">
                            <h6 >Необходимая сумма</h6>
                            <div class="calculate-steps">
                                <div class="">
                                    <span class="amount-value yellow-text" id="amount-thousands"></span>
                                    <span>₽</span>
                                    <span>тысяч</span>
                                </div>
                            </div>
                            <div class="calculate-steps">
                                <div class="steps-left for-thousands">30</div>
                                <div class="steps-right for-thousands">3000</div>
                            </div>
                            <div id="slider-range-thousands">
                                <span id="current-thousands">1000</span>
                            </div>
                        </div>

                        <div class="calculate-item">
                            <h6>Срок займа</h6>
                            <div class="calculate-steps">
                                <div class="">
                                    <span class="amount-value yellow-text" id="amount-months"></span>
                                    <span>месяцев</span>
                                </div>
                            </div>
                            <div class="calculate-steps">
                                <div class="steps-left">2</div>
                                <div class="steps-right">60</div>
                            </div>
                            <div id="slider-range-months"></div>
                        </div>

                        <div class="result-container form-group">
                            <h6>Ежемесячный платеж</h6>
                            <input id="revenue" type="text" class="form-control calculate-bottom-text-prices revenue"
                                   name="revenue" value="">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <h3 class="yellow-text">Контактные данные клиента</h3>
                        <form class="ajax_form" method="post" action="#/" onsubmit="">
                            <input type="hidden" name="_token" value=>
                            <input type="hidden" value="" name=>

                            <div class="form-group">
                                <label for="CalcName">Ваше имя</label>
                                <span class="error"></span>
                                <input id="CalcName" required type="text" class="form-control" name="name"
                                       placeholder="Как Вас зовут">
                            </div>
                            <div class="form-group">
                                <label for="CalcNumber">Телефон</label>
                                <span class="error"></span>
                                <input type="text" required class="form-control type-phone" id="CalcNumber" name="phone"
                                       placeholder="+7 (ХХХ) ХХХ - ХХ - ХХ">
                            </div>
                            <div class="form-group">
                                <label for="CalcNumber">Местонахождение</label>
                                <span class="error"></span>
                                <input type="text" required class="form-control " id="CalcNumber" name="city"
                                       placeholder="Где Вы живёте">
                            </div>
                            <div class="personal-data">Нажимая на кнопку, вы даёте своё согласие на обработку ваших <a
                                    target="_blank" href="#/storage/uploads/Lf/tw/Lftwg5FibcjG2gcSyPjlHarE.pdf">персональных
                                данных</a>
                            </div>
                            <button type="submit" class="btn btn-danger">Подать заявку</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="receipt-of-money-2">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="row">
                    <div class="col-md-12 col-sm-6">
                        <h3 class="h1 m-t-image"><span class="h1-span"><span class="h1-span">Получение денег </span></span> <span class="yellow-text">под
                            залог авто</span></h3>
                    </div>
                    <div class="col-md-12 col-sm-6">
                        <img class="m-t-image" src="images/p4298/audi__21.png" alt="займы"/>
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-sm-12">
                <ul class="switcher gorizontal-pieces" id="switcher-loan-1">
                    <li class="for_opening_view selected" data-modal-id="paymentsGrafModal" id="express"
                        data-show="one">
                        <div class="title-switch">Как получить займ</div>
                    </li>
                    <li class="for_opening_view" data-modal-id="paymentsInfo" id="detailed" data-show="two">
                        <div class="title-switch">Что нужно для оформления займа</div>
                    </li>
                    <li class="for_opening_view" data-modal-id="paymentsInfo" id="detailed" data-show="three">
                        <div class="title-switch">Оставьте заявку</div>
                    </li>
                </ul>

                <div class="switch-js">
                    <div class="opening_view" data-switch="one">
                        <div class="visible-on-wade visible-on-tablet">
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <div class="list-icon-grey-item">
                                        <div class="list-icon-grey-item-img arrow-right"
                                             style="background-image: url(images/p4298/icon_41.png)"></div>
                                        <div class="list-icon-grey-item-title text">Оставьте заявку и получите одобрение
                                            по телефону
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="list-icon-grey-item">
                                        <div class="list-icon-grey-item-img arrow-right"
                                             style="background-image: url(images/p4298/electric-car.png);background-size:50px;"></div>
                                        <div class="list-icon-grey-item-title text">Приезжаете в офис для оценки авто и
                                            заключения договора
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="list-icon-grey-item">
                                        <div class="list-icon-grey-item-img"
                                             style="background-image: url(images/p4298/icon_19.png);background-size:50px;"></div>
                                        <div class="list-icon-grey-item-title text">Получаете деньги и продолжаете
                                            пользоваться своим авто
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="visible-on-mobile">
                            <div class="owl-carousel owl-theme receipt-of-money-2">
                                <div class="col-md-4 col-sm-4">
                                    <div class="list-icon-grey-item">
                                        <div class="list-icon-grey-item-img arrow-right"
                                             style="background-image: url(images/p4298/icon_41.png)"></div>
                                        <div class="list-icon-grey-item-title text">Оставьте заявку и получите одобрение
                                            по телефону
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="list-icon-grey-item">
                                        <div class="list-icon-grey-item-img arrow-right"
                                             style="background-image: url(images/p4298/icon_26.png);background-size:50px;"></div>
                                        <div class="list-icon-grey-item-title text">Приезжаете в офис для оценки авто и
                                            заключения договора
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="list-icon-grey-item">
                                        <div class="list-icon-grey-item-img"
                                             style="background-image: url(images/p4298/icon_19.png);background-size:50px;"></div>
                                        <div class="list-icon-grey-item-title text">Получаете деньги и продолжаете
                                            пользоваться своим авто
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="opening_view" data-switch="two">
                        <ul class="list-number">
                            <li>Паспорт гражданина РФ</li>
                            <li>ПТС (Паспорт транспортного средства)</li>
                            <li>СТС (Свидетельство о регистрации транспортного средства)</li>
                        </ul>
                    </div>

                    <div class="opening_view" data-switch="three">
                        <div class="background-grey">
                            <form class="ajax_form" method="post" action="#/" onsubmit="">
                                <input type="hidden" name="_token" value=>
                                <input type="hidden" value="" name=>

                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="CalcName">Ваше имя</label>
                                            <span class="error"></span>
                                            <input id="CalcName" required type="text" class="form-control" name="name"
                                                   placeholder="Как Вас зовут">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="CalcNumber">Телефон</label>
                                            <span class="error"></span>
                                            <input type="text" required class="form-control type-phone" id="CalcNumber"
                                                   name="phone" placeholder="+7 (ХХХ) ХХХ - ХХ - ХХ">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-danger">Подать заявку</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<section id=interlayer-7>
    <div class="container">
        <div class="interlayer-loan">
            <div class="visible-on-wade visible-on-tablet">
                <div class="row z-index">
                    <div class="col-md-3 col-sm-6 interlayer-loan-item">
                        <div class=interlayer-loan-item-number>1.</div>
                        <div class=interlayer-loan-item-title>Займ под залог ПТС</div>
                        <div class=interlayer-loan-item-text>Для этого необходимо посетить один из офисов лично или воспользоваться онлайн-заявкой</div>
                    </div>
                    <div class="col-md-3 col-sm-6 interlayer-loan-item">
                        <div class=interlayer-loan-item-number>2.</div>
                        <div class=interlayer-loan-item-title>Займ под залог спецтехники</div>
                        <div class=interlayer-loan-item-text>Вам следует подготовить личные документы: паспорт, СТС, ПТС или ПСМ (паспорт самоходной машины)</div>
                    </div>
                    <div class="col-md-3 col-sm-6 interlayer-loan-item">
                        <div class=interlayer-loan-item-number>3.</div>
                        <div class=interlayer-loan-item-title>Займ под залог мототехники</div>
                        <div class=interlayer-loan-item-text>Компания принимает в качестве залога мототехнику разных марок и моделей</div>
                    </div>
                    <div class="col-md-3 col-sm-6 interlayer-loan-item">
                        <div class=interlayer-loan-item-number>4.</div>
                        <div class=interlayer-loan-item-title>Автоломбард</div>
                        <div class=interlayer-loan-item-text>Заключая сделку с нами, вы эксплуатируете транспорт в прежнем режиме</div>
                    </div>
                </div>
            </div>

            <div class="visible-on-mobile z-index">
                <div class="owl-carousel owl-theme interlayer-7">
                    <div class="interlayer-loan-item">
                        <div class=interlayer-loan-item-number>1.</div>
                        <div class=interlayer-loan-item-title>Займ под залог ПТС</div>
                        <div class=interlayer-loan-item-text>Для этого необходимо посетить один из офисов лично или воспользоваться онлайн-заявкой</div>
                    </div>
                    <div class="interlayer-loan-item">
                        <div class=interlayer-loan-item-number>2.</div>
                        <div class=interlayer-loan-item-title>Займ под залог спецтехники</div>
                        <div class=interlayer-loan-item-text>Вам следует подготовить личные документы: паспорт, СТС, ПТС или ПСМ (паспорт самоходной машины)</div>
                    </div>
                    <div class="interlayer-loan-item">
                        <div class=interlayer-loan-item-number>3.</div>
                        <div class=interlayer-loan-item-title>Займ под залог мототехники</div>
                        <div class=interlayer-loan-item-text>Компания принимает в качестве залога мототехнику разных марок и моделей</div>
                    </div>
                    <div class="interlayer-loan-item">
                        <div class=interlayer-loan-item-number>4.</div>
                        <div class=interlayer-loan-item-title>Автоломбард</div>
                        <div class=interlayer-loan-item-text>Заключая сделку с нами, вы эксплуатируете транспорт в прежнем режиме</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id=advantages-2>
    <div class="container">
        <div class="row">
            <div class="col-md-11">
                <h3 class="h1"><span class="h1-span">Лучшее обслуживание </span>для каждого клиента</h3>

                <p>Деньги под залог авто помогут решить временные финансовые трудности, клиенты продолжают пользоваться своим транспортным средством</p>
            </div>
            <div class="col-md-12">
                <div class="visible-on-wade visible-on-tablet">
                    <div class="row">
                        <div class="col-md-2 col-sm-4">
                            <div class="list-icon-grey-item">
                                <div class="list-icon-grey-item-img" style="background-image: url(images/icon/p4298/withoutPeniRed.png); background-size: 50px 50px"></div>
                                <div class="list-icon-grey-item-title">Выгода</div>
                                <div class="list-icon-grey-item-text">Наличные под залог авто. Выдача до 95%</div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4">
                            <div class="list-icon-grey-item">
                                <div class="list-icon-grey-item-img" style="background-image: url(images/icon/p4298/icon_24.png); background-size: 50px 50px"></div>
                                <div class="list-icon-grey-item-title">Скорость</div>
                                <div class="list-icon-grey-item-text">Работаем 24/7. Выдача за пол часа</div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4">
                            <div class="list-icon-grey-item">
                                <div class="list-icon-grey-item-img" style="background-image: url(images/icon/p4298/calendarRed.png); background-size: 50px 50px"></div>
                                <div class="list-icon-grey-item-title">Сроки</div>
                                <div class="list-icon-grey-item-text">Займы на любые сроки</div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4">
                            <div class="list-icon-grey-item">
                                <div class="list-icon-grey-item-img" style="background-image: url(images/icon/p4298/icon_26.png); background-size: 50px 50px"></div>
                                <div class="list-icon-grey-item-title">Безопасность</div>
                                <div class="list-icon-grey-item-text">Охраняемая автостоянка</div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4">
                            <div class="list-icon-grey-item">
                                <div class="list-icon-grey-item-img" style="background-image: url(images/icon/p4298/icon_27.png); background-size: 50px 50px"></div>
                                <div class="list-icon-grey-item-title">Удобство</div>
                                <div class="list-icon-grey-item-text">Принимаем любую технику</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="visible-on-mobile">
                    <div class="owl-carousel owl-theme advantages-2">
                        <div class="list-icon-grey-item">
                            <div class="list-icon-grey-item-img" style="background-image: url(images/icon/p4298/icon_23.png)"></div>
                            <div class="list-icon-grey-item-title">Выгода</div>
                            <div class="list-icon-grey-item-text">Наличные под залог авто. Выдача до 95%</div>
                        </div>
                        <div class="list-icon-grey-item">
                            <div class="list-icon-grey-item-img" style="background-image: url(images/icon/p4298/icon_24.png)"></div>
                            <div class="list-icon-grey-item-title">Скорость</div>
                            <div class="list-icon-grey-item-text">Работаем 24/7. Выдача за пол часа</div>
                        </div>
                        <div class="list-icon-grey-item">
                            <div class="list-icon-grey-item-img" style="background-image: url(images/icon/p4298/icon_25.png)"></div>
                            <div class="list-icon-grey-item-title">Сроки</div>
                            <div class="list-icon-grey-item-text">Займы на любые сроки</div>
                        </div>
                        <div class="list-icon-grey-item">
                            <div class="list-icon-grey-item-img" style="background-image: url(images/icon/p4298/icon_26.png)"></div>
                            <div class="list-icon-grey-item-title">Безопасность</div>
                            <div class="list-icon-grey-item-text">Охраняемая автостоянка</div>
                        </div>
                        <div class="list-icon-grey-item">
                            <div class="list-icon-grey-item-img" style="background-image: url(images/icon/p4298/icon_27.png)"></div>
                            <div class="list-icon-grey-item-title">Удобство</div>
                            <div class="list-icon-grey-item-text">Принимаем любую технику</div>
                        </div>
                    </div>
                </div>

                <div class="link-button">
                    <a href="#" data-toggle="modal" data-target="#CallPhone-ver-4">Подать заявку   <span class="arrow"></span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="requirements-3">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4">
                <div class="image-max-height"
                     style="background-image: url('images/carr2.jpg'); background-size: cover; background-repeat: no-repeat"></div>
            </div>

            <div class="col-md-9 col-sm-8">
                <h3 class="h1"><span class="h1-span">Требования для получения кредита  </span>под залог ПТС <span
                        class="titleFirst3"></span></h3>

                <ul class="switcher-3 gorizontal-pieces" id="switcher-loan-3">
                    <li class="for_opening_view selected" data-modal-id="paymentsGrafModal" id="addClick2"
                        data-show-3="one">
                        <div class="title-switch">К автомобилю</div>
                    </li>
                    <li class="for_opening_view" data-modal-id="paymentsInfo" id="detailed" data-show-3="two">
                        <div class="title-switch">К заемщику</div>
                    </li>
                    <li class="for_opening_view" data-modal-id="paymentsInfo" id="detailed" data-show-3="three">
                        <div class="title-switch">К документам</div>
                    </li>
                </ul>
                <div class="switch-js-3">
                    <div class="opening_view" data-switch-3="one">
                        <ul class="list-ul">
                            <li>Авто в исправном техническом состоянии</li>
                            <li>Состоит на учете в ГИБДД</li>
                            <li>Не находится в залоге</li>
                        </ul>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#CallPhone-ver-4">
                            Оформить займ
                        </button>
                    </div>

                    <div class="opening_view" data-switch-3="two">
                        <ul class="list-ul">
                            <li>Гражданство РФ и постоянная регистрация в регионе присутствия компании</li>
                            <li>От 18 до 65 полных лет на момент заключения договора</li>
                            <li>Кредитная история не требуется</li>
                            <li>Можно без трудоустройства</li>
                        </ul>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#CallPhone-ver-4"
                                id="ClickListeter1">Оформить займ
                        </button>
                    </div>

                    <div class="opening_view" data-switch-3="three">
                        <ul class="list-ul">
                            <li>Паспорт гражданина РФ</li>
                            <li>Паспорт технического средства (ПТС)</li>
                            <li>Свидетельство о регистрации транспортного средства (СРТС)</li>
                        </ul>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#CallPhone-ver-4">
                            Оформить займ
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<section id="documents-1">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <h3 class="h1">Нам доверяют тысячи клиентов</h3>

                <div class="visible-on-wade visible-on-tablet">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="list-icon-grey-item">
                                <div class="list-icon-grey-item-img"
                                     style="background-image: url(images/icon/icon_20.png); background-size: 60px"></div>
                                <div class="list-icon-grey-item-title">Статус</div>
                                <div class="list-icon-grey-item-text">Участник лиги автоломбардов</div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="list-icon-grey-item">
                                <div class="list-icon-grey-item-img"
                                     style="background-image: url(images/icon/icon_21.png); background-size: 60px"></div>
                                <div class="list-icon-grey-item-title">Опыт</div>
                                <div class="list-icon-grey-item-text">10 лет успешной работы</div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="list-icon-grey-item">
                                <div class="list-icon-grey-item-img"
                                     style="opacity: 0.77; background-image: url(images/icon/icon_22.png); background-size: 60px"></div>
                                <div class="list-icon-grey-item-title">Закон</div>
                                <div class="list-icon-grey-item-text">Соответствуем законодательству РФ</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="visible-on-mobile">
                    <div class="owl-carousel owl-theme documents-1">
                        <div class="list-icon-grey-item">
                            <div class="list-icon-grey-item-img"
                                 style="background-image: url(images/icon/icon_20.png); background-size: 60px"></div>
                            <div class="list-icon-grey-item-title">Статус</div>
                            <div class="list-icon-grey-item-text">Участник лиги автоломбардов</div>
                        </div>
                        <div class="list-icon-grey-item">
                            <div class="list-icon-grey-item-img"
                                 style="background-image: url(images/icon/icon_21.png); background-size: 60px"></div>
                            <div class="list-icon-grey-item-title">Опыт</div>
                            <div class="list-icon-grey-item-text">10 лет успешной работы</div>
                        </div>
                        <div class="list-icon-grey-item">
                            <div class="list-icon-grey-item-img"
                                 style="background-image: url(images/icon/icon_22.png); background-size: 60px"></div>
                            <div class="list-icon-grey-item-title">Закон</div>
                            <div class="list-icon-grey-item-text">Соответствуем законодательству РФ</div>
                        </div>
                    </div>
                </div>

                <div class="link-button m-b-30">
                    <a href="#" data-toggle="modal" data-target="#CallPhone-ver-4">Подать заявку <span
                            class="arrow"></span></a>
                </div>
            </div>

            <div class="col-md-6 col-sm-12">
                <div class="bg-grey">
                    <h3 class="h1">Работаем в рамках закона</h3>
                    <ol class="list-ul">
                        <li>Широкая сеть более 100 регионов присутствия</li>
                        <li>Осуществляем деятельность в рамках ФЗ 353</li>
                        <li>Процентная ставка регулируется ЦБ РФ</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="reviews">
        <div class="container">
            <div class="reviews-2-bg">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <h3 class="h1" style="text-align: center">Что говорят о нас</h3>

                        <div class="owl-carousel owl-theme reviews-2 whiteColor">
                            <article class="review-bg-blue">
                                <div class="review-text">Остался в восторге от услуги этой конторы. Не нужно тратить время на поездку в офис, оценка авто происходит по фото, нет никаких бюрократических проволочек. Лично я получил средства в день обращения прямо на карту. Рекомендую займ под залог ПТС грузового автомобиля тем, кто хочет получить крупную сумму в сжатые сроки.

                                </div>
                                <div class="review-person">
                                    <div class="review-name">Андрей</div>
                                </div>
                            </article>
                            <article class="review-bg-blue">
                                <div class="review-text">Заем под залог грузового ПТС автомобиля от этой компании предполагает выгодные условия оценки и оформления. Мне понравилось, что авто можно пользоваться и дальше, так как он – это мой основной источник дохода. Планирую выплачивать займ частями – удобно и не бьет по карману. В общем, компанию могут порекомендовать.

                                </div>
                                <div class="review-person">
                                    <div class="review-name">Виталий</div>
                                </div>
                            </article>
                            <article class="review-bg-blue">
                                <div class="review-text">Я попал на сайт компании случайно – искал банк или МФО где можно взять кредит, и перешел по рекламе. Предложение денег под залог грузовых авто сразу заинтересовало выгодными условиями. Со мной связался менеджер, дал исчерпывающие ответы на все вопросы. Заполнил анкету, подписал договор и получил деньги практически моментально.

                                </div>
                                <div class="review-person">
                                    <div class="review-name">Кирилл</div>
                                </div>
                            </article>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section id="questions">
    <div class="container">
        <div class="row">
            <div class="col-md-11 col-sm-12">
                <h3 class="h1"><span class="h1-span">Ответы на ваши </span><span
                        class="yellow-text">вопросы</span></h3>

                <div class="owl-carousel owl-theme questions-block-2">
                    <div class="question-answer">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="question">Могу ли я возвратить долг за грузовой автомобиль раньше условленного срока?
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="answer">
                                   Да, мы предоставляем клиентам такую возможность. Причем деньги под залог грузового автомобиля можно вернуть раньше без каких-либо штрафов за досрочное погашение и без пени. Таким образом, Вы легко сможете освободиться от долговых обязательств раньше.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="question-answer">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="question">Переоформляется ли грузовое ТС на ваш автоломбард?
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="answer">
                                    К сожалению, мы не оказываем таких услуг. Компания может только выдать кредит под залог ПТС грузовика, и сделать это за максимально быстрые сроки (в течение 20-40 минут после отправки заявки), но переоформить на нас само транспортное средство нельзя.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="question-answer">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="question">Важен ли возраст грузового автомобиля в процессе кредитования? 
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="answer">
                                    Наш автоломбард оформляет займы под залог ПТС грузовика в Ставрополе на следующих условиях: срок эксплуатации отечественных грузовиков не должен быть больше 10 лет, а импортных не  больше 20 лет. Во всех остальных случаях мы будем вынуждены отказать.
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</section>
<section id="section-map">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h3 class="h1">Адреса и контакты</h3>

                <div class="visible-on-wade visible-on-tablet" action="#">
                    <div class="map_filter adresses-left" action="#">
                        <div id="addresses"
                             style="background-color: #3f0d12; background-image: linear-gradient(315deg, #3f0d12 0%, #72A2AC 74%); "
                             class="mapOptions__addresses white">
                            <div class="map-text">
                                <a style="color: ghostwhite" href="tel:<?=$tel ?>"><?=$phone ?></a><br>
                                <div class="city-wrapper-main">
                                </div>
                            </div>

                            <div id="rootMap">
                            </div>
                        </div>
                    </div>
                    <script type="text/babel">

                        const dateMap = [
                            {
                                "undefined": "Краснодар ул. Северная, 489",
                                "Aдресa": "ул. Северная, 489",
                                "Город": "Краснодар",
                                "Longitude": "45.03588547954619",
                                "Latitude": "39.005386325133216",
                                "Column5": "Krasnodar",
                                "Index": "350038"
                            },
                            {
                                "undefined": "Новороссийск  пр. Дзержинского, 185",
                                "Aдресa": "пр. Дзержинского, 185",
                                "Город": "Новороссийск",
                                "Longitude": "44.69397908934171",
                                "Latitude": "37.77989776931275",
                                "Column5": "Novorossiysk",
                                "Index": "353923"
                            },
                            {
                                "undefined": "Ставрополь ул. Доваторцев, 47Б",
                                "Aдресa": "ул. Доваторцев, 47Б",
                                "Город": "Ставрополь",
                                "Longitude": "45.01182219579695",
                                "Latitude": "41.92916021534363",
                                "Column5": "Stavropol",
                                "Index": "355042"
                            }

                        ]
                        ReactDOM.render(
                            <div>
                                {dateMap.map((obj, index) => {
                                    return (
                                        <a key={index}
                                           id={obj['Город']}
                                           itemProp="address" itemScope
                                           itemType="http://schema.org/PostalAddress"
                                           href="#"
                                           data-coordinate={obj['Latitude'] + ',' + obj['Longitude']}
                                           data-address={obj['Index'] + ' ' + obj['Город'] + ', ' + obj['Aдресa']}
                                           data-name={obj['Aдресa']}
                                           data-content="режим работы: 9:00-19:00"
                                           title=""
                                           className="mapOptions__addresses_a">
                                        <span itemProp="postalCode"
                                              className="addresses-text-bold">{obj['Index'] ? obj['Index'] : '000000'}, г. {obj['Город']}</span><br/>
                                            <span itemProp="streetAddress"
                                                  className="addresses-text-bold"> {obj['Aдресa']}</span><br/>
                                            режим работы: 9:00-19:00
                                        </a>
                                    )
                                })}
                            </div>,
                            document.getElementById('rootMap')

                        )
                    </script>
                    
                    <script>
                        setTimeout(() => {
                            document.querySelector('#Ставрополь').click()
                        }, 2000)
                    </script>

                    <div id="map" class="ofices map-right visible-on-wade visible-on-tablet"></div>
                </div>

                <div class="visible-on-mobile">
                    <div class="region_address">
                        <div class="row all_address">
                            <div class="col-md-12">
                                <div class="city-wrapper city-wrapper-main">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <input id="init-map-subdomain" type="hidden" value="37.484137,55.642164">
</section>


    <footer id="footer-3">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="col-md-12">
                        <div class="footer-logo inline "><a href="#"><img style="width: 100px" src="images/logoKredit.png" alt="займы" /></a>
                        </div>

                        <div class="footer-phone ">
                            <button type="button" class="btn btn-line-red" data-toggle="modal" data-target="#CallPhone-ver-2">Обратный звонок
                            </button>

                            <button type="button" class="btn btn-danger inline-btn" data-toggle="modal" data-target="#CallPhone-ver-4">Оформить займ
                            </button>
                        </div>
                        <div class="footer-phone m-b-30"><a href="tel:<?= $tel ?>"><?= $phone ?></a><br>


                            <div class="soc-seti">
                                <div class="soc-footer m-b-30 m-t-30">
                                    <a href="#" target="_blank" rel="nofollow" class="soc-vk"></a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-md-7">
                    <div class="row">

                        <div class="col-md-4 col-sm-6">
                            <ul class="footer-li bold">
                                <li><a href="gryzovye.php">Грузовые авто</a></li>
                                <li><a href="spectechnika.php">Спецтехника</a></li>
                                <li><a href="avtolombard.php">Автоломбард</a></li>

                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <ul class="footer-li bold">
                                <li><a href="mototechnika.php">Мототехника</a></li>
                                <li><a href="credit.php">Кредит</a></li>
                                
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-md-12">
                    <div class="footer-bottom">
                        <p>«Автозайм-Юг» не является финансовым учреждением, банком или МФО. Сайт
                            предоставляет
                            информационную помощь для получения кредитов и займов в аккредитованных организациях,
                            имеющих
                            разрешение ЦБ на данную деятельность. При оформлении заявки, формируется единая заявка
                            отправляемая компаниям партнерам, которые занимаются кредитованием населения.

                            *Все компании партнеры, зарегистрированы в реестре Центрального банка РФ. Список
                            компаний,
                            опубликован на главной странице сайта.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <div class="modal fade" id="CallPhone-ver-4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-deneg modal-dialog-centered" role="document">
            <div class="modal-content">
                <section id="online-application-1">
                    <style>
                        .marginForButton {
                            margin-right: -38px;
                            margin-top: -35px;
                        }
                    </style>
                    <button type="button" class="close marginForButton" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="background-grey">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-12">
                                            <h3 class="h1">Онлайн заявка на получение денег</h3>
                                            <ul class="switcher-2" id="switcher-loan-2">
                                                <li class="for_opening_view selected" data-modal-id="paymentsGrafModal" id="express" data-show-2="one">
                                                    <div class="title-switch">Экспресс анкета</div>
                                                    <div class="time-switch">Время заполнения <span>30 сек.</span></div>
                                                    <div class="answer-switch">Предварительное решение</div>
                                                </li>
                                                <li class="for_opening_view" data-modal-id="paymentsInfo" id="detailed" data-show-2="two">
                                                    <div class="title-switch">Подробная анкета</div>
                                                    <div class="time-switch">Время заполнения <span>2 мин.</span></div>
                                                    <div class="answer-switch">Точное решение</div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-9 col-sm-12">
                                            <div class="switch-js-2">
                                                <div class="opening_view" data-switch-2="one">
                                                    <h3>Экспресс анкета</h3>
                                                    <form action="thanks.php" method="POST">
                                                        <input type="hidden" name="_token" value=>
                                                        <input type="hidden" value="" name=>

                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-4">
                                                                <div class="form-group">
                                                                    <label for="CalcName">Ваше имя</label>
                                                                    <span class="error"></span>
                                                                    <input id="CalcName" required type="text" class="form-control" name="name" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-sm-4">
                                                                <div class="form-group">
                                                                    <label for="CalcSurname">Ваша фамилия</label>
                                                                    <input id="CalcSurname" type="text" class="form-control" name="LastName" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-sm-4">
                                                                <div class="form-group">
                                                                    <label for="CalcNumber">Контактный телефон</label>
                                                                    <span class="error"></span>
                                                                    <input type="text" required class="form-control type-phone" id="CalcNumber" name="phone" placeholder="+7 (ХХХ) ХХХ - ХХ - ХХ">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-sm-4">
                                                                <div class="form-group">
                                                                    <label for="CalcSum">Сумма займа</label>
                                                                    <input id="CalcSum" type="text" class="form-control monthly-payment" name="sum" placeholder="₽">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-sm-8">
                                                                <div class="form-group text-loan-top">
                                                                    Ваша ставка: <span class="text-bold text-blue">3% в месяц</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-sm-4">
                                                                <div class="form-group">
                                                                    <label for="CalcMarka">Марка автомобиля</label>
                                                                    <input id="CalcMarka" type="text" class="form-control" name="marka" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-sm-4">
                                                                <div class="form-group">
                                                                    <label for="CalcModel">Модель автомобиля</label>
                                                                    <input id="CalcModel" type="text" class="form-control" name="model" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-sm-4">
                                                                <div class="form-group">
                                                                    <label for="CalcYear">Год выпуска</label>
                                                                    <input type="text" class="form-control" id="CalcYear" name="CalcYear" placeholder="">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#CallPhone-ver-4">
                                                                    Оформить займ
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="opening_view" data-switch-2="two">
                                                    <h3>Подробная анкета</h3>
                                                    <form action="thanks.php" method="POST">

                                                        <input type="hidden" name="_token" value=>
                                                        <input type="hidden" value="" name=>

                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-4">
                                                                <div class="form-group">
                                                                    <label for="CalcName">Ваше имя</label>
                                                                    <span class="error"></span>
                                                                    <input id="CalcName" required type="text" class="form-control" name="name" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-sm-4">
                                                                <div class="form-group">
                                                                    <label for="CalcSurname">Ваша фамилия</label>
                                                                    <input id="CalcSurname" type="text" class="form-control" name="LastName" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-sm-4">
                                                                <div class="form-group">
                                                                    <label for="CalcNumber">Контактный телефон</label>
                                                                    <span class="error"></span>
                                                                    <input type="text" required class="form-control type-phone" id="CalcNumber" name="phone" placeholder="+7 (ХХХ) ХХХ - ХХ - ХХ">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-sm-4">
                                                                <div class="form-group">
                                                                    <label for="CalcSum">Сумма займа</label>
                                                                    <input id="CalcSum" type="text" class="form-control monthly-payment" name="sum" placeholder="₽">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-sm-8">
                                                                <div class="form-group text-loan-top">
                                                                    Ваша ставка: <span class="text-bold text-blue">3% в месяц</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-sm-4">
                                                                <div class="form-group">
                                                                    <label for="CalcMarka">Марка автомобиля</label>
                                                                    <input id="CalcMarka" type="text" class="form-control" name="marka" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-sm-4">
                                                                <div class="form-group">
                                                                    <label for="CalcModel">Модель автомобиля</label>
                                                                    <input id="CalcModel" type="text" class="form-control" name="model" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-sm-4">
                                                                <div class="form-group">
                                                                    <label for="CalcYear">Год выпуска</label>
                                                                    <input type="text" class="form-control" id="CalcYear" name="CalcYear" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-sm-4">
                                                                <div class="form-group">
                                                                    <label for="CalcMileage">Пробег автомобиля</label>
                                                                    <input type="text" class="form-control" id="CalcMileage" name="CalcMileage" placeholder="">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#CallPhone-ver-4">
                                                                    Оформить займ
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>


    <div class="modal fade" id="onlajn-zayavka-short" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2>Подать заявку</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="thanks.php" method="POST">

                        <input type="hidden" name="_token" value="HYmmUBG7ERWgh7DZ8PyKYpmENIyoQAY6qZR29Xh5">
                        <input type="hidden" value="Подать заявку" name="_token">
                        <div class="row">
                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <label for="AppName11">Ваше имя</label>
                                <span class="error"></span>
                                <input id="AppName11" required type="text" class="form-control" name="name" placeholder="Как Вас зовут">
                            </div>
                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <label for="request-phone4">Телефон</label>
                                <span class="error"></span>
                                <input type="text" required class="form-control type-phone" id="request-phone4" name="phone" placeholder="+7 (ХХХ) ХХХ - ХХ - ХХ">
                            </div>
                            <div class="col-md-12">
                                <div class="personal-data">Нажимая на кнопку, вы даёте своё согласие на обработку ваших<a target="_blank" href="privacy-policy.pdf">персональных данных</a>
                                </div>
                                <button type="submit" class="btn btn-danger">Подать заявку</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="onlajn-zayavka-callback-success" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2>Спасибо за заявку!</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <p> Мы свяжемся с Вами в течение 10 минут по указанному номеру телефона. Режим работы специалистов
                        колцентра с 9:00 до 19:00 по московскому времени.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="onlajn-zayavka-callback" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2>Подать заявку</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span></button>
                </div>
                <div class="modal-body">

                    <form action="thanks.php" method="POST">

                        <div class="row">
                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <label for="AppName71">Ваше имя</label>
                                <span class="error"></span><input id="AppName71" type="text" class="form-control" required name="Имя" placeholder="Как Вас зовут">
                            </div>
                            <div class="form-group col-md-6 col-sm-12 col-xs-12"><label for="AppPhone31">Телефон</label><span class="error"></span><input type="text" id="AppPhone31" class="form-control type-phone" required name="Телефон" placeholder="+7 (ХХХ) ХХХ - ХХ - ХХ">
                            </div>
                            <div class="col-md-12">
                                <div class="personal-data">Нажимая на кнопку, вы даёте своё согласие на обработку ваших <a target="_blank" href="privacy-policy.pdf">персональных данных</a></div>
                                <button type="submit" class="btn btn-danger">Подать заявку</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="onlajn-zayavka-partners" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2>Подать заявку</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
                </div>
                <div class="modal-body">
                    <form class="ajax_form" method="post" action="#/onlajn-partners-short" onsubmit="ym(, 'reachGoal', 'CallBackZAYAVKA'); gtag('event', 'onlajn-zayavka', {'event_category': 'form', 'event_action': 'callback'}); return true;">
                        <input type="hidden" name="_token" value="HYmmUBG7ERWgh7DZ8PyKYpmENIyoQAY6qZR29Xh5"><input type="hidden" value="Подать заявку"><input type="hidden" class="form-control" name="type_service" value="partners">
                        <div class="row">
                            <div class="form-group col-md-6 col-sm-12 col-xs-12"><label for="AppName7">Ваше имя</label><span class="error"></span><input id="AppName7" type="text" class="form-control" required name="name" placeholder="Как Вас зовут"></div>
                            <div class="form-group col-md-6 col-sm-12 col-xs-12"><label for="AppPhone3">Телефон</label><span class="error"></span><input type="text" id="AppPhone3" class="form-control type-phone" required name="phone" placeholder="+7 (ХХХ) ХХХ - ХХ - ХХ">
                            </div>
                            <div class="col-md-12">
                                <div class="personal-data">Нажимая на кнопку, вы даёте своё согласие на обработку ваших <a target="_blank" href="privacy-policy.pdf">персональных данных</a></div>
                                <button type="submit" class="btn btn-danger">Подать заявку</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="onlajn-zayavka-srochnyj-vykup" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2>Подать заявку</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
                </div>
                <div class="modal-body">
                    <form class="ajax_form" method="post" action="#/onlajn-zayavka-short"><input type="hidden" name="_token" value="HYmmUBG7ERWgh7DZ8PyKYpmENIyoQAY6qZR29Xh5"><input type="hidden" name="_token" value="Подать заявку"><input type="hidden" class="form-control" name="type_service" value="srochniy_vikup">
                        <div class="row">
                            <div class="form-group col-md-6 col-sm-12 col-xs-12"><label for="AppName8">Ваше имя</label><span class="error"></span><input id="AppName8" type="text" class="form-control" required name="name" placeholder="Как Вас зовут"></div>
                            <div class="form-group col-md-6 col-sm-12 col-xs-12"><label for="AppPhone4">Телефон</label><span class="error"></span><input type="text" id="AppPhone4" class="form-control type-phone" required name="phone" placeholder="+7 (ХХХ) ХХХ - ХХ - ХХ">
                            </div>
                            <div class="col-md-12">
                                <div class="personal-data">Нажимая на кнопку, вы даёте своё согласие на обработку ваших <a target="_blank" href="privacy-policy.pdf">персональных данных</a></div>
                                <button type="submit" class="btn btn-danger">Подать заявку</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="off-canvas-sidebar grey">
        <div class="off-canvas-sidebar-wrapper visible-on-tablet visible-on-wade">
            <div style="background-position-x: right;" class="off-canvas-car-dark-grey">

            </div>

            <div class="off-canvas-header"><a class="off-canvas-close" href="#"><img src="images/close-white.svg" alt="займы"></a>
            </div>

            <div class="off-canvas-grey">
                <div class="off-canvas-content modal-dialog-centered">
                    <div class="row">

                        <div class="col-md-6">
                            <h2 style="position:relative;margin-left: 52px;">
                            </h2>
                            <ul class="off-canvas-li">
                                <li><a href="gryzovye.php">Грузовые авто</a></li>
                                <li><a href="spectechnika.php">Спецтехника</a></li>
                                <li><a href="mototechnika.php">Мототехника</a></li>
                                <li><a href="credit.php">Кредит</a></li>
                                
                                <li><a href="avtolombard.php">Автоломбард</a></li>
                            </ul>
                            <button type="button" class="btn btn-danger inline-btn" data-toggle="modal" data-target="#CallPhone-ver-4" id="deleteBodyClass">Оформить займ
                            </button>
                            <br>
                            <br>
                            <br>

                            <script>
                                document.getElementById('deleteBodyClass').onclick = function() {
                                    document.querySelector('body').classList.remove('off-canvas-sidebar-open');
                                }
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="off-canvas-sidebar-wrapper visible-on-mobile">
            <div class="off-canvas-header"><a class="off-canvas-close" href="#"><img src="images/close-white.svg" alt="займы"></a>
            </div>

            <div class="off-canvas-car-dark-grey">
                <div class="city-wrapper city-wrapper-main m-b-30">
                </div>
                <div class="off-canvas-phone"><a href="tel:<?= $tel ?>"><?= $phone ?></a><br></div>
            </div>

            <div class="off-canvas-grey">
                <div class="off-canvas-content modal-dialog-centered">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="off-canvas-li">
                                <li><a href="gryzovye.php">Грузовые авто</a></li>
                                <li><a href="spectechnika.php">Спецтехника</a></li>
                                <li><a href="mototechnika.php">Мототехника</a></li>
                                <li><a href="credit.php">Кредит</a></li>
                               
                                <li><a href="avtolombard.php">Автоломбард</a></li>
                            </ul>
                            <button type="button" class="btn btn-danger m-t-30" data-toggle="modal" data-target="#CallPhone-ver-4" id="closeMenu">Оформить займ
                            </button>
                            <script>
                                document.getElementById('closeMenu').addEventListener('click', () => {
                                    document.querySelector("body").classList.remove('off-canvas-sidebar-open')
                                })
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="mapAddress" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2>Выберите регион</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
                </div>
                <div class="modal-body">
                    <div id="regions" class="row">
                        <ul>
                            <li id="1" title="Алтайский край">Алтайский край</li>
                            <li id="2" title="Астраханская область">Астраханская область</li>
                            <li id="3" title="Белгородская область">Белгородская область</li>
                            <li id="4" title="Брянская область">Брянская область</li>
                            <li id="5" title="Волгоградская область">Волгоградская область</li>
                            <li id="6" title="Вологодская область">Вологодская область</li>
                            <li id="7" title="Воронежская область">Воронежская область</li>
                            <li id="8" title="Кемеровская область">Кемеровская область</li>
                            <li id="9" title="Краснодарский край">Краснодарский край</li>
                            <li id="10" title="Курская область">Курская область</li>
                            <li id="11" title="Ленинградская область">Ленинградская область</li>
                            <li id="12" title="Липецкая область">Липецкая область</li>
                            <li id="13" title="Мурманская область">Мурманская область</li>
                            <li id="14" title="Новосибирская область">Новосибирская область</li>
                            <li id="15" title="Омская область">Омская область</li>
                            <li id="16" title="Орловская область">Орловская область</li>
                            <li id="17" title="Пермский край">Пермский край</li>
                            <li id="18" title="Республика Крым">Республика Крым</li>
                            <li id="19" title="Республика Татарстан">Республика Татарстан</li>
                            <li id="20" title="Ростовская область">Ростовская область</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="CallPhone-ver-1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2>Оставьте номер и мы Вам перезвоним!</h2>
                    <p>Оставьте заявку и наши менеджеры свяжутся с Вами <span class="text-blue">в течение 5 минут</span></p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>

                <div class="modal-body">
                    <form action="thanks.php" method="POST">

                        <div class="row">
                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <label for="AppName9">Ваше имя</label>
                                <span class="error"></span>
                                <input id="AppName9" type="text" class="form-control" name="AppName" placeholder="Как Вас зовут">
                            </div>
                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <label for="AppPhone5">Телефон</label>
                                <span class="error"></span>
                                <input type="text" id="AppPhone5" class="form-control type-phone" name="AppPhone" placeholder="+7 (ХХХ) ХХХ - ХХ - ХХ">
                            </div>
                            <div class="col-md-12">
                                <div class="personal-data">
                                    Нажимая на кнопку, вы даёте своё согласие на обработку ваших <a target="_blank" href="privacy-policy.pdf">персональных
                                        данных</a>
                                </div>
                                <button type="submit" class="btn btn-danger">Отправить заявку</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="CallPhone-ver-2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2>Получите решение по займу</h2>
                    <p>Для получения результата оставьте контактные данные</p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>

                <div class="modal-body">
                    <form action="thanks.php" method="POST">

                        <div class="row">
                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <label for="AppName9">Ваше имя</label>
                                <span class="error"></span>
                                <input id="AppName9" type="text" class="form-control" name="Name" placeholder="Как Вас зовут">
                            </div>
                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <label for="AppPhone5">Телефон</label>
                                <span class="error"></span>
                                <input type="text" id="AppPhone5" class="form-control type-phone" name="Phone" placeholder="+7 (ХХХ) ХХХ - ХХ - ХХ">
                            </div>
                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <label for="AppName9">Марка и модель авто</label>
                                <span class="error"></span>
                                <input id="AppName9" type="text" class="form-control" name="Model Car" placeholder="Введите">
                            </div>
                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <label for="AppPhone5">Год выпуска</label>
                                <span class="error"></span>
                                <input id="AppPhone5" class="form-control " name="Год выпуска" placeholder="ХХХХ" type="text" maxlength="4" onkeypress="return isNumberKey(event)">
                                <script>
                                    function isNumberKey(evt) {
                                        var charCode = (evt.which) ? evt.which : event.keyCode
                                        if (charCode > 31 && (charCode < 48 || charCode > 57)) return false;
                                        return true;
                                    };
                                </script>
                            </div>
                            <div class="col-md-12">
                                <div class="personal-data">
                                    Нажимая на кнопку, вы даёте своё согласие на обработку ваших <a target="_blank" href="privacy-policy.pdf">персональных
                                        данных</a>
                                </div>
                                <button type="submit" class="btn btn-danger">Отправить заявку</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="CallPhone-ver-3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2>Оставьте номер и мы Вам перезвоним!</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>

                <div class="modal-body">
                    <form action="thanks.php" method="POST">

                        <div class="row">
                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <label for="AppPhone5">Телефон</label>
                                <span class="error"></span>
                                <input type="text" id="AppPhone5" class="form-control type-phone" name="AppPhone" placeholder="+7 (ХХХ) ХХХ - ХХ - ХХ">
                            </div>
                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <button type="submit" class="btn btn-danger m-t-30">Позвоните мне</button>
                            </div>
                            <div class="col-md-12">
                                <div class="personal-data">
                                    Нажимая на кнопку, вы даёте своё согласие на обработку ваших <a target="_blank" href="privacy-policy.pdf">персональных
                                        данных</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="specifications" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-deneg  modal-dialog-centered" role="document">
            <div class="modal-content">
                <section>
                    <button type="button" class="close marginForButton" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="application-block">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">

                                            <h2><span class="h1-span">Для расчета укажите характеристики </span>транспортного
                                                средства
                                            </h2>
                                            <h6><span class="text-blue-icon"></span><span class="text-blue">И мы одобрим Вашу заявку </span>с вероятностью 100%
                                            </h6>
                                            <form class="application-form row" action="thanks.php" method="POST">

                                                <div class="form-group col-md-3 col-sm-6 col-xs-12">
                                                    <label for="request-car_brand">Марка</label>
                                                    <input type="text" class="form-control" id="request-car_brand" name="Марка" required placeholder="">
                                                </div>
                                                <div class="form-group col-md-3 col-sm-6 col-xs-12">
                                                    <label for="request-car_model">Модель</label>
                                                    <input type="text" class="form-control" id="request-car_model" name="Модель" required placeholder="">
                                                </div>
                                                <div class="form-group col-md-3 col-sm-6 col-xs-12">
                                                    <label for="request-car_year">Год выпуска</label>
                                                    <input type="text" class="form-control type-year" id="request-car_year" name="Год выпуска" required placeholder="">
                                                </div>
                                                <div class="form-group col-md-3 col-sm-6 col-xs-12">
                                                    <label for="request-car_time">Срок займа</label>
                                                    <input type="text" class="form-control" id="request-car_time" name="Срок займа" required placeholder="">
                                                </div>
                                                <div class="form-group col-md-3 col-sm-6 col-xs-12">
                                                    <label for="request-car_time">Имя</label>
                                                    <input type="text" class="form-control" id="request-car_time" name="Имя" required placeholder="">
                                                </div>
                                                <div class="form-group col-md-3 col-sm-6 col-xs-12">
                                                    <label for="request-car_time">Телефон</label>
                                                    <input type="text" required class="form-control type-phone" name="Телефон" placeholder="+7 (ХХХ) ХХХ - ХХ - ХХ">
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-danger">Получить одобрение
                                                    </button>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>

    <div class="modal fade" id="Application" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2>Подать заявку</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
                </div>
                <div class="modal-body">
                    <form class="ajax_form" method="post">
                        <div class="row">
                            <div class="form-group col-md-6 col-sm-12 col-xs-12"><label for="AppName10">Ваше
                                    имя</label><span class="error"></span><input id="AppName10" type="text" class="form-control" name="AppName" placeholder="Как Вас зовут">
                            </div>
                            <div class="form-group col-md-6 col-sm-12 col-xs-12"><label for="AppPhone1">Телефон</label><span class="error"></span><input name="_token" type="text" class="form-control type-phone" id="AppPhone1" name="AppPhone" placeholder="+7 (ХХХ) ХХХ - ХХ - ХХ"></div>
                            <div class="col-md-12">
                                <div class="personal-data">Нажимая на кнопку, вы даёте своё согласие на обработку ваших <a target="_blank" href="privacy-policy.pdf">персональных данных</a></div>
                                <button type="submit" class="btn btn-danger">Подать заявку</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js-web/common.min.js"></script>
    <script>
        /*
    Так как карта загружается только на md+, то Загружаем скрипты карт только на больших экранах
    */
        var screenWidth = screen.width;
        if (screenWidth > 760) {
            var script = document.createElement('script');
            script.type = 'text/javascript';
            script.onload = function() {
                var script2 = document.createElement('script');
                script2.type = 'text/javascript';
                script2.onload = function() {};
                script2.src = 'js-web/map.js';
                document.head.appendChild(script2);
            };
            script.src = 'https://api-maps.yandex.ru/2.1?apikey=1d68921b-c09e-4b88-9ba3-50e7fd3c8f83&load=package.full&lang=ru-RU';
            document.head.appendChild(script);
        }
    </script>

    <link rel="stylesheet" href="css-web/internal-pages.min.css" />

    <script defer src="js-web/internal-pages.min.js"></script>
    <script defer src="js-web/javascript.js"></script>
    <script type="text/javascript">
        $(function() {
            $('form').submit(function() {
                $(this).find('[type=submit]').attr('disabled', 'disabled');
            });
        });
    </script>
    <div class="cities-wrapper">
        <div class="cities-wrap cities-main">
            <div class=" mob-menu-but-h-2">
                <div class=" mob-line-2 mob-line-c"></div>
                <div class="mob-line-3 mob-line-c"></div>
            </div>
            <div class="cities-header city-text">Выбор региона</div>

            <div class="row">

                <div class="col-sm-12 col-md-3">



                    <div class="letter">К</div>
                    <div id="rootК"></div>

                </div>

                <div class="col-sm-12 col-md-3">

                    <div class="letter">Н</div>
                    <div id="rootН"></div>


                </div>
                <div class="col-sm-12 col-md-3">

                    <div class="letter">С</div>
                    <div id="rootС"></div>

                </div>
            </div>
        </div>
    </div>
    <script src="js-web/multi-regionality.js" type="text/babel"></script>
    <script defer src="https://themes.getbootstrap.com/wp-content/themes/dokan/assets/js/html5.js" type="text/javascript"></script>
    <script src="https://unpkg.com/react@17/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@17/umd/react-dom.development.js" crossorigin></script>
    <script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?render=6LfcoEoeAAAAADKhAfYljva59-wLRGiHSTBArvNy"></script>
    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('6LfcoEoeAAAAADKhAfYljva59-wLRGiHSTBArvNy', {
                action: 'submit'
            }).then(function(token) {
                let e = document.createElement('input');
                e.type = 'hidden';
                e.name = 'recaptcha_response';
                e.value = token;
                Array.from(document.querySelectorAll('form')).forEach(function(form) {
                    form.appendChild(e.cloneNode());
                });
            });
        });
    </script>
</body>

</html>