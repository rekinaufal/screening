@extends('admin.index')
  @section('content')
  <div class="card-body">
    <div class="table-responsive">
        <form method="POST" action="{{ route('events.store') }}"  role="form" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Text</label>
                <textarea class="ckeditor form-control" name="text" required></textarea>
            </div>
            <div class="select2-selection__rendered mb-2" data-live-search="true">
                <label for="sel1">Is Main:</label>
                <select class="form-control selectpicker" name="is_main">
                    <option value = "">-- Select one --</option>
                    <option value="1">True</option>
                    <option value="0">False</option>
                </select>
            </div>
        
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
  </div>
  @endsection