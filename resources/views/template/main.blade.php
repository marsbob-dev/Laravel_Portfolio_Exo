<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('partials/link')
</head>
<body>
    @include('homepage/partials/header')
    <main id="main">
        @yield('content')
    </main>
    @include('homepage/partials/footer')
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
    @include('partials/script')
</body>
</html>