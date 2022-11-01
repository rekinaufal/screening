@extends('admin.index')
  @section('content')
  <div class="card-body">
    <div class="table-responsive">
      <form method="POST" action="{{ route('articles.update', $Article->id) }}"  role="form" enctype="multipart/form-data">
        {{ method_field('PATCH') }}
        @csrf
         
        <div class="select2-selection__rendered" data-live-search="true">
          <label for="sel1">Select list:</label>
          <select class="form-control selectpicker" data-control="select2" data-live-search="true" name="id_category" required>
            <option data-tokens="" value = "">-- Select one --</option>
            @if (!empty($Categories))
              @foreach ($Categories as $key => $value)
                <option value="{{ $value->id }}">{{ $value->name }}</option>
              @endforeach
            @endif
            </select>
        </div>
        <div class="form-group">
            <label">Image</label><br>
            <img src="{{$Article->image}}" width="80%" class="img-thumbnail" alt="image">
            <input type="hidden" class="form-control" name="imageold" value="{{$Article->image}}">
            <input type="file" class="form-control" name="image" value="">
        </div>
        <div class="form-group">
          <label">Title</label>
          <input type="text" class="form-control" name="title" value="{{$Article->title}}">
        </div>
        <div class="form-group">
          <label>Description</label>
          <textarea class="ckeditor form-control" name="description">{{$Article->description}}</textarea>
        </div>
      
        <button type="submit" class="btn btn-primary">Submit</button>
              </div>
        </form>
    </div>
  </div>
  @endsection