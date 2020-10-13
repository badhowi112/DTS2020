<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
      <div class="container">
        <h1>Edit Data Warga</h1>
        <div class="row">
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
        </div>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>