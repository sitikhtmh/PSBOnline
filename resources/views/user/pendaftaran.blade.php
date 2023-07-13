@extends('layout.index')

@section('Form Pendaftaran')
<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Daftar Siwa Baru</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.3.5/sweetalert2.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.3.5/sweetalert2.min.js"></script>
    </head>
    <body>
        @section('content')

        <div class="">
                    <div style="padding-top:0px;">
                        <a href="/user/dashboard" type="button">
                            <i class="fa fa-arrow-left">
                            <span>Kembali</span>
                            </i>
                        </a>
                    </div>
                </div>
        <div class="container">
        <div class = "row">
        <div class="col-10">
        <h1 class="mt-10" style="text-align:center">Form Pendaftaran</h1>
        <hr>
        <form method='POST' action='/user/pendaftaran'>
        @csrf
        <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Lengkap " name="nama">
        </div>
        <div class="form-group">
            <label for="tempat">Tempat Lahir</label>
            <input type="text" class="form-control" id="tempat" placeholder="Masukkan Tempat Lahir " name="tempat">
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggal" placeholder="Masukkan Tanggal Lahir" name="tanggal">
        </div>
        <div class="form-group">
            <label for="jenis">Jenis Kelamin</label>
            <!-- <input type="text" class="form-control" id="jenis" placeholder="Pilih Jenis Kelamin" name="jenis"> -->

            <select name="jenis">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="laki">L</option>
                <option value="prempuan">P</option>
             </select>
        </div>
        <div class="form-group">
            <label for="agama">Agama</label>
            <input type="text" class="form-control" id="agama" placeholder="Masukkan Agama" name="agama">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Masukkan Email" name="email">
        </div>
        <div class="form-group">
            <label for="asal">Asal Sekolah</label>
            <input type="text" class="form-control" id="asal" placeholder="Masukkan Asal Sekolah" name="asal">
        </div>
        <div class="form-group">
            <label for="nisn">NISN</label>
            <input type="text" class="form-control" id="nisn" placeholder="Masukkan NISN" name="nisn">
        </div>
        <div class="form-group">
            <label for="rata">Rata-Rata Nilai UN</label>
            <input type="text" class="form-control" id="rata" placeholder="Masukkan Rata-Rata Nilai UN" name="rata">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        </div>
        </div>
        </div>
        @endsection
    </body>
</html>