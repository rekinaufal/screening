@extends('admin.index')
@section('content')
<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data About</h6>
    <a href="{{ route('about.create') }}" class="btn btn-sm btn-primary">
      <i class="fa fa-plus" style="color:white"></i>
    </a>
</div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Title</th>
                    <th width="40%">Image</th>
                    <!-- <th>Description</th> -->
                    <th>Created By</th>                    
                    <th width="10%">Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Title</th>
                    <th width="40%">Image</th>
                    <!-- <th>Description</th> -->
                    <th>Created By</th>
                    <th width="10%">Action</th>
                </tr>
            </tfoot>
            <tbody>
            @foreach ($About as $item)
                <tr>
                    <td>{{ $item->title }}</td>
                    <td><img src="{{ $item->image }}" width="100%"></td>
                    <!-- <td>{!! $item->description !!}</td> -->
                    <td>{{ $item->user->name ?? 'unknows' }}</td>
                    <td align="center"> 
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('about.destroy', $item->id) }}" method="POST">
                            <a href="{{ route('about.edit', Crypt::encrypt($item->id)) }}" class="btn btn-sm btn-primary">
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