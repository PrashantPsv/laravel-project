@extends('welcome')
@section('content')
<div class="container-xl" style="width:720px;">
    <div class="card-header">
        <h4 style="font-weight:600">Sub Category Edit</h4>
    </div>

    <div class="">
        <form method="POST" action="{{ route("subCategory.Update",[$table_sub_category->id]) }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="name">Sub Category</label>
                <input class="form-control " type="text" name="name" id="name" value="{{ $table_sub_category->name ==""?'':$table_sub_category->name }}" required>
                {{-- @forelse ($states as $id=>$name )

                @empty

                @endforelse --}}
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label class="required" for="Category">Category</label>
                <select class="form-control" name="Category" id="Category" required>
                    <option value="">Please Select</option>
                    @forelse ($category as $id => $name)
                        <option value="{{ $name }}" {{ $name == $table_sub_category->Category ? 'selected' : '' }}>{{ $name }}</option>
                    @empty
                        <option value="">Nothing to select</option>
                    @endforelse
                </select>
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
