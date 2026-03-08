<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Tailwind Input Test</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center m-0">

    <div class="bg-white p-8 rounded-xl shadow-md w-full max-w-xl text-center">
        <h1 class="text-3xl text-red-600 mb-6">Hello World. This is Home Page</h1>

        <form class="flex flex-col items-center justify-center space-y-4 w-full">
            <input type="text" name="org_url"
                class="w-full border border-blue-200 px-4 py-3 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 focus:outline-none"
                placeholder="Put the URL">

            
        </form>
    </div>

</body>
</html>