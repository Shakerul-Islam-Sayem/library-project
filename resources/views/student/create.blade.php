@extends('layouts.app')
@section('title')
    {{ 'Create Student | Library' }}
@endsection
@section('content')
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2 class="admin-heading">Add Student</h2>
                </div>
                <div class="offset-md-7 col-md-2">
                    <a class="add-new" href="{{ route('students') }}">All Students</a>
                </div>
            </div>
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <form class="yourform" action="{{ route('student.store') }}" method="post" autocomplete="off">
                        @csrf
                        <div class="form-group">
                            <label>Student Name</label>
                            <input type="text" class="form-control" placeholder="Student Name" name="name"
                                value="{{ old('name') }}" required>
                            @error('name')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" placeholder="Address" name="address"
                                value="{{ old('address') }}" required>
                            @error('address')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <select name="gender" class="form-control">
                                <option value="male" selected>Male</option>
                                <option value="female">Female</option>
                            </select>
                            @error('gender')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Department</label>
                            <input type="text" class="form-control" placeholder="Department" name="department"
                                value="{{ old('department') }}" required>
                            @error('department')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Date of Birth</label>
                            <input type="date" class="form-control" placeholder="Date of Birth" name="dob" value="{{ old('dob') }}" required>
                            @error('dob')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="phone" class="form-control" placeholder="Phone" name="phone"
                                value="{{ old('phone') }}" required>
                            @error('phone')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="Email" name="email"
                                value="{{ old('email') }}" required>
                            @error('email')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <input type="submit" name="save" class="w-25 mt-2 btn btn-success" value="save">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
