@extends('admin.index')
@section('content')
<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data Service</h6>
    <a href="{{ route('service.create') }}" class="btn btn-sm btn-primary">
        <i class="fa fa-plus" style="color:white"></i>
    </a>
</div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%">
            <thead>
                <tr>
                    <th>Category</th>
                    <th>Title 1</th>
                    <th>Description 1</th>
                    <th>Title 2</th>
                    <th>Description 2</th>
                    <th>Created By</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Category</th>
                    <th>Title 1</th>
                    <th>Description 1</th>
                    <th>Title 2</th>
                    <th>Description 2</th>
                    <th>Created By</th>
                    <th width="10%">Action</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach ($Service as $item)
                <tr>
                    <td>{{$item->category == "TS" ? "Talent Search" : "Employee Background Check"}}</td>
                    <td>{{ $item->title_1 }}</td>
                    <td>
                        <?php $jumlah_karakter1 = strlen($item->description_1); ?>
                        @if ($jumlah_karakter1 > 100)
                        {!! substr(strip_tags($item->description_1), 0, 100) !!} ...
                        @else
                        {!! substr(strip_tags($item->description_1), 0, 100) !!}
                        @endif
                    </td>
                    <td>{{ $item->title_2 }}</td>
                    <td>
                        <?php $jumlah_karakter2 = strlen($item->description_2); ?>
                        @if ($jumlah_karakter2 > 100)
                        {!! substr(strip_tags($item->description_2), 0, 100) !!} ...
                        @else
                        {!! substr(strip_tags($item->description_2), 0, 100) !!}
                        @endif
                    </td>
                    <td>{{ $item->user->name ?? 'unknows' }}</td>
                    <td align="center">
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                            action="{{ route('service.destroy', $item->id) }}" method="POST">
                            <a href="{{ route('service.edit', Crypt::encrypt($item->id)) }}"
                                class="btn btn-sm btn-primary">
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

<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data Service Details</h6>
    <a href="{{ route('service_details.create') }}" class="btn btn-sm btn-primary">
        <i class="fa fa-plus" style="color:white"></i>
    </a>
</div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTableServiceDetails" width="100%">
            <thead>
                <tr>
                    <th>Category</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Created By</th>
                    <th width="10%">Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Category</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Created By</th>
                    <th width="10%">Action</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach ($ServiceDetails as $item)
                <tr>
                    <td>{{$item->category == "TS" ? "Talent Search" : "Employee Background Check"}}</td>
                    <td>{{ $item->title }}</td>
                    <td>
                        <?php $jumlah_karakter = strlen($item->description); ?>
                        @if ($jumlah_karakter > 100)
                        {!! substr(strip_tags($item->description), 0, 100) !!} ...
                        @else
                        {!! substr(strip_tags($item->description), 0, 100) !!}
                        @endif
                    </td>
                    <td><img src="{{ $item->image }}" height="50" width="100"></td>
                    <td>{{ $item->user->name ?? 'unknows' }}</td>
                    <td align="center">
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('service_details.destroy', $item->id) }}" method="POST">
                            <a href="{{ route('service_details.edit', Crypt::encrypt($item->id)) }}" class="btn btn-sm btn-primary">
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
