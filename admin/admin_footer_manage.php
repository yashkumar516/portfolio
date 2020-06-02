<?php session_start();
        include 'admin_header_scripts.php';
        include 'session_validate.php';
        include 'confile.php';        
        
        if(isset($_POST['submitBranch']))
        {
            $branch_info=$_POST['branch_info'];
            $branch_status=$_POST['branch_status'];
            $sq=mysqli_query($con,"INSERT INTO `footer_branches`(`f_branch`,`f_branch_status`) VALUES('$branch_info','$branch_status') ");
            if($sq)
            {
                header('location:admin_footer_manage.php');
            }
        }
        
?>
<style type="text/css">
#weeks table {
  border-collapse: collapse;
  width: 100%;
}

#weeks th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}
</style>
</head>
<body>
    <div class="wrapper">
        <?php include 'sidebar.php'; ?>
            <div class="dash">
                Branch Management
                <hr style="color: skyblue;">
                <div class="row">
                    <div class="col-sm-11" id="phone_update"> 
                        <div class="pu_title">Other Branches
                          <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#addAboutUs" style="float: right;">Add</button>
                        </div><br>
                        <hr>
                        <div class="pu_form">
                            <table id="dt">
                                <thead>
                                    <tr>
                                        <th class="th-sm">SrNo</th>
                                        <th class="th-sm">Action</th>
                                        <th class="th-sm">Branches</th>
                                        <th class="th-sm">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $fq=mysqli_query($con,"SELECT * FROM `footer_branches` ");
                                        $count='1';
                                        while($fqr=mysqli_fetch_assoc($fq))
                                        {
                                    ?>
                                    <tr>
                                        <td><?php echo $count++; ?></td>
                                        <td>
                                                <a href="edit_footer_about_info.php?branch_id=<?php echo $fqr['f_branch_id'];?>">
                                                    <i class="fas fa-pen-square"></i>
                                                </a>  
                                        </td>
                                        <td><?php echo substr($fqr['f_branch'], 0, 25).'[hidden]';  ?></td>       
                                        <td>
                                            <?php 
                                                $check=$fqr['f_branch_status'];
                                                    if($check=='active')
                                                    {
                                                        echo '<button class="btn btn-success btn-sm changeStatus" id="confirm" onclick="return faf('.$fqr["f_branch_id"].')" >Active</button>';
                                                    }
                                                    else
                                                    {
                                                        echo '<button class="btn btn-danger btn-sm" id="confirm" onclick="return faf('.$fqr["f_branch_id"].')" >Inactive</button>';
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
                    <!-- Modal -->
                    <div class="modal fade" id="addAboutUs" role="dialog">
                        <div class="modal-dialog">
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Add New</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                              
                                <form name="logo_form" class="form-horizontal" action="#" method="post" enctype="multipart/form-data">
                                <div class="form-group col-sm">
                                    <label for="status" style="font-size: 14px;">Branch:</label>
                                    <textarea class="form-control form-control-sm" name="branch_info"></textarea>
                                </div>
                                <div class="form-group col-sm">
                                    <label for="status" style="font-size: 14px;">Status:</label>
                                    <select class="form-control form-control-sm" name="branch_status">
                                        <option value="Active">Active</option>
                                        <option value="Inactive">Inactive</option>
                                    </select>
                                </div>
                                <center>                               
                                <button class="btn btn-primary" style="width: 75px;height: 30px;font-size: 12px;" type="submit" name="submitBranch">Save</button>    
                                </center>                           
                                </form>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                    </div>
                    <!-- end of the box -->
                </div><br>                
            </div>
        </div> 
    </div>
 <?php
    include 'admin_footer_scripts.php';
 ?>
 <script>
    function faf(el){
        var id=el;
        var url="change_status_footer_about.php?f_branch_id="+id;
        $(location).attr('href',url);
    }   
 </script>