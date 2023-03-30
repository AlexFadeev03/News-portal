@props(['name'])
@error($name)
    <p class="text-blue-400 text-xs mt-1">{{ $message }}</p>
@enderror
