<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="bg-gray-100 text-gray-700">
    <div class="w-fit md:w-10/12 lg:w-9/12 m-auto">
        <nav class="flex justify-center gap-4 mt-5">
        <a href="/" class="hover:text-blue-500">Home</a>
            <a href="/about" class="hover:text-blue-500">About</a>
            <a href="/category" class="hover:text-blue-500">Category</a>
            <a href="/news" class="hover:text-blue-500">News</a>
            <a href="/projects" class="hover:text-blue-500">Projects</a>
        </nav>
        <div class="container mx-auto mt-4">
            @yield('content')
        </div>
    </div>
</body>
</html>