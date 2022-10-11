@extends('admin.index')
@section('content')
<div class="card-body">
    <div class="table-responsive">
        <form method="POST" action="{{ route('our-clients.store') }}"  role="form" enctype="multipart/form-data">
        @csrf
            <div class="row">
                <!-- col 1  -->
                <div class="col"> 
                    <div class="form-group">
                        <label">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label">Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="form-group">
                        <label for="sel1">Select list:</label>
                        <select class="form-control" name="status">
                            <option value="">-- Select one --</option>
                            <option value="Admin">Admin</option>
                            <option value="Company">Company</option>
                            <option value="User">User</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2 mb-4">Submit</button>
                </div>
                <!-- col 2 -->
                <div class="col">
                    {{-- <div class="form-outline">
                        <label">Description</label>
                        <textarea class="ckeditor form-control" rows="8" name="description"></textarea>
                    </div> --}}
                    <!-- <div class="form-group">
                        <label">Link Facebook</label>
                        <input type="text" class="form-control" name="facebook">
                    </div>
                    <div class="form-group">
                        <label">Link Instagram</label>
                        <input type="text" class="form-control" name="instagram">
                    </div>
                    <div class="form-group">
                        <label">Link Twitter</label>
                        <input type="text" class="form-control" name="twitter">
                    </div> -->
                    {{-- <button type="submit" class="btn btn-primary mt-2">Submit</button> --}}
                </div>
            </div>
        </form>
    </div>
</div>
  @endsection