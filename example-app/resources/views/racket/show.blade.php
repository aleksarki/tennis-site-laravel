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
            <span>{{ $racket->name }}</span>
            <a class="btn btn-light" href="/rackets">Назад</a>
        </div>

        
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="family" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Информация о семье">{{ $racket->family }}</div><br>
                    <div class="other" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Общие сведения">{{ $racket->other }}</div><br>
                    <div class="game" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Информация об игре">{{ $racket->game }}</div>
                </div>
            </div>
        </div>


        @include('footer')
        

        <script src="/js/app.js"></script>

    </body>
</html>
