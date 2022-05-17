<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>user index</title>
</head>
<body>

<h3>создали маршрут 'http://laraver-8/user' до UserController метод index</h3>
<h3>
    @if (!empty($name))
        <p>Простой маршрут до контроллера и метода</p>
        {{ 'передали переменную из UserController: ' . $name }}
    @else
        <p>передали шаблон напрямую из маршрута</p>
        <p>передали {{ $user }} из web</p>
    @endif
</h3>

</body>
</html>
