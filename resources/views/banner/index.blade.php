@extends('admin.index')
@section('content')
<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data Banner</h6>
    <a href="{{ route('banners.create') }}" class="btn btn-sm btn-primary">
      <i class="fa fa-plus" style="color:white"></i>
    </a>
</div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" >
            <thead>
                <tr>
                    <th>Text</th>
                    <th width="40%">Image</th>
                    <th>Status</th>               
                    <th width="10%">Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Text</th>
                    <th width="40%">Image</th>
                    <th>Status</th>                
                    <th width="10%">Action</th>
                </tr>
            </tfoot>
            <tbody>
            @foreach ($Banner as $item)
                <tr>
                    <td>{{ $item->text }}</td>
                    <td><img src="{{ $item->image }}" width="40%"></td>
                    <td>{{ $item->status == 1 ? "Active" : "Not-Active" }}</td>
                    <td align="center"> 
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('banners.destroy', $item->id) }}" method="POST">
                            <a href="{{ route('banners.edit', Crypt::encrypt($item->id)) }}" class="btn btn-sm btn-primary">
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