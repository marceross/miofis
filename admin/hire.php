<?php include('header.php');?>

<main class="dash-content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="card spur-card">
					<div class="card-header">
						<div class="spur-card-icon">
							<i class="fas fa-table"></i>
						</div>
						<div class="spur-card-title">Hire</div>
					</div>
					<div class="card-body ">
						<table class="table table-in-card">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Name</th>
									<th scope="col">Mail</th>
									<th scope="col">Phone</th>
									<th scope="col">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								
								$query = mysqli_query($conn,"SELECT * FROM `hire`");
								$i = 1;
								if(mysqli_num_rows($query)>0){
									
									while($row = mysqli_fetch_array($query)){
										
								
								?>
								<tr>
									<th scope="row"><?php echo $i++;?></th>
									<td><?php echo $row['name'];?></td>
									<td><?php echo $row['mail'];?></td>
									<td><?php echo $row['comment'];?></td>
									<td>
										<a href="edit.php?active=hire&id=<?php echo $row['id'];?>" class="btn btn-primary">Edit</a>
										<a href="delete.php?active=hire&id=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a>
									</td>
								</tr>
								
									<?php
									
									
									}
										
									}else{
										
										echo"<tr><td>No data fonud</td></tr>";
									}
								?>
								
							</tbody>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/spur.js"></script>
</body>

</html>