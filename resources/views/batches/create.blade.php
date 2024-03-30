@extends('layout')
@section('content')
    <div class="card">
        <div class='card-header'>Batches </div>
        <div class="card-body">
            <form action="{{ url('batches') }}" method="POST">
                @csrf

                <label for="">Batch Name</label>
                <input type="text" name="name" id="name" class="form-control">

                <label for="syllabus">Course Name</label>
                {{-- <input type="text" name="course_id" id="course_id" class="form-control"> --}}
                <select name="course_id" id="course_id" class="form-control">
                    @foreach ($courses as $id => $name)
                        <option value="{{ $id }}">
                            {{ $name }}
                        </option>
                    @endforeach
                </select>

                <label for="">Start Date</label>
                <input type="text" placeholder="2022-06-12" name="start_date" id="start_date" class="form-control">

                <input type="submit" value="save" class="btn btn-success">
            </form>
        </div>
    </div>
@endsection
