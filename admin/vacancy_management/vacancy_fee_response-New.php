<?php
	session_start();
	include '../../include/Confile.php';    
	
?>
 <?php
 


if($_POST['TxStatus']){ 

    $TxnStatus=$_POST['TxStatus'];
    $TxnID=$_POST['TxId'];
    $smobile=$_POST['mobileNo'];
    $name=$_POST['name'];
    $applicationNo=$_POST['TxId'];
    $_SESSION['applicationNo']=$applicationNo;
    $pgTxnNo=$_POST['pgTxnNo'];
    $TxnAmount=$_POST['amount'];
    $TxRefNo=$_POST['TxRefNo'];
    $TxMsg=$_POST['TxMsg'];
    
    $updateStatus=  mysql_query("UPDATE job_application_form SET TxnStatus='".$TxnStatus."',TxnId='".$TxnID."',TxnAmount='".$TxnAmount."',pgTxnNo='".$pgTxnNo."',TxRefNo='".$TxRefNo."',TxMsg='".$TxMsg."'  WHERE applicationNo='".$applicationNo."'");
              

       
	$secret_key = "62c05b02b3788876bb14619060b879706ee6ad22";
        
}
	
	 
 ?>
 <script type="text/javascript">
    function clickIE4(){
    if (event.button==2){
    return false;
    }
    }
    function clickNS4(e){
    if (document.layers||document.getElementById&&!document.all){
    if (e.which==2||e.which==3){
    return false;
    }
    }
    }
    if (document.layers){
    document.captureEvents(Event.MOUSEDOWN);
    document.onmousedown=clickNS4;
    }
    else if (document.all&&!document.getElementById){
    document.onmousedown=clickIE4;
    }
    document.oncontextmenu=new Function("return false")
    function disableselect(e){
    return false
    }
    function reEnable(){
    return true
    }
    //if IE4+
    document.onselectstart=new Function ("return false")
    //if NS6
    if (window.sidebar){
    document.onmousedown=disableselect
    document.onclick=reEnable
    }
    document.onkeydown = function(e) {
        if (e.ctrlKey &&
            (e.keyCode === 67 ||
             e.keyCode === 86 ||
             e.keyCode === 85 ||
             e.keyCode === 117)) {
            alert('not allowed');
            return false;
        } else {
            return true;
        }
};
</script>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Language" content="en-us">

<title>DPS Submition Detail</title>
<link rel="stylesheet" href="../bootstrap/bootstrap.min.css" />
    <script src="../bootstrap/bootstrap.min.js"></script>
</head>
<style>
body{font-family:Arial;}
#container{margin:5% 23%; line-height:2;  font-size:16px; border:5px groove #0b462d; border-radius:5px; padding:1%;}
#container img{width:80%;}
.head {font-family:Arial; font-style:italic; font-size:18px; font-weight:bold; margin-bottom:1%; }
.inner{padding:1% 2%;} .text1{text-align:center}
.text2{margin:1% 0; background:#0b462d; padding:0.5%; text-align:center; color:#fff; font-size:18px; font-weight:bold;}
.col-xs-6:nth-child(odd){font-weight:bold;}
.col-xs-6{margin:0.7% 0;}
.text3{font-size:16px; font-weight:bold; margin:1% 0; background:#0b462d; color:#fff; text-align:center;}
@media only screen and (min-width:400px) and (max-width: 720px){#container{margin:1% 5%; font-size:14px;} .head{font-size:16px;}
.text2{font-size:16px;} .text3{font-size:16px;}}
@media only screen and (min-width:200px) and (max-width: 400px){#container{margin:5% 5%; font-size:12px;} .head{font-size:14px;}
.text2{font-size:14px;} .text3{font-size:14px;} .xs{font-size:10px;} }	
</style>
<body>
    <?php //echo "<pre />";print_r($_POST);die; ?>
 <div id="container">
  <div align="center"><img src="../images/NewLogo.jpg" /></div>
  <div class="inner">
      <?php if($_POST['TxStatus']=="SUCCESS"){ ?>
    <div class="text1"><i>Your form has been successfully submitted.<br></i><br> Your Application Number is <b><?php echo $_POST['TxId']; ?>.</b>
</div>
      <div class="text2"><font><b>Transaction details </b></font></div>
    <div class="row" >
     <div class="col-xs-6"> Transaction Number :</div>
     <div class="col-xs-6"><?php echo $_POST['pgTxnNo']; ?></div>
    </div>
    <div class="row" >
     <div class="col-xs-6 xs"> Transaction Reference ID :</div>
     <div class="col-xs-6"><?php echo $_POST['TxRefNo']; ?></div>
    </div>
    <div class="row" >
     <div class="col-xs-6"> Amount :</div>
     <div class="col-xs-6"><?php echo $_POST['amount']; ?></div>
    </div>
    <div class="row" >
     <div class="col-xs-6"> Status :</div>
     <div class="col-xs-6"><?php echo $_POST['TxMsg'];; ?></div>
    </div>
          <div class="text3">Only shortlisted applicants will be informed through calls.<br>
    No Queries related to this application will be entertained. </div>
      <?php }else{ ?>
       <div class="head">Sorry !</div>
       <div class="text1"><i>Your Payment Process is not completed.</i><br> <b> Please try Again!!!</b></div>
        <div class="text3">No Queries related to this application will be entertained. </div>
          <?php } ?>
  

  </div>
  <div align="center"><a href="job_application_preview-New.php" ><button class="btn">Preview</	a></div>
 </div>
</body>
</html>

