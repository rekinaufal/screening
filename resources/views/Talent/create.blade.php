@extends('admin.index')
@section('content')
<div class="card-body">
    <div class="table-responsive">
        <form method="POST" action="{{ route('talents.store') }}"  role="form" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <!-- col 1  -->
            <div class="col"> 
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama_lengkap">
                </div>
                <div class="form-group">
                    <label>Foto Diri</label><br>
                    <input type="file" class="form-control" name="foto_diri">
                </div>
                <div class="form-group">
                    <label>Nama Panggilan</label>
                    <input type="text" class="form-control" name="nama_panggilan">
                </div>
                <div class="form-group">
                    <label>No Identitas</label>
                    <input type="text" class="form-control" name="no_identitas">
                </div>
                <div class="form-group">
                    <label>File Identitas</label><br>
                    <input type="file" class="form-control" name="file_identitas">
                </div>
                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir">
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir">
                </div>
                <div class="form-group">
                    <label>Nomor Telepon</label>
                    <input type="text" class="form-control" name="no_hp">
                </div>
                <div class="form-group">
                    <label>Status Pernikahan</label>
                    <input type="text" class="form-control" name="status_pernikahan">
                </div>
                <div class="form-group">
                    <label for="sel1">Jenis Kelamin:</label>
                    <select class="form-control" name="jenis_kelamin">
                        <option value="">-- Select one --</option>
                        <option value="Laki - Laki">Laki - Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Agama</label>
                    <input type="text" class="form-control" name="agama">
                </div>
                {{-- <button type="submit" class="btn btn-primary mt-2 mb-4">Submit</button> --}}
            </div>
            <!-- col 2 -->
            <div class="col">
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
                    <label>File CV</label><br>
                    <input type="file" class="form-control" name="file_cv">
                </div>
                <div class="form-group">
                    <label>Tanggal Daftar</label>
                    <input type="date" class="form-control" name="tanggal_daftar" >
                </div>
                <div class="form-group">
                    <label for="sel1">Status:</label>
                    <select class="form-control" name="status">
                        <option value="">-- Select one --</option>
                        <option value="1">Active</option>
                        <option value="0">Not Active</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>IG</label>
                    <input type="text" class="form-control" name="ig" >
                </div>
                <div class="form-group">
                    <label>Linked In</label>
                    <input type="text" class="form-control" name="linkin" >
                </div>
                <div class="form-group">
                    <label>Twitter</label>
                    <input type="text" class="form-control" name="twiter" >
                </div>
                <div class="form-group">
                    <label>Tiktok</label>
                    <input type="text" class="form-control" name="tiktok" >
                </div>
                <div class="form-group">
                    <label for="sel1">User:</label>
                    <select class="form-control" name="id_user">
                        <option value="">-- Select one --</option>
                        @foreach($list_user as $item)
                        <option value="{{ $item->id }}" {{ $Talent->id_user === $item->id ? "selected" : null }}>{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mt-2 mb-4">Submit</button>
            </div>
        </div>
        </form>
    </div>
</div>
  @endsection