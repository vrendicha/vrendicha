<!-- resources/views/auth/admin-login.blade.php -->
<x-guest-layout>
    <div class="mb-4 text-center">
        <h1 class="text-2xl font-bold">Login Admin - Dina Parfum</h1>
    </div>

    <form method="POST" action="{{ route('admin.login.submit') }}" class="max-w-md mx-auto bg-white p-6 rounded shadow">
        @csrf

        <div class="mb-4">
            <label for="email" class="block text-sm font-medium">Email</label>
            <input id="email" type="email" name="email" required autofocus class="mt-1 block w-full rounded border-gray-300">
        </div>

        <div class="mb-4">
            <label for="password" class="block text-sm font-medium">Password</label>
            <input id="password" type="password" name="password" required class="mt-1 block w-full rounded border-gray-300">
        </div>

        <div class="flex justify-end">
            <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">
                Login Admin
            </button>
        </div>
    </form>
</x-guest-layout>
