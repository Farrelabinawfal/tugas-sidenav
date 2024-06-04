<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "fbtgs";

$koneksi = new mysqli($server, $user, $pass, $db);
if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
}
$nama = $nama_err = $email = $email_err = $pesan = $pesan_err = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["action"]) && $_POST["action"] == "add") {
        if (empty(trim($_POST["nama"]))) {
            $nama_err = "Nama is required";
        } else {
            $nama = trim($_POST["nama"]);
        }

        if (empty(trim($_POST["email"]))) {
            $email_err = "Email is required";
        } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $email_err = "Invalid email format";
        } else {
            $email = trim($_POST["email"]);
        }

        if (empty(trim($_POST["pesan"]))) {
            $pesan_err = "Pesan is required";
        } else {
            $pesan = trim($_POST["pesan"]);
        }

        if (empty($nama_err) && empty($email_err) && empty($pesan_err)) {
            $stmt = $koneksi->prepare("INSERT INTO pesan (nama, email, pesan) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $nama, $email, $pesan);

            if ($stmt->execute()) {
                $message = "Note added successfully";
                $nama = $email = $pesan = "";
            } else {
                $message = "Error: " . $stmt->error;
            }

            $stmt->close();
        }
    }
}
$koneksi->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kontak - SMK Negeri 9 Medan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
    .contact {
      padding: 50px 0;
      background-color: #f8f9fa;
    }
    .contact .heading {
      text-align: center;
      margin-bottom: 40px;
      font-size: 2.5em;
      text-transform: uppercase;
    }
    .contact .heading span {
      color: #007bff;
    }
    .contact-form {
      max-width: 600px;
      margin: 0 auto;
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
      <section class="contact" id="contact">
        <h1 class="heading">Hubungi <span>Kami</span></h1>
        <div class="contact-form">
          <?php if (!empty($message)) { echo '<div class="alert alert-info">' . $message . '</div>'; } ?>
          <form action="<?php echo ($_SERVER["PHP_SELF"]);?>" method="POST">
            <input type="hidden" name="action" value="add">
            <div class="form-group mb-3">
              <label>Nama</label>
              <input type="text" name="nama" class="form-control" value="<?php echo $nama; ?>">
              <span class="text-danger"><?php echo $nama_err; ?></span>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>" required>
              <span class="text-danger"><?php echo $email_err; ?></span>
            </div>
            <div class="mb-3">
              <label for="pesan" class="form-label">Pesan</label>
              <textarea class="form-control" id="pesan" name="pesan" rows="4" required><?php echo $pesan; ?></textarea>
              <span class="text-danger"><?php echo $pesan_err; ?></span>
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
          </form>
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>