<x-dashboard>
    <h2>Admins</h2>
    <table class="table table-dark table-striped" id="admintable">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Username</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($admins as $admin)
        <tr>
            <th scope="row">{{$admin->id}}</th>
            <td>{{$admin->name}}</td>
            <td>{{$admin->email}}</td>
            <td>
                {{$admin->username}}
            </td>
            <td>
                <button class="btn btn-light adminDelete" onclick="adminDelete({{$admin->id}},this)">
                    Delete
                </button>
            </td>
        </tr>

        @endforeach

        </tbody>
    </table>
</x-dashboard>
