<?php
include 'admin/confile.php';
$id=$_REQUEST['sno'];
?>

<?php include 'header.php' ?>
<section style="margin-top:95px;">
<div class="container"  style="padding-top:50px;padding-bottom:50px;background-color:white;">

<?php
$query=mysqli_query($con,"SELECT * FROM `submenu` WHERE `submenu_status`='active' AND `admin_status`='active' AND `sno`='$id' " );
while($arr=mysqli_fetch_assoc($query))
{
?>
<div class="row">
    <div class="col-sm-8"><?php echo $arr['submenu_desc'] ?></div>
    <div class="col-sm-4"> <img src="images/pages/<?php echo $arr['file_image'] ?>" alt="img" width="300px" height="220px"> </div>
</div>
<?php
}
?>
</div>
</section>
<?php include 'footer.php' ?>