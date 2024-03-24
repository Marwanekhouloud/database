<?php
include "includes/navbar.php";
include "conx.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter coter prof</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<div class="container my-4">
<form method="POST">
    <?php
    if(isset($_POST['ajouter'])){
        $nom_du_matière = $_POST['nom_du_matière'];
        $nom_prof = $_POST['nom_prof'];
        $prenom_prof = $_POST['prenom_prof'];
        if(!empty($nom_du_matière)&& !empty($nom_prof)&& !empty($prenom_prof)){
            $data = $pdo->prepare('INSERT INTO matière VALUES(?,?,?)');
            $success = $data->execute([$nom_du_matière, $nom_prof, $prenom_prof]);
            header('Location: mtière.php');
            ?>
            <div class="alert alert-success" role="alert">
            Les informations ont etit prise avec succes !
             </div>
            <?php
        }else{
            ?>
            <div class="alert alert-danger" role="alert">
            Tous les champs sont abligatoires !
            </div>
             <?php
        }
    }
    ?>

<div class="mb-3">
    <label class="form-label">nom du matière</label>
    <input type="text" class="form-control" name="nom_du_matière">
  </div>

  <div class="mb-3">
    <label class="form-label">nom du prof</label>
    <input type="text" class="form-control" name="nom_prof">
  </div>

  <div class="mb-3">
    <label class="form-label">prenom</label>
    <input type="text" class="form-control" name="prenom_prof">
  </div>

  <button type="submit" class="btn btn-primary" name="ajouter">Ajouter</button>
</form>
</div>
    
</body>
</html>