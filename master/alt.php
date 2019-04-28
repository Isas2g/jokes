<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Алтай</title>
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
            <img data-src="img/elbrus.jpg" alt="" class="img img-responsive">
        </div>
        <div class="dark-over-video"></div>

        <div class="hero-center-section ver-2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 parallax-fade-top">
                        <div id="title-text" class="hero-text-ver-2">Алтайсике горы<br>Республика Алтай</div>
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
                Алтайские горы представляют сложную систему самых высоких в Сибири хребтов, разделённых глубокими долинами рек и обширными внутригорными и межгорными котловинами. Горная система на стыке границ России, Монголии, Китая и Казахстана. Она делится на Южный Алтай (Юго-Западный), Юго-Восточный Алтай и Восточный Алтай, Центральный Алтай, Северный и Северо-Восточный Алтай, Северо-Западный Алтай.
            </p>

            <p>
                Алтайский, Катунский заповедники и плоскогорье Укок в совокупности образуют объект Всемирного наследия ЮНЕСКО «Алтай — Золотые горы». В Алтай приезжают тысячи туристов. Это излюбленное место для фототуров и самостоятельных поездок.
            </p>
        </div>


        <div id="hotelsText" class="non-active">

        </div>

        <div id="costsText" class="non-active">

        </div>

        <div id="photoText" class="non-active">

        </div>

    </div>

<iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20939.488721287416!2d88.98885221745934!3d49.002287924395695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x42b46aff10e71ecf%3A0x35ef4923e8cabcea!2z0JDQu9GC0LDQudGB0LrQuNC1INCz0L7RgNGL!5e0!3m2!1sru!2sru!4v1555221524633!5m2!1sru!2sru" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

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
