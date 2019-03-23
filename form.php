<style type="text/css">
	#j1{
		margin-top: 50px;
		margin-left: 7%;
		width: 60%;
		height: 100%;
		background-image: url("img/donateBackground.jpg");
		background-size: cover;
		background-repeat: no-repeat;
		border-radius: 20px;
		float: left;
		opacity: 0.93;
		min-width: 500px;
	}
	
</style>

<div style="width: 100%; height: 600px;">
	<div class="jumbotron" id="j1">
		<center><h2> Fill PickUp Request </h2></center>
		<div class="container" style="width: 70%; margin-left: 15%;">
			<form method="post" action="index.php">
				<table class="table table-borderless table-sm">
					<thead>
				    	<tr><div class="form-group">
				        	<th><h4><label for="name"> Full Name* </label></h4></th>
				        	<th colspan="2"><input type="text" name="name" class="form-control"></th>
				      	</div></tr>
				      	<tr><div class="form-group">
				        	<th><h4><label for="email"> Email ID </label></h4></th>
				        	<th colspan="2"><input type="text" name="email" class="form-control"></th>
				      	</div></tr>
				      	<tr><div class="form-group">
				        	<th><h4><label for="mob"> Mobile* </label></h4></th>
				        	<th colspan="2"><input type="text" name="mob" class="form-control"></th>
				      	</div></tr>
				      	<tr><div class="form-group">
				        	<th><h4><label for="addr"> Address* </label></h4></th>
				        	<th colspan="2"><textarea class="form-control" name="addr" rows="3"></textarea></th>
				      	</div></tr>
				      	<tr><div class="form-group">
				        	<th><h4><label for="pin"> Pincode </label></h4></th>
				        	<th colspan="2"><input type="text" name="pin" class="form-control" style="width: 55%;"></th>
				      	</div></tr>
				      	<tr><div class="form-group">
				        	<th><h4><label for="item"> Items* </label></h4></th>
				        	<th><textarea name="item" id="item1" class="form-control"></textarea> 
				        	</th>
				        </div></tr>
				      	<tr>
				      		<th colspan="2"><div class="container" style="width: 60%; margin-top: 10px;">
				      			<button type="submit" class="btn btn-primary btn-lg form-control" style="background-color: #0E1FA6;"> Submit </button> <!-- Form submit part -->
				      		</div></th>
				      	</tr>
				      	</thead>
				</table>
			</form>
		</div>
	</div>
	<div style="width: 30%; float: right; padding-top: 40px; padding-left: 5%;">
		<img src="img/donation.jpg" style="width: 70%; height: 250px; padding-top: 25px;">
		<img src="img/truck.jpg" style="width: 70%; height: 250px; padding-top: 25px;">
	</div>
</div>
<!-- Form Submit -->

<?php
	if(isset($_REQUEST['name']))
	{// Model for php.. not complete
		$nm = $_REQUEST['name'];
		$eml = $_REQUEST['email'];
		$mob = $_REQUEST['mob'];
		$addr = $_REQUEST['addr'];
		$con = mysqli_connect('localhost','root','','pickup');
		$q = "Insert into request values()";
	}
?>

<!-------------------->