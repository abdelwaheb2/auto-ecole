<?php include_once("../navbar.php"); ?>

    <h1 class="text-center text-secondry"> Liste des candidats </h1>
      <div class="position-relative w-100">
            <a href="ajouter.php" class="btn btn-info position-absolute top-0 end-0 mt-3 me-5">Ajouter</a>
      </div>
      <form class="input-group mt-5 w-50 m-auto" method="post">
        <input type="text" class="form-control" name="nom" placeholder="Rechercher par nom" aria-label="Recipient's username" aria-describedby="basic-addon2">
        <button class="input-group-text" type="submit" name="search"  id="basic-addon2">Rechercher</button>
      </form>
    <?php
    include_once("../../controleur/candidat.php");
    $cl=new candidat_cont();
    $can=$cl->liste();
      if(isset($_POST["search"])){
        $n=$_POST['nom'];
        $can=$cl->reche_nom($n);
        if($n!="")
          echo '<div class="w-75 m-auto fw-bold mt-2 fs-4 text-primary">Resultat de rechercher : "'.$n.'"</div>';
      }
    if($can->rowCount()>0){
    echo '<table class="table table-striped mt-3 w-75  m-auto text-center">
  <thead class="bg-info bg-gradient">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Cin</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Prix total</th>
      <th scope="col">Prix payee</th>
      <th scope="col">Suppremer</th>
      <th scope="col">Modefier</th>
      <th scope="col">voir plus</th>
    </tr>
  </thead>
  <tbody>';
        foreach ($can as $c):
          $prix=$cl->getprixtotal($c['id']);
            echo '<tr>
                <td scope="col">'.$c['id'].'</td>
                <td>'.$c['cin'].'</td>
                <td>'.$c['nom'].'</td>
                <td>'.$c['prenom'].'</td>
                <td>'.$prix.'DT</td>';
                if($prix>$c['prix_payee']){
                  echo '<td class="text-danger fw-bold">'.$c['prix_payee'].'DT</td>';
                }
                else{
                  echo '<td class="text-success fw-bold">'.$c['prix_payee'].'DT</td>';
                }
                echo '<td><a class="btn btn-outline-danger w-50" href="suppremer.php?id='.$c['id'].'"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
              </svg></a></td>
                <td><a class="btn btn-outline-warning w-50" href="modefier.php?id='.$c['id'].'"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
              </svg></a></td>
                <td><a class="btn btn-outline-primary w-50" href="view-candidat.php?id='.$c['id'].'"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
              </svg></a></td>
            </tr>';
        endforeach;
    }else{
        echo '<div class="alert alert-info mt-5 w-50 m-auto text-center" role="alert">Aucune candidat ajouter!</div>';
    }
    ?>
  </tbody>
</table>