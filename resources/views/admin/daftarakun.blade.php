@extends('layout/index')

@section('akun')
<!DOCTYPE html>

<html lang="en">
    <head>
    <title>Daftar Data Akun</title>
    </head>

    @section('content')
            <label for="" style="font-size:37px;">Daftar Data Akun</label>
            <hr>
            <!-- <a href="/user/pendaftaran"  class="btn btn-primary" >Daftar</a> -->
            <br>
            <section>
                <div class="container-fluid">
                        <table class="table mt-4">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($admin as $adm)
                                <tr>
                                    <td>{{$adm->username}}</td>
                                    <td>{{$adm->email}}</td>
                                    
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </section>
    @endsection
</html>