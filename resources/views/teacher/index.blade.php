@extends('welcome')
@section('content')
    <div class="container-xl" style="width:720px;">
        <div class="card-header">
            <h4 style="font-weight:600">Add teacher</h4>
        </div>


        <form method="POST" action="{{ route('addTeacher.store') }}">
            @csrf

            <div class="form-group">
                <label for="name"> First Name:</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="lastname">Last Name:</label>
                <input type="text" name="lastname" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Phone Number:</label>
                <input type="number" name="phone" class="form-control" required>
            </div>


            <button type="submit" class="btn btn-primary mt-2">Add Teacher</button>
        </form>


        <div class="pt-5">
            <table class=" table table-bordered table-striped table-hover">

                <thead>
                    <tr>
                        <th>
                            id
                        </th>
                        <th>
                            First Name
                        </th>
                        <th>
                            Last Name
                        </th>
                        <th>
                            Email
                        </th>
                        <th>
                            Phone Number
                        </th>

                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($teachers as $teacher)
                        <tr>
                            <td>
                                {{ $teacher->id ?? '' }}
                            </td>
                            <td>
                                {{ $teacher->name ?? '' }}
                            </td>
                            <td>
                                {{ $teacher->lastname ?? '' }}
                            </td>
                            <td>
                                {{ $teacher->email ?? '' }}
                            </td>
                            <td>
                                {{ $teacher->phone ?? '' }}
                            </td>
                            <td>
                                <a class="btn btn-xs btn-primary p-0" href="{{ route('addTeacher.edit', [$teacher->id]) }}">
                                    Edit
                                </a>
                                <a class="btn btn-xs btn-danger p-0"
                                    href="{{ route('addTeacher.delete', [$teacher->id]) }}">
                                    Delete
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">
                                No Data Found
                            </td>
                        </tr>
                    @endforelse
                </tbody>

            </table>
        </div>
    </div>
    @endsection
