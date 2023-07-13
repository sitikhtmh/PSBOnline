@extends('layout/index')

@section('informasi')
<!DOCTYPE html>

<html lang="en">
    <head>
    <title>Pendaftaran Siswa Baru Online</title>
    </head>

    @section('content')
            <label for="" style="font-size:37px;">Daftar Data Pendaftaran Siswa Baru</label>
            <hr>
            <br>
            <section>
                <div class="container-fluid">
                        <table class="table mt-4">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No Pendaftaran</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Status</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($admin as $adm)
                                <tr>
                                    <td>{{$adm->id_siswa}}</td>
                                    <td>{{$adm->nama_siswa}}</td>
                                    <td>{{$adm->status}}</td>
                                    <td>
                                        <a href="/admin/update" class="badge badge-success">Edit</a>
                                        <a href="/admin/detailpendaftar" class="badge badge-success">Detail</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </section>
    @endsection
</html>