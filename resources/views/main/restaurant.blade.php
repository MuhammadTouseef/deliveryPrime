<x-layout>
    <div class="container-xxl restHero">
        <div class="col-lg-8">

            <div class="heroImg" style="background: url({{$business->header ? asset('storage/'. $business->header) : asset('../images/restaurant.jpg') }}) no-repeat center center/cover;">

            </div>
            <h2 class="restaurantTitle my-2">
                <a href="#" class="text-decoration-none">
                    {{$business->business_name}}
                </a>
                <span class="rating">
                    4.5 / 5 <i class="fa fa-star"></i>
                </span>
            </h2>
            <h6>
                PIZZA | BURGER | ROLLS
            </h6>




            <div class="itemsSection my-4">
                <h2>
                    All Products
                </h2>
                @if (count($dishes) == 0)
                    <p>
                        No Product Found
                    </p>
                @else
                    @foreach($dishes->chunk(2) as $items)
                        <div class="itemCardsec row my-3">
                            @foreach($items as $item)
                                <div class="col-md-1">

                                </div>
                                <div class="col-md-5 itemCard no-padding">
                                    <div class="row">
                                        <div class="col-6 d-flex align-items-center justify-content-center flex-column p-3">
                                            <h6>
                                               {{$item->name}}
                                            </h6>
                                            <p>
                                                {{$item->description}}
                                            </p>
                                            <h6>
                                                Rs {{$item->cost}} <i class="fa-solid fa-circle-plus"></i>
                                            </h6>

                                        </div>
                                        <div class="col-6">
                                            <img src="{{\Illuminate\Support\Facades\Storage::url($item->image)}}" alt="" width="100%">
                                        </div>
                                    </div>
                                </div>

                            @endforeach
                        </div>
                    @endforeach

                @endif

            </div>



        </div>
        <div id="cart" class="col-md-3 restSidebar dn">
            <h2 class="text-center my-3">
                Your Order
            </h2>

            <div class="row my-1 cartItem">
                <div class="col-6 d-flex align-items-center justify-content-center flex-column">
                    <h3>
                        Burger
                    </h3>

                    <h6>
                        Rs 300 (1 X)
                    </h6>
                    <h6>
                        Cost: Rs 300
                    </h6>

                </div>
                <div class="col-6">
                    <img src="./assets/burgernew.jpg" alt="" width="100%">
                </div>
            </div>
            <hr>

            <div class="row my-1 cartItem">
                <div class="col-6 d-flex align-items-center justify-content-center flex-column">
                    <h3>
                        Burger
                    </h3>

                    <h6>
                        Rs 300 (10 X)
                    </h6>
                    <h6>
                        Cost: Rs 3000
                    </h6>

                </div>
                <div class="col-6">
                    <img src="./assets/burgernew.jpg" alt="" width="100%">
                </div>
            </div>
            <hr>
            <h4 class="text-center">
                Subtotal: Rs 3300
            </h4>
            <h4 class="text-center">
                Tax: 17 %
            </h4>
            <h4 class="text-center">
                Total: Rs 4000
            </h4>

        </div>

    </div>
    </div>

    <div id="floatcard" onclick="cartbtnhandle()" class="my-2 d-flex align-items-center justify-content-center d-md-none">
        <div class="col-8 bg-dark text-white ">
            <h3 id="vc" class="text-center px-2 py-2">
                View Cart
            </h3>
        </div>
    </div>
</x-layout>
