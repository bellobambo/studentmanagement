@extends('layout')
@section('content')
    <div class="card">
        <div class='card-header'>Edit Page</div>
        <div class="card-body">
            <form action="{{ url('batches/' . $batches->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <label for="">Name</label>
                <input type="text" name="name" value="{{$batches->name}}" id="name" class="form-control">

                <label for="">Course</label>
                <input type="text" name="syllabus" value="{{$batches->course_id}}" id="course_id" class="form-control">

                <label for="">Start Date</label>
                <input type="text" name="duration" value="{{$batches->start_date}}" id="duration" class="form-control">


                <input type="submit" value="save" class="btn btn-success">
            </form>
        </div>
    </div>
@endsection
