@extends('layouts.master')

@section('wrapper')
    
@endsection

@section('sidebar')
<li class="nav-item">
    <a href="/" class="nav-link">
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
@endsection

@section('content')

    <div class="col-md-12">
    <form action="/listdata/{{$data_warga->id}}/update" method="POST">
        @csrf
            <div class="form-group">
              <label for="exampleFormControlInput1">NIK</label>
            <input type="text" value="{{$data_warga->nik}}" name="nik" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Kecamatan</label>
            <input type="text" value="{{$data_warga->kecamatan}}" name="kecamatan" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Desa</label>
            <input type="text" value="{{$data_warga->desa}}" name="desa" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Alamat</label>
                <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3">{{$data_warga->alamat}}</textarea>
            </div>
            <div class="form-group">
            <label for="exampleFormControlInput1">Nama</label>
            <input type="text" value="{{$data_warga->nama}}" name="nama" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Kondisi Atap</label>
              <select name="kondisi_atap" class="form-control" id="exampleFormControlSelect1">
                <option value="1" @if ($data_warga->kondisi_atap == 1) selected @endif>Bambu</option>                       
                <option value="2" @if ($data_warga->kondisi_atap == 2) selected @endif>Tanaah</option>                      
               </select>
            </div>                    
            <div class="form-group">
              <label for="exampleFormControlSelect1">Kondisi Lantai</label>
              <select name="kondisi_lantai" class="form-control" id="exampleFormControlSelect1">
                <option value="1" @if ($data_warga->kondisi_lantai == 1) selected @endif>Bambu</option>                       
                <option value="2" @if ($data_warga->kondisi_lantai == 2) selected @endif>Tanaah</option>                      
               </select>
            </div>                    
            <div class="form-group">
              <label for="exampleFormControlSelect1">Kondisi Dinding</label>
              <select name="kondisi_dinding" class="form-control" id="exampleFormControlSelect1">
                <option value="1" @if ($data_warga->kondisi_dinding == 1) selected @endif>Bambu</option>                       
                <option value="2" @if ($data_warga->kondisi_dinding == 2) selected @endif>Tanaah</option>                      
               </select>
            </div>                    
            <div class="form-group">
                <label for="exampleFormControlInput1">Penghasilan</label>
                <input type="text" value="{{$data_warga->penghasilan}}" name="penghasilan" class="form-control" id="exampleFormControlInput1">
                </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
    </div>

@endsection