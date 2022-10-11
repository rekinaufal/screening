@extends('admin.index')
@section('content')
<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data Our Clients</h6>
    <a href="{{ route('our-clients.create') }}" class="btn btn-sm btn-primary">
      <i class="fa fa-plus" style="color:white"></i>
    </a>
</div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" >
            <thead>
                <tr>
                    <th>Name</th>
                    <th width="40%">Image</th>
                    <th>Status</th>                    
                    <th>Created By</th>                    
                    <th width="10%">Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Name</th>
                    <th width="40%">Image</th>
                    <th>Status</th>                    
                    <th>Created By</th>                    
                    <th width="10%">Action</th>
                </tr>
            </tfoot>
            <tbody>
            @foreach ($OurClient as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td><img src="{{ $item->image }}" width="40%"></td>
                    <td>{{ $item->status }}</td>
                    <td>{{ $item->user->name ?? 'unknows' }}</td>
                    <td align="center"> 
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('our-clients.destroy', $item->id) }}" method="POST">
                            <a href="{{ route('our-clients.edit', Crypt::encrypt($item->id)) }}" class="btn btn-sm btn-primary">
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