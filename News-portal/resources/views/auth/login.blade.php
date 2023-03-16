<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-190 bg-blue-50 border-blue-200 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Log in</h1>
            <form method="POST" action="/login" class="mt-10">
                @csrf
                <x-form.input name="email" type="email" placeholder="Email" />
                <x-form.input name="password" type="password" placeholder="Password" />
                <x-form.button>Log in</x-form.button>
                <ul class="text-xs mt-5">
                    <li class="text-blue-500">
                        <a href="/register">Don't have an account?</a>
                    </li>
                </ul>
            </form>
        </main>
    </section>
</x-layout>
