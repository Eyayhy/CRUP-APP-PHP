<?php
require_once ('connect.php');
$id = $_GET['id'];
$SelSql= "SELECT * FROM `etudiant` WHERE  id = $id";
$res = mysqli_query($con, $SelSql);
$r = mysqli_fetch_assoc($res);

if ((isset($_POST)) && (!empty($_POST['nom'])) && (!empty($_POST['prenom'])) &&  (!empty($_POST['email'])) && (!empty($_POST['gender'])) && (!empty($_POST['age'])))
{
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];


    $UpdateSql = "UPDATE `etudiant` SET first_name='$nom',	last_name='$prenom', email='$email', gender='$gender', age='$age'  WHERE id=$id ";
    $res= mysqli_query($con,$UpdateSql) ;
    if ($res)
    {
       header("location:view.php");
    }
    else
    {
        $erreur = "La mise à jour a échoué";
    }
}



?>







<!DOCTYPE html>
<html>
<head>
	<title>crud app php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>
<?php
     
     include 'navbar.php';
     ?>


<div class="container">
            <div class="row pt-4">
          


                    <?php if(isset($erreur)) {?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $erreur; ?>
                    </div> <?php } ?>
                <form action ="" method="POST" class="form-horizontal col-md-6 pt-4">
                    <h2> Crud App </h2>
                    <div class="form-group">
                        <label for="input1" class="col-sm-2 control-label">Nom</label>
                        <div class="col-sm-10">
                        <input type="text" name="nom" placeholder="Nom" class="form-control"
                        id="input1" value=<?php echo $r['first_name'] ?>>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input1" class="col-sm-2 control-label">Prenom</label>
                        <div class="col-sm-10">
                        <input type="text" name="prenom" placeholder="Prenom" class="form-control"
                        id="input1" value=<?php echo $r['last_name'] ?>>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input1" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                        <input type="text" name="email" placeholder="Email" class="form-control"
                        id="input1" value=<?php echo $r['email'] ?>>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input1" class="col-sm-2 control-label">Genre</label>
                        <div class="col-sm-10">
                        <label>
                            <input type="radio" name="gender" id="optionsRadios"
                            value="h" <?php if($r['gender'] == 'h'){ echo "checked";} ?>>
                            H
                        </label>
                        <label>
                            <input type="radio" name="gender" id="optionsRadios"
                            value="f" <?php if($r['gender'] == 'f'){ echo "checked";} ?> >
                            F
                        </label>
                      
                        </div>
                    </div>

                    <div class="form-group">
                    <label for="input1" class="col-sm-2 control-label">Age</label>
                    <div class="col-sm-10">
                        <select name="age" class="form-control">
                            <option>Ton age </option>
                            <option value="20" <?php if($r['age'] == '20'){ echo "selected";}?>>20 </option>
                            <option value="21"  <?php if($r['age'] == '21'){ echo "selected";}?>  >21 </option>
                            <option value="22"  <?php if($r['age'] == '22'){ echo "selected";}?> >22 </option>
                            <option value="23"  <?php if($r['age'] == '23'){ echo "selected";}?> >23 </option>
                            <option value="24" <?php if($r['age'] == '24'){ echo "selected";}?> >24 </option>
                            
</select>


                    </div>
                  </div>


<div class="pt-4">
    <input type="submit" value="submit" class="btn btn-primary m-3">
    <a href="view.php">
        <button class="btn btn-success m-3"  type="button">
        voir la liste </button> </a>
</div>


</form>

            </div>

        </div>






















</body>



















<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js">
<script src="https://unpkg.com/@popperjs/core@2"> </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>