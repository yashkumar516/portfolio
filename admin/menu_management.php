<?php
  session_start();
  include 'admin_header_scripts.php';
  include 'session_validate.php';
  include 'confile.php';       
        if(isset($_POST['submitmenu']))
        {
            $at=$_POST['menutitle'];
            if($at=='Home' || $at =='home' || $at=='Contact us' || $at=='Contact Us')
            {
              echo "<script>alert('Cannot Enter the Home and contact Menu as they are default')</script>";
              header("refresh:0");
            }
            else
            {
              $ad=$_POST['menudesc'];
              $af=str_replace(" ","_",$_FILES['menufile']['name']);
              move_uploaded_file($_FILES['menufile']['tmp_name'],"../images/menu/". str_replace(" ", "_", $_FILES['menufile']['name']));
             $sql=mysqli_query($con,"INSERT INTO `menu`(`menu_title`,`menu_desc`) VALUES('$at','$ad')");
             if ($sql)
             {
                echo "success";
                header('location:menu_management.php');
             }
             echo "Failed";
            }
            
        }       
    ?>
</head>
<body>
    <div class="wrapper">
        <?php include 'sidebar.php'; ?>
            <div class="dash">
               Menu Management
                <hr style="color: skyblue;">
                <div class="row">
                    <!-- Modal -->
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Add</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <form name="logo_form" class="form-horizontal" action="#" method="post" enctype="multipart/form-data">
                                <div class="form-group col-sm">
                                    <label for="menutitle" style="font-size: 14px;">Menu Title:</label> 
                                    <input type="text" name="menutitle" class="form-control form-control-sm"  required>           
                                </div>
                                <div class="form-group col-sm">
                                    <label for="menudesc" style="font-size: 14px;">Menu Description:</label>            
                                    <textarea class="form-control form-control-sm" name="menudesc">
                                    </textarea>                        
                                </div>
                                <center>                               
                                <button class="btn text-white" style="width: 75px;height: 30px;font-size: 12px;background-color: #d64161!important;" type="submit" name="submitmenu">Add</button>    
                                </center>                           
                                </form>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                    </div>
                    <!-- start of the listing table -->
                     <div class="col-sm-11" id="phone_update">
                        <div class="pu_title">Menu List
                          <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal" style="float: right;background-color: #d64161!important;">Add</button>
                        </div><br>
                        <hr>
                           <div class="pu_form">
                                <table id="dt">
                                    <thead>
                                        <tr>
                                            <th class="th-sm">SrNo</th>
                                            <th class="th-sm">Action</th>
                                            <th class="th-sm">menu Name</th>
                                            <th class="th-sm">Description</th>
                                            <th class="th-sm">Last Modified</th>
                                            <th class="th-sm">  Status</th>
                                        </tr>
                                    </thead>                                                             
                                    <tbody>
                                      <?php
                                          $aquery=mysqli_query($con,"SELECT * FROM `menu` WHERE `admin_status`='active'");
                                          $count='1';
                                          while($ar=mysqli_fetch_assoc($aquery))
                                          {
                                      ?>
                                        <tr>
                                            <td><?php echo $count++; ?></td>
                                            <td>
                                                 <a href="menu_info.php?menu_id=<?php echo $ar['menu_id']; ?>"><i class="fas fa-pen-square"></i>
                            
                                                 </a>  

                                                 <a href="delete_menu.php?menu_id=<?php echo $ar['menu_id']; ?>">
                                                  <i class="fas fa-trash" style="margin-left:20px;"></i> 
                                                </a>                                        
                                            </td>
                                           <td><?php echo $ar['menu_title']; ?></td>
                                            <td>[Hidden]</td>
                                            <td><?php echo date('d/M/Y',strtotime($ar['menu_modify_date'])); ?>                  
                                            </td>
                                            <td>
                                              <?php
                                                $aid=$ar['menu_id'];
                                                $check=$ar['menu_status'];
                                                if($check=='active')
                                                {
                                                  echo '<button class="btn btn-success btn-sm " onclick="return cm('.$aid.')">'.$check.'</button>';
                                                }
                                                else
                                                {
                                                  echo '<button class="btn btn-danger btn-sm" onclick="return cm('.$aid.')">'.$check.'</button>';
                                                }      
                                              ?>
                                            </td> 
                                        </tr>
                                        <?php
                                            }
                                        ?>
                                    </tbody>                                  
                                </table>
                                </div> 
                            </div>    
                        </div>
                    </div>     
                    <!-- end of the listing table -->
                </div>
                <br>
            </div>
    </div>
 <?php
    include 'admin_footer_scripts.php';
 ?>
<script>
  CKEDITOR.replace('menudesc');

  function cm(mid)
  {
    var id=mid;
    var murl='change_menu_status.php?menu_id='+id;
    $(location).attr('href',murl);
  }

</script>