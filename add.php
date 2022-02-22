<?php
    require_once 'connexion.php';

    if(isset($_POST['save'])){
        $titre = $_POST['titre'];
        $auteur = $_POST['auteur'];

        $sql = "INSERT INTO `exercice` ( `titre`, `auteur`, `date`)
         VALUES ( $titre, $auteur, current_timestamp())";
       var_dump($sql);
    //  header('location:index.php');
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Create Students</title>
</head>
<body>
<form  method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">titre</label>
    <input  name="titre" type="text" class="form-control" required>
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">auteur</label>
    <input  name="auteur" type="text" class="form-control"   required>
  </div>
  
  <button  name="save" type="submit" class="btn btn-primary" >Submit</button>
      <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
</form>
</body>
</html>