<x-guest-layout>
    <div class="mb-8 text-center">
        <h2 class="text-3xl font-bold text-gray-800">Selamat Datang</h2>
        <p class="text-gray-500 text-sm mt-2">Masuk ke akun Anda untuk melanjutkan</p>
    </div>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-6">
        @csrf

        <div>
            <x-input-label for="email" :value="__('Email')" class="text-gray-600 font-medium" />
            <x-text-input id="email" 
                        class="block mt-1 w-full px-4 py-3 rounded-xl border-gray-200 focus:border-indigo-500 focus:ring-indigo-500 shadow-sm transition-all duration-300 bg-gray-50/50 hover:bg-white" 
                        type="email" 
                        name="email" 
                        :value="old('email')" 
                        required autofocus autocomplete="username" 
                        placeholder="contoh@email.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="password" :value="__('Password')" class="text-gray-600 font-medium" />

            <x-text-input id="password" 
                            class="block mt-1 w-full px-4 py-3 rounded-xl border-gray-200 focus:border-indigo-500 focus:ring-indigo-500 shadow-sm transition-all duration-300 bg-gray-50/50 hover:bg-white"
                            type="password"
                            name="password"
                            required autocomplete="current-password" 
                            placeholder="••••••••" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex items-center justify-between mt-4">
            <label for="remember_me" class="inline-flex items-center cursor-pointer group">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500 cursor-pointer" name="remember">
                <span class="ms-2 text-sm text-gray-500 group-hover:text-indigo-600 transition-colors">{{ __('Ingat saya') }}</span>
            </label>

            @if (Route::has('password.request'))
                <a class="text-sm text-indigo-500 hover:text-indigo-700 font-medium hover:underline transition-colors" href="{{ route('password.request') }}">
                    {{ __('Lupa password?') }}
                </a>
            @endif
        </div>

        <div class="mt-6">
            <x-primary-button class="w-full justify-center py-3 bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 active:scale-95 transition-all duration-200 shadow-lg shadow-indigo-500/30 rounded-xl text-base font-bold tracking-wide">
                {{ __('Masuk Sekarang') }}
            </x-primary-button>
        </div>
        
        <div class="mt-6 text-center text-sm text-gray-500">
            Belum punya akun? 
            <a href="{{ route('register') }}" class="font-semibold text-indigo-600 hover:text-indigo-500 transition-colors">
                Daftar disini
            </a>
        </div>
    </form>
</x-guest-layout>