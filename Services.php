<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Services - SMK Negeri 9 Medan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: "Lato", sans-serif;
      background-color: #f9f9f9;
      margin: 0;
      padding: 0;
    }

    .sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

    #main {
      transition: margin-left .5s;
      padding: 20px;
    }

    .container {
      background-color: white;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin-top: 20px;
    }

    h1, h2 {
      color: #333;
    }

    hr {
      border: 1px solid #ddd;
    }

    ul {
      padding-left: 20px;
    }
  </style>
</head>
<body>
  <div id="main">
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="index.php">About</a>
      <a href="Services.php">Services</a>
      <a href="clients.php">Clients</a>
      <a href="contact.php">Contact</a>
    </div>
    <span style="font-size:30px;cursor:pointer; background-color:black; color:white; padding:5px;" onclick="openNav()">&#9776;</span>

    <div class="container">
      <h1>SMK Negeri 9 Medan</h1>
      <hr>
      <h2>Deskripsi singkat Jurusan</h2>
      <p>
        <ul>
        <li>Rekayasa Perangkat Lunak (RPL): Jurusan ini fokus pada pengembangan perangkat lunak komputer, termasuk pemrograman, pengujian perangkat lunak, dan pengelolaan proyek perangkat lunak. </li>
        <li>Teknik Komputer dan Jaringan (TKJ): Jurusan ini menekankan pada pengelolaan dan pemeliharaan jaringan komputer, instalasi perangkat keras, konfigurasi jaringan, dan administrasi sistem.</li>
        <li>Desain Komunikasi Visual (DKV): Jurusan ini mengajarkan keterampilan desain grafis, termasuk desain logo, poster, brosur, dan media komunikasi visual lainnya menggunakan aplikasi desain.</li>
        <li>Animasi: Jurusan ini mengajarkan keterampilan animasi 2D dan 3D, termasuk teknik animasi karakter, storyboard, dan produksi animasi digital.</li>
        <li>Pekerjaan Sosial (Peksos): Jurusan ini membekali siswa dengan keterampilan dan pengetahuan dalam bidang pekerjaan sosial.</li>
        </ul>
      </p>
      <hr>

      <h2>Fasilitas Sekolah</h2>
      <ul>
        <li>Laboratorium Komputer</li>
        <li>Laboratorium Jepang</li>
        <li>Perpustakaan</li>
        <li>Lapangan Basket</li>
        <li>Lapangan Futsal</li>
        <li>UKS</li>
        <li>Kelas</li>
        <li>Toilet</li>
      </ul>
      <hr>

      <h2>Kegiatan Ekstrakurikuler</h2>
      <ul>
        <li>E-Sport</li>
        <li>Paskibra</li>
        <li>Pramuka</li>
      </ul>
      <hr>

      <h2>Layanan Kesehatan</h2>
      <p>
        SMK Negeri 9 Medan memiliki UKS yang siap membantu kesehatan siswa.
      </p>
      <hr>

      <h2>Layanan Administrasi</h2>
      <p>
        Informasi tentang prosedur pendaftaran, pembayaran biaya sekolah, dan layanan administrasi lainnya akan datang.
      </p>
    </div>
  </div>

  <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
      document.getElementById("main").style.marginLeft = "250px";
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
      document.getElementById("main").style.marginLeft = "0";
    }
  </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>