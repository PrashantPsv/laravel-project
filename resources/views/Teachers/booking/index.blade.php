@extends('teachers')
@section('content')
    <div class="container-xl" style="width:720px;">
        <div class="card-header">
            <h4 style="font-weight:600">Booking Form</h4>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="d-flex">
            <div>
                <label for="show">Priced</label>
                <input type="radio" name="show" value="show" id="showeed">

                <label for="hide">NON Priced</label>
                <input type="radio" name="show" value="hide" id="hideed">
            </div>
        </div>

        <div id="main" style="display: none">

            <form method="POST" action="{{ route('booking.store') }}">
                @csrf

                <div class="form-group">
                    <label class="required" for="Category">Sub Category:</label>
                    <select class="form-control " name="Category" id="Category" value="" required>
                        <option value="">Please Select</option>
                        @forelse ($subCategory as $id=>$name)
                            <option value="{{ $id }}">{{ $name }}</option>
                        @empty
                            <option value="">Nothing to select</option>
                        @endforelse
                    </select>

                    <span class="help-block"></span>
                </div>
                <div class="form-group">
                    <label for="level">Level:</label>
                    <select class="form-control " name="level" id="level" value="" required>
                        <option value="">Please Select</option>
                        @forelse ($level as $id=>$name)
                            <option value="{{ $id }}">{{ $name }}</option>
                        @empty
                            <option value="">Nothing to select</option>
                        @endforelse
                    </select>
                </div>
                <div class="form-group">

                    <label for="language">Speaking Language:</label>
                    <select class="form-control " name="language" id="language" value="" required>
                        <option value="">Please Select</option>
                        @forelse ($language as $id=>$name)
                            <option value="{{ $id }}">{{ $name }}</option>
                        @empty
                            <option value="">Nothing to select</option>
                        @endforelse
                    </select>
                </div>
                <div class="form-group">
                    <label class="required" for="description">Description:</label>
                    <textarea class="form-control" id="description" name="description" rows="5"></textarea>
                </div>

                <div class="form-group" id="price" style="display: none">
                    <label for="price">Price:</label>
                    <input type="number" name="price" class="form-control" >

                </div>

                <div class="form-group">
                    <label for="duration">Duration:</label>
                    <select class="form-control " name="duration" id="duration" value="" required>
                        <option value="">Please select</option>
                        <option value="30">30 Minits</option>
                        <option value="1">1 hours</option>
                        <option value="2">2 hours</option>

                    </select>

                </div>
                <div class="form-group">
                    <label for="spot">Maximum spot limit:</label>
                    <select class="form-control " name="spot" id="spot" value="" required>
                        <option value="">Please select</option>
                        <option value="1">1 </option>
                        <option value="2">2 </option>
                        <option value="3">3 </option>
                        <option value="4">4 </option>
                        <option value="5">5 </option>
                        <option value="6">6 </option>

                    </select>

                </div>
                <label class="required" for="to_time">Service type</label>

                <div class="form-group pt-2" style="display: flex">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="Daily" id="checkbox1" name="days">
                        <label class="form-check-label" for="checkbox1">
                            Daily
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="weekly" on id="checkbox2" name="days">
                        <label class="form-check-label" for="checkbox2">
                            weekly
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="Monthly" id="checkbox3" name="days">
                        <label class="form-check-label" for="checkbox3">
                            Monthly
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="Yearly" id="checkbox4" name="days">
                        <label class="form-check-label" for="checkbox4">

                            Yearly
                        </label>
                    </div>

                </div>
                <div class="form-groupd" style="display: none;" id="hide">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="start_date">Start Date:</label>
                                <input type="date" name="start_date" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="email">Sunday Start Time :</label>
                                <input type="time" name="sun_start_time" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">Monday Start Time :</label>
                                <input type="time" name="mon_start_time" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">Tuesday Start Time :</label>
                                <input type="time" name="tue_start_time" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">Wednesday Start Time :</label>
                                <input type="time" name="wed_start_time" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">Thursday Start Time :</label>
                                <input type="time" name="thu_start_time" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">Friday Start Time :</label>
                                <input type="time" name="fri_start_time" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">Satuerday Start Time :</label>
                                <input type="time" name="sat_start_time" class="form-control">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="email">End date</label>
                                <input type="date" name="end_date" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">End Time :</label>
                                <input type="time" name="sun_end_time" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">End Time :</label>
                                <input type="time" name="mon_end_time" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">End Time :</label>
                                <input type="time" name="tue_end_time" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">End Time :</label>
                                <input type="time" name="wed_end_time" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">End Time :</label>
                                <input type="time" name="thu_end_time" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">End Time :</label>
                                <input type="time" name="fri_end_time" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">End Time :</label>
                                <input type="time" name="sat_end_time" class="form-control">
                            </div>


                        </div>
                    </div>

                </div>
                <div id="dateTime">
                    <div class="form-group">
                        <label for="email">Start Date:</label>
                        <input type="date" name="start_date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">End date</label>
                        <input type="date" name="end_date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Start Time :</label>
                        <input type="time" name="start_time" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">End Time :</label>
                        <input type="time" name="end_time" class="form-control">
                    </div>
                </div>


                <button type="submit" class="btn btn-primary mt-2"> Add Booking</button>
            </form>

        </div>

        <div class="pt-5">
            <table class=" table table-bordered table-striped table-hover">

                <thead>
                    <tr>
                        <th>
                            id
                        </th>
                        <th>
                            Sub-Category
                        </th>
                        <th>
                            Price
                        </th>
                        <th>
                            Duration
                        </th>
                        <th>
                            Service type
                        </th>


                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($booking as $bookings)
                        <tr>
                            <td>
                                {{ $bookings->id ?? '' }}
                            </td>
                            <td>
                                {{ $bookings->Category ?? '' }}
                            </td>
                            <td>
                                {{ $bookings->price ?? '' }}
                            </td>
                            <td>
                                {{ $bookings->duration ?? '' }}
                            </td>
                            <td>
                                {{ $bookings->days ?? '' }}
                            </td>

                            <td>
                                <a class="btn btn-xs btn-primary p-0"
                                    href="{{ route('booking.edit', [$bookings->id]) }}">
                                    Edit
                                </a>
                                <a class="btn btn-xs btn-danger p-0"
                                    href="{{ route('booking.delete', [$bookings->id]) }}">
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
@section('scripts')
    <!-- Additional scripts for the content page -->
    <script>
        // Your JavaScript code using jQuery
        $(document).ready(function() {
            $('input[name="days"]').on('click', function() {
                if ($(this).attr('id') === 'checkbox2' && $(this).is(':checked')) {
                    $('#hide').show();
                    $('#dateTime').hide();
                } else {
                    $('#hide').hide();
                    $('#dateTime').show();
                }
            });

            $('input[name="show"]').on('click', function() {

                if ($(this).attr('id') === 'showeed' && $(this).is(':checked')) {
                    // alert('sjb');
                    $('#main').show();
                    $('#price').show();
                }
                if($(this).attr('id') === 'hideed' && $(this).is(':checked')) {
                    // alert('sjbbib');
                    $('#main').show();
                    $('#price').hide();


                }
            })
        });
    </script>
@endsection
