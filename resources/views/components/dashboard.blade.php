<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
          integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('/style/style.css')}}" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <title>Food Delivery</title>
</head>

<body style="background-color: #F4F5F7;">
<!-- Navbar -->
<nav class="navbar fixed-top navbar-dark text-white bg-dark">
    <div class="container-fluid  py-1">
        <div class="col-md-4 left">

            <h2 class="d-inline">Delivery Prime</h2>

        </div>

        <div class="col-md-4 right ms-auto ">
            <div class="d-flex align-items-center justify-content-end">
                <h4 class="d-inline d-lg-none" id="dashhumburger">
                    <i class="fa-solid fa-bars mx-3"></i>
                </h4>
                <h5>
                    {{auth()->user()->name}}
                </h5>
                <div class="usermenu position-relative">
                    <h4 id="usricn" class="mx-3 text-dark bg-light py-1 px-2 userbtn">

                        <i class="fa-solid fa-user"></i>
                    </h4>
                    <div class="d-none useropt bg-light text-dark">
                        <ul>
                            <li class="my-2">
                                <a href="#">
                                    Profile
                                </a>
                            </li>
                            <li class="my-2">
                                <a href="">
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<div class="row dashlayout">

    @if(auth()->user()->role()->first('name')->name == 'Business')
        @include('partials._businnessNav')

    @elseif(auth()->user()->role()->first('name')->name == 'Admin')
        @include('partials._adminNav')

    @elseif(auth()->user()->role()->first('name')->name == 'Customer')
        @include('partials._customerNav')
    @endif
    <div id="dashmain" class="col-lg-10 px-4 mx-auto " style="min-height: 70vh; max-width: 1600px;">
        <h2 class="text-center my-5">
            Welcome! Mr. {{auth()->user()->name}}
        </h2>


        <div class="d-flex align-items-center justify-content-center flex-column">
         {{$slot}}
        </div>
    </div>
</div>


<footer class="bg-dark text-white py-2">
    <h6 class="container-lg py-1 text-center">© 2022 Delivery Prime.</h6>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

<script src="{{asset('js/dashboard.js')}}"></script>
</body>

</html>
