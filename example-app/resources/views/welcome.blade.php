<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Первые ракетки мира</title>
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer">
    </head>
    <body>

        @include('navbar')


        <div class="title">
            <span>
                <a href="/" class="link-success link-underline link-underline-opacity-0">Сайт о теннисе</a>
                > <a href="/" class="link-success link-underline link-underline-opacity-0">Домашняя страница</a>
            </span>
        </div>


        @if (Route::has('login'))
            @auth
                <div class="content-text">
                    <a href="/rackets" class="btn btn-outline-success">Первые ракетки мира</a><br><br>
                    <a href="/users" class="btn btn-outline-success">Пользователи</a><br><br>
                </div>
            @else
                <span class="content-text">Войдите для доступа к содержимому сайта</span><br><br>
            @endif
        @endif


        @include('footer')


        <script src="/js/app.js"></script>

    </body>
</html>
