{{-- <h2>asdasd</h2> --}}
<div class="w-full mt-2">
    <form action="{{ route('comment') }}" method="post" class="comment-form relative">
        @csrf
        <input type="hidden" name="post_id" value="{{ $postId }}">
        <input type="hidden" name="user_name" value="{{ Auth::user()->name }}">
        <textarea name="comment_body" placeholder="Write Comment ..."
                class="w-full resize-none rounded bg-gray-50 focus:bg-gray-100"></textarea>
        <button type="submit" data-id="{{ $postId }}" class="absolute right-3 top-1/2 -translate-y-1/2">
            <i class="text-blue-500 hover:text-blue-700 text-xl fa-regular fa-comment"></i>
        </button>
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
