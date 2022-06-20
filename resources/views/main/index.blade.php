<x-layout>
    @include('partials._hero')

    <!-- Cards -->

    <div class="container-md my-4">
        <!-- <h2 class="cities">
            Cities
        </h2> -->
        <div class="row bg-light">
            <a class="col-md-6 position-relative my-2" href="/business">
                <img src="{{asset('images/restaurant.jpg')}}" alt="" width="100%" />
                <h2 class="py-2 position-absolute bottom-0 start-8 p-4 bg-dark text-white mshd">
                    Register your Restaurant
                </h2>
            </a>
            <a class="col-md-6 position-relative my-2" href="#">
                <img src="{{asset('/images/rider.jpg')}}" alt="" width="100%" />
                <h2 class="py-2 position-absolute bottom-0 start-8 p-4 bg-dark text-white mshd">
                    Become a Rider
                </h2>
            </a>
        </div>
    </div>

    <!-- Cities -->

    <div class="container-md my-4">
        <h2 class="cities">Cities near me</h2>

        <div class="row cityblock">
            <a href="/products/Islamabad" class="col-md-4 col-10 mx-auto position-relative my-2">
                <img src="{{asset('/images/islamabad.jpg')}}" alt="" width="100%" />
                <h2 class="citytag bg-dark text-white py-2 p-4">Islamabad</h2>
            </a>

            <a href="/products/Lahore" class="col-md-4 col-10 mx-auto position-relative my-2">
                <img src="{{asset('/images/lahore.jpg')}}" alt="" width="100%" />
                <h2 class="citytag bg-dark text-white py-2 p-4">Lahore</h2>
            </a>

            <a href="/products/Karachi" class="col-md-4 col-10 mx-auto position-relative my-2">
                <img src="{{asset('images/karachi.jpg')}}" alt="" width="100%" />
                <h2 class="citytag bg-dark text-white py-2 p-4">Karachi</h2>
            </a>
        </div>
    </div>
{{--    <h1>--}}
{{--        {{auth()->user()->role()->first('name')->name}}--}}
{{--    </h1>--}}
</x-layout>
