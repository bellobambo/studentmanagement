@extends('layout')
@section('content')
    <div class="card">
        <div class='card-header'>Edit Page</div>
        <div class="card-body">
            <form action="{{ url('courses/' . $courses->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <label for="">Name</label>
                <input type="text" name="name" value="{{$courses->name}}" id="{{$courses->name}}" class="form-control">

                <label for="">Syllabus</label>
                <input type="text" name="syllabus" value="{{$courses->syllabus}}" id="{{$courses->syllabus}}" class="form-control">

                <label for="">Duration</label>
                <input type="text" name="duration" value="{{$courses->duration}}" id="{{$courses->duration}}" class="form-control">


                <input type="submit" value="save" class="btn btn-success">
            </form>
        </div>
    </div>
@endsection
