@extends('welcome')
@section('content')
<div class="container-xl" style="width:720px;">
    <div class="card-header">
        <h4 style="font-weight:600">State</h4>
    </div>

    <div class="">
        <form method="POST" action="{{ route("state.Update",[$state->id]) }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="name">Name</label>
                <input class="form-control " type="text" name="name" id="name" value="{{ $state->name ==""?'':$state->name }}" required>
                {{-- @forelse ($states as $id=>$name )

                @empty

                @endforelse --}}
                <span class="help-block"></span>
            </div>

            <div class="form-group pt-2">
                <button class="btn btn-primary" type="submit">
                    Update
                </button>

            </div>
        </form>
    </div>

</div>

@endsection
