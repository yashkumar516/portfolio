<?php
	session_start();
	include '../../include/Confile.php';    
	
?>
<?php
	if(isset($_POST['submit']))
{
$currentdate=$_POST['filling_date'];
$applicationNo =$_POST['serialno'];
$receivedon =$_POST['filling_date'];
$postapplied =$_POST['postapplied'];
$subject =$_POST['subject'];
$name =$_POST['name'];
$dob =$_POST['dob'];
$nationality =$_POST['nationality'];
$age =$_POST['age'];
$maritalstatus =$_POST['maritalstatus'];
$father_spousename =$_POST['father_spousename'];
$childrenname1 =$_POST['childrenname1'];
$childrendob1 =$_POST['childrendob1'];
$childrenclass1 =$_POST['childrenclass1'];
$childrenschool1 =$_POST['childrenschool1'];
$childrenname2 =$_POST['childrenname2'];
$childrendob2 =$_POST['childrendob2'];
$childrenclass2 =$_POST['childrenclass2'];
$childrenschool2 =$_POST['childrenschool2'];
$presentaddress =$_POST['presentaddress'];
$emailid =$_POST['emailid'];
$presentmobileno =$_POST['presentmobileno'];
$presenttelno =$_POST['presenttelno'];
$permanentaddress =$_POST['permanentaddress'];
$permanenttelno =$_POST['permanenttelno'];
$permanentmobileno =$_POST['permanentmobileno'];
$examination1 =$_POST['examination1'];
$year1 =$_POST['year1'];
$marksGrades1 =$_POST['marksGrades1'];
$division1 =$_POST['division1'];
$percentage1 =$_POST['percentage1'];
$schoolCollegeAttended1 =$_POST['schoolCollegeAttended1'];
$university1 =$_POST['university1'];
$subjects1 =$_POST['subjects1'];
$examination2 =$_POST['examination2'];
$year2 =$_POST['year2'];
$marksGrades2 =$_POST['marksGrades2'];
$division2 =$_POST['division2'];
$percentage2 =$_POST['percentage2'];
$schoolCollegeAttended2 =$_POST['schoolCollegeAttended2'];
$university2 =$_POST['university2'];
$subjects2 =$_POST['subjects2'];
$examination3 =$_POST['examination3'];
$year3 =$_POST['year3'];
$marksGrades3 =$_POST['marksGrades3'];
$division3 =$_POST['division3'];
$percentage3 =$_POST['percentage3'];
$schoolCollegeAttended3 =$_POST['schoolCollegeAttended3'];
$university3 =$_POST['university3'];
$subjects3 =$_POST['subjects3'];
$examination4 =$_POST['examination4'];
$year4 =$_POST['year4'];
$marksGrades4 =$_POST['marksGrades4'];
$division4 =$_POST['division4'];
$percentage4 =$_POST['percentage4'];
$schoolCollegeAttended4 =$_POST['schoolCollegeAttended4'];
$university4 =$_POST['university4'];
$subjects4 =$_POST['subjects4'];
$examination5 =$_POST['examination5'];
$year5 =$_POST['year5'];
$marksGrades5 =$_POST['marksGrades5'];
$division5 =$_POST['division5'];
$percentage5 =$_POST['percentage5'];
$schoolCollegeAttended5 =$_POST['schoolCollegeAttended5'];
$university5 =$_POST['university5'];
$subjects5 =$_POST['subjects5'];
$examination6 =$_POST['examination6'];
$year6 =$_POST['year6'];
$marksGrades6 =$_POST['marksGrades6'];
$division6 =$_POST['division6'];
$percentage6 =$_POST['percentage6'];
$schoolCollegeAttended6 =$_POST['schoolCollegeAttended6'];
$university6 =$_POST['university6'];
$subjects6 =$_POST['subjects6'];
$examination7 =$_POST['examination7'];
$year7 =$_POST['year7'];
$marksGrades7 =$_POST['marksGrades7'];
$division7 =$_POST['division7'];
$percentage7 =$_POST['percentage7'];
$schoolCollegeAttended7 =$_POST['schoolCollegeAttended7'];
$university7 =$_POST['university7'];
$subjects7 =$_POST['subjects7'];
$institutionname1 =$_POST['institutionname1'];
$post1 =$_POST['post1'];
$fromdate1 =$_POST['fromdate1'];
$todate1 =$_POST['todate1'];
$noofyear_month1 =$_POST['noofyear_month1'];
$subject1 =$_POST['subject1'];
$class1 =$_POST['class1'];
$institutionname2 =$_POST['institutionname2'];
$post2 =$_POST['post2'];
$fromdate2 =$_POST['fromdate2'];
$todate2 =$_POST['todate2'];
$noofyear_month2 =$_POST['noofyear_month2'];
$subject2 =$_POST['subject2'];
$class2 =$_POST['class2'];
$institutionname3 =$_POST['institutionname3'];
$post3 =$_POST['post3'];
$fromdate3 =$_POST['fromdate3'];
$todate3 =$_POST['todate3'];
$noofyear_month3 =$_POST['noofyear_month3'];
$subject3 =$_POST['subject3'];
$class3 =$_POST['class3'];
$institutionname4 =$_POST['institutionname4'];
$post4 =$_POST['post4'];

$fromdate4 =$_POST['fromdate4'];
$todate4 =$_POST['todate4'];
$noofyear_month4 =$_POST['noofyear_month4'];
$subject4 =$_POST['subject4'];
$class4 =$_POST['class4'];
$institutionname5 =$_POST['institutionname5'];
$post5 =$_POST['post5'];
$fromdate5 =$_POST['fromdate5'];
$todate5 =$_POST['todate5'];
$noofyear_month5 =$_POST['noofyear_month5'];
$subject5 =$_POST['subject5'];
$class5 =$_POST['class5'];
$totalexperience =$_POST['totalexperience'];
$experiencemonth =$_POST['experiencemonth'];
$experiencedate =$_POST['experiencedate'];
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
$adExPeriod2 =$_POST['adExPeriod2'];
$adExdesignation2 =$_POST['adExdesignation2'];
$adExResponsibility2 =$_POST['adExResponsibility2'];
$terminationReason =$_POST['terminationReason'];
$terminationSalaryScale =$_POST['terminationSalaryScale'];
$terminationBasicSalary =$_POST['terminationBasicSalary'];
$terminationPlusAllowance =$_POST['terminationPlusAllowance'];
$terminationTotal =$_POST['terminationTotal'];
$foreginlanguage =$_POST['foreginlanguage'];
$certification =$_POST['certification'];
$countriesVisited =$_POST['countriesVisited'];
$majorAchievement1 =$_POST['majorAchievement1'];
$majorAchievement2 =$_POST['majorAchievement2'];
$majorAchievement3 =$_POST['majorAchievement3'];
$extracurricular1 =$_POST['extracurricular1'];
$extracurricular2 =$_POST['extracurricular2'];
$extracurricular3 =$_POST['extracurricular3'];
$referencePersonName1 =$_POST['referencePersonName1'];
$referencePersonDesignation1 =$_POST['referencePersonDesignation1'];
$referencePersonTelNo1 =$_POST['referencePersonTelNo1'];
$referencePersonAddress1 =$_POST['referencePersonAddress1'];
$referencePersonName2 =$_POST['referencePersonName2'];
$referencePersonDesignation2 =$_POST['referencePersonDesignation2'];
$referencePersonTelNo2 =$_POST['referencePersonTelNo2'];
$referencePersonAddress2 =$_POST['referencePersonAddress2'];

$age_proof =$_FILES["F1"]["name"];
$class10_marksheet =$_FILES["F2"]["name"];
$class12_marksheet =$_FILES["F3"]["name"];
$graduation_marksheet =$_FILES["F4"]["name"];
$post_graduation_marksheet =$_FILES["F5"]["name"];
$B_ed_marksheet =$_FILES["F6"]["name"];
$ctet_marksheet =$_FILES["F7"]["name"];
$exactPeriodjoin =$_POST['exactPeriodjoin'];
$remarks =$_POST['remarks'];
$gender =$_POST['gender'];
$filling_date =$_POST['filling_date'];
$profilephoto =$_FILES['profilephoto']["name"];


      $paymentMode=  $_POST['paymentMode']; 
      $bankName= $_POST['bankName']; 
      $branchName=$_POST['branchName']; 
      $payOrderDate=$_POST['payOrderDate'];
      $payOrderNo=$_POST['payOrderNo'];
      $payAmount=$_POST['payAmount'];
      $offlinePayment=$_POST['offlinePayment']; 



$applicationMonth=date('ym');
 $lastInsertedIdSQLReg=mysqli_query($con,"SELECT srno FROM job_application_form  ORDER BY srno DESC  LIMIT 1");
$rows_count=  mysqli_num_rows($lastInsertedIdSQLReg);
if($rows_count>0){
   $lastInsertIdReg=  mysqli_fetch_array($lastInsertedIdSQLReg);
   if($lastInsertIdReg['srno']<10){
    $finalRegistrationNO=$applicationMonth."00".$lastInsertIdReg['srno']+1;   
   }elseif($lastInsertIdReg['srno']>9 || $lastInsertIdReg['srno']<100 ){
       
    $finalRegistrationNO=$applicationMonth."0".$lastInsertIdReg['srno']+1;    
   }else{
   $finalRegistrationNO=$applicationMonth.$lastInsertIdReg['srno']+1; 
   }
    
    
}else{
   
    $finalRegistrationNO=$applicationMonth."001";
      
}


$insertData=  mysqli_query($con,"INSERT INTO `job_application_form`(`applicationNo`,`receivedon`,`postapplied`,`subject`,`name`,`dob`,`nationality`,`age`,`maritalstatus`,`gender`,`father_spousename`,`childrenname1`,`childrendob1`,`childrenclass1`,`childrenschool1`,`childrenname2`,`childrendob2`,`childrenclass2`,`childrenschool2`,`presentaddress`,`emailid`,`presentmobileno`,`presenttelno`,`permanentaddress`,`permanenttelno`,`permanentmobileno`,`examination1`,`year1`,`marksGrades1`,`division1`,`percentage1`,`schoolCollegeAttended1`,`university1`,`subjects1`,`examination2`,`year2`,`marksGrades2`,`division2`,`percentage2`,`schoolCollegeAttended2`,`university2`,`subjects2`,`examination3`,`year3`,`marksGrades3`,`division3`,`percentage3`,`schoolCollegeAttended3`,`university3`,`subjects3`,`examination4`,`year4`,`marksGrades4`,`division4`,`percentage4`,`schoolCollegeAttended4`,`university4`,`subjects4`,`examination5`,`year5`,`marksGrades5`,`division5`,`percentage5`,`schoolCollegeAttended5`,`university5`,`subjects5`,`examination6`,`year6`,`marksGrades6`,`division6`,`percentage6`,`schoolCollegeAttended6`,`university6`,`subjects6`,`examination7`,`year7`,`marksGrades7`,`division7`,`percentage7`,`schoolCollegeAttended7`,`university7`,`subjects7`,`institutionname1`,`post1`,`fromdate1`,`todate1`,`noofyear_month1`,`subject1`,`class1`,`institutionname2`,`post2`,`fromdate2`,`todate2`,`noofyear_month2`,`subject2`,`class2`,`institutionname3`,`post3`,`fromdate3`,`todate3`,`noofyear_month3`,`subject3`,`class3`,`institutionname4`,`post4`,`fromdate4`,`todate4`,`noofyear_month4`,`subject4`,`class4`,`institutionname5`,`post5`,`fromdate5`,`todate5`,`noofyear_month5`,`subject5`,`class5`,`totalexperience`,`experiencemonth`,`experiencedate`,`workshopCourseYear1`,`workshopCourseDuration1`,`workshopCourseInstitute1`,`workshopCourseWorkshopname1`,`workshopCourseYear2`,`workshopCourseDuration2`,`workshopCourseInstitute2`,`workshopCourseWorkshopname2`,`workshopCourseYear3`,`workshopCourseDuration3`,`workshopCourseInstitute3`,`workshopCourseWorkshopname3`,`adExPeriod1`,`adExdesignation1`,`adExResponsibility1`,`adExPeriod2`,`adExdesignation2`,`adExResponsibility2`,`terminationReason`,`terminationSalaryScale`,`terminationBasicSalary`,`terminationPlusAllowance`,`terminationTotal`,`foreginlanguage`,`certification`,`countriesVisited`,`majorAchievement1`,`majorAchievement2`,`majorAchievement3`,`extracurricular1`,`extracurricular2`,`extracurricular3`,`referencePersonName1`,`referencePersonDesignation1`,`referencePersonTelNo1`,`referencePersonAddress1`,`referencePersonName2`,`referencePersonDesignation2`,`referencePersonTelNo2`,`referencePersonAddress2`,`age_proof`,`class10_marksheet`,`class12_marksheet`,`graduation_marksheet`,`post_graduation_marksheet`,`B_ed_marksheet`,`ctet_marksheet`,`exactPeriodjoin`,`remarks`,`filling_date`"
        . ",`profilephoto`,`paymentMode`,`bankName`,`branchName`,`payOrderDate`,`payOrderNo`,`payAmount`,`offlinePayment`) VALUES ('$finalRegistrationNO', '$receivedon', '$postapplied', '$subject', '$name', '$dob', '$nationality', '$age', '$maritalstatus', '$father_spousename', '$gender', '$childrenname1', '$childrendob1', '$childrenclass1', '$childrenschool1', '$childrenname2', '$childrendob2', '$childrenclass2', '$childrenschool2', '$presentaddress', '$emailid', '$presentmobileno', '$presenttelno', '$permanentaddress', '$permanenttelno', '$permanentmobileno', '$examination1', '$year1', '$marksGrades1', '$division1', '$percentage1', '$schoolCollegeAttended1', '$university1', '$subjects1', '$examination2', '$year2', '$marksGrades2', '$division2', '$percentage2', '$schoolCollegeAttended2', '$university2', '$subjects2', '$examination3', '$year3', '$marksGrades3', '$division3', '$percentage3', '$schoolCollegeAttended3', '$university3', '$subjects3', '$examination4', '$year4', '$marksGrades4', '$division4', '$percentage4', '$schoolCollegeAttended4', '$university4', '$subjects4', '$examination5', '$year5', '$marksGrades5', '$division5', '$percentage5', '$schoolCollegeAttended5', '$university5', '$subjects5', '$examination6', '$year6', '$marksGrades6', '$division6', '$percentage6', '$schoolCollegeAttended6', '$university6', '$subjects6', '$examination7', '$year7', '$marksGrades7', '$division7', '$percentage7', '$schoolCollegeAttended7', '$university7', '$subjects7', '$institutionname1', '$post1', '$fromdate1', '$todate1', '$noofyear_month1', '$subject1', '$class1', '$institutionname2', '$post2', '$fromdate2', '$todate2', '$noofyear_month2', '$subject2', '$class2', '$institutionname3', '$post3', '$fromdate3', '$todate3', '$noofyear_month3', '$subject3', '$class3', '$institutionname4', '$post4', '$fromdate4', '$todate4', '$noofyear_month4', '$subject4', '$class4', '$institutionname5', '$post5', '$fromdate5', '$todate5', '$noofyear_month5', '$subject5', '$class5', '$totalexperience', '$experiencemonth', '$experiencedate', '$workshopCourseYear1', '$workshopCourseDuration1', '$workshopCourseInstitute1', '$workshopCourseWorkshopname1', '$workshopCourseYear2', '$workshopCourseDuration2', '$workshopCourseInstitute2', '$workshopCourseWorkshopname2', '$workshopCourseYear3', '$workshopCourseDuration3', '$workshopCourseInstitute3', '$workshopCourseWorkshopname3', '$adExPeriod1', '$adExdesignation1', '$adExResponsibility1', '$adExPeriod2', '$adExdesignation2', '$adExResponsibility2', '$terminationReason', '$terminationSalaryScale', '$terminationBasicSalary', '$terminationPlusAllowance', '$terminationTotal', '$foreginlanguage', '$certification', '$countriesVisited', '$majorAchievement1', '$majorAchievement2', '$majorAchievement3', '$extracurricular1', '$extracurricular2', '$extracurricular3', '$referencePersonName1', '$referencePersonDesignation1', '$referencePersonTelNo1', '$referencePersonAddress1', '$referencePersonName2', '$referencePersonDesignation2', '$referencePersonTelNo2', '$referencePersonAddress2', '$age_proof', '$class10_marksheet', '$class12_marksheet', '$graduation_marksheet', '$post_graduation_marksheet', '$B_ed_marksheet', '$ctet_marksheet', '$exactPeriodjoin', '$remarks', '$filling_date',"
        . " '$profilephoto','$paymentMode','$bankName','$branchName','$payOrderDate','$payOrderNo','$payAmount','$offlinePayment')");

$target_dir = "../images/files/";
        $target_file1 = $target_dir.basename($_FILES["F1"]["name"]);
        move_uploaded_file($_FILES["F1"]["tmp_name"], $target_file1);
        
         $target_fileF2 = $target_dir.basename($_FILES["F2"]["name"]);
        move_uploaded_file($_FILES["F2"]["tmp_name"], $target_fileF2);
        
         $target_fileF3 = $target_dir.basename($_FILES["F3"]["name"]);
        move_uploaded_file($_FILES["F3"]["tmp_name"], $target_fileF3);
        
         $target_fileF4 = $target_dir.basename($_FILES["F4"]["name"]);
        move_uploaded_file($_FILES["F4"]["tmp_name"], $target_fileF4);
        
         $target_fileF5 = $target_dir.basename($_FILES["F5"]["name"]);
        move_uploaded_file($_FILES["F5"]["tmp_name"], $target_fileF5);
        
         $target_fileF6 = $target_dir.basename($_FILES["F6"]["name"]);
        move_uploaded_file($_FILES["F6"]["tmp_name"], $target_fileF6);
        
         $target_fileF7 = $target_dir.basename($_FILES["F7"]["name"]);
        move_uploaded_file($_FILES["F7"]["tmp_name"], $target_fileF7);
        
        
        $target_fileF8 = $target_dir.basename($_FILES['profilephoto']["name"]);
        move_uploaded_file($_FILES["profilephoto"]["tmp_name"], $target_fileF8);
     
     
         if($insertData){
            if($paymentMode=="offline"){
                $_SESSION['offlineRegNo']=$finalRegistrationNO;
                $_SESSION['paymentMethodOfline']=$paymentMode;                
                include 'JobApplicationOfflineResponse.php';
            }else{
              include 'vacency_payment-New.php';  
            }
             
        
       }   
        
}   ?>


