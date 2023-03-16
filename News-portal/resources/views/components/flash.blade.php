<div x-data="{ show: true }"
     x-show="show"
     x-init="setTimeout(() => show = false, 4000)"
     style="display: none"
     class="fixed bottom-3 right-3 bg-green-500 text-white rounded-xl py-2 px-4 text-sm"
>
    {{ session('success') }}
</div>

