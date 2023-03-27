@props(['items'])
<div>
    <label for="{{ $slot }}" class="block mb-2 uppercase font-bold text-xs text-gray-600 mt-7">
        {{ ucwords($slot) }}
    </label>
    <select name="{{ $slot }}" id="{{ $slot }}" class="border border-blue-400 p-2 w-full rounded-xl" required>
        <option value="">Select a {{$slot}}</option>
        @foreach ($items as $item)
            <option value="{{ $item->id }}"
            {{old($slot) == $item->id ? 'selected' : ''}}>{{ ucwords($item->name)}}</option>
        @endforeach
    </select>
    @error($slot)
        <p class="text-blue-400 text-xs mt-1">{{ $message }}</p>
    @enderror
</div>
