<?php include_once("../navbar.php"); ?>
<div class="container-fluid p-5 pb-2 bg-primary bg-gradient text-white text-center">
  <?php
    include_once("../../controleur/candidat.php");
    include_once("../../controleur/code.php");
    include_once("../../controleur/conduit.php");
    $id=$_GET['id'];
    $cl=new candidat_cont();
    $res=$cl->getcandidat($id);
    $prix=$cl->getprixtotal($id);
    echo '<h1>'.$res['prenom'].' '.$res['nom'].'</h1>';
    echo '<h3>cin : '.$res['cin'].'</h3>';
    echo '<p class="mt-3 fs-4 fw-bold"><span class="me-5">Prix total : '.$prix.'</span><span>Prix payee : '.$res['prix_payee'].'</span></p>';
  ?>
  <button class="btn btn-outline-warning fw-bold w-25" data-bs-toggle="modal" data-bs-target="#payee"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
  <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
</svg>  payee</button>
  <div class="modal fade text-primary" id="payee" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Payee</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post" action="payee.php?id=<?php echo $id;?>">
      <div class="modal-body">
        <input type="number" class="form-control" name="prix" placeholder="Enter le prix a payee" />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">payee</button>
      </div>
    </div>
    </from>
  </div>
</div>
</div>
  
<div class="container mt-5">
  <div class="row d-flex justify-content-between">
    <div class="col-sm-5 ">
      <?php
      $code=new code();
    $can=$code->getcodecandidat($id);
    echo '<h3 class="text-center">Seances de code('.$can->rowCount().')</h3>';
    if($can->rowCount()>0){
    echo '<table class="table table-striped mt-3 w-100 text-center">
  <thead class="bg-info bg-gradient">
    <tr>
      <th scope="col" class="ps-5">Id</th>
      <th scope="col">date</th>
      <th scope="col">heure</th>
      <th scope="col">ingenieure</th>
    </tr>
  </thead>
  <tbody>';
  foreach ($can as $c):
    echo '<tr>
        <td scope="col" class="ps-5">'.$c['id'].'</td>
        <td>'.$c['date'].'</td>
        <td>'.$c['heure'].'</td>
        <td>'.$c['ingenieure'].'</td>
    </tr>';
  endforeach;
  echo '</tbody></table>';
  }else{
   echo '<div class="alert alert-info w-100 mt-3 text-center" role="alert">Aucune seance du code!</div>';
  }
  ?>
    </div>
    <div class="col-sm-5">
      <?php
      $conduit=new conduit();
      $can=$conduit->getcandidats($id);
      echo '<h3 class="text-center">Seances de conduit('.$can->rowCount().')</h3>';
      if($can->rowCount()>0){
      echo '<table class="table table-striped mt-3 w-100 text-center">
    <thead class="bg-info bg-gradient">
      <tr>
        <th scope="col" class="ps-5">Id</th>
        <th scope="col">date</th>
        <th scope="col">heure</th>
        <th scope="col">ingenieure</th>
        <th scope="col">vehicule</th>
      </tr>
    </thead>
    <tbody>';
          foreach ($can as $c):
              echo '<tr>
                  <td scope="col" class="ps-5">'.$c['id'].'</td>
                  <td>'.$c['date'].'</td>
                  <td>'.$c['heure'].'</td>
                  <td>'.$c['ingenieure'].'</td>
                  <td>'.$c['vehicule'].'</td>
              </tr>';
          endforeach;
          echo '</tbody></table>';
      }else{
          echo '<div class="alert alert-info w-100 mt-3 text-center" role="alert">Aucune seance du conduit!</div>';
      }
      
      ?>
   </div>
  </div>
</div>
