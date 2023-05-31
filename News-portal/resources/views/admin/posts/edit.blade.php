@props(['categories'])
<x-layout>
    <x-setting>
        <x-slot name="heading">Edit News <span class="text-blue-500">Post: </span> {{$post->title}}</x-slot>


        <form method="POST" action="/admin/posts/{{$post->id}}" enctype="multipart/form-data" class="max-w-6xl mt-10 mx-auto bg-gray-100 border border-gray-200 p-6 rounded-xl">
            @csrf
            @method('PATCH')

            <x-form.input name="title" type="text" :value="old('title', $post->title)"/>
            <x-form.input name="slug" type="text"  :value="old('slug', $post->slug)" />
            <div class="flex mt-6">
                <div class="flex-1">
                    <x-form.input name="thumbnail" type="file" :value="old('thumbnail', $post->thumbnail)"/>
                </div>
                <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="" class="rounded-xl ml-4" width="200">
            </div>
            <x-form.textarea name="excerpt">{{old('excerpt', $post->excerpt)}}</x-form.textarea>
            <x-form.textarea name="body">{{old('body', $post->body)}}</x-form.textarea>
            <x-form.lable name="category_id"/>
            <x-form.field>
                <select name="category_id" id="category" class="border border-blue-400 p-2 w-full rounded-xl" required>
                    <option value="{{old('$category')}}">Select a category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ old('category_id', $post->category_id) == $category->id ? 'selected' : ''}}>{{ ucwords($category->name) }}</option>
                    @endforeach
                </select>

                <x-form.error name="category_id" />
            </x-form.field>
            {{--        <x-form.select :items="$categories">category_id</x-form.select>--}}
            <x-form.button>Update</x-form.button>

        </form>
    </x-setting>
</x-layout>
