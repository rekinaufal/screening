@extends('admin.index')
  @section('content')
  <div class="card-body">
    <div class="table-responsive">
      <form method="POST" action="{{ route('service.store') }}"  role="form" enctype="multipart/form-data">
        @csrf 
          <div class="form-group">
            <label>Category</label>
            <select name="category" class="form-control">
              <option value="EBC">Employee Background Check</option>
              <option value="TS">Talent Search</option>
            </select>
          </div>
          <div class="form-group">
            <label>Title 1</label>
            <input type="text" class="form-control" name="title_1">
          </div>
          <div class="form-group">
            <label>Description 1</label>
            <textarea name="description_1" class="form-control ckeditor" cols="30" rows="10"></textarea>
          </div>
          <div class="form-group">
            <label>Title 2</label>
            <input type="text" class="form-control" name="title_2">
          </div>
          <div class="form-group">
            <label>Description 2</label>
            <textarea name="description_2" class="form-control ckeditor" cols="30" rows="10"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
  @endsection