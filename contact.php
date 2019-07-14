<?php
require 'config.php';

$konek = mysqli_connect("localhost", "root", "", "todo");

// cek apakah button sudah ditekan atau belom
if (isset($_POST["submit"])) {
  // cek apakah data berhasil ditambahkan atau tidak
  if (saran($_POST) > 0) {
    echo "<script>
           alert('Data BERHASIL Di Kirim !!!');
          </script>";
  } else {
    echo "<script>
             alert('Data GAGAL Di Kirim');
          </script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="bootsrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="aboutus.css">
  <link rel=" stylesheet" href="font-awesome/css/font-awesome.min.css">

  <style>
    .footer {
      background-color: black;
      color: white;
      margin-top: -32px;
      padding-bottom: 18px;
      padding-top: 25px;
    }
  </style>

  <!-- My Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  <title>Contact Us</title>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-primary mb-4">
    <div class="container">
      <a class="navbar-brand text-white team" href="index.html">Eight List</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link active text-white team" href="index.html">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link text-white team" href="contact.html">Contact</a>
          <a class="nav-item nav-link text-white team" href="aboutus.html">About Us</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->


  <!-- Contact -->
  <section id="contact" class="atas">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h2 class="team">Contact Us</h2>
          <hr>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <h3> <b>Kritik & Saran</b> </h3>
          <form action="" method="post">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="nama">Name</label>
                <input type="text" class="form-control" name="nama" placeholder="Name">
              </div>
              <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Email">
              </div>
            </div>
            <div class="form-group">
              <label for="alamat">Address</label>
              <input type="text" class="form-control" name="alamat" placeholder="Address">
            </div>
            <div class="form-group">
              <label for="hp">Phone Number</label>
              <input type="tel" class="form-control" name="hp" placeholder="0822 - 2548 - xxxx">
            </div>
            <div class="form-group">
              <label for="saran">Message</label>
              <textarea name="saran" name="saran" class="form-control" cols="10" rows="5" placeholder="Message..."></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Send Message</button>
          </form>
        </div>
      </div>
    </div>
    <br>
  </section>

  <!-- Akhir Contact -->


  <!-- Maps -->
  <section id="maps">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="text-center">My Location</h1>
          <hr>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="embed-responsive embed-responsive-21by9">
            <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.561850474672!2d110.37783531435711!3d-7.8361086800205255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5700189f8667%3A0x2b9695eeb35c4e5d!2sAndhi+Fish+Farm!5e0!3m2!1sid!2sid!4v1561608014782!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
    <br>
  </section>
  <!-- Akhir Maps -->
  <br> <br>
  <!-- Footer -->
  <div class="footer text-center">
    <p class="ubuntu">&copy Copyright 2019 By: Eight List Group</p>
  </div>
  <!-- Footer -->

  <!-- Script Boostrap -->
  <script src="bootsrap/js/jquery-3.3.1.slim.min.js"></script>
  <script src="bootsrap/js/bootstrap.min.js"></script>
  <script src="bootsrap/js/popper.min.js"></script>
</body>

</html>