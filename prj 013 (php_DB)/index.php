<?php
include 'conx.php';
include_once 'includes/navbar.php';
// include_once 'mtière.php';
$data = $pdo->query('SELECT * FROM notes');
$notes = $data->fetchAll(PDO::FETCH_OBJ);
// var_dump($notes);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>DataBase</title>
</head>
<body>
    <div class="container my-4">
        
    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nom</th>
      <th scope="col">prenom</th>
      <th scope="col">notes</th>
      <!-- <th scope="col">operation</th> -->
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($notes as $note){
        ?>
        <tr>
            <td><?=$note->id?></td>
            <td><?=$note->nom?></td>
            <td><?=$note->prenom?></td>
            <td><?=$note->note?></td>
            <td>
                <!-- <form method="post">
                    <button class="btn btn-primary btn-sm" type="submit" value="modifier">Modifier</button>
                    <button class="btn btn-danger btn-sm" type="submit" value="supprimer"> <a href="supp.php?=deleteid='.$id.'" class="text-light"> Supprimer</a></button>
                </form> -->
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