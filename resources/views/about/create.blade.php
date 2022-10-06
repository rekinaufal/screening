@extends('admin.index')
@section('content')
<div class="card-body">
    <div class="table-responsive">
        <form method="POST" action="{{ route('about.store') }}"  role="form" enctype="multipart/form-data">
        @csrf
            <div class="row">
                <!-- col 1  -->
                <div class="col"> 
                    <div class="form-group">
                        <label">Title</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="form-group">
                        <label">Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="form-outline">
                        <label">Description</label>
                        <textarea class="ckeditor form-control" rows="8" name="description"></textarea>
                    </div>
                </div>
                <!-- col 2 -->
                <div class="col">
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
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
  @endsection