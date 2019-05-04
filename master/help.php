<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Помощь с выбором</title>
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
    <link rel="stylesheet" href="css/help.css" />
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

<body style="color: #000">
    <!--   HEADER-->
    <?php include('header.php');?>

    <div class="section hero-full-height over-hide">

    <div id="poster_background"></div>
    <div id="video-wrap" class="parallax-top">
            <img data-src="img/help.gif" alt="" class="img img-responsive">
    </div>
    <div class="dark-over-video"></div>

    <div class="hero-center-section ver-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 parallax-fade-top">
                    <div id="title-text" class="hero-text-ver-2">Добро<br>пожаловать!</div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div id="index-black-place" class="black-place section background-dark z-too-big">
    </div>
        <div class="section content">

        <div id="test1" class="active">
            <p>Какое у вас настроение?</p>
            <label><input id="happy" value="happy" name="qu1" type="radio"> Я весел!</label> <br>
            <label><input id="calm" value="calm" name="qu1" type="radio"> Я спокоен.</label> <br>
            <label><input id="sad" value="sad" name="qu1" type="radio"> Я немного грущу.</label> <br>
            <label><input id="depression" value="depression" name="qu1" type="radio"> Я в депрессии.</label>
        </div>
        <div id="test2" class="non-active">
            <p>Чего вы ждёте от экскурсии?</p>
            <label><input id="relax" value="relax" name="qu2" type="radio"> Хочу расслабиться.</label> <br>
            <label><input id="walk" value="walk" name="qu2" type="radio"> Хочу много ходить.</label> <br> 
            <label><input id="extreme" value="extreme" name="qu2" type="radio"> Хочу экстрима!</label> <br>
            <label><input id="nothing" value="nothing" name="qu2" type="radio"> Ничего не хочу.</label>
        </div>

        <div id="lenskie" class="non-active">
                <h1>Рекомендуем вам <a href="lenskie.php">Ленские Столбы</a></h1>
        </div>
        <div id="geyzer" class="non-active">
                <h1>Рекомендуем вам <a href="geyzer.php">Долина Гейзеров</a></h1>
        </div>
        <div id="baikal" class="non-active">
                <h1>Рекомендуем вам <a href="baik.php">Озеро Байкал</a></h1>
        </div>
        <div id="put" class="non-active">
                <h1>Рекомендуем вам <a href="put.php">Плато Путорана</a></h1>
        </div>
        <div id="elbrus" class="non-active">
                <h1>Рекомендуем вам <a href="elb.php">Эльбрус</a></h1>
        </div>
        <div id="altai" class="non-active">
                <h1>Рекомендуем вам <a href="alt.php">Алтайские горы</a></h1>
        </div>
    </div>
    <?php include('footer.php') ?>
<!--    SCRIPTS-->
<script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/reveal-home.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/help.js"></script>
</body>

</html>
