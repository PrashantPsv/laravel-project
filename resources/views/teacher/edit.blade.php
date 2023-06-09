@extends('welcome')
@section('content')
    <div class="container-xl" style="width:720px;">
        <div class="card-header">
            <h4 style="font-weight:600">Edit teacher</h4>
        </div>

        <form method="POST" action="{{ route('addTeacher.Update', [$teacher->id]) }}">
            @csrf

            <div class="form-group">
                <label for="name"> First Name:</label>
                <input type="text" name="name" value="{{ $teacher->name }}" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="lastname">Last Name:</label>
                <input type="text" name="lastname" value="{{ $teacher->lastname }}" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" value="{{ $teacher->email }}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Phone Number:</label>
                <input type="number" name="phone" value="{{ $teacher->phone }}" class="form-control" required>
            </div>
            <div class="form-group">
                <label class="required" for="Category">Sub Category</label>
                <select class="form-control "  name="Category" id="Category" value="" required>
                    <option value="">Please Select</option>
                    @forelse ($subCategorys as $id=>$name )
                        <option value="{{ $name }} {{ $name == $teacher->type ? 'selected' : '' }}">{{ $name }}</option>
                    @empty
                    <option value="">Nothing to select</option>

                    @endforelse
                </select>

                <span class="help-block"></span>
            </div>


            <button type="submit" class="btn btn-primary mt-2">Update Teacher</button>
        </form>


    </div>

@endsection
