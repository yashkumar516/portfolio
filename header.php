<?php
include 'admin/confile.php';
$query=mysqli_query($con,"SELECT * FROM `menu` WHERE `menu_status`='active' AND `admin_status`='active' " );
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css"
    integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <title>portfolio</title>
    <style>
        #home{
        background-image: url("images/hero.jpg");
        width:100%;
        height:auto;
        }
        #email{
            width:135px;
            padding:7px;
            border-top-left-radius:20px;
            border-bottom-left-radius:20px;
            background-color:#333;
            padding-left:20px;
            padding-right:20px;
        }
        #submit{
            padding:7px;
            border-top-right-radius:20px;
            border-bottom-right-radius:20px;
            padding-left:20px;
            padding-right:20px;
        }
    </style>
  </head>
  <body>

      <!-- nav start here -->
      <nav class="navbar navbar-expand-md navbar-light fixed-top" id="nav">
     <a href="#" class="navbar-brand" id="brand"><h3>Nitro<span style="color:blue;">.</span></h3></a>
       <button class="navbar-toggler" data-toggle="collapse" data-target="#a">
          <span class="navbar-toggler-icon"></span>
         </button>
       <div class="collapse navbar-collapse" id="a">
      <span class="mr-auto"></span>
    <ul class="navbar-nav">
    <li class="nav-item"><a href="index.php" class="nav-link" style="color:blanchedalmond;">Home</a></li>
    <?php
    while($arr=mysqli_fetch_assoc($query))
    {
    ?>
     <li class="nav-item dropdown"><a href="#about" class="nav-link" data-toggle="dropdown" 
     role="button" aria-haspopup="true" aria-expanded="false" style="color:blanchedalmond"><?php echo $arr['menu_title'];?></a>
     <ul class="dropdown-menu" id="dropdown">
     <?php
     $sno=$arr['menu_id'];
    $squery=mysqli_query($con,"SELECT * FROM `submenu` WHERE `submenu_status`='active' AND `menu_id` = '$sno'" );
    while($sarr=mysqli_fetch_assoc($squery))
    {
    ?>
    <li><a href="page.php?sno=<?php echo $sarr['sno'] ?>"><?php echo $sarr['submenu_title']; ?></a></li>
    <?php
    }
    ?>
     </ul>
     </li>
    <?php
    }
    ?>
    <li class="nav-item"><a href="#" class="nav-link" style="color:blanchedalmond;">Contact Us</a></li>
     </ul> 
   </div>
</nav>
<!-- nav end here -->