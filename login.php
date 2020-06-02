<?php
 session_start(); 	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<style>
		.box
		{
			width: 500px;
			height: 300px;
			box-shadow: 1px 1px 10px 1px gray;
			margin-top: 100px;

		}
		.label
		{
			font-size: 22px;
			padding:20px 0px 20px 0px;
			color: white;
			width: 100%;
			background-color:#174873;
			height: 80px;
		}
		.a1
		{
			width: 50%;
			font-size: 18px;
			margin-top: 20px;
		}
		.a2
		{
			width: 50%;
			font-size:18px;
			margin-top: 20px;
		}
	</style>
	<?php
		include 'admin/confile.php';
		if(isset($_POST['submit']))
		{
			$fq=mysqli_query($con,"SELECT * FROM `user` ");
			$fqr=mysqli_fetch_assoc($fq);
			$userf=$fqr['username'];
			$passf=$fqr['password'];

			$user=$_POST['user'];
			$pass=$_POST['pass'];
			if($user==$userf)			
			{
				if($pass==$passf)
				{
					$_SESSION['user']=$user;
					header('location:admin/AdminPanel.php');
				}
			}
			else
			{
				echo "<script>alert('Wrong input credentials ');</script>";
				header("refresh:0;");
			}
		}
	?>
</head>
<body id="body">
<div class="container">
	<center>
		<div class="box">
			<div class="label">Admin Login <span style="font-size: 12px;color: white;"><a href="index.php">[Home]</a></span></div>
			<div class="row">
				<div class="col-sm a2">
					<center>
						<form class="form-horizontal" name="f1" method="post">
							<div class="form-group row">
								<label for="user" class="col-sm-3 col-form-label">User:</label>
								<input type="text" name="user" class="form-control col-sm-6" placeholder="Enter the user ID/name" required>
							</div>
							<div class="form-group row">
								<label for="user" class="col-sm-3 col-form-label">Password:</label>
								<input type="Password" name="pass" class="form-control col-sm-6" required>
							</div>
							<button type="submit" class="btn btn-primary btn-sm" name="submit">Submit</button>
						</form>
					</center>
					</div>
				</div>
			</div>
		</div>
	</center>
</div>
</body>
</html>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>