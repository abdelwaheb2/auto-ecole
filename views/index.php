<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="http://localhost/abdelwaheb/auto_ecole/static/bootstrap.min.css">
    <style>

body {
	background: #001;	
}

.form {
  max-width: 380px;
  padding: 15px 35px 45px;
  margin: 0 auto;
  background-color: #eef1;
  box-shadow:0px 0px  100px #004;
  border-radius:8px;
}
	


    </style>
</head>
<body>
<div  style="margin-top: 100px;">
    <form class="form" method="post" action="login.php">       
      <h2 class=" text-center fs-1 fw-bold text-primary mb-5 ">Login</h2>
      <input type="text" class="form-control mb-3" name="n" placeholder="User name" />
      <input type="password" class="form-control mb-2" name="p" placeholder="Password"/> 
      <?php
        if($_GET['e']){
          echo '<div class="text-danger text-center"> username ou password est incorrecter! </div>';
        }
      ?>
      <button class="btn btn-primary w-100 mt-4 fw-bolder fs-4" name="login" type="submit">Login</button>   
    </form>
  </div>
</body>
</html>