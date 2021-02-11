<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Movie App</title>
</head>
<body class="font-sans text-white bg-gray-900">
    <nav class="border-b border-gray-800">
        <div class="container flex items-center justify-between px-4 py-6 mx-auto">
            <ul class="flex items-center">
                <li>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                          </svg>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    @yield('content')

    <script src="{{ asset('ja/app.js') }}"></script>
</body>
</html>