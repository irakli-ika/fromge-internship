<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- custom style -->
        <link rel="stylesheet" href="{{ asset('styles/scrollbar.css') }}">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        {{-- fontawesome cdn link --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
        <!-- Scripts -->
        <script src="{{ asset('js/like.js')}}"></script>
        <script src="{{ asset('js/comment.js')}}"></script>
        <script type="text/javascript">
            let like_url = "{{ route('like') }}";
            let comment_url = "{{ route('comment') }}";
            let user_id = "{{ Auth::user()->id}}";
        </script>
    </body>
</html>
