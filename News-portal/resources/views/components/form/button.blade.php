<div>
    <button {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-blue-500 text-white rounded-xl py-2 px-10 mt-7 hover:bg-blue-400 ']) }}>
        {{ $slot }}
    </button>

</div>
