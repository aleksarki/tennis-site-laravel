<div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="downloadToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <i class="fa-solid fa-spinner rotating"></i>
            <span class="me-auto">&nbsp;Ошибка</span>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            На текущий момент этот функционал недоступен.
        </div>
    </div>
</div>


<nav class="navbar sticky-top bg-success bg-gradient" style="--bs-bg-opacity: .75;">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="https://cdn-icons-png.flaticon.com/512/2528/2528207.png" alt="Tennis" width="30" height="30">
            The Tennis Site
        </a>

        <div class="d-flex">
            @if (Route::has('login'))
                @auth
                    <span class="navbar-text text-light me-2">
                        @if (Auth::user()->is_admin)
                            Администратор:
                        @else
                            Пользователь:
                        @endif
                        <a href="/rackets/user/{{ Auth::user()->name }}" class="link-light link-underline-opacity-0">{{ Auth::user()->name }}</a>
                    </span>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-responsive-nav-link
                            :href="route('logout')"
                            onclick="event.preventDefault();
                                            this.closest('form').submit();"
                            class="btn btn-outline-light me-2"
                        >
                            Выйти
                        </x-responsive-nav-link>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="btn btn-outline-light me-2">Войти</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-outline-light me-2">Зарегистрироваться</a>
                    @endif
                @endif
            @endif

            <button id="downloadButton" class="btn btn-light" type="button">Загрузить</button>
        </div>
    </div>
</nav>