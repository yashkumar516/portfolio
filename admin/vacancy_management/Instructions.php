<?php session_start();?>
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
<html lang=''>
<head>
 <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>DPS</title><link rel="icon" href="../l.png" type="image/x-icon">   
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css" />
   <script src="../bootstrap/bootstrap.min.js"></script>
   <script src="../js/jquery.min.js"></script>
</head>
<style>
body{font-family:Arial; cursor:default; }
.outer .inner div{margin:1% 0;} .outer .inner{border:5px groove #097d4d; border-radius:5px; padding:0 1%;}
.outer{padding:1% 2%; color:#000; line-height:1.8; }
.outer .inner .logo{text-align:center; width:100%; margin-bottom:1%;}
.outer .inner .logo img{width:50%; margin-left:25%;}
.outer .inner .address font{width:100%; font-size:16px; font-weight:bold;}
.outer .inner .marque{font-size:18px; font-weight:bold; color:#F00; background:#FF0; padding:0.5%; text-align:center;}
.outer .inner .head{font-size:20px; text-align:center; text-decoration:underline; font-weight:600; color:#0b462d;}
.outer .inner .text1{font-size:18px; margin:1% 0; font-weight:bold; color:#000;}
.outer .inner .text2 h3{font-size:17px; color:#0b462d; text-decoration:underline;}
.outer .inner .text2 table{width:50%; margin-left:23%;} 
.outer .inner .text2 table tr td{font-size:16px; color:#000; padding:1% 1%; border:1px solid #063;}
.outer .inner .text2 table tr:nth-child(odd){background:#e6ffcc;} .outer .inner .text2 table tr:nth-child(even){background:#fff;}
.outer .inner .text7 table{width:100%;}

.outer .inner .text7 table tr td{font-size:17px; color:#000; padding:1%; border:none;}
.outer .inner .text7 table tr:nth-child(odd){background:#e6ffcc;} .outer .inner .text7 table tr:nth-child(even){background:#fff;}
.outer .inner .text12 h2{font-size:20px; font-weight:bold; text-decoration:underline; color:#0b462d; }
.outer .inner .text12 font{font-size:16px;}
.outer .inner .text14{font-size:18px; font-weight:bold; margin:1% 0;}
.outer .inner .text15{text-align:center;} .outer .inner .text15 input[type=checkbox]{}
.outer .inner .text15 .btnmanu{background:#097b4d; color:#fff; height:30px; font-size:17px; font-weight:600; border:1px solid Transparent; border-radius:5px;}
.outer .inner .text15 .btnmanu:hover{background:#0b462d;}
@media only screen and (min-width:720px) and (max-width: 920px){ .outer .inner{height:auto;}
.outer .inner .address font{font-size:14px;} .outer .inner .logo img{width:50%;}
.outer .inner .link a .btnmanu{width:60%; font-size:15px;}  }
@media only screen and (min-width:450px) and (max-width: 720px){.outer .inner{height:auto;}
.outer .inner .address font{font-size:14px;} .outer .inner .logo img{width:50%;} .outer .inner .text9 font .f{margin-left:74%;}
.outer .inner .text7 table{width:10%; margin-left:5%;}
.outer .inner .link a .btnmanu{width:70%; font-size:14px;} }
@media only screen and (min-width:250px) and (max-width: 450px){.outer .inner{height:auto;}
.outer .inner .address font{font-size:12px;} .outer .inner .logo img{width:80%;} .outer .inner .head{font-size:15px;} 
.outer .inner .link a .btnmanu{width:100%; font-size:12px;}
.outer .inner .text2 table, .outer .inner .text7 table, .outer .inner .text8 table{width:100%; margin-left:0%;}
}
</style>
<body>
<div id="container">
 <div class="outer">
  <div class="inner">
   <div class="logo"><img src="../images/NewLogo.jpg" class="img-responsive"></div>
     <div class="head">JOB APPLICATION FORM</div>
   <div class="text1">
     <p><strong>Please read the instructions carefully</strong> before filling in the form to avoid rejection of your form.  </p>
   </div>
     <div class="text2">
    <h3><strong>Instructions:</strong></h3>
    </div>
      
   <div class="text7">
    <table>
	<tr><td>1.</td><td>The fields marked with <strong>*</strong> are mandatory.</td></tr>
<tr><td>2.</td><td>Please check all the details and spellings before submitting the page.</td></tr>
<tr><td>3.</td><td> 
Applicants are requested to clearly indicate the <strong>post applied for</strong>.
</td></tr>
     <tr><td>4.</td><td>Use only <strong>JPEG format</strong> to upload the photograph. </td></tr>
<tr><td>5 (A).</td><td>For <strong>Online Payment</strong> click on the `SUBMIT` button after completing the Job Application Form to proceed for payment. </td></tr>
<tr><td>5 (B).</td><td>For <strong>Offline Payment</strong> clickk on `SUBMIT` button after filling in the Pay Order details in the Job Application to Proceed for printing. </td></tr>
<tr><td>6 (A).</td><td>Keep your credit card, debit card and other banking details handy while filling the Job Application Form. The payment on this website is secure and the school does not store any banking related information. </td></tr>
<tr><td>6 (B).</td><td>Keep your Pay Order ready while filling the Job Application Form.</td></tr>
<tr><td>7.</td><td>Job application fee of <strong>INR 100</strong> is <strong>Non-Refundable</strong>.</td></tr>
<tr><td>8.</td><td>The application shall be considered only after <strong>successful payment</strong>.</td></tr>
<tr><td>9.</td><td>After successful payment an acknowledgement will be generated online.</td></tr>
<tr><td>10 (A).</td><td>Applicants need to download the Complete Job Application form along with the Payment Acknowledgement using the download button.</td></tr>
<tr><td>10 (B).</td><td>Applicants need to download and print the Complete Job Application form along with the Payment Acknowledgement using the download button.</td></tr>
<tr><td>11 (A).</td><td>A print of the completed Application Form should be <strong>submitted at the school gate</strong> along with the Payment Acknowledgement slip of INR 100 during school hours, i.e, 7:30 am to 2:00 pm.</td></tr>
<tr><td>11 (B).</td><td>A print of the completed Application Form should be <strong>submitted at the school gate</strong> along with the Pay Order of INR 100 during school hours, i.e, 7:30 am to 2:00 pm.</td></tr>
<tr><td>12.</td><td>Incomplete forms will not be accepted by the system.   </td></tr>
<tr><td>13.</td><td>Please ensure that you have a stable internet connection while filling the application form.  </td></tr>
<tr><td>14.</td><td>Please note that submission of Job Application Form does not guarantee the Job.  </td></tr>
<tr><td>15.</td><td>Only shortlisted candidates will be informed about the interview. (Shortlisted candidates will be informed through phone calls.)</td></tr>
<tr><td>16.</td><td>No queries related to this application will be entertained.</td></tr>
<tr><td>17.</td><td>Shortlisted applicants need to bring all original & other relevant documents along with them on the interaction date.</td></tr>
 </table>
  </div>
  <div class="text12">
   <h2><b>Documents required (Scanned copy) :</b></h2>
   <ul>
<li>Age Proof</li>
<li>Photograph of Applicant</li>
 <li>Class X Mark sheet</li>
 <li>Class XII Mark sheet</li>
 <li>Graduation Mark sheet</li>
<li>Post-Graduation Mark sheet</li>
 <li>B.Ed. Mark sheet</li>
 <li>CTET Mark sheet</li>
</ul>
   </div>
  <div class="text12">
   <h2><b>Application Procedure at a glance - <strong><u>ONLINE PAYMENT</u></strong></b></h2>
 <ul>
<li>Fill the application form.</li>
<li>Upload scanned copies of relevant documents.</li>   
<li>Click on SUBMIT button for Online payment of Application Fee.</li>
<li>Generation of ‘Payment Acknowledgement Slip’ after successful payment.</li>   
<li>Download the Job Application and the Payment Acknowledgement Slip.</li>
<li>Submit the Job Application and the Payment Acknowledgement Slip at the school gate.</li>
</ul>

<h2><b>Application Procedure at a glance - <strong><u>OFFLINE PAYMENT</u></strong></b></h2>
 <ul>
 <li>Prepare a Pay Order of INR 100 in favour of DELHI PUBLIC SCHOOL, ROHINI.</li>
<li>Fill the online application form along with Pay Order details.</li>
<li>Upload scanned copies of relevant documents.</li>   
<li>Click on SUBMIT button to get the print of submitted form.</li>
<li>Submit the print out of Job Application along with the pay order at the school gate.</li>
</ul>
   <form method="post" action="https://dpsrohini.in/Vacancy_Management/job_application_form-New.php">
  </div>
    <div class="text14"> <input type="checkbox" name="iagree" id="iagree" required>&nbsp;&nbsp;&nbsp;I have read and agree to the terms. </div>
  <div class="text15"> <input type="submit" name="proceed" value="Proceed" class="btnmanu"></div>
 </div>
 </form>
</div>
</body>
</html>