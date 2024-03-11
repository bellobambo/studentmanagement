@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="" style="width: 900px" >
            <div class="card">
                <div class="card-header">
                    <h2>Student Application</h2>
                </div>
                <div class="card-body">
                    <a href="{{ url('/students/create') }}" class="btn btn-success btn-sm" title="Add New Student">
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
                                @foreach ($students as $student)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->address }}</td>
                                    <td>{{ $student->mobile }}</td>
                                    <td class="d-flex">
                                        <a href="{{ url('/students/' . $student->id) }}"
                                            class="btn btn-primary btn-sm" title="vie Student">
                                            <i class="fa fa-pencil" aria-hidden="true"></i> view
                                        </a>
                                        <a href="{{ url('/students/' . $student->id .'/edit') }}"
                                            class="btn btn-primary btn-sm" title="Edit Student">
                                            <i class="fa fa-pencil" aria-hidden="true"></i> Edit
                                        </a>
                                        <form action="{{ url('/students/' . $student->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this student?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Student">
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
