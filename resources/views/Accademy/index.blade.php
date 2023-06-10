@extends('welcome')
@section('content')
    {{-- <div class="container-xl" style="width:720px;">
    <div class="card-header">
        <h4 style="font-weight:600">Accademy</h4>
    </div> --}}

    <div class="container" style="width:720px;">
        <h3>Accademy Form</h3>
        <form method="POST" action="{{ route('Accademy.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="required" for="name">Academy Name:</label>
                        <input class="form-control" type="text" name="name" id="name" value="" required>
                    </div>
                    <div class="form-group">
                        <label class="required" for="address_1">Academy Address Line 1</label>
                        <input class="form-control" type="text" name="address_1" value="" id="address_1" required>
                    </div>
                    <div class="form-group">
                        <label class="required" for="address_2">Academy Address Line 2</label>
                        <input class="form-control" type="text" name="address_2" value="" id="address_2" required>
                    </div>
                    <div class="form-group">
                        <label class="required" for="State">State Name</label>
                        <select class="form-control" name="State" id="State" required>
                            <option value="">Please Select</option>
                            @forelse ($states as $id=>$name)
                                <option value="{{ $name }}">{{ $name }}</option>
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
                                <option value="{{ $city->name }}">{{ $city->name }}</option>
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
                                <option value="{{ $areas->area }}">{{ $areas->area }}</option>
                            @empty
                                <option value="">Nothing to select</option>
                            @endforelse
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="required" for="from_time">From Time</label>
                        <input class="form-control" type="time" name="from_time" id="from_time" value="" required>
                    </div>
                    <div class="form-group">
                        <label class="required" for="to_time">To Time</label>
                        <input class="form-control" type="time" name="to_time" id="to_time" value="" required>
                    </div>
                    <div class="form-group pt-2">
                        <label class="required" for="to_time">Days</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="checkbox1" name="days[]">
                            <label class="form-check-label" for="checkbox1">
                                Monday
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="2" id="checkbox2" name="days[]">
                            <label class="form-check-label" for="checkbox2">
                                Tuesday
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="3" id="checkbox3" name="days[]">
                            <label class="form-check-label" for="checkbox3">
                                Wednesday
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="4" id="checkbox4"
                                name="days[]">
                            <label class="form-check-label" for="checkbox4">
                                Thursday
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="5" id="checkbox5"
                                name="days[]">
                            <label class="form-check-label" for="checkbox5">
                                Friday
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="6" id="checkbox6"
                                name="days[]">
                            <label class="form-check-label" for="checkbox6">
                                Saturday
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="7" id="checkbox7"
                                name="days[]">
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
                        <input class="form-control" type="number" name="number" id="number" value=""
                            required>
                    </div>
                    <div class="form-group">
                        <label class="required" for="email">Email</label>
                        <input class="form-control" type="email" name="email" id="email" value=""
                            required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="required" for="aboutus">About us:</label>
                        <textarea class="form-control" id="aboutus" name="aboutus" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="required" for="image">Image</label>
                        <input type="file" class="form-control-file" id="image" name="image">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Save</button>
            </div>
        </form>
        <div class="pt-5" style="width: 400px;">
            <table class="table table-bordered table-responsive table-striped table-hover datatable datatable-Createvehicle" style="width:400px">
                <thead>
                    <tr>
                        <th>
                            id
                        </th>
                        <th>
                            Name
                        </th>
                        <th>
                            Address_1
                        </th>
                        <th>
                            Address_2
                        </th>
                        <th>
                            State
                        </th>
                        <th>
                            City
                        </th>
                        <th>
                            Area
                        </th>
                        <th>
                            From_time
                        </th>
                        <th>
                            To_time
                        </th>
                        <th>
                            Days
                        </th>
                        <th>
                            E-mail
                        </th>
                        <th>
                            Number
                        </th>
                        <th>
                            About Us
                        </th>
                        <th>
                            Images
                        </th>
                        <th>
                            Action
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @forelse ($academy as $accademys)
                        <tr>
                            <td>
                                {{ $accademys->id ?? '' }}
                            </td>
                            <td>
                                {{ $accademys->name ?? '' }}
                            </td>
                            <td>
                                {{ $accademys->address_1 ?? '' }}
                            </td>
                            <td>
                                {{ $accademys->address_2 ?? '' }}
                            </td>
                            <td>
                                {{ $accademys->State ?? '' }}
                            </td>
                            <td>
                                {{ $accademys->city ?? '' }}
                            </td>
                            <td>
                                {{ $accademys->area ?? '' }}
                            </td>

                            <td>
                                {{ $accademys->from_time ?? '' }}
                            </td>
                            <td>
                                {{ $accademys->to_time ?? '' }}
                            </td>
                            <td>
                                {{ implode(', ', explode(',', $accademys->days ?? '')) }}
                            </td>

                            <td>
                                {{ $accademys->number ?? '' }}
                            </td>
                            <td>
                                {{ $accademys->email ?? '' }}
                            </td>
                            <td>
                                {{ $accademys->aboutus ?? '' }}
                            </td>
                            <td>
                                @if ($accademys->image)
                                    <img src="{{ asset('storage/' . $accademys->image) }}" alt="Image">
                                @endif
                            </td>



                            <td>
                                <a class="btn btn-xs btn-primary"
                                    href="{{ route('Accademy.edit', [$accademys->id]) }}">
                                    Edit
                                </a>
                                <a class="btn btn-xs btn-danger"
                                    href="{{ route('Accademy.delete', [$accademys->id]) }}">
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
