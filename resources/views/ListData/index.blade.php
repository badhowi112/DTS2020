@extends('layouts.master')
@section('content')
    <div class="col-md-12">
      @if (count($errors) > 0)
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg">
            Tambah Data Warga
          </button></h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="height: 300px;">
          <table class="table table-head-fixed text-nowrap">
            <thead>
              <tr>
                <th>ID</th>
                <th>NIK</th>
                <th>KECAMATAN</th>
                <th>DESA</th>
                <th>ALAMAT</th>
                <th>NAMA</th>
                <th>KONDISI ATAP</th>
                <th>KONDISI LANTAI</th>
                <th>KONDISI DINDING</th>
                <th>PENGHASILAN</th>
                <th>AKSI</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data_warga as $item)                                  
                          <tr>
                          <td>{{$item->id}}</td>
                          <td>{{$item->nik}}</td>
                          <td>{{$item->kecamatan}}</td>
                          <td>{{$item->desa}}</td>
                          <td>{{$item->alamat}}</td>
                          <td>{{$item->nama}}</td>
                          <td>
                          @if($item->kondisi_atap == "1")
                              <p>Seng</p>
                          @elseif($item->kondisi_atap == "2")
                             <p>Genteng Tanah</p>
                          @elseif($item->kondisi_atap == "3")
                              <p>Asbes</p>
                          @elseif($item->kondisi_atap == "4")
                             <p>Kaca</p>
                          @elseif($item->kondisi_atap == "5")
                              <p>Bambu</p>
                          @elseif($item->kondisi_atap == "6")
                             <p>Plastik</p>
                          @endif
                        </td>
                          <td>
                          @if($item->kondisi_lantai == "1")
                              <p>Tanah</p>
                          @elseif($item->kondisi_lantai == "2")
                          <p>Keramik</p>
                          @elseif($item->kondisi_lantai == "3")
                          <p>Marmer</p>
                          @elseif($item->kondisi_lantai == "4")
                          <p>Granit</p>
                          @endif
                            </td>
                          <td>
                          @if ($item->kondisi_dinding == "1")
                              <p>Bambu</p>
                          @elseif($item->kondisi_dinding == "2")
                          <p>Batako</p>
                          @elseif($item->kondisi_dinding == "3")
                          <p>Beton</p>
                          @endif</td>
                          <td>                            
                            @if ($item->penghasilan == "1")
                              <p>< 750.000</p>
                          @elseif($item->penghasilan == "2")
                          <p><= 1.500.000</p>
                          @elseif($item->penghasilan == "3")
                          <p>> 3.000.000</p>
                          @elseif($item->penghasilan == "4")
                          <p>>= 5.000.000</p>
                          @endif</td>                              
                          <td><a href="/listdata/{{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a></td>
                          <td><a href="/listdata/{{$item->id}}/delete" onclick="return confirm('Apakah Data Ini Akan Dihapus ??')" class="btn btn-danger btn-sm">Delete</a></td>
                            </tr>
                            @endforeach        
                </tbody>
          </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
         
        </div>
      </div>
    </div>
@endsection
@section('wrapper')
<div class="row mb-2">
  <div class="col-sm-6">
    {{-- <h1>List Data Warga</h1> --}}
  </div>
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="/">Beranda</a></li>
      <li class="breadcrumb-item active">List Data Warga</li>
    </ol>
  </div>
</div>
@endsection
@section('sidebar')
<li class="nav-item">
  <a href="/beranda" class="nav-link">
    <i class="nav-icon fas fa-tachometer-alt"></i>
    <p>
        Beranda        
    </p>
  </a>
</li>
<li class="nav-item">
  <a href="/listdata" class="nav-link">
    <i class="nav-icon fas fa-table"></i>
    <p>
        List Data        
    </p>
  </a>
</li>
<li class="nav-item">
  <a href="/validasi" class="nav-link">
    <i class="nav-icon fas fa-user"></i>
    <p>
        Validasi        
    </p>
  </a>
</li>

@endsection
@section('footer')
<div class="modal fade" id="modal-lg">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        {{-- <h4 class="modal-title">Tambah Data</h4> --}}
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Form Tambah Data</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form action="/listdata/create" method="POST" role="form">
              @csrf
              <div class="row">
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>NIK</label>
                    <input type="number" name="nik" class="form-control" >
                  </div>
                </div>
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Kecamatan</label>
                    <input type="text" name="kecamatan" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Desa</label>
                    <input type="text" name="desa" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control" rows="3"></textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6">
                  <!-- select -->
                  <div class="form-group">
                    <label>Kondisi Atap </label>
                    <select name="kondisi_atap" class="form-control">
                        <option value="1">Seng</option>
												<option value="2">Genteng Tanah</option>
												<option value="3">Asbes</option>
												<option value="4">Kaca</option>
												<option value="5">Bambu</option>
												<option value="6">Plastik</option>                      
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <!-- select -->
                  <div class="form-group">
                    <label>Kondisi Lantai</label>
                    <select name="kondisi_lantai" class="form-control">
                          <option value="1">Tanah</option>
													<option value="2">Keramik</option>
													<option value="3">Marmer</option>
													<option value="4">Granit</option>            
                    </select>
                  </div>
                </div>
                <div class="col-sm-6">
                  <!-- select -->
                  <div class="form-group">
                    <label>Kondisi Dinding</label>
                    <select name="kondisi_dinding" class="form-control">
                      <option value="1">Bambu</option>
                      <option value="2">Batako</option>
                      <option value="3">Beton</option>                      
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <!-- select -->
                  <div class="form-group">
                    <label>Penghasilan</label>
                    <select name="penghasilan" class="form-control">
                      <option value="1">< 750.000</option>
                      <option value="2"><= 1.500.000</option>
                      <option value="3">> 3.000.000</option>                                     
                      <option value="4">>= 5.000.000</option>                                     
                    </select>
                  </div>
                </div>             
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">                     
                    <input value="0" type="number" name="verifikasi" class="form-control" hidden>
                  </div>
                </div>      
              </div>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@endsection