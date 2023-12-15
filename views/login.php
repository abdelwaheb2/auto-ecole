<?php
    $n=$_POST['n'];
    $p=$_POST['p'];
    include_once("../controleur/admin.php");
    $a=new admin($n,$p);
    $res=$a->getadmin();
    if($res){
        session_start();
        $_SESSION['username']=$n;
        $_SESSION['password']=$p;
        header("location: dashbord");
    }
    else{
        header("Location: .?e=erre");
    }

?>