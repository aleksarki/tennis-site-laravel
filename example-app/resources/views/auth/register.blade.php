<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <!--<x-application-logo class="w-20 h-20 fill-current text-gray-500" />-->
                <img src="https://cdn-icons-png.flaticon.com/512/2528/2528207.png" alt="Tennis" width="50" height="50">
                The Tennis Site
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="'Имя пользователя'" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="'Электронная почта'" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="'Пароль'" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="'Повтор пароля'" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    Уже зарегистрированы?
                </a>

                <x-button class="ml-4">зарегистрироваться</x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
