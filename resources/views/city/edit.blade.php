@extends('welcome')
@section('content')
<div class="container-xl" style="width:720px;">
    <div class="card-header">
        <h4 style="font-weight:600">Citys</h4>
    </div>

    <div class="">
        <form method="POST" action="{{ route("city.Update",[$city->id]) }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="name">city Name</label>
                <input class="form-control " type="text" name="name" id="name" value="{{ $city->name ==""?'':$city->name }}" required>
                {{-- @forelse ($states as $id=>$name )

                @empty

                @endforelse --}}
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label class="required" for="city">State Name</label>
                <select class="form-control" name="State" id="city" required>
                    <option value="">Please Select</option>
                    @forelse ($states as $id => $name)
                        <option value="{{ $name }}" {{ $name == $city->state ? 'selected' : '' }}>{{ $name }}</option>
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
