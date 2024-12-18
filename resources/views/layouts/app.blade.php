<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
</head>

<body class="overflow-x-hidden">
    @include('components.navbar')
    <div class="container mx-auto mt-5 px-4 lg:px-8">
        @yield('content')
    </div>
</body>

</html>
