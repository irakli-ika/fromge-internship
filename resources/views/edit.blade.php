<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit') }}
        </h2>
    </x-slot>
    @if (session()->get('message'))
        <x-jet-success-message :message="session()->get('message')"/>
        <script src="{{ asset('js/message-timer.js')}}"></script>
    @endif
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8
                    grid">
            <x-jet-post-edit :id="$post->id" :heade="$post->heade" :body="$post->body"/>
        </div>
    </div>
</x-app-layout>
