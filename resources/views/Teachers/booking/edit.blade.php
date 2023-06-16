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


        <form method="POST" action="{{ route('booking.Update',$booking->id) }}">
            @csrf

            <div class="form-group">
                <label class="required" for="Category">Sub Category:</label>
                <select class="form-control " name="Category" id="Category" value="" required>
                    <option value="">Please Select</option>
                    @forelse ($subCategory as $id=>$name)
                        <option value="{{ $id }}" {{ $booking->Category == $id ? 'selected' : '' }}>{{ $name }}</option>
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
                        <option value="{{ $id }}"{{ $booking->level == $id ? 'selected' : '' }}>{{ $name }}</option>
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
                        <option value="{{ $id }}"{{ $booking->language == $id ? 'selected' : '' }}>{{ $name }}</option>
                    @empty
                        <option value="">Nothing to select</option>
                    @endforelse
                </select>
            </div>
            <div class="form-group">
                <label class="required" for="description">Description:</label>
                <textarea class="form-control" id="description" name="description" rows="5">{{ $booking->description }}</textarea>
            </div>
            @if (isset($booking->price) && $booking->price !='')
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" name="price" value="{{ $booking->price }}" class="form-control" required>

            </div>
            @endif


            <div class="form-group">
                <label for="duration">Duration:</label>
                <select class="form-control " name="duration" id="duration"  required>
                    <option value="">Please select</option>
                    <option value="30" {{ $booking->duration = '1'? 'selected' : ''}}>30 Minits</option>
                    <option value="1"  {{ $booking->duration = '2'? 'selected' : ''}}>1 hours</option>
                    <option value="2"  {{ $booking->duration = '3'? 'selected' : ''}}>2 hours</option>

                </select>

            </div>
            <div class="form-group">
                <label for="spot">Maximum spot limit:</label>
                <select class="form-control " name="spot" id="spot"  required>
                    <option value="">Please select</option>
                    <option value="1"{{ $booking->spot ='1'?'selected':'' }}>1 </option>
                    <option value="2"{{ $booking->spot ='2'?'selected':'' }}>2 </option>
                    <option value="3"{{ $booking->spot ='3'?'selected':'' }}>3 </option>
                    <option value="4"{{ $booking->spot ='4'?'selected':'' }}>4 </option>
                    <option value="5"{{ $booking->spot ='5'?'selected':'' }}>5 </option>
                    <option value="6"{{ $booking->spot ='6'?'selected':'' }}>6 </option>

                </select>

            </div>
            <label class="required" for="to_time">Service type</label>

            <div class="form-group pt-2" style="display: flex">
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="Daily" id="checkbox1" name="days" {{ $booking->days == 'Daily' ? 'checked' : '' }}>
                    <label class="form-check-label" for="checkbox1">
                        Daily
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="weekly" on id="checkbox2" name="days"{{ $booking->days == 'weekly' ? 'checked' : '' }}>
                    <label class="form-check-label" for="checkbox2">
                        weekly
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="Monthly" id="checkbox3" name="days" {{ $booking->days == 'Monthly' ? 'checked' : '' }}>
                    <label class="form-check-label" for="checkbox3">
                        Monthly
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="Yearly" id="checkbox4" name="days"{{ $booking->days == 'Yearly' ? 'checked' : '' }}>
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
                            <input type="date" name="start_date" value="{{ isset($booking->start_date) ?$booking->start_date:'' }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="email">Sunday Start Time :</label>
                            <input type="time" name="sun_start_time" value="{{isset($booking->sun_start_time) ?$booking->sun_start_time:'' }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Monday Start Time :</label>
                            <input type="time" name="mon_start_time" value="{{ isset($booking->mon_start_time) ?$booking->mon_start_time:'' }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Tuesday Start Time :</label>
                            <input type="time" name="tue_start_time" value="{{ isset($booking->tue_start_time) ?$booking->tue_start_time:'' }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Wednesday Start Time :</label>
                            <input type="time" name="wed_start_time" value="{{ isset($booking->wed_start_time) ?$booking->wed_start_time:'' }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Thursday Start Time :</label>
                            <input type="time" name="thu_start_time" value="{{ isset($booking->thu_start_time) ?$booking->thu_start_time:'' }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Friday Start Time :</label>
                            <input type="time" name="fri_start_time" value="{{ isset($booking->fri_start_time) ?$booking->fri_start_time:'' }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Satuerday Start Time :</label>
                            <input type="time" name="sat_start_time" value="{{ isset($booking->sat_start_time) ?$booking->sat_start_time:'' }}" class="form-control">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="email">End date</label>
                            <input type="date" name="end_date" value="{{ isset($booking->end_date) ?$booking->end_date:'' }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">End Time :</label>
                            <input type="time" name="sun_end_time" value="{{ isset($booking->sun_end_time) ?$booking->sun_end_time:'' }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">End Time :</label>
                            <input type="time" name="mon_end_time" value="{{ isset($booking->mon_end_time) ?$booking->mon_end_time:'' }}"class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">End Time :</label>
                            <input type="time" name="tue_end_time" value="{{ isset($booking->tue_end_time) ?$booking->tue_end_time:'' }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">End Time :</label>
                            <input type="time" name="wed_end_time"value="{{ isset($booking->wed_end_time) ?$booking->wed_end_time:'' }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">End Time :</label>
                            <input type="time" name="thu_end_time"value="{{ isset($booking->thu_end_time) ?$booking->thu_end_time:'' }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">End Time :</label>
                            <input type="time" name="fri_end_time" value="{{ isset($booking->fri_end_time) ?$booking->fri_end_time:'' }}"class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">End Time :</label>
                            <input type="time" name="sat_end_time"value="{{ isset($booking->sat_end_time) ?$booking->sat_end_time:'' }}" class="form-control">
                        </div>


                    </div>
                </div>
            </div>
           <div id="dateTime">
            <div class="form-group">
                <label for="email">Start Date:</label>
                <input type="date" name="start_date"value="{{ $booking->start_date }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">End date</label>
                <input type="date" name="end_date"value="{{ $booking->end_date }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Start Time :</label>
                <input type="time" name="start_time"value="{{ $booking->start_time }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">End Time :</label>
                <input type="time" name="end_time"value="{{ $booking->end_time }}" class="form-control">
            </div>
        </div>
            <button type="submit" class="btn btn-primary mt-2"> Add Booking</button>
        </form>
    </div>
@endsection
@section('scripts')

    <script>
        // Your JavaScript code using jQuery
        $(document).ready(function() {

            $('input[name="days"]').on('click', function() {
                if ($(this).val() === 'weekly' && $(this).is(':checked')) {
                    $('#hide').show();
                    $('#dateTime').hide();
                } else {
                    $('#hide').hide();
                    $('#dateTime').show();
                }
            });
        });
    </script>
@endsection
