<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Pagina 2</title>
</head>
<body>

    @include('components.header')

    <div class="container-fluid">

        <div>

            @include('components.sidebar')

        </div>

        <div>

            @include('components.main-content')

        </div>



    </div>



    @include('components.footer')

</body>
</html>
