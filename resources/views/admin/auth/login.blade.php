<x-admin-guest-layout title="Sign In" illustrated>

    <div class="mb-8">
        <h1 class="text-3xl font-extrabold tracking-tight text-slate-950 dark:text-white">Welcome back</h1>
        <p class="mt-2 text-base text-slate-500 dark:text-slate-400">Sign in to your admin account</p>
    </div>

    <form method="POST" action="{{ route('admin.login.store') }}" class="space-y-6">
        @csrf

        <div>
            <label for="email" class="mb-2 block text-sm font-bold text-slate-800 dark:text-slate-200">
                Email address
            </label>
            <div class="relative">
                <span class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400">
                    @include('admin.partials.icon', ['name' => 'envelope', 'class' => 'size-5'])
                </span>
                <input id="email" name="email" type="email" autocomplete="email" required
                       value="{{ old('email') }}"
                       class="block w-full rounded-xl border bg-slate-50 py-3.5 pl-12 pr-4 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-brand focus:bg-white focus:ring-4 focus:ring-brand/10 dark:bg-night-950 dark:text-slate-100 dark:focus:bg-night-900 @error('email') border-rose-400 dark:border-rose-500 @else border-slate-200 dark:border-night-700 @enderror"
                       placeholder="you@example.com">
            </div>
            @error('email')
                <p class="mt-1.5 text-xs text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="password" class="mb-2 block text-sm font-bold text-slate-800 dark:text-slate-200">
                Password
            </label>
            <div class="relative">
                <span class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400">
                    @include('admin.partials.icon', ['name' => 'key', 'class' => 'size-5'])
                </span>
                <input id="password" name="password" type="password" autocomplete="current-password" required
                       data-password-input
                       class="block w-full rounded-xl border bg-slate-50 py-3.5 pl-12 pr-12 text-sm text-slate-900 outline-none transition focus:border-brand focus:bg-white focus:ring-4 focus:ring-brand/10 dark:bg-night-950 dark:text-slate-100 dark:focus:bg-night-900 @error('password') border-rose-400 dark:border-rose-500 @else border-slate-200 dark:border-night-700 @enderror"
                       placeholder="Enter your password">
                <button type="button" data-password-toggle aria-label="Show password" aria-pressed="false"
                        class="absolute inset-y-0 right-0 flex items-center pr-4 text-slate-400 transition hover:text-slate-700 focus:outline-none focus-visible:text-brand dark:hover:text-slate-200">
                    @include('admin.partials.icon', ['name' => 'eye', 'class' => 'w-4 h-4'])
                </button>
            </div>
            @error('password')
                <p class="mt-1.5 text-xs text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex flex-col items-start gap-3 sm:flex-row sm:items-center sm:justify-between">
            <label class="flex cursor-pointer items-center gap-2.5">
                <input name="remember" type="checkbox"
                       class="size-4 rounded border-slate-300 bg-white text-brand focus:ring-brand dark:border-night-600 dark:bg-night-900">
                <span class="text-sm text-slate-600 dark:text-slate-300">Remember me</span>
            </label>
            <a href="{{ route('admin.password.request') }}"
               class="text-sm font-semibold text-brand transition hover:text-indigo-700 hover:underline dark:text-indigo-400">
                Forgot password?
            </a>
        </div>

        <button type="submit"
                class="flex w-full items-center justify-center gap-3 rounded-2xl bg-brand px-4 py-3.5 text-sm font-bold text-white shadow-lg shadow-brand/25 transition hover:-translate-y-0.5 hover:bg-indigo-700 hover:shadow-xl hover:shadow-brand/30 focus:outline-none focus:ring-2 focus:ring-brand focus:ring-offset-2 active:translate-y-0">
            Sign in
            @include('admin.partials.icon', ['name' => 'arrow-right-on-rect', 'class' => 'w-4 h-4'])
        </button>
    </form>

    <div class="mt-10 flex items-center gap-5" aria-hidden="true">
        <span class="h-px flex-1 bg-slate-200 dark:bg-night-700"></span>
        <span class="text-xs text-slate-400">Secure admin access</span>
        <span class="h-px flex-1 bg-slate-200 dark:bg-night-700"></span>
    </div>

    <p class="mt-7 text-center text-xs text-slate-500 dark:text-slate-400">
        &copy; {{ now()->year }} {{ config('app.name') }}. All rights reserved.
    </p>

</x-admin-guest-layout>
