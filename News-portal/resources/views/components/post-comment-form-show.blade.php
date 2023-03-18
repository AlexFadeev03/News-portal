@props(['post'])
<x-panel>
    <form method="POST" action="/posts/{{ $post->slug }}/comments">
        @csrf
        <header class="flex items-center">
            <img src="https://i.pravatar.cc/60?u={{ auth()->id()}}" alt="Lary avatar" class="rounded-full mr-4" width="60" height="60">
            <h2>Want to participate?</h2>
        </header>
        <x-post-comment-form/>
    </form>
</x-panel>

