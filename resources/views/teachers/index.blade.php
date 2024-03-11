@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="" style="width: 900px" >
            <div class="card">
                <div class="card-header">
                    <h2>Teacher Application</h2>
                </div>
                <div class="card-body">
                    <a href="{{ url('/teachers/create') }}" class="btn btn-success btn-sm" title="Add New Teacher">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Mobile</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($teachers as $teacher)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $teacher->name }}</td>
                                    <td>{{ $teacher->address }}</td>
                                    <td>{{ $teacher->mobile }}</td>
                                    <td class="d-flex">
                                        <a href="{{ url('/teachers/' . $teacher->id) }}"
                                            class="btn btn-primary btn-sm" title="view Teacher">
                                            <i class="fa fa-pencil" aria-hidden="true"></i> view
                                        </a>
                                        <a href="{{ url('/teachers/' . $teacher->id .'/edit') }}"
                                            class="btn btn-primary btn-sm" title="Edit Teacher">
                                            <i class="fa fa-pencil" aria-hidden="true"></i> Edit
                                        </a>
                                        <form action="{{ url('/teachers/' . $teacher->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this teacher?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete teacher">
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
