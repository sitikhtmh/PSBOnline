<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Print</title>
  </head>
  <body>
  <div class="container mt-4">     
  <h1>Daftar Siswa</h1> 
 
 <table class="table table-bordered">           
    <thead>            
      <tr>               
      <th scope="col">No Pendaftaran</th>               
      <th scope="col">Nama</th>               
      <th scope="col">Tempat Lahir</th>               
      <th scope="col">Tanggal Lahir</th>   
      <th scope="col">Jenis Kelamin</th>    
      <th scope="col">Agama</th>   
      <th scope="col">Email</th>
      <th scope="col">Asal Kekolah</th>     
      <th scope="col">NISN</th>  
      <th scope="col">Rata-Rata Nilai UN</th>  
      <th scope="col">Status</th>           
      <!-- <th scope="col">Aksi</th> -->            
      </tr>           
   </thead>                     
      <tbody>            
        @foreach($user as $pr)                 
          <tr>                     
          <!-- <th scope="row">{{$loop->iteration}}</th>                      -->
          <td>{{$pr->id_siswa}}</td>                     
          <td>{{$pr->nama_siswa}}</td>    
          <td>{{$pr->tempat_lahir}}</td>  
          <td>{{$pr->tgl_lahir}}</td> 
          <td>{{$pr->jenis_kelamin}}</td>
          <td>{{$pr->agama}}</td>  
          <td>{{$pr->email}}</td> 
          <td>{{$pr->asal_sklh}}</td>    
          <td>{{$pr->nisn}}</td>  
          <td>{{$pr->rata_un}}</td>
          <td>{{$pr->status}}</td>                   
            </tr>                
         @endforeach             
      </tbody>                      
  </table> 

    <!-- <button type="button" class="btn btn-primary">Download CSV</button>         <button type="button" class="btn btn-success">Tambah Data</button> -->     
    </div> 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>