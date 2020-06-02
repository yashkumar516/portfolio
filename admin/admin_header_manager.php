<?php
    session_start();
    include 'admin_header_scripts.php';        
        include 'session_validate.php';
        include 'confile.php';        
        
        if(isset($_POST['submitphone'])) 
        {
             $p1=$_POST['phone1'];
             $upq=mysqli_query($con,"INSERT INTO `index_phones`(`index_phone`) VALUES('$p1')");
           
                if($upq)
                {
                    echo '<script>alert("Success");</script>';
                    header('location:admin_header_manager.php');
                }
                else
                {
                    echo '<script>alert("Failed");</script>';                 
                    header('url=admin_header_manager.php');
                }            
        }

        if(isset($_POST['submitmail']))    
        {
            $pm=$_POST['email'];
            $iq=mysqli_query($con,"INSERT INTO `header_email`(`email`) VALUES('$pm') ");
                if($iq)                
                {
                    echo '<script>alert("Success");</script>';
                    header('url=admin_header_manager.php');
                }
                else
                {
                    echo '<script>alert("Failed");</script>';
                    header('url=admin_header_manager.php');
                }            
        }     

        if(isset($_POST['submitlinks']))    
        {
            $fb=$_POST['fblink'];
            $tw=$_POST['twlink'];
            $ig=$_POST['iglink'];            
                $inq=mysqli_query($con,"UPDATE `header_social` SET `social_fb_link`='$fb',`social_twitter_link`='$tw',`social_linked_link`='$ig' ");
            if($inq)
            {
                echo '<script>alert("Success");</script>';                
                header('url=admin_header_manager.php');                       
            }
            else
            {
                echo '<script>alert("Failed");</script>';                
                echo mysqli_error($con);
            }
        }
        if(isset($_POST['submitlogo']))
        {
            $file=str_replace(" ", "_", $_FILES["file"]["name"]);
            $l1file=str_replace(" ", "_", $_FILES["l1file"]["name"]);
            if($l1file!="" || $l1file==null)
            {
                move_uploaded_file($_FILES["file"]["tmp_name"],"../images/logo/" . str_replace(" ","_",$_FILES["file"]["name"]));            
            }
            
            move_uploaded_file($_FILES["l1file"]["tmp_name"],"../images/logo/" . $l1file);    
            
             $change_state=mysqli_query($con,"UPDATE `header_logo` SET `logo_status`='inactive'");
             $sql=mysqli_query($con,"INSERT INTO `header_logo`(`logo1_file`,`logo_file`) VALUES('$l1file','$file')");

             if ($sql)
             {              
                echo '<script>alert("Success");</script>';
                header('url=admin_header_manager.php');
             }
             else
             {
                echo "<script>alert('failed!');</script>";
             }
             
        }
        // if(isset($_POST['submitnotice']))
        // {
        //     $n1=$_POST['notice'];
        //     $nq=mysqli_query($con,"UPDATE `header_notice` SET `header_notice_status`='inactive' ");
        //     $nq1=mysqli_query($con,"INSERT INTO `header_notice`(`header_notice_text`) VALUES('$n1') ");
        //     if($nq)
        //     {
        //         if($nq1)
        //         {
        //             echo "Success";
        //             header('url=admin_header_manager.php');
        //         }
        //         else
        //         {
        //             echo "Failed";
        //             header('url=admin_header_manager.php');                    
        //         }
        //     }
        //     else
        //     {
        //         echo "Failed";               
        //         header('url=admin_header_manager.php');
        //     }
        // }
       
    ?>

</head>
<body> 
    <div class="wrapper">
        <?php include 'sidebar.php'; ?>
            <div class="dash">
               Header<span class="dash_c1">&nbsp;Control Panel</span>
                <hr style="color: skyblue;">
                <div class="row">
                    <div class="col-sm-11" id="phone_update">
                        <div class="pu_title">Phone Number
                            <button type="button" style="background:transparent;border: none;cursor: pointer;float: right;" onclick="return toglephT()">
                                <i class="fas fa-plus-square"></i>
                            </button>
                           <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#phone_modal" style="float: right;">Add</button>
                        </div><br><hr>
                        <div class="toglePhone">
                            <table id="dt">
                                <thead>
                                    <tr>
                                        <th>SrNo</th>
                                        <th>PhoneNumber</th>
                                        <th>Modified</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $pq=mysqli_query($con,"SELECT * FROM `index_phones` ");
                                        $p='1';
                                        while($pqr=mysqli_fetch_assoc($pq))
                                        {
                                    ?>
                                    <tr>
                                        <td><?php echo $p++; ?></td>
                                        <td><?php echo $pqr['index_phone']; ?></td>
                                        <td>
                                            <?php
                                                $pdate=$pqr['index_phone_modified_date'];
                                             echo date('d/M/Y',strtotime($pdate)); ?>
                                        </td>
                                        <td>
                                            <?php
                                                $pcheck=$pqr['index_phone_status'];
                                                $pid=$pqr['index_phone_id'];
                                                if($pcheck=='active')
                                                {
                                                    echo '<button class="btn btn-success btn-sm" onclick="return pf('.$pid.')">Active</button>';
                                                }
                                                else
                                                {
                                                    echo '<button class="btn btn-danger btn-sm" onclick="return pf('.$pid.')">Inactive</button>';
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
                            <!-- beginning of modal -->
                            <!-- Modal -->
                            <div class="modal fade" id="phone_modal" role="dialog">
                                <div class="modal-dialog">
                                  <!-- Modal content-->
                                  <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add</h4>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                      <form name="pu_form" class="form-horizontal" action="#" method="post" >
                                        
                                        <div class="form-group col-sm">                            
                                           <label for="oldPhone">Phone: </label>
                                           <input type="phone" name="phone1" class="form-control form-control-sm" placeholder="New Phone" required>
                                        </div>
                                                                
                                        <center>
                                        <button class="btn btn-primary" style="width: 75px;height: 30px;font-size: 12px;" type="submit" name="submitphone">Add</button>    
                                        </center>                           
                                        </form>                                        
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <!-- end of modal -->                          
                        </div>        
                </div>
                <br>
                <div class="row">
                    <!-- for email -->
                    <div class="col-sm-11" id="phone_update">
                        <div class="pu_title">E-Mail
                            <button type="button" style="background:transparent;border: none;cursor: pointer;float: right;" onclick="return toglemail()">
                                <i class="fas fa-plus-square"></i>
                            </button>
                           <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#mail_modal" style="float: right;">Add</button>
                        </div><br><hr>
                        <div class="mailTable">
                            <table id="dt" class="dt">
                                <thead>
                                    <tr>
                                        <th>SrNo</th>
                                        <th>Email</th>
                                        <th>Last Modified</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $eq=mysqli_query($con,"SELECT * FROM `header_email` ");
                                        $e='1';
                                        while($eqr=mysqli_fetch_assoc($eq))
                                        {
                                    ?>
                                    <tr>
                                        <td><?php echo $e++; ?></td>
                                        <td><?php echo $eqr['email']; ?></td>
                                        <td>
                                            <?php
                                                $edate=$eqr['email_modified_date'];
                                             echo date('d/M/Y',strtotime($edate)); ?>
                                        </td>
                                        <td>
                                            <?php
                                                $echeck=$eqr['email_status'];
                                                $eid=$eqr['email_id'];
                                                if($echeck=='active')
                                                {
                                                    echo '<button class="btn btn-success btn-sm" onclick="return es('.$eid.')">Active</button>';
                                                }
                                                else
                                                {
                                                    echo '<button class="btn btn-danger btn-sm" onclick="return es('.$eid.')">Inactive</button>';
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
                        <!-- email modal -->
                        <div class="modal fade" id="mail_modal" role="dialog">
                            <div class="modal-dialog">
                            <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <form name="em_form" class="form-horizontal" action="#" method="post">
                                        <div class="form-group col-sm">                            
                                           <label for="oldPhone">E-mail: </label>
                                           <input type="phone" name="email" class="form-control form-control-sm" placeholder="New E-mail " required>
                                        </div> 
                                        <center>                               
                                            <button class="btn btn-primary" style="width: 75px;height: 30px;font-size: 12px;" type="submit" name="submitmail">Add</button>
                                        </center>                           
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end of modal -->
                    </div>
                </div><br>        
                <div class="row">
                    <!-- for email -->
                    <div class="col-sm-11" id="phone_update">
                        <div class="pu_title">Website Logo
                            <button type="button" style="background:transparent;border: none;cursor: pointer;float: right;" onclick="return togllogo()">
                                <i class="fas fa-plus-square"></i>
                            </button>
                           <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#logo_modal" style="float: right;">Add</button>
                        </div><br><hr>
                        <div class="logoTable">
                            <table id="dt" class="dt">
                                <thead>
                                    <tr>
                                        <th>SrNo</th>
                                        <th>Logo[optional]</th>
                                        <th>Logo[main]</th>
                                        <th>Last Modified</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $lq=mysqli_query($con,"SELECT * FROM `header_logo` ");
                                        $l='1';
                                        while($lqr=mysqli_fetch_assoc($lq))
                                        {
                                    ?>
                                    <tr>
                                        <td><?php echo $l++; ?></td>
                                        <td>
                                            <img src="../images/logo/<?php echo $lqr['logo1_file']; ?>" width="150px" height="50px">
                                        </td>
                                        <td>
                                            <img src="../images/logo/<?php echo $lqr['logo_file']; ?>" width="150px" height="60px">
                                        </td>
                                        <td>
                                            <?php
                                                $ldate=$lqr['logo_modified_date'];
                                             echo date('d/M/Y',strtotime($ldate)); ?>
                                        </td>
                                        <td>
                                            <?php
                                                $lcheck=$lqr['logo_status'];
                                                $lid=$lqr['logo_id'];
                                                if($lcheck=='active')
                                                {
                                                    echo '<button class="btn btn-success btn-sm" onclick="return ls('.$lid.')">Active</button>';
                                                }
                                                else
                                                {
                                                    echo '<button class="btn btn-danger btn-sm" onclick="return ls('.$lid.')">Inactive</button>';
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
                        <!-- logo modal -->
                        <div class="modal fade" id="logo_modal" role="dialog">
                            <div class="modal-dialog">
                            <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                       <form name="logo_form" class="form-horizontal" action="#" method="post" enctype="multipart/form-data">
                                        <div class="form-group col-sm">     
                                            <label for="Image">Logo: </label>
                                           <input type="file" name="l1file" id="l1file" class="form-control form-control-sm"  accept="image/*" onchange="return Filevalidation1()">                       
                                           <label for="Image">Logo[main]: </label>
                                           <input type="file" name="file" id="file" class="form-control form-control-sm"  required accept="image/*" onchange="return Filevalidation2()">
                                        </div> 
                                        <center>                               
                                        <button class="btn btn-primary" style="width: 75px;height: 30px;font-size: 12px;" type="submit" name="submitlogo">Add</button>   
                                        </center>                           
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end of modal -->   
                        </div>        
                    </div>
                <br>
                

                <div class="row">
                    <div class="col-sm-11" id="phone_update">
                        <div class="pu_title">Social Links
                            <button type="button" style="background:transparent;border: none;cursor: pointer;float: right;" onclick="return toglesocial()">
                                <i class="fas fa-plus-square"></i>
                            </button>
                        </div><br><hr>
                           <div class="socials">
                                <form name="sl_form" class="form-horizontal" action="#" method="post">
                                <?php                        
                                    $sl=mysqli_query($con,"SELECT * FROM `header_social` ");
                                    $sl1=mysqli_fetch_assoc($sl);                                              
                                ?>
                                <div class="form-group col-sm">                            
                                   <label for="fblink">Facebook: </label>
                                   <input type="link" name="fblink" class="form-control form-control-sm" placeholder="New Facebook Link " value="<?php echo $sl1['social_fb_link']; ?>" >
                                </div>
                                <div class="form-group col-sm">                            
                                   <label for="twlink">Twitter: </label>
                                   <input type="link" name="twlink" class="form-control form-control-sm" placeholder="New Twitter Link " value="<?php echo $sl1['social_twitter_link']; ?>" >
                                </div>  
                                <div class="form-group col-sm">                            
                                   <label for="iglink">Linked In: </label>
                                   <input type="link" name="iglink" class="form-control form-control-sm" placeholder="New Linkedin Link " value="<?php echo $sl1['social_linked_link']; ?>" >
                                </div>                                                      
                                <center>
                                <button class="btn btn-primary" style="width: 75px;height: 30px;font-size: 12px;margin-bottom: 5px;" type="submit" name="submitlinks">Update</button>      
                                </center>                           
                                </form>
                            </div>
                        </div> 
                    </div>
                </div>          

            </div>
        </div> 
    </div>
 <?php
    include 'admin_footer_scripts.php';
 ?>
 <script type="text/javascript">
     function pf(p_id)
     {
        var pId=p_id;
        var url="change_status_phone.php?phone_id="+pId;
        $(location).attr('href',url);
     }
     function es(e_id)
     {
        var eId=e_id;
        var eurl="change_email_status.php?mail_id="+eId;
        $(location).attr('href',eurl);
     }
     function ls(l_id)
     {
        lId=l_id;
        var lurl="change_logo_status.php?logo_id="+lId;
        $(location).attr('href',lurl);
     }

Filevalidation1 = () => { 
        const fi = document.getElementById('l1file'); 
        // Check if any file is selected. 
        if (fi.files.length > 0) { 
            for (const i = 0; i <= fi.files.length - 1; i++) { 
  
                const fsize = fi.files.item(i).size; 
                const file = Math.round((fsize / 512)); 
                // The size of the file. 
                if (file >= 1024) { 
                    alert( 
                      "File too Big, please select a file less than 1mb"); 
                } 
            } 
        } 
    } 

Filevalidation2 = () => { 
        const fi = document.getElementById('file'); 
        // Check if any file is selected. 
        if (fi.files.length > 0) { 
            for (const i = 0; i <= fi.files.length - 1; i++) { 
  
                const fsize = fi.files.item(i).size; 
                const file = Math.round((fsize / 512)); 
                // The size of the file. 
                if (file >= 1024) { 
                    alert( 
                      "File too Big, please select a file less than 1mb"); 
                } 
            } 
        } 
    } 

 </script>