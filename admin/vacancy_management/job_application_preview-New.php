<?php
	 session_start();
	include '../../include/Confile.php';    
	
       
         $applicationNo= $_SESSION['applicationNo'];
        
        $data=mysql_query("SELECT `applicationNo`,`receivedon`,`postapplied`,`subject`,`name`,`dob`,`nationality`,`age`,`maritalstatus`,`gender`,`father_spousename`,`childrenname1`,`childrendob1`,`childrenclass1`,`childrenschool1`,`childrenname2`,`childrendob2`,`childrenclass2`,`childrenschool2`,`presentaddress`,`emailid`,`presentmobileno`,`presenttelno`,`permanentaddress`,`permanenttelno`,`permanentmobileno`,`examination1`,`year1`,`marksGrades1`,`division1`,`percentage1`,`schoolCollegeAttended1`,`university1`,`subjects1`,`examination2`,`year2`,`marksGrades2`,`division2`,`percentage2`,`schoolCollegeAttended2`,`university2`,`subjects2`,`examination3`,`year3`,`marksGrades3`,`division3`,`percentage3`,`schoolCollegeAttended3`,`university3`,`subjects3`,`examination4`,`year4`,`marksGrades4`,`division4`,`percentage4`,`schoolCollegeAttended4`,`university4`,`subjects4`,`examination5`,`year5`,`marksGrades5`,`division5`,`percentage5`,`schoolCollegeAttended5`,`university5`,`subjects5`,`examination6`,`year6`,`marksGrades6`,`division6`,`percentage6`,`schoolCollegeAttended6`,`university6`,`subjects6`,`examination7`,`year7`,`marksGrades7`,`division7`,`percentage7`,`schoolCollegeAttended7`,`university7`,`subjects7`,`institutionname1`,`post1`,`fromdate1`,`todate1`,`noofyear_month1`,`subject1`,`class1`,`institutionname2`,`post2`,`fromdate2`,`todate2`,`noofyear_month2`,`subject2`,`class2`,`institutionname3`,`post3`,`fromdate3`,`todate3`,`noofyear_month3`,`subject3`,`class3`,`institutionname4`,`post4`,`fromdate4`,`todate4`,`noofyear_month4`,`subject4`,`class4`,`institutionname5`,`post5`,`fromdate5`,`todate5`,`noofyear_month5`,`subject5`,`class5`,`totalexperience`,`experiencemonth`,`experiencedate`,`workshopCourseYear1`,`workshopCourseDuration1`,`workshopCourseInstitute1`,`workshopCourseWorkshopname1`,`workshopCourseYear2`,`workshopCourseDuration2`,`workshopCourseInstitute2`,`workshopCourseWorkshopname2`,`workshopCourseYear3`,`workshopCourseDuration3`,`workshopCourseInstitute3`,`workshopCourseWorkshopname3`,`adExPeriod1`,`adExdesignation1`,`adExResponsibility1`,`adExPeriod2`,`adExdesignation2`,`adExResponsibility2`,`terminationReason`,`terminationSalaryScale`,`terminationBasicSalary`,`terminationPlusAllowance`,`terminationTotal`,`foreginlanguage`,`certification`,`countriesVisited`,`majorAchievement1`,`majorAchievement2`,`majorAchievement3`,`extracurricular1`,`extracurricular2`,`extracurricular3`,`referencePersonName1`,`referencePersonDesignation1`,`referencePersonTelNo1`,`referencePersonAddress1`,`referencePersonName2`,`referencePersonDesignation2`,`referencePersonTelNo2`,`referencePersonAddress2`,`age_proof`,`class10_marksheet`,`class12_marksheet`,`graduation_marksheet`,`post_graduation_marksheet`,`B_ed_marksheet`,`ctet_marksheet`,`exactPeriodjoin`,`remarks`,`filling_date`,`profilephoto` FROM job_application_form WHERE applicationNo=$applicationNo");
        $resultSet=  mysql_fetch_array($data);
       // echo "<pre />";print_r($resultSet);die;
        
        
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
<script>
function CalculateAgeInQC() 
{
    
     if(document.getElementById("dob").value=="")
     {
     	alert("Please enter Date of Birth!");
     	return;
     }
     document.getElementById("age").value="Please Wait";
     try
		    {    
				// Firefox, Opera 8.0+, Safari    
				xmlHttp=new XMLHttpRequest();
			}
		  catch (e)
		    {    // Internet Explorer    
				try
			      {      
					xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
				  }
			    catch (e)
			      {      
					  try
				        { 
							xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
						}
				      catch (e)
				        {        
							alert("Your browser does not support AJAX!");        
							return false;        
						}      
				  }    
			 } 
			 xmlHttp.onreadystatechange=function()
		      {
			      if(xmlHttp.readyState==4)
			        {
						var rows="";
			        	rows=new String(xmlHttp.responseText);
						document.getElementById("age").value=rows;											
			        }
		      }
			var submiturl="CalculateAge.php?DateOfBirth=" + document.getElementById("dob").value;
			xmlHttp.open("GET", submiturl,true);
			xmlHttp.send(null);
}
</script>


<html lang=''>
<head>
 <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="../bootstrap/bootstrap.min.css" />
   <script src="../bootstrap/bootstrap.min.js"></script>
  <style> 
    body{font-family:Arial, Helvetica, sans-serif!important;} .row{padding:0; margin:0;}
    .text-box{width:80%; border:1px solid #c8c8c8; border-radius:5px; height:30px; padding:0.5% 1%;}
	input:focus, textarea:focus{outline:none;}
    .text-box1{width:80%; border:1px solid #c8c8c8; border-radius:5px; height:auto; padding:0.5% 1%;}
    .head{} .head .img img{width:50%;} .imp #dvPreview p{margin:42% 0;}
    .head .col-md-3{padding:1% 0;} .imp #dvPreview img{width:130px; height:130px; margin-bottom:0.5%} .s_box{width:100%; opacity:0.7;}
	.xss{padding:1.5% 0;} .xss .col-xs-3, .xss .col-xs-6{margin:2% 0;} .imp1{text-align:right; text-align: -webkit-right;}
	.headmain{text-align:center; border-top:1px solid #0b462d; background:#0b462d; color:#fff; padding:0.3% 0; font-size:24px; font-weight:bold;}
	.text01{border-bottom:1px solid #0b462d; padding:0 1%;}
    .text01 .imp{border:1px solid #c8c8c8; border-radius:5px; padding:0 0.5%; height:160px; width:140px; text-align:center; margin-right:15%;}
    #hidden{display:none;}
    .text{padding:0.5% 1%; border-bottom:1px solid #0b462d;} .text .text-box{width:50%;}
    .col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12
	{margin:0.5% 0; font-size:14px;}
    .text1, .text2, .text3, .text4, .text5, .text6, .text10, .text11{padding:0 1% 0.5% 1%;}
	.text2 .row div{border:1px solid #c8c8c8; margin:0; padding:0.5% 0.5%; height:45px;} .text2 .row{padding:0; margin:0;} .text2 #show div{height:35px;}
	.text3 .row div{border:1px solid #c8c8c8; margin:0; padding:0.5% 0.5%; height:45px;} .text3 .row{padding:0; margin:0;} 
	.text3 #show div{height:72px;} .text3 #show div .col-xs-6, .text3 #show div .col-xs-12{height:36px;} .text3 #show .cxs{padding:0; border:none;}
    .text1 .col-xs-3:nth-child(odd){font-weight:normal;} .text1 .text-box{width:100%;}
    .text1 .head1, .text2 .head2, .text3 .head2, .text5 .head2, .text6 .head2, .text10 .head2, .text11 .head2, .text12 .head2
    {font-weight:bold; font-size:16px; color:#fff; padding:0.3% 1%; margin:0.5% 0; background-color:rgba(11, 70, 45, 0.84);}
    .text1 .text111 #show {font-weight:bold;} .text1 .text111{padding:0.5% 0;} 
    .text2 #show{font-weight:bold;} .text2 .col-xs-1, .text2 .col-xs-2{padding:0 0.5%;} .text2 .row{padding:0 1%;}
    .text2 .text-box{width:100%;} #show div{font-weight:bold;}
    .text3 #show{font-weight:bold;} .text3 .row{padding:0 1% 0 0;} .text3 .row div{text-align:center;} 
    .text3 .col-xs-1, .text3 .col-xs-2, .text3 .col-xs-3{padding:0 0.5%; margin:0.1% 0;}  .text3 .text-box{width:100%;}
    .text4 #show{font-weight:bold;} .text4 .col-xs-1, .text4 .col-xs-2{padding:0 0.5%;} .text4 .row{padding:0 1%;} .text4 .text-box{width:70%;}
    .text5 #show{font-weight:bold;} .text5 .col-xs-1, .text5 .col-xs-2{padding:0 0.5%;} .text5 .row{padding:0 1%;} .text5 .text-box{width:90%;}
    .text6 #show{font-weight:bold;} .text6 .col-xs-1, .text6 .col-xs-2{padding:0 0.5%;} .text6 .row{padding:0 1%;} .text6 .text-box{width:90%;}
    .text7 .col-xs-3:nth-child(odd){font-weight:normal;} .text7{padding:0.5% 0 0.5% 2%;}
    .text8 .col-xs-3:nth-child(odd){font-weight:normal;} .text8{padding:0.5% 0 0.5% 1%;}
    .text9 .col-xs-3:nth-child(odd){font-weight:normal;} .text9{padding:0.5% 0 0.5% 1%;}
    .text10 .col-xs-3:nth-child(odd){font-weight:normal;} .text10{padding:0.5% 0 0.5% 1%;}
    .text11 .col-xs-6 div:first-child{font-weight:normal;} .text11{padding:0.5% 0 0.5% 1%;}
    .text11 .col-xs-6 .he2{text-align:center; border-bottom:1px solid #097b4d; font-size:16px;}
    .text12 .col-xs-3:nth-child(odd){font-weight:normal;} .text12{padding:0.5% 0 0.5% 1%;} .text12 .text-box1{width:38%;}
	.text121 .col-xs-3:nth-child(odd){font-weight:normal;} .text121{padding:0.5% 0 0.5% 1%;} .text121 .text-box1{width:80%;}
    .text13{padding:0 1% 0% 1%; border-bottom:1px solid #0b462d; line-height:1.7} .text13 .head3{font-weight:bold; font-size:15px; text-transform:uppercase} .text13 ol li{font-size:14px;}
    .text14 .col-xs-2{font-weight:bold;} .text14{padding:0.5% 0 0.5% 1%;}
	.text15 .row{padding:0 1%;}
    .btn{background:#0b462d; color:#fff; margin:1% 0;} .btn:hover{background:#097b4d; color:#fff;}
	@media only screen and (min-width:200px) and (max-width: 750px){.text2 #show{display:none !important;} .text2 #hidden{display:block !important;} }
    @media only screen and (min-width:450px) and (max-width: 700px){.text{float:left;} .text .col-xs-4{width:33%; float:left;} 
	.text .col-xs-4 .text-box{width:90%;} .head .img img{width:80%;} .head .imp{margin-left:37%;} 
	.text111 .col-xs-1, .xs1, .text5 .col-xs-1, .text1 .col-xs-6, .text4 .col-xs-3{width:100%!Important;} .xsss, .xsss1{width:50%!Important;}
	.text1 .col-xs-3, .text111 .col-xs-3, .text111 .col-xs-2, .text2 .col-xs-1, .text2 .col-xs-2, .text3 .col-xs-1, .text3 .col-xs-2, .text3 .col-xs-3,
	.text4 .col-xs-3, .text5 .col-xs-2, .text5 .col-xs-3, .text5 .col-xs-4, .text6 .col-xs-1, .text6 .col-xs-2, .text6 .col-xs-4, .text6 .col-xs-5, .text7 .col-xs-3, .text8 .col-xs-3, .text9 .col-xs-3, .text12 .col-xs-3, .text14 .col-xs-3, .text14 .col-xs-2, .text1 .col-xs-6 .col-xs-3, .text1 .col-xs-6 .col-xs-6, .text121 .col-xs-3{width:49%; float:left ; padding:0.5%; font-size:14px; }  
	.text111 #show, .text2 #show, .text3 #show, .text5 #show, .text6 #show, .hed1{display:none;} 
	.text111, .text2, .text3{float:left;} .head2{width:100%;}
	.text01 .imp{text-align:center !important; text-align: -webkit-center !important; margin-right: 0%;}
	.text111 #hidden, .text2 #hidden, .text3 #hidden, .text5 #hidden, .text6 #hidden{display:block; font-weight:bold;} 
	.text3 .row div{text-align:left;} .text4 .text-box{width:50%;} .xs2{margin-bottom:-2%;} .text12 .xs3{margin:2% 0;}
	.text10 .col-xs-4{width:80%;} .text9 .col-xs-4{width:80%;}
	.text11 .col-xs-6{width:100%;} .text11 .col-xs-6 .col-xs-6{width:50%;} .text121 .col-xs-3 .text-box1{width:80%;}
	.xss{padding:0% 0;} .xss .col-xs-3, .xss .col-xs-6{margin:0% 0;} .xss1{display:none;} .xsx{width:100% !important;}
	.text01 .col-xs-6{width:100%;} .text01 .col-xs-6 .col-xs-3, .text01 .col-xs-6 .col-xs-6{width:50%; margin:0.5% 0;}
	.text01{border-bottom:1px solid #0b462d;} .text2 .text-box, .text3 .text-box{width:80%;}
	.text1 .head1, .text2 .head2, .text3 .head2, .text5 .head2, .text6 .head2, .text10 .head2, .text11 .head2, .text12 .head2
	{font-size:15px; text-align:center} .head .headmain{font-size:17px;}
	.text2 .row div, .text3 .row div{height:auto; border:none;}
	.text2 .row, .text3 .row, .text111 .row, .text5 .row, .text6 .row{border-bottom:1px solid #0b462d;} 
	.text2 .row:last-child, .text111 .row:last-child, .text5 .row:last-child{border:none;}
    }
	@media only screen and (min-width:200px) and (max-width: 450px){
	.text01 .col-xs-6{width:100%;} .text01 .col-xs-6 .col-xs-3, .text01 .col-xs-6 .col-xs-6{width:50%; margin:0.5% 0; padding:0;}
	.text01{border-bottom:1px solid #0b462d;} .text01 .col-xs-6 .col-xs-6 .text-box{width:95%;}
	.text{float:left;} .text .col-xs-4{width:100%; float:left;} .text .col-xs-4 .text-box{width:90%;} .head .img img{width:100%;} 
	.head .imp{margin-left:30%;} 
	.text1 .text-box, .text5 .text-box, .text6 .text-box, .text7 .text-box, .text11 .text-box, .text121 .text-box, .text14 .text-box{width:100%;} 
	.text1 .text-box1, .text121 .col-xs-3 .text-box1{width:100%;}
	.text111 .col-xs-1, .xs1, .text5 .col-xs-1, .text1 .col-xs-6, .xsss, .xsss1, .text4 .col-xs-3{width:100%!Important;}
	.text1 .col-xs-3, .text111 .col-xs-3, .text111 .col-xs-2, .text2 .col-xs-1, .text2 .col-xs-2, .text3 .col-xs-1, .text3 .col-xs-2, .text3 .col-xs-3,  .text5 .col-xs-2, .text5 .col-xs-3, .text5 .col-xs-4, .text6 .col-xs-1, .text6 .col-xs-2, .text6 .col-xs-4, .text6 .col-xs-5, .text7 .col-xs-3, .text8 .col-xs-3, .text12 .col-xs-3, .text14 .col-xs-3, .text14 .col-xs-2, .text1 .col-xs-6 .col-xs-3, .text1 .col-xs-6 .col-xs-6, .text121 .col-xs-3
	{width:49%; float:left ; padding:0.5%; font-size:14px; font-size:12px !important; }  
	.text4 .col-xs-3{width:100%;} .text4 .col-xs-3 .text-box{width:70%;}
    .text9 .col-xs-3{width:100%;} .text121{margin:1% 0;} .text13 ol li{font-size:12px;} 
	.text111 #show, .text2 #show, .text3 #show, .text5 #show, .text6 #show, .hed1{display:none;} 
	.text111, .text2, .text3{float:left;} .head2{width:100%;} 
	.text01 .imp{text-align:center !important; text-align: -webkit-center !important; margin-right: 25%;}
	.text111 #hidden, .text2 #hidden, .text3 #hidden, .text5 #hidden, .text6 #hidden{display:block; font-weight:bold;} 
	.text3 .row div{text-align:left;} .text4 .text-box{width:50%;} .xs2{margin-bottom:-2%;} .text12 .xs3{margin:2% 0;}
	.text10 .col-xs-4{width:80%;} .text11 .col-xs-6{width:100%;} .text11 .col-xs-6 .col-xs-6{width:50%;} .text12 .text-box1{width:80%;}
	.xs5{margin:1% 0 !important;} .xs6{margin:2% 0 !important;} .xs7{margin:4% 0 !important;}
	.xss{padding:0% 0;} .xss .col-xs-3, .xss .col-xs-6{margin:0% 0;} .xss1{display:none;} .xsx{width:100% !important;}
	.text1 .head1, .text2 .head2, .text3 .head2, .text5 .head2, .text6 .head2, .text10 .head2, .text11 .head2, .text12 .head2
	{font-size:14px; text-align:center} .head .headmain{font-size:16px;}
	.text2 .row div, .text3 .row div{height:auto; border:none;}  .text9 .col-xs-4{width:80%;}
	.text2 .row, .text3 .row, .text111 .row, .text5 .row, .text6 .row{border-bottom:1px solid #0b462d;} 
	.text2 .row:last-child, .text111 .row:last-child, .text5 .row:last-child{border:none;}
    }
    @media only screen and (width:640px){.text{float:left;} .text .col-xs-4{width:33%; float:left;} .text .col-xs-4 .text-box{width:90%;} .head .img img{width:100%;} .head .imp{margin-left:37%;} .text111 .col-xs-1, .xs1, .text5 .col-xs-1, .text1 .col-xs-6, .text4 .col-xs-3{width:100%!Important;}
	.text1 .col-xs-3, .text111 .col-xs-3, .text111 .col-xs-2, .text2 .col-xs-1, .text2 .col-xs-2, .text3 .col-xs-1, .text3 .col-xs-2, .text3 .col-xs-3,
	.text4 .col-xs-3, .text5 .col-xs-2, .text5 .col-xs-3, .text5 .col-xs-4, .text6 .col-xs-1, .text6 .col-xs-2, .text6 .col-xs-4, .text6 .col-xs-5, .text8 .col-xs-3, .text9 .col-xs-3, .text12 .col-xs-3, .text14 .col-xs-3, .text14 .col-xs-2, .text1 .col-xs-6 .col-xs-3, .text1 .col-xs-6 .col-xs-6{width:49%; float:left ; padding:0.5%; font-size:14px; }  
	.text111 #show, .text2 #show, .text3 #show, .text5 #show, .text6 #show, .hed1{display:none;} .xsss, .xsss1{width:50%!Important;}
	.text111, .text2, .text3{float:left;} .head2{width:100%;} .imp1{text-align:center; text-align: -webkit-center; }
	.text111 #hidden, .text2 #hidden, .text3 #hidden, .text5 #hidden, .text6 #hidden{display:block; font-weight:normal;} 
	.text3 .row div{text-align:left;} .text4 .text-box{width:50%;} .xs2{margin-bottom:-2%;} .text12 .xs3{margin:2% 0;}
	.text10 .col-xs-4{width:80%;} .text11 .col-xs-6{width:100%;} .text11 .col-xs-6 .col-xs-6{width:50%;} .text12 .text-box1{width:80%;}
	.xss{padding:0% 0;} .xss .col-xs-3, .xss .col-xs-6{margin:0% 0;} .xss1{display:none;} .xsx{width:100% !important;}
	.text2 .row div{height:auto; border:none;} .text9 .col-xs-4{width:80%;}
	.text7 .col-xs-3{width:49%; float:left ; padding:0.5% 0; font-size:14px; } .text7 .col-xs-3 .text-box{width:85%;}
	.text2 .row, .text3 .row, .text111 .row, .text5 .row, .text6 .row{border-bottom:1px solid #0b462d;} 
	.text2 .row:last-child, .text111 .row:last-child, .text5 .row:last-child{border:none;}
	}	 
          
  </style>

</head>
<body>
<div id="container">
<form action="vacency_payment-New.php" method="post" enctype="multipart/form-data">
 <div class="head">
  <div class="row">
   <div class="col-md-12" align="center">
    <div class="img" align="center"><img src="../images/NewLogo.jpg" class="img-responsive" /></div>
   </div>
  </div>
  <div class="row headmain">JOB APPLICATION FORM </div>
 </div>
 <div class="text13">
  <div class="head3">Note :</div>
  <ol>
   <li>Candidates are requested to clearly indicate the post applied for.</li>
   <li><b>A print of duly complete Application form should be downloaded and submitted at the school office along with the acknowledgement slip for payment of Rs 100.</b></li>
   <li>Only shortlisted candidates will be called for interview. If shortlisted, the applicant is required to bring along all originals of the documents uploaded and other relevant documents.</li>
  </ol>
 </div>
 <div class="text01">
  <div class="row">
   <div class="col-xs-6 xss">
    <div class="row">
     <div class="col-xs-3"><b>Application No. :</b><br /><font class="if" style="font-size:9px">(generated by the system)</font></div>
     <div class="col-xs-3 xss1">&nbsp;</div>
     <div class="col-xs-6"><input type="text" name="serialno" id="serialno" value="<?php echo $resultSet['applicationNo']; ?>" class="text-box" readonly /></div>
    </div>
    <div class="row">
     <div class="col-xs-3"><b>Received on :</b><br /><font class="if" style="font-size:9px">(For office use)</font></div>
     <div class="col-xs-3 xss1">&nbsp;</div>
     <div class="col-xs-6"><input type="text" name="receivedon" id="receivedon" class="text-box" value="<?php echo $resultSet['filling_date']; ?>" readonly /></div>
    </div>
   </div>
   <div class="col-xs-6 imp1">
    <div class="imp">
     <div id="dvPreview"><img src="../../Vacancy_Management/Documents/<?php echo $resultSet['profilephoto']; ?>" alt="" ></div>   
     
    </div>
   </div>
  </div>
 </div>
 <div class="text1">
  <div class="row">
   <div class="col-xs-3">Post Applied for*</div>
   <div class="col-xs-3"><input type="text" name="postapplied" id="postapplied" class="text-box" value="<?php echo $resultSet['postapplied']; ?>" readonly /></div>
    <div class="col-xs-3">Subject*</div>
    <div class="col-xs-3"><input type="text" name="subject" id="subject" class="text-box" value="<?php echo $resultSet['subject']; ?>" readonly="true"/></div>
     </div>
  <div class="row">
  <div class="col-xs-3">Name* :</div>
  <div class="col-xs-3"><input type="text" name="name" id="name" class="text-box" value="<?php echo $resultSet['name']; ?>" readonly="true"/></div>
   <div class="col-xs-3">Date of Birth*</div>
   <div class="col-xs-3"><input type="date" name="dob" id="dob" class="text-box" value="<?php echo $resultSet['dob']; ?>" readonly="true"/></div>
     </div>
  <div class="row">
   <div class="col-xs-3">Nationality*</div>
   <div class="col-xs-3"><input type="text" name="nationality" id="nationality"  class="text-box" value="<?php echo $resultSet['nationality']; ?>" readonly="true"/></div>
   <div class="col-xs-3">Age*</div>
   <div class="col-xs-3"> <input name="age" id="age" type="text"  class="text-box" value="<?php echo $resultSet['age']; ?>" onClick="javascript:CalculateAgeInQC();" readonly="true" /></div>
  </div>
  <div class="row">
   <div class="col-xs-3">Marital Status*</div>
   <div class="col-xs-3"><input type="text" name="maritalsatus" id="maritalsatus" class="text-box" value="<?php echo $resultSet['maritalstatus']; ?>" readonly="true"/></div>
   <div class="col-xs-3">Gender*</div>
   <div class="col-xs-3"><input type="text" name="gender" id="gender"  class="text-box" value="<?php echo $resultSet['gender']; ?>" readonly="true"/></div>
  </div>
  <div class="row">
   <div class="col-xs-3">Present Address*</div>
   <div class="col-xs-3"><textarea name="presentaddress" id="presentaddress"  class="text-box1"  rows="2" readonly="true"><?php echo $resultSet['presentaddress']; ?></textarea></div>
   <div class="col-xs-3">Telephone No</div>
   <div class="col-xs-3"><input type="number" id="presenttelno" name="presenttelno"  class="text-box" value="<?php echo $resultSet['presenttelno']; ?>" readonly="true" /></div>
  </div>
  <div class="row">
   <div class="col-xs-3">Mobile No*</div>
   <div class="col-xs-3"><input type="number" id="presentmobileno" name="presentmobileno"  class="text-box" value="<?php echo $resultSet['presentmobileno']; ?>" readonly="true"/></div>
   <div class="col-xs-3">E-mail id*</div>
   <div class="col-xs-3"><input type="email" id="emailid" name="emailid"  class="text-box" value="<?php echo $resultSet['emailid']; ?>" readonly="true"/></div>
  </div>
  <div class="row">
   <div class="col-xs-3">Permanent Address<br /><font class="if" style="font-size:9px">(If different from Present Address)</font></div>
   <div class="col-xs-3"><textarea name="permanentaddress" id="permanentaddress"  class="text-box1" value="" rows="2" readonly="true"><?php echo $resultSet['permanentaddress']; ?></textarea></div>
   <div class="col-xs-3">Telephone No</div>
   <div class="col-xs-3"><input type="number" id="permanenttelno" name="permanenttelno"  class="text-box" value="<?php echo $resultSet['permanenttelno']; ?>" readonly="true" /></div>
  </div>
  <div class="row">
   <div class="col-xs-3">Mobile No</div>
   <div class="col-xs-3"><input type="number" id="permanentmobileno" name="permanentmobileno"  class="text-box" value="<?php echo $resultSet['permanentmobileno']; ?>" readonly="true" /></div>
   <div class="col-xs-3">Father's / Spouse's Name*</div>
   <div class="col-xs-3"><input type="text" name="father_spousename" id="father_spousename"  class="text-box" value="<?php echo $resultSet['father_spousename']; ?>" readonly="true" /></div>
    </div>
  <div class="text111">
    <div class="head1">Details of Children</div>
    <div class="row" id="show">
     <div class="col-xs-3">Name</div>
     <div class="col-xs-3">Date of Birth</div>
     <div class="col-xs-3">Class</div>
     <div class="col-xs-3">School</div>
    </div>
    <div class="row">
     <div class="col-xs-1" id="hidden">1.</div>
     <div class="col-xs-3" id="hidden">Name</div>
     <div class="col-xs-3"><input type="text" name="childrenname1" id="childrenname1"  class="text-box" value="<?php echo $resultSet['childrenname1']; ?>" readonly="true" /></div>
     <div class="col-xs-3" id="hidden">Date of Birth</div>
     <div class="col-xs-3"><input type="date" name="childrendob1" id="childrendob1"  class="text-box" value="<?php echo $resultSet['childrendob1']; ?>" readonly="true" /></div>
     <div class="col-xs-3" id="hidden">Class</div>
     <div class="col-xs-3"><input type="text" name="childrenclass1" id="childrenclass1"  class="text-box" value="<?php echo $resultSet['childrenclass1']; ?>" readonly="true" /></div>
     <div class="col-xs-3" id="hidden">School</div>
     <div class="col-xs-3"><input type="text" name="childrenschool1" id="childrenschool1"  class="text-box" value="<?php echo $resultSet['childrenschool1']; ?>"  readonly="true"/></div>
    </div>
    <div class="row">
     <div class="col-xs-1" id="hidden">2.</div>
     <div class="col-xs-3" id="hidden">Name</div>
     <div class="col-xs-3"><input type="text" name="childrenname2" id="childrenname2"  class="text-box" value="<?php echo $resultSet['childrenname2']; ?>"  readonly="true"/></div>
     <div class="col-xs-3" id="hidden">Date of Birth</div>
     <div class="col-xs-3"><input type="date" name="childrendob2" id="childrendob2"  class="text-box" value="<?php echo $resultSet['childrendob2']; ?>"  readonly="true"/></div>
     <div class="col-xs-3" id="hidden">Class</div>
     <div class="col-xs-3"><input type="text" name="childrenclass2" id="childrenclass2"  class="text-box" value="<?php echo $resultSet['childrenclass2']; ?>"  readonly="true"/></div>
     <div class="col-xs-3" id="hidden">School</div>
     <div class="col-xs-3"><input type="text" name="childrenschool2" id="childrenschool2"  class="text-box" value="<?php echo $resultSet['childrenschool2']; ?>" readonly="true" /></div>
    </div>
  </div>
 </div>
 <div class="text2">
  <div class="head2">Academic / Professional Qualifications</div>
  <div class="row" id="show">
   <div class="col-xs-2">Examination</div>
   <div class="col-xs-1">Year</div>
   <div class="col-xs-1">Marks/Grades</div>
   <div class="col-xs-1">Division</div>
   <div class="col-xs-1">Percentage</div>
   <div class="col-xs-2">School / College Attended</div>
   <div class="col-xs-2">University</div>
   <div class="col-xs-2">Subjects</div>
  </div>
  <div class="row">
   <div class="xsx" id="hidden">1.</div>
   <div class="col-xs-2" id="hidden">Examination</div>
   <div class="col-xs-2"><input type="text" name="examination1" id="examination1"  class="text-box" value="<?php echo $resultSet['examination1']; ?>" readonly="true" /></div>
   <div class="col-xs-1" id="hidden">Year</div>
   <div class="col-xs-1"><input type="text" name="year1" id="year1"  class="text-box" value="<?php echo $resultSet['year1']; ?>" readonly="true"/></div>
   <div class="col-xs-1" id="hidden">Marks/Grades</div>
   <div class="col-xs-1"><input type="text" name="marksGrades1" id="marksGrades1"  class="text-box" value="<?php echo $resultSet['marksGrades1']; ?>" readonly="true" /></div>
   <div class="col-xs-1" id="hidden">Division</div>
   <div class="col-xs-1"><input type="text" name="division1" id="division1"  class="text-box" value="<?php echo $resultSet['division1']; ?>" readonly="true" /></div>
   <div class="col-xs-1" id="hidden">Percentage</div>
   <div class="col-xs-1"><input type="text" name="percentage1" id="percentage1"  class="text-box" value="<?php echo $resultSet['percentage1']; ?>" readonly="true" /></div>
   <div class="col-xs-2" id="hidden">School / College Attended</div>
   <div class="col-xs-2"><input type="text" name="schoolCollegeAttended1" id="schoolCollegeAttended1"  class="text-box" value="<?php echo $resultSet['schoolCollegeAttended1']; ?>" readonly="true" /></div>
   <div class="col-xs-2" id="hidden">University</div>
   <div class="col-xs-2"><input type="text" name="university1" id="university1"  class="text-box" value="<?php echo $resultSet['university1']; ?>" readonly="true"/></div>
   <div class="col-xs-2" id="hidden">Subject</div>
   <div class="col-xs-2"><input type="text" name="subjects1" id="subjects1"  class="text-box" value="<?php echo $resultSet['subjects1']; ?>" readonly="true"/></div>
  </div>
  <div class="row">
   <div class="xsx" id="hidden">2.</div>
   <div class="col-xs-2" id="hidden">Examination</div>
   <div class="col-xs-2"><input type="text" name="examination2" id="examination2"  class="text-box" value="<?php echo $resultSet['examination2']; ?>" readonly="true" /></div>
   <div class="col-xs-1" id="hidden">Year</div>
   <div class="col-xs-1"><input type="text" name="year2" id="year2"  class="text-box" value="<?php echo $resultSet['year2']; ?>" readonly="true" /></div>
   <div class="col-xs-1" id="hidden">Marks/Grades</div>
   <div class="col-xs-1"><input type="text" name="marksGrades2" id="marksGrades2"  class="text-box" value="<?php echo $resultSet['marksGrades2']; ?>" readonly="true" /></div>
   <div class="col-xs-1" id="hidden">Division</div>
   <div class="col-xs-1"><input type="text" name="division2" id="division2"  class="text-box" value="<?php echo $resultSet['division2']; ?>" readonly="true" /></div>
   <div class="col-xs-1" id="hidden">Percentage</div>
   <div class="col-xs-1"><input type="text" name="percentage2" id="percentage2"  class="text-box" value="<?php echo $resultSet['percentage2']; ?>" readonly="true"/></div>
   <div class="col-xs-2" id="hidden">School / College Attended</div>
   <div class="col-xs-2"><input type="text" name="schoolCollegeAttended2" id="schoolCollegeAttended2"  class="text-box" value="<?php echo $resultSet['schoolCollegeAttended2']; ?>" readonly="true"/></div>
   <div class="col-xs-2" id="hidden">University</div>
   <div class="col-xs-2"><input type="text" name="university2" id="university2"  class="text-box" value="<?php echo $resultSet['university2']; ?>" readonly="true" /></div>
   <div class="col-xs-2" id="hidden">Subject</div>
   <div class="col-xs-2"><input type="text" name="subjects2" id="subjects2"  class="text-box" value="<?php echo $resultSet['subjects2']; ?>" readonly="true" /></div>
  </div>
  <div class="row">
   <div class="xsx" id="hidden">3.</div>
   <div class="col-xs-2" id="hidden">Examination</div>
   <div class="col-xs-2"><input type="text" name="examination3" id="examination3"  class="text-box" value="<?php echo $resultSet['examination3']; ?>" readonly="true"/></div>
   <div class="col-xs-1" id="hidden">Year</div>
   <div class="col-xs-1"><input type="text" name="year3" id="year3"  class="text-box" value="<?php echo $resultSet['year3']; ?>" readonly="true" /></div>
   <div class="col-xs-1" id="hidden">Marks/Grades</div>
   <div class="col-xs-1"><input type="text" name="marksGrades3" id="marksGrades3"  class="text-box" value="<?php echo $resultSet['marksGrades3']; ?>" readonly="true" /></div>
   <div class="col-xs-1" id="hidden">Division</div>
   <div class="col-xs-1"><input type="text" name="division3" id="division3"  class="text-box" value="<?php echo $resultSet['division3']; ?>" readonly="true"/></div>
   <div class="col-xs-1" id="hidden">Percentage</div>
   <div class="col-xs-1"><input type="text" name="percentage3" id="percentage3"  class="text-box" value="<?php echo $resultSet['percentage3']; ?>" readonly="true" /></div>
   <div class="col-xs-2" id="hidden">School / College Attended</div>
   <div class="col-xs-2"><input type="text" name="schoolCollegeAttended3" id="schoolCollegeAttended3"  class="text-box" value="<?php echo $resultSet['schoolCollegeAttended3']; ?>" readonly="true" /></div>
   <div class="col-xs-2" id="hidden">University</div>
   <div class="col-xs-2"><input type="text" name="university3" id="university3"  class="text-box" value="<?php echo $resultSet['university3']; ?>" readonly="true"/></div>
   <div class="col-xs-2" id="hidden">Subject</div>
   <div class="col-xs-2"><input type="text" name="subjects3" id="subjects3"  class="text-box" value="<?php echo $resultSet['subjects3']; ?>" readonly="true" /></div>
  </div>
  <div class="row">
   <div class="xsx" id="hidden">4.</div>
   <div class="col-xs-2" id="hidden">Examination</div>
   <div class="col-xs-2"><input type="text" name="examination4" id="examination4"  class="text-box" value="<?php echo $resultSet['examination4']; ?>" readonly="true" /></div>
   <div class="col-xs-1" id="hidden">Year</div>
   <div class="col-xs-1"><input type="text" name="year4" id="year4"  class="text-box" value="<?php echo $resultSet['year4']; ?>" readonly="true" /></div>
   <div class="col-xs-1" id="hidden">Marks/Grades</div>
   <div class="col-xs-1"><input type="text" name="marksGrades4" id="marksGrades4"  class="text-box" value="<?php echo $resultSet['marksGrades4']; ?>" readonly="true" /></div>
   <div class="col-xs-1" id="hidden">Division</div>
   <div class="col-xs-1"><input type="text" name="division4" id="division4"  class="text-box" value="<?php echo $resultSet['division4']; ?>" readonly="true" /></div>
   <div class="col-xs-1" id="hidden">Percentage</div>
   <div class="col-xs-1"><input type="text" name="percentage4" id="percentage4"  class="text-box" value="<?php echo $resultSet['percentage4']; ?>" readonly="true" /></div>
   <div class="col-xs-2" id="hidden">School / College Attended</div>
   <div class="col-xs-2"><input type="text" name="schoolCollegeAttended4" id="schoolCollegeAttended4"  class="text-box" value="<?php echo $resultSet['schoolCollegeAttended4']; ?>" readonly="true" /></div>
   <div class="col-xs-2" id="hidden">University</div>
   <div class="col-xs-2"><input type="text" name="university4" id="university4"  class="text-box" value="<?php echo $resultSet['university4']; ?>" readonly="true"/></div>
   <div class="col-xs-2" id="hidden">Subject</div>
   <div class="col-xs-2"><input type="text" name="subjects4" id="subjects4"  class="text-box" value="<?php echo $resultSet['subjects4']; ?>" readonly="true"/></div>
  </div>
  <div class="row">
   <div class="xsx" id="hidden">5.</div>
   <div class="col-xs-2" id="hidden">Examination</div>
   <div class="col-xs-2"><input type="text" name="examination5" id="examination5"  class="text-box" value="<?php echo $resultSet['examination5']; ?>" readonly="true" /></div>
   <div class="col-xs-1" id="hidden">Year</div>
   <div class="col-xs-1"><input type="text" name="year5" id="year5"  class="text-box" value="<?php echo $resultSet['year5']; ?>" readonly="true"/></div>
   <div class="col-xs-1" id="hidden">Marks/Grades</div>
   <div class="col-xs-1"><input type="text" name="marksGrades5" id="marksGrades5"  class="text-box" value="<?php echo $resultSet['marksGrades5']; ?>" readonly="true" /></div>
   <div class="col-xs-1" id="hidden">Division</div>
   <div class="col-xs-1"><input type="text" name="division5" id="division5"  class="text-box" value="<?php echo $resultSet['division5']; ?>" readonly="true" /></div>
   <div class="col-xs-1" id="hidden">Percentage</div>
   <div class="col-xs-1"><input type="text" name="percentage5" id="percentage5"  class="text-box" value="<?php echo $resultSet['percentage5']; ?>" readonly="true" /></div>
   <div class="col-xs-2" id="hidden">School / College Attended</div>
   <div class="col-xs-2"><input type="text" name="schoolCollegeAttended5" id="schoolCollegeAttended5"  class="text-box" value="<?php echo $resultSet['schoolCollegeAttended5']; ?>" readonly="true" /></div>
   <div class="col-xs-2" id="hidden">University</div>
   <div class="col-xs-2"><input type="text" name="university5" id="university5"  class="text-box" value="<?php echo $resultSet['university5']; ?>" readonly="true"/></div>
   <div class="col-xs-2" id="hidden">Subject</div>
   <div class="col-xs-2"><input type="text" name="subjects5" id="subjects5"  class="text-box" value="<?php echo $resultSet['subjects5']; ?>" readonly="true" /></div>
  </div>
  <div class="row">
   <div class="xsx" id="hidden">6.</div>
   <div class="col-xs-2" id="hidden">Examination</div>
   <div class="col-xs-2"><input type="text" name="examination6" id="examination6"  class="text-box" value=""<?php echo $resultSet['examination6']; ?>" readonly="true" /></div>
   <div class="col-xs-1" id="hidden">Year</div>
   <div class="col-xs-1"><input type="text" name="year6" id="year6"  class="text-box" value="<?php echo $resultSet['year6']; ?>" readonly="true" /></div>
   <div class="col-xs-1" id="hidden">Marks/Grades</div>
   <div class="col-xs-1"><input type="text" name="marksGrades6" id="marksGrades6"  class="text-box" value="<?php echo $resultSet['marksGrades6']; ?>" readonly="true" /></div>
   <div class="col-xs-1" id="hidden">Division</div>
   <div class="col-xs-1"><input type="text" name="division6" id="division6"  class="text-box" value="<?php echo $resultSet['division6']; ?>" readonly="true"/></div>
   <div class="col-xs-1" id="hidden">Percentage</div>
   <div class="col-xs-1"><input type="text" name="percentage6" id="percentage6"  class="text-box" value="<?php echo $resultSet['percentage6']; ?>" readonly="true" /></div>
   <div class="col-xs-2" id="hidden">School / College Attended</div>
   <div class="col-xs-2"><input type="text" name="schoolCollegeAttended6" id="schoolCollegeAttended6"  class="text-box" value="<?php echo $resultSet['schoolCollegeAttended6']; ?>" readonly="true" /></div>
   <div class="col-xs-2" id="hidden">University</div>
   <div class="col-xs-2"><input type="text" name="university6" id="university6"  class="text-box" value="<?php echo $resultSet['university6']; ?>" readonly="true"/></div>
   <div class="col-xs-2" id="hidden">Subject</div>
   <div class="col-xs-2"><input type="text" name="subjects6" id="subjects6"  class="text-box" value="<?php echo $resultSet['subjects6']; ?>" readonly="true" /></div>
  </div>
  <div class="row">
   <div class="xsx" id="hidden">7.</div>
   <div class="col-xs-2" id="hidden">Examination</div>
   <div class="col-xs-2"><input type="text" name="examination7" id="examination7"  class="text-box" value="<?php echo $resultSet['examination7']; ?>" readonly="true" /></div>
   <div class="col-xs-1" id="hidden">Year</div>
   <div class="col-xs-1"><input type="text" name="year7" id="year7"  class="text-box" value="<?php echo $resultSet['year7']; ?>" readonly="true" /></div>
   <div class="col-xs-1" id="hidden">Marks/Grades</div>
   <div class="col-xs-1"><input type="text" name="marksGrades7" id="marksGrades7"  class="text-box" value="<?php echo $resultSet['marksGrades7']; ?>" readonly="true" /></div>
   <div class="col-xs-1" id="hidden">Division</div>
   <div class="col-xs-1"><input type="text" name="division7" id="division7"  class="text-box" value="<?php echo $resultSet['division7']; ?>" readonly="true" /></div>
   <div class="col-xs-1" id="hidden">Percentage</div>
   <div class="col-xs-1"><input type="text" name="percentage7" id="percentage7"  class="text-box" value="<?php echo $resultSet['percentage7']; ?>" readonly="true" /></div>
   <div class="col-xs-2" id="hidden">School / College Attended</div>
   <div class="col-xs-2"><input type="text" name="schoolCollegeAttended7" id="schoolCollegeAttended7"  class="text-box" value="<?php echo $resultSet['schoolCollegeAttended7']; ?>" readonly="true" /></div>
   <div class="col-xs-2" id="hidden">University</div>
   <div class="col-xs-2"><input type="text" name="university7" id="university7"  class="text-box" value="<?php echo $resultSet['university7']; ?>" readonly="true" /></div>
   <div class="col-xs-2" id="hidden">Subject</div>
   <div class="col-xs-2"><input type="text" name="subjects7" id="subjects7"  class="text-box" value="<?php echo $resultSet['subjects7']; ?>" readonly="true" /></div>
  </div>
 </div>
 <div class="text3">
  <div class="head2">Details of experience in recognised schools / institutions</div>
  <div class="row" id="show">
   <div class="col-xs-1">S.No</div>
   <div class="col-xs-3">Name of the Institution where served</div>
   <div class="col-xs-2">Post</div>
   <div class="col-xs-2 cxs"><div class="col-xs-12">Period</div><div class="col-xs-6">From</div><div class="col-xs-6">To</div></div>
   <div class="col-xs-1">Number of years / months</div>
   <div class="col-xs-3 cxs"><div class="col-xs-12">Subjects and Classes Taught</div><div class="col-xs-8">Subjects</div><div class="col-xs-4">Classes</div></div>
  </div>
  <!--<div class="row" id="show">
   <div class="col-xs-6">&nbsp;</div>
   <div class="col-xs-2"><div class="col-xs-6">From</div><div class="col-xs-6">To</div></div>
   <div class="col-xs-1">&nbsp;</div>
   <div class="col-xs-3"><div class="col-xs-6">Subjects</div><div class="col-xs-6">Classes</div></div>
  </div>-->
  <div class="row">
   <div class="col-xs-1 xs1">1.</div>
   <div class="col-xs-3" id="hidden">Name of the Institution where served</div>
   <div class="col-xs-3 xs5"><input type="text" name="institutionname1" id="institutionname1"  class="text-box" value="<?php echo $resultSet['institutionname1']; ?>" readonly="true" /></div>
   <div class="col-xs-2" id="hidden">Post</div>
   <div class="col-xs-2"><input type="text" name="post1" id="post1"  class="text-box" value="<?php echo $resultSet['post1']; ?>" readonly="true" /></div>
   <div class="col-xs-1" id="hidden">Period(From Date)</div>
   <div class="col-xs-1"><input type="date" name="fromdate1" id="fromdate1"  class="text-box" value="<?php echo $resultSet['fromdate1']; ?>" readonly="true" /></div>
   <div class="col-xs-1" id="hidden">Period(From Date)</div>
   <div class="col-xs-1"><input type="date" name="todate1" id="todate1"  class="text-box" value="<?php echo $resultSet['todate1']; ?>" readonly="true" /></div>
   <div class="col-xs-1" id="hidden">Number of years / months</div>
   <div class="col-xs-1"><input type="text" name="noofyear_month1" id="noofyear_month1"  class="text-box" value="<?php echo $resultSet['noofyear_month1']; ?>" readonly="true" /></div>
   <div class="col-xs-2" id="hidden">Subject Taught</div>
   <div class="col-xs-2"><input type="text" name="subject1" id="subject1"  class="text-box" value="<?php echo $resultSet['subject1']; ?>" readonly="true" /></div>
   <div class="col-xs-1" id="hidden">Classe Taught</div>
   <div class="col-xs-1"><input type="text" name="class1" id="class1"  class="text-box" value="<?php echo $resultSet['class1']; ?>" readonly="true" /></div>
  </div>
  <div class="row">
   <div class="col-xs-1 xs1">2.</div>
   <div class="col-xs-3" id="hidden">Name of the Institution where served</div>
   <div class="col-xs-3 xs5"><input type="text" name="institutionname2" id="institutionname2"  class="text-box" value="<?php echo $resultSet['institutionname2']; ?>" readonly="true" /></div>
   <div class="col-xs-2" id="hidden">Post</div>
   <div class="col-xs-2"><input type="text" name="post2" id="post2"  class="text-box" value="<?php echo $resultSet['post2']; ?>" readonly="true" /></div>
   <div class="col-xs-1" id="hidden">Period(From Date)</div>
   <div class="col-xs-1"><input type="date" name="fromdate2" id="fromdate2"  class="text-box" value="<?php echo $resultSet['fromdate2']; ?>" readonly="true" /></div>
   <div class="col-xs-1" id="hidden">Period(From Date)</div>
   <div class="col-xs-1"><input type="date" name="todate2" id="todate2"  class="text-box" value="<?php echo $resultSet['todate2']; ?>" readonly="true" /></div>
   <div class="col-xs-1" id="hidden">Number of years / months</div>
   <div class="col-xs-1"><input type="text" name="noofyear_month2" id="noofyear_month2"  class="text-box" value="<?php echo $resultSet['noofyear_month2']; ?>" readonly="true" /></div>
   <div class="col-xs-2" id="hidden">Subject Taught</div>
   <div class="col-xs-2"><input type="text" name="subject2" id="subject2"  class="text-box" value="<?php echo $resultSet['subject2']; ?>" readonly="true" /></div>
   <div class="col-xs-1" id="hidden">Classe Taught</div>
   <div class="col-xs-1"><input type="text" name="class2" id="class2"  class="text-box" value="<?php echo $resultSet['class2']; ?>" readonly="true" /></div>
  </div>
  <div class="row">
   <div class="col-xs-1 xs1">3.</div>
   <div class="col-xs-3" id="hidden">Name of the Institution where served</div>
   <div class="col-xs-3 xs5"><input type="text" name="institutionname3" id="institutionname3"  class="text-box" value="<?php echo $resultSet['institutionname3']; ?>" readonly="true" /></div>
   <div class="col-xs-2" id="hidden">Post</div>
   <div class="col-xs-2"><input type="text" name="post3" id="post3"  class="text-box" value="<?php echo $resultSet['post3']; ?>" readonly="true" /></div>
   <div class="col-xs-1" id="hidden">Period(From Date)</div>
   <div class="col-xs-1"><input type="date" name="fromdate3" id="fromdate3"  class="text-box" value="<?php echo $resultSet['fromdate3']; ?>" readonly="true" /></div>
   <div class="col-xs-1" id="hidden">Period(From Date)</div>
   <div class="col-xs-1"><input type="date" name="todate3" id="todate3"  class="text-box" value="<?php echo $resultSet['todate3']; ?>" readonly="true" /></div>
   <div class="col-xs-1" id="hidden">Number of years / months</div>
   <div class="col-xs-1"><input type="text" name="noofyear_month3" id="noofyear_month3"  class="text-box" value="<?php echo $resultSet['noofyear_month3']; ?>" readonly="true" /></div>
   <div class="col-xs-2" id="hidden">Subject Taught</div>
   <div class="col-xs-2"><input type="text" name="subject3" id="subject3"  class="text-box" value="<?php echo $resultSet['subject3']; ?>" /></div>
   <div class="col-xs-1" id="hidden">Classe Taught</div>
   <div class="col-xs-1"><input type="text" name="class3" id="class3"  class="text-box" value="<?php echo $resultSet['class3']; ?>" readonly="true"/></div>
  </div>
  <div class="row">
   <div class="col-xs-1 xs1">4.</div>
   <div class="col-xs-3" id="hidden">Name of the Institution where served</div>
   <div class="col-xs-3 xs5"><input type="text" name="institutionname4" id="institutionname4"  class="text-box" value="<?php echo $resultSet['institutionname4']; ?>" readonly="true" /></div>
   <div class="col-xs-2" id="hidden">Post</div>
   <div class="col-xs-2"><input type="text" name="post4" id="post4"  class="text-box" value="<?php echo $resultSet['post4']; ?>" readonly="true" /></div>
   <div class="col-xs-1" id="hidden">Period(From Date)</div>
   <div class="col-xs-1"><input type="date" name="fromdate4" id="fromdate4"  class="text-box" value="<?php echo $resultSet['fromdate4']; ?>" readonly="true"/></div>
   <div class="col-xs-1" id="hidden">Period(From Date)</div>
   <div class="col-xs-1"><input type="date" name="todate4" id="todate4"  class="text-box" value="<?php echo $resultSet['todate4']; ?>" readonly="true" /></div>
   <div class="col-xs-1" id="hidden">Number of years / months</div>
   <div class="col-xs-1"><input type="text" name="noofyear_month4" id="noofyear_month4"  class="text-box" value="<?php echo $resultSet['noofyear_month4']; ?>" readonly="true" /></div>
   <div class="col-xs-2" id="hidden">Subject Taught</div>
   <div class="col-xs-2"><input type="text" name="subject4" id="subject4"  class="text-box" value="<?php echo $resultSet['subject4']; ?>" readonly="true" /></div>
   <div class="col-xs-1" id="hidden">Classe Taught</div>
   <div class="col-xs-1"><input type="text" name="class4" id="class4"  class="text-box" value="<?php echo $resultSet['class4']; ?>" readonly="true" /></div>
  </div>
  <div class="row">
   <div class="col-xs-1 xs1">5.</div>
   <div class="col-xs-3" id="hidden">Name of the Institution where served</div>
   <div class="col-xs-3 xs5"><input type="text" name="institutionname5" id="institutionname5"  class="text-box" value="<?php echo $resultSet['institutionname5']; ?>" readonly="true" /></div>
   <div class="col-xs-2" id="hidden">Post</div>
   <div class="col-xs-2"><input type="text" name="post5" id="post5"  class="text-box" value="<?php echo $resultSet['post5']; ?>" readonly="true" /></div>
   <div class="col-xs-1" id="hidden">Period(From Date)</div>
   <div class="col-xs-1"><input type="date" name="fromdate5" id="fromdate5"  class="text-box" value="<?php echo $resultSet['fromdate5']; ?>" readonly="true" /></div>
   <div class="col-xs-1" id="hidden">Period(From Date)</div>
   <div class="col-xs-1"><input type="date" name="todate5" id="todate5"  class="text-box" value="<?php echo $resultSet['todate5']; ?>" readonly="true"/></div>
   <div class="col-xs-1" id="hidden">Number of years / months</div>
   <div class="col-xs-1"><input type="text" name="noofyear_month5" id="noofyear_month5"  class="text-box" value="<?php echo $resultSet['noofyear_month5']; ?>" readonly="true" /></div>
   <div class="col-xs-2" id="hidden">Subject Taught</div>
   <div class="col-xs-2"><input type="text" name="subject5" id="subject5"  class="text-box" value="<?php echo $resultSet['subject5']; ?>" readonly="true"/></div>
   <div class="col-xs-1" id="hidden">Classe Taught</div>
   <div class="col-xs-1"><input type="text" name="class5" id="class5"  class="text-box" value="<?php echo $resultSet['class5']; ?>" readonly="true" /></div>
  </div>
 </div>
 <div class="text4">
  <div class="row">
   <div class="col-xs-3"><b>Total Experience</b></div>
   <div class="col-xs-1"><input type="text" name="totalexperience" id="totalexperience"  class="text-box" value="<?php echo $resultSet['totalexperience']; ?>" readonly="true" /></div>
   <div class="col-xs-1"><input type="text" name="totalexperience" id="experiencemonth"  class="text-box" value="<?php echo $resultSet['experiencemonth']; ?>" readonly="true" /></div>
   
   <div class="col-xs-3"><font><b>as on</b></font><input type="date" name="experiencedate" id="experiencedate"  class="text-box" value="<?php echo $resultSet['experiencedate']; ?>" readonly="true"/></div>
  </div>
 </div>
 <div class="text5">
  <div class="head2">Details of Workshops / Courses attended</div>
  <div class="row" id="show">
   <div class="col-xs-1">&nbsp;</div>
   <div class="col-xs-2">Year</div>
   <div class="col-xs-2">Duration</div>
   <div class="col-xs-3">Institute</div>
   <div class="col-xs-4">Name of the Workshop</div>
  </div>
  <div class="row">
   <div class="col-xs-1">a)</div>
   <div class="col-xs-2" id="hidden">Year</div>
   <div class="col-xs-2"><input type="number" name="workshopCourseYear1" id="workshopCourseYear1"  class="text-box" value="<?php echo $resultSet['workshopCourseYear1']; ?>" readonly="true" /></div>
   <div class="col-xs-2" id="hidden">Duration</div>
   <div class="col-xs-2"><input type="text" name="workshopCourseDuration1" id="workshopCourseDuration1"  class="text-box" value="<?php echo $resultSet['workshopCourseDuration1']; ?>" readonly="true" /></div>
   <div class="col-xs-3" id="hidden">Institute</div>
   <div class="col-xs-3"><input type="text" name="workshopCourseInstitute1" id="workshopCourseInstitute1"  class="text-box" value="<?php echo $resultSet['workshopCourseInstitute1']; ?>" readonly="true" /></div>
   <div class="col-xs-4" id="hidden">Name of the Workshop</div>
   <div class="col-xs-4"><input type="text" name="workshopCourseWorkshopname1" id="workshopCourseWorkshopname1"  class="text-box" value="<?php echo $resultSet['workshopCourseWorkshopname1']; ?>" readonly="true" /></div>
  </div>
  <div class="row">
   <div class="col-xs-1">b)</div>
   <div class="col-xs-2" id="hidden">Year</div>
   <div class="col-xs-2"><input type="number" name="workshopCourseYear2" id="workshopCourseYear2"  class="text-box" value="<?php echo $resultSet['workshopCourseYear2']; ?>" readonly="true" /></div>
   <div class="col-xs-2" id="hidden">Duration</div>
   <div class="col-xs-2"><input type="text" name="workshopCourseDuration2" id="workshopCourseDuration2"  class="text-box" value="<?php echo $resultSet['workshopCourseDuration2']; ?>" readonly="true" /></div>
   <div class="col-xs-3" id="hidden">Institute</div>
   <div class="col-xs-3"><input type="text" name="workshopCourseInstitute2" id="workshopCourseInstitute2"  class="text-box" value="<?php echo $resultSet['workshopCourseInstitute2']; ?>" readonly="true"/></div>
   <div class="col-xs-4" id="hidden">Name of the Workshop</div>
   <div class="col-xs-4"><input type="text" name="workshopCourseWorkshopname2" id="workshopCourseWorkshopname2"  class="text-box" value="<?php echo $resultSet['workshopCourseWorkshopname2']; ?>" readonly="true" /></div>
  </div>
  <div class="row">
   <div class="col-xs-1">c)</div>
   <div class="col-xs-2" id="hidden">Year</div>
   <div class="col-xs-2"><input type="number" name="workshopCourseYear3" id="workshopCourseYear3"  class="text-box" value="<?php echo $resultSet['workshopCourseYear3']; ?>" readonly="true" /></div>
   <div class="col-xs-2" id="hidden">Duration</div>
   <div class="col-xs-2"><input type="text" name="workshopCourseDuration3" id="workshopCourseDuration3"  class="text-box" value="<?php echo $resultSet['workshopCourseDuration3']; ?>" readonly="true" /></div>
   <div class="col-xs-3" id="hidden">Institute</div>
   <div class="col-xs-3"><input type="text" name="workshopCourseInstitute3" id="workshopCourseInstitute3"  class="text-box" value="<?php echo $resultSet['workshopCourseInstitute3']; ?>" readonly="true" /></div>
   <div class="col-xs-4" id="hidden">Name of the Workshop</div>
   <div class="col-xs-4"><input type="text" name="workshopCourseWorkshopname3" id="workshopCourseWorkshopname3"  class="text-box" value="<?php echo $resultSet['workshopCourseWorkshopname3']; ?>" readonly="true" /></div>
  </div>
 </div>
 <div class="text6">
  <div class="head2">Details of Administrative experience, if any</div>
  <div class="row" id="show">
   <div class="col-xs-1">&nbsp;</div>
   <div class="col-xs-2">Period</div>
   <div class="col-xs-4">Designation</div>
   <div class="col-xs-5">Responsibilities Handled</div>
  </div>
  <div class="row">
   <div class="col-xs-1 xs1">a)</div>
   <div class="col-xs-2" id="hidden">Period</div>
   <div class="col-xs-2"><input type="text" id="adExPeriod1" name="adExPeriod1"  class="text-box" value="<?php echo $resultSet['adExPeriod1']; ?>" readonly="true" /></div>
   <div class="col-xs-4" id="hidden">Designation</div>
   <div class="col-xs-4"><input type="text" id="adExdesignation1" name="adExdesignation1"  class="text-box" value="<?php echo $resultSet['adExdesignation1']; ?>" readonly="true" /></div>
   <div class="col-xs-5" id="hidden">Responsibilities Handled</div>
   <div class="col-xs-5"><input type="text" id="adExResponsibility1" name="adExResponsibility1"  class="text-box" value="<?php echo $resultSet['adExResponsibility1']; ?>" readonly="true" /></div>
  </div>
  <div class="row">
   <div class="col-xs-1 xs1">b)</div>
   <div class="col-xs-2" id="hidden">Period</div>
   <div class="col-xs-2"><input type="text" id="adExPeriod2" name="adExPeriod2"  class="text-box" value="<?php echo $resultSet['adExPeriod2']; ?>" readonly="true" /></div>
   <div class="col-xs-4" id="hidden">Designation</div>
   <div class="col-xs-4"><input type="text" id="adExdesignation2" name="adExdesignation2"  class="text-box" value="<?php echo $resultSet['adExdesignation2']; ?>" readonly="true" /></div>
   <div class="col-xs-5" id="hidden">Responsibilities Handled</div>
   <div class="col-xs-5"><input type="text" id="adExResponsibility2" name="adExResponsibility2"  class="text-box" value="<?php echo $resultSet['adExResponsibility2']; ?>" readonly="true" /></div>
  </div>
 </div>
 <div class="text7">
  <div class="row">
   <div class="col-xs-3"><strong>Certification</strong> (if any)</div>
   <div class="col-xs-3"><input type="text" name="certification" id="certification"  class="text-box" value="<?php echo $resultSet['certification']; ?>" readonly="true" /></div>
   <div class="col-xs-3">Countries visited</div>
   <div class="col-xs-3 xs6"><input type="text" name="countriesVisited" id="countriesVisited"  class="text-box" value="<?php echo $resultSet['countriesVisited']; ?>" readonly="true" /></div>
  </div>
  <div class="row">
   <div class="col-xs-3 xs2">Knowledge of foreign language(s)</div>
   <div class="col-xs-3"><input type="text" name="foreginlanguage" id="foreginlanguage"  class="text-box" value="<?php echo $resultSet['foreginlanguage']; ?>" readonly="true" /></div>
   <div class="col-xs-6">&nbsp;</div>
  </div>
  <div class="row">
   <div class="col-xs-3">Reason for leaving (last Organisation)</div>
   <div class="col-xs-3 xs6"><input type="text" name="terminationReason" id="terminationReason"  class="text-box" value="<?php echo $resultSet['terminationReason']; ?>" readonly="true" /></div>
   <div class="col-xs-3">Salary & allowances last drawn: Scale</div>
   <div class="col-xs-3 xs6"><input type="text" name="terminationSalaryScale" id="terminationSalaryScale"  class="text-box" value=""<?php echo $resultSet['terminationSalaryScale']; ?>" readonly="true" /></div>
  </div>
  <div class="row">
   <div class="col-xs-3">Basic Salary (Per Month)</div>
   <div class="col-xs-3"><input type="text" name="terminationBasicSalary" id="terminationBasicSalary"  class="text-box" value="<?php echo $resultSet['terminationBasicSalary']; ?>" readonly="true"/></div>
   <div class="col-xs-3">Plus allowances (Rs)(Per Month)</div>
   <div class="col-xs-3 xs6"><input type="text" name="terminationPlusAllowance" id="terminationPlusAllowance"  class="text-box" value="<?php echo $resultSet['terminationPlusAllowance']; ?>" readonly="true" /></div>
  </div>

  <div class="row">
   <div class="col-xs-3">Total Rs.(Per Month)</div>
   <div class="col-xs-3"><input type="text" name="terminationTotal" id="terminationTotal"  class="text-box" value="<?php echo $resultSet['terminationTotal']; ?>" readonly="true"/></div>
   <div class="col-xs-6">&nbsp;</div>
  </div>
 </div>
 <div class="text9">
  <div class="row">
   <div class="col-xs-12"><strong>Major achievements (if any)</strong></div>
   <div class="col-xs-4">a)&nbsp;<input type="text" name="majorAchievement1" id="majorAchievement1"  class="text-box" value="<?php echo $resultSet['majorAchievement1']; ?>" readonly="true" /></div>
   <div class="col-xs-4">b)&nbsp;<input type="text" name="majorAchievement2" id="majorAchievement2"  class="text-box" value="<?php echo $resultSet['majorAchievement2']; ?>" readonly="true" /></div>
   <div class="col-xs-4">c)&nbsp;<input type="text" name="majorAchievement3" id="majorAchievement3"  class="text-box" value="<?php echo $resultSet['majorAchievement3']; ?>" readonly="true" /></div>
  </div>
 </div>
 <div class="text10">
  <div class="head2">Please mention any three extra curricular activities in which you can train students</div>
  <div class="row">
   <div class="col-xs-4">a)&nbsp;<input type="text" name="extracurricular1" id="extracurricular1"  class="text-box" value="<?php echo $resultSet['extracurricular1']; ?>" readonly="true" /></div>
   <div class="col-xs-4">b)&nbsp;<input type="text" name="extracurricular2" id="extracurricular2"  class="text-box" value="<?php echo $resultSet['extracurricular2']; ?>" readonly="true" /></div>
   <div class="col-xs-4">c)&nbsp;<input type="text" name="extracurricular3" id="extracurricular3"  class="text-box" value="<?php echo $resultSet['extracurricular3']; ?>" readonly="true" /></div>
  </div>
 </div>
 <div class="text11">
  <div class="head2">Name, Designation with Telephone / Mobile number and address of two references (Academic / Teaching) :</div>
  <div class="row">
   <div class="col-xs-6">
    <div class="he2"><strong>Reference</strong> (Person 1)</div>
     <div class="row">
      <div class="col-xs-6">Name*</div>
      <div class="col-xs-6"><input type="text" name="referencePersonName1" id="referencePersonName1"  class="text-box" value="<?php echo $resultSet['referencePersonName1']; ?>" readonly="true" /></div>
     </div>
     <div class="row">
      <div class="col-xs-6">Designation*</div>
      <div class="col-xs-6"><textarea type="text" name="referencePersonDesignation1" id="referencePersonDesignation1"  class="text-box" value="" readonly="true" ><?php echo $resultSet['referencePersonDesignation1']; ?></textarea></div>
     </div>
     <div class="row">
      <div class="col-xs-6">Telephone No. / Mobile*</div>
      <div class="col-xs-6"><input type="text" name="referencePersonTelNo1" id="referencePersonTelNo1"  class="text-box" value="<?php echo $resultSet['referencePersonTelNo1']; ?>" readonly="true" /></div>
     </div>
     <div class="row">
      <div class="col-xs-6">Address*</div>
      <div class="col-xs-6"><input type="text" name="referencePersonAddress1" id="referencePersonAddress1"  class="text-box" value="<?php echo $resultSet['referencePersonAddress1']; ?>" readonly="true"/></div>
     </div>
   </div>
   <div class="col-xs-6">
    <div class="he2"><strong>Reference</strong> (Person 2)</div>
     <div class="row">
      <div class="col-xs-6">Name*</div>
      <div class="col-xs-6"><input type="text" name="referencePersonName2" id="referencePersonName2"  class="text-box" value="<?php echo $resultSet['referencePersonName2']; ?>" readonly="true" /></div>
     </div>
     <div class="row">
      <div class="col-xs-6">Designation*</div>
      <div class="col-xs-6"><input type="text" name="referencePersonDesignation2" id="referencePersonDesignation2"  class="text-box" value="<?php echo $resultSet['referencePersonDesignation2']; ?>" readonly="true" /></div>
     </div>
     <div class="row">
      <div class="col-xs-6">Telephone No. / Mobile*</div>
      <div class="col-xs-6"><input type="text" name="referencePersonTelNo2" id="referencePersonTelNo2"  class="text-box" value="<?php echo $resultSet['referencePersonTelNo2']; ?>" readonly="true"/></div>
     </div>
     <div class="row">
      <div class="col-xs-6">Address*</div>
      <div class="col-xs-6"><input type="text" name="referencePersonAddress2" id="referencePersonAddress2"  class="text-box" value="<?php echo $resultSet['referencePersonAddress2']; ?>" readonly="true"/></div>
     </div>
   </div>
  </div>
 </div>
 <div class="text12">
   <div class="head2">Documents to be Uploaded(Please note maximum file size allowed per upload is 250 KB)</div>
   <div>&nbsp;</div>
   <div class="row">
    <div class="col-xs-6 xsss"> 1. Age Proof* :</div>
   
    <div class="col-xs-3"> <a href="../../Vacancy_Management/Documents/<?php echo $resultSet['age_proof']; ?>" target="_blank"><?php echo $resultSet['age_proof']; ?></a></div>
   </div>
   <div class="row">
    <div class="col-xs-6 xsss"> 2. Class X Marksheet* :</div>
   <div class="col-xs-3"> <a href="../../Vacancy_Management/Documents/<?php echo $resultSet['class10_marksheet']; ?>" target="_blank"><?php echo $resultSet['class10_marksheet']; ?></a></div>
   </div>
   <div class="row">
    <div class="col-xs-6 xsss"> 3. Class XII Marksheet* :</div>
   <div class="col-xs-3"> <a href="../../Vacancy_Management/Documents/<?php echo $resultSet['class12_marksheet']; ?>" target="_blank"><?php echo $resultSet['class12_marksheet']; ?></a></div>
   </div>
   <div class="row">
    <div class="col-xs-6 xsss"> 4. Graduation Marksheet* : </div>
   <div class="col-xs-3"> <a href="../../Vacancy_Management/Documents/<?php echo $resultSet['graduation_marksheet']; ?>" target="_blank"><?php echo $resultSet['graduation_marksheet']; ?></a></div>
   </div>
   <div class="row">
    <div class="col-xs-6 xsss"> 5. Post Graduation Marksheet* :</div>
    <div class="col-xs-3"> <a href="../../Vacancy_Management/Documents/<?php echo $resultSet['post_graduation_marksheet']; ?>" target="_blank"><?php echo $resultSet['post_graduation_marksheet']; ?></a></div>
   </div>
   <div class="row">
    <div class="col-xs-6 xsss"> 6. B.Ed Marksheet* : </div>
   <div class="col-xs-3"> <a href="../../Vacancy_Management/Documents/<?php echo $resultSet['B_ed_marksheet']; ?>" target="_blank"><?php echo $resultSet['B_ed_marksheet']; ?></a></div>
   </div>
   <div class="row">
    <div class="col-xs-6 xsss"> 7. CTET Marksheet :</div>
  <div class="col-xs-3"> <a href="../../Vacancy_Management/Documents/<?php echo $reportData['ctet_marksheet']; ?>" target="_blank"><?php echo $reportData['ctet_marksheet']; ?></a></div>
   </div>
  </div>-->
  <div class="text121">
   <div class="row">
    <div class="col-xs-3">The exact period after which you can join*<br>(if selected)</div>
    <div class="col-xs-3"><input type="text" name="exactPeriodjoin" id="exactPeriodjoin"  class="text-box" value="<?php echo $resultSet['exactPeriodjoin']; ?>" readonly="true"  /></div>
    <div class="col-xs-6" id="hidden">&nbsp;</div>
   </div>
   <div class="row">
    <div class="col-xs-3">Remarks (if any)</div>
    <div class="col-xs-3"><input type="text" name="remarks" id="remarks"  class="text-box" value="<?php echo $resultSet['remarks']; ?>" readonly="true"  ></div>
    <div class="col-xs-6" id="hidden">&nbsp;</div>
   </div>
 </div>
 <div class="text14">
 <div class="row">
    <div class="head2" style="padding:0 2%;"><strong>Declaration:</strong>
  <p><b>&raquo;	</b> I understand that rendering false / incorrect or misleading information in the Job Application shall disqualify my candidature.</p>
  </div> 
  <div class="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="declare" id="declare" required>&nbsp;&nbsp;I hereby confirm the above declarations.</div> 
  <div class="col-xs-2 hed1">&nbsp;</div>
  </div>
  <div class="row">
   <div class="col-xs-2">Date</div>
   <?php $currentdate=date("d-m-Y"); ?>
   <div class="col-xs-3"><input typr="text" name="filling_date" value="<?php echo $resultSet['filling_date']; ?>" readonly="true" /></div>
   <div class="col-xs-2 hed1">&nbsp;</div>
  </div>
 </div>
  <div class="text15"> 
  <div>&nbsp;</div>
<div align="center"><a href="#" onClick="window.print() ;">Print</a></div>
  </div>
 </form>
</div>
</body>
<style>
@media print
{
  a[href]:after
  {
    content: none !important;
  }
}
@media print
{
  @page { margin: 0; }
  body { margin: 1.6cm; }
}
</style>

</html>
<!-----Upload Photo------------>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script language="javascript" type="text/javascript">
$(function () {
    $("#fileupload").change(function () {
        $("#dvPreview").html("");
        var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
        if (regex.test($(this).val().toLowerCase())) {
            if ($.browser.msie && parseFloat(jQuery.browser.version) <= 9.0) {
                $("#dvPreview").show();
                $("#dvPreview")[0].filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = $(this).val();
            }
            else {
                if (typeof (FileReader) != "undefined") {
                    $("#dvPreview").show();
                    $("#dvPreview").append("<img />");
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $("#dvPreview img").attr("src", e.target.result);
                    }
                    reader.readAsDataURL($(this)[0].files[0]);
                } else {
                    alert("This browser does not support FileReader.");
                }
            }
        } else {
            alert("Please upload a valid image file.");
        }
    });
});
</script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
<script type="text/javascript">
    
    $(document).ready(function(){
$('#F1').bind('change', function() {
    var f1Size=(this.files[0].size/1024);
    if(f1Size >300){
       $("#errorMessageF1").html("Maximum file size limit is 300kb");
    }
});
$('#F2').bind('change', function() {
    var f2Size=(this.files[0].size/1024);
    if(f2Size >300){
       $("#errorMessageF2").html("Maximum file size limit is 300kb");
    }
});
$('#F3').bind('change', function() {
    var f3Size=(this.files[0].size/1024);
    if(f3Size >300){
       $("#errorMessageF3").html("Maximum file size limit is 300kb");
    }
});
$('#F4').bind('change', function() {
    var f4Size=(this.files[0].size/1024);
    if(f4Size >300){
       $("#errorMessageF4").html("Maximum file size limit is 300kb");
    }
});
$('#F5').bind('change', function() {
    var f5Size=(this.files[0].size/1024);
    if(f5Size >300){
       $("#errorMessageF5").html("Maximum file size limit is 300kb");
    }
});
$('#F6').bind('change', function() {
    var f6Size=(this.files[0].size/1024);
    if(f6Size >300){
       $("#errorMessageF6").html("Maximum file size limit is 300kb");
    }
});
$('#F7').bind('change', function() {
    var f7Size=(this.files[0].size/1024);
    if(f7Size >300){
       $("#errorMessageF7").html("Maximum file size limit is 300kb");
    }
});
});

