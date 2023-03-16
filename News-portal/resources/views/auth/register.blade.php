<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-190 bg-blue-50 border-blue-200 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Sign in</h1>
            <form method="POST" action="/register" class="mt-10">
                @csrf
                <x-form.input name="name" type="text" placeholder="Name" />
                <x-form.input name="username" type="text" placeholder="Username" />
                <x-form.input name="email" type="email" placeholder="Email" />
                <x-form.input name="password" type="password" placeholder="Password" />
                <x-form.input name="password_confirmation" type="password" placeholder="Password Confirmation" />
                <x-form.button>Register</x-form.button>
                <ul class="text-xs mt-5">
                    <li class="text-blue-500">
                        <a href="/login">Already have an account?</a>
                    </li>
                </ul>

{{--                @if($errors->any())--}}
{{--                    <ul>--}}
{{--                        @foreach($errors->all() as $error)--}}
{{--                            <li class="text-red-500">{{ $error }}</li>--}}
{{--                        @endforeach--}}
{{--                    </ul>--}}
{{--                @endif--}}




            </form>
        </main>
    </section>
</x-layout>
