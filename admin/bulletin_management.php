<?php
    session_start();
        include 'admin_header_scripts.php';
        include 'session_validate.php';
        include 'include/Confile.php';  

        if(isset($_POST['addb']))    
        {
            $title=$_POST['bTitle'];
            $date=$_POST['bDate'];
            $desc=$_POST['bDesc'];
            $bLink=$_POST['bLink'];
            $bstatus=$_POST['bstatus'];

            move_uploaded_file($_FILES["bfile"]["tmp_name"],"../images/bulletins/" . str_replace(" ","_",$_FILES["bfile"]["name"]));
            $bfile=str_replace(" ","_",$_FILES["bfile"]["name"]);
            
            $bq=mysqli_query($con,"INSERT INTO `index_bulletins`(`bulletin_title`,`bulletin_image`,`bulletin_content`,`bulletin_link`,`bulletin_dated`,`bulletin_status`) VALUES('$title','$bfile','$desc','$bLink','$date','$bstatus') ");
            if($bq)
            {
                echo "success";
                header('location:bulletin_management.php');
            }
            else
            {
                echo "failed";
                header('location:bulletin_management.php');
            }
        }
    ?>
</head>
<body>
    <div class="wrapper">
        <?php include 'sidebar.php'; ?>
            <div class="dash">
               List of Bulletins
                <hr style="color: skyblue;">
                <div class="row">
                    <!-- for adding bulletin -->
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                    <!-- Modal content-->
                      <div class="modal-content" id="myModal">
                        <div class="modal-header">
                            <h4 class="modal-title">Add</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>    
                        </div>
                        <div class="modal-body">                                   
                            <!-- form -->
                             <form name="pu_form" class="form-horizontal" action="#" method="post" enctype="multipart/form-data">
                                    <div class="form-group col-sm">                            
                                       <label for="bTitle" style="font-size: 14px;">Title: </label>
                                       <input type="text" name="bTitle" class="form-control form-control-sm" placeholder="Enter new Title" required>
                                    </div>
                                    <div class="row" style="padding:0px 15px 0px 15px;">
                                        <div class="form-group col-sm">                                         
                                           <label for="bfile" style="font-size: 14px;">Image: </label>
                                           <input type="file" name="bfile" class="form-control form-control-sm"  required accept="image/*">
                                        </div>
                                        <div class="form-group col-sm">
                                           <label for="bDate" style="font-size: 14px;">Dated: </label>
                                           <input type="date" name="bDate" class="form-control form-control-sm">
                                        </div> 
                                    </div>                                    
                                    <div class="form-group col-sm">
                                       <label for="bDesc" style="font-size: 14px;">Description: </label>
                                       <textarea class="form-control form-control-sm" name="bDesc"></textarea>  
                                    </div> 
                                    <div class="form-group col-sm">
                                       <label for="bLink" style="font-size: 14px;">Any Links: </label>
                                       <input type="link" name="bLink" class="form-control form-control-sm" placeholder="Enter any link (if you want)" >     
                                    </div>                           
                                    <center>
                                    <div class="row">
                                        <div class="form-group col-sm" style="margin-left: 15px;">
                                        <label for="status" style="font-size: 14px;float: left;">Update Status:</label>
                                        <select class="form-control form-control-sm" name="bstatus">
                                            <option selected>Select Status Here</option>
                                            <option value="active">Active</option>
                                            <option value="inactive">Inactive</option>
                                        </select>
                                        </div> 
                                        <div class="form-group col-sm">
                                           <button class="btn btn-primary" style="width: 100px;height: 30px;font-size: 12px;margin-top:30px;" type="submit" name="addb">Add</button>  
                                        </div>                                     
                                    </div>                           
                                </form>
                            <!-- end -->

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>  
              </div>
            </div>                
            <div class="col-sm-11" id="phone_update">
                        <div class="pu_title">
                          <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal" style="float: right;">Add</button>

                        </div><br><hr>
                        <?php
                            $b_up=mysqli_query($con,"SELECT * FROM `index_bulletins` WHERE `bulletin_status`='active' ");            
                        ?>
                           <div class="pu_form">
                                <table id="dt">
                                    <thead>
                                        <tr>
                                            <th class="th-sm">SrNo</th>
                                            <th class="th-sm">Action</th>
                                            <th class="th-sm">Title</th>
                                            <th class="th-sm">Description</th>
                                            <th class="th-sm">Dated</th>
                                        </tr>
                                    </thead>                                    
                                    <tbody>
                                    <?php
                                        $count='1';
                                        while($bru=mysqli_fetch_assoc($b_up))
                                        {
                                    ?>
                                        <tr>
                                            <td><?php echo $count++; ?></td>
                                            <td>
                                                <a href="edit_bulletin_info.php?bulletin_id=<?php echo $bru['bulletin_id'];?>"><i class="fas fa-pen-square"></i></a>
                                                <a href="delete_bulletin.php?bulletin_id=<?php echo $bru['bulletin_id'];?>"><i class="fas fa-trash-alt"></i></a>                                            
                                            </td>
                                           <td><?php echo $bru['bulletin_title']; ?></td>
                                            <td><?php echo $bru['bulletin_content']; ?></td>
                                            <td>   <?php echo $bru['bulletin_dated']; ?>                                        
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
            </div> 
    </div>
    
 <?php
    include 'admin_footer_scripts.php';
 ?>