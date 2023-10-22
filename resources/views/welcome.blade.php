<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- Title Logo --}}
        <link rel="shortcut icon" href="{{ asset('favicon.svg') }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- custom style -->
        <link rel="stylesheet" href="{{ asset('styles/scrollbar.css') }}">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        {{-- fontawesome cdn link --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="antialiased">
        @livewire('navigation-menu-guest')

        <div class="bg-gray-100 min-h-screen dark:bg-gray-900 py-4 sm:pt-0">
            @if (session()->get('message'))
                <x-jet-success-message :message="session()->get('message')"/>
                    <script src="{{ asset('js/message-timer.js')}}"></script>
            @endif
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8
                            grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                            {{-- <p>{{ $like_qty }}</p> --}}
                    @forelse ($posts as $post) 
                        <x-jet-post-card-guest :postId="$post->id" :heade="$post->heade"
                                        :body="$post->body" :like="$post->like"
                                        :comments="$post->comments" :user="$post->user"/>
                    @empty  
                        <h2>No post yet.</h2>
                    @endforelse
                </div>
            </div>
        </div>
        <x-jet-footer />
        @livewireScripts
    </body>
</html>
