<x-guest-layout>
    <!-- Center wrapper -->
    <div class="flex flex-col items-center justify-center">

        <!-- Login form -->
        <form method="POST" action="{{ route('login') }}" class="flex flex-col items-center">
            @csrf

            <!-- Email Address -->
            <div class="w-[20rem]">
                <x-text-input id="email" class="block bg-transparent mt-1 w-full"
                            type="email" 
                            name="email" 
                            placeholder="Email" 
                            :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div x-data="{ show: false }" class="relative mt-6 w-[20rem]">
                <input
                    :type="show ? 'text' : 'password'"
                    id="password"
                    name="password"
                    placeholder="Password"
                    required
                    autocomplete="current-password"
                    class="block bg-transparent py-2 mt-1 w-full pr-10 rounded-md border-gray-400 focus:border-safegreen focus:ring-safegreen"
                />
            
                <!-- Eye icon toggle -->
                <div @click="show = !show" class="absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer select-none">
                    <svg x-show="!show" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5s8.268 2.943 9.542 7c-1.274 4.057-5.065 7-9.542 7s-8.268-2.943-9.542-7z" />
                    </svg>
                    <svg x-show="show" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7a9.967 9.967 0 013.303-4.419m2.493-1.4A9.957 9.957 0 0112 5c4.478 0 8.268 2.943 9.542 7a9.978 9.978 0 01-4.261 5.042M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3l18 18" />
                    </svg>
                </div>
            
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            



            {{-- <!-- Remember Me -->
            <div class="block mt-4 w-[20rem]">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-safegreen shadow-sm focus:ring-safegreen" name="remember">
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div> --}}

            <!-- Buttons -->
            <div class="flex items-center justify-end mt-4 w-[20rem]">
                @if (Route::has('password.request'))
                    <a class="text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
                <x-primary-button class=" m-3 !p-[0.7rem] w-[20rem]">
                    {{ __('Continue') }}
                </x-primary-button>
        </form>
    </div>
</x-guest-layout>
