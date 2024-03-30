@extends('layout')
@section('content')
    <div class="card">
        <div class='card-header'>Edit Page</div>
        <div class="card-body">
            <form action="{{ url('payments/' . $payments->id) }}" method="POST">
                @csrf
                @method('PATCH')

                <label for="">Enrollment No</label>
                <input type="text" name="syllabus" value="{{$payments->syllabus}}" id="{{$payments->syllabus}}" class="form-control">

                <label for="">Paid Date</label>
                <input type="text" name="paid_date" value="{{$payments->paid_date}}" id="{{$payments->paid_date}}" class="form-control">

                <label for="">Amount</label>
                <input type="text" name="duration" value="{{$payments->amount}}" id="{{$payments->amount}}" class="form-control">


                <input type="submit" value="save" class="btn btn-success">
            </form>
        </div>
    </div>
@endsection
