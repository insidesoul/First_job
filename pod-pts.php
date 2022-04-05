<?php
$phone = '8 (961) 331-39-37';
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
    <title>Займ под залог ПТС авто <?= $in_city ?></title>
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
                                <h1 class="h1"><span class="h1-span">Займ под залог ПТС авто <br><?= $in_city ?></span></h1>

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

    <section id="interlayer-2">
        <div class="container">
            <div class="row">
                <div class="col-md-9 m-b-30">
                    <h3 class="h1"><span class="h1-span">Преимущество перед </span>банком</h3>
                    <p>Деньги под ПТС автомобиля – эффективный, выгодный и доступный способ получения кредита без проволочек
                        и бумажной волокиты.</p>
                </div>

                <div class="col-xl-9 col-md-9 push-xl-2">
                    <div class="visible-on-wade visible-on-tablet">
                        <div class="row">
                            <div class="col-md-3 col-sm-3">
                                <div class="list-icon-grey-item">
                                    <div class="list-icon-grey-item-img" style="background-image: url(images/icon/like2.png);background-size: 65px;"></div>
                                    <div class="list-icon-grey-item-title mini">Не важна кредитная история</div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="list-icon-grey-item">
                                    <div class="list-icon-grey-item-img" style="background-image: url(images/icon/list2.png);background-size: 65px;"></div>
                                    <div class="list-icon-grey-item-title mini">Не нужны справки</div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="list-icon-grey-item">
                                    <div class="list-icon-grey-item-img" style="background-image: url(images/icon/smile2.png);background-size: 65px;"></div>
                                    <div class="list-icon-grey-item-title mini">Не нужны поручители</div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="list-icon-grey-item">
                                    <div class="list-icon-grey-item-img" style="background-image: url(images/icon/car-insurance2.png);background-size: 65px;"></div>
                                    <div class="list-icon-grey-item-title mini">Не требуется страхование залога</div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="list-icon-grey-item">
                                    <div class="list-icon-grey-item-img" style="background-image: url(images/icon/sedan2.png);background-size: 65px;"></div>
                                    <div class="list-icon-grey-item-title mini">Авто остается у Вас</div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="list-icon-grey-item">
                                    <div class="list-icon-grey-item-img" style="background-image: url(images/icon/cheque.png);background-size: 65px;"></div>
                                    <div class="list-icon-grey-item-title mini">Нет скрытых платежей</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="visible-on-mobile">
                        <div class="owl-carousel owl-theme advantages-2">
                            <div class="list-icon-grey-item">
                                <div class="list-icon-grey-item-img" style="background-image: url(images/icon/icon_31.svg)"></div>
                                <div class="list-icon-grey-item-title mini">Не важна кредитная история</div>
                            </div>
                            <div class="list-icon-grey-item">
                                <div class="list-icon-grey-item-img" style="background-image: url(images/icon/icon_32.svg)"></div>
                                <div class="list-icon-grey-item-title mini">Не нужны справки</div>
                            </div>
                            <div class="list-icon-grey-item">
                                <div class="list-icon-grey-item-img" style="background-image: url(images/icon/icon_33.svg)"></div>
                                <div class="list-icon-grey-item-title mini">Не нужны поручители</div>
                            </div>
                            <div class="list-icon-grey-item">
                                <div class="list-icon-grey-item-img" style="background-image: url(images/icon/icon_34.svg)"></div>
                                <div class="list-icon-grey-item-title mini">Не требуется страхование залога</div>
                            </div>
                            <div class="list-icon-grey-item">
                                <div class="list-icon-grey-item-img" style="background-image: url(images/icon/icon_35.svg)"></div>
                                <div class="list-icon-grey-item-title mini">Авто остается у Вас</div>
                            </div>
                            <div class="list-icon-grey-item">
                                <div class="list-icon-grey-item-img" style="background-image: url(images/icon/icon_36.svg)"></div>
                                <div class="list-icon-grey-item-title mini">Нет скрытых платежей</div>
                            </div>
                        </div>
                    </div>

                    <div class="link-button visible-on-tablet visible-on-wade m-b-30">
                        <a data-toggle="modal" href="#CallPhone-ver-4">Подать заявку <span class="arrow"></span></a>
                    </div>
                </div>
            </div>
            <figure class="get-image-interlayer visible-on-wade visible-on-tablet"><img src="images/subaru2.png" alt="subaru" style="margin: 148px 0 0 14px;">
            </figure>
        </div>
    </section>
    <section id="calculate-3-2-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="background-grey">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="h1">
                                    <span class="h1-span">Калькулятор кредита</span>
                                </h3>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="calculate-item">
                                    <h6>Необходимая сумма</h6>
                                    <div class="calculate-steps">
                                        <div class="">
                                            <span class="amount-value" id="amount-thousands-3"></span>
                                            <span>₽</span>
                                        </div>
                                    </div>
                                    <div class="calculate-steps">
                                        <div class="steps-left for-thousands">30</div>
                                        <div class="steps-right for-thousands">3000</div>
                                    </div>
                                    <div id="slider-range-thousands-3">
                                        <span id="current-thousands-3"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="calculate-item">
                                    <h6>Срок займа</h6>
                                    <div class="calculate-steps">
                                        <div class="">
                                            <span class="amount-value" id="amount-months-3"></span>
                                            <span>мес.</span>
                                        </div>
                                    </div>
                                    <div class="calculate-steps">
                                        <div class="steps-left">2</div>
                                        <div class="steps-right">60</div>
                                    </div>
                                    <div id="slider-range-months-3"></div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6">
                                <div class="result-container">
                                    <h6>Ежемесячный платеж</h6>
                                    <form action="thanks.php" method="POST">

                                        <input id="revenue-3" type="text" class="form-control calculate-bottom-text-prices revenue" name="Ежемесечный платеж" value="">

                                </div>
                            </div>
                            <div class="col-md-12 m-t-30">
                                <h3>Контактные данные клиента</h3>

                                <input type="hidden" name="_token" value=>
                                <input type="hidden" value="" name="_token">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label for="CalcName1">Ваше имя</label>
                                            <span class="error"></span>
                                            <input id="CalcName1" required type="text" class="form-control" name="Name" placeholder="Как вас зовут">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label for="CalcNumber">Телефон</label>
                                            <span class="error"></span>
                                            <input type="text" required class="form-control type-phone" id="CalcNumber1" name="Phone" placeholder="+7 (ХХХ) ХХХ - ХХ - ХХ">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label for="CalcLive">Где Вы живёте</label>
                                            <span class="error"></span>
                                            <input type="text" required class="form-control" id="CalcNumber1" name="City" placeholder="Местонахождениe">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="calc-bottom">
                                                <button type="submit" class="btn btn-danger">Подать заявку</button>
                                            </div>
                                        </div>

                                        <div class="personal-data calc-bottom">Нажимая на кнопку, вы даёте своё согласие на
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
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-4 info-index">
                    <div>
                        <h3 class="h1">Работаем в рамках закона</h3>
                        <ul class="list-ul">
                            <li>Широкая сеть более 100 регионов присутствия </li>
                            <li>Осуществляем деятельность в рамках ФЗ 353</li>
                            <li>Процентная ставка регулируется ЦБ РФ</li>
                        </ul>
                        <div class="link-button visible-on-tablet visible-on-wade m-b-30">
                            <a data-toggle="modal" href="#CallPhone-ver-4">Подать заявку <span class="arrow"></span></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="visible-on-wade visible-on-tablet">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 info-index">
                                <div class="text-info-index">
                                    <div class="text-info-icon"><img class="newImages" src="images/icon/icon_22.png" alt="Кредит под залог ПТС" /></div>
                                    <div class="text-info-title">Соответствуем законодательству РФ</div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 info-index">
                                <div>
                                    <div class="text-info-index">
                                        <div class="text-info-icon"><img class="newImages" src="images/icon/icon_21.png" alt="Кредит под залог ПТС" /></div>
                                        <div class="text-info-title">10 лет успешной работы</div>
                                    </div>
                                    <div class="text-info-index">
                                        <div class="text-info-icon"><img class="newImages" src="images/icon/icon_20.png" alt="Кредит под залог ПТС" /></div>
                                        <div class="text-info-title">Участник лиги автоломбардов</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 visible-on-mobile">
                    <div class="owl-carousel owl-theme documents-2">
                        <div class="text-info-index">
                            <div class="text-info-icon"><img src="images/icon/icon_22.svg" alt="Кредит под залог ПТС" /></div>
                            <div class="text-info-title">Соответствуем законодательству РФ</div>
                        </div>
                        <div class="text-info-index">
                            <div class="text-info-icon"><img src="images/icon/icon_21.svg" alt="Кредит под залог ПТС" /></div>
                            <div class="text-info-title">10 лет успешной работы</div>
                        </div>
                        <div class="text-info-index">
                            <div class="text-info-icon"><img src="images/icon/icon_20.svg" alt="Кредит под залог ПТС" /></div>
                            <div class="text-info-title">Участник лиги автоломбардов</div>
                        </div>
                        <div class="link-button">
                            <a data-toggle="modal" href="#CallPhone-ver-4">Подать заявку <span class="arrow"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="products-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <h3 class="h1"><span class="h1-span">Принимаем в залог любые </span><span class="yellow-text">транспортные средства</span></h3>
                    <div class="visible-on-wade visible-on-tablet">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 product-template">
                                <div class="element relative" title="займ под птс авто">
                                    <div class="element-img" style="background-image: url(images/product/sedan3.png);"></div>
                                    <div class="element-content-wrapper">
                                        <div class="element-content">
                                            <div class="element-title">Легковые авто</div>
                                            <div class="element-text">Отечественные авто, иномарки</div>
                                            <div class="element-wrap">
                                                <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#specifications">Оценить
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 product-template">
                                <div class="element relative" title="займ под залог грузового автомобиля">
                                    <div class="element-img" style="background-image: url(images/product/truck3.png);"></div>
                                    <div class="element-content-wrapper">
                                        <div class="element-content">
                                            <div class="element-title">Грузовые авто</div>
                                            <div class="element-text">Газели, тягачи, фуры</div>
                                            <div class="element-wrap">
                                                <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#specifications">Оценить
                                                </button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 product-template">
                                <div class="element relative" title="быстрый займ под залог спецтехники">
                                    <div class="element-img" style="background-image: url(images/product/tractor2.png);"></div>
                                    <div class="element-content-wrapper">
                                        <div class="element-content">
                                            <div class="element-title">Спецтехника</div>
                                            <div class="element-text">Трактора, бульдозеры, краны</div>
                                            <div class="element-wrap">
                                                <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#specifications">Оценить
                                                </button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 product-template">
                                <div class="element relative" title="займ под залог птс мотоцикла">
                                    <div class="element-img" style="background-image: url(images/product/motorbike3.png);"></div>
                                    <div class="element-content-wrapper">
                                        <div class="element-content">
                                            <div class="element-title">Мототехника</div>
                                            <div class="element-text">Мотоциклы, квадроциклы</div>
                                            <div class="element-wrap">
                                                <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#specifications">Оценить
                                                </button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="visible-on-mobile">
                        <div class="owl-carousel owl-theme product">
                            <div class="product-template">
                                <div class="element relative">
                                    <div class="element-img" style="background-image: url(images/product/sedan3.png);"></div>
                                    <div class="element-content-wrapper">
                                        <div class="element-content">
                                            <div class="element-title">Легковые авто</div>
                                            <div class="element-text">Отечественные авто, иномарки</div>
                                            <div class="element-wrap">
                                                <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#specifications">Оценить
                                                </button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-template">
                                <div class="element relative">
                                    <div class="element-img" style="background-image: url(images/product/truck3.png);"></div>
                                    <div class="element-content-wrapper">
                                        <div class="element-content">
                                            <div class="element-title">Грузовые авто</div>
                                            <div class="element-text">Газели, тягачи, фуры</div>
                                            <div class="element-wrap">
                                                <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#specifications">Оценить
                                                </button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-template">
                                <div class="element relative">
                                    <div class="element-img" style="background-image: url(images/product/tractor2.png);"></div>
                                    <div class="element-content-wrapper">
                                        <div class="element-content">
                                            <div class="element-title">Спецтехника</div>
                                            <div class="element-text">Трактора, бульдозеры, краны</div>
                                            <div class="element-wrap">
                                                <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#specifications">Оценить
                                                </button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-template">
                                <div class="element relative">
                                    <div class="element-img" style="background-image: url(images/product/motorbike3.png);"></div>
                                    <div class="element-content-wrapper">
                                        <div class="element-content">
                                            <div class="element-title">Мототехника</div>
                                            <div class="element-text">Мотоциклы, квадроциклы</div>
                                            <div class="element-wrap">
                                                <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#specifications">Оценить
                                                </button>

                                            </div>
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
    <section id=requirements-3>
        <div class=container>
            <div class="row">
                <div class="col-md-3 col-sm-4">
                    <div class=image-max-height style="background-image: url(images/bgLight.png); background-size: cover; background-repeat: no-repeat; background-position: center;"></div>
                </div>

                <div class="col-md-9 col-sm-8">
                    <h3 class=h1><span class=h1-span>Требования для получения </span>займа под ПТС <span class="titleFirst3"></span></h3>

                    <ul class="switcher-3 gorizontal-pieces" id=switcher-loan-3>
                        <li class="for_opening_view selected" data-modal-id=paymentsGrafModal id=addClick2 data-show-3=one>
                            <div class=title-switch>К автомобилю</div>
                        </li>
                        <li class="for_opening_view" data-modal-id=paymentsInfo id=detailed data-show-3=two>
                            <div class=title-switch>К заемщику</div>
                        </li>
                        <li class="for_opening_view" data-modal-id=paymentsInfo id=detailed data-show-3=three>
                            <div class=title-switch>К документам</div>
                        </li>
                    </ul>
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
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#CallPhone-ver-4" id="ClickListeter1">Оформить займ</button>
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
    </section>
    <section id="transports-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="h1">Последние оценки</h3>
                </div>
                <div class="col-md-9">
                    <div class="visible-on-wade visible-on-tablet">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>20:46</td>
                                    <td>Мария Е., Челябинск</td>
                                    <td>Nissan Qashqai, 2010</td>
                                    <td><span class="sum">620 000 ₽</span></td>
                                    <td>на рассмотрении</td>
                                </tr>
                                <tr>
                                    <td>20:42</td>
                                    <td>Ася О., Пермь</td>
                                    <td>Suzuki SX4, 2007</td>
                                    <td><span class="sum">320 000 ₽</span></td>
                                    <td>проверка документов</td>
                                </tr>
                                <tr>
                                    <td>20:36</td>
                                    <td>Филипп Ю., Екатеринбург</td>
                                    <td>Mazda CX-7, 2008</td>
                                    <td><span class="sum">440 000 ₽</span></td>
                                    <td>полная заявка</td>
                                </tr>
                                <tr>
                                    <td>20:31</td>
                                    <td>Любовь Я., Магнитогорск</td>
                                    <td>ВАЗ 2114, 2009</td>
                                    <td><span class="sum">53 000 ₽</span></td>
                                    <td>на рассмотрении</td>
                                </tr>
                                <tr>
                                    <td>20:46</td>
                                    <td>Мария Е., Курган</td>
                                    <td>Nissan Qashqai, 2010</td>
                                    <td><span class="sum">620 000 ₽</span></td>
                                    <td>на рассмотрении</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="visible-on-mobile request-history">
                        <div class="panel request-history-item">
                            <div class="panel-body">
                                <div class="float-right">20:46</div>
                                <div class="text-bold">Nissan Qashqai, 2010 г.</div>
                                <div class="text-bold">620 000 ₽</div>
                                <div>Мария Е., Санкт-Петербург</div>
                                <div class="status badge badge-primary"> на рассмотрении</div>
                            </div>
                        </div>

                        <div class="panel request-history-item">
                            <div class="panel-body">
                                <div class="float-right">20:42</div>
                                <div class="text-bold">Suzuki SX4, 2007 г.</div>
                                <div class="text-bold">320 000 ₽</div>
                                <div>Ася О., Москва</div>
                                <div class="status badge badge-primary">проверка документов</div>
                            </div>
                        </div>

                        <div class="panel request-history-item">
                            <div class="panel-body">
                                <div class="float-right">20:36</div>
                                <div class="text-bold">Mazda CX-7, 2008 г.</div>
                                <div class="text-bold">440 000 ₽</div>
                                <div>Филипп Ю., Екатеринбург</div>
                                <div class="status badge badge-primary">полная заявка</div>
                            </div>
                        </div>

                        <div class="panel request-history-item">
                            <div class="panel-body">
                                <div class="float-right">20:31</div>
                                <div class="text-bold">ВАЗ 2114, 2009 г.</div>
                                <div class="text-bold">53 000 ₽</div>
                                <div>Любовь Я., Ставрополь</div>
                                <div class="status badge badge-primary">на рассмотрении</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bg-grey-none-radius">
                        <h3>Подайте заявку на получение денежных средств</h3>
                        <p>Время заполения заявки 5 минут!</p>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#CallPhone-ver-4">
                            Подать заявку
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="repay-a-loan-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <h3 class="h1"><span>Погашение</span> <span class="yellow-text">автозайма</span></h3>
                    <div class="row">
                        <div class="col-md-3 col-sm-6 m-b-30">
                            <div class="resource-bg-grey icon icon-5">
                                <div class="resource-title">Наличными средствами</div>
                                <div class="resource-text">В кассах компании, офисах или магазинах</div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 m-b-30">
                            <div class="resource-bg-grey icon icon-6">
                                <div class="resource-title">Электронными кошельками</div>
                                <div class="resource-text">Через платежные сервисы наших партнеров</div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 m-b-30">
                            <div class="resource-bg-grey icon icon-7">
                                <div class="resource-title">Банковской картой</div>
                                <div class="resource-text">Безналичный перевод в личном кабинете клиента</div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 m-b-30">
                            <div class="resource-bg-grey icon icon-8">
                                <div class="resource-title">Через терминалы</div>
                                <div class="resource-text">Мы сотрудничаем с многими банками</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="faq">
        <div class="container">
            <div class="row">
                <div class="col-md-11 col-sm-12">
                    <h3 class="h1"><span class="h1-span">Ответы на часто </span>задаваемые вопросы</h3>

                    <div class="accordion" id="accordion-requirments">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="text/babel">
        let data = [
        [{question: 'Можно погасить займ, находясь в другом городе?'},
            {answer: 'Человек может взять займ под залог ПТС онлайн, а затем погасить долг, находясь в другом городе. Нет необходимости ехать в наш офис. Можно погасить долг онлайн, воспользовавшись удобным для клиента способом. '},
            {numId: '0'},
            {numIdText: 'Zero'}],

        [{question: 'Могу ли я получить одобрение займа, не приезжая в офис?'},
            {answer: 'Мы выдаём займы под залог ПТС без выходных в Челябинске. Можем одобрить кредит дистанционно. Вся процедура будет проходить в режиме онлайн.'},
            {numId: '1'},
            {numIdText: 'One'}],

        [{question: 'Я купил автомобиль, но пока не оформил его в ГиБДД. Ваш ломбард выдает займы без регистрации транспортного средства?'},
            {answer: 'Наш автоломбард готовы выдать займ под ПТС на карту. Предоставлять СТС не обязательно. Достаточно будет генеральной доверенности или ДКП для одобрения заявки.'},
            {numId: '2'},
            {numIdText: 'Two'}],
    ]
    ReactDOM.render(
        <div>
            {data.map((el,index) => {
                return (
                    <div key={index} className="card item">
                        <a className="collapser" href="#" data-toggle="collapse"
                           data-target={`#collapse-requirments-${el[2].numId}`} aria-expanded="false"
                           aria-controls={`collapse${el[3].numIdText}`}>
                            <div className="card-header question" id={`heading${el[3].numIdText}`}>
                                <div className="quation-item">{el[0].question}</div>
                                <div className="arrow down-arrow"></div>
                            </div>
                        </a>
                        <div id={`collapse-requirments-${el[2].numId}`} className="collapse answer"
                             aria-labelledby={`heading${el[3].numIdText}`}
                             data-parent="#accordion-requirments">
                            <div className="card-body">
                                <p>{el[1].answer}</p>
                            </div>
                        </div>
                    </div>
                )
            })}
        </div>
        ,
        document.getElementById('accordion-requirments')
    )
</script>
    <section id="reviews">
        <div class="container">
            <div class="reviews-2-bg">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <h3 class="h1" style="text-align: center">Что говорят о нас</h3>

                        <div class="owl-carousel owl-theme reviews-2 whiteColor">
                            <article class="review-bg-blue">
                                <div class="review-text">Так сложились обстоятельства, что срочно нужны были деньги. В банке – долго. В обычных конторах высокий процент берут, что очень дорого. Решила взять займ под залог ПТС, работают в Челябинске круглосуточно!

                                </div>
                                <div class="review-person">
                                    <div class="review-name">Маргарита</div>
                                </div>
                            </article>
                            <article class="review-bg-blue">
                                <div class="review-text">Попробовала взять займ онлайн под залог ПТС – нужны были деньги на карту. Условия, которые мне назвала девушка по телефону, мне подошли. Обговорили детали, заключили договор,и я получила свои деньги. Кто был в такой же ситуации, меня поймёт – звоните, не раздумывая!

                                </div>
                                <div class="review-person">
                                    <div class="review-name">Оксана</div>
                                </div>
                            </article>
                            <article class="review-bg-blue">
                                <div class="review-text">Отлично, всё быстро оформили. Ставки вменяемые. На всё про всё ушло полчаса. Есть досрочное погашение! Попал на акцию 1% за первую неделю. Брал автозайм под ПТС при котором автомобиль остаётся у меня на весь срок выплат.

                                </div>
                                <div class="review-person">
                                    <div class="review-name">Василий</div>
                                </div>
                            </article>
                            <article class="review-bg-blue">
                                <div class="review-text">Для меня это лучший вариант. Машина остаётся у меня. Займ под залог ПТС оформили быстро. Процентная ставка приемлемая. Если что, буду обращаться ещё. Какого-то негатива я не встретил. Теперь спокойно занимаюсь своими делами.

                                </div>
                                <div class="review-person">
                                    <div class="review-name">Фёдор</div>
                                </div>
                            </article>
                            <article class="review-bg-blue">
                                <div class="review-text">Кто хочет взять займ под залог ПТС – обращайтесь сюда. Реально не первый раз выручают. Если что-то не понятно, всегда звоню их специалисту, консультируют грамотно. Главное, не берите, если не сможете выплатить, а так – всё чётко у ребят.

                                </div>
                                <div class="review-person">
                                    <div class="review-name">Александр</div>
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

                    <div id="map" class="ofices visible-on-wade visible-on-tablet">
                        <form class="map_filter visible-on-wade visible-on-tablet" action="#">
                            <div id="addresses" class="mapOptions__addresses gradient" itemscope itemtype="http://schema.org/PostalAddress">
                                <div class="map-text">
                                    <a href="tel:<?= $tel ?>"><?= $phone ?></a><br>
                                </div>
                                <div id="rootMap">
                                </div>
                            </div>
                        </form>
                    </div>
                    <script type="text/babel">
                        const dataLinks = [
                                         {
                                          "undefined": "Курган улица Гоголя, 83",
                                          "Город": "Курган",
                                          "Адреса": "улица Гоголя, 83",
                                          "Latitude": 55.441767,
                                          "Longitude": 65.34356199999999,
                                          "Index": 640000
                                         },
                                         {
                                          "undefined": "Шадринск Комсомольская улица, 24",
                                          "Город": "Шадринск",
                                          "Адреса": "Комсомольская улица, 24",
                                          "Latitude": 56.08635409999999,
                                          "Longitude": 63.63078299999999,
                                          "Index": 641884
                                         },
                                         {
                                          "undefined": "Асбест Советская улица, 22",
                                          "Город": "Асбест",
                                          "Адреса": "Советская улица, 22",
                                          "Latitude": 57.0056278,
                                          "Longitude": 61.45929439999999,
                                          "Index": 624269
                                         },
                                         {
                                          "undefined": "Берёзовский улица Красных Героев, 2Д",
                                          "Город": "Берёзовский",
                                          "Адреса": "улица Красных Героев, 2Д",
                                          "Latitude": 56.90941059999999,
                                          "Longitude": 60.7991878,
                                          "Index": 623700
                                         },
                                         {
                                          "undefined": "Верхняя Пышма улица Александра Козицына, 8",
                                          "Город": "Верхняя Пышма",
                                          "Адреса": "улица Александра Козицына, 8",
                                          "Latitude": 56.96638340000001,
                                          "Longitude": 60.582465,
                                          "Index": 624091
                                         },
                                         {
                                          "undefined": "Верхняя Салда улица Сабурова, 6",
                                          "Город": "Верхняя Салда",
                                          "Адреса": "улица Сабурова, 6",
                                          "Latitude": 58.04744589999999,
                                          "Longitude": 60.5598767,
                                          "Index": 624760
                                         },
                                         {
                                          "undefined": "Екатеринбург ул. Вайнера, 10",
                                          "Город": "Екатеринбург",
                                          "Адреса": "ул. Вайнера, 10",
                                          "Latitude": 56.82888879999999,
                                          "Longitude": 60.59976409999999,
                                          "Index": 620014
                                         },
                                         {
                                          "undefined": "Каменск-Уральский улица Ленина, 28",
                                          "Город": "Каменск-Уральский",
                                          "Адреса": "улица Ленина, 28",
                                          "Latitude": 56.4151855,
                                          "Longitude": 61.9202892,
                                          "Index": 623402
                                         },
                                         {
                                          "undefined": "Качканар улица Свердлова, 7Б",
                                          "Город": "Качканар",
                                          "Адреса": "улица Свердлова, 7Б",
                                          "Latitude": 58.7046295,
                                          "Longitude": 59.4821164,
                                          "Index": 624350
                                         },
                                         {
                                          "undefined": "Краснотурьинск улица Ленина, 25",
                                          "Город": "Краснотурьинск",
                                          "Адреса": "улица Ленина, 25",
                                          "Latitude": 59.7640196,
                                          "Longitude": 60.19643199999999,
                                          "Index": 624440
                                         },
                                         {
                                          "undefined": "Красноуфимск Советская улица, 28",
                                          "Город": "Красноуфимск",
                                          "Адреса": "Советская улица, 28",
                                          "Latitude": 56.6172025,
                                          "Longitude": 57.769122,
                                          "Index": 623300
                                         },
                                         {
                                          "undefined": "Кушва улица Строителей, 13",
                                          "Город": "Кушва",
                                          "Адреса": "улица Строителей, 13",
                                          "Latitude": 58.28282309999999,
                                          "Longitude": 59.7662353,
                                          "Index": 624301
                                         },
                                         {
                                          "undefined": "Лесной Коммунистический проспект, 23",
                                          "Город": "Лесной",
                                          "Адреса": "Коммунистический проспект, 23",
                                          "Latitude": 58.63389639999999,
                                          "Longitude": 59.79000019999999,
                                          "Index": 624200
                                         },
                                         {
                                          "undefined": "Невьянск Октябрьский проспект, 7",
                                          "Город": "Невьянск",
                                          "Адреса": "Октябрьский проспект, 7",
                                          "Latitude": 57.491843,
                                          "Longitude": 60.2190403,
                                          "Index": 624190
                                         },
                                         {
                                          "undefined": "Нижний Тагил проспект Ленина, 40",
                                          "Город": "Нижний Тагил",
                                          "Адреса": "проспект Ленина, 40",
                                          "Latitude": 57.9089,
                                          "Longitude": 59.974627,
                                          "Index": 622034
                                         },
                                         {
                                          "undefined": "Нижняя Тура улица Машиностроителей, 9",
                                          "Город": "Нижняя Тура",
                                          "Адреса": "улица Машиностроителей, 9",
                                          "Latitude": 58.63173690000001,
                                          "Longitude": 59.8572728,
                                          "Index": 624222
                                         },
                                         {
                                          "undefined": "Новоуральск улица Ленина, 56",
                                          "Город": "Новоуральск",
                                          "Адреса": "улица Ленина, 56",
                                          "Latitude": 57.24695120000001,
                                          "Longitude": 60.09420900000001,
                                          "Index": 624130
                                         },
                                         {
                                          "undefined": "Первоуральск улица Ватутина, 38",
                                          "Город": "Первоуральск",
                                          "Адреса": "улица Ватутина, 38",
                                          "Latitude": 56.9037763,
                                          "Longitude": 59.9424848,
                                          "Index": 623104
                                         },
                                         {
                                          "undefined": "Полевской Коммунистическая улица, 2",
                                          "Город": "Полевской",
                                          "Адреса": "Коммунистическая улица, 2",
                                          "Latitude": 56.49591419999999,
                                          "Longitude": 60.2380557,
                                          "Index": 623388
                                         },
                                         {
                                          "undefined": "Ревда улица Максима Горького, 21",
                                          "Город": "Ревда",
                                          "Адреса": "улица Максима Горького, 21",
                                          "Latitude": 56.799093,
                                          "Longitude": 59.90828550000001,
                                          "Index": 623286
                                         },
                                         {
                                          "undefined": "Реж улица Ленина, 7",
                                          "Город": "Реж",
                                          "Адреса": "улица Ленина, 7",
                                          "Latitude": 57.3727025,
                                          "Longitude": 61.3897264,
                                          "Index": 623750
                                         },
                                         {
                                          "undefined": "Североуральск Молодёжная улица, 11",
                                          "Город": "Североуральск",
                                          "Адреса": "Молодёжная улица, 11",
                                          "Latitude": 60.1515169,
                                          "Longitude": 59.9505992,
                                          "Index": 624480
                                         },
                                         {
                                          "undefined": "Серов улица Заславского, 35",
                                          "Город": "Серов",
                                          "Адреса": "улица Заславского, 35",
                                          "Latitude": 59.609073,
                                          "Longitude": 60.5741321,
                                          "Index": 624992
                                         },
                                         {
                                          "undefined": "Ишим улица Карла Маркса, 31",
                                          "Город": "Ишим",
                                          "Адреса": "улица Карла Маркса, 31",
                                          "Latitude": 56.1106415,
                                          "Longitude": 69.4828845,
                                          "Index": 627756
                                         },
                                         {
                                          "undefined": "Тобольск Октябрьская улица, 4",
                                          "Город": "Тобольск",
                                          "Адреса": "Октябрьская улица, 4",
                                          "Latitude": 58.2021209,
                                          "Longitude": 68.2583477,
                                          "Index": 626152
                                         },
                                         {
                                          "undefined": "Тюмень Первомайская улица, 11",
                                          "Город": "Тюмень",
                                          "Адреса": "Первомайская улица, 11",
                                          "Latitude": 57.15386549999999,
                                          "Longitude": 65.5368857,
                                          "Index": 625000
                                         },
                                         {
                                          "undefined": "Ялуторовск улица Ленина, 50",
                                          "Город": "Ялуторовск",
                                          "Адреса": "улица Ленина, 50",
                                          "Latitude": 56.6550583,
                                          "Longitude": 66.310924,
                                          "Index": 627014
                                         },
                                         {
                                          "undefined": "Когалым улица Мира, 14",
                                          "Город": "Когалым",
                                          "Адреса": "улица Мира, 14",
                                          "Latitude": 62.26354689999999,
                                          "Longitude": 74.4840444,
                                          "Index": 628485
                                         },
                                         {
                                          "undefined": "Лангепас улица Ленина, 20",
                                          "Город": "Лангепас",
                                          "Адреса": "улица Ленина, 20",
                                          "Latitude": 61.2526626,
                                          "Longitude": 75.1727356,
                                          "Index": 628671
                                         },
                                         {
                                          "undefined": "Мегион Заречная улица, 15К2",
                                          "Город": "Мегион",
                                          "Адреса": "Заречная улица, 15К2",
                                          "Latitude": 61.03291789999999,
                                          "Longitude": 76.1002951,
                                          "Index": 628684
                                         },
                                         {
                                          "undefined": "Нефтеюганск 3-й микрорайон, 19",
                                          "Город": "Нефтеюганск",
                                          "Адреса": "3-й микрорайон, 19",
                                          "Latitude": 61.0898545,
                                          "Longitude": 72.6161337,
                                          "Index": 626152
                                         },
                                         {
                                          "undefined": "Нижневартовск улица Ленина, 9к1",
                                          "Город": "Нижневартовск",
                                          "Адреса": "улица Ленина, 9к1",
                                          "Latitude": 60.9394259,
                                          "Longitude": 76.5425542,
                                          "Index": 628609
                                         },
                                         {
                                          "undefined": "Нягань 4-й микрорайон, 15А",
                                          "Город": "Нягань",
                                          "Адреса": "4-й микрорайон, 15А",
                                          "Latitude": 62.14091759999999,
                                          "Longitude": 65.431917,
                                          "Index": 628107
                                         },
                                         {
                                          "undefined": "Пыть-Ях 2-й микрорайон, 28",
                                          "Город": "Пыть-Ях",
                                          "Адреса": "2-й микрорайон, 28",
                                          "Latitude": 60.7273587,
                                          "Longitude": 72.8211905,
                                          "Index": 628107
                                         },
                                         {
                                          "undefined": "Радужный 1-й микрорайон, 45",
                                          "Город": "Радужный",
                                          "Адреса": "1-й микрорайон, 45",
                                          "Latitude": 61.2526626,
                                          "Longitude": 63.33543169999999,
                                          "Index": 456300
                                         },
                                         {
                                          "undefined": "Сургут проспект Ленина, 34",
                                          "Город": "Сургут",
                                          "Адреса": "проспект Ленина, 34",
                                          "Latitude": 61.253804,
                                          "Longitude": 73.3999311,
                                          "Index": 628417
                                         },
                                         {
                                          "undefined": "Урай 2-й микрорайон, 61",
                                          "Город": "Урай",
                                          "Адреса": "2-й микрорайон, 61",
                                          "Latitude": 60.12543359999999,
                                          "Longitude": 64.8066207,
                                          "Index": 456200
                                         },
                                         {
                                          "undefined": "Ханты-Мансийск улица Энгельса, 1",
                                          "Город": "Ханты-Мансийск",
                                          "Адреса": "улица Энгельса, 1",
                                          "Latitude": 61.0030758,
                                          "Longitude": 69.0176164,
                                          "Index": 628011
                                         },
                                         {
                                          "undefined": "Югорск улица 40 лет Победы, 6",
                                          "Город": "Югорск",
                                          "Адреса": "улица 40 лет Победы, 6",
                                          "Latitude": 61.3134687,
                                          "Longitude": 63.33543169999999,
                                          "Index": 628260
                                         },
                                         {
                                          "undefined": "Верхний Уфалей улица Маяковского, 16",
                                          "Город": "Верхний Уфалей",
                                          "Адреса": "улица Маяковского, 16",
                                          "Latitude": 56.0339426,
                                          "Longitude": 60.261945,
                                          "Index": 456804
                                         },
                                         {
                                          "undefined": "Златоуст улица Ленина, 3",
                                          "Город": "Златоуст",
                                          "Адреса": "улица Ленина, 3",
                                          "Latitude": 55.1729462,
                                          "Longitude": 59.6695916,
                                          "Index": 456200
                                         },
                                         {
                                          "undefined": "Копейск проспект Славы, 6",
                                          "Город": "Копейск",
                                          "Адреса": "проспект Славы, 6",
                                          "Latitude": 55.11474980000001,
                                          "Longitude": 61.610398,
                                          "Index": 456625
                                         },
                                         {
                                          "undefined": "Магнитогорск улица имени Газеты Правда, 16",
                                          "Город": "Магнитогорск",
                                          "Адреса": "улица имени Газеты Правда, 16",
                                          "Latitude": 53.4071882,
                                          "Longitude": 58.96299339999999,
                                          "Index": 455026
                                         },
                                         {
                                          "undefined": "Миасс проспект Автозаводцев, 54",
                                          "Город": "Миасс",
                                          "Адреса": "проспект Автозаводцев, 54",
                                          "Latitude": 55.0472467,
                                          "Longitude": 60.10675339999999,
                                          "Index": 456300
                                         },
                                         {
                                          "undefined": "Озёрск Уральская улица, 16",
                                          "Город": "Озёрск",
                                          "Адреса": "Уральская улица, 16",
                                          "Latitude": 55.77206200000001,
                                          "Longitude": 60.7135409,
                                          "Index": 456780
                                         },
                                         {
                                          "undefined": "Сатка улица Кирова, 12",
                                          "Город": "Сатка",
                                          "Адреса": "улица Кирова, 12",
                                          "Latitude": 55.0471282,
                                          "Longitude": 58.97119660000001,
                                          "Index": 456912
                                         },
                                         {
                                          "undefined": "Снежинск улица Ленина, 34",
                                          "Город": "Снежинск",
                                          "Адреса": "улица Ленина, 34",
                                          "Latitude": 56.0855089,
                                          "Longitude": 60.73088379999999,
                                          "Index": 456772
                                         },
                                         {
                                          "undefined": "Троицк улица имени В.И. Ленина, 69",
                                          "Город": "Троицк",
                                          "Адреса": "улица имени В.И. Ленина, 69",
                                          "Latitude": 55.4903205,
                                          "Longitude": 37.3032108,
                                          "Index": 629735
                                         },
                                         {
                                          "undefined": "Усть-Катав улица Ленина, 43",
                                          "Город": "Усть-Катав",
                                          "Адреса": "улица Ленина, 43",
                                          "Latitude": 54.9301824,
                                          "Longitude": 58.1725033,
                                          "Index": 456043
                                         },
                                         {
                                          "undefined": "Челябинск проспект Ленина, 58",
                                          "Город": "Челябинск",
                                          "Адреса": "проспект Ленина, 58",
                                          "Latitude": 55.16039499999999,
                                          "Longitude": 61.399218,
                                          "Index": 454009
                                         },
                                         {
                                          "undefined": "Губкинский 5-й микрорайон, 11",
                                          "Город": "Губкинский",
                                          "Адреса": "5-й микрорайон, 11",
                                          "Latitude": 64.4379795,
                                          "Longitude": 76.488535,
                                          "Index": 629830
                                         },
                                         {
                                          "undefined": "Надым Заводская улица, 5",
                                          "Город": "Надым",
                                          "Адреса": "Заводская улица, 5",
                                          "Latitude": 65.5283484,
                                          "Longitude": 72.5469244,
                                          "Index": 629735
                                         },
                                         {
                                          "undefined": "Новый Уренгой Ленинградский проспект, 9",
                                          "Город": "Новый Уренгой",
                                          "Адреса": "Ленинградский проспект, 9",
                                          "Latitude": 66.0843517,
                                          "Longitude": 76.67919069999999,
                                          "Index": 629300
                                         },
                                         {
                                          "undefined": "Ноябрьск улица Ленина, 60",
                                          "Город": "Ноябрьск",
                                          "Адреса": "улица Ленина, 60",
                                          "Latitude": 63.2012811,
                                          "Longitude": 75.453986,
                                          "Index": 629807
                                         },
                                         {
                                          "undefined": "Салехард улица Чубынина, 12",
                                          "Город": "Салехард",
                                          "Адреса": "улица Чубынина, 12",
                                          "Latitude": 66.53017969999999,
                                          "Longitude": 66.615596,
                                          "Index": 629008
                                         }
                                        ]

                        let dataА = dataLinks.filter(el => el['Город'][0] === 'А')
                        let dataБ = dataLinks.filter(el => el['Город'][0] === 'Б')
                        let dataВ = dataLinks.filter(el => el['Город'][0] === 'В')
                        let dataГ = dataLinks.filter(el => el['Город'][0] === 'Г')
                        let dataЕ = dataLinks.filter(el => el['Город'][0] === 'Е')
                        let dataЗ = dataLinks.filter(el => el['Город'][0] === 'З')
                        let dataИ = dataLinks.filter(el => el['Город'][0] === 'И')
                        let dataК = dataLinks.filter(el => el['Город'][0] === 'К')
                        let dataЛ = dataLinks.filter(el => el['Город'][0] === 'Л')
                        let dataМ = dataLinks.filter(el => el['Город'][0] === 'М')
                        let dataН = dataLinks.filter(el => el['Город'][0] === 'Н')
                        let dataО = dataLinks.filter(el => el['Город'][0] === 'О')
                        let dataП = dataLinks.filter(el => el['Город'][0] === 'П')
                        let dataР = dataLinks.filter(el => el['Город'][0] === 'Р')
                        let dataС = dataLinks.filter(el => el['Город'][0] === 'С')
                        let dataТ = dataLinks.filter(el => el['Город'][0] === 'Т')
                        let dataУ = dataLinks.filter(el => el['Город'][0] === 'У')
                        let dataХ = dataLinks.filter(el => el['Город'][0] === 'Х')
                        let dataЧ = dataLinks.filter(el => el['Город'][0] === 'Ч')
                        let dataШ = dataLinks.filter(el => el['Город'][0] === 'Ш')
                        let dataЮ = dataLinks.filter(el => el['Город'][0] === 'Ю')
                        let dataЯ = dataLinks.filter(el => el['Город'][0] === 'Я')

                        ReactDOM.render(
                            <ul
                                onClick={() => getTitle(el['undefined'], el['Поддомен'])}
                                className="cities-ul hoverClass"
                                aria-label="Close"
                                itemScope="itemscope"
                                itemType="http://schema.org/SiteNavigationElement"
                            >
                            {dataА.map(el => {
                                return (
                                    <li className="cities-li" key={el['Город']}>
                                        <p className="cities-a" itemProp="url"> {el['Город']}</p>
                                    </li>
                                )
                            })}
                            </ul>,
                            document.getElementById('rootА')
                        );

                        ReactDOM.render(
                            <div>
                                {dataLinks.map((obj, index) => {
                                    return (
                                        <a
                                            key={index}
                                            id={obj['Город']}
                                            itemProp="address" itemScope itemType="http://schema.org/PostalAddress"
                                            href="#"
                                            data-coordinate={obj['Longitude'] + ',' + obj['Latitude']}
                                            data-address={obj['Index'] + ' ' + obj['Город'] + ', ' + obj['Адреса']}
                                            data-name={obj['Адреса']}
                                            data-content="режим работы: 9:00-19:00"
                                            title=""
                                            className="mapOptions__addresses_a"
                                        >
                                            <span itemProp="postalCode" className="addresses-text-bold">{obj['Index']}, г. {obj['Город']}</span><br/>
                                            <span itemProp="streetAddress" className="addresses-text-bold"> {obj['Адреса']}</span><br/>
                                            режим работы: 9:00-19:00
                                        </a>
                                    )
                                })}
                            </div>,
                            document.getElementById('rootMap')
                        )
                    </script>
                    <script>
                        let adressTitle = localStorage.getItem("city")

                        let newLinkAnother
                        let newAdress

                        function getTitle(city, newLink, adress) {
                            console.log(adress)
                            newAdress = adress
                            adressTitle = city

                            newLinkAnother = newLink
                            console.log(city, newLink)
                            document.querySelector('.titleFirst1').innerHTML = `${city}`
                            document.querySelector('.titleFirst2').innerHTML = `${city}`
                            document.querySelector('.titleFirst3').innerHTML = `${city}`
                            localStorage.setItem('city', city);
                            //work
                            var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + `?${newLink}`;
                            window.history.pushState({
                                path: newurl
                            }, '', newurl);
                            //work

                            localStorage.setItem('link', newLink ? newLink : '')

                            window.location.reload()
                            localStorage.setItem('adress', newAdress ? newAdress : 'улица Ленинская Слобода, 19, 3 этаж, офис 3,034 (БЦ Омега Плаза)')

                            document.querySelector('.cities-wrapper').style.display = 'none'
                        }
                    </script>
                    <script>
                        setTimeout(() => {
                            const clickChelbinsk = document.querySelector("#Челябинск")
                            clickChelbinsk.click()
                        }, 1500)
                    </script>
                    <div class="visible-on-mobile">
                        <div class="region_address">
                            <div class="row all_address">
                                <div class="col-md-12">
                                    <div class="city-wrapper city-wrapper-main">
                                        <p>Для отображения адресов офисов выберете регион</p>
                                        <div class="city-text btn btn-danger"> Краснодар</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <input id="init-map-subdomain" type="hidden" value="37.484137,55.642164" name="_token">
    </section>

    <footer id="footer-3">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="col-md-12">
                        <div class="footer-logo inline "><a href="#"><img style="width: 100px" src="images/logoKredit.png" alt="Кредит под залог ПТСе" /></a>
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
                                    <a href="#" target="_blank" rel="nofollow" class="soc-inst"></a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-md-7">
                    <div class="row">


                        <div class="col-md-4 col-sm-6">
                            <ul class="footer-li bold">
                                <li><a href="pod-gruzovogo-avtomobilia.php">Грузовые авто</a></li>
                                <li><a href="pod-specztekhniku.php">Спецтехника</a></li>


                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <ul class="footer-li bold">
                                <li><a href="dengi-pod-motoczikl.php">Мототехника</a></li>
                                <li><a href="dlja-ip-pod-avto.php">Юр. Лица</a></li>
                                <li><a href="pod-pts.php">Займ</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-md-12">
                    <div class="footer-bottom">
                        <p>«Drive Credit» не является финансовым учреждением, банком или МФО. Сайт
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

            <div class="off-canvas-header"><a class="off-canvas-close" href="#"><img src="images/close-white.svg" alt="Кредит под залог ПТС"></a>
            </div>

            <div class="off-canvas-grey">
                <div class="off-canvas-content modal-dialog-centered">
                    <div class="row">

                        <div class="col-md-6">
                            <h2 style="position:relative;margin-left: 52px;">
                            </h2>
                            <ul class="off-canvas-li">
                                <li><a href="pod-gruzovogo-avtomobilia.phpa.php">Грузовые авто</a></li>
                                <li><a href="pod-specztekhniku.php">Спецтехника</a></li>
                                <li><a href="dengi-pod-motoczikl.php">Мототехника</a></li>
                                <li><a href="dlja-ip-pod-avto.php">Юр. Лица</a></li>
                                <li><a href="pod-pts.php">Займ</a></li>
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
            <div class="off-canvas-header"><a class="off-canvas-close" href="#"><img src="images/close-white.svg" alt="Кредит под залог ПТС"></a>
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
                                <li><a href="pod-gruzovogo-avtomobilia.phpa.php">Грузовые авто</a></li>
                                <li><a href="pod-specztekhniku.php">Спецтехника</a></li>
                                <li><a href="dengi-pod-motoczikl.php">Мототехника</a></li>
                                <li><a href="dlja-ip-pod-avto.php">Юр. Лица</a></li>
                                <li><a href="pod-pts.php">Займ</a></li>
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
                    <p>Для п��лучения результата оставьте контактные данные</p>
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

                    <div class="letter">И</div>
                    <div id="rootИ"></div>

                    <div class="letter">К</div>
                    <div id="rootК"></div>

                    <div class="letter">Л</div>
                    <div id="rootЛ"></div>

                </div>

                <div class="col-sm-12 col-md-3">
                    <div class="letter">М</div>
                    <div id="rootМ"></div>
                    <div class="letter">Н</div>
                    <div id="rootН"></div>
                    <div class="letter">О</div>
                    <div id="rootО"></div>

                    <div class="letter">П</div>
                    <div id="rootП"></div>

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

                    <div class="letter">Ч</div>
                    <div id="rootЧ"></div>

                    <div class="letter">Ш</div>
                    <div id="rootШ"></div>

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