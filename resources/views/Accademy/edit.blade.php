@extends('welcome')
@section('content')
    <div class="container-xl" style="width:720px;">
    <div class="card-header">
        <h4 style="font-weight:600">Accademy</h4>
    </div>
<form method="POST" action="{{ route('Accademy.Update', $academy->id) }}" enctype="multipart/form-data">
    @csrf


    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="required" for="name">Academy Name:</label>
                <input class="form-control" type="text" name="name" id="name" value="{{ $academy->name }}" required>
            </div>
            <div class="form-group">
                <label class="required" for="address_1">Academy Address Line 1</label>
                <input class="form-control" type="text" name="address_1" value="{{ $academy->address_1 }}" id="address_1" required>
            </div>
            <div class="form-group">
                <label class="required" for="address_2">Academy Address Line 2</label>
                <input class="form-control" type="text" name="address_2" value="{{ $academy->address_2 }}" id="address_2" required>
            </div>
            <div class="form-group">
                <label class="required" for="State">State Name</label>
                <select class="form-control" name="State" id="State" required>
                    <option value="">Please Select</option>
                    @forelse ($states as $id => $name)
                        <option value="{{ $name }}" {{ $academy->State == $name ? 'selected' : '' }}>{{ $name }}</option>
                    @empty
                        <option value="">Nothing to select</option>
                    @endforelse
                </select>
            </div>
            <div class="form-group">
                <label class="required" for="city">City Name</label>
                <select class="form-control" name="city" id="city" required>
                    <option value="">Please Select</option>
                    @forelse ($citys as $city)
                        <option value="{{ $city->name }}" {{ $academy->city == $city->name ? 'selected' : '' }}>{{ $city->name }}</option>
                    @empty
                        <option value="">Nothing to select</option>
                    @endforelse
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="required" for="area">Area Name</label>
                <select class="form-control" name="area" id="area" required>
                    <option value="">Please Select</option>
                    @forelse ($area as $areas)
                        <option value="{{ $areas->area }}" {{ $academy->area == $areas->area ? 'selected' : '' }}>{{ $areas->area }}</option>
                    @empty
                        <option value="">Nothing to select</option>
                    @endforelse
                </select>
            </div>
            <div class="form-group">
                <label class="required" for="from_time">From Time</label>
                <input class="form-control" type="time" name="from_time" id="from_time" value="{{ $academy->from_time }}" required>
            </div>
            <div class="form-group">
                <label class="required" for="to_time">To Time</label>
                <input class="form-control" type="time" name="to_time" id="to_time" value="{{ $academy->to_time }}" required>
            </div>
            <div class="form-group pt-2">
                <label class="required" for="to_time">Days</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="checkbox1" name="days[]" {{ is_array($academy->days) && in_array(1, explode(',', $academy->days)) ? 'checked' : '' }}>

                    <label class="form-check-label" for="checkbox1">
                        Monday
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="2" id="checkbox2" name="days[]" {{ in_array(2, explode(',', $academy->days)) ? 'checked' : '' }}>
                    <label class="form-check-label" for="checkbox2">
                        Tuesday
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="3" id="checkbox3" name="days[]" {{ in_array(3,explode(',', $academy->days)) ? 'checked' : '' }}>
                    <label class="form-check-label" for="checkbox3">
                        Wednesday
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="4" id="checkbox4" name="days[]" {{ in_array(4, explode(',', $academy->days)) ? 'checked' : '' }}>
                    <label class="form-check-label" for="checkbox4">
                        Thursday
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="5" id="checkbox5" name="days[]" {{ in_array(5, explode(',', $academy->days)) ? 'checked' : '' }}>
                    <label class="form-check-label" for="checkbox5">
                        Friday
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="6" id="checkbox6" name="days[]" {{ in_array(6, explode(',', $academy->days)) ? 'checked' : '' }}>
                    <label class="form-check-label" for="checkbox6">
                        Saturday
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="7" id="checkbox7" name="days[]" {{ in_array(7,explode(',', $academy->days)) ? 'checked' : '' }}>
                    <label class="form-check-label" for="checkbox7">
                        Sunday
                    </label>
                </div>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="required" for="number">Number</label>
                <input class="form-control" type="number" name="number" id="number" value="{{ $academy->number }}" required>
            </div>
            <div class="form-group">
                <label class="required" for="email">Email</label>
                <input class="form-control" type="email" name="email" id="email" value="{{ $academy->email }}" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="required" for="aboutus">About us:</label>
                <textarea class="form-control" id="aboutus" name="aboutus" rows="5">{{ $academy->aboutus }}</textarea>
            </div>
            <div class="form-group">
                <label class="required" for="image">Image</label>
                @if ($academy->image)
                <img src="{{ asset('storage/' . $academy->image) }}" alt="Image" width="100px" height="100px">
            @endif
                <input type="file" class="form-control-file" id="image" name="image">
            </div>
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-primary" type="submit">Update</button>
    </div>
</form>
</div>

@endsection
