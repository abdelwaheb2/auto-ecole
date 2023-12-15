<?php include_once("../navbar.php"); ?>
<head>
    <title>Dashbord</title>
    <style>
        a{
            text-decoration:none;
            color:#fff;
            font-size:15px;
            font-weight:700;
            transition: 0.5s;
        }
        a:hover{
            color:#004;
        }
        .card{
            transition: 0.5s;
        }
        .card:hover{
            box-shadow:10px 10px 0 #002;
        }
    </style>
</head>
<div class="container mt-5">
    <div class="card shadow bg-dark-subtle bg-gradient"> 
    <div class="card-body">
    <h1 class="text-center">Gestion Auto-ecole</h1><br>
    <div class="row">
    <div class="col-md-3 mb-3">
     <div class="card card-stats text-white bg-danger bg-gradient">
     <div class="card-body ">
     <div class="row">
     <div class="col-5">
     <div class="icon-big text-center">
     <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-card-checklist" viewBox="0 0 16 16">
  <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z"/>
  <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0M7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0"/>
</svg>
     </div>
     </div>
     <div class="col-7 d-flex align-items-center">
     <div class="numbers">
     <a class="card-category" href="../seance_de_code">Seance code</a>
     <h4 class="card-title">
     <?php
        include_once("../../controleur/code.php");
        $cl=new code();
        $can=$cl->liste();
        echo $can->rowCount();
    ?>
     </h4>
     </div>
     </div>
     </div>
     </div>
     </div>
    </div>
    <div class="col-md-3  mb-3">
     <div class="card card-stats text-white bg-info bg-gradient">
     <div class="card-body ">
     <div class="row">
     <div class="col-5">
     <div class="icon-big text-center">
     <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-journal-bookmark-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6 1h6v7a.5.5 0 0 1-.757.429L9 7.083 6.757 8.43A.5.5 0 0 1 6 8z"/>
  <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2"/>
  <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z"/>
</svg>
     </div>
     </div>
     <div class="col-7 d-flex align-items-center">
     <div class="numbers">
     <a class="card-category" href="../seance_conduit">Seance conduit</a>
     <h4 class="card-title">
     <?php
        include_once("../../controleur/conduit.php");
        $cl=new conduit();
        $can=$cl->liste();
        echo $can->rowCount();
    ?>
     </h4>
     </div>
     </div>
     </div>
     </div>
     </div>
    </div>
    <div class="col-md-3 mb-3">
     <div class="card card-stats text-white bg-success bg-gradient">
     <div class="card-body ">
     <div class="row">
     <div class="col-5">
     <div class="icon-big text-center">
     <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-vcard-fill" viewBox="0 0 16 16">
    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm9 1.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4a.5.5 0 0 0-.5.5M9 8a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4A.5.5 0 0 0 9 8m1 2.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 0-1h-3a.5.5 0 0 0-.5.5m-1 2C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 0 2 13h6.96c.026-.163.04-.33.04-.5M7 6a2 2 0 1 0-4 0 2 2 0 0 0 4 0"/>
    </svg>
     </div>
     </div>
     <div class="col-7 d-flex align-items-center">
     <div class="numbers">
     <a class="card-category" href="../ingenieure">Ingenieure</a>
     <h4 class="card-title">
     <?php
                     include_once("../../controleur/ingenieure.php");
                     $cl=new ingenieure_cont();
                     $can=$cl->liste();
                     echo $can->rowCount();
                ?>
     </h4>
     </div>
     </div>
     </div>
     </div>
     </div>
    </div>
    <div class="col-md-3 mb-3">
     <div class="card card-stats text-white bg-primary bg-gradient">
     <div class="card-body">
     <div class="row">
     <div class="col-5">
     <div class="icon-big text-center">
     <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
        </svg>
     
     </div>
     </div>
     <div class="col-7 d-flex align-items-center">
     <div class="numbers">
     <a class="card-category" href="../candidat">Candidat</a>
     <h4 class="card-title">
     <?php 
        include_once("../../controleur/candidat.php");
        $cl=new candidat_cont();
        $can=$cl->liste();
        echo $can->rowCount();
    ?>
     </h4>
     </div>
     </div>
     </div>
    </div>
</div>
</div>
<div class="col-md-3 mb-3">
<div class="card card-stats text-white bg-warning bg-gradient">
 <div class="card-body ">
 <div class="row">
 <div class="col-5">
 <div class="icon-big text-center">
 <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-car-front-fill" viewBox="0 0 16 16">
  <path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679c.033.161.049.325.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.807.807 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2m10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2M6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2zM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17 1.247 0 3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z"/>
</svg>
 </div>
 </div>
 <div class="col-7 d-flex align-items-center">
 <div class="numbers">
 <a class="card-category" href="../vehicules">Vehicule</a>
 <h4 class="card-title">
 <?php
  include_once("../../controleur/Vehicule.php");
  $cl=new Vehicule_cont();
  $can=$cl->liste();
    echo $can->rowCount();
 ?>
</h4>
 </div>
 </div>
 </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>