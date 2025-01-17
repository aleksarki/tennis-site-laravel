<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Первые ракетки мира</title>
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>

        @include('navbar')


        <div class="title">
            <span>
                <a href="/" class="link-success link-underline link-underline-opacity-0">Сайт о теннисе</a>
                &gt; <a href="/rackets" class="link-success link-underline link-underline-opacity-0">Первые ракетки мира</a>
                &gt; <a href="/rackets/user/{{ Auth::user()->name}}" class="link-success link-underline link-underline-opacity-0">Пользователь {{ Auth::user()->name }}</a>
                &gt; <span>Токен</span>
                <a class="btn btn-light" href="{{ url()->previous() }}">Назад</a>
            </span>
        </div>


        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div id="copyTokenToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <span class="me-auto">Скопировано</span>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    Токен Пользователя скопирован в буфер обмена.
                </div>
            </div>
        </div>


        <div class="title">
            <div class="card mx-auto">
                <div class="card-body">
                    <div class="col">
                        <label for="text" class="form-label">Токен:</label>
                        <textarea id="tokenTextArea" name="text" class="form-control" autocomplete="off" rows="7" readonly>{{ $token }}</textarea>
                    </div>
                </div>
                <div class="card-footer">
                    <button id="copyTokenButton" class="btn btn-secondary">Скопировать</button>
                </div>
            </div>
        </div>
        
        
        @include('footer')


        <script src="/js/app.js"></script>

    </body>
</html>