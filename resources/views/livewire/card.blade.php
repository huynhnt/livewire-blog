<li>
    <div class="max-w-sm rounded overflow-hidden shadow-xl">
        <img class="w-full h-64 px-6 py-4" src="{{ Storage::url($post->hot_image) }}"
             alt="{{ $post->title }}">
        <div class="px-6 py-4">
            <a href="{{ $post->detail_url }}">
                <div class="font-normal text-xl text-gray-500 hover:underline hover:text-indigo-600 ">{{ $post->title }}</div>
            </a>
        </div>
        <livewire:tag-list :tags="$post->tag"/>
    </div>
</li>