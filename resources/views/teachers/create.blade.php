@extends('layout')
@section('content')
    <div class="card">
        <div class='card-header'>Tecahers Page</div>
        <div class="card-body">
            <form action="{{ url('teachers') }}" method="POST">
                @csrf

                <label for="">Name</label>
                <input type="text" name="name" id="name" class="form-control">

                <label for="">Address</label>
                <input type="text" name="address" id="address" class="form-control">

                <label for="">Mobile</label>
                <input type="text" name="mobile" id="mobile" class="form-control">

                <input type="submit" value="save" class="btn btn-success">
            </form>
        </div>
    </div>
@endsection
