<?php
require_once ('connect.php');
$ReadSql = "SELECT * FROM `etudiant`";
$query = mysqli_query($con,$ReadSql);


?>





<!DOCTYPE html>

    <head>
        <title> Crud APP PHP </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <link rel="stylesheet" href="style.css">
</head>
<body>

<?php 


 include('navbar.php');


?>
	<div class="container">
		<div class="row pt-4">
			<h2>crup app PHP</h2>

			<a href="index.php">
				<button class="btn btn-primary" type="">
					Ajouter un Etudiant
				</button>
			</a>
		</div>

		<table class="table table-striped mt-3">
			<thead>
				<tr>
					<th>id</th>
					<th>Nom complet</th>
					<th>email</th>
					<th>Age</th>
					<th>genre</th>
					<th>Actions</th>
				</tr>
			</thead>

			<tbody>
				<?php while ($res = mysqli_fetch_assoc($query)) {
				?>

				<tr>
					<th scope="row"><?php echo $res['id']; ?></th>
					<td><?php echo $res['first_name'] ." ". $res['last_name']; ?></td>
					<td><?php echo $res['email']; ?></td>
					<td><?php echo $res['age']; ?></td>
					<td><?php echo $res['gender']; ?></td>

					<td>
						<a href="update.php?id=<?php echo $res['id']; ?>" class="m-2">
							<i class="fa fa-edit fa-2x"></i>
						</a>

                       
                   
             
                         <button type="button" class="fa fa-trash fa-2x red-icon" data-bs-toggle="modal" data-bs-target="#staticBackdrop">

</button>


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
       
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">
						 				<p>etes vous sur de vouloir supprimer cette etudiant ?</p>
						 			</div>
      
      <div class="modal-footer">
						 				<button type="button" class="btn btn-primary"
						 				data-bs-dismiss="modal">Annuler</button>
						 				<a href="delete.php?id=<?php echo $res['id']; ?>">
						 					<button class="btn btn-danger" type="button">Confirmer</button>
						 				</a>
						 			</div>
  </div>
</div>



					</td>
				</tr>
			<?php } ?>
			</tbody>
		</table>


	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js">
<script src="https://unpkg.com/@popperjs/core@2"> </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>






</body>
</html>