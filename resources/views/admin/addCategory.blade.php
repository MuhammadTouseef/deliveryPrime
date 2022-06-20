<x-dashboard>
    <h2>
        Add New Category
    </h2>


    @if ($errors->any())
        <div class="alert alert-danger my-5">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="categories" method="post" class="w-75" >
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Category Name</label>
            <input type="text" required class="form-control" name="name"  placeholder="Enter Dish Name">
        </div>




        <div class="mb-3">

            <input type="submit" required class="form-control btn btn-lg btn-dark" name="image"   >
        </div>
    </form>



</x-dashboard>
