@extends('admin.index')
  @section('content')
  <div class="card-body">
    <div class="table-responsive">
      <form method="POST" action="{{ route('news.update', $News->id) }}"  role="form" enctype="multipart/form-data">
        {{ method_field('PATCH') }}
        @csrf

        <div class="form-group">
          <label>Text</label>
          <textarea class="ckeditor form-control" name="text">{{$News->text}}</textarea>
        </div>
        <div class="select2-selection__rendered mb-2" data-live-search="true">
          <label for="sel1">Status:</label>
          <select class="form-control selectpicker" name="status">
              <option value = "">-- Select one --</option>
              <option value="1" {{ $News->status == 1 ? "selected" : null }}>Active</option>
              <option value="0" {{ $News->status == 0 ? "selected" : null }}>Not Active</option>
          </select>
      </div>
      
        <button type="submit" class="btn btn-primary">Submit</button>
              </div>
        </form>
    </div>
  </div>
  @endsection