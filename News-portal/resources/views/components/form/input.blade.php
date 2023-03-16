<div>
    <label for="{{ $name }}" class="block mb-2 uppercase font-bold text-xs text-gray-600 mt-7">
        {{ ucwords($name) }}
    </label>
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" value="{{old($name)}}" class="border border-blue-400 p-2 w-full rounded-xl" required>
    @error($name)
        <p class="text-blue-400 text-xs mt-1">{{ $message }}</p>
    @enderror
</div>
