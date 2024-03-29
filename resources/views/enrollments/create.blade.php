@extends('layout')
@section('content')
    <div class="card">
        <div class='card-header'>Enrollment Page</div>
        <div class="card-body">
            <form action="{{ url('enrollments') }}" method="POST">
                @csrf

                <label for="">Enroll No</label>
                <input type="text" name="enroll_no" id="enroll_no" class="form-control">

                <label for="syllabus">Batch</label>
                <input type="text" name="batch_id" id="batch_id" class="form-control">

                <label for="">Student</label>
                <input type="text" name="student_id" id="student_id" class="form-control">

                <label for="">Join Date</label>
                <input type="text" name="join_date" id="join_date" class="form-control">

                <label for="">Fee</label>
                <input type="text" name="fee" id="fee" class="form-control">

                <input type="submit" value="save" class="btn btn-success">
            </form>
        </div>
    </div>
@endsection
