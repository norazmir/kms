
<div class="card mb-3">
    <div class="card-body">
        <h5 class="card-title"><strong>Student Application Status</strong></h5>
        <div class="list-table">
            <table class="table-responsive">
                <thead>
                <tr>
                    <th scope="col">Matrix Number</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Courses</th>
                    <th scope="col">UiTM Branch</th>
                    <th scope="col">Sports Applied</th>
                </tr>
                </thead>
                <tbody>
                @foreach($studentForms as $studentForm)
                    @if($studentForm -> status == 'Approve')
                        <tr>
                            <td>{{$studentForm -> matrixNumber}}</td>
                            <td>{{$studentForm -> firstName}}</td>
                            <td>{{$studentForm -> lastName}}</td>
                            <td>{{$studentForm -> gender}}</td>
                            <td>{{$studentForm -> phoneNumber}}</td>
                            <td>{{$studentForm -> courses}}</td>
                            <td>{{$studentForm -> branch}}</td>
                            <td>{{$studentForm -> sportsType}}</td>
                        </tr>
                    @endif
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
