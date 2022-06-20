<x-layout>
    <!-- Categories  -->
 <h1>

 </h1>
    <div class="productHero container-xxl bg-white">
        <br />
        <h2 class="cities my-3 my-md-1">Categories</h2>
        <div class="row d-flex align-items-center justify-content-center">
            <a class="catCard col-md-3 p-4 mx-3 my-4  text-white text-decoration-none" href="/products/{{$city}}/1">

                <div class="row"  >
                    <div class="col-7 d-flex align-items-center justify-content-center">
                        <h2 class="catHead text-center">Burger</h2>
                    </div>
                    <div class="col-5 p-2">
                        <img src="{{asset('images/burger.png')}}" class="" alt="" width="100%" />
                    </div>
                </div>
            </a>

            <a href="/products/{{$city}}/3" class="catCard col-md-3 p-4 mx-3 my-4  text-white text-decoration-none">
                <div class="row">
                    <div class="col-7 d-flex align-items-center justify-content-center">
                        <h2 class="catHead text-center">Pizza</h2>
                    </div>
                    <div class="col-5 p-2">
                        <img src="{{asset('images/pizzanew.png')}}" class="" alt="" width="100%" />
                    </div>
                </div>
            </a>

            <a href="/products/{{$city}}/4" class="catCard col-md-3 p-4 mx-3 my-4  text-white text-decoration-none">
                <div class="row">
                    <div class="col-7 d-flex align-items-center justify-content-center">
                        <h2 class="catHead text-center">Fast Food</h2>
                    </div>
                    <div class="col-5 p-2">
                        <img src="{{asset('images/fastfood.png')}}" class="" alt="" width="100%" />
                    </div>
                </div>
            </a>
        </div>

        <!-- Second Row -->
        <div class="row d-flex align-items-center justify-content-center">
            <a href="/products/{{$city}}/2" class="catCard col-md-3 p-4 mx-3 my-4  text-white text-decoration-none">
                <div class="row">
                    <div class="col-7 d-flex align-items-center justify-content-center">
                        <h2 class="catHead text-center">Local</h2>
                    </div>
                    <div class="col-5 p-2">
                        <img src="{{asset('images/korma.png')}}" class="" alt="" width="100%" />
                    </div>
                </div>
            </a>

            <a href="/products/{{$city}}/5" class="catCard col-md-3 p-4 mx-3 my-4  text-white text-decoration-none">
                <div class="row">
                    <div class="col-7 d-flex align-items-center justify-content-center">
                        <h2 class="catHead text-center">Dessert</h2>
                    </div>
                    <div class="col-5 p-2">
                        <img src="{{asset('images/dessert.png')}}" class="" alt="" width="100%" />
                    </div>
                </div>
            </a>

            <a href="/products/{{$city}}/6" class="catCard col-md-3 p-4 mx-3 my-4  text-white text-decoration-none">
                <div class="row">
                    <div class="col-7 d-flex align-items-center justify-content-center">
                        <h2 class="catHead text-center">Drinks</h2>
                    </div>
                    <div class="col-5 p-2">
                        <img src="{{asset('images/juicenew.png')}}" class="" alt="" width="100%" />
                    </div>
                </div>
            </a>
        </div>
    </div>

    <!-- Restaurants  -->

    <div class="container-md">
        <h2 class="restTitle my-3">
            Best Restaurants in {{$city}}
        </h2>
        @if (count($restaurants) == 0)
            <p>
                No Restaurant Found
            </p>
        @else
            @foreach($restaurants->chunk(3) as $items)
                <div class="row">
@foreach($items as $item)
                        <div class="col-md-4 text-center my-3 productCard no-padding">
                            <img  src="{{$item->mainimage ? asset('storage/'. $item->mainimage) : asset('images/restaurant.jpg')}}" alt="" class="" width="100%" />
                            <h2>{{$item->business_name}}</h2>
                            <a class="btn btn-dark" href="/restaurant/{{$item->id}}">
                                View Items
                            </a>
                        </div>


                    @endforeach

                </div>
            @endforeach
        @endif
{{--        <div class="row">--}}
{{--            <div class="col-md-4 text-center my-3 productCard no-padding">--}}
{{--                <img src="./assets/restaurant.jpg" alt="" class="" width="100%" />--}}
{{--                <h2>Restaurant ABC</h2>--}}
{{--                <h6>Rs. 200 Delivery Fee . 30-40 Min</h6>--}}
{{--            </div>--}}

{{--            <div class="col-md-4 text-center my-3 productCard no-padding">--}}
{{--                <img src="./assets/restaurant.jpg" alt="" class="" width="100%" />--}}
{{--                <h2>Restaurant ABC</h2>--}}
{{--                <h6>Rs. 200 Delivery Fee . 30-40 Min</h6>--}}
{{--            </div>--}}

{{--            <div class="col-md-4 text-center my-3 productCard no-padding">--}}
{{--                <img src="./assets/restaurant.jpg" alt="" class="" width="100%" />--}}
{{--                <h2>Restaurant ABC</h2>--}}
{{--                <h6>Rs. 200 Delivery Fee . 30-40 Min</h6>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="row">--}}
{{--            <div class="col-md-4 text-center my-3 productCard no-padding">--}}
{{--                <img src="./assets/restaurant.jpg" alt="" class="" width="100%" />--}}
{{--                <h2>Restaurant ABC</h2>--}}
{{--                <h6>Rs. 200 Delivery Fee . 30-40 Min</h6>--}}
{{--            </div>--}}

{{--            <div class="col-md-4 text-center my-3 productCard no-padding">--}}
{{--                <img src="./assets/restaurant.jpg" alt="" class="" width="100%" />--}}
{{--                <h2>Restaurant ABC</h2>--}}
{{--                <h6>Rs. 200 Delivery Fee . 30-40 Min</h6>--}}
{{--            </div>--}}

{{--            <div class="col-md-4 text-center my-3 productCard no-padding">--}}
{{--                <img src="./assets/restaurant.jpg" alt="" class="" width="100%" />--}}
{{--                <h2>Restaurant ABC</h2>--}}
{{--                <h6>Rs. 200 Delivery Fee . 30-40 Min</h6>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="row">--}}
{{--            <div class="col-md-4 text-center my-3 productCard no-padding">--}}
{{--                <img src="./assets/restaurant.jpg" alt="" class="" width="100%" />--}}
{{--                <h2>Restaurant ABC</h2>--}}
{{--                <h6>Rs. 200 Delivery Fee . 30-40 Min</h6>--}}
{{--            </div>--}}

{{--            <div class="col-md-4 text-center my-3 productCard no-padding">--}}
{{--                <img src="./assets/restaurant.jpg" alt="" class="" width="100%" />--}}
{{--                <h2>Restaurant ABC</h2>--}}
{{--                <h6>Rs. 200 Delivery Fee . 30-40 Min</h6>--}}
{{--            </div>--}}

{{--            <div class="col-md-4 text-center my-3 productCard no-padding">--}}
{{--                <img src="./assets/restaurant.jpg" alt="" class="" width="100%" />--}}
{{--                <h2>Restaurant ABC</h2>--}}
{{--                <h6>Rs. 200 Delivery Fee . 30-40 Min</h6>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="d-flex align-items-center justify-content-center my-3">--}}
{{--            <button class="btn-lg btn-dark">Load More</button>--}}
{{--        </div>--}}
    </div>
</x-layout>
