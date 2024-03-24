<?php
include 'conx.php';
include_once 'includes/navbar.php';
$data = $pdo->query('SELECT * FROM matière');
$matière = $data->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter vos information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

<div class="container my-4">
        
    <table class="table">
  <thead>
    <tr>
      <th scope="col">matière</th>
      <th scope="col">nom du prof</th>
      <th scope="col">prenom du prof</th>
      <!-- <th scope="col">operation</th> -->
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($matière as $mat){
        ?>
        <tr>
            <td><?=$mat->nom_du_matière?></td>
            <td><?=$mat->nom_prof?></td>
            <td><?=$mat->prenom_prof?></td>
            <td>
            <!-- <form method="post"> -->
              
                    <!-- <button class="btn btn-primary btn-sm" type="submit" value="modifier"></button>
                    
                    <button class="btn btn-danger btn-sm" type="submit" value="supprimer"><a href="supp.php"></a></button> -->
                <!-- </form> -->
            </td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>
    </div>
    
</body>
</html>