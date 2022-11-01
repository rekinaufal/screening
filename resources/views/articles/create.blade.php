@extends('admin.index')
  @section('content')
  <div class="card-body">
    <div class="table-responsive">
        <form method="POST" action="{{ route('articles.store') }}"  role="form" enctype="multipart/form-data">
            @csrf
            <div class="select2-selection__rendered" data-live-search="true">
                <label for="sel1">Select list:</label>
                <select class="form-control selectpicker" data-control="select2" data-live-search="true" name="id_categories" required>
                    <option value = "">-- Select one --</option>
                    @if (!empty($Categories))
                        @foreach ($Categories as $key => $value)
                            <option value="{{ $value->id }}">{{ $value->name }}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div class="form-group mt-3">
                <label>Image</label>
                <input type="file" class="form-control" name="image">
            </div>
            <div class="form-group">
                <label">Title</label>
                <input type="text" class="form-control" name="title" required>
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea class="ckeditor form-control" name="description" required></textarea>
            </div>
        
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
  </div>
  @endsection