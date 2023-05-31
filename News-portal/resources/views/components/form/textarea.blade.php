<div>
    <x-form.field>
        <x-form.lable :name="$name" />
        <textarea
            class="form-control w-full text-sm focus:outline-none"name="{{ $name }}"
            id="{{ $name }}"
            cols="10"
            rows="5"
            required
            {{  $attributes }}
        >{{ $slot?? old($name)}}
        </textarea>
        <x-form.error :name="$name" />
    </x-form.field>
</div>
