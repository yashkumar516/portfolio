<?php
  session_start();
  include '../../include/Confile.php';                

  if (isset($_POST['submit'])) {

      $apno=$_POST['serialno'];
      $receivedon=$_POST['receivedon'];

      $profilephoto=$_FILES['profilephoto']['name'];
      move_uploaded_file($profilephoto, '../images/profile/'.$profilephoto);

      $postapplied=$_POST['postapplied'];
      $subject=$_POST['subject'];
      $name=$_POST['name'];
      $dob=$_POST['dob'];
      $age=$_POST['age'];
      $nationality=$_POST['nationality'];
      $maritalstatus=$_POST['maritalstatus'];
      $gender=$_POST['gender'];
      $presentaddress=$_POST['presentaddress'];
      $presenttelno=$_POST['presenttelno'];
      $presentmobileno=$_POST['presentmobileno'];
      $emailid=$_POST['emailid'];
      $permanentaddress=$_POST['permanentaddress'];
      $permanenttelno=$_POST['permanenttelno'];
      $permanentmobileno=$_POST['permanentmobileno'];
      $father_spousename=$_POST['father_spousename'];
      $childrenname1=$_POST['childrenname1'];
      $childrendob1=$_POST['childrendob1'];
      $childrenclass1=$_POST['childrenclass1'];
      $childrenschool1=$_POST['childrenschool1'];
      $childrenname2=$_POST['childrenname2'];
      $childrendob2=$_POST['childrendob2'];
      $childrenclass2=$_POST['childrenclass2'];
      $childrenschool2=$_POST['childrenschool2'];
      $examination1=$_POST['examination1'];
      $year1 =$_POST['year1'];
      $marksGrades1 =$_POST['marksGrades1'];
      $division1 =$_POST['division1'];
      $percentage1 =$_POST['percentage1'];
      $schoolCollegeAttended1 =$_POST['schoolCollegeAttended1'];
      $university1 =$_POST['university1'];
      $subjects1 =$_POST['subjects1'];

      $examination2=$_POST['examination2'];
      $year2 =$_POST['year2'];
      $marksGrades2 =$_POST['marksGrades2'];
      $division2 =$_POST['division2'];
      $percentage2 =$_POST['percentage2'];
      $schoolCollegeAttended2 =$_POST['schoolCollegeAttended2'];
      $university2 =$_POST['university2'];
      $subjects2 =$_POST['subjects2'];

      $examination3=$_POST['examination3'];
      $year3 =$_POST['year3'];
      $marksGrades3 =$_POST['marksGrades3'];
      $division3 =$_POST['division3'];
      $percentage3 =$_POST['percentage3'];
      $schoolCollegeAttended3 =$_POST['schoolCollegeAttended3'];
      $university3 =$_POST['university3'];
      $subjects3 =$_POST['subjects3'];

      $examination4=$_POST['examination4'];
      $year4 =$_POST['year4'];
      $marksGrades4 =$_POST['marksGrades4'];
      $division4 =$_POST['division4'];
      $percentage4=$_POST['percentage4'];
      $schoolCollegeAttended4 =$_POST['schoolCollegeAttended4'];
      $university4=$_POST['university4'];
      $subjects4 =$_POST['subjects4'];

      $examination5=$_POST['examination5'];
      $year5 =$_POST['year5'];
      $marksGrades5 =$_POST['marksGrades5'];
      $division5 =$_POST['division5'];
      $percentage5 =$_POST['percentage5'];
      $schoolCollegeAttended5 =$_POST['schoolCollegeAttended5'];
      $university5 =$_POST['university5'];
      $subjects5 =$_POST['subjects5'];

      $examination6=$_POST['examination6'];
      $year6 =$_POST['year6'];
      $marksGrades6 =$_POST['marksGrades6'];
      $division6 =$_POST['division6'];
      $percentage6 =$_POST['percentage6'];
      $schoolCollegeAttended6 =$_POST['schoolCollegeAttended6'];
      $university6 =$_POST['university6'];
      $subjects6=$_POST['subjects6'];

      $examination7=$_POST['examination7'];
      $year7 =$_POST['year7'];
      $marksGrades7 =$_POST['marksGrades7'];
      $division7 =$_POST['division7'];
      $percentage7=$_POST['percentage7'];
      $schoolCollegeAttended7 =$_POST['schoolCollegeAttended7'];
      $university7 =$_POST['university7'];
      $subjects7 =$_POST['subjects7'];

      $institutionname1 = $_POST['institutionname1'];
      $post1 = $_POST['post1'];
      $fromdate1 = $_POST['fromdate1'];
      $todate1 = $_POST['todate1'];
      $noofyear_month1 = $_POST['noofyear_month1'];
      $subject1 = $_POST['subject1'];
      $class1 = $_POST['class1'];

      $institutionname2 = $_POST['institutionname2'];
      $post2 = $_POST['post2'];
      $fromdate2 = $_POST['fromdate2'];
      $todate2 = $_POST['todate2'];
      $noofyear_month2 = $_POST['noofyear_month2'];
      $subject2 = $_POST['subject2'];
      $class2 = $_POST['class2'];

      $institutionname3 = $_POST['institutionname3'];
      $post3 = $_POST['post3'];
      $fromdate3 = $_POST['fromdate3'];
      $todate3 = $_POST['todate3'];
      $noofyear_month3 = $_POST['noofyear_month3'];
      $subject3 = $_POST['subject3'];
      $class3 = $_POST['class3'];

      $institutionname4 = $_POST['institutionname4'];
      $post4 = $_POST['post4'];
      $fromdate4 = $_POST['fromdate4'];
      $todate4 = $_POST['todate4'];
      $noofyear_month4 = $_POST['noofyear_month4'];
      $subject4 = $_POST['subject4'];
      $class4 = $_POST['class4'];

      $institutionname5 = $_POST['institutionname5'];
      $post5 = $_POST['post5'];
      $fromdate5 = $_POST['fromdate5'];
      $todate5 = $_POST['todate5'];
      $noofyear_month5 = $_POST['noofyear_month5'];
      $subject5 = $_POST['subject5'];
      $class5 = $_POST['class5'];

      $totalexperience= $_POST['totalexperience'];
      $experiencemonth=$_POST['experiencemonth'];
      $experiencedate=$_POST['experiencedate'];

      $workshopCourseYear1 =$_POST['workshopCourseYear1'];
      $workshopCourseDuration1 =$_POST['workshopCourseDuration1'];
      $workshopCourseInstitute1 =$_POST['workshopCourseInstitute1'];
      $workshopCourseWorkshopname1 =$_POST['workshopCourseWorkshopname1'];

      $workshopCourseYear2 =$_POST['workshopCourseYear2'];
      $workshopCourseDuration2 =$_POST['workshopCourseDuration2'];
      $workshopCourseInstitute2 =$_POST['workshopCourseInstitute2'];
      $workshopCourseWorkshopname2 =$_POST['workshopCourseWorkshopname2'];

      $workshopCourseYear3 =$_POST['workshopCourseYear3'];
      $workshopCourseDuration3 =$_POST['workshopCourseDuration3'];
      $workshopCourseInstitute3 =$_POST['workshopCourseInstitute3'];
      $workshopCourseWorkshopname3 =$_POST['workshopCourseWorkshopname3'];

      $adExPeriod1 =$_POST['adExPeriod1'];
      $adExdesignation1 =$_POST['adExdesignation1'];
      $adExResponsibility1 =$_POST['adExResponsibility1'];

      $certification =$_POST['certification'];
      $countriesVisited=$_POST['countriesVisited'];

      $foreginlanguage=$_POST['foreginlanguage'];
      $terminationReason=$_POST['terminationReason'];
      $terminationSalaryScale=$_POST['terminationSalaryScale'];
      $terminationBasicSalary=$_POST['terminationBasicSalary'];
      $terminationPlusAllowance=$_POST['terminationPlusAllowance'];
      $terminationTotal=$_POST['terminationTotal'];
      $majorAchievement1 =$_POST['majorAchievement1'];
      $majorAchievement2 =$_POST['majorAchievement2'];
      $majorAchievement3 =$_POST['majorAchievement3'];

      $extracurricular1=$_POST['extracurricular1'];
      $extracurricular2=$_POST['extracurricular2'];
      $extracurricular3=$_POST['extracurricular3'];

      $referencePersonName1 =$_POST['referencePersonName1'];
      $referencePersonDesignation1 =$_POST['referencePersonDesignation1'];
      $referencePersonTelNo1 =$_POST['referencePersonTelNo1'];
      $referencePersonTelNo1 =$_POST['referencePersonTelNo1'];

      $referencePersonName2 =$_POST['referencePersonName2'];
      $referencePersonDesignation2 =$_POST['referencePersonDesignation2'];
      $referencePersonTelNo2 =$_POST['referencePersonTelNo2'];
      $referencePersonTelNo2=$_POST['referencePersonTelNo2'];

      $F1=$_FILES['F1']['name'];
      move_uploaded_file($F1, '../images/files/'.$F1);
      $F2=$_FILES['F2']['name'];
      move_uploaded_file($F2, '../images/files/'.$F2);
      $F3=$_FILES['F3']['name'];
      move_uploaded_file($F3, '../images/files/'.$F3);
      $F4=$_FILES['F4']['name'];
      move_uploaded_file($F4, '../images/files/'.$F4);
      $F5=$_FILES['F5']['name'];
      move_uploaded_file($F5, '../images/files/'.$F5);
      $F6=$_FILES['F6']['name'];
      move_uploaded_file($F6, '../images/files/'.$F6);
      $F7=$_FILES['F7']['name'];
      move_uploaded_file($F7, '../images/files/'.$F7);

      $exactPeriodjoin =$_POST['exactPeriodjoin'];
      $remarks =$_POST['remarks'];
      $paymentMode=$_POST['paymentMode'];
      if($paymentMode=='offline')
      {
        $bankName=$_POST['bankName'];
        $branchName=$_POST['branchName'];
        $payOrderDate=$_POST['payOrderDate'];
        $payOrderNo=$_POST['payOrderNo'];
        $payAmount=$_POST['payAmount'];
      }

      $offlinePayment=$_POST['offlinePayment'];

    $postq=mysqli_query($con,"INSERT INTO `job_application_form` (`applicationNo`, `receivedon`,`profile`, `postapplied`, `subject`, `name`, `dob`, `nationality`, `age`, `maritalstatus`, `gender`, `father_spousename`, `childrenname1`, `childrendob1`, `childrenclass1`, `childrenschool1`, `childrenname2`, `childrendob2`, `childrenclass2`, `childrenschool2`, `presentaddress`, `emailid`, `presentmobileno`, `presenttelno`, `permanentaddress`, `permanenttelno`, `permanentmobileno`, `examination1`, `year1`, `marksGrades1`, `division1`, `percentage1`, `schoolCollegeAttended1`, `university1`, `subjects1`, `examination2`, `year2`, `marksGrades2`, `division2`, `percentage2`, `schoolCollegeAttended2`, `university2`, `subjects2`, `examination3`, `year3`, `marksGrades3`, `division3`, `percentage3`, `schoolCollegeAttended3`, `university3`, `subjects3`, `examination4`, `year4`, `marksGrades4`, `division4`, `percentage4`, `schoolCollegeAttended4`, `university4`, `subjects4`, `examination5`, `year5`, `marksGrades5`, `division5`, `percentage5`, `schoolCollegeAttended5`, `university5`, `subjects5`, `examination6`, `year6`, `marksGrades6`, `division6`, `percentage6`, `schoolCollegeAttended6`, `university6`, `subjects6`, `examination7`, `year7`, `marksGrades7`, `division7`, `percentage7`, `schoolCollegeAttended7`, `university7`, `subjects7`, `institutionname1`, `post1`, `fromdate1`, `todate1`, `noofyear_month1`, `subject1`, `class1`, `institutionname2`, `post2`, `fromdate2`, `todate2`, `noofyear_month2`, `subject2`, `class2`, `institutionname3`, `post3`, `fromdate3`, `todate3`, `noofyear_month3`, `subject3`, `class3`, `institutionname4`, `post4`, `fromdate4`, `todate4`, `noofyear_month4`, `subject4`, `class4`, `institutionname5`, `post5`, `fromdate5`, `todate5`, `noofyear_month5`, `subject5`, `class5`, `totalexperience`, `experiencemonth`, `experiencedate`, `workshopCourseYear1`, `workshopCourseDuration1`, `workshopCourseInstitute1`, `workshopCourseWorkshopname1`, `workshopCourseYear2`, `workshopCourseDuration2`, `workshopCourseInstitute2`, `workshopCourseWorkshopname2`, `workshopCourseYear3`, `workshopCourseDuration3`, `workshopCourseInstitute3`, `workshopCourseWorkshopname3`, `adExPeriod1`, `adExdesignation1`, `adExResponsibility1`, `adExPeriod2`, `adExdesignation2`, `adExResponsibility2`, `terminationReason`, `terminationSalaryScale`, `terminationBasicSalary`, `terminationPlusAllowance`, `terminationTotal`, `foreginlanguage`, `certification`, `countriesVisited`, `majorAchievement1`, `majorAchievement2`, `majorAchievement3`, `extracurricular1`, `extracurricular2`, `extracurricular3`, `referencePersonName1`, `referencePersonDesignation1`, `referencePersonTelNo1`, `referencePersonAddress1`, `referencePersonName2`, `referencePersonDesignation2`, `referencePersonTelNo2`, `referencePersonAddress2`, `age_proof`, `class10_marksheet`, `class12_marksheet`, `graduation_marksheet`, `post_graduation_marksheet`, `B_ed_marksheet`, `ctet_marksheet`, `exactPeriodjoin`, `remarks`, `filling_date`, `profilephoto`, `TxnAmount`, `TxnId`, `TxnStatus`, `pgTxnNo`, `TxRefNo`, `TxMsg`, `paymentMode`, `bankName`, `branchName`, `payOrderDate`, `payOrderNo`, `payAmount`, `offlinePayment`, `ctet`) VALUES('$apno','$receivedon','$profilephoto','$postapplied','subject','$name','$dob','$nationality','$age','$maritalstatus','$gender','$father_spousename','$childrenname1','$childrendob1','$childrenclass1','$childrenschool1','$childrenname2','$childrendob2','$childrenclass2','$childrenschool2','$presentaddress','$emailid','$presentmobileno','$presenttelno','$permanentaddress','$permanenttelno','$permanentmobileno','$examination1','$year1','$marksGrades1','$division1', '$$percentage1', '$schoolCollegeAttended1', '$university1', '$subjects1', '$examination2','$year2', '$marksGrades2', '$division2', '$percentage2', '$schoolCollegeAttended2', '$university2', '$subjects2', '$examination3', '$year3', '$marksGrades3', '$division3', '$percentage3', '$schoolCollegeAttended3', '$university3', '$subjects3', '$examination4', '$year4', '$marksGrades4', '$division4', '$percentage4', '$schoolCollegeAttended4', '$university4', '$subjects4', '$examination5', '$year5', '$marksGrades5','$division5', '$percentage5', '$schoolCollegeAttended5', '$university5', '$subjects5', '$examination6', '$year6', '$marksGrades6', '$division6', '$percentage6', '$schoolCollegeAttended6','$university6', '$subjects6', '$examination7', '$year7', '$marksGrades7', '$division','$percentage7','$schoolCollegeAttended7', '$university7', '$subjects7', '$institutionname1', '$post1', '$fromdate1', '$todate1', '$noofyear_month1', '$subject1', '$class1', '$institutionname2', '$post2', '$fromdate2', '$todate2', '$noofyear_month2', '$subject2', '$class2', '$institutionname3', '$post3', '$fromdate3', '$todate3', '$noofyear_month3', '$subject3', '$class3', '$institutionname4','$post4', '$fromdate4', '$todate4', '$noofyear_month4', '$subject', '$class'`,'$institutionname5', '$post'`, '$fromdate5', '$todate5', '$noofyear_month5', '$subject5', '$class5', '$totalexperience', '$experiencemonth', '$experiencedate','$workshopCourseYear1', '$workshopCourseDuration', '$workshopCourseInstitute', '$workshopCourseWorkshopname1', '$workshopCourseYear2', '$workshopCourseDuration2', '$workshopCourseInstitute2', '$workshopCourseWorkshopname2', '$workshopCourseYear3', '$workshopCourseDuration3', '$workshopCourseInstitute3', '$workshopCourseWorkshopname3', '$adExPeriod1', '$adExdesignation1', '$adExResponsibility1', '$adExPeriod2', '$adExdesignation2', '$adExResponsibility2', '$terminationReason', '$terminationSalaryScale', '$terminationBasicSalary', '$terminationPlusAllowance', '$terminationTotal', '$foreginlanguage', '$certification','$countriesVisited', '$majorAchievement1', '$majorAchievement2', '$majorAchievement3', '$extracurricular1', '$extracurricular2', '$extracurricular3', '$referencePersonName1', '$referencePersonDesignation1', '$referencePersonTelNo1', '$referencePersonAddress1','$referencePersonName2', '$referencePersonDesignation2', '$referencePersonTelNo2', '$referencePersonAddress2', '$age_proof', '$class10_marksheet', '$class12_marksheet', '$graduation_marksheet', '$post_graduation_marksheet', '$B_ed_marksheet', '$ctet_marksheet', '$exactPeriodjoin', '$remarks', '$filling_date', '$profilephoto', '$TxnAmount', '$TxnId', '$TxnStatus', '$pgTxnNo', '$TxRefNo', '$TxMsg', '$paymentMode','$bankName', '$branchName', '$payOrderDate', '$payOrderNo', '$payAmount', '$offlinePayment', 'ctet')") ;
  }
?> 
<!-- <script type="text/javascript" src="valid.js"></script> -->
<html>
  <head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
           <!-- Latest compiled and minified CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
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
            <li>Only shortlisted candidates will be called for interview. If shortlisted, the applicant is required to bring along all originals of the documents uploaded and other relevant documents.</li>
          </ol>
      </div>
      <div class="form-group row">
        <div class="col-sm-6">
          <label for="serialno"><b>Application No. :</b><br /><font class="if" style="font-size:9px">(generated by the system)</font></label>            
          <?php
            $srq=mysqli_query($con,"SELECT * FROM `job_application_form` ");
            $srqr=mysqli_num_rows($srq);
            $srqqr=$srqr+1;
            $srno='AP-00'.$srqqr;            
          ?>
          <input type="text" name="serialno" id="serialno" value='<?php echo $srno;?>'  class="form-control col-sm-2" readonly />
        </div>
        <div class="col-sm-6">
          <label for="receivedon"><b>Received on :</b><br /><font class="if" style="font-size:9px">(For office use)</font></label>
          <input type="text" name="receivedon" id="receivedon" class="form-control col-sm-2" value="<?php echo date('d/m/Y');?>" readonly />
        </div>        
      </div>
      <div class="row">
        <div class="col-sm-6"></div>        
        <label for="F1" class="col-sm-1"><b>PHOTO</b></label>
        <div class="col-sm-4">
          <input name="profilephoto" id="F1" type="file" class="form-control" onblur="pic()"  required onchange="fileValidationF1()"/>
          <span style="color:red;" id="errorMessageF1"></span>            
        </div>
      </div>
      <hr>
      <div class="row">
        <label class="col-sm-3">Post Applied for*</label>
        <div class="col-sm-3">
          <select name="postapplied" id="postapplied" class="form-control" required onClick="javascript:checkpost();">
            <option value="PGT">PGT</option>
            <option value="TGT">TGT</option>
            <option value="PRT">PRT</option>
            <option value="NURSERY TEACHER">NURSERY TEACHER</option>
          </select>
        </div>
        <label class="col-sm-3">Subject*</label>
        <div class="col-sm-3">
          <input type="text" name="subject" id="subject" class="form-control" value="" required/>
        </div>
      </div><hr>
      <div class="row">
          <div class="col-sm-3">Name* :</div>
           <div class="col-sm-3"><input type="text" name="name" id="name" class="form-control" value="" required/></div>
           <div class="col-sm-3">Date of Birth*</div>
           <div class="col-sm-3"><input type="date" name="dob" id="dob" onblur="agecal()" class="form-control" value="" required/></div>
      </div><hr>
      <div class="row">
           <div class="col-sm-3">Nationality*</div>
           <div class="col-sm-3"><input type="text" name="nationality" id="nationality"  class="form-control" value="" required/></div>
           <div class="col-sm-3">Age* <br> <font class="if" style="font-size:9px">(as on 31 March 2019)</font></div>
           <div class="col-sm-3"> <input name="age" id="age" type="text"  class="form-control" readonly /></div>
      </div><hr>
      <div class="row">
           <div class="col-sm-3">Marital Status*</div>
           <div class="col-sm-3"><select name="maritalstatus" id="maritalstatus" class="form-control" required>
              <option value="">Select One</option>
              <option value="Married">Married</option>
              <option value="Unmarried">Unmarried</option>
            </select>
           </div>
           <div class="col-sm-3">Gender*</div>
           <div class="col-sm-3"><select name="gender" id="gender" class="form-control" required>
              <option value="">Select One</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
          </div>
        </div><hr>
        <div class="row">
           <div class="col-sm-3">Present Address*</div>
           <div class="col-sm-3"><textarea name="presentaddress" id="presentaddress"  class="form-control" value="" rows="2" required></textarea></div>
           <div class="col-sm-3">Telephone No</div>
           <div class="col-sm-3"><input type="text" id="presenttelno" name="presenttelno"  class="form-control" value="" /></div>
        </div><hr>
        <div class="row">
           <div class="col-sm-3">Mobile No*</div>
           <div class="col-sm-3"><input  id="presentmobileno" name="presentmobileno" type="tel"  pattern="[0-9]{10}" title="9999999999" class="form-control" value="" required/><span id="mobile_error" style="color:red;"></span></div>
           <div class="col-sm-3">E-mail id*</div>
           <div class="col-sm-3"><input type="email" id="emailid" name="emailid"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" class="form-control" value="" required/></div>
        </div><hr>
        <div class="row">
           <div class="col-sm-3">Permanent Address<br /><font class="if" style="font-size:9px">(If different from Present Address)</font></div>
           <div class="col-sm-3"><textarea name="permanentaddress" id="permanentaddress"  class="form-control" value="" rows="2"></textarea></div>
           <div class="col-sm-3">Telephone No</div>
           <div class="col-sm-3"><input type="text" id="permanenttelno" name="permanenttelno"   class="form-control" value="" /></div>
        </div><hr>
        <div class="row">
           <div class="col-sm-3">Mobile No</div>
           <div class="col-sm-3"><input id="permanentmobileno" name="permanentmobileno" type="tel"  pattern="[0-9]{10}" title="9999999999"  class="form-control" value="" /> <span id="pmobile_error" style="color:red;"></span></div>
           <div class="col-sm-3">Father's / Spouse's Name*</div>
           <div class="col-sm-3"><input type="text" name="father_spousename" id="father_spousename"  class="form-control" value="" required/></div>
        </div><hr>
        <div class="head1"><b>Details of Children</b></div><br>
        <div class="row" id="show">
             <div class="col-sm-3">Name</div>
             <div class="col-sm-3">Date of Birth</div>
             <div class="col-sm-3">Class</div>
             <div class="col-sm-3">School</div>
        </div>
        <div class="row">             
             <div class="col-sm-3"><input type="text" name="childrenname1" id="childrenname1"  class="form-control" value="" /></div>
             
             <div class="col-sm-3"><input type="date" name="childrendob1" id="childrendob1"  class="form-control" value="" /></div>
             
             <div class="col-sm-3"><input type="text" name="childrenclass1" id="childrenclass1"  class="form-control" value="" /></div>
             
             <div class="col-sm-3"><input type="text" name="childrenschool1" id="childrenschool1"  class="form-control" value="" /></div>
        </div><br>
        <div class="row">
             
             <div class="col-sm-3"><input type="text" name="childrenname2" id="childrenname2"  class="form-control" value="" /></div>
             
             <div class="col-sm-3"><input type="date" name="childrendob2" id="childrendob2"  class="form-control" value="" /></div>
             
             <div class="col-sm-3"><input type="text" name="childrenclass2" id="childrenclass2"  class="form-control" value="" /></div>
             
             <div class="col-sm-3"><input type="text" name="childrenschool2" id="childrenschool2"  class="form-control" value="" /></div>
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
           <div class="col-sm-2"><input type="text" name="examination1" id="examination1"  class="form-control" value="" /></div>           
           <div class="col-sm-1"><input type="number" name="year1" id="year1"  class="form-control" value="" min="1980" max="2029" /></div>
           
           <div class="col-sm-1"><input type="text" name="marksGrades1" id="marksGrades1"  class="form-control" value="" /></div>           
           <div class="col-sm-1"><input type="text" name="division1" id="division1"  class="form-control" value="" /></div>           
           <div class="col-sm-1"><input type="number" name="percentage1" id="percentage1" min="33" max="100" class="form-control" value="" /></div>
           
           <div class="col-sm-2"><input type="text" name="schoolCollegeAttended1" id="schoolCollegeAttended1"  class="form-control" value="" /></div>
           
           <div class="col-sm-2"><input type="text" name="university1" id="university1"  class="form-control" value="" /></div>
           
           <div class="col-sm-2"><input type="text" name="subjects1" id="subjects1"  class="form-control" value="" /></div>
        </div><br>
          <div class="row">           
           
           <div class="col-sm-2"><input type="text" name="examination2" id="examination2"  class="form-control" value="" /></div>
           
           <div class="col-sm-1"><input type="number" min="1980" max="2029" name="year2" id="year2"  class="form-control" value="" /></div>
           
           <div class="col-sm-1"><input type="text" name="marksGrades2" id="marksGrades2"  class="form-control" value="" /></div>
           
           <div class="col-sm-1"><input type="text" name="division2" id="division2"  class="form-control" value="" /></div>
           
           <div class="col-sm-1"><input type="number" name="percentage2" id="percentage2" min="33" max="100"  class="form-control" value="" /></div>
           
           <div class="col-sm-2"><input type="text" name="schoolCollegeAttended2" id="schoolCollegeAttended2"  class="form-control" value="" /></div>
           
           <div class="col-sm-2"><input type="text" name="university2" id="university2"  class="form-control" value="" /></div>
           
           <div class="col-sm-2"><input type="text" name="subjects2" id="subjects2"  class="form-control" value="" /></div>
        </div><br>
        <div class="row">
           <div class="col-sm-2"><input type="text" name="examination3" id="examination3"  class="form-control" value="" /></div>
        
           <div class="col-sm-1"><input type="number" name="year3" id="year3" min="1980" max="2029" class="form-control" value="" /></div>
        
           <div class="col-sm-1"><input type="text" name="marksGrades3" id="marksGrades3"  class="form-control" value="" /></div>
        
           <div class="col-sm-1"><input type="text" name="division3" id="division3"  class="form-control" value="" /></div>
        
           <div class="col-sm-1"><input type="number" name="percentage3" id="percentage3" min="33" max="100"  class="form-control" value="" /></div>
        
           <div class="col-sm-2"><input type="text" name="schoolCollegeAttended3" id="schoolCollegeAttended3"  class="form-control" value="" /></div>
        
           <div class="col-sm-2"><input type="text" name="university3" id="university3"  class="form-control" value="" /></div>
        
           <div class="col-sm-2"><input type="text" name="subjects3" id="subjects3"  class="form-control" value="" /></div>
        </div><br>
        <div class="row">
          <div class="col-sm-2"><input type="text" name="examination4" id="examination4"  class="form-control" value="" /></div>
        
           <div class="col-sm-1"><input type="number" name="year4" id="year4" min="1980" max="2029" class="form-control" value="" /></div>
        
           <div class="col-sm-1"><input type="text" name="marksGrades4" id="marksGrades4"  class="form-control" value="" /></div>
        
           <div class="col-sm-1"><input type="text" name="division4" id="division4"  class="form-control" value="" /></div>
        
           <div class="col-sm-1"><input type="number" name="percentage4" id="percentage4" min="33" max="100" class="form-control" value="" /></div>
        
           <div class="col-sm-2"><input type="text" name="schoolCollegeAttended4" id="schoolCollegeAttended4"  class="form-control" value="" /></div>
        
           <div class="col-sm-2"><input type="text" name="university4" id="university4"  class="form-control" value="" /></div>
           
           <div class="col-sm-2"><input type="text" name="subjects4" id="subjects4"  class="form-control" value="" /></div>
        </div><br>
        <div class="row">
           <div class="col-sm-2"><input type="text" name="examination5" id="examination5"  class="form-control" value="" /></div>
        
           <div class="col-sm-1"><input type="number" name="year5" id="year5" min="1980" max="2029" class="form-control" value="" /></div>
        
           <div class="col-sm-1"><input type="text" name="marksGrades5" id="marksGrades5"  class="form-control" value="" /></div>
        
           <div class="col-sm-1"><input type="text" name="division5" id="division5"  class="form-control" value="" /></div>
           
           <div class="col-sm-1"><input type="number" name="percentage5" id="percentage5" min="33" max="100" class="form-control" value="" /></div>
           
           <div class="col-sm-2"><input type="text" name="schoolCollegeAttended5" id="schoolCollegeAttended5"  class="form-control" value="" /></div>
           
           <div class="col-sm-2"><input type="text" name="university5" id="university5"  class="form-control" value="" /></div>
           
           <div class="col-sm-2"><input type="text" name="subjects5" id="subjects5"  class="form-control" value="" /></div>
        </div><br>
        <div class="row">        
           <div class="col-sm-2"><input type="text" name="examination6" id="examination6"  class="form-control" value="" /></div>
           
           <div class="col-sm-1"><input type="number" name="year6" id="year6" min="1980" max="2029" class="form-control" value="" /></div>
           
           <div class="col-sm-1"><input type="text" name="marksGrades6" id="marksGrades6"  class="form-control" value="" /></div>
           
           <div class="col-sm-1"><input type="text" name="division6" id="division6"  class="form-control" value="" /></div>
           
           <div class="col-sm-1"><input type="number" name="percentage6" id="percentage6" min="33" max="100"  class="form-control" value="" /></div>
           
           <div class="col-sm-2"><input type="text" name="schoolCollegeAttended6" id="schoolCollegeAttended6"  class="form-control" value="" /></div>
           
           <div class="col-sm-2"><input type="text" name="university6" id="university6"  class="form-control" value="" /></div>
           
           <div class="col-sm-2"><input type="text" name="subjects6" id="subjects6"  class="form-control" value="" /></div>
        </div><br>
        <div class="row">        
           <div class="col-sm-2"><input type="text" name="examination7" id="examination7"  class="form-control" value="" /></div>
           
           <div class="col-sm-1"><input type="number" name="year7" id="year7"  min="1980" max="2029" class="form-control" value="" /></div>
           
           <div class="col-sm-1"><input type="text" name="marksGrades7" id="marksGrades7"  class="form-control" value="" /></div>
           
           <div class="col-sm-1"><input type="text" name="division7" id="division7"  class="form-control" value="" /></div>
           
           <div class="col-sm-1"><input type="number" name="percentage7" id="percentage7" min="33" max="100" class="form-control" value="" /></div>
           
           <div class="col-sm-2"><input type="text" name="schoolCollegeAttended7" id="schoolCollegeAttended7"  class="form-control" value="" /></div>
           
           <div class="col-sm-2"><input type="text" name="university7" id="university7"  class="form-control" value="" /></div>
           
           <div class="col-sm-2"><input type="text" name="subjects7" id="subjects7"  class="form-control" value="" /></div>
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
        
           <div class="col-sm-3 "><input type="text" name="institutionname1" id="institutionname1"  class="form-control" value="" /></div>
        
           <div class="col-sm-2"><input type="text" name="post1" id="post1"  class="form-control" value="" /></div>
        
           <div class="col-sm-1"><input type="date" name="fromdate1" id="fromdate1"  class="form-control" value="" /></div>
        
           <div class="col-sm-1"><input type="date" name="todate1" id="todate1"  class="form-control" value="" /></div>
        
           <div class="col-sm-1"><input type="text" name="noofyear_month1" id="noofyear_month1"  class="form-control" value=""/></div>
        
           <div class="col-sm-2"><input type="text" name="subject1" id="subject1"  class="form-control" value="" /></div>
        
           <div class="col-sm-1"><input type="text" name="class1" id="class1"  class="form-control" value="" /></div>
        </div><br>
        <div class="row">
           <div class="col-sm-1 ">2.</div>
        
           <div class="col-sm-3 "><input type="text" name="institutionname2" id="institutionname2"  class="form-control" value="" /></div>
           
           <div class="col-sm-2"><input type="text" name="post2" id="post2"  class="form-control" value="" /></div>
           
           <div class="col-sm-1"><input type="date" name="fromdate2" id="fromdate2"  class="form-control" value="" /></div>
           
           <div class="col-sm-1"><input type="date" name="todate2" id="todate2"  class="form-control" value="" /></div>
           
           <div class="col-sm-1"><input type="text" name="noofyear_month2" id="noofyear_month2"  class="form-control" value="" /></div>
           
           <div class="col-sm-2"><input type="text" name="subject2" id="subject2"  class="form-control" value="" /></div>
           
           <div class="col-sm-1"><input type="text" name="class2" id="class2"  class="form-control" value="" /></div>
        </div><br>
        <div class="row">
           <div class="col-sm-1 ">3.</div>
        
           <div class="col-sm-3 "><input type="text" name="institutionname3" id="institutionname3"  class="form-control" value="" /></div>
        
           <div class="col-sm-2"><input type="text" name="post3" id="post3"  class="form-control" value="" /></div>
           
           <div class="col-sm-1"><input type="date" name="fromdate3" id="fromdate3"  class="form-control" value="" /></div>
           
           <div class="col-sm-1"><input type="date" name="todate3" id="todate3"  class="form-control" value="" /></div>
           
           <div class="col-sm-1"><input type="text" name="noofyear_month3" id="noofyear_month3"  class="form-control" value="" /></div>
           
           <div class="col-sm-2"><input type="text" name="subject3" id="subject3"  class="form-control" value="" /></div>
           
           <div class="col-sm-1"><input type="text" name="class3" id="class3"  class="form-control" value="" /></div>
        </div><br>
        <div class="row">
           <div class="col-sm-1 ">4.</div>
        
           <div class="col-sm-3 "><input type="text" name="institutionname4" id="institutionname4"  class="form-control" value="" /></div>
        
           <div class="col-sm-2"><input type="text" name="post4" id="post4"  class="form-control" value="" /></div>
        
           <div class="col-sm-1"><input type="date" name="fromdate4" id="fromdate4"  class="form-control" value="" /></div>
        
           <div class="col-sm-1"><input type="date" name="todate4" id="todate4"  class="form-control" value="" /></div>
        
           <div class="col-sm-1"><input type="text" name="noofyear_month4" id="noofyear_month4"  class="form-control" value="" /></div>
        
           <div class="col-sm-2"><input type="text" name="subject4" id="subject4"  class="form-control" value="" /></div>
           
           <div class="col-sm-1"><input type="text" name="class4" id="class4"  class="form-control" value="" /></div>
        </div><br>
        <div class="row">
           <div class="col-sm-1 ">5.</div>
        
           <div class="col-sm-3 "><input type="text" name="institutionname5" id="institutionname5"  class="form-control" value="" /></div>
        
           <div class="col-sm-2"><input type="text" name="post5" id="post5"  class="form-control" value="" /></div>
           
           <div class="col-sm-1"><input type="date" name="fromdate5" id="fromdate5"  class="form-control" value="" /></div>
           
           <div class="col-sm-1"><input type="date" name="todate5" id="todate5"  class="form-control" value="" /></div>
           
           <div class="col-sm-1"><input type="text" name="noofyear_month5" id="noofyear_month5"  class="form-control" value="" /></div>
           
           <div class="col-sm-2"><input type="text" name="subject5" id="subject5"  class="form-control" value="" /></div>
           
           <div class="col-sm-1"><input type="text" name="class5" id="class5"  class="form-control" value="" /></div>
        </div><hr>                 
        <div class="row">
           <div class="col-sm-3"><b>Total Experience</b></div>
           <div class="col-sm-3">
            &nbsp;<font><b>Years</b></font>
            <select name="totalexperience" id="totalexperience" class="form-control">
              <option value="Select Year">Select Year</option>
              <option value="00 Year">00</option>
              <option value="01 Year">01</option>
              <option value="02 Years">02</option>
              <option value="03 Years">03</option>
              <option value="04 Years">04</option>
              <option value="05 Years">05</option>
              <option value="06 Years">06</option>
              <option value="07 Years">07</option>
              <option value="08 Years">08</option>
              <option value="09 Years">09</option>
              <option value="10 Years">10</option>
              <option value="11 Years">11</option>
              <option value="12 Years">12</option>
              <option value="13 Years">13</option>
              <option value="14 Years">14</option>
              <option value="15 Years">15</option>
              <option value="16 Years">16</option>
              <option value="17 Years">17</option>
              <option value="18 Years">18</option>
              <option value="19 Years">19</option>
              <option value="20 Years">20</option>
            </select></div>
            <div class="col-sm-3">
            &nbsp;<font><b>Months</b></font>
            <select name="experiencemonth" id="experiencemonth" class="form-control">
              <option value="Select Month">Select Month</option>
              <option value="00 Month">00</option>
              <option value="01 Month">01</option>
              <option value="02 Months">02</option>
              <option value="03 Months">03</option>
              <option value="04 Months">04</option>
              <option value="05 Months">05</option>
              <option value="06 Months">06</option>
              <option value="07 Months">07</option>
              <option value="08 Months">08</option>
              <option value="09 Months">09</option>
              <option value="10 Months">10</option>
              <option value="11 Months">11</option>
              <option value="12 Months">12</option>
            </select>
            </div>
            <div class="col-sm-3"><font><b>as on</b></font><input type="date" name="experiencedate" id="experiencedate"  class="form-control" value="" placeholder="dd/mm/yyyy" /></div>  
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
           
           <div class="col-sm-2"><input type="number" name="workshopCourseYear1" min="1980" max="2029" id="workshopCourseYear1"  class="form-control" value="" /></div>
           
           <div class="col-sm-2"><input type="text" name="workshopCourseDuration1" id="workshopCourseDuration1"  class="form-control" value="" /></div>
           
           <div class="col-sm-3"><input type="text" name="workshopCourseInstitute1" id="workshopCourseInstitute1"  class="form-control" value="" /></div>
           
           <div class="col-sm-4"><input type="text" name="workshopCourseWorkshopname1" id="workshopCourseWorkshopname1"  class="form-control" value="" /></div>
        </div><br>
        <div class="row">
           <div class="col-sm-1">b)</div>
        
           <div class="col-sm-2"><input type="text"  min="1980" max="2029" name="workshopCourseYear2" id="workshopCourseYear2"  class="form-control" value="" /></div>
        
           <div class="col-sm-2"><input type="text" name="workshopCourseDuration2" id="workshopCourseDuration2"  class="form-control" value="" /></div>
           
           <div class="col-sm-3"><input type="text" name="workshopCourseInstitute2" id="workshopCourseInstitute2"  class="form-control" value="" /></div>
           
           <div class="col-sm-4"><input type="text" name="workshopCourseWorkshopname2" id="workshopCourseWorkshopname2"  class="form-control" value="" /></div>
        </div><br>
        <div class="row">
           <div class="col-sm-1">c)</div>
        
           <div class="col-sm-2"><input type="text"  min="1980" max="2029" pattern="[0-9]{4}" name="workshopCourseYear3" id="workshopCourseYear3"class="form-control" value="" /></div>
        
           <div class="col-sm-2"><input type="text" name="workshopCourseDuration3" id="workshopCourseDuration3"  class="form-control" value="" /></div>
        
           <div class="col-sm-3"><input type="text" name="workshopCourseInstitute3" id="workshopCourseInstitute3"  class="form-control" value="" /></div>
           
           <div class="col-sm-4"><input type="text" name="workshopCourseWorkshopname3" id="workshopCourseWorkshopname3"  class="form-control" value="" /></div>
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
           
           <div class="col-sm-2"><input type="text" id="adExPeriod1" name="adExPeriod1"  class="form-control" value="" /></div>
           
           <div class="col-sm-4"><input type="text" id="adExdesignation1" name="adExdesignation1"  class="form-control" value="" /></div>
           
           <div class="col-sm-5"><input type="text" id="adExResponsibility1" name="adExResponsibility1"  class="form-control" value="" /></div>
        </div><br>
        <div class="row">
           <div class="col-sm-1 ">b)</div>
        
           <div class="col-sm-2"><input type="text" id="adExPeriod2" name="adExPeriod2"  class="form-control" value="" /></div>
        
           <div class="col-sm-4"><input type="text" id="adExdesignation2" name="adExdesignation2"  class="form-control" value="" /></div>
           
           <div class="col-sm-5"><input type="text" id="adExResponsibility2" name="adExResponsibility2"  class="form-control" value="" /></div>
        </div><hr>     
        <div class="row">
           <div class="col-sm-3"><strong>Certification</strong> (if any)</div>
           <div class="col-sm-3"><input type="text" name="certification" id="certification"  class="form-control" value="" /></div>
           <div class="col-sm-3">Countries visited</div>
           <div class="col-sm-3 "><input type="text" name="countriesVisited" id="countriesVisited"  class="form-control" value="" /></div>
        </div><br>
        <div class="row">
           <div class="col-sm-3 ">Knowledge of foreign language(s)</div>
           <div class="col-sm-3"><input type="text" name="foreginlanguage" id="foreginlanguage"  class="form-control" value="" /></div>
           <div class="col-sm-6">&nbsp;</div>
        </div><br>
        <div class="row">
           <div class="col-sm-3">Reason for leaving (last Organisation)</div>
           <div class="col-sm-3 "><input type="text" name="terminationReason" id="terminationReason"  class="form-control" value="" /></div>
           <div class="col-sm-3">Salary & allowances last drawn: Scale</div>
           <div class="col-sm-3 "><input type="text" name="terminationSalaryScale" id="terminationSalaryScale"  class="form-control" value="" /></div>
        </div><br>
        <div class="row">
           <div class="col-sm-3">Basic Salary (Per Month)</div>
           <div class="col-sm-3"><input type="text" name="terminationBasicSalary" id="terminationBasicSalary"  class="form-control" value="" /></div>
           <div class="col-sm-3">Plus allowances (Rs)(Per Month)</div>
           <div class="col-sm-3 "><input type="text" name="terminationPlusAllowance" id="terminationPlusAllowance"  class="form-control" value="" /></div>
        </div><br>
        <div class="row">
           <div class="col-sm-3">Total Rs.(Per Month)</div>
           <div class="col-sm-3"><input type="text" name="terminationTotal" id="terminationTotal"  class="form-control" value="" /></div>
           <div class="col-sm-6">&nbsp;</div>
        </div><hr>        
        <div class="row">
           <div class="col-sm-12"><strong>Major achievements (if any)</strong></div>
        </div>
        <div class="row">
           <div class="col-sm-4">a)&nbsp;<input type="text" name="majorAchievement1" id="majorAchievement1"  class="form-control" value="" /></div>
           <div class="col-sm-4">b)&nbsp;<input type="text" name="majorAchievement2" id="majorAchievement2"  class="form-control" value="" /></div>
           <div class="col-sm-4">c)&nbsp;<input type="text" name="majorAchievement3" id="majorAchievement3"  class="form-control" value="" /></div>
        </div><br>        
        <div class="head2"><b>Please mention any three extra curricular activities in which you can train students</b></div>
        <div class="row">
           <div class="col-sm-4">a)&nbsp;<input type="text" name="extracurricular1" id="extracurricular1"  class="form-control" value="" /></div>
           <div class="col-sm-4">b)&nbsp;<input type="text" name="extracurricular2" id="extracurricular2"  class="form-control" value="" /></div>
           <div class="col-sm-4">c)&nbsp;<input type="text" name="extracurricular3" id="extracurricular3"  class="form-control" value="" /></div>
        </div>
        <hr>          
        <div class="head2"><b>Name, Designation with Telephone / Mobile number and address of two references (Academic / Teaching) :</b></div><br>
          <div class="row">
           <div class="col-sm-6">
            <div class="he2"><strong>Reference</strong> (Person 1)</div>
             <div class="row">
              <div class="col-sm-6">Name*</div>
              <div class="col-sm-6"><input type="text" name="referencePersonName1" id="referencePersonName1"  class="form-control" value="" required /></div>
             </div><br>
             <div class="row">
              <div class="col-sm-6">Designation*</div>
              <div class="col-sm-6"><input type="text" name="referencePersonDesignation1" id="referencePersonDesignation1"  class="form-control" value="" required /><span id="msg"></span></div>
             </div><br>
             <div class="row">
              <div class="col-sm-6">Telephone No. / Mobile*</div>
              <div class="col-sm-6"><input  name="referencePersonTelNo1" id="referencePersonTelNo1"  class="form-control" value="" required type="tel"  pattern="[0-9]{10}" title="9999999999" /></div>
             </div><br>
             <div class="row">
              <div class="col-sm-6">Address*</div>
              <div class="col-sm-6"><input type="text" name="referencePersonAddress1" id="referencePersonAddress1"  class="form-control" value="" required /></div>
             </div>
           </div>
           <div class="col-sm-6">
            <div class="he2"><strong>Reference</strong> (Person 2)</div>
             <div class="row">
              <div class="col-sm-6">Name*</div>
              <div class="col-sm-6"><input type="text" name="referencePersonName2" id="referencePersonName2"  class="form-control" value="" required /></div>
             </div><br>
             <div class="row">
              <div class="col-sm-6">Designation*</div>
              <div class="col-sm-6"><input type="text" name="referencePersonDesignation2" id="referencePersonDesignation2"  class="form-control" value="" required /></div>
             </div><br>
             <div class="row">
              <div class="col-sm-6">Telephone No. / Mobile*</div>
              <div class="col-sm-6"><input type="text" onblur="chkmobile(this.id)"  name="referencePersonTelNo2" id="referencePersonTelNo2"  class="form-control" value="" required/></div>
             </div><br>
             <div class="row">
              <div class="col-sm-6">Address*</div>
              <div class="col-sm-6"><input type="text" name="referencePersonAddress2" id="referencePersonAddress2"  class="form-control" value="" required/></div>
             </div>
             <hr>
          </div>         
          <div class="head2"><b>Documents to be Uploaded(Please note maximum file size allowed per upload is 300 KB)</b></div>
          <div>&nbsp;</div>
          <div class="row">
            <div class="col-sm-6 s"> 1. Age Proof* :</div>
            <div class="col-sm-6 s1"> <input type="file" name="F1" class="form-control" id="F2" required onchange="fileValidationF2()"/><span style="color:red;" id="errorMessageF2"></span></div>
          </div><br>
          <div class="row">
            <div class="col-sm-6 s"> 2. Class X Marksheet* :</div>
            <div class="col-sm-6 s1"> <input type="file" name="F2" id="F3" class="form-control" required onchange="fileValidationF3()"/><span style="color:red;" id="errorMessageF3"></span> </div>
          </div><br>
          <div class="row">
            <div class="col-sm-6 s"> 3. Class XII Marksheet* :</div>
            <div class="col-sm-6 s1"> <input type="file" name="F3" class="form-control" id="F4" required onchange="fileValidationF4()"/><span style="color:red;" id="errorMessageF4"></span> </div>
          </div><br>
          <div class="row">
            <div class="col-sm-6 s"> 4. Graduation Marksheet* : </div>
            <div class="col-sm-6 s1"> <input type="file" name="F4" id="F5" class="form-control" required onchange="fileValidationF5()"/><span style="color:red;" id="errorMessageF5"></span> </div>
          </div><br>
          <div class="row">
            <div class="col-sm-6 s"> 5. Post Graduation Marksheet* :</div>
            <div class="col-sm-6 s1"> <input type="file" name="F5"  id="F6" class="form-control" required onchange="fileValidationF6()"/><span style="color:red;" id="errorMessageF6"></span> </div>
          </div><br>
          <div class="row">
            <div class="col-sm-6 s"> 6. B.Ed Marksheet : </div>
            <div class="col-sm-6 s1"> <input type="file" name="F6" id="F7" class="form-control" onchange="fileValidationF7()"/><span style="color:red;" id="errorMessageF7"></span> </div>
          </div><br>
          <div class="row">
            <div class="col-sm-6 s"> 7. CTET Marksheet :</div>
            <div class="col-sm-6 s1"> <input type="file" name="F7" class="form-control" id="F8" onchange="fileValidationF8()"/><span style="color:red;" id="errorMessageF8"></span></div>
          </div><hr>          
          <div class="row">
            <div class="col-sm-6">The exact period after which you can join*<br>(if selected)</div>
            <div class="col-sm-6"><input type="text" name="exactPeriodjoin" id="exactPeriodjoin"  class="form-control" value="" /></div>
            <div class="col-sm-6" id="hidden">&nbsp;</div>
          </div>
          <div class="row">
            <div class="col-sm-6">Remarks (if any)</div>
            <div class="col-sm-6"><input type="text" name="remarks" id="remarks"  class="form-control" value="" ></div>
            <div class="col-sm-6" id="hidden">&nbsp;</div>
          </div>                     
          <div class="row">
            &nbsp;&nbsp; Payment Mode:  &nbsp;&nbsp;
              <input type="radio" name="paymentMode" id="online" value="online" checked>Online</input>
              <input type="radio" name="paymentMode"  id="offline" value="offline">Offline Payment</input>
            </div>       
            <div id="oflinePaymenDescription">
            <div class="head1">Payment Details</div>
            <div class="row">
             <div class="col-sm-3">Name of Bank:</div>
             <div class="col-sm-3"><input type="text" name="bankName" id="bankName" class="form-control" value=""></div>
             <div class="col-sm-3">Branch Name:</div>
              <div class="col-sm-3"><input type="text" name="branchName" id="branchName" class="form-control" value=""></div>
            </div>
            <div class="row">
              <div class="col-sm-3">Pay Order Date:</div>
              <div class="col-sm-3"><input type="date" name="payOrderDate" id="payOrderDate" class="form-control" value=""></div>
              <div class="col-sm-3">Pay Order No.:</div>
              <div class="col-sm-3"><input type="text" name="payOrderNo" id="payOrderNo" class="form-control" value=""></div>
            </div>
            <div class="row">
              <div class="col-sm-3">Amount:</div>
              <div class="col-sm-3"><input type="text" name="payAmount" id="payAmount" class="form-control" value="100" readonly="true"></div>
                <div class="col-sm-6">&nbsp;</div>
            </div>
            <div class="row">
             <div class="col-sm-6">
                 <input type="checkbox" name="offlinePayment" id="offlinePayment" value="Off-Line Payment">&nbsp;Off-Line Payment
                </div>
            </div>
          </div><hr>
         <div class="row">
            <div class="head2" style="padding-left:10px;"><strong>Declaration:</strong>
          <p><b>&raquo;	</b> I understand that rendering false / incorrect or misleading information in the Job Application shall disqualify my candidature.</p>
          </div> 
          <div class="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="declare" id="declare" required>&nbsp;&nbsp;I hereby confirm the above declarations.</div> 
          <div class="col-sm-2 hed1">&nbsp;</div>
        </div>
        <div class="row">
           <div class="col-sm-2">Date :</div>
           <?php $currentdate=date("d-m-Y"); ?>
           <div class="col-sm-3"><input typr="text" name="filling_date" class="form-control" value="<?php echo $currentdate;?>" readonly /></div>
        </div>   
        <div class="text15"> 
           <div align="center"><input type="submit" name="submit" id="submit" class="btn btn-primary btn-sm" /></div>
        </div><br><br><hr>
    </form>
  </div>
</body>
</html>
<!-----Upload Photo------------>
        
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
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
        
<script type="text/javascript">

            $(document).ready(function(){
        $('#F1').bind('change', function() {
            var f1Size=(this.files[0].size/1024);
            if(f1Size >300){
                $("#F1").val(null);
               $("#errorMessageF1").html("Maximum file size limit is 300kb");
            }
        });
        $('#F2').bind('change', function() {
            var f2Size=(this.files[0].size/1024);
            if(f2Size >300){
                $("#F2").val(null);
               $("#errorMessageF2").html("Maximum file size limit is 300kb");
            }
        });
        $('#F3').bind('change', function() {
            var f3Size=(this.files[0].size/1024);
            if(f3Size >300){
                $("#F3").val(null);
               $("#errorMessageF3").html("Maximum file size limit is 300kb");
            }
        });
        $('#F4').bind('change', function() {
            var f4Size=(this.files[0].size/1024);
            if(f4Size >300){
                $("#F4").val(null);
               $("#errorMessageF4").html("Maximum file size limit is 300kb");
            }
        });
        $('#F5').bind('change', function() {
            var f5Size=(this.files[0].size/1024);
            if(f5Size >300){
                $("#F5").val(null);
               $("#errorMessageF5").html("Maximum file size limit is 300kb");
            }
        });
        $('#F6').bind('change', function() {
            var f6Size=(this.files[0].size/1024);
            if(f6Size >300){
                $("#F6").val(null);
               $("#errorMessageF6").html("Maximum file size limit is 300kb");
            }
        });
        $('#F7').bind('change', function() {
            var f7Size=(this.files[0].size/1024);
            if(f7Size >300){
                $("#F7").val(null);
               $("#errorMessageF7").html("Maximum file size limit is 300kb");
            }
        });
        });

</script>

<script type="text/javascript">
function year(id)
{
let idval=$("#"+id).val();

let idlen=idval.length;

if(idval!=""){

if (isNaN(idval))
 {
  alert("Must input numbers");
  $("#"+id).focus();
}

if(idlen!=4)
{
   alert("You have Enterd Year No. "+idlen+" Please 4 digit ");
   

    $("#"+id).focus();
}
}
}



function chkmobile(id)
{

let idval=$("#"+id).val();

let idlen=idval.length;


if(idval!=""){

if (isNaN(idval))
 {
  alert("Must input numbers");
  $("#"+id).focus();
}

if(idlen!=10)
{
   alert("You have Enterd Mobile No. "+idlen+" Please 10 digit ");
   

    $("#"+id).focus();
}
}
}

function num(id)
{
let idval=$("#"+id).val();
let idlen=idval.length;
if(idval!=""){
if (isNaN(idval))
 {
  alert("Must input numbers in   "+id);
  $("#"+id).focus();
}else{

  $("#"+id).val(idval+"%");  
}

}
}

    // To calulate difference b/w two dates
     $(document).ready(function(){
                $("#noofyear_month1").click(function(){
       // alert("hello");
        if($("#fromdate1").val()!="" && $("#todate1").val()!=""){

    var From_date = new Date($("#fromdate1").val());
    var To_date = new Date($("#todate1").val());
    var diff_date =  To_date - From_date;

    var years = Math.floor(diff_date/31536000000);
    var months = Math.floor((diff_date % 31536000000)/2628000000);
    var days = Math.floor(((diff_date % 31536000000) % 2628000000)/86400000);
    $("#noofyear_month1").val(years+" year(s) "+months+" month(s) "+days+" and day(s)");

    }
    else{
        alert("Please select dates");
        return false;
    }
    });
     });

    </script>
    <script type="text/javascript">
     $(document).ready(function(){
           $("#oflinePaymenDescription").hide();
      $("#offline").click(function(){
        $("#oflinePaymenDescription").show();
      });
      $("#online").click(function(){
        $("#oflinePaymenDescription").hide();
      }); 

     });


   function fileValidationF1(){
    var F1 = document.getElementById('F1').value;
    
    var allowedExtensions = /(\.jpg|\.jpeg|\.PNG|\.png)$/i;
    if(!allowedExtensions.exec(F1)){
      document.getElementById('errorMessageF1').innerHTML="Please upload file having extensions .jpg/.jpeg/PNG/.png only.";
      document.getElementById('F1').value='';
      //F1.val('');
        return false;
    }else{
        document.getElementById('errorMessageF1').innerHTML="";
        return true;
    }
    
    } 
    
    function fileValidationF2(){
    var F2 = document.getElementById('F2').value;
    
    var allowedExtensions = /(\.jpg|\.jpeg|\.PNG|\.png)$/i;
    if(!allowedExtensions.exec(F2)){
      document.getElementById('errorMessageF2').innerHTML="Please upload file having extensions .jpg/.jpeg/PNG/.png only.";
      F2.val('');
        return false;
    }else{
        document.getElementById('errorMessageF2').innerHTML="";
        return true;
    }
    
    }  
    
      function fileValidationF3(){
    var F3 = document.getElementById('F3').value;
    
    var allowedExtensions = /(\.jpg|\.jpeg|\.PNG|\.png)$/i;
    if(!allowedExtensions.exec(F3)){
      document.getElementById('errorMessageF3').innerHTML="Please upload file having extensions .jpg/.jpeg/PNG/.png only.";
    F3.val('');
        return false;
    }else{
        document.getElementById('errorMessageF3').innerHTML="";
        return true;
    }
    
    }    
    
      function fileValidationF4(){
    var F4= document.getElementById('F4').value;
    
    var allowedExtensions = /(\.jpg|\.jpeg|\.PNG|\.png)$/i;
    if(!allowedExtensions.exec(F4)){
      document.getElementById('errorMessageF4').innerHTML="Please upload file having extensions .jpg/.jpeg/PNG/.png only.";
     F4.val('');
        return false;
    }else{
        document.getElementById('errorMessageF4').innerHTML="";
        return true;
    }
    
    }    
    
    function fileValidationF5(){
    var F5 = document.getElementById('F5').value;
    
    var allowedExtensions = /(\.jpg|\.jpeg|\.PNG|\.png)$/i;
    if(!allowedExtensions.exec(F5)){
      document.getElementById('errorMessageF5').innerHTML="Please upload file having extensions .jpg/.jpeg/PNG/.png only.";
      F5.val('');
        return false;
    }else{
        document.getElementById('errorMessageF5').innerHTML="";
        return true;
    }
    
    } 
    
    function fileValidationF6(){
    var F6 = document.getElementById('F6').value;
    
    var allowedExtensions = /(\.jpg|\.jpeg|\.PNG|\.png)$/i;
    if(!allowedExtensions.exec(F6)){
      document.getElementById('errorMessageF6').innerHTML="Please upload file having extensions .jpg/.jpeg/PNG/.png only.";
     F6.val('');
        return false;
    }else{
        document.getElementById('errorMessageF6').innerHTML="";
        return true;
    }
    
    }    
    
    function fileValidationF7(){
    var F7 = document.getElementById('F7').value;
    
    var allowedExtensions = /(\.jpg|\.jpeg|\.PNG|\.png)$/i;
    if(!allowedExtensions.exec(F7)){
      document.getElementById('errorMessageF7').innerHTML="Please upload file having extensions .jpg/.jpeg/PNG/.png only.";
     F7.val('');
        return false;
    }else{
        document.getElementById('errorMessageF7').innerHTML="";
        return true;
    }
    
    }    
    
    function fileValidationF8(){
    var F8 = document.getElementById('F8').value;
    
    var allowedExtensions = /(\.jpg|\.jpeg|\.PNG|\.png)$/i;
    if(!allowedExtensions.exec(F8)){
      document.getElementById('errorMessageF8').innerHTML="Please upload file having extensions .jpg/.jpeg/PNG/.png only.";
      F8.val('');
        return false;
    }else{
        document.getElementById('errorMessageF8').innerHTML="";
        return true;
    }
    
    }    
       

    //     function clickIE4(){
    //     if (event.button==2){
    //     return false;
    //     }
    //     }
    //     function clickNS4(e){
    //     if (document.layers||document.getElementById&&!document.all){
    //     if (e.which==2||e.which==3){
    //     return false;
    //     }
    //     }
    //     }
    //     if (document.layers){
    //     document.captureEvents(Event.MOUSEDOWN);
    //     document.onmousedown=clickNS4;
    //     }
    //     else if (document.all&&!document.getElementById){
    //     document.onmousedown=clickIE4;
    //     }
    //     document.oncontextmenu=new Function("return false")
    //     function disableselect(e){
    //     return false
    //     }
    //     function reEnable(){
    //     return true
    //     }
    //     //if IE4+
    //     document.onselectstart=new Function ("return false")
    //     //if NS6
    //     if (window.sidebar){
    //     document.onmousedown=disableselect
    //     document.onclick=reEnable
    //     }
    //     document.onkeydown = function(e) {
    //         if (e.ctrlKey &&
    //             (e.keyCode === 67 ||
    //              e.keyCode === 86 ||
    //              e.keyCode === 85 ||
    //              e.keyCode === 117)) {
    //             alert('not allowed');
    //             return false;
    //         } else {
    //             return true;
    //         }
    // };

    function checkpost()
    {
    if(document.getElementById("postapplied").value=="PRT")
      {
               document.getElementById("F5").required = false; 
             }
    }
       
function agecal(){


let dob=$("#dob").val();
$.post("CalculateAge.php",{DateOfBirth:dob},function(res){

$("#age").val(res);
});

//});

}


            function pic()
            {

             
                //alert("gello");
            }

            $("#emailid").onchange(function()

            {
                alert("ggh");
            })
</script>