@extends('layout')
@section('content')
    <div class="card">
        <div class='card-header'>Course Page</div>
        <div class="card-body">
            <form action="{{ url('courses') }}" method="POST">
                @csrf

                <label for="">Name</label>
                <input type="text" name="name" id="name" class="form-control">

                <label for="syllabus">Syllabus</label>
                <input type="text" name="syllabus" id="syllabus" class="form-control">

                <label for="">Duration</label>
                <input type="text" name="duration" id="duration" class="form-control">

                <input type="submit" value="save" class="btn btn-success">
            </form>
        </div>
    </div>
@endsection
