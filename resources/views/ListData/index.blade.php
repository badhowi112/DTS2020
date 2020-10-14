@extends('layouts.master')
@section('content')
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">List Data Warga</h3>
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
                          <td>{{$item->kondisi_atap}}</td>
                          <td>{{$item->kondisi_lantai}}</td>
                          <td>{{$item->kondisi_dinding}}</td>
                          <td>{{$item->penghasilan}}</td>                              
                          <td><a href="/listdata/{{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a></td>
                          <td><a href="/listdata/{{$item->id}}/delete" class="btn btn-danger btn-sm">Delete</a></td>
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