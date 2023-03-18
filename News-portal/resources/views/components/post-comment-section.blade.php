@props(['post'])

@if($post->comments && $post->comments->count())
    <h1 class="font-bold text-center text-1xl lg:text-2xl mb-4 rounded-xl bg-blue-200 text-white">
        Comments
    </h1>

    @if(!auth()->check())
        <p class="text-center">Please <a href="/login" class="underline text-blue-500 hover:text-green-500">login</a> to comment.</p>
    @else
        <x-post-comment-form-show :post="$post"/>
    @endif

    @foreach( $post->comments as $comment)
        <x-post-comment :comment="$comment"/>
    @endforeach
@else
    <p class="text-center">No comments yet. Be the <span class="text-blue-500">first!</span></p>
    @if(!auth()->check())
        <p class="text-center">Please <a href="/login" class="text-blue-500 hover:text-green-500">login</a> to comment.</p>
    @else
        <x-post-comment-form-show :post="$post"/>
    @endif
@endif
