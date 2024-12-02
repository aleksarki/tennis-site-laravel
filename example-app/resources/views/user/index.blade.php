<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Первые ракетки мира</title>
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer">
    </head>
    <body>

        @include('navbar')


        <div class="title">
            <span>
                <a href="/" class="link-success link-underline link-underline-opacity-0">Сайт о теннисе</a>
                > <a href="/users" class="link-success link-underline link-underline-opacity-0">Пользователи</a>
            </span>
        </div>

        <div class="content-text">
            <ul style="list-style-type: none;">
                @foreach ($users as $user)
                    @if (Auth::id() == $user->id)
                        <li><a href="/rackets/user/{{ $user->name }}" class="link-secondary link-offset-2 link-underline-opacity-50 link-underline-opacity-75-hover">{{ $user->name }}</a></li>
                    @else
                        <li><a href="/rackets/user/{{ $user->name }}" class="link-success link-underline-opacity-0 link-underline">{{ $user->name }}</a></li>
                    @endif
                @endforeach
            </ul>
        </div>
        

        @include('footer')


        <script src="/js/app.js"></script>

    </body>
</html>
