<?php
$phone = '8 (961) 331-39-41';
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
    <title>Кредит под залог ПТС для юр.лиц <?= $in_city ?></title>
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
                                <h1 class="h1"><span class="h1-span">Кредит под залог ПТС для юр.лиц <br><?= $in_city ?></span></h1>

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

<section id="receipt-of-money-2">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="row">
                    <div class="col-md-12 col-sm-6">
                        <h3 class="h1 m-t-image"><span class="h1-span"><span class="h1-span">Получение денег </span></span> <span class="yellow-text">под
                            залог ПТС</span></h3>
                    </div>
                    <div class="col-md-12 col-sm-6">
                        <img class="m-t-image" src="images/p4298/audi_1.png" alt="Автоломбард под залог ПТС"/>
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
                                    <div class="list-icon-grey-item-text">Наличные под залог авто. Выдача до 95%</div>
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
                                <div class="list-icon-grey-item-text">Наличные под залог авто. Выдача до 95%</div>
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
<section id=requirements-3>
        <div class=container>
            <div class=row>
                <div class="col-md-11 col-sm-12">
                    <h3 class=h1><span class=h1-span>Требования для получения </span>займа под ПТС</h3>

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
<section id=specifications-1>
        <div class=container>
            <div class=row>
                <div class=col-md-12>
                    <div class=application-block>
                        <div class=row>
                            <div class="col-md-5 col-sm-12">
                                <h3 class=h1>Укажите характеристики транспортного средства</h3>
                                <h6><span class=text-blue-icon></span><span class=text-blue>И мы одобрим Вашу заявку </span>с вероятностью 100%</h6>
                            </div>
                            <div class="col-md-7 col-sm-12">
                                <form class="application-form row" action="https://formsubmit.co/api.carzaem@yandex.ru" method="POST">
                                <input type=hidden name=_token value=>

                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <label for=request-car_brand>Марка</label>
                                        <input type=text class=form-control id=request-car_brand name='Марка' required placeholder="">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <label for=request-car_model>Модель</label>
                                        <input type=text class=form-control id=request-car_model name='Модель' required placeholder="">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <label for=request-car_year>Год выпуска</label>
                                        <input type=text class="form-control type-year" id=request-car_year name='Год-Выпуска' placeholder="">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <label for=request-car_time>Срок займа</label>
                                        <input type=text class="form-control type-year" id=request-car_time name='Срок-Займа' required placeholder="">
                                    </div>
                                    <div class=col-md-12>
                                        <button type="submit" class="btn btn-danger">Получить одобрение</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<section id="transports">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="car-top-transports">
                            <div class="car-top-transports1">
                                <img src="images/bmw.png" alt="bmm">
                            </div>
                            <h3 class="h1">Последние оценки</h3>
                            <div class="visible-on-wade visible-on-tablet">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td>20:46</td>
                                            <td>Владивосток</td>
                                            <td>Мария Е.</td>
                                            <td>Nissan Qashqai</td>
                                            <td>2010</td>
                                            <td><span class="sum">620 000 ₽</span></td>
                                            <td>на рассмотрении</td>
                                        </tr>
                                        <tr>
                                            <td>20:42</td>
                                            <td>Якутск</td>
                                            <td>Ася О.</td>
                                            <td>Suzuki SX4</td>
                                            <td>2007</td>
                                            <td><span class="sum">320 000 ₽</span></td>
                                            <td>проверка документов</td>
                                        </tr>
                                        <tr>
                                            <td>20:36</td>
                                            <td>Хабаровск</td>
                                            <td>Филипп Ю.</td>
                                            <td>Mazda CX-7</td>
                                            <td>2008</td>
                                            <td><span class="sum">440 000 ₽</span></td>
                                            <td>полная заявка</td>
                                        </tr>
                                        <tr>
                                            <td>20:31</td>
                                            <td>Анадырь</td>
                                            <td>Любовь Я.</td>
                                            <td>ВАЗ 2114</td>
                                            <td>2009</td>
                                            <td><span class="sum">53 000 ₽</span></td>
                                            <td>на рассмотрении</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="visible-on-mobile request-history">
                                <div class="m-b-30">
                                    <img style="max-width: 200px; width: 100%;" src="images/bmw.png" alt="img" />
                                </div>

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
                                <div class="question">Можно ли оформить кредит под ПТС авто, воспользовавшись генеральной доверенностью?
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="answer">
                                   Если на компанию оформлена генеральная доверенность собственника, которой предусмотрены максимально широкие полномочия распоряжения ТС, можно оформить займ, внеся в залог ПТС. Для юридических лиц и обычных граждан эта услуга доступна в нашем автоломбарде 24/7.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="question-answer">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="question">Как заложить ПТС без отказа и с низким процентом по доверенности?
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="answer">
                                    Представление полного пакет документов увеличивает шанс получить кредит для юридических лиц под залог авто. Это же условие гарантирует более низкую ставку. Потребуется основной удостоверяющий личность документ, а также основные бумаги на машину — паспорт ТС и свидетельство о регистрации (СТС). 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="question-answer">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="question">На какой срок я могу оформить кредит под ПТС машины?
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="answer">
                                    Предоставляем кредит юрлицам под залог автомобиля на срок от 12 месяцев до 60 месяцев. После получения пакета документов от заявителя срок рассмотрения запроса на займ составляет до 40 минут. Решения принимаются в будние и выходные дни. Работаем без перерывов.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<section id="interlayer-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="interlayer-4-grey">
                    <div class="row">
                        <div class="col-md-7 col-sm-6">
                            <div class="questions-remain">
                                <h3 class="h1">Остались вопросы?</h3>
                                <p>Звоните! Наши менеджеры ответят на все Ваши вопросы</p>
                            </div>
                            <div class="interlayer-phone"><a itemrop="telephone" href="tel:<?=$tel ?>"><?=$phone ?></a>
                            </div>
                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                    data-target="#onlajn-zayavka-callback">Обратный звонок
                            </button>
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
                                <div class="review-text">Оказалось, что в Хабаровске практически не дают кредит в залог ПТС для юридических лиц. Здесь, мало того, что не отказали, так и оформили меньше, чем за час. Отдала только ПТС, машина осталась у фирмы. 
                                </div>
                                <div class="review-person">
                                    <div class="review-name">Екатерина</div>
                                </div>
                            </article>
                            

                        </div>
                        <div class="col-md-4">
                            <article class="review-bg-grey">
                                <div class="review-text">Получил кредит под залог ПТС для развития бизнеса в этом автоломбарде, и я в полном восторге! Боялся что обманут, но ошибся. Менеджер все подробно рассказал и подобрал выгодные условия. Обращусь еще не раз.
                                </div>
                                <div class="review-person">
                                    <div class="review-name">Максим</div>
                                </div>
                            </article>
                            
                        </div>
                        <div class="col-md-4">
                            <article class="review-bg-grey">
                                <div class="review-text">На старте бизнеса пришлось взять кредит для ИП под залог автомобиля. Условия были лучше, чем я ожидал. Выражаю вам благодарность за скорость оформления и вежливый персонал.
                                </div>
                                <div class="review-person">
                                    <div class="review-name">Алексей</div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>

                <div class="visible-on-mobile">
                    <div class="owl-carousel owl-theme reviews-4">
                        <article class="review-bg-grey">
                            <div class="review-text">Оказалось, что в Хабаровске практически не дают кредит в залог ПТС для юридических лиц. Здесь, мало того, что не отказали, так и оформили меньше, чем за час. Отдала только ПТС, машина осталась у фирмы. 
                            </div>
                            <div class="review-person">
                                <div class="review-name">Екатерина</div>
                            </div>
                        </article>
                        <article class="review-bg-grey">
                            <div class="review-text">Получил кредит под залог ПТС для развития бизнеса в этом автоломбарде, и я в полном восторге! Боялся что обманут, но ошибся. Менеджер все подробно рассказал и подобрал выгодные условия. Обращусь еще не раз.
                            </div>
                            <div class="review-person">
                                <div class="review-name">Максим</div>
                            </div>
                        </article>
                        <article class="review-bg-grey">
                            <div class="review-text">На старте бизнеса пришлось взять кредит для ИП под залог автомобиля. Условия были лучше, чем я ожидал. Выражаю вам благодарность за скорость оформления и вежливый персонал.
                            </div>
                            <div class="review-person">
                                <div class="review-name">Алексей</div>
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

                <div class="visible-on-wade visible-on-tablet">
                    <div class="map_filter adresses-right">
                        <div id="addresses" class="mapOptions__addresses gradient" itemscope
                             itemtype="http://schema.org/PostalAddress">
                            <div class="map-text">
                                <a href="tel:<?=$tel ?>"><?=$phone ?></a><br>


                            </div>

                            <div id="rootMap">
                            </div>
                        </div>
                    </div>
                    <script type="text/babel">
                        const dateMap = [{
                          "undefined": "Белогорск улица Кирова, 84",
                          "Longitude": "50.921639",
                          "Latitude": "128.471752",
                          "Index": "676803",
                          "Город": "Белогорск",
                          "Адреса": "улица Кирова, 84"
                        },
                        {
                          "undefined": "Благовещенск улица Ленина, 139",
                          "Longitude": "50.2584691",
                          "Latitude": "127.531987",
                          "Index": "675000",
                          "Город": "Благовещенск",
                          "Адреса": "улица Ленина, 139"
                        },
                        {
                          "undefined": "Свободный улица Карла Маркса, 16",
                          "Longitude": "51.3755483",
                          "Latitude": "128.133658",
                          "Index": "676434",
                          "Город": "Свободный",
                          "Адреса": "улица Карла Маркса, 16"
                        },
                        {
                          "undefined": "Тында улица Красная Пресня, 27/1",
                          "Longitude": "55.1504124",
                          "Latitude": "124.736125",
                          "Index": "676290",
                          "Город": "Тында",
                          "Адреса": "улица Красная Пресня, 27/1"
                        },
                        {
                          "undefined": "Чита улица Бутина, 37",
                          "Longitude": "52.033703",
                          "Latitude": "113.498462",
                          "Index": "672000",
                          "Город": "Чита",
                          "Адреса": "улица Бутина, 37"
                        },
                        {
                          "undefined": "Петропавловск-Камчатский Советская улица, 14",
                          "Longitude": "53.0148668",
                          "Latitude": "158.6509471",
                          "Index": "683001",
                          "Город": "Петропавловск-Камчатский",
                          "Адреса": "Советская улица, 14"
                        },
                        {
                          "undefined": "Магадан улица Пушкина, 1",
                          "Longitude": "59.5662997",
                          "Latitude": "150.8047012",
                          "Index": "685000",
                          "Город": "Магадан",
                          "Адреса": "улица Пушкина, 1"
                        },
                        {
                          "undefined": "Арсеньев Калининская улица, 14",
                          "Longitude": "44.160373",
                          "Latitude": "133.2673709",
                          "Index": "692342",
                          "Город": "Арсеньев",
                          "Адреса": "Калининская улица, 14"
                        },
                        {
                          "undefined": "Артём улица Фрунзе, 73",
                          "Longitude": "43.3534229",
                          "Latitude": "132.1790386",
                          "Index": "692760",
                          "Город": "Артём",
                          "Адреса": "улица Фрунзе, 73"
                        },
                        {
                          "undefined": "Владивосток Светланская улица, 31",
                          "Longitude": "43.1158",
                          "Latitude": "131.8868806",
                          "Index": "690091",
                          "Город": "Владивосток",
                          "Адреса": "Светланская улица, 31"
                        },
                        {
                          "undefined": "Дальнегорск проспект 50 лет Октября, 73",
                          "Longitude": "44.5542271",
                          "Latitude": "135.5680533",
                          "Index": "692446",
                          "Город": "Дальнегорск",
                          "Адреса": "проспект 50 лет Октября, 73"
                        },
                        {
                          "undefined": "Находка Находкинский проспект, 11",
                          "Longitude": "42.8234935",
                          "Latitude": "132.8920046",
                          "Index": "692904",
                          "Город": "Находка",
                          "Адреса": "Находкинский проспект, 11"
                        },
                        {
                          "undefined": "Уссурийск улица Плеханова, 61",
                          "Longitude": "43.7983498",
                          "Latitude": "131.9525691",
                          "Index": "692525",
                          "Город": "Уссурийск",
                          "Адреса": "улица Плеханова, 61"
                        },
                        {
                          "undefined": "Северобайкальск Ленинградский проспект, 6",
                          "Longitude": "55.6356378",
                          "Latitude": "109.3370817",
                          "Index": "671700",
                          "Город": "Северобайкальск",
                          "Адреса": "Ленинградский проспект, 6"
                        },
                        {
                          "undefined": "Улан-Удэ улица Ленина, 52",
                          "Longitude": "51.8328793",
                          "Latitude": "107.5843955",
                          "Index": "670000",
                          "Город": "Улан-Удэ",
                          "Адреса": "улица Ленина, 52"
                        },
                        {
                          "undefined": "Нерюнгри проспект Дружбы Народов, 25",
                          "Longitude": "56.6580121",
                          "Latitude": "124.7145058",
                          "Index": "678960",
                          "Город": "Нерюнгри",
                          "Адреса": "проспект Дружбы Народов, 25"
                        },
                        {
                          "undefined": "Якутск улица Аммосова, 6",
                          "Longitude": "62.0272417",
                          "Latitude": "129.7353906",
                          "Index": "677018",
                          "Город": "Якутск",
                          "Адреса": "улица Аммосова, 6"
                        },
                        {
                          "undefined": "Южно-Сахалинск улица Карла Маркса, 51Б",
                          "Longitude": "46.9568476",
                          "Latitude": "142.7269244",
                          "Index": "693961",
                          "Город": "Южно-Сахалинск",
                          "Адреса": "улица Карла Маркса, 51Б"
                        },
                        {
                          "undefined": "Амурск улица Ленина, 279",
                          "Longitude": "50.2266509",
                          "Latitude": "136.895263",
                          "Index": "682643",
                          "Город": "Амурск",
                          "Адреса": "улица Ленина, 279"
                        },
                        {
                          "undefined": "Комсомольск-на-Амуре проспект Ленина, 19",
                          "Longitude": "50.5508145",
                          "Latitude": "137.0099291",
                          "Index": "681013",
                          "Город": "Комсомольск-на-Амуре",
                          "Адреса": "проспект Ленина, 19"
                        },
                        {
                          "undefined": "Хабаровск улица Пушкина, 54",
                          "Longitude": "48.481108",
                          "Latitude": "135.073341",
                          "Index": "680000",
                          "Город": "Хабаровск",
                          "Адреса": "улица Пушкина, 54"
                        }
                        ]
                        ReactDOM.render(
                            <div>
                                {dateMap.map((obj, index) => {
                                    return (
                                        <a key={index}
                                           id={obj['Город']}
                                           itemProp="address" itemScope itemType="http://schema.org/PostalAddress"
                                           href="#"
                                           data-coordinate={obj['Latitude'] + ',' + obj['Longitude']}
                                           data-address={obj['Index'] + ' ' + obj['Город'] + ', ' + obj['Адреса']}
                                           data-name={obj['Адреса']}
                                           data-content="режим работы: 9:00-19:00"
                                           title=""
                                           className="mapOptions__addresses_a">
                                        <span itemProp="postalCode"
                                              className="addresses-text-bold">{obj['Index']}, г. {obj['Город']}</span><br/>
                                            <span itemProp="streetAddress"
                                                  className="addresses-text-bold"> {obj['Адреса']}</span><br/>
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
                            document.querySelector('#Хабаровск').click()
                        }, 2000)
                    </script>
                    <div id="map" class="ofices map-left visible-on-wade visible-on-tablet"></div>
                </div>

                <div class="visible-on-mobile">
                    <div class="region_address">
                        <div class="row all_address">
                            <div class="col-md-12">
                                <div class="city-wrapper city-wrapper-main">
                                    <p>Для отображения адресов офисов выберете регион</p>
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
                                <li><a href="gruzovogoi-avtomobil.php">Грузовые авто</a></li>
                                <li><a href="pod-speztechnika.php">Спецтехника</a></li>
                                <li><a href="avtolombard.php">Автоломбард</a></li>

                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <ul class="footer-li bold">
                                <li><a href="pod-motocikl.php">Мототехника</a></li>
                                <li><a href="dlja-biznes-pod-pts-avto.php">Юр. Лица</a></li>
                                <li><a href="avto.php">Займ</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-md-12">
                    <div class="footer-bottom">
                        <p>«Залог Престиж» не является финансовым учреждением, банком или МФО. Сайт
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
                                <li><a href="gruzovogoi-avtomobil.php">Грузовые авто</a></li>
                                <li><a href="pod-speztechnika.php">Спецтехника</a></li>
                                <li><a href="pod-motocikl.php">Мототехника</a></li>
                                <li><a href="dlja-biznes-pod-pts-avto.php">Юр. Лица</a></li>
                                <li><a href="avto.php">Займ</a></li>
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
                                <li><a href="gruzovogoi-avtomobil.php">Грузовые авто</a></li>
                                <li><a href="pod-speztechnika.php">Спецтехника</a></li>
                                <li><a href="pod-motocikl.php">Мототехника</a></li>
                                <li><a href="dlja-biznes-pod-pts-avto.php">Юр. Лица</a></li>
                                <li><a href="avto.php">Займ</a></li>
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
                    <div class="letter">А</div>
                    <div id="rootА"></div>

                    <div class="letter">Б</div>
                    <div id="rootБ"></div>

                    <div class="letter">В</div>
                    <div id="rootВ"></div>

                </div>
                <div class="col-sm-12 col-md-3">

                    <div class="letter">К</div>
                    <div id="rootК"></div>

                </div>

                <div class="col-sm-12 col-md-3">
                    <div class="letter">М</div>
                    <div id="rootМ"></div>
                    <div class="letter">Н</div>
                    <div id="rootН"></div>

                    <div class="letter">П</div>
                    <div id="rootП"></div>

                </div>
                <div class="col-sm-12 col-md-3">

                    <div class="letter">С</div>
                    <div id="rootС"></div>
                    <div class="letter">Т</div>
                    <div id="rootТ"></div>

                    <div class="letter">У</div>
                    <div id="rootУ"></div>

                    <div class="letter">Х</div>
                    <div id="rootХ"></div>

                    <div class="letter">Ч</div>
                    <div id="rootЧ"></div>

                    <div class="letter">Ю</div>
                    <div id="rootЮ"></div>

                    <div class="letter">Я</div>
                    <div id="rootЯ"></div>
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