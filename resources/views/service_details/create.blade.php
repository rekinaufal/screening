@extends('admin.index')
@section('content')
<div class="card-body">
    <div class="table-responsive">
        <form method="POST" action="{{ route('service_details.store') }}" role="form" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Category</label>
                <select name="category" class="form-control">
                    <option value="EBC">Employee Background Check</option>
                    <option value="TS">Talent Search</option>
                </select>
            </div>
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea name="description" class="form-control ckeditor" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group mt-3">
                <label>Image</label>
                <input type="file" class="form-control" name="image">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
