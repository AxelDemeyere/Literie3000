<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Literie 3000</title>
</head>
<header style="background-color: #0C4085" class="shadow-lg d-flex justify-content-center">
    <div class="d-flex align-items-center justify-content-between col-8">
        <div class="">
            <a href="/home">
                <img src="/upload/logo.png" alt="logo">
            </a>
        </div>
        <div>
            <nav>
                <a href="/produits"><button type="button" class="btn btn-outline-light">Produits</button></a>
                <a href="/marques"><button type="button" class="btn btn-outline-light">Marques</button></a>
                <a href="/dimensions"><button type="button" class="btn btn-outline-light">Dimensions</button></a>

            </nav>

        </div>
    </div>
</header>

<body>
    <div class="d-flex flex-column">
        @yield('content')
    </div>

</body>

<footer>
    
</footer>

</html>
