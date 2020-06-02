    <?php session_start();
        include 'admin_header_scripts.php';
        include 'session_validate.php';
        include 'confile.php';

        if(isset($_POST['submitbanner1']))
        {
            $b1t=$_POST['Banner1title'];
            $b1txt=$_POST['Banner1text'];
            move_uploaded_file($_FILES["b1file"]["tmp_name"],"../images/banners/" .str_replace(" ","_",$_FILES["b1file"]["name"]) );
             $b1file=str_replace(" ","_",$_FILES["b1file"]["name"]);
             $sql=mysqli_query($con,"INSERT INTO `index_banner`(`body_banner_title`,`body_banner_file`,`body_banner_text`) VALUES('$b1t','$b1file','$b1txt')");
             if ($sql)
             {
                echo "success";
                header('location:admin_banner_content_manage.php');
             }
             echo "SAVED TO DATABASE";
             header('location:admin_banner_content_manage.php');
        }

    ?>
</head>
<body>
    <div class="wrapper">
        <?php include 'sidebar.php'; ?>
            <div class="dash">
                List of Banners
                <hr style="color: skyblue;">
                <div class="row">

                    <!-- Modal -->
                    <div class="modal fade" id="myModal" role="dialog">
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
                                    <label for="Banner1title" style="font-size: 14px;">Banner Title:</label>
                                    <input type="text" name="Banner1title" class="form-control form-control-sm" required>
                                </div>
                                <div class="form-group col-sm">
                                    <label for="Banner1text" style="font-size: 14px;">On Banner Text:</label>
                                    <input type="text" name="Banner1text" class="form-control form-control-sm" placeholder="enter the quote you want to show on the banner" required>
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
                        <div class="pu_title">Banner List
                          <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal" style="float: right;">Add</button>
                        </div><br>
                        <hr>
                        <?php
                            $b_up=mysqli_query($con,"SELECT * FROM `index_banner`");
                        ?>
                           <div class="pu_form">
                                <table id="dt" class="display nowrap">
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
                                                <span id="b_id" style="display: none;"><?php echo $bru['body_banner_id'];?></span>
                                                <a href="edit_banner_info.php?banner_id=<?php echo $bru['body_banner_id'];?>">
                                                    <i class="fas fa-pen-square"></i>
                                                </a>
                                            </td>
                                           <td><?php echo $bru['body_banner_title']; ?></td>
                                            <td><?php echo $bru['body_banner_text']; ?></td>
                                            <td><?php echo date('d F Y', strtotime($bru['body_banner_modified_date'])); ?>
                                            </td>
                                            <td>
                                                <?php
                                                    $bid=$bru['body_banner_id'];
                                                    $check=$bru['body_banner_status'];
                                                    if($check=='active')
                                                    {
                                                        echo '<button class="btn btn-success btn-sm changeStatus" id="confirm" onclick="return sw()" value="active">active</button>';
                                                    }
                                                    else
                                                    {
                                                        echo '<button class="btn btn-danger btn-sm" id="confirm" onclick="return sw()" value="inactive">inactive</button>';
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
<script type="text/javascript">
    $(document).ready(function(){
      $('.changeStatus').click(function(){
        var a=$(this).attr('data-id');
      });
    });

function sw(){
    var b=document.getElementById("b_id");
    var id=b.textContent;
    var url="change_status_function.php?banner_id="+id;
    $(location).attr('href',url);
}
</script>
<?php
    include 'admin_footer_scripts.php';
?>
