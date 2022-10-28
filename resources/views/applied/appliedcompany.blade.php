@extends('admin.index')
@section('content')
<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data Applied Company</h6>
</div>
<div class="card-body">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <!-- <h1 class="h3 mb-0 text-gray-800">Dashboard</h1> -->
        <form action="{{ route('applied.search') }}" method="POST" enctype="multipart/form-data" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
                @csrf
                <!-- <input type="text" class="form-control bg-light border-0 small" placeholder="Filter Company" aria-label="Search" aria-describedby="basic-addon2"> -->
                <?php $status =  Session::get('status') ?>
                @if($status == "SuperAdmin")
                    <select id="kota" name="company" class="form-control select2" style="width:300px;">
                        <option value=""></option>
                        @foreach ($Company as $item)
                            <option value="{{ $item->name_company }}">{{ $item->name_company }}</option>
                        @endforeach
                    </select>
                    <div class="input-group-append">
                        <button class="btn btn-success" type="submit">
                            <i class="fas fa-file-excel fa-sm text-white-50"></i>
                            &nbsp;Filter Export Excel
                        </button>
                    </div>
                @endif
            </div>
        </form>
        @if($status == "SuperAdmin")
            <a href="{{ url('/exportexcel') }}" class="d-none d-sm-inline-block btn btn-success shadow-sm">
                <i class="fas fa-file-excel fa-sm text-white-50"></i>
                &nbsp;Global Export Excel
            </a>
            &nbsp;
        @endif

        <!-- <a href="{{ url('/exportwhereexcel') }}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
            <i class="fas fa-file-excel fa-sm text-white-50"></i>
            &nbsp;Filter Export Excel
        </a> -->
    </div>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>vacancy</th>
                    <th>Amount Applicant</th>
                    <th>Detail</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>vacancy</th>
                    <th>Amount Applicant</th>
                    <th>Detail</th>
                </tr>
            </tfoot>
            <tbody >
            <?php $no = 0; ?>
                @if (!empty($Applied))
                    @foreach ($Applied as $item)
                        <?php $no++;?>
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{ $item->position }}</td>
                            <!-- <td>
                                @if(!empty($item->cv))
                                    <a href="{{  url('/').$item->cv  }}" target="_blank">View CV</a>
                                @else
                                    <p>Not Found CV</p>
                                @endif
                            </td> -->
                            <td>
                                <?php 
                                    $Jumlah =  DB::table('applied')
                                    // ->select('*')
                                    ->join('jobfair', 'applied.id_jobfair', '=', 'jobfair.id_jobfair')
                                    // ->where('applied.id_user', $item->id_user )
                                    ->where('applied.status', 1)
                                    ->where('jobfair.id_jobfair', $item->id_jobfair)
                                    ->get()
                                    ->count();
                                ?>
                                {{ $item->position }} has applied to {{$Jumlah}} Applicant 
                            </td>
                            <td>
                                <a href="#" class="btn text-white pilih-appliedcompany" data-id="{{ $item->id_jobfair }}" style="background-color: rgb(33, 156, 189);" data-toggle="modal" data-target="#getDataDetail">Detail Applied</a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>

<!-- Modal detail applied perCompany -->
<div class="modal fade" id="getDataDetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Company Applied</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name Company</th>
                                <th>CV</th>
                                <!-- <th>Detail</th> -->
                            </tr>
                        </thead>
                        <tbody id="exampleid">
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal" style="background-color: rgb(33, 156, 189);">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- modal detail jobfair -->
<div class="modal fade" id="getDataDetailApplied" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">History Applied</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name User</th>
                                <th>CV</th>
                            </tr>
                        </thead>
                        <tbody id="detailjobfair">
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal" style="background-color: rgb(33, 156, 189);">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection