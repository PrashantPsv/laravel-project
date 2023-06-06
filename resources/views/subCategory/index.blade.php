@extends('welcome')
@section('content')
<div class="container-xl" style="width:720px;">
    <div class="card-header">
        <h4 style="font-weight:600">Sub Category</h4>
    </div>

    <div class="">
        <form method="POST" action="{{ route("subCategory.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="name">Sub Category</label>
                <input class="form-control " type="text" name="name" id="name" value="" required>
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label class="required" for="Category">Category</label>
                <select class="form-control "  name="Category" id="Category" value="" required>
                    <option value="">Please Select</option>
                    @forelse ($Categorys as $id=>$name )
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
              subCategory
                </th>
                <th>
                    Category
                </th>
                <th>
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($table_sub_category as $table_sub_categorys)
            <tr>
                <td>
                    {{ $table_sub_categorys->id ?? '' }}
                </td>
                <td>
                    {{ $table_sub_categorys->name ?? '' }}
                </td>
                <td>
                    {{ $table_sub_categorys->Category ?? '' }}
                </td>
                <td>
                    <a class="btn btn-xs btn-primary" href="{{ route('subCategory.edit', [$table_sub_categorys->id]) }}">
                        Edit
                    </a>
                    <a class="btn btn-xs btn-danger" href="{{ route('subCategory.delete', [$table_sub_categorys->id]) }}">
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
