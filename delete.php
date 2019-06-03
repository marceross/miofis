<?php include('header.php');?>

<main class="dash-content">
	<div class="container-fluid">
	<?php

		if($_GET['active']){

				$id = $_GET['id'];

				$query = mysqli_query($conn,"DELETE FROM `".$_GET['active']."` WHERE id='$id'");

	
				if(!empty($query)){
					echo"<span style='color:green'>Deleted successfully....</span>";
					header("Refresh:2; url=".$_GET['active'].".php");
				}else{
					echo"<span style='color:red'>Error....While Deleting</span><br><br>";	
					header("Refresh:2; url=".$_GET['active'].".php");
				}
		
			}
										
	  ?>
	</div>
</div>




 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/spur.js"></script>
</body>

</html>