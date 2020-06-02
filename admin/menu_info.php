<?php
	session_start();
	include 'admin_header_scripts.php';  
    include 'session_validate.php';
	include 'confile.php';

	$id=$_REQUEST['menu_id'];

	if(isset($_POST['update']))
	{
		$t=$_POST['title'];
		$d=$_POST['desc'];
		$f=str_replace(" ", "_", $_FILES['upfile']['name']);
		move_uploaded_file($_FILES['upfile']['tmp_file'], "../images/menu/". str_replace(" ", "_", $_FILES['upfile']['name']));

		$uq=mysqli_query($con,"UPDATE `menu` SET `menu_title`='$t',`menu_image`='$f',`menu_description`='$d' WHERE `menu_id`='$id' ");
		if($uq)
		{
			header('location:menu_management.php');
		}
	}
?>
<center>
	<div style="margin-top: 20px;">
		<h4>Edit Menu Information</h4><hr>
		<form name="f1" class="form-horizontal" enctype="multipart/form-data" method="post">
			<?php
				$q1=mysqli_query($con,"SELECT * FROM `menu` WHERE `menu_id`='$id' ");
				$q1r=mysqli_fetch_assoc($q1);
			?>
			<div class="form-group col-sm-6">
				<label for="title" style="float: left;font-size: 16px;">Menu Title</label>
				<input type="text" name="title" class="form-control form-control-sm" value="<?php echo $q1r['menu_title']; ?>" required>
			</div>
			<div class="form-group col-sm-6">
				<img src="../images/menu/<?php echo $q1r['menu_image']; ?>" width="100%" height="250px">
				<input type="file" name="upfile" class="form-control form-control-sm">
			</div>
			<div class="form-group col-sm-6">
				<label for="title" style="float: left;font-size: 16px;">Description (if doesn't have any sub menu)</label>
				<br><br>
				<textarea class="form-control form-control-sm" name="desc" ><?php echo $q1r['menu_description']; ?></textarea>
			</div>
			<button class="btn btn-primary btn-sm" name="update" type="submit">Update</button>
		</form>	
	</div>
</center>
<?php
	include 'admin_footer_scripts.php';
?>
<script type="text/javascript">
	CKEDITOR.replace('desc');
</script>