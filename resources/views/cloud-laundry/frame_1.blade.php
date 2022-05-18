<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Laravel по умолчанию ищет скрипты и стили в папке 'public' --}}
    <link rel="stylesheet" href="/css/style.css">
    {{--    <link rel="stylesheet" href="https://fonts.google.com/share?selection.family=Laila">--}}
    {{--<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Laila&display=swap" rel="stylesheet">--}}
    <title>Frame_1</title>
</head>
<body>
<div class="wrapper">
    {{--пишем разметку для шапки сайта. Добавили класс _container для задания ширины и центровки контента--}}
    <header class="header">
        <div class="header__container _container">
            {{--пишем разметку блоков шапки приложения --}}
            <a href="" class="header__logo">
                Laundry
            </a>
            <nav class="header__menu menu">
                <ul class="menu__list">
                    <li class="menu__item">
                        <a href="" class="menu__link">Wash & Fold</a>
                    </li>
                    <li class="menu__item">
                        <a href="" class="menu__link">Dry Cleaning</a>
                    </li>
                    <li class="menu__item">
                        <a href="" class="menu__link">Pricing</a>
                    </li>
                    <li class="menu__item">
                        <a href="" class="menu__link">888-655-1111</a>
                    </li>
                    <li class="menu__item">
                        <a href="" class="menu__link">Login</a>
                    </li>
                    <li class="menu__item">
                        <a href="" class="menu__link">Schedule a Pickup</a>
                    </li>
                </ul>
            </nav>


        </div>

    </header>




</div>
{{--    <script src="js/scriot.js">пока что закомментируем</script>--}}
</body>
</html>
