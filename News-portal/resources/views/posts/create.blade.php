@props(['categories'])
<x-layout>
    <section class="px-6 py-8">
    <form method="POST" action="/admin/posts" class="max-w-xl mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
        @csrf
        <x-form.input name="title" type="text" />
        <x-form.input name="slug" type="text" />
        <x-form.input name="excerpt" type="text" />
        <x-form.textarea name="body" />
        <label for="category" class="block mb-2 uppercase font-bold text-xs text-gray-600 mt-7">
            {{ ucwords("category") }}
        </label>
        <select name="category_id" id="category" class="border border-blue-400 p-2 w-full rounded-xl" required>
            <option value="{{old('$category')}}">Select a category</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}"
                    {{ old('category_id') == $category->id ? 'selected' : ''}}>{{ ucwords($category->name) }}</option>
            @endforeach
        </select>
        @error('category')
            <p class="text-blue-400 text-xs mt-1">{{ $message }}</p>
        @enderror
{{--        <x-form.select :items="$categories">category</x-form.select>--}}
        <x-form.button>Publish</x-form.button>
    </form>
    </section>

</x-layout>
