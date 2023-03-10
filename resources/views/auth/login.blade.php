<div class="relative z-10">
  @include('navigation-menu-auth')
</div>
<x-guest-layout>
    <x-authentication-card>
        {{-- <x-slot name="logo">

        </x-slot> --}}
        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                {{ session('status') }}
            </div>
        @endif
        <x-gradient-auth/>
        <form method="POST" action="{{ route('login') }}" >
            @csrf
            <div class="flex flex-items justify-center p-3 py-[2vw] items-center">
              <h1 class="font-bold text-4xl text-center justify-center items-center text-[#726EF7]">Welcome to Friendly Aquarium</h1>
            </div>
            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
              <div class="flex-grow justify-start">
                <a class="no-underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100" href="{{ route('register') }}">
                  {{ __('Sign Up') }}
                </a>
              </div>
                @if (Route::has('password.request'))
                    <a class="no-underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
