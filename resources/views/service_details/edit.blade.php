@extends('admin.index')
  @section('content')
  <div class="card-body">
    <div class="table-responsive">
      <form method="POST" action="{{ route('service_details.update', $ServiceDetails->id) }}"  role="form" enctype="multipart/form-data">
        {{ method_field('PATCH') }}
        @csrf
          <div class="form-group">
            <label>Category</label>
            <select name="category" class="form-control">
              <option value="{{$ServiceDetails->category}}">{{$ServiceDetails->category == "TS" ? "Talent Search" : "Employee Background Check"}}</option>
              <option value="EBC">Employee Background Check</option>
              <option value="TS">Talent Search</option>
            </select>
          </div>
          <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="title" value="{{$ServiceDetails->title}}">
          </div>
          <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control ckeditor" cols="30" rows="10">{{$ServiceDetails->description}}</textarea>
          </div>
          <div class="form-group">
              <label>Image</label><br>
              <img src="{{$ServiceDetails->image}}" width="60%" class="img-thumbnail" alt="image">
              <input type="hidden" class="form-control" name="logoold" value="{{$ServiceDetails->image}}">
              <input type="file" class="form-control" name="image">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
  </div>
  @endsection