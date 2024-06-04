<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "fbtgs";

$koneksi = new mysqli($server, $user, $pass, $db);

if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
}

$sql = "SELECT nama, pesan FROM pesan";
$result = $koneksi->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ulasan Murid - SMK Negeri 9 Medan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <style>
     body {
  font-family: "Lato", sans-serif;
  background-color: white;
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
  padding: 16px;
}
    .review {
      padding: 50px 0;
      background-color: #f8f9fa;
    }
    .review .heading {
      text-align: center;
      margin-bottom: 40px;
      text-transform: uppercase;
    }
    .review .heading span {
      color: #007bff;
    }
    .card {
      max-width: 800px;
      margin: 0 auto;
    }
    .review .card {
      background: #fff;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
      text-align: center;
      margin-bottom: 20px;
    }
    .review .card h3 {
      margin: 15px 0 10px;
      font-size: 1.2em;
      color: #333;
    }
    .review .stars i {
      color: #ffdd00;
      margin: 0 2px;
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
      <section class="review" id="review">
        <h1 class="heading">Ulasan <span>Murid</span></h1>
        <div class="card">
          <?php
          if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                  echo '<div class="card">';
                  echo '<h3>' . ($row["nama"]) . '</h3>';
                  echo '<p>' . ($row["pesan"]) . '</p>';
                  echo '<div class="stars">';
                  echo '<i class="bi bi-star-fill"></i>';
                  echo '<i class="bi bi-star-fill"></i>';
                  echo '<i class="bi bi-star-fill"></i>';
                  echo '<i class="bi bi-star-fill"></i>';
                  echo '<i class="bi bi-star-half"></i>';
                  echo '</div>';
                  echo '</div>';
              }
          } else {
              echo '<p>No reviews available</p>';
          }
          $koneksi->close();
          ?>
        </div>
      </section>
    </div>
  </div>

  <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
      document.getElementById("main").style.marginLeft = "250px";
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
      document.getElementById("main").style.marginLeft= "0";
    }
  </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>