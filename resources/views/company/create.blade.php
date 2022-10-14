@extends('admin.index')
@section('content')
<div class="card-body">
    <div class="table-responsive">
        <form method="POST" action="{{ route('companies.store') }}"  role="form" enctype="multipart/form-data">
        @csrf
            <div class="row">
                <!-- col 1  -->
                <div class="col"> 
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="nama_perusahaan">
                    </div>
                    <div class="form-group">
                        <label for="sel1">Provinsi:</label>
                        <select class="form-control" name="provinsi">
                            <option value="">-- Select one --</option>
                            <option value="1">Jawa Barat</option>
                            <option value="2">DKI Jakarta</option>
                            <option value="3">Jawa Timur</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="sel1">Kota Kabupaten:</label>
                        <select class="form-control" name="kota_kabupaten">
                            <option value="">-- Select one --</option>
                            <option value="1">Kota Bogor</option>
                            <option value="2">Kabupaten Bogor</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="sel1">Kelurahan:</label>
                        <select class="form-control" name="kelurahan">
                            <option value="">-- Select one --</option>
                            <option value="1">Admin</option>
                            <option value="2">Company</option>
                            <option value="3">User</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="sel1">Desa:</label>
                        <select class="form-control" name="desa">
                            <option value="">-- Select one --</option>
                            <option value="1">Admin</option>
                            <option value="2">Company</option>
                            <option value="3">User</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea class="form-control" rows="8" name="alamat"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Nomor Telepon</label>
                        <input type="text" class="form-control" name="nomor_telpon">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                    {{-- <button type="submit" class="btn btn-primary mt-2 mb-4">Submit</button> --}}
                </div>
                <!-- col 2 -->
                <div class="col">
                    <div class="form-group">
                        <label>Website</label>
                        <input type="text" class="form-control" name="website_perusahaan">
                    </div>
                    <div class="form-group">
                        <label>Logo</label>
                        <input type="file" class="form-control" name="logo">
                    </div>
                    <div class="form-group">
                        <label>Nama Pimpinan</label>
                        <input type="text" class="form-control" name="nama_pimpinan">
                    </div>
                    <div class="form-outline">
                        <label>Deskripsi Perusahaan</label>
                        <textarea class="ckeditor form-control" rows="8" name="deskripsi_perusahaan"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Bisnis</label>
                        <input type="text" class="form-control" name="bisnis">
                    </div>
                    <button type="submit" class="btn btn-primary mt-2 mb-4">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
  @endsection