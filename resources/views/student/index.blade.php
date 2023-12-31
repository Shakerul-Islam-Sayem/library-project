@extends('layouts.app')
@section('title')
    {{ 'Student | Library' }}
@endsection
@section('content')
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="admin-heading">All Students</h2>
                </div>
                <div class="offset-md-6 col-md-2">
                    <a class="add-new" href="{{ route('student.create') }}">Add Student</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="message"></div>
                    <table class="content-table">
                        <thead>
                            <th>S.No</th>
                            <th>Student Name</th>
                            <th>Gender</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>View</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>
                            @forelse ($students as $student)
                                <tr>
                                    <td class="id">{{ $student->id }}</td>
                                    <td>{{ $student->name }}</td>
                                    <td class="text-capitalize">{{ $student->gender }}</td>
                                    <td>{{ $student->phone }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td class="view">
                                        <button data-sid='{{ $student->id }}>'
                                            class="btn btn-primary view-btn">View</button>
                                    </td>
                                    <td class="edit">
                                        <a href="{{ route('student.edit', $student) }}>" class="btn btn-success">Edit</a>
                                    </td>
                                    <td class="delete">
                                        <form action="{{ route('student.destroy', $student->id) }}" method="post"
                                            class="form-hidden">
                                            <button class="btn btn-danger delete-student">Delete</button>
                                            @csrf
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8">No Students Found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $students->links('vendor/pagination/bootstrap-4') }}
                    <div id="modal">
                        <div id="modal-form">
                            <table cellpadding="10px" width="100%">

                            </table>
                            <div id="close-btn">X</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script type="text/javascript">
        //Show shudent detail
        $(".view-btn").each(function() {
            $(this).on("click", function() {
                var student_id = $(this).data("sid");
                // var modalSelector = "#modal-" + student_id;

                $.ajax({
                    url: "http://127.0.0.1:8000/student/show/" + student_id,
                    type: "get",
                    success: function(student) {
                        console.log(student);

                        // Parse date of birth and calculate age
                        var dobParts = student['dob'].split('-');
                        var dob = new Date(dobParts[0], dobParts[2] - 1, dobParts[
                        1]); // Assuming format: Y-d-m
                        var today = new Date();
                        var age = today.getFullYear() - dob.getFullYear();

                        // Adjust age if the birthday hasn't occurred yet this year
                        if (today.getMonth() < dob.getMonth() || (today.getMonth() === dob
                                .getMonth() && today.getDate() < dob.getDate())) {
                            age--;

                        }

                        form = "<tr><td>Student Name :</td><td><b>" + student['name'] +
                            "</b></td></tr><tr><td>Address :</td><td><b>" + student['address'] +
                            "</b></td></tr><tr><td>Gender :</td><td><b>" + student['gender'] +
                            "</b></td></tr><tr><td>Department :</td><td><b>" + student[
                                'department'] +
                            "</b></td></tr><tr><td>Age :</td><td><b>" + age + " years" +
                            "</b></td></tr><tr><td>Phone :</td><td><b>" + student['phone'] +
                            "</b></td></tr><tr><td>Email :</td><td><b>" + student['email'] +
                            "</b></td></tr>";

                        console.log(form);

                        $("#modal-form table").html(form);
                        $("#modal").show();
                    }
                });
            });
        });

        // Hide modal box
        $('#close-btn').on("click", function() {
            $("#modal").hide();
        });

        // Delete student script
$(".delete-student").on("click", function() {
    var s_id = $(this).data("sid");

    // Display a confirmation dialog
    var confirmDelete = confirm("Are you sure you want to delete this student?");

    // If the user confirms, proceed with the deletion
    if (confirmDelete) {
        $.ajax({
            url: "delete-student.php",
            type: "POST",
            data: {
                sid: s_id
            },
            success: function(data) {
                $(".message").html(data);
                setTimeout(function() {
                    window.location.reload();
                }, 2000);
            }
        });
    }
});
    </script>
@endsection
