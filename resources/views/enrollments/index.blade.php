@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="" style="width: 900px" >
            <div class="card">
                <div class="card-header">
                    <h2>Enrollment Application</h2>
                </div>
                <div class="card-body">
                    <a href="{{ url('/enrollments/create') }}" class="btn btn-success btn-sm" title="Add New Enrollment">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Enroll no</th>
                                    <th>Batch</th>
                                    <th>Student</th>
                                    <th>Join Date</th>
                                    <th>Fee</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($enrollments as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->enroll_no }}</td>
                                    <td>{{ $item->batch_id }}</td>
                                    <td>{{ $item->student_id }}</td>
                                    <td>{{ $item->join_date }}</td>
                                    <td>{{ $item->fee }}</td>
                                    <td class="d-flex">
                                        <a href="{{ url('/enrollments/' . $item->id) }}"
                                            class="btn btn-primary btn-sm" title="vie enrollments">
                                            <i class="fa fa-pencil" aria-hidden="true"></i> view
                                        </a>
                                        <a href="{{ url('/enrollments/' . $item->id .'/edit') }}"
                                            class="btn btn-primary btn-sm" title="Edit enrollments">
                                            <i class="fa fa-pencil" aria-hidden="true"></i> Edit
                                        </a>
                                        <form action="{{ url('/enrollments/' . $item->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this Courses?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Course">
                                                <i class="fa fa-trash" aria-hidden="true"></i> Delete
                                            </button>
                                        </form>

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
