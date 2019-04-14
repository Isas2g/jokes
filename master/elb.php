<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Эльбрус</title>
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
            <img src="img/9.jpg" alt="" class="img img-responsive">
        </div>
        <div class="dark-over-video"></div>

        <div class="hero-center-section ver-2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 parallax-fade-top">
                        <div id="title-text" class="hero-text-ver-2">Эльбрус<br>Кабардино-Балкария</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="black-place section background-dark z-too-big">
        <span class="menu-el active-menu-el" id="info">Информация</span>
        <span class="menu-el" id="hotels">Отели</span>
        <span class="menu-el" id="costs">Цены</span>
        <span class="menu-el" id="photo">Фотографии</span>
    </div>

    <div class="section content">




        <div id="infoText" class="active">
            <p>
                Эльбрус — стратовулкан, расположенный на границе республик Кабардино-Балкария и Карачаево-Черкесия. Эльбрус расположен севернее Большого Кавказского хребта и является высочайшей вершиной России. Учитывая, что граница между Европой и Азией неоднозначна, нередко Эльбрус называют также высочайшей европейской горной вершиной, тем самым относя её к списку «Семи вершин».
            </p>

            <p>
                Высота западной вершины — 5642 м, восточной — 5621 м. Ущелья Адылсу, Шхельды, Адырсу, массивы Донгуз-Оруна и Ушбы очень популярны среди альпинистов и горных туристов.Приэльбрусье — популярнейший горнолыжный курорт России. Общая площадь ледников Эльбруса 134,5 кв. км. Наиболее известные из них: Большой и Малый Азау, Терскол.
            </p>
        </div>


        <div id="hotelsText" class="non-active">
            
        </div>

        <div id="costsText" class="non-active">

        </div>

        <div id="photoText" class="non-active">

        </div>

    </div>

    <iframe  id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11605.180434213114!2d42.43657532967462!3d43.349937316123224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40590ad75c4e757f%3A0x93b32f99989061ef!2z0K3Qu9GM0LHRgNGD0YE!5e0!3m2!1sru!2sru!4v1555221193151!5m2!1sru!2sru" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

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
