@extends('layouts.main')
@section('content')
<style>
    .form-control:focus{
        box-shadow: none;
        border-color: #219CBD;
    }
    .profile-button{
        background: #219CBD;
        box-shadow: none;
        border: none
    }
    .profile-button:hover{
        background: #219CBD;
    }
    .profile-button:focus{
        background: #219CBD;
        box-shadow: none
    }
    .profile-button:active{
        background: #219CBD;
        box-shadow: none
    }
    .back:hover{
        color: #219CBD;
        cursor: pointer
    }
    .labels{
        font-size: 11px
    }
    .add-experience:hover{
        background: #219CBD;
        color: #fff;
        cursor: pointer;
        border: solid 1px #219CBD;
    }
</style>
<div class="container" style="width:80%; background-color:rgba(192,192,192,0.2);">
    <div class="container rounded  mt-5 mb-5">
        <form method="POST" action="{{ route('talents.update', $Profile->id) }}"  role="form" enctype="multipart/form-data">
            {{ method_field('PATCH') }}
            @csrf
            <!-- alert -->
                @if(Session::has('message'))
                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}" align="center">{{ Session::get('message') }}</p>
                @endif
                
                @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session('success') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            <!-- alert -->
            <div class="row">
                <div class="col-md-3 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                        @if(!empty($Profile->foto_diri))
                            <img class="rounded-circle mt-5" src="{{$Profile->foto_diri}}" width="100%">
                        @else
                            <label for=""><b>Photo Not Found</b></label>
                        @endif
                        <span class="font-weight-bold">{{$User->name}}</span>
                        <span class="text-black-50">{{$User->email}}</span>
                        <span> </span>
                    </div> 
                </div> 
                <div class="col-md-5 border-right">
                    <div class="p-3 py-5"> 
                        <div class="d-flex justify-content-between align-items-center mb-3"> 
                            <h4 class="text-right">Profile Settings</h4> 
                        </div> 
                        <div class="row mt-2"> 
                            <div class="col-md-6">
                                <label class="labels">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap" value="{{$Profile->nama_lengkap}}">
                            </div> 
                            <div class="col-md-6">
                                <label class="labels">Nama Panggilan</label>
                                <input type="text" name="nama_panggilan" class="form-control" placeholder="Nama Panggilan" value="{{$Profile->nama_panggilan}}">
                            </div> 
                            <div class="col-md-6">
                                <label class="labels">No Identitas</label>
                                <input type="text"  name="no_identitas" class="form-control" placeholder="No Identitas" value="{{$Profile->no_identitas}}">
                            </div> 
                            <div class="col-md-6">
                                <label class="labels">Tempat Lahir</label>
                                <input type="text"  name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" value="{{$Profile->tempat_lahir}}">
                            </div> 
                            <div class="col-md-6">
                                <label class="labels">Tanggal Lahir</label>
                                <input type="date"  name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" value="{{$Profile->tgl_lahir}}">
                            </div> 
                            <div class="col-md-6">
                                <label class="labels">Nomor Telephone</label>
                                <input type="number"  name="no_hp" class="form-control" placeholder="Nomor Telephone" value="{{$Profile->no_hp}}" onkeypress="if ( isNaN( String.fromCharCode(event.keyCode) )) return false;">
                            </div> 
                            <div class="col-md-6">
                                <label class="labels">Status Pernikahan</label><br>
                                <select name="status_pernikahan" class="form-control">
                                    @if(!empty($Profile->status_pernikahan))
                                        <option value="{{ $Profile->status_pernikahan }}" selected>{{ $Profile->status_pernikahan }}</option>
                                        <option value="Lajang">Lajang</option>
                                        <option value="Menikah">Menikah</option>
                                        <option value="Cerai">Cerai</option> 
                                    @else
                                        <option value="">-- Select one --</option> 
                                        <option value="Lajang">Lajang</option>
                                        <option value="Menikah">Menikah</option>
                                        <option value="Cerai">Cerai</option> 
                                    @endif
                                </select>
                            </div> 
                            <div class="col-md-6">
                                <label class="labels">Jenis Kelamin</label><br>
                                <select name="jenis_kelamin" class="form-control">
                                    @if(!empty($Profile->jenis_kelamin))
                                        <option value="{{ $Profile->jenis_kelamin }}" selected>{{ $Profile->jenis_kelamin }}</option>
                                        <option value="Pria">Pria</option>
                                        <option value="Wanita">Wanita</option>
                                    @else
                                        <option value="">-- Select one --</option> 
                                        <option value="Pria">Pria</option>
                                        <option value="Wanita">Wanita</option>
                                    @endif
                                </select>
                            </div> 
                            <div class="col-md-6">
                                <label class="labels">Agama</label><br>
                                <select name="agama" class="form-control">
                                    @if(!empty($Profile->agama))
                                        <option value="{{ $Profile->agama }}" selected>{{ $Profile->agama }}</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Konghucu">Konghucu</option>
                                        <option value="Hindu">Hindu</option>
                                    @else
                                        <option value="">-- Select one --</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Konghucu">Konghucu</option>
                                        <option value="Hindu">Hindu</option>
                                    @endif
                                </select>
                            </div> 
                            <div class="col-md-6">
                                <label class="labels">Provinsi:</label>
                                <select class="form-control" name="provinsi" id="provinsi">
                                    <option value="">-- Select one --</option>
                                    @if(!empty($list_provinces))
                                        @foreach ($list_provinces as $item)
                                            <option value="{{ $item->id }}" {{ $Profile->provinsi === $item->id ? "selected" : null }}>{{ $item->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div> 
                            <div class="col-md-6">
                                <label class="labels">Kota Kabupaten:</label>
                                <select class="form-control" name="kota_kabupaten" id="kota_kabupaten">
                                    <option value="">-- Select one --</option>
                                    @if ($Profile !== null)
                                        @foreach ($list_cities as $item)
                                            <option value="{{ $item->id }}" {{ $Profile->kota_kabupaten === $item->id ? "selected" : null }}>{{ $item->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div> 
                            <div class="col-md-6">
                                <label class="labels">Instagram</label>
                                <input type="text"  name="ig" class="form-control" placeholder="Instagram" value="{{$Profile->ig}}">
                            </div> 
                            <div class="col-md-6">
                                <label class="labels">Linkedin</label>
                                <input type="text"  name="linkin" class="form-control" placeholder="Linkedin" value="{{$Profile->linkin}}">
                            </div> 
                            <div class="col-md-6">
                                <label class="labels">Twitter</label>
                                <input type="text"  name="twiter" class="form-control" placeholder="Twitter" value="{{$Profile->twiter}}">
                            </div> 
                            <div class="col-md-6">
                                <label class="labels">Tiktok</label>
                                <input type="text"  name="tiktok" class="form-control" placeholder="Tiktok" value="{{$Profile->tiktok}}">
                            </div> 
                            <div class="col-md-12 mt-4">
                                <button class="btn btn-primary profile-button" type="submit">Save Profile</button>
                            </div>
                    </div> 
                    <!-- <div class="row mt-3"> 
                        <div class="col-md-12">
                            <label class="labels">PhoneNumber</label>
                            <input type="text" class="form-control" placeholder="enter phone number" value="">
                        </div> 
                        <div class="col-md-12">
                            <label class="labels">Address</label>
                            <input type="text" class="form-control" placeholder="enter address" value="">
                        </div> 
                        <div class="col-md-12">
                            <label class="labels">Email</label>
                            <input type="text"  name="email" class="form-control" placeholder="enter email" value="" required readonly>
                        </div> 
                        <div class="col-md-12">
                            <label class="labels">Email Verified At</label>
                            <input type="text" class="form-control" placeholder="Verified At" value="" required>
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Username</label>
                            <input type="password" name="Username" class="form-control" placeholder="enter Username" value="" required>
                        </div> 
                        <div class="col-md-12">
                            <label class="labels">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="enter password" value="" required>
                        </div>
                    </div>  -->
                    <!-- <div class="row mt-3"> 
                        <div class="col-md-6">
                            <label class="labels">Country</label>
                            <input type="text" class="form-control" placeholder="country" value="">
                        </div> 
                        <div class="col-md-6">
                            <label class="labels">State/Region</label>
                            <input type="text" class="form-control" value="" placeholder="state">
                        </div> 
                    </div>  -->
                </div> 
            </div> 
            <div class="col-md-4"> 
                <div class="p-3 py-5"> 
                    <div class="d-flex justify-content-between align-items-center experience">
                        <span>Edit / re-upload File</span>
                        <!-- <a href="#" class="btn text-white" style="background-color: rgb(33, 156, 189);" data-toggle="modal" data-target="#getDataOutTeamModal{{ $Profile->id }}">Applied History</a> -->
                        <!-- <span class="border px-3 p-1 add-experience">
                            <i class="fa fa-plus"></i>&nbsp;CV
                        </span> -->
                        </div>
                        <div class="mt-4">
                            <label class="labels">File CV</label>
                            <input type="file" name="file_cv">
                            @if(!empty($Profile->file_cv))
                                <a href="{{  url('/').$Profile->file_cv }}" target="_blank">View CV</a>
                                <input type="hidden" class="form-control" name="file_cv_old" value="{{$Profile->file_cv}}">
                            @else
                                <label><b>CV Not Found</b></label>
                            @endif
                        </div>
                        <div class="mt-4">
                            <label class="labels">Foto Diri</label>
                            <input type="file" name="foto_diri">
                            @if(!empty($Profile->foto_diri))
                                <a href="{{  url('/').$Profile->foto_diri }}" target="_blank">View Foto Diri</a>
                                <input type="hidden" class="form-control" name="foto_diri_old" value="{{$Profile->foto_diri}}">
                            @else
                                <label><b>Photo Not Found</b></label>
                            @endif
                        </div>
                        <div class="mt-4">
                            <label class="labels">File Identitas</label>
                            <input type="file" name="file_identitas">
                            @if(!empty($Profile->file_identitas))
                                <a href="{{  url('/').$Profile->file_identitas }}" target="_blank">View File Identitas</a>
                                <input type="hidden" class="form-control" name="file_identitas_old" value="{{$Profile->file_identitas}}">
                            @else
                                <label><b>File Not Found</b></label>
                            @endif
                        </div>
                        <!-- input uri di bawah untuk jika edit cv di FE (user), redirect ke view profile! -->
                        <input type="hidden" name="uri" value="{{ Request::segment(1) }}">
                        <input type="hidden" name="id_user" value="{{ Session::get('id') }}">
                    </div> 
                </div> 
            </div>
        </form>
    </div>
</div>
<div class="modal fade" id="getDataOutTeamModal{{ $Profile->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
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
                <div class="col-4">
                    <img src="{{ url('assets/img/logolci.png') }}" height="200" widht="200" style="position: absolute; opacity:0.25;">
                    {{-- <img src="{{ $item->picture }}" alt="User Pic" width="120" style="position: relative; top;"> --}}
                </div>
            </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal" style="background-color: rgb(33, 156, 189);">Close</button>
            </div>
        </div>
    </div>
</div>


@endsection
@section('javascript')
    <script>
        $("#provinsi").change(function(){
            var val = $("#provinsi option:selected").val()
            $("#kota_kabupaten option").remove()
            
            $.ajax({
                url: "{{ route('get-cities-by-province') }}", 
                data: {id: val},
                success: function(result){
                    $('#kota_kabupaten').append(`<option value="">
                        -- Select one --
                    </option>`);
                    $.each(result, function( index, value ) {
                        $('#kota_kabupaten').append(`<option value="${value.id}">
                            ${value.name}
                        </option>`);
                    });
                }
            });
        })
    </script>
@endsection