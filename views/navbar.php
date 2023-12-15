<?php
   include_once("../../controleur/admin.php");
   session_start();
    $n=$_SESSION['username'];
    $p=$_SESSION['password'];
   $a=new admin($n,$p);
   $res=$a->getadmin();
   if(!$res){
     header("location: ../.");
   }
   if(isset($_POST['deconnecte'])){
    $_SESSION = array();
    session_destroy();
    header("location: ../.");
   }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Auto-ecole</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/abdelwaheb/auto_ecole/static/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/abdelwaheb/auto_ecole/static/style.css">
  </head>
<body class="bg-primary-subtle mb-5">
  <nav class="navbar navbar-expand-lg bg-primary bg-gradient">
    <div class="container-fluid">
      <a class="navbar-brand fw-bolder fs-4" href="http://localhost/abdelwaheb/auto_ecole/views/dashbord">Admin auto-ecole</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link text-light" href="http://localhost/abdelwaheb/auto_ecole/views/candidat">Candidat</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="http://localhost/abdelwaheb/auto_ecole/views/seance_de_code">Seance code</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="http://localhost/abdelwaheb/auto_ecole/views/seance_conduit">Seance conduit</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="http://localhost/abdelwaheb/auto_ecole/views/vehicules">Vehicule</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="http://localhost/abdelwaheb/auto_ecole/views/ingenieure">Ingenieure</a>
          </li>
        </ul>
        <form class="d-flex" method="post">
          <button name="deconnecte" class="btn btn-outline-danger fw-bold text-light">Deconnecte</button>
        </form>
      </div>
    </div>
  </nav>
    <script src="http://localhost/abdelwaheb/auto_ecole/static/bootstrap.bundle.min.js"></script>
</body>
</html>