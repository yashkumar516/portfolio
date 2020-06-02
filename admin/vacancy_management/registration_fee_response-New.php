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
     $email=$_POST['email'];
     
    $updateStatus=  mysql_query("UPDATE job_application_form SET TxnStatus='".$TxnStatus."',TxnId='".$TxnID."',TxnAmount='".$TxnAmount."',pgTxnNo='".$pgTxnNo."',TxRefNo='".$TxRefNo."',TxMsg='".$TxMsg."'  WHERE applicationNo='".$applicationNo."'");
              
//------------------curl request for send api--------------------------------------
 $cSession = curl_init(); 
//step2
curl_setopt($cSession,CURLOPT_URL,$SendSMSurl);
curl_setopt($cSession,CURLOPT_RETURNTRANSFER,true);
curl_setopt($cSession,CURLOPT_HEADER, false); 
//step3
$result=curl_exec($cSession);
//step4
curl_close($cSession);
//step5

$email=$_POST['email'];
$to=$email;
$subject = "DPS Rohini Payment Info";
  
$content = '';
$content .= '
        <style media="screen">
table {border-collapse: collapse;}
table{width:800px; margin:0 auto;}
td{border: 1px solid #e2e2e2; padding: 10px;}
p{margin-bottom:3px; font-size:15px;}
.green_bg{background:#0b462d; color:#fff; padding:10px; text-align:center; font-weight:bold;}
.border_none{border:0;}
.main_txt{line-height:26px; text-align:center; font-weight:bold; font-size:20px;}
</style>

        ';
        /* you css */

$content .= "<html>
<head>
<title>Dear $name</title>
</head>
<body>
<p></p>
<p><h2>Dear Applicant</h2></p>
<p>Your Application No. is $applicationNo. If shortlisted you will be informed as per the schedule given on the portal about the admission procedure.</p>
<p><a href='https://dpsrohini.in/Vacancy_Management/job_application_preview-New.php?ApplicationNo=$applicationNo&TxStatus=SUCCESS'>Click here to view the complete application form</a></p>

</body>
</html>";

require_once('../html2pdf/html2pdf.class.php');

        $html2pdf = new HTML2PDF('P', 'A4', 'fr');
        $html2pdf->setDefaultFont('Arial');
        $html2pdf->writeHTML($content);



$message = "
<html>
<head>
<title>Dear $FirstName $LastName</title>
</head>
<body>
 
<p><h2>Dear Applicant</h2></p>
<p>Your Application No. is $applicationNo. Please check the portal on the date given in the schedule for the list of shortlisted students.</p>

<table>
<tr>
<th style='text-align:left'>Thanks & Regards</th>

</tr>
<tr></tr>
<tr><th style='text-align:left'>Admin</th></tr>
<tr>
<th style='text-align:left'>DPS Rohini</th>
</tr>
</table>
</body>
</html>";


$separator = md5(time());
        $eol = PHP_EOL;
        $filename = "pdf-document.pdf";
        $pdfdoc = $html2pdf->Output('', 'S');
        $attachment = chunk_split(base64_encode($pdfdoc));

 $from = 'accounts@dpsrohini.com';

$headers = "From: " . $from . $eol;
        $headers .= "MIME-Version: 1.0" . $eol;
        $headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol . $eol;


 $body = '';

        $body .= "Content-Transfer-Encoding: 7bit" . $eol;
        $body .= "This is a MIME encoded message." . $eol; //had one more .$eol


        $body .= "--" . $separator . $eol;
        $body .= "Content-Type: text/html; charset=\"iso-8859-1\"" . $eol;
        $body .= "Content-Transfer-Encoding: 8bit" . $eol . $eol;
        $body .= $message . $eol;


        $body .= "--" . $separator . $eol;
        $body .= "Content-Type: application/octet-stream; name=\"" . $filename . "\"" . $eol;
        $body .= "Content-Transfer-Encoding: base64" . $eol;
        $body .= "Content-Disposition: attachment" . $eol . $eol;
        $body .= $attachment . $eol;
        $body .= "--" . $separator . "--";

mail($to,$subject,$body,$headers);
        }
        
       

	$secret_key = "62c05b02b3788876bb14619060b879706ee6ad22";
        

	
	 
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
  <div align="center"><a href="job_application_preview.php" ><button class="btn">Preview</a></div>
 </div>
</body>
</html>

