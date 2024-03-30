@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="" style="width: 900px" >
            <div class="card">
                <div class="card-header">
                    <h2>Courses Application</h2>
                </div>
                <div class="card-body">
                    <a href="{{ url('/courses/create') }}" class="btn btn-success btn-sm" title="Add New Student">
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
                                    <th>Syllabus</th>
                                    <th>Duration</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($courses as $student)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->syllabus }}</td>
                                    <td>{{ $student->duration() }}</td>
                                    <td class="d-flex">
                                        <a href="{{ url('/courses/' . $student->id) }}"
                                            class="btn btn-primary btn-sm" title="vie Courses">
                                            <i class="fa fa-pencil" aria-hidden="true"></i> view
                                        </a>
                                        <a href="{{ url('/courses/' . $student->id .'/edit') }}"
                                            class="btn btn-primary btn-sm" title="Edit Courses">
                                            <i class="fa fa-pencil" aria-hidden="true"></i> Edit
                                        </a>
                                        <form action="{{ url('/courses/' . $student->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this Courses?');">
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
