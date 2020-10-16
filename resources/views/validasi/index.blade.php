@extends('layouts.master')

@section('wrapper')
    
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

@section('content')
<div class="col-md-12">
    <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">INFO</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
            <div class="form-group">
            <div class="row">
                <div class="col-md-12">
                    <table class="table">
                        <tr>
                            <td width="35%" align="right"></td>
                           <td width="30"><span class="text-muted">INFORMASI VALIDASI DATA WARGA</span></td>
                           <td width="25%" align="left"></td>
                        </tr>
                       </table>
                       <div class="row">
                        <div class="col-md-12">
              <div class="form-group">
              <label>Aturan Validasi Data Warga Kurang Mampu Sebagai Berikut :</label>
                <ol>
                    <li>Gaji < 1.000.000 dan < 750.000</li>
                    <li>Kondisi Atap Bambu,Plastik,Seng</li>
                    <li>Kondisi Lantai Tanah</li>
                    <li>Kondisi Dinding bambu</li>
                </ol>
            </div>
                        </div>
                       </div>
                </div>
            </div>
               </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Mohon Perhatikan Informasinya
        </div>
        <!-- /.card-footer-->
      </div>
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title"></h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
            <div class="form-group">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                          <h3 class="card-title"> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg">
                            Validasi Keterangan Warga
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
                                <th>Keterangan</th>                                
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
                                          <td>@if ($item->keterangan == "tidak mampu")
                                            <span class="right badge badge-danger">Tidak Mampu</span>
                                            @elseif($item->keterangan == "mampu")
                                            <span class="right badge badge-success">Mampu</span>
                                          @endif
                                             </td>
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
            </div>
               </div>
        </div>
        <!-- /.card-body -->
        
</div>
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
            <form action="/validasi/data" method="POST" role="form">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <p>Jika Tidak Terdapat Data Yang Belum Diverifikasi Tombol Simpan Akan Hilang</p>
                    </div>
                </div>
        </div>
        
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          @foreach ($tombol as $data)
              @if ($data->hasil)
              <button type="submit" class="btn btn-primary">Simpan</button>
              @else
              @endif
          @endforeach
          
        </div>
      </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>   
@endsection