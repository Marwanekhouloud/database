<?php
include 'conx.php';
include 'includes/navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

    <div class="container my-4">
<form method="POST">
    <?php
    if(isset($_POST['ajouter'])){
        // $id = $_POST['id'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $note = $_POST['note'];

        if(!empty($nom)&& !empty($prenom)&& !empty($note)){
            $data = $pdo->prepare('INSERT INTO notes VALUES(null,?,?,?)');
            $success = $data->execute([$nom, $prenom, $note]);
            // var_dump($success)
            header('Location: index.php');
        //     ?>
         <div class="alert alert-success" role="alert">
        Les informations ont etit prise avec succes !
            </div>
         <?php
        //     // echo "id : $id, nom : $nom, prenom : $prenom, note : $note";
        // }else {
             ?>
           <div class="alert alert-danger" role="alert">
             Tous les champs sont abligatoires !
             </div>
            <?php
        }

    }
    ?>
  <!-- <div class="mb-3">
    <label class="form-label">id</label>
    <input type="number" class="form-control" name="id">
  </div> -->

  <div class="mb-3">
    <label class="form-label">nom</label>
    <input type="text" class="form-control" name="nom">
  </div>

  <div class="mb-3">
    <label class="form-label">prenom</label>
    <input type="text" class="form-control" name="prenom">
  </div>

  <div class="mb-3">
    <label class="form-label">note</label>
    <input type="number" class="form-control" name="note">
  </div>
  <button type="submit" class="btn btn-primary" name="ajouter">Submit</button>
</form>
</div>
    
</body>
</html>
