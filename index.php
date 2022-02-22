<?php
        require_once 'connexion.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>exercice Crud</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body class="m-3">
        
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
  <a href="add.php" type="button" class="btn btn-primary">ADD</a>

    <tr>
    <?php $results = mysqli_query($conn, "SELECT * FROM `exercice`"); 
        while($table = mysqli_fetch_array($results)) {?>
      <th scope="row"><?php echo $table['id'] ?></th>
      <td><?php echo $table['titre'] ?></td>
      <td><?php echo $table['auteur'] ?></td>
      <td>@<?php echo $table['date'] ?></td>
      <td>
        <a href="edit.php?edit=<?php echo $table['id']; ?>" class="edit_btn" ><i class="bi bi-pen-fill text-info fs-3 me-3"></i></a>
        <a href="delete.php?delete=<?php echo $table['id']; ?>" class="del_btn"><i class="bi bi-archive-fill text-info fs-3 me-3"></i></a>
      </td>
      
    </tr>
    <?php } ?>
    <!-- <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td><button type="button" class="btn btn-primary">edit</button>
<button type="button" class="btn btn-secondary">delete</button></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
      <td><button type="button" class="btn btn-primary">edit</button>
<button type="button" class="btn btn-secondary">delete</button></td> -->
    <!-- </tr> -->
  </tbody>
</table>
</body>
</html>