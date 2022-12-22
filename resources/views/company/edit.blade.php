@extends('admin.index')
    @section('content')
    <div class="card-body">
        <div class="table-responsive">
            <form method="POST" action="{{ route('companies.update', $Company->id) }}"  role="form" enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                @csrf
                <div class="row">
                    <!-- col 1  -->
                    <div class="col"> 
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="nama_perusahaan" value="{{ $Company->nama_perusahaan }}">
                        </div>
                        <div class="form-group">
                            <label for="sel1">Provinsi</label>
                            <input type="text" class="form-control" name="provinsi" value="{{$Company->provinsi}}">
                        </div>
                        <div class="form-group">
                            <label for="sel1">Kota Kabupaten</label>
                            <input type="text" class="form-control" name="kota_kabupaten" value="{{ $Company->kota_kabupaten}}">
                        </div>
                        <div class="form-group">
                            <label for="sel1">Kelurahan</label>
                            <input type="text" class="form-control" name="kelurahan" value="{{ $Company->kelurahan}}">
                        </div>
                        <div class="form-group">
                            <label for="sel1">Desa</label>
                            <input type="text" class="form-control" name="desa" value="{{ $Company->desa}}">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea class="form-control" rows="8" name="alamat">{{$Company->alamat}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Nomor Telepon</label>
                            <input type="text" class="form-control" name="nomor_telpon" value="{{$Company->nomor_telpon}}">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" value="{{$Company->email}}">
                        </div>
                        {{-- <button type="submit" class="btn btn-primary mt-2 mb-4">Submit</button> --}}
                    </div>
                    <!-- col 2 -->
                    <div class="col">
                        <div class="form-group">
                            <label>Website</label>
                            <input type="text" class="form-control" name="website_perusahaan" value="{{$Company->website_perusahaan}}">
                        </div>
                        <div class="form-group">
                            <label>Logo</label><br>
                            <img src="{{$Company->logo}}" width="80%" class="img-thumbnail" alt="image">
                            <input type="hidden" class="form-control" name="logoold" value="{{$Company->logo}}">
                            <input type="file" class="form-control" name="logo">
                        </div>
                        <div class="form-group">
                            <label>Nama Pimpinan</label>
                            <input type="text" class="form-control" name="nama_pimpinan" value="{{$Company->nama_pimpinan}}">
                        </div>
                        <div class="form-outline">
                            <label>Deskripsi Perusahaan</label>
                            <textarea class="ckeditor form-control" rows="8" name="deskripsi_perusahaan">{{$Company->deskripsi_perusahaan}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Bisnis</label>
                            <input type="text" class="form-control" name="bisnis" value="{{$Company->bisnis}}">
                        </div>
                        <button type="submit" class="btn btn-primary mt-2 mb-4">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
  @endsection