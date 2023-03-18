@props(['comment'])
<div>
    <x-panel class="bg-gray-50">

        <article class="flex">
            <div class="mr-3 flex-shrink-0">
                <img src="https://i.pravatar.cc/65?u={{$comment->author->id}}" alt="Lary avatar" class="rounded-xl" width="65" height="65">
            </div>
            <div>
                <header class="mb-4">
                    <h3 class="font-bold">{{$comment->author->username}}</h3>

                    <p class="text-xs">
                        Posted
                        <time>{{$comment->created_at->format('F j, Y, g:i a')}}</time>
                    </p>
                </header>

                <p>
                    {{$comment->body}}
                </p>
            </div>
        </article>
    </x-panel>

</div>
