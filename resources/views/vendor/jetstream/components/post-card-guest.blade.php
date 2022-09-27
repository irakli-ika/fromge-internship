<div class="flex flex-col justify-between relative bg-white max-w-sm min-w-full rounded-lg shadow-lg p-6 pt-8">
    {{-- tool bar --}}
    <div class="absolute top-2 right-4 flex gap-4">
        {{-- See more --}}
        <a href="{{ route("posts.show", $postId ) }}" class="text-green-600 hover:text-green-700">
            <i class="fa-solid fa-eye"></i>
        </a>
    </div>
    {{-- body --}}
    <div class="block">
        <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">{{ $heade }}</h5>
        <p class="text-gray-700 text-base mb-4">{{ Str::limit(Strip_tags($body),100,' ...')}}</p>
    </div>
    {{-- footer bar --}}
    <div>
        <div class="flex justify-between items-center ">
            <div class="mt-2 flex items-center gap-2">
                <form method="post" class="like-form">
                    @csrf
                    {{-- hidden input --}}
                    <input type="hidden" name="post_id" value="{{ $postId }}">
                    {{-- like --}}
                    <a href="{{ route('login')}}" name="like" class="text-blue-500 hover:text-blue-700 text-xl">
                        <i class="fa-regular fa-thumbs-up pointer-events-none"></i>
                    </a>
                </form>
                <div class="text-sm">
                    <span class="like-qty-{{ $postId }}">{{ $like->where('post_id', $postId)->count() }}</span> like
                </div>
            </div>
            <div class="text-gray-800 text-sm">
                Author: <span>{{ $user->name }}</span>
            </div>
        </div>
        <div class="w-full mt-2">
            <form method="post" class="comment-form relative">
                @csrf
                <input type="hidden" name="post_id" value="{{ $postId }}">
                <textarea name="comment_body" placeholder="Write Comment ..."
                        class="w-full resize-none rounded bg-gray-50 focus:bg-gray-100"></textarea>
                <a href="{{ route('login') }}" class="absolute right-3 top-1/2 -translate-y-1/2">
                    <i class="text-blue-500 hover:text-blue-700 text-xl fa-regular fa-comment"></i>
                </a>
            </form>
            
            <div class="comment-box w-full h-40 p-2 overflow-auto" id="{{ $postId }}">
                @if ($comments->count())
                    @foreach ($comments->where('post_id', $postId)->sortDesc() as $comment)
                    <div class="rounded shadow-md p-2 my-2 relative">
                        <h6 class="text-sm">{{ $user->where('id', $comment->user_id)->first()->name }}</h6>
                        <span class="text-[10px] absolute left-4 top-6">{{ $comment->created_at->diffForHumans() }}</span>
                        <p class="pt-3 leading-4 text-sm text-gray-800">{{ $comment->comment_body }}</p>
                    </div>
                    @endforeach
                @else
                    <h4>No comments yet.</h4>
                @endif
            </div>
        </div>    
    </div>
</div>
