<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Store</title>
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body>
    <div class="col-md-12 mx-auto d-flex align-items-center vw-100 justify-content-between bg-secondary">
        <h2 class="ml-5">Welcome {{auth()->user()->name}}</h2>
        <a href="javascript: document.getElementById('logout').submit()" class="btn btn-danger btn-sm mr-5">Log out</a>
        <form action="{{route('logout')}}" id="logout" style="display:none" method="post">
            @csrf
        </form>
    </div>
    @yield('content')
</body>

</html>
