<div class="card mb-3">
    <img src="https://cdn.pixabay.com/photo/2015/05/19/14/55/educational-773651_960_720.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5><strong>List of Potential Karisma Candidate</strong></h5>
        <div class="list-table">
            <table class="table-responsive">
                <thead>
                <tr>
                    <th scope="col">Matrix Number</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Email Address</th>
                    <th scope="col">Courses</th>
                    <th scope="col">UiTM Branch</th>
                    <th scope="col">Sports Name</th>
                    <th scope="col">Sports Achievement One</th>
                    <th scope="col">Sports Achievement Two</th>
                    <th scope="col">Sports Achievement Three</th>
                    <th scope="col">Edit Student</th>
                </tr>
                </thead>
                <tbody>
                @foreach($students as $student)
                    <tr>
                        <td>{{$student -> matrixNumber}}</td>
                        <td>{{$student -> firstName}}</td>
                        <td>{{$student -> lastName}}</td>
                        <td>{{$student -> gender}}</td>
                        <td>{{$student -> phoneNumber}}</td>
                        <td>{{$student -> emailAddress}}</td>
                        <td>{{$student -> courses}}</td>
                        <td>{{$student -> branch}}</td>
                        <td>{{$student -> sportsType}}</td>
                        <td>{{$student -> sportsAchievementOne}}</td>
                        <td>{{$student -> sportsAchievementTwo}}</td>
                        <td>{{$student -> sportsAchievementThree}}</td>
                        <td>
                            <a href="{{ url('/admin/studentDetail/edit/'.$student->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <a href="{{ url('/admin/studentDetail/delete/'.$student->id) }}" class="btn btn-sm btn-warning">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
