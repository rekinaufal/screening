@extends('admin.index')
    @section('content')
    <div class="card-body">
        <div class="table-responsive">
        <form method="POST" action="{{ route('ourteam.update', $Ourteam->id) }}"  role="form" enctype="multipart/form-data">
            {{ method_field('PATCH') }}
            @csrf
            <div class="row">
                <!-- col 1  -->
                <div class="col"> 
                    <div class="form-group">
                        <label">Name</label>
                        <input type="text" class="form-control" name="name" value="{{$Ourteam->name}}">
                    </div>
                    <div class="form-group">
                        <label">Position</label>
                        <input type="text" class="form-control" name="position" value="{{$Ourteam->position}}">
                    </div>
                    <div class="form-group">
                        <label">Image</label><br>
                        <img src="{{$Ourteam->image}}" width="80%" class="img-thumbnail" alt="image">
                        <input type="hidden" class="form-control" name="imageold" value="{{$Ourteam->image}}">
                        <input type="file" class="form-control" name="image" value="">
                    </div>
                </div>
                <!-- col 2 -->
                <div class="col">                
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="ckeditor form-control" name="description"> {{$Ourteam->description}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
  @endsection