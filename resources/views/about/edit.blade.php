@extends('admin.index')
    @section('content')
    <div class="card-body">
        <div class="table-responsive">
        <form method="POST" action="{{ route('about.update', $About->id) }}"  role="form" enctype="multipart/form-data">
            {{ method_field('PATCH') }}
            @csrf
            <div class="row">
                <!-- col 1  -->
                <div class="col"> 
                    <div class="form-group">
                        <label">Title</label>
                        <input type="text" class="form-control" name="title" value="{{$About->title}}">
                    </div>
                    <div class="form-group">
                        <label">Image Old</label><br>
                        <img src="{{$About->image}}" width="80%" class="img-thumbnail" alt="image About">
                        <input type="hidden" class="form-control" name="imageold" value="{{$About->image}}">
                        <input type="file" class="form-control" name="image" value="">
                    </div>
                </div>
                <!-- col 2 -->
                <div class="col">
                    <div class="form-group">
                        <label">Description</label>
                        <textarea class="ckeditor form-control" name="description" cols="30" rows="10">{{$About->description}}</textarea>
                    </div>
                    <!-- <div class="form-group">
                        <label">Facebook</label>
                        <input type="text" class="form-control" name="facebook" value="{{$About->facebook}}">
                    </div>
                    <div class="form-group">
                        <label">Instagram</label>
                        <input type="text" class="form-control" name="instagram" value="{{$About->instagram}}">
                    </div>
                    <div class="form-group">
                        <label">Twitter</label>
                        <input type="text" class="form-control" name="twitter" value="{{$About->twitter}}">
                    </div> -->
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
  @endsection