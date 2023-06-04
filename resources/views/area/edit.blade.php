@extends('welcome')
@section('content')
<div class="container-xl" style="width:720px;">
    <div class="card-header">
        <h4 style="font-weight:600">Area</h4>
    </div>

    <div class="">
        <form method="POST" action="{{ route("area.Update",[$area->id]) }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="area">Area Name</label>
                <input class="form-control " type="text" name="area" id="name" value="{{ $area->area }}" required>
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label class="required" for="city">city Name</label>
                <select class="form-control "  name="city" id="city" value="" required>
                    <option value="">Please Select</option>
                    @forelse ($citys as $city )
                        <option value="{{ $city->name }}"{{$city->name == $area->city ? 'selected' : '' }}>{{ $city->name }}</option>
                    @empty
                    <option value="">Nothing to select</option>

                    @endforelse
                </select>

                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label class="required" for="State">State Name</label>
                <select class="form-control "  name="State" id="city" value="" required>
                    <option value="">Please Select</option>
                    @forelse ($states as $id=>$name )
                        <option value="{{ $name }}" {{ $name == $area->state ? 'selected' : '' }}>{{ $name }}</option>
                    @empty
                    <option value="">Nothing to select</option>

                    @endforelse
                </select>

                <span class="help-block"></span>
            </div>

            <div class="form-group pt-2">
                <button class="btn btn-primary" type="submit">
                    Save
                </button>
            </div>
        </form>
    </div>
</div>

@endsection
