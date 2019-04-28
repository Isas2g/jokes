<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Ленские столбы</title>
    <!--    STYLES-->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/ionicons.min.css" />
    <link rel="stylesheet" href="css/datepicker.css" />
    <link rel="stylesheet" href="css/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/owl.transitions.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/colors/color.css" />
    <link rel="stylesheet" href="css/for_pages.css" />
    <style>
        ::selection {
            background: #000;
            color: #fff;
        }

        ::-moz-selection {
            background: #000;
            color: #fff;
        }

        ::-webkit-selection {
            background: #000;
            color: #fff;
        }

    </style>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>

<body>
    <!--   HEADER-->
    <?php include('header.php');?>


    <div class="section hero-full-height over-hide">
        <div id="poster_background"></div>
        <div id="video-wrap" class="parallax-top">
            <img data-src="img/hero-stolb.jpg" alt="" class="img img-responsive">
        </div>
        <div class="dark-over-video"></div>

        <div class="hero-center-section ver-2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 parallax-fade-top">
                        <div id="title-text" class="hero-text-ver-2">Ленские столбы<br>Якутия</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="black-place section background-dark z-too-big">
        <span class="menu-el active-menu-el" id="info">Информация</span>
        <span class="menu-el" id="costs">Цены</span>
        <span class="menu-el" id="photo">Фотографии</span>
    </div>

    <div class="section content">


        <div id="background-sec">
            <div class="sec-inner">
                <div id="infoText" class="active">
                    <p>
                        Ленские столбы — природный парк в России, расположенный на берегу реки Лены в Хангаласском улусе Якутии в 104 км от города Покровска.
                        Тянущийся на многие километры комплекс вертикально вытянутых скал, причудливо громоздящихся вдоль берега Лены,
                        глубокой долиной прорезающей Приленское плато, не перестает привлекать фотографов и путешественников.
                        Наибольшей плотности столбы достигают между селениями Петровское и Тит-Ары.
                    </p>
                    <p>
                        Высота скальных образований доходит до 100 метров. Ученые считают,
                        что формирование горных пород началось 560–540 млн лет назад,
                        а само образование Ленских столбов как формы рельефа — около 400 тыс. лет назад.
                    </p>
                    <p>
                        Природный парк «Ленские столбы» был организован на основании указа президента Республики Саха (Якутия)
                        от 16 августа 1994 года № 837 и постановления правительства от 10 февраля 1995 года
                        и подчиняется региональному министерству охраны природы. Площадь парка — 485 тыс. га,
                        парк состоит из двух филиалов — «Столбы» и «Синский».
                    </p>
                </div>

                <div id="costsText" class="non-active">
                    <!--           ___________ ЦЕНЫ-->
                    <dl>
                        <dt><a class="link" href="http://ru.visityakutia.com/lenskie_stolby_letom/">ООО «Визит Якутия» — туристическая фирма (туроператор) в Якутске, Республика Саха (Якутия).</a></dt>
                        <br><br>
                        <dd>Стоимость в 2019 году: <br>

                            Каюты <br>

                            Люкс = 37000 — 50000 руб/каюта. <br>
                            Полулюкс (DBL) = 23000 — 29000 руб/каюта. <br>
                            Двухместная стандартная (Twin) = 21000 — 26000 руб/каюта. <br>
                            Четырехместная каюта = 35000 — 42000 руб/каюта. <br>
                            Комплексное питание (6 приемов пищи) = 3850 руб/человек. <br>
                            Сервисный сбор = 2500 руб/каюта. <br>

                        </dd>
                        <br>
                        <dt>
                            <a class="link" href="https://www.russiadiscovery.ru/tours/zolotye-skaly-yakutii-splav-po-rekam-sinyaya-i-lena/">Турфирма "RussiaDiscovery" предлагает полноценный тур к достопримечательности:</a>
                        </dt>
                        <br><br>
                        <dd>Полноценный деcятидневный тур обходится в 47 000 руб./чел.</dd>
                    </dl>

                </div>

                <div id="photoText" class="non-active">
                    <div class="row">
                        <div class="col-lg-12 col-cm-12 col-md-12">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="img/ctolby1.jpg" alt="First slide">
                                    </div>
                                    <div class="carousel-item  active">
                                        <img class="d-block w-100" src="img/stolby2.jpg" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="img/stolby3.jpg" alt="Third slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="img/stolby4.jpg" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="img/stolby5.jpg" alt="Second slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1920.4774546437527!2d128.56999151573714!3d61.22674396449807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5c08522a4364c7fd%3A0xb9139f5cea477278!2z0JvQtdC90YHQutC40LUg0YHRgtC-0LvQsdGL!5e0!3m2!1sru!2sru!4v1555223383658!5m2!1sru!2sru" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

    <?php include('footer.php');?>


    <!--    SCRIPTS-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/reveal-home.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/menu_opener.js"></script>
</body>

</html>
