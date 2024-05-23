<title>JuliushCafe</title>
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/short_updated.jpg') }}">
<x-guest-layout>

    <x-jet-authentication-card>
        <x-slot name="logo">
            <img width="100px" src="{{ asset('assets/images/logo_updated.png') }}">
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>
            <div class="block mt-4">
                <input type="radio" id="admin" name="options" value="admin" onclick="fillCredentials('admin')">
                <label for="admin">Admin</label>

                <input type="radio" id="sub-admin" name="options" value="sub-admin" onclick="fillCredentials('sub-admin')">
                <label for="sub-admin">Sub Admin</label>

                <input type="radio" id="deliver-boy" name="options" value="deliver-boy" onclick="fillCredentials('deliver-boy')">
                <label for="deliver-boy">Delivery Boy</label>

                <input type="radio" id="user" name="options" value="user" onclick="fillCredentials('user')">
                <label for="user">User</label>

            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div><br>
            <div style="text-align:center">
                Or,
                <u><a href="/register">Register Now</a></u>
            </div>
        </form>
    </x-jet-authentication-card>
    <script>
        function fillCredentials(option) {
            // Get email and password input elements
            var emailInput = document.getElementById('email');
            var passwordInput = document.getElementById('password');

            // Define credentials based on the selected option
            var credentials = {
                'admin': {
                    email: 'admin@example.com',
                    password: '12345678'
                },
                'sub-admin': {
                    email: 'subadmin@example.com',
                    password: '12345678'
                },
                'deliver-boy': {
                    email: 'deliveryman@example.com',
                    password: '12345678'
                },
                'user': {
                    email: 'juliushahmed@yahoo.com',
                    password: '12345678'
                }
            };

            // Set values based on the selected option
            if (credentials.hasOwnProperty(option)) {
                emailInput.value = credentials[option].email;
                passwordInput.value = credentials[option].password;
            }
        }
    </script>
</x-guest-layout>