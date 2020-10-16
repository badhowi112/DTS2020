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
      <h3 class="card-title">Edit Data Warga</h3>

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
                    <div class="card-body">
                        <form action="/listdata/{{$data_warga->id}}/update" method="POST" role="form">
                          @csrf
                          <div class="row">
                            <div class="col-sm-6">
                              <!-- text input -->
                              <div class="form-group">
                                <label>NIK</label>
                              <input value="{{$data_warga->nik}}" type="number" name="nik" class="form-control" >
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <!-- text input -->
                              <div class="form-group">
                                <label>Kecamatan</label>
                              <input value="{{$data_warga->kecamatan}}" type="text" name="kecamatan" class="form-control">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-6">
                              <!-- text input -->
                              <div class="form-group">
                                <label>Desa</label>
                              <input value="{{$data_warga->desa}}" type="text" name="desa" class="form-control">
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label>Alamat</label>
                              <textarea name="alamat" class="form-control" rows="3">{{$data_warga->alamat}}</textarea>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-6">
                              <!-- text input -->
                              <div class="form-group">
                                <label>Nama</label>
                              <input value="{{$data_warga->nama}}" type="text" name="nama" class="form-control">
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <!-- select -->
                              <div class="form-group">
                                <label>Kondisi Atap </label>
                                <select name="kondisi_atap" class="form-control">
                                    <option value="1" @if ($data_warga->kondisi_atap == 1)selected                                        
                                    @endif>Seng</option>
                                    <option value="2" @if ($data_warga->kondisi_atap == 2)selected                                        
                                    @endif>Genteng Tanah</option>
                                     <option value="3" @if ($data_warga->kondisi_atap == 3)selected                                         
                                     @endif>Asbes</option>
                                     <option value="4" @if ($data_warga->kondisi_atap == 4)selected                                         
                                     @endif>Kaca</option>
                                    <option value="5" @if ($data_warga->kondisi_atap == 5)selected                                        
                                    @endif>Bambu</option>
                                    <option value="6" @if ($data_warga->kondisi_atap == 6)selected                                        
                                    @endif>Plastik</option>                      
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
                                      <option value="1" @if ($data_warga->kondisi_lantai == 1)selected                                          
                                      @endif>Tanah</option>
                                      <option value="2" @if ($data_warga->kondisi_lantai == 2)selected                                          
                                      @endif>Keramik</option>
                                      <option value="3" @if ($data_warga->kondisi_lantai == 3)selected                                          
                                      @endif>Marmer</option>
                                      <option value="4" @if ($data_warga->kondisi_lantai == 4)selected                                          
                                      @endif>Granit</option>            
                                </select>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <!-- select -->
                              <div class="form-group">
                                <label>Kondisi Dinding</label>
                                <select name="kondisi_dinding" class="form-control">
                                  <option value="1" @if ($data_warga->kondisi_dinding == 1)selected                                      
                                  @endif>Bambu</option>
                                  <option value="2" @if ($data_warga->kondisi_dinding == 2)selected                                      
                                  @endif>Batako</option>
                                  <option value="3" @if ($data_warga->kondisi_dinding == 3)selected                                      
                                  @endif>Beton</option>                      
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
                                  <option value="1" @if ($data_warga->penghasilan == 1)selected                                      
                                  @endif>< 750.000</option>
                                  <option value="2" @if ($data_warga->penghasilan == 2)selected                                      
                                  @endif><= 1.500.000</option>
                                  <option value="3" @if ($data_warga->penghasilan == 3)selected                                      
                                  @endif>> 3.000.000</option>                                     
                                  <option value="4" @if ($data_warga->penghasilan == 4)selected                                      
                                  @endif>>= 5.000.000</option>                                     
                                </select>
                              </div>
                            </div>             
                          </div>
                          <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">                                  
                                <input value="0" type="number" name="verifikasi" class="form-control" hidden>
                                <input value="-" type="text" name="keterangan" class="form-control" hidden>
                                </div>
                              </div>
                          </div>
                            <div class="col-sm-12">
                                <!-- text input -->
                                <div class="form-group">                                 
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                              </div>
                          </div>
                      </div>
                      </form>
            </div>
        </div>
           </div>
    </div>
    <!-- /.card-body -->
    </div>
</div>
    
@endsection