@extends('layout')
@section('content')
    <div class="card">
        <div class='card-header'>Edit Page</div>
        <div class="card-body">
            <form action="{{ url('students/' . $students->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <label for="">Name</label>
                <input type="text" name="name" value="{{$students->name}}" id="{{$students->name}}" class="form-control">

                <label for="">Address</label>
                <input type="text" name="address" value="{{$students->address}}" id="{{$students->address}}" class="form-control">

                <label for="">Mobile</label>
                <input type="text" name="mobile" value="{{$students->mobile}}" id="{{$students->mobile}}" class="form-control">


                <input type="submit" value="save" class="btn btn-success">
            </form>
        </div>
    </div>
@endsection
