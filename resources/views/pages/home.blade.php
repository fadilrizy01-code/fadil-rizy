@extends("master")

@section('content')

       <div class="container bg-light">
    <div class="card">
        <div class="card-body">
             <h1>Selamat datang dihalaman perkenalan</h1>
             <h3>Ini adalah halaman perkenalan saya</h3>
        </div>
    </div>

    <div class="card mt-3">
        <div class="card-body">
             <h1>Saya Sedang Mempelajari HTML</h1>
        </div>
        
        <div class="card-body p-3">
             <table class="table table-light table-bordered border-black" >
                <tr>
                      <th>NAMA </th>
                      <th>USIA</th>
                </tr>
                <tr> 
                       <td>M FADIL RIZY</td>
                       <td>21</td>
                </tr>
            </table>
        </div>

     <button class="btn btn-primary m-3"><a href="halo.html" class="text-white text-decoration-none">Klik Untuk Pindah Halaman </a></button>


 <div class="card m-5 p-3">
      <h1>Form Input</h1>   
      <form action="#" method="get">
        <div class="form-floating mb-1">
          <input type="text" class="form-control" name="name">
          <label for="name" class="form-label">Nama:</label>
        </div>  
          <br><br>
        <div class="form-floating mb-1">  
          <input type="password" class="form-control" id="password" name="password">
          <label for="password" class="form-label">Password:</label>
        </div>  
          <br><br>
        <div class="form-floating mb-1">
          <input type="number" class="form-control" id="age" name="age">
          <label for="age" class="form-label">Usia:</label>
        </div>
          <br><br>
        <div class="form-floating mb-1">
          <textarea id="alamat" class="form-control" name="alamat"></textarea>
          <label for="alamat" class="form-label">Alamat:</label>
        </div>  
          <br><br> 
          <select class="form-select" aria-label="Default select example">
          <option selected>Jenis kelamin</option>
          <option value="1">Laki-laki</option>
          <option value="2">Perempuan</option>
          </select> 
          <br><br>
          <label for="hobi" class="form-check-label">Hobi:</label>
          <input type="checkbox" class="form-check-input" name="hobi[]" value="membaca">Membaca
          <input type="checkbox" class="form-check-input" name="hobi[]" value="bermain">Bermain
          <input type="checkbox" class="form-check-input" name="hobi[]" value="berenang">Berenang
          <br><br>
          <label for="jajan" >Pengeluaran harian:</label>
          <select class="form-select" name="jajan" id="jajan">
                <option value="1-50k">1-50k</option>
                <option value="50-100">50-100k</option>
                <option value="150-200k">150-200k</option>
            </select>
            <br>
            <input class="btn btn-primary" type="submit" value="Kirim">
            
    </form> 
    <body>
     <table>
   
  
    <?php

    if (isset ($_GET['name'])) {
       $name = $_GET['name'];
        echo "<tr><td>Nama anda:<td> $name</td></tr>"; 
    }
    if (isset($_GET['password'])) {
       $password = $_GET['password'];
       echo "<tr><td>Password Anda:<td> $password</td></tr>";
    }
    if (isset ($_GET['age'])){
      $age = $_GET['age'];
       echo"<tr><td>Usia Anda:<td> $age</td></tr>";
    }
    if (isset($_GET['alamat'])){
       $alamat = $_GET['alamat'];
       echo "<tr><td>Alamat Anda:<td> $alamat</td></tr>";
       echo "<tr><td>Paket anda akan dikirim:<td> $alamat</td></tr>";
    }
    if (isset ($_GET['jenis_kelamin'])){
      $jenis = $_GET['jenis_kelamin'];
      echo "<tr><td>Jenis kelamin:<td> $jenis</td></tr>";
    }
    if (isset($_GET['hobi'])){
      $hobi =$_GET['hobi'];
      echo "<tr><td> Hobi:<td> ". implode(",",$hobi). "</td></tr>";
    }
    if (isset($_GET['jajan'])){
      $jajan =$_GET['jajan'];
      echo"<tr><td>Pengeluaran jajan:<td> $jajan jajan</td></tr>";
    }
    ?>
    </table>   

@endsection