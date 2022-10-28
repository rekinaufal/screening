@extends('admin.index')
  @section('content')
  <div class="card-body">
    <div class="table-responsive">
        <form method="POST" action="{{ route('news.store') }}"  role="form" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Text</label>
                <textarea class="ckeditor form-control" name="text" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
  </div>
  @endsection