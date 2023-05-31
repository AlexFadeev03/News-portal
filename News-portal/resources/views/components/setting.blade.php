<div>

    <section class="px-10 py-8 max-w-6xl mx-auto">

        <h1 class="font-bold text-3xl mt-10 mb-8 pb-2 border-b  ">
            {!! $heading !!}
        </h1>
        <div class="flex mt-4">
            <acide class="w-48 flex-shrink-0">
                <h4 class="font-bold mb-4">Links</h4>
                <ul>
                    <li>
                        <a href="/admin/posts" class=" font-bold {{request()->routeIs('admin_posts') ? 'text-blue-500' : 'text-blue-400'}}">All posts</a>
                    </li>
                    <li>
                        <a href="/admin/posts/create" class=" font-bold {{request()->routeIs('admin_post_create') ? 'text-blue-500' : 'text-blue-400'}}">Create Post</a>
                    </li>
                </ul>
            </acide>

            <main class="flex-1">
                {{ $slot }}
            </main>
        </div>

    </section>
</div>
