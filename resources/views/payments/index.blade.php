@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="" style="width: 900px" >
            <div class="card">
                <div class="card-header">
                    <h2>Payments </h2>
                </div>
                <div class="card-body">
                    <a href="{{ url('/payments/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Enrollment No</th>
                                    <th>Paid Date</th>
                                    <th>Amount</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($payments as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->enrollment ? $item->enrollment->enroll_no : 'N/A' }}</td>

                                    <td>{{ $item->paid_date }}</td>
                                    <td>{{ $item->amount }}</td>
                                    <td class="d-flex">
                                        <a href="{{ url('/payments/' . $item->id) }}"
                                            class="btn btn-primary btn-sm" title="view payments">
                                            <i class="fa fa-pencil" aria-hidden="true"></i> view
                                        </a>
                                        <a href="{{ url('/payments/' . $item->id .'/edit') }}"
                                            class="btn btn-primary btn-sm" title="Edit payments">
                                            <i class="fa fa-pencil" aria-hidden="true"></i> Edit
                                        </a>
                                        <form action="{{ url('/payments/' . $item->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this Courses?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Course">
                                                <i class="fa fa-trash" aria-hidden="true"></i> Delete
                                            </button>
                                        </form>
                                        <a href="{{ url('/report/report1/' . $item->id) }}"
                                            title="Edit payments">
                                            <button class="btn btn-success">
                                                <i class="fa fa-pencil" aria-hidden="true"></i> Print

                                            </button>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
