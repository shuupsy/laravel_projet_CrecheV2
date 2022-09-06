<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    {{-- Link CSS --}}
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/media.css">
    <link rel="stylesheet" href="/assets/css/profilenfant.css">
    {{-- Link BoxIcons --}}
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <title>PARENT</title>
</head>

<body>
    <header>
        @include('front.partial.nav')
    </header>

    <main>
        @yield('content')
    </main>

    {{-- Link JS --}}
    <script src="/assets/js/panel.js"></script>
</body>

</html>
