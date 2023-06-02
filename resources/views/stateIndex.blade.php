@extends('welcome')
@section('content')
<div class="container-xl">
    <div class="card-header">
        State
    </div>

    <div class="">
        <form method="POST" action="" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="name"></label>
                <input class="form-control " type="text" name="name" id="name" value="" required>
                {{-- @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif --}}
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label for="vehicle_no"></label>
                <input class="form-control " type="text" name="vehicle_no" id="vehicle_no" value="">
                {{-- @if($errors->has('vehicle_no'))
                    <span class="text-danger">{{ $errors->first('vehicle_no') }}</span>
                @endif --}}
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label for="seats"></label>
                <input class="form-control " type="number" name="seats" id="seats" value="" step="1">
                {{-- @if($errors->has('seats'))
                    <span class="text-danger">{{ $errors->first('seats') }}</span>
                @endif --}}
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    Save
                </button>
            </div>
        </form>
    </div>
</div>

@endsection
