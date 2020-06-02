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
    body{font-family:Arial; cursor:default; background-image: url("https://dpsrohini.com/images/bg.jpg");}
    .outer .inner{border:4px double #097b4d; border-radius:7px; padding:1%;}
    .outer{padding:1%;}
    .outer .inner .logo{text-align:center; width:100%; }
    .outer .inner .logo img{width:50%; height:auto; }
    .outer .inner .address font{width:100%; font-size:16px; font-weight:bold;}
    .outer .inner .head{font-size:22px; text-align:center; font-weight:600; margin-top:1%;}
	.outer .inner .text1{width:75%; margin-left:15%;}
    .outer .inner .text1 h3{font-size:18px; font-weight:bold; color:#0b462d;}
    .outer .inner .text1 ol li{font-size:15px;}
    .outer .inner .text1  ul li{font-size:15px; list-style-type:disc; line-height: 22px;}
	.outer .inner .link{text-align:center; margin-top:2%;}
    .outer .inner .link a .btnmanu{background:#097b4d; color:#fff; width:30%; height:30px; font-size:18px; font-weight:bold; border:1px solid transparent; border-radius:5px;}
    .outer .inner .link a .btnmanu:hover{background:#0b462d;}
    .logo image-rendering: {text-align: center;}
    @media only screen and (min-width:720px) and (max-width: 920px){ .outer .inner{height:380px;}
    .outer .inner .address font{font-size:14px;} .outer .inner .logo img{width:50%; margin-left:25%;}
    .outer .inner .link a .btnmanu{width:60%; font-size:15px;}  }
    @media only screen and (min-width:450px) and (max-width: 720px){.outer .inner{height:330px;}
    .outer .inner .address font{font-size:14px;} .outer .inner .logo img{width:50%; margin-left:25%;}
    .outer .inner .link a .btnmanu{width:70%; font-size:14px;} }
    @media only screen and (min-width:250px) and (max-width: 450px){.outer .inner{height:530px;}
    .outer .inner .address font{font-size:12px;} .outer .inner .logo img{width:80%; margin-left:10%;} .outer .inner .head{font-size:15px; margin:10% 0;} 
    .outer .inner .link a .btnmanu{width:100%; font-size:12px;}
    @media only screen and (max-width: 767px) {
        .outer .inner{height:100%; overflow-y:scroll;}
    }
    </style>
    <body>
    <div id="container">
     <div class="outer">
      <div class="inner">
       <div class="logo"><img src="images/logo.png" class="img-responsive"></div>
       <div class="head">JOB VACANCIES</div>
       
<div class="text1">
   <h3> A big thanks to everyone for the huge and positive response !!!! </h3><br><h3> The Vacancies section is closed for now. </h3><br>
<!--   <h3>Applicants with 1st Division / High 2nd Division, at least 5 years teaching experience in reputed institution/s and CTET/TET qualified may apply for the following vacancies:  </h3><br>-->
<!--<ol>-->
   
<!--    <li><b>PGT – Political Science :</b> M.A. in Political Science, B.Ed.</li><br>-->
<!--    <li><b>TGT – Science :</b> M.Sc in Botany / Zoology, B.Ed.</li><br>-->
<!--    <li><b>TGT – Physics :</b> M.Sc in Physics, B.Ed.</li><br>-->
<!--    <li><b>TGT – Social Science :</b> M.A. in Political Science/History,  B.Ed.</li><br>-->
<!--    <li><b>PRT – Science  :</b> B.Sc/M.Sc in Botany/Zoology/Physics/Chemistry, B.Ed. /2-year Diploma in Elementary Education / B.El.Ed.</li><br>-->
<!--    <li><b>TGT/PRT – German  :</b> B2 from Goethe Institut/ B.A. (Hons.) /M.A. in German.</li><br>-->
<!--    <li><b>TGT/PRT – Hindi :</b> M.A. in Hindi,  B.Ed.</li><br>-->
<!--    <li><b>Nursery Teacher :</b> B.A. / B.Sc , Diploma in Nursery teacher Education/Pre-School education/Early Childhood Education Programme of 2-years duration. </li><br>-->
<!--    <li><b>PRT – General  :</b> M.A. and B.Ed. </li><br>-->
<!--    <li><b>PRT - Music :</b> M.A. in Music. </li><br>-->
    
<!--  </ol>-->
<!--<ul>-->
<!--  <li><b>Salary and allowance as per Delhi Public School Society norms.</b></li>-->
<!--  <li><b>For forms and other details kindly log on to the school website: www.dpsrohini.com</b></li>-->
<!--  <li><b>Print of the application form along with acknowledgement slip of payment should be submitted at the school gate on all working days from 7:30 a.m. to 2:00 p.m.</b></li>-->
<!--</ul>-->
 </div>
 <!--<div class="link"> <a href="https://dpsrohini.in/Vacancy_Management/Instructions.php"><button class="btnmanu">CLICK HERE TO PROCEED </button></a></div>-->
     </div>
    </div>
    </body>
    </html>
