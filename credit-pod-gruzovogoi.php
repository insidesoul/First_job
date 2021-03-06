<?php
$phone = '8 (961) 331-39-48';
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
    <title>Займы под залог грузовых авто <?= $in_city ?></title>
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
                                <div class="city-wrapper city-wrapper-main">
                                    <div class="city-text">Выбрать регион</div>
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
                                <h1 class="h1"><span class="h1-span">Займы под залог грузовых авто <br><?= $in_city ?></span></h1>

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
 <div class="element-wrap"><a href="#" class="btn btn-danger" data-toggle="modal"
                                                                     data-target="#specifications">Оценить ТС</a>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <div class="product-template-bg">
                                            <div title="кредит под залог грузового автомобиля в банке" class="element-img grey" style="background-image: url(images/product/truck2.jpg);"></div>
                                            <div class="element-title">Грузовые авто</div>
                                            <div class="element-text">Газели, тягачи, фуры</div>
 <div class="element-wrap"><a href="#" class="btn btn-danger" data-toggle="modal"
                                                                     data-target="#specifications">Оценить ТС</a>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <div class="product-template-bg">
                                            <div title="кредит под залог птс спецтехники москва" class="element-img grey" style="background-image: url(images/product/tyagach2.jpg);"></div>
                                            <div class="element-title">Тягачи</div>
                                            <div class="element-text">отечественные и импортные</div>
 <div class="element-wrap"><a href="#" class="btn btn-danger" data-toggle="modal"
                                                                     data-target="#specifications">Оценить ТС</a>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <div class="product-template-bg">
                                            <div title="кредит под залог птс" class="element-img grey" style="background-image: url(images/product/pricep.jpg);"></div>
                                            <div class="element-title">Прицепы</div>
                                            <div class="element-text">Прицепы и полуприцепы</div>
 <div class="element-wrap"><a href="#" class="btn btn-danger" data-toggle="modal"
                                                                     data-target="#specifications">Оценить ТС</a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="visible-on-mobile">
                                <div class="owl-carousel owl-theme product">
                                    <div class="product-template-bg">
                                        <div class="element-img grey" style="background-image: url(images/product/gazel3.png);"></div>
                                        <div class="element-title">Газели</div>
                                        <div class="element-text">грузовые, пассажирские</div>
 <div class="element-wrap"><a href="#" class="btn btn-danger" data-toggle="modal"
                                                                     data-target="#specifications">Оценить ТС</a>
                                        </div>
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
                                        <div class="element-img grey" style="background-image: url(images/product/pricep.png);"></div>
                                        <div class="element-title">Прицепы</div>
                                        <div class="element-text">Прицепы и полуприцепы</div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
<section id="calculate-3-2-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="h1">
                        <span class="h1-span">Калькулятор займа</span>
                    </h3>
                </div>

                <div id="calculator" class="col-md-12">
                    <form action="thanks.php" method="POST">

                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="calculate-item">
                                    <h6>Необходимая сумма</h6>
                                    <div class="calculate-steps">
                                        <div class="">
                                            <span class="amount-value" id="amount-thousands"></span>
                                            <span>₽</span>

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
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="calculate-item">
                                    <h6>Срок займа</h6>
                                    <div class="calculate-steps">
                                        <div class="">
                                            <span class="amount-value" id="amount-months"></span>
                                            <span>мес.</span>
                                        </div>
                                    </div>
                                    <div class="calculate-steps">
                                        <div class="steps-left">2</div>
                                        <div class="steps-right">60</div>
                                    </div>
                                    <div id="slider-range-months"></div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6">
                                <div class="result-container">
                                    <h6>Ежемесячный платеж</h6>
                                    <input id="revenue" type="text"
                                           class="form-control calculate-bottom-text-prices revenue" name="revenue"
                                           value="">
                                </div>
                            </div>
                            <div class="col-md-12 m-t-30">
                                <h3>Контактные данные клиента</h3>

                                <input type="hidden" name="_token" value=>
                                <input type="hidden" value="" name=>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label for="CalcName">Ваше имя</label>
                                            <span class="error"></span>
                                            <input id="CalcName" required type="text" class="form-control" name="name"
                                                   placeholder="Как Вас зовут">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label for="CalcNumber">Телефон</label>
                                            <span class="error"></span>
                                            <input type="text" required class="form-control type-phone" id="CalcNumber"
                                                   name="phone" placeholder="+7 (ХХХ) ХХХ - ХХ - ХХ">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label for="CalcNumber">Где Вы живёте</label>
                                            <span class="error"></span>
                                            <input type="text" required class="form-control type-phone" id="CalcNumber"
                                                   name="phone" placeholder="Местонахождение">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="calc-bottom">
                                                <button type="submit" class="btn btn-danger">Подать заявку</button>
                                            </div>
                                        </div>

                                        <div class="personal-data calc-bottom">Нажимая на кнопку, вы даёте своё согласие
                                            на
                                            обработку ваших <a target="_blank" href="privacy-policy.pdf">персональных
                                                данных</a>
                                        </div>
                                    </div>
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<section id=advantages-4>
        <div class="container">
            <div class="row">
                <div class="col-md-11">
                    <h3 class="h1"><span class="h1-span">Лучшее обслуживание </span>для каждого клиента</h3>
                </div>
                <div class="col-md-4">
                    <p>Деньги под залог авто помогут решить временные финансовые трудности, клиенты продолжают пользоваться своим транспортным средством</p>

                    <div class="link-button visible-on-wade visible-on-tablet">
                        <a href="#" data-toggle="modal" data-target="#CallPhone-ver-4">Подать заявку <span class="arrow"></span></a>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="visible-on-wade visible-on-tablet">
                        <div class="row">
                            <div class="col-md-3 col-sm-3">
                                <div class="list-icon-grey-item">
                                    <div class="list-icon-grey-item-img" style="background-image: url(images/icon/p4298/withoutPeniRed.png); background-size: 50px"></div>
                                    <div class="list-icon-grey-item-title">Выгода</div>
                                    <div class="list-icon-grey-item-text">Наличные под залог авто. Выдача до 80%</div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="list-icon-grey-item">
                                    <div class="list-icon-grey-item-img" style="background-image: url(images/icon/p4298/icon_24.png); background-size: 50px"></div>
                                    <div class="list-icon-grey-item-title">Скорость</div>
                                    <div class="list-icon-grey-item-text">Работаем 24/7. Выдача за пол часа</div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="list-icon-grey-item">
                                    <div class="list-icon-grey-item-img" style="background-image: url(images/icon/p4298/calendar.png); background-size: 50px"></div>
                                    <div class="list-icon-grey-item-title">Сроки</div>
                                    <div class="list-icon-grey-item-text">Займы на любые сроки</div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="list-icon-grey-item">
                                    <div class="list-icon-grey-item-img" style="background-image: url(images/icon/p4298/electric-car.png); background-size: 50px"></div>
                                    <div class="list-icon-grey-item-title">Удобство</div>
                                    <div class="list-icon-grey-item-text">Принимаем любую технику</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="visible-on-mobile">
                        <div class="owl-carousel owl-theme advantages-2">
                            <div class="list-icon-grey-item">
                                <div class="list-icon-grey-item-img" style="background-image: url(images/icon/icon_23.png); background-size: 50px"></div>
                                <div class="list-icon-grey-item-title">Выгода</div>
                                <div class="list-icon-grey-item-text">Наличные под залог авто. Выдача до 80%</div>
                            </div>
                            <div class="list-icon-grey-item">
                                <div class="list-icon-grey-item-img" style="background-image: url(images/icon/icon_24.png); background-size: 50px"></div>
                                <div class="list-icon-grey-item-title">Скорость</div>
                                <div class="list-icon-grey-item-text">Работаем 24/7. Выдача за пол часа</div>
                            </div>
                            <div class="list-icon-grey-item">
                                <div class="list-icon-grey-item-img" style="background-image: url(images/icon/icon_25.png); background-size: 50px"></div>
                                <div class="list-icon-grey-item-title">Сроки</div>
                                <div class="list-icon-grey-item-text">Займы на любые сроки</div>
                            </div>
                            <div class="list-icon-grey-item">
                                <div class="list-icon-grey-item-img" style="background-image: url(images/icon/icon_27.png); background-size: 50px"></div>
                                <div class="list-icon-grey-item-title">Удобство</div>
                                <div class="list-icon-grey-item-text">Принимаем любую технику</div>
                            </div>
                        </div>

                        <div class="link-button">
                            <a href="#CallPhone-ver-4">Подать заявку <span class="arrow"></span></a>
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
                            залог грузовых авто</span></h3>
                    </div>
                    <div class="col-md-12 col-sm-6">
                        <img class="m-t-image" src="images/p4298/audi_g.png" alt="займы"/>
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
<section id=requirements-3>
        <div class=container>
            <div class=row>
                <div class="col-md-11 col-sm-12">
                    <h3 class=h1><span class=h1-span>Требования для получения </span>денежных средств под залог грузовых авто</h3>

                    <div class="row">
                        <div class="col-md-3 col-sm-12">
                            <ul class="switcher-3 three-pieces" id=switcher-loan-3>
                                <li class="for_opening_view selected" data-modal-id=paymentsGrafModal id=express data-show-3=one>
                                    <div class=title-switch>К автомобилю</div>
                                </li>
                                <li class="for_opening_view" data-modal-id=paymentsInfo id=detailed data-show-3=two>
                                    <div class=title-switch>К заемщику</div>
                                </li>
                                <li class="for_opening_view" data-modal-id=paymentsInfo id=detailed data-show-3=three>
                                    <div class=title-switch>К документам</div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-9 col-sm-12">
                            <div class=switch-js-3>
                                <div class=opening_view data-switch-3=one>
                                    <ul class="list-ul">
                                        <li>Авто в исправном техническом состоянии</li>
                                        <li>Состоит на учете в ГИБДД</li>
                                        <li>Не находится в залоге</li>
                                    </ul>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#CallPhone-ver-4">Оформить займ</button>
                                </div>

                                <div class=opening_view data-switch-3=two>
                                    <ul class="list-ul">
                                        <li>Гражданство РФ и постоянная регистрация в регионе присутствия компании</li>
                                        <li>От 18 до 65 полных лет на момент заключения договора</li>
                                        <li>Кредитная история не требуется</li>
                                        <li>Можно без трудоустройства</li>
                                    </ul>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#CallPhone-ver-4">Оформить займ</button>
                                </div>

                                <div class=opening_view data-switch-3=three>
                                    <ul class="list-ul">
                                        <li>Паспорт гражданина РФ</li>
                                        <li>Паспорт технического средства (ПТС)</li>
                                        <li>Свидетельство о регистрации транспортного средства (СРТС)</li>
                                    </ul>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#CallPhone-ver-4">Оформить займ</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<section id="example-loan-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h3 class="h1"><span class="h1-span">Примеры выданных </span>займов</h3>

                <div class="owl-carousel owl-theme example-loan">
                    <div class="example-car right">
                        <div class="example-car-img"
                             style="background-image: url(images/example-loan/gaz.png);"></div>
                        <div class="example-car-content">
                            <h2>Mazda CX5, 2019</h2>
                            <div class="example-car-text">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 param-string">
                                        <div class="text-bold"><span>2 700 000 ₽</span></div>
                                        Рыночная стоимость
                                    </div>
                                    <div class="col-md-4 col-sm-4 param-string">
                                        <div class="text-bold"><span>1 598 000 ₽</span></div>
                                        Одобренная сумма
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="text-bold"><span>36 086 ₽</span></div>
                                        Платеж в месяц
                                    </div>
                                    <div class="col-md-12">
                                        <hr>
                                    </div>
                                    <div class="col-md-4 col-sm-4 param-string">
                                        <div class="text-bold"><span>36 мес</span></div>
                                        Срок займа
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="text-bold"><span>2.5%</span></div>
                                        Ставка в месяц
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="example-car right">
                        <div class="example-car-img"
                             style="background-image: url(images/example-loan/audi_2.png);"></div>
                        <div class="example-car-content">
                            <h2>Audi Q8, 2019</h2>
                            <div class="example-car-text">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 param-string">
                                        <div class="text-bold"><span>2 700 000 ₽</span></div>
                                        Рыночная стоимость
                                    </div>
                                    <div class="col-md-4 col-sm-4 param-string">
                                        <div class="text-bold"><span>1 598 000 ₽</span></div>
                                        Одобренная сумма
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="text-bold"><span>36 086 ₽</span></div>
                                        Платеж в месяц
                                    </div>
                                    <div class="col-md-12">
                                        <hr>
                                    </div>
                                    <div class="col-md-4 col-sm-4 param-string">
                                        <div class="text-bold"><span>36 мес</span></div>
                                        Срок займа
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="text-bold"><span>2.5%</span></div>
                                        Ставка в месяц
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="example-car right">
                        <div class="example-car-img"
                             style="background-image: url(images/example-loan/hyundai_2.png);"></div>
                        <div class="example-car-content">
                            <h2>Hyundai Solaris, 2019</h2>
                            <div class="example-car-text">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 param-string">
                                        <div class="text-bold"><span>2 700 000 ₽</span></div>
                                        Рыночная стоимость
                                    </div>
                                    <div class="col-md-4 col-sm-4 param-string">
                                        <div class="text-bold"><span>1 598 000 ₽</span></div>
                                        Одобренная сумма
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="text-bold"><span>36 086 ₽</span></div>
                                        Платеж в месяц
                                    </div>
                                    <div class="col-md-12">
                                        <hr>
                                    </div>
                                    <div class="col-md-4 col-sm-4 param-string">
                                        <div class="text-bold"><span>36 мес</span></div>
                                        Срок займа
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="text-bold"><span>2.5%</span></div>
                                        Ставка в месяц
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="example-car right">
                        <div class="example-car-img"
                             style="background-image: url(images/example-loan/mercedes_2.png);"></div>
                        <div class="example-car-content">
                            <h2>Mercedes-Benz S-Класс, 2019</h2>
                            <div class="example-car-text">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 param-string">
                                        <div class="text-bold"><span>2 700 000 ₽</span></div>
                                        Рыночная стоимость
                                    </div>
                                    <div class="col-md-4 col-sm-4 param-string">
                                        <div class="text-bold"><span>1 598 000 ₽</span></div>
                                        Одобренная сумма
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="text-bold"><span>36 086 ₽</span></div>
                                        Платеж в месяц
                                    </div>
                                    <div class="col-md-12">
                                        <hr>
                                    </div>
                                    <div class="col-md-4 col-sm-4 param-string">
                                        <div class="text-bold"><span>36 мес</span></div>
                                        Срок займа
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="text-bold"><span>2.5%</span></div>
                                        Ставка в месяц
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="example-car right">
                        <div class="example-car-img"
                             style="background-image: url(images/example-loan/renault_2.png);"></div>
                        <div class="example-car-content">
                            <h2>Renault Duster, 2019</h2>
                            <div class="example-car-text">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 param-string">
                                        <div class="text-bold"><span>2 700 000 ₽</span></div>
                                        Рыночная стоимость
                                    </div>
                                    <div class="col-md-4 col-sm-4 param-string">
                                        <div class="text-bold"><span>1 598 000 ₽</span></div>
                                        Одобренная сумма
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="text-bold"><span>36 086 ₽</span></div>
                                        Платеж в месяц
                                    </div>
                                    <div class="col-md-12">
                                        <hr>
                                    </div>
                                    <div class="col-md-4 col-sm-4 param-string">
                                        <div class="text-bold"><span>36 мес</span></div>
                                        Срок займа
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="text-bold"><span>2.5%</span></div>
                                        Ставка в месяц
                                    </div>
                                </div>
                            </div>
                        </div>
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
                <h3 class="h1"><span class="h1-span">Ответы на часто </span><span
                        class="yellow-text">задаваемые вопросы</span></h3>

                <div class="owl-carousel owl-theme questions-block-2">
                    <div class="question-answer">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="question">Могу ли я вернуть деньги за грузовой автомобиль раньше условленного срока?
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="answer">
                                   Хорошие условия автоломбарада предлагают вернуть деньги за грузовой автомобиль раньше срока, при этом, не взимая никакой пени.
                                   Займ под ПТС грузовика — выгодное решение получить деньги в кредит, при этом  клиент сам решаете, когда погасить долги, но не позднее установленного срока.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="question-answer">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="question">Переоформляется ли грузовое транспортное средство на ваш автоломбард?
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="answer">
                                    Транспортное средство полностью остается за владельцем. Компания выдает займ под ПТС грузового автомобиля посредством кредитования. Процесс получения денег занимает от 20 до 40 минут. Если вы получаете наличные деньги, они выдаются сразу после оформления.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="question-answer">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="question">Важен ли возраст грузовика в процессе кредитования?
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="answer">
                                    Для получения займа под залог ПТС грузового авто, возраст грузовика учитывается. Примем в залог автомобиль отечественного производства, если он был выпущен менее 10 лет назад. Для импортных грузовиков возрастной увеличен до 20 лет. Автозаем под залог ПТС – это удобно, практично и рентабельно!
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</section>
<section id="reviews">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h3 class="h1">Что говорят о нас</h3>

                <div class="visible-on-wade visible-on-tablet">
                    <div class="row">
                        <div class="col-md-4">
                            <article class="review-bg-grey">
                                <div class="review-text">Недавно попал в сложную ситуацию, срочно нужны были деньги, решил взять займ под ПТС грузового автомобиля в автоломбарде, все прошло очень быстро и без каких-либо сложностей, мне предложили выгодные условия, деньги получил практически сразу же.
                                </div>
                                <div class="review-person">
                                    <div class="review-name">Игорь</div>
                                </div>
                            </article>
                            <article class="review-bg-grey">
                                <div class="review-text">Если мне нужны деньги, но нет возможности взять их в банке, то я всегда обращаюсь в автоломбард грузовых автомобилей в Сочи, здесь дают наличные под залог ПТС. 30 минут и нужная сумма у меня. Уже несколько раз обращался в непредвиденных ситуациях, всегда выручали.
                            </div>
                            <div class="review-person">
                                <div class="review-name">Демьян</div>
                            </div>
                            </article>

                        </div>
                        <div class="col-md-4">
                            <article class="review-bg-grey">
                                <div class="review-text">Быстро взять деньги можно только в этом автоломбарде грузовиков, здесь могут дать займ под залог ПТС. Раньше не знал об этом сервисе, его мне посоветовали друзья. Я остался очень доволен, все быстро, а самое главное – нет огромных процентов. 
                                </div>
                                <div class="review-person">
                                    <div class="review-name">Сергей</div>
                                </div>
                            </article>
                            <article class="review-bg-grey">
                                <div class="review-text">Уже 2 раза брал займ в грузовом автоломбарде, дают под залог ПТС, все очень быстро, занимает 30 минут и деньги уже у меня. Всем рекомендую, при необходимости обращусь еще не раз. 
                            </div>
                            <div class="review-person">
                                <div class="review-name">Юрий</div>
                            </div>
                            </article>
                        </div>
                        <div class="col-md-4">
                            <article class="review-bg-grey">
                                <div class="review-text">Если мне срочно нужны деньги, то я беру займ под залог грузового автомобиля, для меня самое главное, что это очень быстро и занимает мало времени. Всего через 40 минут деньги уже у меня на кармане. 
                                </div>
                                <div class="review-person">
                                    <div class="review-name">Максим</div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>

                <div class="visible-on-mobile">
                    <div class="owl-carousel owl-theme reviews-4">
                        <article class="review-bg-grey">
                            <div class="review-text">Недавно попал в сложную ситуацию, срочно нужны были деньги, решил взять займ под ПТС грузового автомобиля в автоломбарде, все прошло очень быстро и без каких-либо сложностей, мне предложили выгодные условия, деньги получил практически сразу же.
                            </div>
                            <div class="review-person">
                                <div class="review-name">Игорь</div>
                            </div>
                        </article>
                        <article class="review-bg-grey">
                            <div class="review-text">Если мне нужны деньги, но нет возможности взять их в банке, то я всегда обращаюсь в автоломбард грузовых автомобилей в Сочи, здесь дают наличные под залог ПТС. 30 минут и нужная сумма у меня. Уже несколько раз обращался в непредвиденных ситуациях, всегда выручали.
                            </div>
                            <div class="review-person">
                                <div class="review-name">Демьян</div>
                            </div>
                        </article>
                        <article class="review-bg-grey">
                            <div class="review-text">Быстро взять деньги можно только в этом автоломбарде грузовиков, здесь могут дать займ под залог ПТС. Раньше не знал об этом сервисе, его мне посоветовали друзья. Я остался очень доволен, все быстро, а самое главное – нет огромных процентов. 
                                </div>
                                <div class="review-person">
                                    <div class="review-name">Сергей</div>
                                </div>
                        </article>
                        <article class="review-bg-grey">
                            <div class="review-text">Уже 2 раза брал займ в грузовом автоломбарде, дают под залог ПТС, все очень быстро, занимает 30 минут и деньги уже у меня. Всем рекомендую, при необходимости обращусь еще не раз. 
                            </div>
                            <div class="review-person">
                                <div class="review-name">Юрий</div>
                            </div>
                        </article>
                        <article class="review-bg-grey">
                            <div class="review-text">Если мне срочно нужны деньги, то я беру займ под залог грузового автомобиля, для меня самое главное, что это очень быстро и занимает мало времени. Всего через 40 минут деньги уже у меня на кармане. 
                                </div>
                                <div class="review-person">
                                    <div class="review-name">Максим</div>
                                </div>
                        </article>
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
                             style="background-color: #3f0d12; background-image: linear-gradient(315deg, #3f0d12 0%, #ED4255 74%); "
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
                                "undefined": "Астрахань ул. Богдана Хмельницкого, 36",
                                "Aдресa": "ул. Богдана Хмельницкого, 36",
                                "Город": "Астрахань",
                                "Longitude": "46.335739",
                                "Latitude": "48.0233103",
                                "Column5": "Astrakhan",
                                "Index": "414024"
                            },
                            {
                                "undefined": "Ахтубинск ул. Сталинградская, 17",
                                "Aдресa": "ул. Сталинградская, 17",
                                "Город": "Ахтубинск",
                                "Longitude": "48.2844688",
                                "Latitude": "46.1645515",
                                "Column5": "Akhtubinsk",
                                "Index": "416501"
                            },
                            {
                                "undefined": "Волгоград ул. Чехова, 18",
                                "Aдресa": "ул. Чехова, 18",
                                "Город": "Волгоград",
                                "Longitude": "48.59373",
                                "Latitude": "44.413441",
                                "Column5": "Volgograd",
                                "Index": "400023"
                            },
                            {
                                "undefined": "Волжский ул. Энгельса, 1",
                                "Aдресa": "ул. Энгельса, 1",
                                "Город": "Волжский",
                                "Longitude": "48.7868144",
                                "Latitude": "44.7523488",
                                "Column5": "Volzhskiy",
                                "Index": "404111"
                            },
                            {
                                "undefined": "Камышин пл. Павших Борцов, 5",
                                "Aдресa": "пл. Павших Борцов, 5",
                                "Город": "Камышин",
                                "Longitude": "50.0848238",
                                "Latitude": "45.4016776",
                                "Column5": "Kamyshin",
                                "Index": "403883"
                            },
                            {
                                "undefined": "Михайловка ул. Коммуны, 105",
                                "Aдресa": "ул. Коммуны, 105",
                                "Город": "Михайловка",
                                "Longitude": "50.071353",
                                "Latitude": "43.2389556",
                                "Column5": "Mikhaylovka",
                                "Index": "403343"
                            },
                            {
                                "undefined": "Урюпинск ул. Островского, 20",
                                "Aдресa": "ул. Островского, 20",
                                "Город": "Урюпинск",
                                "Longitude": "50.7974183",
                                "Latitude": "42.0056002",
                                "Column5": "Uryupinsk",
                                "Index": "353380"
                            },
                            {
                                "undefined": "Краснодар ул. Северная, 490",
                                "Aдресa": "ул. Северная, 490",
                                "Город": "Краснодар",
                                "Longitude": "45.0366061",
                                "Latitude": "38.9963804",
                                "Column5": "Krasnodar",
                                "Index": "350002"
                            },
                            {
                                "undefined": "Анапа ул. Крымская, 99",
                                "Aдресa": "ул. Крымская, 99",
                                "Город": "Анапа",
                                "Longitude": "44.8944446",
                                "Latitude": "37.316682",
                                "Column5": "Anapa",
                                "Index": "353440"
                            },
                            {
                                "undefined": "Армавир ул. Кирова, 56",
                                "Aдресa": "ул. Кирова, 56",
                                "Город": "Армавир",
                                "Longitude": "44.997696",
                                "Latitude": "41.128756",
                                "Column5": "Armavir",
                                "Index": "352900"
                            },
                            {
                                "undefined": "Белореченск ул. Ленина, 64",
                                "Aдресa": "ул. Ленина, 64",
                                "Город": "Белореченск",
                                "Longitude": "44.7613363",
                                "Latitude": "39.8719736",
                                "Column5": "Belorechensk",
                                "Index": "352631"
                            },
                            {
                                "undefined": "Геленджик ул. Ленина, 1",
                                "Aдресa": "ул. Ленина, 1",
                                "Город": "Геленджик",
                                "Longitude": "44.5616258",
                                "Latitude": "38.0771748",
                                "Column5": "Gelendzhik",
                                "Index": "353460"
                            },
                            {
                                "undefined": "Ейск ул. Свердлова, 73",
                                "Aдресa": "ул. Свердлова, 73",
                                "Город": "Ейск",
                                "Longitude": "46.7120455",
                                "Latitude": "38.2721788",
                                "Column5": "Yeysk",
                                "Index": "353680"
                            },
                            {
                                "undefined": "Кропоткин ул. Красная, 54",
                                "Aдресa": "ул. Красная, 54",
                                "Город": "Кропоткин",
                                "Longitude": "45.4346665",
                                "Latitude": "40.5764735",
                                "Column5": "Kropotkin",
                                "Index": "352380"
                            },
                            {
                                "undefined": "Крымск ул. Карла Либкнехта, 38",
                                "Aдресa": "ул. Карла Либкнехта, 38",
                                "Город": "Крымск",
                                "Longitude": "44.935287",
                                "Latitude": "37.988358",
                                "Column5": "Krymsk",
                                "Index": "353380"
                            },
                            {
                                "undefined": "Новороссийск ул. Советов, 11",
                                "Aдресa": "ул. Советов, 11",
                                "Город": "Новороссийск",
                                "Longitude": "44.7226188",
                                "Latitude": "37.7693026",
                                "Column5": "Novorossiysk",
                                "Index": "353916"
                            },
                            {
                                "undefined": "Славянск-на-Кубани ул. Красная, 7А",
                                "Aдресa": "ул. Красная, 7А",
                                "Город": "Славянск-на-Кубани",
                                "Longitude": "45.2599901",
                                "Latitude": "38.1292567",
                                "Column5": "Slavyansk-na-Kubani",
                                "Index": "353560"
                            },
                            {
                                "undefined": "Сочи ул. Советская, 40",
                                "Aдресa": "ул. Советская, 40",
                                "Город": "Сочи",
                                "Longitude": "43.586215",
                                "Latitude": "39.724113",
                                "Column5": "Sochi",
                                "Index": "354000"
                            },
                            {
                                "undefined": "Тимашевск ул. Красная, 102",
                                "Aдресa": "ул. Красная, 102",
                                "Город": "Тимашевск",
                                "Longitude": "45.6145591",
                                "Latitude": "38.9335181",
                                "Column5": "Timashevsk",
                                "Index": "352700"
                            },
                            {
                                "undefined": "Тихорецк ул. Меньшикова, 82",
                                "Aдресa": "ул. Меньшикова, 82",
                                "Город": "Тихорецк",
                                "Longitude": "45.8527758",
                                "Latitude": "40.1236231",
                                "Column5": "Tikhoretsk",
                                "Index": "352120"
                            },
                            {
                                "undefined": "Туапсе ул. Октябрьской Революции, 2А",
                                "Aдресa": "ул. Октябрьской Революции, 2А",
                                "Город": "Туапсе",
                                "Longitude": "44.0976288",
                                "Latitude": "39.0738502",
                                "Column5": "Tuapse",
                                "Index": "352800"
                            },
                            {
                                "undefined": "Майкоп ул. Краснооктябрьская, 50",
                                "Aдресa": "ул. Краснооктябрьская, 50",
                                "Город": "Майкоп",
                                "Longitude": "44.6149876",
                                "Latitude": "40.1066554",
                                "Column5": "Maykop",
                                "Index": "385000"
                            },
                            {
                                "undefined": "Элиста ул. А. Сусеева, 4",
                                "Aдресa": "ул. А. Сусеева, 4",
                                "Город": "Элиста",
                                "Longitude": "46.3049537",
                                "Latitude": "44.2694469",
                                "Column5": "Elista",
                                "Index": "358000"
                            },
                            {
                                "undefined": "Ростов-на-Дону ул. Еременко 89Б",
                                "Aдресa": "ул. Еременко 89Б",
                                "Город": "Ростов-на-Дону",
                                "Longitude": "47.232746",
                                "Latitude": "39.612163",
                                "Column5": "Rostov",
                                "Index": "344056"
                            },
                            {
                                "undefined": "Азов ул. Московская, 19",
                                "Aдресa": "ул. Московская, 19",
                                "Город": "Азов",
                                "Longitude": "47.112616",
                                "Latitude": "39.4233369",
                                "Column5": "Azov",
                                "Index": "346780"
                            },
                            {
                                "undefined": "Белая Калитва ул. Энгельса, 106",
                                "Aдресa": "ул. Энгельса, 106",
                                "Город": "Белая Калитва",
                                "Longitude": "48.1770036",
                                "Latitude": "40.801737",
                                "Column5": "Belaya Kalitva",
                                "Index": "347042"
                            },
                            {
                                "undefined": "Волгодонск пр. Курчатова, 18",
                                "Aдресa": "пр. Курчатова, 18",
                                "Город": "Волгодонск",
                                "Longitude": "47.5191535",
                                "Latitude": "42.2075225",
                                "Column5": "Volgodonsk",
                                "Index": "347380"
                            },
                            {
                                "undefined": "Каменск-Шахтинский ул. Щаденко, 60",
                                "Aдресa": "ул. Щаденко, 60",
                                "Город": "Каменск-Шахтинский",
                                "Longitude": "48.3203251",
                                "Latitude": "40.2683207",
                                "Column5": "Kamensk-Shakhtinsky",
                                "Index": "347810"
                            },
                            {
                                "undefined": "Новочеркасск ул. Московская, 69",
                                "Aдресa": "ул. Московская, 69",
                                "Город": "Новочеркасск",
                                "Longitude": "47.4209654",
                                "Latitude": "40.0930165",
                                "Column5": "Novocherkassk",
                                "Index": "346428"
                            },
                            {
                                "undefined": "Таганрог ул. Октябрьская, 31",
                                "Aдресa": "ул. Октябрьская, 31",
                                "Город": "Таганрог",
                                "Longitude": "47.2192874",
                                "Latitude": "38.9139487",
                                "Column5": "Taganrog",
                                "Index": "347904"
                            },
                            {
                                "undefined": "Шахты ул. Советская, 136",
                                "Aдресa": "ул. Советская, 136",
                                "Город": "Шахты",
                                "Longitude": "47.7086029",
                                "Latitude": "40.2164689",
                                "Column5": "Shakhty",
                                "Index": "346500"
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
                            document.querySelector('#Сочи').click()
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
                                <li><a href="credit-pod-gruzovogoi.php">Грузовые авто</a></li>
                                <li><a href="credit-pod-spectech.php">Спецтехника</a></li>
                                <li><a href="credit-avtolombard.php">Автоломбард</a></li>

                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <ul class="footer-li bold">
                                <li><a href="credit-pod-pts-motozikla.php">Мототехника</a></li>
                                <li><a href="credit-pts-auto.php">Кредит</a></li>
                            
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-md-12">
                    <div class="footer-bottom">
                        <p>«Авто Займ Сервис» не является финансовым учреждением, банком или МФО. Сайт
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
                                <li><a href="credit-pod-gruzovogoi.php">Грузовые авто</a></li>
                                <li><a href="credit-pod-spectech.php">Спецтехника</a></li>
                                <li><a href="credit-pod-pts-motozikla.php">Мототехника</a></li>
                                <li><a href="credit-pts-auto.php">Кредит</a></li>
                               
                                <li><a href="credit-avtolombard.php">Автоломбард</a></li>
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
                                <li><a href="credit-pod-gruzovogoi.php">Грузовые авто</a></li>
                                <li><a href="credit-pod-spectech.php">Спецтехника</a></li>
                                <li><a href="credit-pod-pts-motozikla.php">Мототехника</a></li>
                                <li><a href="credit-pts-auto.php">Кредит</a></li>
                                
                                <li><a href="credit-avtolombard.php">Автоломбард</a></li>
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
                    <div class="letter">А</div>
                    <div id="rootА"></div>

                    <div class="letter">Б</div>
                    <div id="rootБ"></div>

                    <div class="letter">В</div>
                    <div id="rootВ"></div>

                    <div class="letter">Г</div>
                    <div id="rootГ"></div>

                </div>
                <div class="col-sm-12 col-md-3">

                    <div class="letter">Е</div>
                    <div id="rootЕ"></div>

                    <div class="letter">К</div>
                    <div id="rootК"></div>

                </div>

                <div class="col-sm-12 col-md-3">
                    <div class="letter">М</div>
                    <div id="rootМ"></div>
                    <div class="letter">Н</div>
                    <div id="rootН"></div>

                    <div class="letter">Р</div>
                    <div id="rootР"></div>

                </div>
                <div class="col-sm-12 col-md-3">

                    <div class="letter">С</div>
                    <div id="rootС"></div>
                    <div class="letter">Т</div>
                    <div id="rootТ"></div>

                    <div class="letter">У</div>
                    <div id="rootУ"></div>

                    <div class="letter">Ш</div>
                    <div id="rootШ"></div>

                    <div class="letter">Э</div>
                    <div id="rootЭ"></div>
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