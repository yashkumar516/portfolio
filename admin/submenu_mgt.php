<?php
  session_start();
  include 'admin_header_scripts.php';
  include 'session_validate.php';
  include 'confile.php';       
        if(isset($_POST['submitmenu']))
        {
              $mt=$_POST['menu_title'];
              $st=$_POST['submenu_title'];
              $sd=$_POST['submenu_desc'];
              move_uploaded_file($_FILES["submenu_image"]["tmp_name"],"../images/pages/" .str_replace(" ","_",$_FILES["submenu_image"]["name"]) );
              $sfile=str_replace(" ","_",$_FILES["submenu_image"]["name"]);

             $sql=mysqli_query($con,"INSERT INTO `submenu`(`menu_id`,`submenu_title`,`file_image`,`submenu_desc`) VALUES('$mt','$st','$sfile','$sd')");
             if ($sql)
             {
                echo "success";
                header('location:submenu_mgt.php');
             }
             echo "Failed";
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
                                <?php
                                          $aquery=mysqli_query($con,"SELECT * FROM `menu`");                                       
                                      ?>
                                    <label for="menutitle" style="font-size: 14px;">Select Menu:</label> 
                                    <select class="form-control form-control-sm"  name="menu_title" required>
                                    <option> select menu</option>
                                    <?php 
                                      while($ar=mysqli_fetch_assoc($aquery))
                                      {
                                    ?>
                                    <option value="<?php echo $ar['menu_id']?>"><?php echo $ar['menu_title'] ?></option>
                                    <?php
                                      }
                                    ?>
                                    </select>          
                                </div>
                                <div class="form-group col-sm">
                                    <label for="menutitle" style="font-size: 14px;">Sub-Menu Title:</label> 
                                    <input type="text" name="submenu_title" class="form-control form-control-sm"  required>           
                                </div>
                                     <div class="form-group col-sm">
                                           <label for="menutitle" style="font-size: 14px;">Images:</label> 
                                            <input type="file" name="submenu_image" class="form-control form-control-sm"  required>           
                                      </div>
                                <div class="form-group col-sm">
                                    <label for="menudesc" style="font-size: 14px;">Menu Description:</label>            
                                    <textarea class="form-control form-control-sm" name="submenu_desc">
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
                                          $aquery=mysqli_query($con,"SELECT * FROM `submenu` WHERE `admin_status`='active'");
                                          $count='1';
                                          while($ar=mysqli_fetch_assoc($aquery))
                                          {
                                      ?>
                                        <tr>
                                            <td><?php echo $count++; ?></td>
                                            <td>
                                                 <a href="menu_info.php?menu_id=<?php echo $ar['sno']; ?>"><i class="fas fa-pen-square"></i></a>  

                                                 <a href="delete_submenu.php?sno=<?php echo $ar['sno'];?>">
                                                  <i class="fas fa-trash" style="margin-left:20px;"></i> 
                                                </a>                                               
                                            </td>
                                           <td><?php echo $ar['submenu_title']; ?></td>
                                            <td>[Hidden]</td>
                                            <td><?php echo date('d/M/Y',strtotime($ar['modify_date'])); ?>                  
                                            </td>
                                            <td>
                                              <?php
                                                $aid=$ar['sno'];
                                                $check=$ar['submenu_status'];
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
  CKEDITOR.replace('submenu_desc');

  function cm(mid)
  {
    var id=mid;
    var murl='change_submenu_status.php?sno='+id;
    $(location).attr('href',murl);
  }

</script>