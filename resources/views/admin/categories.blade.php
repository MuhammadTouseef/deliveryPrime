<x-dashboard>
    <div class="d-flex w-100 justify-content-between align-items-center">
        <h2>Manage Categories</h2>
        <a href="addcategory" class="btn btn-lg btn-dark">
            Add Categories
        </a>
    </div>


    @if (count($categories) == 0)
        <p>
            No Product Found
        </p>
    @else
        <table class="table my-3">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <th scope="row">{{$category->id}}</th>
                    <td>{{$category->name}}</td>

                    <td>
                        <a href="" class="btn  btn-primary">
                            Edit
                        </a>
                    </td>
                    <td>
                        <a href="#" class="btn  btn-danger " onclick="dishdel({{$category->id}},this)">
                            Delete
                        </a>
                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>
    @endif


</x-dashboard>
