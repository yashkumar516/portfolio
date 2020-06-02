    <?php session_start();
    	$session=date('Y');

        include 'admin_header_scripts.php';
        include 'session_validate.php';
        include 'confile.php';               
        if(isset($_POST['submitbanner1']))
        {
        	$user=$_SESSION['user'];
            $b1t=$_POST['Banner1title'];
            $b1txt=$_POST['bdesc'];            

            move_uploaded_file($_FILES["b1file"]["tmp_name"],"../images/labs/" .str_replace(" ","_",$_FILES["b1file"]["name"]));
             $b1file=str_replace(" ","_",$_FILES["b1file"]["name"]);
             $sql=mysqli_query($con,"INSERT INTO `master_lab`(`ml_title`,`ml_image`,`ml_desc`,`ml_modified_by`,`ml_session`) VALUES('$b1t','$b1file','$b1txt','$user','$session')");
             if ($sql)
             {
                echo "<script>alert('success!');</script>";
                header('url=admin_lab_management.php');
             }
             else
             {
             	echo "<script>alert('failed!');</script>";
             	header('url=admin_lab_management.php');	
             }
        }       
       
    ?>
</head>
<body>
    <div class="wrapper">
        <?php include 'sidebar.php'; ?>
            <div class="dash">
                List of Labs
                <hr style="color: skyblue;">
                <div class="row">

                    <!-- Modal -->
                    <div class="modal fade" id="myModal" role="dialog" >
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
                                    <label for="Banner1title" style="font-size: 14px;">Lab Title:</label>  
                                    <input type="text" name="Banner1title" class="form-control form-control-sm" placeholder="Enter Name of Lab" required>                        
                                </div>
                                <div class="form-group col-sm">
                                    <label for="Banner1text" style="font-size: 14px;">Lab Description:</label>            
                                    <textarea class="form-control form-control-sm" name="bdesc" required></textarea>                        
                                </div>
                                <div class="form-group col-sm">
                                    <label for="b1file" style="font-size: 14px;">Image:</label>         
                                   <input type="file" name="b1file" class="form-control form-control-sm"  required accept="image/*">
                                </div> 
                                <div class="form-group col-sm">
                                    <label for="status" style="font-size: 14px;">Status:</label>
                                    <select class="form-control form-control-sm" name="bstatus">
                                        <option value="active">active</option>
                                        <option value="inactive">inactive</option>
                                    </select>
                                </div>
                                <center>                               
                                <button class="btn btn-primary" style="width: 75px;height: 30px;font-size: 12px;" type="submit" name="submitbanner1">Save</button>    
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
                        <div class="pu_title">Laboratories
                          <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal" style="float: right;">Add</button>
                        </div><br>
                        <hr>
                        <?php
                            $b_up=mysqli_query($con,"SELECT * FROM `master_lab`");            
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
                                            <th class="th-sm">Status</th>
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
                                                <?php $bid=$bru['ml_id']; ?>
                                                <a href="#edit_modal" data-toggle="modal" data-id="<?php echo $bid; ?>">
                                                    <i class="fas fa-pen-square"></i>
                                                </a>
                                                                                  
          										                  <a href="#modalview" data-toggle="modal" data-id="<?php echo $bid; ?>">
                                                	<i class="fas fa-eye"></i>
                                              	</a>
                                                <!-- <a href="#" data-toggle="modal" data-target="modalview">
                                                	<i class="fas fa-eye"></i>
                                                </a>  -->                                                 
                                            </td>
                                           <td><?php echo $bru['ml_title']; ?></td>
                                            <td>[hidden]</td>
                                            <td>
                                            	<?php echo date('d F Y', strtotime($bru['ml_modified'])); ?></td>
                                            <td>
                                                <?php
                                                    $bid=$bru['ml_id'];
                                                    $check=$bru['ml_status'];
                                                    if($check=='active')
                                                    {
                                                        echo '<button class="btn btn-success btn-sm changeStatus" id="confirm" onclick="return sw('.$bid.')" value="active">active</button>';
                                                    }
                                                    else
                                                    {
                                                        echo '<button class="btn btn-danger btn-sm" id="confirm" onclick="return sw('.$bid.')" value="inactive">inactive</button>';
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
            <!-- modal to fetch the information of the lab -->
            <div class="modal fade" id="modalview" role="dialog" >
                        <div class="modal-dialog modal-lg">
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Lab Information</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">                          
								<div id="md_value">
									
								</div>                                
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                    </div>
            <!-- modal end -->

            <!-- start of the modal to edit the information of the laboratory -->
            <div class="modal fade" id="edit_modal" role="dialog" >
                <div class="modal-dialog modal-lg">
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Information</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="modal_edit_lab">
                        	
                        </div>                              
                   	</div>
                   	<div class="modal-footer">
                     	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                   	</div>
                 	</div>
               	</div>
           	</div>
            <!-- end of the modal -->
    </div>    
<script type="text/javascript">
    $(document).ready(function(){
      $('.changeStatus').click(function(){
        var a=$(this).attr('data-id');
      });
    });

    CKEDITOR.replace('bdesc');

	function sw(el){    
    	var id=el;
    	var url="change_status_lab.php?lab_id="+id;
    	$(location).attr('href',url);
	}
	
</script>
<?php
    include 'admin_footer_scripts.php';
?>