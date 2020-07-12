
<div class="card mb-3">
    <img src="https://cdn.pixabay.com/photo/2015/05/19/14/55/educational-773651_960_720.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title"><strong>List of Jsp Administrator</strong></h5>
        <div class="list-table">
            <table class="table-responsive">
                <thead>
                <tr>
                    <th scope="col">Matrix Number</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Role</th>
                    <th scope="col">Email Address</th>
                    <th scope="col">Courses</th>
                    <th scope="col">UiTM Branch</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($adminJsps as $adminJsp)
                    <tr>
                        <td>{{$adminJsp -> matrixNumber}}</td>
                        <td>{{$adminJsp -> firstName}}</td>
                        <td>{{$adminJsp -> lastName}}</td>
                        <td>{{$adminJsp -> gender}}</td>
                        <td>{{$adminJsp -> phoneNumber}}</td>
                        <td>{{$adminJsp -> role}}</td>
                        <td>{{$adminJsp -> emailAddress}}</td>
                        <td>{{$adminJsp -> courses}}</td>
                        <td>{{$adminJsp -> branch}}</td>
                        <td>
                            <a href="{{ url('/admin/edit/'.$adminJsp->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
