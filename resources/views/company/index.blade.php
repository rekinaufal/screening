@extends('admin.index')
@section('content')
<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data Company</h6>
    <a href="{{ route('companies.create') }}" class="btn btn-sm btn-primary">
      <i class="fa fa-plus" style="color:white"></i>
    </a>
</div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" >
            <thead>
                <tr>
                    <th width="20%">Name</th>
                    <th width="10%">Logo</th>
                    <th>Address</th>                    
                    <th width="15%">Phone</th>                                   
                    <th width="10%">Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th width="20%">Name</th>
                    <th width="10%">Logo</th>
                    <th>Address</th>                    
                    <th width="15%">Phone</th>                                   
                    <th width="10%">Action</th>
                </tr>
            </tfoot>
            <tbody>
            @foreach ($Company as $item)
                <tr>
                    <td>{{ $item->nama_perusahaan }}</td>
                    <td><img src="{{ $item->logo }}" height="50" width="100"></td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->nomor_telpon }}</td>
                    <td align="center"> 
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('companies.destroy', $item->id) }}" method="POST">
                            <a href="{{ route('companies.edit', Crypt::encrypt($item->id)) }}" class="btn btn-sm btn-primary">
                                <i class="fa fa-edit" style="color:white"></i>
                            </a>
                            @csrf
                            @method('DELETE')   
                            <button type="submit" class="btn btn-sm btn-danger">
                                <i class="fa fa-trash" style="color:white"></i>
                            </button>
                        </form> 
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection