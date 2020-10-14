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
    
@endsection