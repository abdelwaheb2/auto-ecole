<?php include_once("../navbar.php"); ?>

<form action="ajouter_action.php" method="post" class="w-50 mt-5 m-auto">
    <input type="date" name="date" value="<?php echo $_SESSION['date'] ?>" class="form-control mb-1">
    <select name="h" class="form-select mb-2">
        <option value="0">Heure debut de la seance</option>
        <?php
            $heures = array(8, 9, 10, 11, 13, 14, 15, 16, 17);
            foreach ($heures as $h) {
                $selected = ($h == $_SESSION['heure']) ? 'selected' : '';
                echo '<option value="'.$h.'" '.$selected.'>'.$h.'</option>';
            }
        ?>
    </select>
    <select name="t" class="form-select mb-2">
        <option value="0">Type du permis</option>
        <?php
            $type = array('voiture','camian','moto');
            foreach ($type as $t) {
                $selected = ($t == $_SESSION['type']) ? 'selected' : '';
                echo '<option value="'.$t.'" '.$selected.'>'.$t.'</option>';
            }
        ?>
    </select>
    <?php 
   if ((isset($_SESSION['despo_i'])) && (!empty($_SESSION['despo_i']))) {
        echo '<select name="i" class="form-select mb-3">
        <option value="0">Choix l ingenieure </option>';
            foreach ($_SESSION['despo_i'] as $l):
                echo '<option value="'.$l['id'].'">'.$l['cin'].'   '.$l['prenom'].' '.$l['nom'].' '.$l['specialite'].'</option>';
            endforeach;
        echo'</select>';
    }
    //-------------------------------------------------------
    if ((isset($_SESSION['despo_v'])) && (!empty($_SESSION['despo_v']))) {
        echo '<select name="v" class="form-select mb-3">
            <option value="0">Choix la vehicule </option>';
                foreach ($_SESSION['despo_v'] as $l):
                    echo '<option value="'.$l['id'].'">'.$l['id'].'   '.$l['type'].'</option>';
                endforeach;
            echo'</select>'; 
    }
    //------------------------------------------------------
    if ((isset($_SESSION['despo_c'])) && (!empty($_SESSION['despo_c']))){
        echo '<select name="c" class="form-select mb-5">
        <option value="0">Choix le candidat </option>';
            foreach ($_SESSION['despo_c'] as $l):
                echo '<option value="'.$l['id'].'">'.$l['cin'].'   '.$l['prenom'].' '.$l['nom'].'</option>';
            endforeach;
        echo'</select>';
    }
  
            
    ?>
    <input type="submit" value="Ajouter" class="btn btn-primary w-100">
</form>
