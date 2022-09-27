<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>
    @if (session()->get('message'))
        <x-jet-success-message :message="session()->get('message')"/>
            <script src="{{ asset('js/message-timer.js')}}"></script>
    @endif
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8
                    grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                    {{-- <p>{{ $like_qty }}</p> --}}
            @forelse ($posts as $post) 
                <x-jet-post-card :postId="$post->id" :heade="$post->heade"
                                 :body="$post->body" :like="$post->like"
                                 :comments="$post->comments" :user="$post->user"/>
            @empty  
                <h2>No post yet.</h2>
            @endforelse
        </div>
    </div>
</x-app-layout>
