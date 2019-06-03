<?php include('header.php');?>

<main class="dash-content">
	<div class="container-fluid">
		<?php

		if(isset($_POST['update_apply'])){
			error_reporting(-1);
			$id = $_POST['id'];
			$name = $_POST['name'];
			$mail = $_POST['mail'];
			$linkein = $_POST['linkein'];
			$phone = $_POST['phone'];
			$comment = $_POST['comment'];
	
			$update = mysqli_query($conn,"UPDATE `apply`  SET name = '$name',mail = '$mail',linkein = '$linkein',phone = '$phone',comment = '$comment' WHERE id='$id'");
					
			if(!empty($update)){
				echo"<span style='color:green'>Updated successfully....</span>";
				header("Refresh:2; url=apply.php");
			}else{
				
				echo"<span style='color:red'>Error....</span><br><br>";	
			}
		

		}
	
		if($_GET['active'] == 'apply'){
				$id = $_GET['id'];
				$query = mysqli_query($conn,"SELECT * FROM `apply` WHERE id='$id'");
			
				if(mysqli_num_rows($query)>0){
					
					while($row = mysqli_fetch_array($query)){
				
		?>

		<div class="row">
			<div class="col-xl-12">
				<div class="card spur-card">
					<div class="card-header">
						<div class="spur-card-icon">
							<i class="fas fa-chart-bar"></i>
						</div>
						<div class="spur-card-title"> <?php echo ucfirst($_GET['active']);?> </div>
					</div>
					<div class="card-body ">
						<form action="" method="post">
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="inputPassword4">Name</label>
									<input type="name" class="form-control" id="inputPassword4" placeholder="Name" name="name" value="<?php echo $row['name'];?>">
									<input type="hidden" name="id" value="<?php echo $row['id'];?>">
								</div>
								<div class="form-group col-md-6">
									<label for="inputEmail4">Email</label>
									<input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="mail" value="<?php echo $row['mail'];?>">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="inputPassword4">linkein</label>
									<input type="name" class="form-control" id="inputPassword4" placeholder="linkein" name="linkein" value="<?php echo $row['linkein'];?>">
								</div>
								<div class="form-group col-md-6">
									<label for="inputEmail4">Phone</label>
									<input type="text" class="form-control" id="inputEmail4" placeholder="Phone" name="phone" value="<?php echo $row['phone'];?>">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-12">
									<label for="inputEmail4">Comment</label>
									<input type="text" class="form-control" id="inputEmail4" placeholder="Comment" name="comment" value="<?php echo $row['comment'];?>">
								</div>
							</div>

							
							
							<button type="submit" name="update_apply" class="btn btn-primary">Update</button>
						</form>
					</div>
				</div>
			</div>
		</div>

		<?php

			}
				 }		
				
			 }
									
		?>
				


			<?php



			if(isset($_POST['update_hire'])){
				error_reporting(-1);
				$id = $_POST['id'];
				$name = $_POST['name'];
				$mail = $_POST['mail'];
				$comment = $_POST['comment'];
		
				$update = mysqli_query($conn,"UPDATE `hire`  SET name = '$name',mail = '$mail',comment = '$comment' WHERE id='$id'");
						
				if(!empty($update)){
					echo"<span style='color:green'>Updated successfully....</span>";
					header("Refresh:2; url=hire.php");
				}else{
					
					echo"<span style='color:red'>Error....</span><br><br>";	
				}
			
	     	}
			
			if($_GET['active'] == 'hire'){

					$query = mysqli_query($conn,"SELECT * FROM `hire`");
				
					if(mysqli_num_rows($query)>0){
						
						while($row = mysqli_fetch_array($query)){
					
			?>
			<div class="row">
			<div class="col-xl-12">
				<div class="card spur-card">
					<div class="card-header">
						<div class="spur-card-icon">
							<i class="fas fa-chart-bar"></i>
						</div>
						<div class="spur-card-title"> <?php echo ucfirst($_GET['active']);?> </div>
					</div>
					<div class="card-body ">
						<form action="" method="post">
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="inputPassword4">Name</label>
									<input type="name" class="form-control" id="inputPassword4" placeholder="Name" name="name" value="<?php echo $row['name'];?>">
									<input type="hidden" name="id" value="<?php echo $row['id'];?>">
								</div>
								<div class="form-group col-md-6">
									<label for="inputEmail4">Email</label>
									<input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="mail" value="<?php echo $row['mail'];?>">
								</div>
							</div>
							
							<div class="form-row">
								<div class="form-group col-md-12">
									<label for="inputEmail4">Comment</label>
									<input type="text" class="form-control" id="inputEmail4" placeholder="Comment" name="comment" value="<?php echo $row['comment'];?>">
								</div>
							</div>

							
							
							<button type="submit" name="update_hire" class="btn btn-primary">Update</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		
			<?php

				}
					 }		
					
				 }
										
			?>


			<?php
			
			if(isset($_POST['update_connect'])){
			
				$id = $_POST['id'];
				$name = $_POST['name'];
				$mail = $_POST['mail'];
				$comment = $_POST['comment'];
		
				$update = mysqli_query($conn,"UPDATE `connect`  SET name = '$name',mail = '$mail',comment = '$comment' WHERE id='$id'");
						
				if(!empty($update)){
					echo"<span style='color:green'>Updated successfully....</span>";
					header("Refresh:2; url=connect.php");
				}else{
					
					echo"<span style='color:red'>Error....</span><br><br>";	
				}
			
	     	}
			
			if($_GET['active'] == 'connect'){

					$query = mysqli_query($conn,"SELECT * FROM `connect`");
				
					if(mysqli_num_rows($query)>0){
						
						while($row = mysqli_fetch_array($query)){
					
			?>
				<div class="row">
			<div class="col-xl-12">
				<div class="card spur-card">
					<div class="card-header">
						<div class="spur-card-icon">
							<i class="fas fa-chart-bar"></i>
						</div>
						<div class="spur-card-title"> <?php echo ucfirst($_GET['active']);?> </div>
					</div>
					<div class="card-body ">
						<form action="" method="post">
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="inputPassword4">Name</label>
									<input type="name" class="form-control" id="inputPassword4" placeholder="Name" name="name" value="<?php echo $row['name'];?>">
									<input type="hidden" name="id" value="<?php echo $row['id'];?>">
								</div>
								<div class="form-group col-md-6">
									<label for="inputEmail4">Email</label>
									<input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="mail" value="<?php echo $row['mail'];?>">
								</div>
							</div>
							
							<div class="form-row">
								<div class="form-group col-md-12">
									<label for="inputEmail4">Comment</label>
									<input type="text" class="form-control" id="inputEmail4" placeholder="Comment" name="comment" value="<?php echo $row['comment'];?>">
								</div>
							</div>

							
							
							<button type="submit" name="update_connect" class="btn btn-primary">Update</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		
			
			<?php

				}
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