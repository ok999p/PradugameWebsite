<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello</title>
    <link rel="stylesheet" href="{{ asset(path: 'css/style.css') }}">
</head>
<body>
    <div class="load" id="preloader">
        <div class="progress">
            <img src="{{ asset('/img/Logo_6.svg') }}" alt="Logo_6" style="width: 60px">
        </div>
        <div class="progress">
            <img src="{{ asset('/img/Logo_5.svg') }}" alt="Logo_5" style="width: 60px">
        </div>
        <div class="progress">
            <img src="{{ asset('/img/Logo_4.svg') }}" alt="Logo_4" style="width: 60px">
        </div>
        <div class="progress">
            <img src="{{ asset('/img/Logo_3.svg') }}" alt="Logo_3" style="width: 60px">
        </div>
        <div class="progress">
            <img src="{{ asset('/img/Logo_2.svg') }}" alt="Logo_2" style="width: 60px">
        </div>
        <div class="progress">
            <img src="{{ asset('/img/Logo_1.svg') }}" alt="Logo_1" style="width: 60px">
        </div>
    </div>


    <script>
   window.addEventListener('load', function () {
        const loader = document.getElementById('preloader');
        setTimeout(() => {
            loader.style.display = 'none'; // ซ่อน preloader หลังจาก delay 2 วินาที
        }, 2300); // หน่วงเวลา 2 วินาที (2000ms)
    });
</script>

</body>
</html>
