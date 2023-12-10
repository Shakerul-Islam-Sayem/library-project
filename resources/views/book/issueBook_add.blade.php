@extends('layouts.app')
@section('title')
    {{ 'Add Books | Library' }}
@endsection
@section('content')
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2 class="admin-heading">Add Book Issue</h2>
                </div>
                <div class="offset-md-7 col-md-2">
                    <a class="add-new" href="{{ route('book_issued') }}">All Issue List</a>
                </div>
            </div>
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <form class="yourform " action="{{ route('book_issue.create') }}" method="post" autocomplete="off">
                        @csrf
                        <div class="form-group">
                            <label>Student Name</label>
                            <select class="form-control choices-single" name="student_id" required>
                                <option value="">Select Name</option>
                                @foreach ($students as $student)
                                    <option value='{{ $student->id }}'>{{ $student->name }}</option>
                                @endforeach
                            </select>
                            @error('student_id')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group ">
                            <label>Book Name</label>
                            <select class="form-control choices-single" name="book_id" required>
                                <option value="">Select Name</option>
                                @foreach ($books as $book)
                                    <option value='{{ $book->id }}'>{{ $book->name }}</option>
                                @endforeach
                            </select>
                            @error('book_id')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <input type="submit" name="New" class="btn btn-success mt-2 w-25 text-end" value="New">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        new Choices(document.querySelector(".choices-single"));
    </script>
@endsection
