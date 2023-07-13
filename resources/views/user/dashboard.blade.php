@extends('layout/index')

@section('Materi')
<!DOCTYPE html>

<html lang="en">
    <head>
    <title>Pendaftaran Siswa Baru Online</title>
    </head>

    @section('content')
            <label for="" style="font-size:37px;">Pendaftaran Siswa Baru</label>
            <hr>
            <a href="/user/pendaftaran"  class="btn btn-primary" >Daftar</a>
            <br>
            <section>
                <div class="container-fluid">
                        <table class="table mt-4">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No Pendaftaran</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Asal Sekolah</th>
                                <th scope="col">Status</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user as $user)
                                <tr>
                                    <td>{{$user->id_siswa}}</td>
                                    <td>{{$user->nama_siswa}}</td>
                                    <td>{{$user->jenis_kelamin}}</td>
                                    <td>{{$user->asal_sklh}}</td>
                                    <td>{{$user->status}}</td>
                                    <td>
                                        <a href="/user/detail" class="badge badge-success">Detail</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </section>
    @endsection
</html>