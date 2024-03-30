@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="" style="width: 900px" >
            <div class="card">
                <div class="card-header">
                    <h2>Batches </h2>
                </div>
                <div class="card-body">
                    <a href="{{ url('/batches/create') }}" class="btn btn-success btn-sm" title="Add New Batch">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add Batch
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Name</th>
                                    <th>Course</th>
                                    <th>Start Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($batches as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->course->name }}</td>
                                    <td>{{ $item->course_id }}</td>
                                    <td>{{ $item->start_date }}</td>
                                    <td class="d-flex">
                                        <a href="{{ url('/batches/' . $item->id) }}"
                                            class="btn btn-primary btn-sm" title="view batches">
                                            <i class="fa fa-pencil" aria-hidden="true"></i> view
                                        </a>
                                        <a href="{{ url('/batches/' . $item->id .'/edit') }}"
                                            class="btn btn-primary btn-sm" title="Edit batches">
                                            <i class="fa fa-pencil" aria-hidden="true"></i> Edit
                                        </a>
                                        <form action="{{ url('/batches/' . $item->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this batches?');">
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
