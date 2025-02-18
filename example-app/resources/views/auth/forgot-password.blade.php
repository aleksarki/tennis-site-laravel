<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <!--<x-application-logo class="w-20 h-20 fill-current text-gray-500" />-->
                <img src="https://cdn-icons-png.flaticon.com/512/2528/2528207.png" alt="Tennis" width="50" height="50">
                The Tennis Site
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            Забыли пароль? Без проблем. Просто дайте нам свою электронную почту, и мы пришлём вам ссылку для сброса пароля, которая позволит вам себе выбрать новый.
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="'Электронная почта'" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>Отправить ссылку для сброса пароля</x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
