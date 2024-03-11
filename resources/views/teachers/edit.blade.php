@extends('layout')
@section('content')
    <div class="card">
        <div class='card-header'>Edit Page</div>
        <div class="card-body">
            <form action="{{ url('teachers/' . $teachers->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <label for="">Name</label>
                <input type="text" name="name" value="{{$teachers->name}}" id="{{$teachers->name}}" class="form-control">

                <label for="">Address</label>
                <input type="text" name="address" value="{{$teachers->address}}" id="{{$teachers->address}}" class="form-control">

                <label for="">Mobile</label>
                <input type="text" name="mobile" value="{{$teachers->mobile}}" id="{{$teachers->mobile}}" class="form-control">


                <input type="submit" value="save" class="btn btn-success">
            </form>
        </div>
    </div>
@endsection
