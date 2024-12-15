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
                    <li>
                        <a href="/rackets/user/{{ $user->name }}" class="{{ App\Models\User::link_color($user) }}">{{ $user->name }}</a>
                        @if ($user->id != Auth::id())
                            @if (!Auth::user()->friends_with($user))
                                <a class="btn btn-light btn-sm" href="/users/{{ Auth::id() }}/befriend/{{ $user->id }}">Подружиться</a>
                            @endif
                            @if (!Auth::user()->subscribed_to($user))
                                <a class="btn btn-light btn-sm" href="/users/{{ Auth::id() }}/subscribe/{{ $user->id }}">Подписаться</a>
                            @endif
                            @if (Auth::user()->friends_with($user) || Auth::user()->subscribed_to($user))
                                <a class="btn btn-light btn-sm" href="/users/{{ Auth::id() }}/unsubscribe/{{ $user->id }}">Отписаться</a>
                            @endif
                        @endif
                        <br><br>
                    </li>
                @endforeach
            </ul>
        </div>
        

        @include('footer')


        <script src="/js/app.js"></script>

    </body>
</html>
