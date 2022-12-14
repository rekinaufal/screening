@extends('admin.index')
@section('content')
<div class="card-header py-3">
    <h5 class="m-0 font-weight-bold text-primary">Data Jobs</h5>
    <a href="{{ route('jobs.create') }}" class="btn btn-primary btn-icon-split">
        <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
        </span>
        <span class="text">Tambah Data</span>
    </a>  
</div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" >
            <thead>
                <tr>
                    <th width="20%">Company</th>
                    <th width="25%">Position</th>
                    <th width="20%">Location</th>                    
                    <th width="15%">Status</th>                                   
                    <th width="10%">Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th width="20%">Company</th>
                    <th width="25%">Position</th>
                    <th width="20%">Location</th>                    
                    <th width="15%">Status</th>                                   
                    <th width="10%">Action</th>
                </tr>
            </tfoot>
            <tbody>
            @foreach ($Jobs as $item)
                <tr>
                    <td>{{ $item->company->nama_perusahaan ?? "Unknows" }}</td>
                    <td>{{ $item->position }}</td>
                    <td>{{ $item->location }}</td>
                    <td>{{ $item->status === 1 ? "Active" : "Not Active" }}</td>
                    <td align="center"> 
                        <div class="btn-group">
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('jobs.destroy', $item->id) }}" method="POST">
                                <a href="{{ route('jobs.download', $item->id) }}" class="btn btn-sm btn-success">
                                    <i class="fa fa-download" style="color:white"></i>
                                </a>
                                <a href="{{ route('jobs.edit', Crypt::encrypt($item->id)) }}" class="btn btn-sm btn-primary">
                                    <i class="fa fa-edit" style="color:white"></i>
                                </a>
                                @csrf
                                @method('DELETE')   
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <i class="fa fa-trash" style="color:white"></i>
                                </button>
                            </form> 
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection