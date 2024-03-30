@extends('layout')
@section('content')
    <div class="card">
        <div class='card-header'>Course Page</div>
        <div class="card-body">
            <form action="{{ url('payments') }}" method="POST">
                @csrf

                <label for="">Enrollment No</label>
                {{-- <input type="text" name="enrollment_id" id="enrollment_id" class="form-control"> --}}

                <select name="enrollment_id" id="enrollment_id" class="form-control">
                    @foreach ($enrollments as $id => $enroll_no)
                        <option value="{{ $id }}">
                            {{ $enroll_no }}
                        </option>
                    @endforeach
                </select>


                <label for="syllabus">Paid Date</label>
                <input type="text" name="paid_date"  id="paid_date" class="form-control">

                <label for="">Amount</label>
                <input type="text" name="amount" id="amount"  class="form-control">

                <input type="submit" value="save" class="btn btn-success">
            </form>
        </div>
    </div>
@endsection
