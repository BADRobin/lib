<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Форма .....">
    <meta name="author" content="Разработчик Брыль О.Л.">
    <link rel="icon" href="/template/images/home/33.png" />

    <title>Библиотека</title>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>

    <link href="/template/css/bootstrap.min.css"  rel="stylesheet">
    <link href="/template/css/bootstrap.css"  rel="stylesheet">
    <link href="/template/css/main.css" rel="stylesheet">
   <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link href="/template/css/font-awesome.min.css"  rel="stylesheet">

</head>
================================================== -->
<body>
<div class="navbar-wrapper">
    <div class="container">

        <nav class="navbar navbar-inverse navbar-fixed-top nav-grouped">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                            aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Переключить навигацию</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/" >

                    <a href="/" ><img class="logo" src="/template/images/home/logo.png" alt="" /></a>

                    </a>

                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav pull-left">
                        <li><a href="/">Главная</a></li>
                        <li><a href="/catalog/">Каталог товаров</a></li>
                        <li><a href="/about/">О магазине</a></li>
                        <li><a href="/contacts/">Контакты</a></li>

                    </ul>
                    <ul class="nav navbar-nav pull-right">
                        <li><a href="/cart">
                                <i class="fa fa-shopping-cart"></i> Корзина
                                (<span id="cart-count"><?php echo Cart::countItems(); ?></span>)
                            </a>
                        </li>
                        <?php if (User::isGuest()): ?>
                            <li><a href="/user/login/"><i class="fa fa-lock"></i> Вход</a></li>
                        <?php else: ?>
                            <li><a href="/cabinet/"><i class="fa fa-user"></i> Аккаунт</a></li>
                            <li><a href="/user/logout/"><i class="fa fa-unlock"></i> Выход</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

    </div>
</div>
</body>