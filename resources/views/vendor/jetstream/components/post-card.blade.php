<div class="flex flex-col justify-between relative bg-white max-w-sm min-w-full rounded-lg shadow-lg p-6 pt-8">
    {{-- tool bar --}}
    <div class="absolute top-2 right-4 flex gap-4">
        <a href="{{ route("posts.show", $id) }}" class="text-green-600 hover:text-green-700">
            <i class="fa-solid fa-eye"></i>
        </a>
        <a href="{{ route("posts.edit", $id) }}" class="text-blue-500 hover:text-blue-700">
            <i class="fa-solid fa-pencil"></i>
        </a>
        <form action="{{ route('posts.destroy', $id )}}" method="post" onsubmit="return confirm('Are you sure you want delete this post?')">
            @csrf
            @method('DELETE')
            <button class="text-red-500 hover:text-red-600">
                <i class="fa-solid fa-trash-can"></i>
            </button>
        </form>
    </div>
    {{-- body --}}
    <div class="block">
        <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">{{ $heade }}</h5>
        <p class="text-gray-700 text-base mb-4">{{ Str::limit(Strip_tags($body),100,' ...')}}</p>
    </div>
    {{-- footer bar --}}
    <div class="flex justify-between items-center">
        <div class="mt-2">
            {{-- unlike --}}
            <a href="" data-id="{{ $id }}" class="like text-blue-500 hover:text-blue-700 text-xl">
                <i class="fa-regular fa-thumbs-up pointer-events-none"></i>
            </a>
            {{-- like --}}
            <a href="" onclick="dislike(event)" data-id="{{ $id }}" class="text-blue-500 hover:text-blue-700 text-xl">
                <i class="fa-solid fa-thumbs-up pointer-events-none"></i>
            </a>
        </div>
        <div>
            <a href="" class="text-blue-500 hover:text-blue-700">Comment</a>
        </div>
    </div>
</div>