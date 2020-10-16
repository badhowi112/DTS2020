@extends('layouts.master')

@section('wrapper')
<div class="row mb-2">
  <div class="col-sm-6">
    {{-- <h1>List Data Warga</h1> --}}
  </div>
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item active"><a href="/">Beranda</a></li>
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

@section('content')
<div class="col-lg-4 col-6">
    <!-- small box -->
    <div class="small-box bg-info">
      <div class="inner">
        @foreach ($data_warga as $data)
      <h3>{{$data->hasil}}</h3>
        @endforeach

        <p>Total Data Warga</p>
      </div>
      <div class="icon">
        <i class="ion ion-stats-bars"></i>
      </div>
      {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
    </div>
  </div>
<div class="col-lg-4 col-6">
    <!-- small box -->
    <div class="small-box bg-success">
      <div class="inner">
        @foreach ($mampu as $data)
      <h3>{{$data->hasi}}</h3>
        @endforeach

        <p>Total Data Warga Mampu</p>
      </div>
      <div class="icon">
        <i class="ion ion-person-add"></i>
      </div>
      {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
    </div>
  </div>
<div class="col-lg-4 col-6">
    <!-- small box -->
    <div class="small-box bg-danger">
      <div class="inner">
        @foreach ($tidak_mampu as $data)
      <h3>{{$data->has}}</h3>
        @endforeach

        <p>Total Data Warga Tidak Mampu</p>
      </div>
      <div class="icon">
        <i class="ion ion-person-add"></i>
      </div>
      {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
    </div>
  </div>
@endsection