@extends('admin.index')
    @section('content')
    <div class="card-body">
        <div class="table-responsive">
        <form method="POST" action="{{ route('our-clients.update', $OurClient->id) }}"  role="form" enctype="multipart/form-data">
            {{ method_field('PATCH') }}
            @csrf
            <div class="row">
                <!-- col 1  -->
                <div class="col"> 
                    <div class="form-group">
                        <label">Name</label>
                        <input type="text" class="form-control" name="name" value="{{$OurClient->name}}">
                    </div>
                    <div class="form-group">
                        <label">Image</label><br>
                        <img src="{{$OurClient->image}}" width="80%" class="img-thumbnail" alt="image">
                        <input type="hidden" class="form-control" name="imageold" value="{{$OurClient->image}}">
                        <input type="file" class="form-control" name="image" value="">
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