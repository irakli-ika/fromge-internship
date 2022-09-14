<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8
                    grid">
            <x-jet-post-card-single :id="$post->id" :heade="$post->heade"
                                    :body="$post->body" :like="$post->like"/>
        </div>
    </div>
</x-app-layout>
