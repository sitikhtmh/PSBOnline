@extends('layout/index')

@section('Detail')
<!DOCTYPE html>

<html lang="en">
    <head>
    <title>Detail Siswa</title>
    </head>
    <body>
        @section('content')
                    <div class="">
                        <div style="padding-top:0px;">
                            <a href="/admin/informasi" type="button">
                                <i class="fa fa-arrow-left">
                                <span>Kembali</span>
                                </i>
                            </a>
                        </div>
                    </div>

            <div class="container">
                <div class = "row">
                    <div class="col-10">
                        <h1 class="mt-10" style="text-align:center">Detail Data Pendaftar</h1>
                        <br>

                        <form style="width:100%;" action="" method="get" enctype="multipart/form-data">
                            <div class="modal-body">
                            @csrf
                                <div class="form-group">
                                    <label for="id_siswa">No Pendaftaran</label>
                                    <br>
                                    <input type="text" class="form-control" id="id_siswa" value="" name="id_siswaa" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="nama">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="nama" value="" name="nama" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="tempat">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="tempat" value="" name="tempat" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal">Tanggal Lahir</label>
                                    <input type="text" class="form-control" id="tanggal" value="" name="Tanggal" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="jenis">Jenis Kelamin</label>
                                    <input type="text" class="form-control" id="jenis" value="" name="jenis" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="agama">Agama</label>
                                    <input type="text" class="form-control" id="agama" value="" name="agama" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" value="" name="email" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="asal">Asal Sekolah</label>
                                    <input type="text" class="form-control" id="asal" value="" name="asal" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="nisn">NISN</label>
                                    <input type="text" class="form-control" id="nisn" value="" name="nisn" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="rata">Rata-Rata Nilai UN</label>
                                    <input type="text" class="form-control" id="rata" value="" name="rata" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <input type="text" class="form-control" id="status" value="" name="status" readonly>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endsection
    </body>
</html>