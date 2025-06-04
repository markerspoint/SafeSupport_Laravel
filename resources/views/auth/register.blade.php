<x-guest-layout>

<div class="flex flex-col items-center justify-center">
        <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="w-[20rem]">
            {{-- <x-input-label for="name" :value="__('Name')" /> --}}
            <x-text-input id="name" 
            class="block mt-1 w-full" 
            type="text" name="name" 
            placeholder="Username"
            :value="old('name')" 
            required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4 w-[20rem]">
            {{-- <x-input-label for="email" :value="__('Email')" /> --}}
            <x-text-input id="email" 
            class="block mt-1 w-full" 
            type="email" 
            placeholder="Email"
            name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
{{-- test --}}
        <!-- Password -->
        <div class="mt-4 w-[20rem]">
            {{-- <x-input-label for="password" :value="__('Password')" /> --}}

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            placeholder="Create password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        {{-- <div class="mt-4 w-[20rem]">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            placeholder="Confirm passowrd"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div> --}}

        <div class="mt-[1rem]">
            <x-primary-button class="!p-[0.6rem] w-[20rem]">
                {{ __('Register') }}
            </x-primary-button>
        </div>

        <div class="flex justify-center mt-4">
            <a class="block w-full text-center text-sm text-gray-600 hover:text-gray-600 rounded-md"  href="{{ route('login') }}">
                Already registered? <span class="text-safegreen hover:underline font-semibold">Login</span>
            </a>
        </div>
    </form>

        <div class="mb-2 text-center text-sm text-gray-600">
            <p>or</p>
        </div>

        <div class="flex items-center justify-center gap-2 rounded-md border border-gray-400 w-[20rem] text-gray-600 text-center text-[1rem] p-[0.5rem] transition-all duration-200 hover:border-safegreen hover:ring-1 hover:ring-safegreen">
            <span>Login with Google</span>
        </div>  
</div>
</x-guest-layout>
