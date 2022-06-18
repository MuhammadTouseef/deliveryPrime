<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
          integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('/style/style.css')}}" />

    <title>Food Delivery</title>
</head>

<body>
<!-- Navbar -->
<nav class="navbar fixed-top navbar-dark text-white bg-dark">
    <div class="container-xxl py-3">
        <div class="col-md-4 left">
            <h4 class="d-inline">
                <i class="fa-solid fa-bars mx-3"></i>
            </h4>
            <h2 class="d-inline">Delivery Prime</h2>

        </div>
        <div class="mx-auto col-md-4  d-none" id="navSearchBar">
            <div class="input-group">
                    <span class="input-group-text bg-dark text-white" >
                        <i class="fa-solid fa-location-crosshairs fa-2x locicn"></i>
                    </span>
                <input type="text" class="form-control " id="locationtop" placeholder="Delivery Address ..."  />
                <span class="input-group-text bg-dark text-white" >
                        <i class="fa-solid fa-search fa-2x "></i>
                    </span>
            </div>
        </div>
        <div class="col-md-4 right ms-auto ">
            <div class="d-flex align-items-center justify-content-end">
                <button type="button" class="navbtn btn btn-light text-dark btn-outline-light btn-md px-4 py-2 mx-1">
                    Login
                </button>
                <button type="button" class="navbtn btn btn-light text-dark btn-outline-light btn-md px-4 py-2 mx-1">
                    Sign Up
                </button>
            </div>
        </div>
    </div>
</nav>


{{$slot}}


<footer class="bg-dark text-white py-2">
    <h6 class="container-lg py-1 text-center">© 2022 Delivery Prime.</h6>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

<link rel="stylesheet" href="{{asset('/js/app.js')}}" />

</body>

</html>
