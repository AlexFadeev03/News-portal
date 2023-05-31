<div>
    <x-form.field>
        <x-form.lable :name="$name" />
        <input type="{{ $type }}"
               name="{{ $name }}"
               id="{{ $name }}"
               class="border border-blue-400 p-2 w-full rounded-xl"
               {{ $attributes (['value' => old($name)]) }}>
        <x-form.error :name="$name" />
    </x-form.field>
</div>
