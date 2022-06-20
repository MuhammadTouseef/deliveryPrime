<x-dashboard>
    <h2>
        Add New Dish
    </h2>
{{--    <img src="{{\Illuminate\Support\Facades\Storage::url('food/U3m2S3b90uCUfuAe4OPe5He50cv6DDjJdODqJUmv.png')}}" alt="">--}}
    @if ($errors->any())
        <div class="alert alert-danger my-5">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger my-5">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="dishes" method="post" class="w-75" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Dish Name</label>
            <input type="text" required class="form-control" name="name"  placeholder="Enter Dish Name">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Dish Description</label>
            <input type="text" required class="form-control" name="description"  placeholder="Enter Dish Name">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Dish Cost</label>
            <input type="number" required class="form-control" name="cost"  placeholder="Enter Dish Cost">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Image</label>
            <input type="file" required class="form-control" name="image"  >
        </div>

        <div class="mb-3">

            <input type="submit" required class="form-control btn btn-lg btn-dark" name="image"   >
        </div>
    </form>



</x-dashboard>
