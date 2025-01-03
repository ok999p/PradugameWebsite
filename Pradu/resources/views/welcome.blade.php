<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<div class="w-full h-screen">
    <div>
        <img src="{{ asset('/Logo.png') }}" alt="" style="width: 100px">
        </div>
    </div>
    <div class="load" id="preloader">
        <div class="progress">
            <img src="{{ asset('/img/Logo_6.png') }}" alt="" class="w-1/2" style="width: 60px">
        </div>
        <div class="progress">
            <img src="{{ asset('/img/Logo_5.png') }}" alt="" class="w-1/2" style="width: 60px">
        </div>
        <div class="progress">
            <img src="{{ asset('/img/Logo_4.png') }}" alt="" class="w-1/2" style="width: 60px">
        </div>
        <div class="progress">
            <img src="{{ asset('/img/Logo_3.png') }}" alt="" class="w-1/2" style="width: 60px">
        </div>
        <div class="progress">
            <img src="{{ asset('/img/Logo_2.png') }}" alt="" class="w-1/2" style="width: 60px">
        </div>
        <div class="progress">
            <img src="{{ asset('/img/Logo_1.png') }}" alt="" class="w-1/2" style="width: 60px">
        </div>
    </div>


    <script>
        // window.addEventListener('load', function () {
        //     const loader = document.getElementById('preloader');
        //     setTimeout(() => {
        //         loader.style.display = 'none';
        //     }, 2000);
        // });
    </script>
</body>
</html>
