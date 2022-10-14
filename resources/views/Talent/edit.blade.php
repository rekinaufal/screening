@extends('admin.index')
    @section('content')
    <div class="card-body">
        <div class="table-responsive">
            <form method="POST" action="{{ route('talents.update', $Talent->id) }}"  role="form" enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                @csrf
                <div class="row">
                    <!-- col 1  -->
                    <div class="col"> 
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama_lengkap" value="{{ $Talent->nama_lengkap }}">
                        </div>
                        <div class="form-group">
                            <label>Foto Diri</label><br>
                            <img src="{{$Talent->foto_diri}}" width="80%" class="img-thumbnail" alt="image">
                            <input type="hidden" class="form-control" name="foto_diri_old" value="{{$Talent->foto_diri}}">
                            <input type="file" class="form-control" name="foto_diri">
                        </div>
                        <div class="form-group">
                            <label>Nama Panggilan</label>
                            <input type="text" class="form-control" name="nama_panggilan" value="{{$Talent->nama_panggilan}}">
                        </div>
                        <div class="form-group">
                            <label>No Identitas</label>
                            <input type="text" class="form-control" name="no_identitas" value="{{$Talent->no_identitas}}">
                        </div>
                        <div class="form-group">
                            <label>File Identitas</label><br>
                            <div>
                                @php
                                    $splt_file_indentitas = $Talent->file_identitas ? explode("/", $Talent->file_identitas) : null;
                                @endphp    
                                {{ $splt_file_indentitas !== null ? end($splt_file_indentitas) : null }}
                            </div>
                            <input type="hidden" class="form-control" name="file_identitas_old" value="{{$Talent->file_identitas}}">
                            <input type="file" class="form-control" name="file_identitas">
                        </div>
                        <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempat_lahir" value="{{$Talent->tempat_lahir}}">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tanggal_lahir" value="{{$Talent->tgl_lahir}}">
                        </div>
                        <div class="form-group">
                            <label>Nomor Telepon</label>
                            <input type="text" class="form-control" name="no_hp" value="{{$Talent->no_hp}}">
                        </div>
                        <div class="form-group">
                            <label>Status Pernikahan</label>
                            <input type="text" class="form-control" name="status_pernikahan" value="{{$Talent->status_pernikahan}}">
                        </div>
                        <div class="form-group">
                            <label for="sel1">Jenis Kelamin:</label>
                            <select class="form-control" name="jenis_kelamin">
                                <option value="">-- Select one --</option>
                                <option value="Laki - Laki" {{ $Talent->jenis_kelamin === "Laki - Laki" ? "selected" : null }}>Laki - Laki</option>
                                <option value="Perempuan" {{ $Talent->jenis_kelamin === "Perempuan" ? "selected" : null }}>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Agama</label>
                            <input type="text" class="form-control" name="agama" value="{{$Talent->agama}}">
                        </div>
                        {{-- <button type="submit" class="btn btn-primary mt-2 mb-4">Submit</button> --}}
                    </div>
                    <!-- col 2 -->
                    <div class="col">
                        <div class="form-group">
                            <label for="sel1">Provinsi:</label>
                            <select class="form-control" name="provinsi">
                                <option value="">-- Select one --</option>
                                <option value="1" {{ $Talent->provinsi === 1 ? "selected" : null }}>Jawa Barat</option>
                                <option value="2" {{ $Talent->provinsi === 2 ? "selected" : null }}>DKI Jakarta</option>
                                <option value="3" {{ $Talent->provinsi === 3 ? "selected" : null }}>Jawa Timur</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="sel1">Kota Kabupaten:</label>
                            <select class="form-control" name="kota_kabupaten">
                                <option value="">-- Select one --</option>
                                <option value="1" {{ $Talent->kota_kabupaten === 1 ? "selected" : null }}>Kota Bogor</option>
                                <option value="2" {{ $Talent->kota_kabupaten === 2 ? "selected" : null }}>Kabupaten Bogor</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>File CV</label><br>
                            <div>
                                @php
                                    $splt_file_cv = $Talent->file_cv ? explode("/", $Talent->file_cv) : null;
                                @endphp    
                                {{ $splt_file_cv !== null ? end($splt_file_cv) : null }}
                            </div>
                            <input type="hidden" class="form-control" name="file_cv_old" value="{{$Talent->file_cv}}">
                            <input type="file" class="form-control" name="file_cv">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Daftar</label>
                            <input type="date" class="form-control" name="tanggal_daftar" value="{{$Talent->tanggal_daftar}}">
                        </div>
                        <div class="form-group">
                            <label for="sel1">Status:</label>
                            <select class="form-control" name="status">
                                <option value="">-- Select one --</option>
                                <option value="1" {{ $Talent->status === 1 ? "selected" : null }}>Active</option>
                                <option value="0" {{ $Talent->status === 2 ? "selected" : null }}>Not Active</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>IG</label>
                            <input type="text" class="form-control" name="ig" value="{{$Talent->ig}}">
                        </div>
                        <div class="form-group">
                            <label>Linked In</label>
                            <input type="text" class="form-control" name="linkin" value="{{$Talent->linkin}}">
                        </div>
                        <div class="form-group">
                            <label>Twitter</label>
                            <input type="text" class="form-control" name="twiter" value="{{$Talent->twiter}}">
                        </div>
                        <div class="form-group">
                            <label>Tiktok</label>
                            <input type="text" class="form-control" name="tiktok" value="{{$Talent->tiktok}}">
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