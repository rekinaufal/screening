@extends('admin.index')
@section('content')
<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data Applied</h6>
</div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name Talent</th>
                    <th>CV</th>
                    <th>Applied Company</th>
                    <th>Detail</th>
                    {{-- <th>JobFair</th>
                    <th>Company</th> --}}
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Name Talent</th>
                    <th>CV</th>
                    <th>Applied Company</th>
                    <th>Detail</th>
                    {{-- <th>JobFair</th>
                    <th>Company</th> --}}
                </tr>
            </tfoot>
            <tbody >
            <?php $no = 0; ?>
                @if (!empty($Applied))
                    @foreach ($Applied as $item)
                        <?php $no++;?>
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{ $item->nama_lengkap }}</td>
                            <td>
                                @if(!empty($item->file_cv))
                                    <a href="{{  url('/').$item->file_cv  }}" target="_blank">View CV</a>
                                @else
                                    <p>Not Found CV</p>
                                @endif
                            </td>
                            <td>
                                <?php 
                                    $Jumlah =  DB::table('applied')
                                    ->select('jobfair.id_company')
                                    ->join('jobfair', 'applied.id_jobfair', '=', 'jobfair.id')
                                    ->where('applied.id_user', $item->id_user )
                                    ->where('applied.status', 1)
                                    ->groupBy('jobfair.id_company')
                                    ->get()
                                    ->count();
                                    // dd($Jumlah);
                                ?>
                                {{ $item->nama_lengkap }} has applied to {{$Jumlah}} companies 
                            </td>
                            <td>
                                <a href="#" class="btn text-white pilih-companydetail" data-id="{{ $item->id_user }}" style="background-color: rgb(33, 156, 189);" data-toggle="modal" data-target="#getDataDetail">Detail Applied</a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Company -->
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
                                <th>Detail</th>
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
                                <th>Name Company</th>
                                <th>Position</th>
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
