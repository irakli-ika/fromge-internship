<div class="flex flex-col justify-between relative bg-white max-w-sm min-w-full rounded-lg shadow-lg p-6 pt-8">
    {{-- tool bar --}}
    <div class="absolute top-4 right-4 flex gap-4">
        @if (Auth::user()->id == $post->user->id)
            {{-- Edit --}}
            <a href="{{ route('posts.edit', $post->id) }}" class="text-blue-500 hover:text-blue-700">
                <i class="fa-solid fa-pencil"></i>
            </a>
            {{-- Remove --}}
            <form action="{{ route('posts.destroy', $post->id )}}" method="post" onsubmit="return confirm('Are you sure you want delete this post?')">
                @csrf
                @method('DELETE')
                <button class="text-red-500 hover:text-red-600">
                    <i class="fa-solid fa-trash-can"></i>
                </button>
            </form>
        @endif
    </div>
    {{-- body --}}
    <div class="block">
        <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">{{ $post->heade }}</h5>
        <p class="text-gray-700 text-base mb-4">{{ $post->body }}</p>
    </div>
    {{-- footer bar --}}
    <div class="flex justify-between items-center ">
        <div class="mt-2 flex items-center gap-2">
            <form action="{{ route('like') }}" method="post" class="like-form">
                @csrf
                {{-- hidden input --}}
                <input type="hidden" name="post_id" value="{{ $post->id }}">
                {{-- like --}}
                <button type="submit" name="like" class="text-blue-500 hover:text-blue-700 text-xl">
                    @if (Auth::user()->like()->where('post_id', $post->id)->first())
                        <i class="fa-solid fa-thumbs-up pointer-events-none"></i>
                    @else
                        <i class="fa-regular fa-thumbs-up pointer-events-none"></i>
                    @endif
                </button>
            </form>
            <div class="text-sm">
                <span class="like-qty-{{ $post->id }}">{{ $post->like->where('post_id', $post->id)->count() }}</span> like
            </div>
        </div>
        <div class="text-gray-800 text-sm">
            Author: <span>{{ $post->user->name }}</span>
        </div>
    </div>
    <x-jet-post-comment-block :postId="$post->id" :comments="$post->comments"
                                :user="$post->user"/>
</div>