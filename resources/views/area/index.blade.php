@extends('welcome')
@section('content')
<div class="container-xl" style="width:720px;">
    <div class="card-header">
        <h4 style="font-weight:600">Area</h4>
    </div>

    <div class="">
        <form method="POST" action="{{ route("area.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="area">Area Name</label>
                <input class="form-control " type="text" name="area" id="name" value="" required>
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label class="required" for="city">city Name</label>
                <select class="form-control "  name="city" id="city" value="" required>
                    <option value="">Please Select</option>
                    @forelse ($citys as $city )
                        <option value="{{ $city->name }}">{{ $city->name }}</option>
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
                        <option value="{{ $name }}">{{ $name }}</option>
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
    <div class="pt-5">
        <table class=" table table-bordered table-striped table-hover datatable datatable-Createvehicle">

        <thead>
            <tr>
                <th>
                    id
                </th>
                <th>
                    Area
                </th>
                <th>
                    City
                </th>
                <th>
                    State
                </th>
                <th>
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($area as $areas)
            <tr>
                <td>
                    {{ $areas->id ?? '' }}
                </td>
                <td>
                    {{ $areas->area ?? '' }}
                </td>
                <td>
                    {{ $areas->city ?? '' }}
                </td>
                <td>
                    {{ $areas->state ?? '' }}
                </td>
                <td>
                    <a class="btn btn-xs btn-primary" href="{{ route('area.edit', [$areas->id]) }}">
                        Edit
                    </a>
                    <a class="btn btn-xs btn-danger" href="{{ route('area.delete', [$areas->id]) }}">
                        Delete
                    </a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5">
                    No Data Found
                </td>
            </tr>
            @endforelse
        </tbody>

</table>
    </div>
</div>

@endsection
