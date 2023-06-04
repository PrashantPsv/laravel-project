@extends('welcome')
@section('content')
<div class="container-xl" style="width:720px;">
    <div class="card-header">
        <h4 style="font-weight:600">Citys</h4>
    </div>

    <div class="">
        <form method="POST" action="{{ route("city.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="name">city Name</label>
                <input class="form-control " type="text" name="name" id="name" value="" required>
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label class="required" for="city">State Name</label>
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
            @forelse ($citys as $city)
            <tr>
                <td>
                    {{ $city->id ?? '' }}
                </td>
                <td>
                    {{ $city->name ?? '' }}
                </td>
                <td>
                    {{ $city->state ?? '' }}
                </td>
                <td>
                    <a class="btn btn-xs btn-primary" href="{{ route('city.edit', [$city->id]) }}">
                        Edit
                    </a>
                    <a class="btn btn-xs btn-danger" href="{{ route('city.delete', [$city->id]) }}">
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
