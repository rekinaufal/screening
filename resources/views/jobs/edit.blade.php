@extends('admin.index')
    @section('content')
    <div class="card-body">
        <div class="table-responsive">
            <form method="POST" action="{{ route('jobs.update', $Jobs->id) }}"  role="form" enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                @csrf
                <div class="row">
                    <!-- col 1  -->
                    <div class="col"> 
                        <div class="form-group">
                            <label for="sel1">Company:</label>
                            <select class="form-control" name="id_company">
                                <option value="">-- Select one --</option>
                                @foreach($list_company as $item)
                                <option value="{{ $item->id }}" {{ $Jobs->id_company === $item->id ? "selected" : null }}>{{ $item->nama_perusahaan }}</option>
                                @endforeach
                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Division</label>
                            <input type="text" class="form-control" name="division" value="{{$Jobs->division}}">
                        </div>
                        <div class="form-group">
                            <label>Position</label>
                            <input type="text" class="form-control" name="position" value="{{$Jobs->position}}">
                        </div>
                        <div class="form-group">
                            <label>Location</label>
                            <input type="text" class="form-control" name="location" value="{{$Jobs->location}}">
                        </div>
                        <div class="form-group">
                            <label>Experience Level</label>
                            <input type="text" class="form-control" name="experience_level" value="{{$Jobs->experience_level}}">
                        </div>
                        <div class="form-group">
                            <label>Job Type</label>
                            <input type="text" class="form-control" name="job_type" value="{{$Jobs->job_type}}">
                        </div>
                        <div class="form-group">
                            <label>Year of Experience</label>
                            <input type="text" class="form-control" name="year_of_experience" value="{{$Jobs->year_of_experience}}">
                        </div>
                        <div class="form-group">
                            <label>Job Description</label>
                            <textarea class="ckeditor form-control" rows="8" name="job_description">{{$Jobs->job_description}}</textarea>
                        </div>
                        {{-- <button type="submit" class="btn btn-primary mt-2 mb-4">Submit</button> --}}
                    </div>
                    <!-- col 2 -->
                    <div class="col">
                        <div class="form-group">
                            <label>Recuirement</label>
                            <textarea class="ckeditor form-control" rows="8" name="recuirement">{{$Jobs->recuirement}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Qualification Degree</label>
                            <input type="text" class="form-control" name="qualification_degree" value="{{$Jobs->qualification_degree}}">
                        </div>
                        <div class="form-group">
                            <label>Sallary</label>
                            <input type="text" class="form-control" name="sallary" value="{{$Jobs->sallary}}" onkeypress="if ( isNaN( String.fromCharCode(event.keyCode) )) return false;">
                        </div>
                        <div class="form-group">
                            <label for="sel1">Status:</label>
                            <select class="form-control" name="status">
                                <option value="">-- Select one --</option>
                                <option value="1" {{$Jobs->status === 1 ? "selected" : null}}>Active</option>
                                <option value="0" {{$Jobs->status === 0 ? "selected" : null}}>Not Active</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="sel1">Highlight:</label>
                            <select class="form-control" name="highlight">
                                <option value="">-- Select one --</option>
                                <option value="1" {{$Jobs->highlight === 1 ? "selected" : null}}>True</option>
                                <option value="0" {{$Jobs->highlight === 0 ? "selected" : null}}>False</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2 mb-4">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
  @endsection