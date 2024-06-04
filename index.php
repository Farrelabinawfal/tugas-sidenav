<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About - SMK Negeri 9 MEDAN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
body {
  font-family: "Lato", sans-serif;
  background-image: url("SMK-Negeri-9-MEDAN-1.png");
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

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.contaner-inner img {
    width: 100%;
    height: auto;
}
.center-container ,h1{
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  margin-bottom: 30px;  
  background-color: white;
  padding: 10px;
  border-radius: 5px;
  color: black;
  padding-bottom:50px;
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
<div class="container center-container">
<div class="col-md-12 col-xs-6">
<h1>SMK Negeri 9 Medan</h1>
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Cuplikan layar 2024-05-16 210841.png" class="d-block w-75 mx-auto" alt="...">
    </div>
    <div class="carousel-item">
      <img src="Cuplikan layar 2024-05-16 211150.png" class="d-block w-75 mx-auto" alt="...">
    </div>
    <div class="carousel-item">
      <img src="Cuplikan layar 2024-05-16 211221.png" class="d-block w-75 mx-auto" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
  </button><br>
  <h5 style="text-align:left;"> SMK Negeri 9 Medan</h5><hr>
        <p style="text-align:left;">SMK Negeri 9 Medan adalah salah satu sekolah menengah kejuruan terkemuka di kota Medan. Sekolah ini menawarkan berbagai program kejuruan yang berkualitas dengan fasilitas yang lengkap dan tenaga pengajar yang berpengalaman. Kami berkomitmen untuk mencetak lulusan yang siap kerja dan berdaya saing tinggi.</p>
</div>
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
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>