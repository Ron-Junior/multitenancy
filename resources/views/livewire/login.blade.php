<div>
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form class="space-y-4" wire:submit="login">
        <x-text-input 
            label="Email"
            type="email"  
            wire:model="email"
            autofocus 
            autocomplete="username" 
        />

        <x-text-input
            label="Password" 
            wire:model="password"
            type="password"
        />

        <div class="block mt-4">
            <x-checkbox label="Remember-me" wire:model="remember"/>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}" wire:navigate>
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-button class="ml-3">
                {{ __('Log in') }}
            </x-button>
        </div>
    </form>
</div>