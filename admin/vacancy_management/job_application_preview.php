<?php
	 session_start();
	include '../../include/Confile.php';    
	
       
         $applicationNo= $_SESSION['applicationNo'];
        
        $data=mysqli_query($con,"SELECT `applicationNo`,`receivedon`,`postapplied`,`subject`,`name`,`dob`,`nationality`,`age`,`maritalstatus`,`gender`,`father_spousename`,`childrenname1`,`childrendob1`,`childrenclass1`,`childrenschool1`,`childrenname2`,`childrendob2`,`childrenclass2`,`childrenschool2`,`presentaddress`,`emailid`,`presentmobileno`,`presenttelno`,`permanentaddress`,`permanenttelno`,`permanentmobileno`,`examination1`,`year1`,`marksGrades1`,`division1`,`percentage1`,`schoolCollegeAttended1`,`university1`,`subjects1`,`examination2`,`year2`,`marksGrades2`,`division2`,`percentage2`,`schoolCollegeAttended2`,`university2`,`subjects2`,`examination3`,`year3`,`marksGrades3`,`division3`,`percentage3`,`schoolCollegeAttended3`,`university3`,`subjects3`,`examination4`,`year4`,`marksGrades4`,`division4`,`percentage4`,`schoolCollegeAttended4`,`university4`,`subjects4`,`examination5`,`year5`,`marksGrades5`,`division5`,`percentage5`,`schoolCollegeAttended5`,`university5`,`subjects5`,`examination6`,`year6`,`marksGrades6`,`division6`,`percentage6`,`schoolCollegeAttended6`,`university6`,`subjects6`,`examination7`,`year7`,`marksGrades7`,`division7`,`percentage7`,`schoolCollegeAttended7`,`university7`,`subjects7`,`institutionname1`,`post1`,`fromdate1`,`todate1`,`noofyear_month1`,`subject1`,`class1`,`institutionname2`,`post2`,`fromdate2`,`todate2`,`noofyear_month2`,`subject2`,`class2`,`institutionname3`,`post3`,`fromdate3`,`todate3`,`noofyear_month3`,`subject3`,`class3`,`institutionname4`,`post4`,`fromdate4`,`todate4`,`noofyear_month4`,`subject4`,`class4`,`institutionname5`,`post5`,`fromdate5`,`todate5`,`noofyear_month5`,`subject5`,`class5`,`totalexperience`,`experiencemonth`,`experiencedate`,`workshopCourseYear1`,`workshopCourseDuration1`,`workshopCourseInstitute1`,`workshopCourseWorkshopname1`,`workshopCourseYear2`,`workshopCourseDuration2`,`workshopCourseInstitute2`,`workshopCourseWorkshopname2`,`workshopCourseYear3`,`workshopCourseDuration3`,`workshopCourseInstitute3`,`workshopCourseWorkshopname3`,`adExPeriod1`,`adExdesignation1`,`adExResponsibility1`,`adExPeriod2`,`adExdesignation2`,`adExResponsibility2`,`terminationReason`,`terminationSalaryScale`,`terminationBasicSalary`,`terminationPlusAllowance`,`terminationTotal`,`foreginlanguage`,`certification`,`countriesVisited`,`majorAchievement1`,`majorAchievement2`,`majorAchievement3`,`extracurricular1`,`extracurricular2`,`extracurricular3`,`referencePersonName1`,`referencePersonDesignation1`,`referencePersonTelNo1`,`referencePersonAddress1`,`referencePersonName2`,`referencePersonDesignation2`,`referencePersonTelNo2`,`referencePersonAddress2`,`age_proof`,`class10_marksheet`,`class12_marksheet`,`graduation_marksheet`,`post_graduation_marksheet`,`B_ed_marksheet`,`ctet_marksheet`,`exactPeriodjoin`,`remarks`,`filling_date`,`profilephoto` FROM job_application_form WHERE applicationNo=$applicationNo");
        $resultSet=  mysqli_fetch_array($data);
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
   <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  
	<style type="text/css">
		#zoom {		
  		/*padding: 50px;*/
  		background-color: transparent;
  		transition: transform .2s;
  		width: 50px;
  		height: 50px;
  		margin: 0 auto;
		}

		#zoom:hover {
  		-ms-transform: scale(1.5); /* IE 9 */
  		-webkit-transform: scale(1.5); /* Safari 3-8 */
  		transform: scale(1.5); 
		}
	</style>
</head>
<body>

<div class="container">
    <form action="registration_fee_response_vacancy-New.php" method="post" enctype="multipart/form-data">
      <div class="form-group row">
        <div class="col-md-12" align="center"><br>
          <div class="img" align="center"><img src="../../images/logo/main_logo.png" class="img-responsive" /></div><hr>
        </div>
      </div>
      <div class="form-group row ">
        <center>
          <h3>JOB APPLICATION FORM </h3>
        </center>        
      </div>  
      <div class=" form-group row">
        <div class="col-sm-4">Note :</div>
          <ol><br>
            <li>Candidates are requested to clearly indicate the post applied for.</li>
            <li><b>A print of duly complete Application form should be downloaded and submitted at the school office along with the acknowledgement slip for payment of INR 100.</b></li>
            <li>Only shortlisted candidates will be called for interview. If shortlisted, the applicant is  to bring along all originals of the documents uploaded and other relevant documents.</li>
          </ol>
      </div>
      <div class="form-group row">
        <div class="col-sm-6">
          <label for="serialno"><b>Application No. :</b><br /><font class="if" style="font-size:9px">(generated by the system)</font></label>                      
          <input readonly type="text" name="serialno" id="serialno" value='<?php echo $resultSet['applicationNo']; ?>'  class="form-control col-sm-2"  />
        </div>
        <div class="col-sm-6">
          <label for="receivedon"><b>Received on :</b><br /><font class="if" style="font-size:9px">(For office use)</font></label>
          <input readonly type="text" name="receivedon" id="receivedon" class="form-control col-sm-2" value="<?php echo $resultSet['filling_date']; ?>"  />
        </div>        
      </div>
      <div class="row">
        <div class="col-sm-6"></div>        
        <label for="F1" class="col-sm-1"><b>PHOTO</b></label>
        <div class="col-sm-4">
          	<div class="imp">
     			<div id="dvPreview"><img src="../images/profile/<?php echo $resultSet['profilephoto']; ?>" alt="" ></div>   
         	</div>  
        </div>
      </div>
      <hr>
      <div class="row">
        <label class="col-sm-3">Post Applied for*</label>
        <div class="col-sm-3">
        	<input readonly type="text" name="postapplied" id="postapplied" class="form-control col-sm-2" value="<?php echo $resultSet['postapplied']; ?>"  />
        </div>
        <label class="col-sm-3">Subject*</label>
        <div class="col-sm-3">
          <input readonly type="text" name="subject" id="subject" class="form-control" value="<?php echo $resultSet['subject']; ?>" />
        </div>
      </div><hr>
      <div class="row">
          <div class="col-sm-3">Name* :</div>
           <div class="col-sm-3"><input readonly type="text" name="name" id="name" class="form-control" value="<?php echo $resultSet['name']; ?>" /></div>
           <div class="col-sm-3">Date of Birth*</div>
           <div class="col-sm-3"><input readonly type="text" name="dob" id="dob" onblur="agecal()" class="form-control" value="<?php echo $resultSet['dob']; ?>" /></div>
      </div><hr>
      <div class="row">
           <div class="col-sm-3">Nationality*</div>
           <div class="col-sm-3"><input readonly type="text" name="nationality" id="nationality"  class="form-control" value="<?php echo $resultSet['nationality']; ?>" /></div>
           <div class="col-sm-3">Age* <br> <font class="if" style="font-size:9px">(as on 31 March 2019)</font></div>
           <div class="col-sm-3"> <input readonly name="age" id="age" type="text"  value="<?php echo $resultSet['age']; ?>" class="form-control"  /></div>
      </div><hr>
      <div class="row">
           <div class="col-sm-3">Marital Status*</div>
           <div class="col-sm-3"><input readonly type="text" name="maritalsatus" id="maritalsatus" class="form-control" value="<?php echo $resultSet['maritalstatus']; ?>" />
           </div>
           <div class="col-sm-3">Gender*</div>
           <div class="col-sm-3"><input readonly type="text" name="gender" id="gender"  class="form-control" value="<?php echo $resultSet['gender']; ?>" />
          </div>
        </div><hr>
        <div class="row">
           <div class="col-sm-3">Present Address*</div>
           <div class="col-sm-3"><textarea readonly name="presentaddress" id="presentaddress"  class="form-control" rows="2" ><?php echo $resultSet['presentaddress']; ?></textarea readonly></div>
           <div class="col-sm-3">Telephone No</div>
           <div class="col-sm-3"><input readonly type="text" id="presenttelno" name="presenttelno"  class="form-control" value="<?php echo $resultSet['presenttelno']; ?>" /></div>
        </div><hr>
        <div class="row">
           <div class="col-sm-3">Mobile No*</div>
           <div class="col-sm-3"><input readonly  id="presentmobileno" name="presentmobileno" type="tel"  pattern="[0-9]{10}" title="9999999999" class="form-control" value="<?php echo $resultSet['presentmobileno']; ?>" /><span id="mobile_error" style="color:red;"></span></div>
           <div class="col-sm-3">E-mail id*</div>
           <div class="col-sm-3"><input readonly type="email" id="emailid" name="emailid"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" class="form-control" value="<?php echo $resultSet['emailid']; ?>" /></div>
        </div><hr>
        <div class="row">
           <div class="col-sm-3">Permanent Address<br /><font class="if" style="font-size:9px">(If different from Present Address)</font></div>
           <div class="col-sm-3"><textarea readonly name="permanentaddress" id="permanentaddress"  class="form-control" value="" rows="2"><?php echo $resultSet['permanentaddress']; ?></textarea readonly></div>
           <div class="col-sm-3">Telephone No</div>
           <div class="col-sm-3"><input readonly type="text" id="permanenttelno" name="permanenttelno"   class="form-control" value="<?php echo $resultSet['permanenttelno']; ?>" /></div>
        </div><hr>
        <div class="row">
           <div class="col-sm-3">Mobile No</div>
           <div class="col-sm-3"><input readonly id="permanentmobileno" name="permanentmobileno" type="tel"  pattern="[0-9]{10}" title="9999999999"  class="form-control" value="<?php echo $resultSet['permanentmobileno']; ?>" /> <span id="pmobile_error" style="color:red;"></span></div>
           <div class="col-sm-3">Father's / Spouse's Name*</div>
           <div class="col-sm-3"><input readonly type="text" name="father_spousename" id="father_spousename"  class="form-control" value="<?php echo $resultSet['father_spousename']; ?>" /></div>
        </div><hr>
        <div class="head1"><b>Details of Children</b></div><br>
        <div class="row" id="show">
             <div class="col-sm-3">Name</div>
             <div class="col-sm-3">Date of Birth</div>
             <div class="col-sm-3">Class</div>
             <div class="col-sm-3">School</div>
        </div>
        <div class="row">             
             <div class="col-sm-3"><input readonly type="text" name="childrenname1" id="childrenname1"  class="form-control" value="<?php echo $resultSet['childrenname1']; ?>" /></div>
             
             <div class="col-sm-3"><input readonly type="text" name="childrendob1" id="childrendob1"  class="form-control" value="<?php echo $resultSet['childrendob1']; ?>" /></div>
             
             <div class="col-sm-3"><input readonly type="text" name="childrenclass1" id="childrenclass1"  class="form-control" value="<?php echo $resultSet['childrenclass1']; ?>" /></div>
             
             <div class="col-sm-3"><input readonly type="text" name="childrenschool1" id="childrenschool1"  class="form-control" value="<?php echo $resultSet['childrenschool1']; ?>" /></div>
        </div><br>
        <div class="row">
             
             <div class="col-sm-3"><input readonly type="text" name="childrenname2" id="childrenname2"  class="form-control" value="<?php echo $resultSet['childrenname2']; ?>" /></div>
             
             <div class="col-sm-3"><input readonly type="text" name="childrendob2" id="childrendob2"  class="form-control" value="<?php echo $resultSet['childrendob2']; ?>" /></div>
             
             <div class="col-sm-3"><input readonly type="text" name="childrenclass2" id="childrenclass2"  class="form-control" value="<?php echo $resultSet['childrenclass2']; ?>" /></div>
             
             <div class="col-sm-3"><input readonly type="text" name="childrenschool2" id="childrenschool2"  class="form-control" value="<?php echo $resultSet['childrenschool2']; ?>" /></div>
        </div>
        <hr>         
        <div class="head2"><b>Academic / Professional Qualifications</b></div><br>
        <div class="row" id="show">
           <div class="col-sm-2">Examination</div>
           <div class="col-sm-1">Year</div>
           <div class="col-sm-1">Marks/Grades</div>
           <div class="col-sm-1">Division</div>
           <div class="col-sm-1">Percentage</div>
           <div class="col-sm-2">School / College Attended</div>
           <div class="col-sm-2">University</div>
           <div class="col-sm-2">Subjects</div>
        </div><br>
        <div class="row">                  
           <div class="col-sm-2"><input readonly type="text" name="examination1" id="examination1"  class="form-control" value="<?php echo $resultSet['examination1']; ?>" /></div>           
           <div class="col-sm-1"><input readonly type="number" name="year1" id="year1"  class="form-control" value="<?php echo $resultSet['year1']; ?>" min="1980" max="2029" /></div>
           
           <div class="col-sm-1"><input readonly type="text" name="marksGrades1" id="marksGrades1"  class="form-control" value="<?php echo $resultSet['marksGrades1']; ?>" /></div>           
           <div class="col-sm-1"><input readonly type="text" name="division1" id="division1"  class="form-control" value="<?php echo $resultSet['division1']; ?>" /></div>           
           <div class="col-sm-1"><input readonly type="number" name="percentage1" id="percentage1" min="33" max="100" class="form-control" value="<?php echo $resultSet['percentage1']; ?>" /></div>
           
           <div class="col-sm-2"><input readonly type="text" name="schoolCollegeAttended1" id="schoolCollegeAttended1"  class="form-control" value="<?php echo $resultSet['schoolCollegeAttended1']; ?>" /></div>
           
           <div class="col-sm-2"><input readonly type="text" name="university1" id="university1"  class="form-control" value="<?php echo $resultSet['university1']; ?>" /></div>
           
           <div class="col-sm-2"><input readonly type="text" name="subjects1" id="subjects1"  class="form-control" value="<?php echo $resultSet['subjects1']; ?>" /></div>
        </div><br>
          <div class="row">           
           
           <div class="col-sm-2"><input readonly type="text" name="examination2" id="examination2"  class="form-control" value="<?php echo $resultSet['examination2']; ?>" /></div>
           
           <div class="col-sm-1"><input readonly type="number" min="1980" max="2029" name="year2" id="year2"  class="form-control" value="<?php echo $resultSet['year2']; ?>" /></div>
           
           <div class="col-sm-1"><input readonly type="text" name="marksGrades2" id="marksGrades2"  class="form-control" value="<?php echo $resultSet['marksGrades2']; ?>" /></div>
           
           <div class="col-sm-1"><input readonly type="text" name="division2" id="division2"  class="form-control" value="<?php echo $resultSet['division2']; ?>" /></div>
           
           <div class="col-sm-1"><input readonly type="number" name="percentage2" id="percentage2" min="33" max="100"  class="form-control" value="<?php echo $resultSet['percentage2']; ?>" /></div>
           
           <div class="col-sm-2"><input readonly type="text" name="schoolCollegeAttended2" id="schoolCollegeAttended2"  class="form-control" value="<?php echo $resultSet['schoolCollegeAttended2']; ?>" /></div>
           
           <div class="col-sm-2"><input readonly type="text" name="university2" id="university2"  class="form-control" value="<?php echo $resultSet['university2']; ?>" /></div>
           
           <div class="col-sm-2"><input readonly type="text" name="subjects2" id="subjects2"  class="form-control" value="<?php echo $resultSet['subjects2']; ?>" /></div>
        </div><br>
        <div class="row">
           <div class="col-sm-2"><input readonly type="text" name="examination3" id="examination3"  class="form-control" value="<?php echo $resultSet['examination3']; ?>" /></div>
        
           <div class="col-sm-1"><input readonly type="number" name="year3" id="year3" min="1980" max="2029" class="form-control" value="<?php echo $resultSet['year3']; ?>" /></div>
        
           <div class="col-sm-1"><input readonly type="text" name="marksGrades3" id="marksGrades3"  class="form-control" value="<?php echo $resultSet['marksGrades3']; ?>" /></div>
        
           <div class="col-sm-1"><input readonly type="text" name="division3" id="division3"  class="form-control" value="<?php echo $resultSet['division3']; ?>" /></div>
        
           <div class="col-sm-1"><input readonly type="number" name="percentage3" id="percentage3" min="33" max="100"  class="form-control" value="<?php echo $resultSet['percentage3']; ?>" /></div>
        
           <div class="col-sm-2"><input readonly type="text" name="schoolCollegeAttended3" id="schoolCollegeAttended3"  class="form-control" value="<?php echo $resultSet['schoolCollegeAttended3']; ?>" /></div>
        
           <div class="col-sm-2"><input readonly type="text" name="university3" id="university3"  class="form-control" value="<?php echo $resultSet['university3']; ?>" /></div>
        
           <div class="col-sm-2"><input readonly type="text" name="subjects3" id="subjects3"  class="form-control" value="<?php echo $resultSet['subjects3']; ?>" /></div>
        </div><br>
        <div class="row">
          <div class="col-sm-2"><input readonly type="text" name="examination4" id="examination4"  class="form-control" value="<?php echo $resultSet['examination4']; ?>" /></div>
        
           <div class="col-sm-1"><input readonly type="number" name="year4" id="year4" min="1980" max="2029" class="form-control" value="<?php echo $resultSet['year4']; ?>" /></div>
        
           <div class="col-sm-1"><input readonly type="text" name="marksGrades4" id="marksGrades4"  class="form-control" value="<?php echo $resultSet['marksGrades4']; ?>" /></div>
        
           <div class="col-sm-1"><input readonly type="text" name="division4" id="division4"  class="form-control" value="<?php echo $resultSet['division4']; ?>" /></div>
        
           <div class="col-sm-1"><input readonly type="number" name="percentage4" id="percentage4" min="33" max="100" class="form-control" value="<?php echo $resultSet['percentage4']; ?>" /></div>
        
           <div class="col-sm-2"><input readonly type="text" name="schoolCollegeAttended4" id="schoolCollegeAttended4"  class="form-control" value="<?php echo $resultSet['schoolCollegeAttended4']; ?>" /></div>
        
           <div class="col-sm-2"><input readonly type="text" name="university4" id="university4"  class="form-control" value="<?php echo $resultSet['university4']; ?>" /></div>
           
           <div class="col-sm-2"><input readonly type="text" name="subjects4" id="subjects4"  class="form-control" value="<?php echo $resultSet['subjects4']; ?>" /></div>
        </div><br>
        <div class="row">
           <div class="col-sm-2"><input readonly type="text" name="examination5" id="examination5"  class="form-control" value="<?php echo $resultSet['examination5']; ?>" /></div>
        
           <div class="col-sm-1"><input readonly type="number" name="year5" id="year5" min="1980" max="2029" class="form-control" value="<?php echo $resultSet['year5']; ?>" /></div>
        
           <div class="col-sm-1"><input readonly type="text" name="marksGrades5" id="marksGrades5"  class="form-control" value="<?php echo $resultSet['marksGrades5']; ?>" /></div>
        
           <div class="col-sm-1"><input readonly type="text" name="division5" id="division5"  class="form-control" value="<?php echo $resultSet['division5']; ?>" /></div>
           
           <div class="col-sm-1"><input readonly type="number" name="percentage5" id="percentage5" min="33" max="100" class="form-control" value="<?php echo $resultSet['percentage5']; ?>" /></div>
           
           <div class="col-sm-2"><input readonly type="text" name="schoolCollegeAttended5" id="schoolCollegeAttended5"  class="form-control" value="<?php echo $resultSet['schoolCollegeAttended5']; ?>" /></div>
           
           <div class="col-sm-2"><input readonly type="text" name="university5" id="university5"  class="form-control" value="<?php echo $resultSet['university5']; ?>" /></div>
           
           <div class="col-sm-2"><input readonly type="text" name="subjects5" id="subjects5"  class="form-control" value="<?php echo $resultSet['subjects5']; ?>" /></div>
        </div><br>
        <div class="row">        
           <div class="col-sm-2"><input readonly type="text" name="examination6" id="examination6"  class="form-control" value="<?php echo $resultSet['examination6']; ?>" /></div>
           
           <div class="col-sm-1"><input readonly type="number" name="year6" id="year6" min="1980" max="2029" class="form-control" value="<?php echo $resultSet['year6']; ?>" /></div>
           
           <div class="col-sm-1"><input readonly type="text" name="marksGrades6" id="marksGrades6"  class="form-control" value="<?php echo $resultSet['marksGrades6']; ?>" /></div>
           
           <div class="col-sm-1"><input readonly type="text" name="division6" id="division6"  class="form-control" value="<?php echo $resultSet['division6']; ?>" /></div>
           
           <div class="col-sm-1"><input readonly type="number" name="percentage6" id="percentage6" min="33" max="100"  class="form-control" value="<?php echo $resultSet['percentage6']; ?>" /></div>
           
           <div class="col-sm-2"><input readonly type="text" name="schoolCollegeAttended6" id="schoolCollegeAttended6"  class="form-control" value="<?php echo $resultSet['schoolCollegeAttended6']; ?>" /></div>
           
           <div class="col-sm-2"><input readonly type="text" name="university6" id="university6"  class="form-control" value="<?php echo $resultSet['university6']; ?>" /></div>
           
           <div class="col-sm-2"><input readonly type="text" name="subjects6" id="subjects6"  class="form-control" value="<?php echo $resultSet['subjects6']; ?>" /></div>
        </div><br>
        <div class="row">        
           <div class="col-sm-2"><input readonly type="text" name="examination7" id="examination7"  class="form-control" value="<?php echo $resultSet['examination7']; ?>" /></div>
           
           <div class="col-sm-1"><input readonly type="number" name="year7" id="year7"  min="1980" max="2029" class="form-control" value="<?php echo $resultSet['year7']; ?>" /></div>
           
           <div class="col-sm-1"><input readonly type="text" name="marksGrades7" id="marksGrades7"  class="form-control" value="<?php echo $resultSet['marksGrades7']; ?>" /></div>
           
           <div class="col-sm-1"><input readonly type="text" name="division7" id="division7"  class="form-control" value="<?php echo $resultSet['division7']; ?>" /></div>
           
           <div class="col-sm-1"><input readonly type="number" name="percentage7" id="percentage7" min="33" max="100" class="form-control" value="<?php echo $resultSet['percentage7']; ?>" /></div>
           
           <div class="col-sm-2"><input readonly type="text" name="schoolCollegeAttended7" id="schoolCollegeAttended7"  class="form-control" value="<?php echo $resultSet['schoolCollegeAttended7']; ?>" /></div>
           
           <div class="col-sm-2"><input readonly type="text" name="university7" id="university7"  class="form-control" value="<?php echo $resultSet['university7']; ?>" /></div>
           
           <div class="col-sm-2"><input readonly type="text" name="subjects7" id="subjects7"  class="form-control" value="<?php echo $resultSet['subjects7']; ?>" /></div>
        </div><hr>
        <div class="head2"><b>Details of experience in recognised schools / institutions</b></div>
        <div class="row" id="show">
           <div class="col-sm-1">S.No</div>
           <div class="col-sm-3">Name of the Institution where served</div>
           <div class="col-sm-2">Post</div>
           <div class="col-sm-2 "><div class="col-sm-12">Period</div><div class="col-sm-6">From</div><div class="col-sm-6">To</div></div>
           <div class="col-sm-1">Number of years / months</div>
           <div class="col-sm-3 "><div class="col-sm-12"><center>Subjects and Classes Taught</center></div>
           <div class="col-sm-8"><br>Subjects</div><div class="col-sm-4"><br>Classes</div></div>
        </div><br>          
        <div class="row">
           <div class="col-sm-1 ">1.</div>
        
           <div class="col-sm-3 "><input readonly type="text" name="institutionname1" id="institutionname1"  class="form-control" value="<?php echo $resultSet['institutionname1']; ?>" /></div>
        
           <div class="col-sm-2"><input readonly type="text" name="post1" id="post1"  class="form-control" value="<?php echo $resultSet['post1']; ?>" /></div>
        
           <div class="col-sm-1"><input readonly type="text" name="fromdate1" id="fromdate1"  class="form-control" value="<?php echo $resultSet['fromdate1']; ?>" /></div>
        
           <div class="col-sm-1"><input readonly type="text" name="todate1" id="todate1"  class="form-control" value="<?php echo $resultSet['todate1']; ?>" /></div>
        
           <div class="col-sm-1"><input readonly type="text" name="noofyear_month1" id="noofyear_month1"  class="form-control" value="<?php echo $resultSet['noofyear_month1']; ?>"/></div>
        
           <div class="col-sm-2"><input readonly type="text" name="subject1" id="subject1"  class="form-control" value="<?php echo $resultSet['subject1']; ?>" /></div>
        
           <div class="col-sm-1"><input readonly type="text" name="class1" id="class1"  class="form-control" value="<?php echo $resultSet['class1']; ?>" /></div>
        </div><br>
        <div class="row">
           <div class="col-sm-1 ">2.</div>
        
           <div class="col-sm-3 "><input readonly type="text" name="institutionname2" id="institutionname2"  class="form-control" value="<?php echo $resultSet['institutionname2']; ?>" /></div>
           
           <div class="col-sm-2"><input readonly type="text" name="post2" id="post2"  class="form-control" value="<?php echo $resultSet['post2']; ?>" /></div>
           
           <div class="col-sm-1"><input readonly type="text" name="fromdate2" id="fromdate2"  class="form-control" value="<?php echo $resultSet['fromdate2']; ?>" /></div>
           
           <div class="col-sm-1"><input readonly type="text" name="todate2" id="todate2"  class="form-control" value="<?php echo $resultSet['todate2']; ?>" /></div>
           
           <div class="col-sm-1"><input readonly type="text" name="noofyear_month2" id="noofyear_month2"  class="form-control" value="<?php echo $resultSet['noofyear_month2']; ?>" /></div>
           
           <div class="col-sm-2"><input readonly type="text" name="subject2" id="subject2"  class="form-control" value="<?php echo $resultSet['subject2']; ?>" /></div>
           
           <div class="col-sm-1"><input readonly type="text" name="class2" id="class2"  class="form-control" value="<?php echo $resultSet['class2']; ?>" /></div>
        </div><br>
        <div class="row">
           <div class="col-sm-1 ">3.</div>
        
           <div class="col-sm-3 "><input readonly type="text" name="institutionname3" id="institutionname3"  class="form-control" value="<?php echo $resultSet['institutionname3']; ?>" /></div>
        
           <div class="col-sm-2"><input readonly type="text" name="post3" id="post3"  class="form-control" value="<?php echo $resultSet['post3']; ?>" /></div>
           
           <div class="col-sm-1"><input readonly type="text" name="fromdate3" id="fromdate3"  class="form-control" value="<?php echo $resultSet['fromdate3']; ?>" /></div>
           
           <div class="col-sm-1"><input readonly type="text" name="todate3" id="todate3"  class="form-control" value="<?php echo $resultSet['todate3']; ?>" /></div>
           
           <div class="col-sm-1"><input readonly type="text" name="noofyear_month3" id="noofyear_month3"  class="form-control" value="<?php echo $resultSet['noofyear_month3']; ?>" /></div>
           
           <div class="col-sm-2"><input readonly type="text" name="subject3" id="subject3"  class="form-control" value="<?php echo $resultSet['subject3']; ?>" /></div>
           
           <div class="col-sm-1"><input readonly type="text" name="class3" id="class3"  class="form-control" value="<?php echo $resultSet['class3']; ?>" /></div>
        </div><br>
        <div class="row">
           <div class="col-sm-1 ">4.</div>
        
           <div class="col-sm-3 "><input readonly type="text" name="institutionname4" id="institutionname4"  class="form-control" value="<?php echo $resultSet['institutionname4']; ?>" /></div>
        
           <div class="col-sm-2"><input readonly type="text" name="post4" id="post4"  class="form-control" value="<?php echo $resultSet['post4']; ?>" /></div>
        
           <div class="col-sm-1"><input readonly type="text" name="fromdate4" id="fromdate4"  class="form-control" value="<?php echo $resultSet['fromdate4']; ?>" /></div>
        
           <div class="col-sm-1"><input readonly type="text" name="todate4" id="todate4"  class="form-control" value="<?php echo $resultSet['todate4']; ?>" /></div>
        
           <div class="col-sm-1"><input readonly type="text" name="noofyear_month4" id="noofyear_month4"  class="form-control" value="<?php echo $resultSet['noofyear_month4']; ?>" /></div>
        
           <div class="col-sm-2"><input readonly type="text" name="subject4" id="subject4"  class="form-control" value="<?php echo $resultSet['subject4']; ?>" /></div>
           
           <div class="col-sm-1"><input readonly type="text" name="class4" id="class4"  class="form-control" value="<?php echo $resultSet['class4']; ?>" /></div>
        </div><br>
        <div class="row">
           <div class="col-sm-1 ">5.</div>
        
           <div class="col-sm-3 "><input readonly type="text" name="institutionname5" id="institutionname5"  class="form-control" value="<?php echo $resultSet['institutionname5']; ?>" /></div>
        
           <div class="col-sm-2"><input readonly type="text" name="post5" id="post5"  class="form-control" value="<?php echo $resultSet['post5']; ?>" /></div>
           
           <div class="col-sm-1"><input readonly type="text" name="fromdate5" id="fromdate5"  class="form-control" value="<?php echo $resultSet['fromdate5']; ?>" /></div>
           
           <div class="col-sm-1"><input readonly type="text" name="todate5" id="todate5"  class="form-control" value="<?php echo $resultSet['todate5']; ?>" /></div>
           
           <div class="col-sm-1"><input readonly type="text" name="noofyear_month5" id="noofyear_month5"  class="form-control" value="<?php echo $resultSet['noofyear_month5']; ?>" /></div>
           
           <div class="col-sm-2"><input readonly type="text" name="subject5" id="subject5"  class="form-control" value="<?php echo $resultSet['subject5']; ?>" /></div>
           
           <div class="col-sm-1"><input readonly type="text" name="class5" id="class5"  class="form-control" value="<?php echo $resultSet['class5']; ?>" /></div>
        </div><hr>                 
        <div class="row">
           <div class="col-sm-3"><b>Total Experience</b></div>
           <div class="col-sm-3">
            &nbsp;<font><b>Years</b></font>
            	<input readonly type="text" name="totalexperience" id="totalexperience"  class="form-control" value="<?php echo $resultSet['totalexperience']; ?>" ="true" />
            </div>
            <div class="col-sm-3">
            &nbsp;<font><b>Months</b></font>
            	<input readonly type="text" name="totalexperience" id="experiencemonth"  class="form-control" value="<?php echo $resultSet['experiencemonth']; ?>" ="true" />
            </div>
            <div class="col-sm-3"><font><b>as on</b></font><input readonly type="text" name="experiencedate" id="experiencedate"  class="form-control" value="<?php echo $resultSet['experiencedate']; ?>" placeholder="dd/mm/yyyy" /></div>  
          </div><hr>     
            <div class="head2"><b>Details of Workshops / Courses attended</b></div>
            <div class="row" id="show">
            <div class="col-sm-1">&nbsp;</div>
            <div class="col-sm-2">Year</div>
            <div class="col-sm-2">Duration</div>
            <div class="col-sm-3">Institute</div>
            <div class="col-sm-4">Name of the Workshop</div>            

        <div class="row">
           <div class="col-sm-1">a)</div>
           
           <div class="col-sm-2"><input readonly type="number" name="workshopCourseYear1" min="1980" max="2029" id="workshopCourseYear1"  class="form-control" value="<?php echo $resultSet['workshopCourseYear1']; ?>" /></div>
           
           <div class="col-sm-2"><input readonly type="text" name="workshopCourseDuration1" id="workshopCourseDuration1"  class="form-control" value="<?php echo $resultSet['workshopCourseDuration1']; ?>" /></div>
           
           <div class="col-sm-3"><input readonly type="text" name="workshopCourseInstitute1" id="workshopCourseInstitute1"  class="form-control" value="<?php echo $resultSet['workshopCourseInstitute1']; ?>" /></div>
           
           <div class="col-sm-4"><input readonly type="text" name="workshopCourseWorkshopname1" id="workshopCourseWorkshopname1"  class="form-control" value="<?php echo $resultSet['workshopCourseWorkshopname1']; ?>" /></div>
        </div><br>
        <div class="row">
           <div class="col-sm-1">b)</div>
        
           <div class="col-sm-2"><input readonly type="text"  min="1980" max="2029" name="workshopCourseYear2" id="workshopCourseYear2"  class="form-control" value="<?php echo $resultSet['workshopCourseYear2']; ?>" /></div>
        
           <div class="col-sm-2"><input readonly type="text" name="workshopCourseDuration2" id="workshopCourseDuration2"  class="form-control" value="<?php echo $resultSet['workshopCourseDuration2']; ?>" /></div>
           
           <div class="col-sm-3"><input readonly type="text" name="workshopCourseInstitute2" id="workshopCourseInstitute2"  class="form-control" value="<?php echo $resultSet['workshopCourseInstitute2']; ?>" /></div>
           
           <div class="col-sm-4"><input readonly type="text" name="workshopCourseWorkshopname2" id="workshopCourseWorkshopname2"  class="form-control" value="<?php echo $resultSet['workshopCourseWorkshopname2']; ?>" /></div>
        </div><br>
        <div class="row">
           <div class="col-sm-1">c)</div>
        
           <div class="col-sm-2"><input readonly type="text"  min="1980" max="2029" pattern="[0-9]{4}" name="workshopCourseYear3" id="workshopCourseYear3"class="form-control" value="<?php echo $resultSet['workshopCourseYear3']; ?>" /></div>
        
           <div class="col-sm-2"><input readonly type="text" name="workshopCourseDuration3" id="workshopCourseDuration3"  class="form-control" value="<?php echo $resultSet['workshopCourseDuration3']; ?>" /></div>
        
           <div class="col-sm-3"><input readonly type="text" name="workshopCourseInstitute3" id="workshopCourseInstitute3"  class="form-control" value="<?php echo $resultSet['workshopCourseInstitute3']; ?>" /></div>
           
           <div class="col-sm-4"><input readonly type="text" name="workshopCourseWorkshopname3" id="workshopCourseWorkshopname3"  class="form-control" value="<?php echo $resultSet['workshopCourseWorkshopname3']; ?>" /></div>
        </div><hr>         
        <div class="head2"><b>Details of Administrative experience, if any</b></div>
        <div class="row" id="show">
           <div class="col-sm-1">&nbsp;</div>
           <div class="col-sm-2">Period</div>
           <div class="col-sm-4">Designation</div>
           <div class="col-sm-5">Responsibilities Handled</div>
        </div>
        <div class="row">
           <div class="col-sm-1 ">a)</div>
           
           <div class="col-sm-2"><input readonly type="text" id="adExPeriod1" name="adExPeriod1"  class="form-control" value="<?php echo $resultSet['adExPeriod1']; ?>" /></div>
           
           <div class="col-sm-4"><input readonly type="text" id="adExdesignation1" name="adExdesignation1"  class="form-control" value="<?php echo $resultSet['adExdesignation1']; ?>" /></div>
           
           <div class="col-sm-5"><input readonly type="text" id="adExResponsibility1" name="adExResponsibility1"  class="form-control" value="<?php echo $resultSet['adExResponsibility1']; ?>" /></div>
        </div><br>
        <div class="row">
           <div class="col-sm-1 ">b)</div>
        
           <div class="col-sm-2"><input readonly type="text" id="adExPeriod2" name="adExPeriod2"  class="form-control" value="<?php echo $resultSet['adExPeriod2']; ?>" /></div>
        
           <div class="col-sm-4"><input readonly type="text" id="adExdesignation2" name="adExdesignation2"  class="form-control" value="<?php echo $resultSet['adExdesignation2']; ?>" /></div>
           
           <div class="col-sm-5"><input readonly type="text" id="adExResponsibility2" name="adExResponsibility2"  class="form-control" value="<?php echo $resultSet['adExResponsibility2']; ?>" /></div>
        </div><hr>     
        <div class="row">
           <div class="col-sm-3"><strong>Certification</strong> (if any)</div>
           <div class="col-sm-3"><input readonly type="text" name="certification" id="certification"  class="form-control" value="<?php echo $resultSet['certification']; ?>" /></div>
           <div class="col-sm-3">Countries visited</div>
           <div class="col-sm-3 "><input readonly type="text" name="countriesVisited" id="countriesVisited"  class="form-control" value="<?php echo $resultSet['countriesVisited']; ?>" /></div>
        </div><br>
        <div class="row">
           <div class="col-sm-3 ">Knowledge of foreign language(s)</div>
           <div class="col-sm-3"><input readonly type="text" name="foreginlanguage" id="foreginlanguage"  class="form-control" value="<?php echo $resultSet['foreginlanguage']; ?>" /></div>
           <div class="col-sm-6">&nbsp;</div>
        </div><br>
        <div class="row">
           <div class="col-sm-3">Reason for leaving (last Organisation)</div>
           <div class="col-sm-3 "><input readonly type="text" name="terminationReason" id="terminationReason"  class="form-control" value="<?php echo $resultSet['terminationReason']; ?>" /></div>
           <div class="col-sm-3">Salary & allowances last drawn: Scale</div>
           <div class="col-sm-3 "><input readonly type="text" name="terminationSalaryScale" id="terminationSalaryScale"  class="form-control" value="<?php echo $resultSet['terminationSalaryScale']; ?>" /></div>
        </div><br>
        <div class="row">
           <div class="col-sm-3">Basic Salary (Per Month)</div>
           <div class="col-sm-3"><input readonly type="text" name="terminationBasicSalary" id="terminationBasicSalary"  class="form-control" value="<?php echo $resultSet['terminationBasicSalary']; ?>" /></div>
           <div class="col-sm-3">Plus allowances (Rs)(Per Month)</div>
           <div class="col-sm-3 "><input readonly type="text" name="terminationPlusAllowance" id="terminationPlusAllowance"  class="form-control" value="<?php echo $resultSet['terminationPlusAllowance']; ?>" /></div>
        </div><br>
        <div class="row">
           <div class="col-sm-3">Total Rs.(Per Month)</div>
           <div class="col-sm-3"><input readonly type="text" name="terminationTotal" id="terminationTotal"  class="form-control" value="<?php echo $resultSet['terminationTotal']; ?>" /></div>
           <div class="col-sm-6">&nbsp;</div>
        </div><hr>        
        <div class="row">
           <div class="col-sm-12"><strong>Major achievements (if any)</strong></div>
        </div>
        <div class="row">
           <div class="col-sm-4">a)&nbsp;<input readonly type="text" name="majorAchievement1" id="majorAchievement1"  class="form-control" value="<?php echo $resultSet['majorAchievement1']; ?>" /></div>
           <div class="col-sm-4">b)&nbsp;<input readonly type="text" name="majorAchievement2" id="majorAchievement2"  class="form-control" value="<?php echo $resultSet['majorAchievement2']; ?>" /></div>
           <div class="col-sm-4">c)&nbsp;<input readonly type="text" name="majorAchievement3" id="majorAchievement3"  class="form-control" value="<?php echo $resultSet['majorAchievement3']; ?>" /></div>
        </div><br>        
        <div class="head2"><b>Please mention any three extra curricular activities in which you can train students</b></div>
        <div class="row">
           <div class="col-sm-4">a)&nbsp;<input readonly type="text" name="extracurricular1" id="extracurricular1"  class="form-control" value="<?php echo $resultSet['extracurricular1']; ?>" /></div>
           <div class="col-sm-4">b)&nbsp;<input readonly type="text" name="extracurricular2" id="extracurricular2"  class="form-control" value="<?php echo $resultSet['extracurricular2']; ?>" /></div>
           <div class="col-sm-4">c)&nbsp;<input readonly type="text" name="extracurricular3" id="extracurricular3"  class="form-control" value="<?php echo $resultSet['extracurricular3']; ?>" /></div>
        </div>
        <hr>          
        <div class="head2"><b>Name, Designation with Telephone / Mobile number and address of two references (Academic / Teaching) :</b></div><br>
          <div class="row">
           <div class="col-sm-6">
            <div class="he2"><strong>Reference</strong> (Person 1)</div>
             <div class="row">
              <div class="col-sm-6">Name*</div>
              <div class="col-sm-6"><input readonly type="text" name="referencePersonName1" id="referencePersonName1"  class="form-control" value="<?php echo $resultSet['referencePersonName1']; ?>"  /></div>
             </div><br>
             <div class="row">
              <div class="col-sm-6">Designation*</div>
              <div class="col-sm-6"><input readonly type="text" name="referencePersonDesignation1" id="referencePersonDesignation1"  class="form-control" value="<?php echo $resultSet['referencePersonDesignation1']; ?>"  /><span id="msg"></span></div>
             </div><br>
             <div class="row">
              <div class="col-sm-6">Telephone No. / Mobile*</div>
              <div class="col-sm-6"><input readonly  name="referencePersonTelNo1" id="referencePersonTelNo1"  class="form-control" value="<?php echo $resultSet['referencePersonTelNo1']; ?>"  type="tel"  pattern="[0-9]{10}" title="9999999999" /></div>
             </div><br>
             <div class="row">
              <div class="col-sm-6">Address*</div>
              <div class="col-sm-6"><input readonly type="text" name="referencePersonAddress1" id="referencePersonAddress1"  class="form-control" value="<?php echo $resultSet['referencePersonAddress1']; ?>"  /></div>
             </div>
           </div>
           <div class="col-sm-6">
            <div class="he2"><strong>Reference</strong> (Person 2)</div>
             <div class="row">
              <div class="col-sm-6">Name*</div>
              <div class="col-sm-6"><input readonly type="text" name="referencePersonName2" id="referencePersonName2"  class="form-control" value="<?php echo $resultSet['referencePersonName2']; ?>"  /></div>
             </div><br>
             <div class="row">
              <div class="col-sm-6">Designation*</div>
              <div class="col-sm-6"><input readonly type="text" name="referencePersonDesignation2" id="referencePersonDesignation2"  class="form-control" value="<?php echo $resultSet['referencePersonDesignation2']; ?>"  /></div>
             </div><br>
             <div class="row">
              <div class="col-sm-6">Telephone No. / Mobile*</div>
              <div class="col-sm-6"><input readonly type="text" onblur="chkmobile(this.id)"  name="referencePersonTelNo2" id="referencePersonTelNo2"  class="form-control" value="<?php echo $resultSet['referencePersonTelNo2']; ?>" /></div>
             </div><br>
             <div class="row">
              <div class="col-sm-6">Address*</div>
              <div class="col-sm-6"><input readonly type="text" name="referencePersonAddress2" id="referencePersonAddress2"  class="form-control" value="<?php echo $resultSet['referencePersonAddress2']; ?>" /></div>
             </div>
             <hr>
          </div>         
          <div class="head2"><b>Documents to be Uploaded(Please note maximum file size allowed per upload is 300 KB)</b></div>
          <div>&nbsp;</div>
          <div class="row">
            <div class="col-sm-6 s"> 1. Age Proof* :</div>
            <div class="col-sm-6 s1" id="zoom"><img width="50px" height="50px" src="../images/files/<?php echo $resultSet['age_proof']; ?>"></div>
          </div><br>
          <div class="row">
            <div class="col-sm-6 s"> 2. Class X Marksheet* :</div>
            <div class="col-sm-6 s1" id="zoom"> <img width="50px" height="50px" src="../images/files/<?php echo $resultSet['class10_marksheet']; ?>" ></div>
          </div><br>
          <div class="row">
            <div class="col-sm-6 s"> 3. Class XII Marksheet* :</div>
            <div class="col-sm-6 s1" id="zoom"> <img width="50px" height="50px" src="../images/files/<?php echo $resultSet['class12_marksheet']; ?>"></div>
          </div><br>
          <div class="row">
            <div class="col-sm-6 s"> 4. Graduation Marksheet* : </div>
            <div class="col-sm-6 s1" id="zoom"> <img width="50px" height="50px" src="../images/files/<?php echo $resultSet['graduation_marksheet']; ?>"></div>
          </div><br>
          <div class="row">
            <div class="col-sm-6 s"> 5. Post Graduation Marksheet* :</div>
            <div class="col-sm-6 s1" id="zoom"> <img width="50px" height="50px" src="../images/files/<?php echo $resultSet['post_graduation_marksheet']; ?>" ></div>
          </div><br>
          <div class="row">
            <div class="col-sm-6 s"> 6. B.Ed Marksheet : </div>
            <div class="col-sm-6 s1" id="zoom"> <img width="50px" height="50px" src="../images/files/<?php echo $resultSet['B_ed_marksheet']; ?>"></div>
          </div><br>
          <div class="row">
            <div class="col-sm-6 s"> 7. CTET Marksheet :</div>
            <div class="col-sm-6 s1" id="zoom"> <img width="50px" height="50px" src="../images/files/<?php echo $resultSet['ctet_marksheet']; ?>"></div>
          </div><hr>          
          <div class="row">
            <div class="col-sm-6">The exact period after which you can join*<br>(if selected)</div>
            <div class="col-sm-6"><input readonly type="text" name="exactPeriodjoin" id="exactPeriodjoin"  class="form-control" value="<?php echo $resultSet['exactPeriodjoin']; ?>" /></div>
            <div class="col-sm-6" id="hidden">&nbsp;</div>
          </div>
          <div class="row">
            <div class="col-sm-6">Remarks (if any)</div>
            <div class="col-sm-6"><input readonly type="text" name="remarks" id="remarks"  class="form-control" value="<?php echo $resultSet['remarks']; ?>" ></div>
            <div class="col-sm-6" id="hidden">&nbsp;</div>
          </div>                     
          <hr>
         <div class="row">
            <div class="head2" style="padding-left:10px;"><strong>Declaration:</strong>
          <p><b>&raquo;	</b> I understand that rendering false / incorrect or misleading information in the Job Application shall disqualify my candidature.</p>
          </div> 
          <div class="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input readonly type="checkbox" name="declare" checked id="declare" disabled>&nbsp;&nbsp;I hereby confirm the above declarations.</div> 
          <div class="col-sm-2 hed1">&nbsp;</div>
        </div>
        <div class="row">
           <div class="col-sm-2">Date :</div>
           <?php $currentdate=date("d-m-Y"); ?>
           <div class="col-sm-3"><input readonly typr="text" name="filling_date" class="form-control" value="<?php echo $currentdate;?>"  /></div>
        </div>   
        <div class="text15"> 
           <div align="center"><a href="#" onClick="window.print() ;">Print</a></div>
        </div><br><br><hr>
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

