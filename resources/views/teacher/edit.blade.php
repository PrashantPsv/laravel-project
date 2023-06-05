@extends('welcome')
@section('content')
    <div class="container" >
        <div class="row">
            <div class="col-md-8 offset-md-2" style="width:720px;">
                <div class="card">
                    <div class="card-header">Add Teacher</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('addTeacher.Update',[$teacher->id]) }}">
                            @csrf

                            <div class="form-group">
                                <label for="name"> First Name:</label>
                                <input type="text" name="name" value="{{$teacher->name}}" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="lastname">Last Name:</label>
                                <input type="text" name="lastname" value="{{$teacher->lastname}}" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" name="email" value="{{$teacher->email}}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Phone Number:</label>
                                <input type="number" name="phone" value="{{$teacher->phone}}" class="form-control" required>
                            </div>


                            <button type="submit" class="btn btn-primary mt-2">Update Teacher</button>
                        </form>
                    </div>
                </div>

        </div>

        </div>
    </div>
@endsection
