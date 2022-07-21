<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <nav class="flex justify-center gap-4 mt-5">
        <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/category">Category</a>
            <a href="/news">News</a>
            <a href="/projects">Projects</a>
        </nav>
        @yield('content')
    </div>
</body>
</html>