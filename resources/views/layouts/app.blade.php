<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title','My App')</title>
</head>

<body class="bg-gray-50 min-h-screen flex flex-col font-sans">
    @include('partials.header')

    <main class="flex-grow flex items-center justify-center py-10 px-4">
        @yield('content')
    </main>

    @include('partials.footer')
</body>

</html>