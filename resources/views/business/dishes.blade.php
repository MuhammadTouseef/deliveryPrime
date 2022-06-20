<x-dashboard>
    <div class="d-flex w-100 justify-content-between align-items-center">
        <h2>Manage Dished</h2>
        <a href="dishes" class="btn btn-lg btn-dark">
            Add Dishes
        </a>
    </div>

    <table class="table my-3">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Cost</th>
            <th scope="col">
                Image
            </th>
            <th scope="col">Edit</th>
            <th scope="col">Delte</th>
        </tr>
        </thead>
        <tbody>
        @foreach($dishes as $dish)
            <tr>
                <th scope="row">{{$dish->id}}</th>
                <td>{{$dish->name}}</td>
                <td>{{$dish->description}}</td>
                <td>Rs. {{$dish->cost}}</td>
                <td>
                    <a href="{{\Illuminate\Support\Facades\Storage::url($dish->image)}}" target="_blank"
                       class="btn  btn-dark dishimg">
                        View Image
                    </a>
                </td>
                <td>
                    <a href="" class="btn  btn-primary">
                        Edit
                    </a>
                </td>
                <td>
                    <a href="#" class="btn  btn-danger " onclick="dishdel({{$dish->id}},this)">
                        Delete
                    </a>
                </td>
            </tr>

        @endforeach

        </tbody>
    </table>
</x-dashboard>
