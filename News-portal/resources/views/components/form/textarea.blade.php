<div>
    <x-form.field>
        <x-form.lable :name="$name" />
        <textarea name="{{ $name }}" id="{{ $name }}" cols="10" rows="5" class="form-control w-full text-sm focus:outline-none">
            {{ old($name) }}
        </textarea>
        <x-form.error :name="$name" />
    </x-form.field>
</div>
