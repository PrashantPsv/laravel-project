@extends('welcome')
@section('content')
<div class="container-xl" style="width:720px;">
    <div class="card-header">
        <h4 style="font-weight:600">State</h4>
    </div>

    <div class="">
        <form method="POST" action="{{ route("state.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="name">Name</label>
                <input class="form-control " type="text" name="name" id="name" value="" required>
                {{-- @forelse ($states as $id=>$name )

                @empty

                @endforelse --}}
                <span class="help-block"></span>
            </div>

            <div class="form-group pt-2">
                <button class="btn btn-danger" type="submit">
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
                    Name
                </th>
                <th>
                    Actions
                </th>

            </tr>
        </thead>
        <tbody>
            @forelse ($states as $id=>$name )
            <td>
                {{ $id ?? '' }}
            </td>
            <td>
                {{ $name ?? '' }}
            </td>
            <td>

            </td>

                @empty
                <td>
                    No Data Found
                </td>
                @endforelse
    </tbody>
</table>
    </div>
</div>

@endsection
