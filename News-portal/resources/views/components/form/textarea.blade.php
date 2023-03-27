<div>
    <label for="{{ $name }}" class="block mb-2 uppercase font-bold text-xs text-gray-600 mt-7">
        {{ ucwords($name) }}
    </label>
    <textarea name="{{ $name }}" id="{{ $name }}" cols="10" rows="5" class="form-control w-full text-sm focus:outline-none">
        {{ old($name) }}
    </textarea>
    @error($name)
        <p class="text-blue-400 text-xs mt-1">{{ $message }}</p>
    @enderror

</div>
