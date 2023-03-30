@props(['categories'])
<x-layout>
    <section class="px-6 py-8">
    <h1 class="text-center font-bold text-xl mt-10">Publish News <span class="text-blue-500">post</span></h1>
    <form method="POST" action="/admin/posts" enctype="multipart/form-data" class="max-w-xl mt-10 mx-auto bg-gray-100 border border-gray-200 p-6 rounded-xl">
        @csrf
        <x-form.input name="title" type="text" />
        <x-form.input name="slug" type="text" />
        <x-form.input name="thumbnail" type="file" />
        <x-form.textarea name="excerpt" />
        <x-form.textarea name="body" />
        <x-form.lable name="category_id" />
        <x-form.field>
            <select name="category_id" id="category" class="border border-blue-400 p-2 w-full rounded-xl" required>
                <option value="{{old('$category')}}">Select a category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}"
                        {{ old('category_id') == $category->id ? 'selected' : ''}}>{{ ucwords($category->name) }}</option>
                @endforeach
            </select>
            <x-form.error name="category_id" />
        </x-form.field>
{{--        <x-form.select :items="$categories">category_id</x-form.select>--}}
        <x-form.button>Publish</x-form.button>

    </form>
    </section>

</x-layout>
