@extends('admin.index')
@section('content')
<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data News</h6>
    <a href="{{ route('news.create') }}" class="btn btn-primary btn-icon-split">
        <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
        </span>
        <span class="text">Tambah Data</span>
    </a>  
</div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Text</th>
                    <th>Created By</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Text</th>
                    <th>Created By</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
            <?php $no = 0; ?>
            @foreach ($News as $item)
                <?php $no++;?>
                <tr>
                    <td>{{$no}}</td>
                    <td>{!! $item->text !!}</td>
                    <td>{{ $item->user->name ?? 'unknows' }}</td>
                    <td>
                        <?php if ( $item->status == 1) {?>
                            <a href="" class="btn btn-primary btn-icon-split" style="pointer-events:none;">
                                <span class="icon text-white-50">
                                    <i class="fas fa-flag"></i>
                                </span>
                                <span class="text">Aktif</span>
                            </a>  
                        <?php }else{?>
                            <a href="" class="btn btn-warning btn-icon-split" style="pointer-events:none;">
                                <span class="icon text-white-50">
                                    <i class="fas fa-times"></i>
                                </span>
                                <span class="text">Tidak Aktif</span>
                            </a>  
                        <?php } ?>  
                    </td>
                    <td align="center"> 
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('news.destroy', $item->id) }}" method="POST" class="btn-group">
                            <a href="{{ route('news.edit', $item->id) }}" class="btn btn-sm btn-primary">
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