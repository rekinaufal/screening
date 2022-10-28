@extends('admin.index')
    @section('content')
    <div class="card-body">
        <div class="table-responsive">
        <form method="POST" action="{{ route('banners.update', $Banner->id) }}"  role="form" enctype="multipart/form-data">
            {{ method_field('PATCH') }}
            @csrf
            <div class="row">
                <!-- col 1  -->
                <div class="col"> 
                    <div class="form-group">
                        <label">Text</label>
                        <input type="text" class="form-control" name="text" value="{{$Banner->text}}">
                    </div>
                    <div class="form-group">
                        <label">Image</label><br>
                        <img src="{{$Banner->image}}" width="80%" class="img-thumbnail" alt="image">
                        <input type="hidden" class="form-control" name="imageold" value="{{$Banner->image}}">
                        <input type="file" class="form-control" name="image" value="">
                    </div>
                    <div class="form-group">
                        <label for="sel1">Status:</label>
                        <select class="form-control" name="status">
                            <option value="">-- Select one --</option>
                            <option value="1" {{ $Banner->status == 1  ? "selected" : null }} >Active</option>
                            <option value="0" {{ $Banner->status == 0  ? "selected" : null }} >Not Active</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2 mb-4">Submit</button>
                </div>
                <!-- col 2 -->
                <div class="col">                
                    {{-- <div class="form-group">
                        <label>Description</label>
                        <textarea class="ckeditor form-control" name="description"> {{$Ourteam->description}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button> --}}
                </div>
            </form>
        </div>
    </div>
  @endsection