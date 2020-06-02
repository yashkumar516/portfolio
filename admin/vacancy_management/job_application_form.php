        <?php
            //    session_start();
                include '../connection.php';
                include '../AppConf.php';
        ?>
<style>
  .text100{border-top:1px solid #0b462d; padding:0 1%;}
  .text100 .head1{font-weight:bold; font-size:16px; border-bottom:1px solid #0b462d; color:#0b462d; padding:0.3% 0; margin:0.5% 0; background-color:#e6ffcc;}
 </style>
     <script type="text/javascript">
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
</script>
        <script>
		function checkpost()
		{
		if(document.getElementById("postapplied").value=="PRT")
			{
               document.getElementById("F5").required = false; 
             }
		}
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
           <link rel="stylesheet" href="../css/bootstrap.min.css" />
           <script src="../css/bootstrap.min.js"></script>
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
            .text1 .col-xs-3:nth-child(odd){font-weight:normal;} .text1 .text-box{width:80%;}
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
        <form action="registration_fee_response_vacancy.php" method="post" enctype="multipart/form-data">
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
           <li><b>A print of duly complete Application form should be downloaded and submitted at the school office along with the acknowledgement slip for payment of INR 100.</b></li>
           <li>Only shortlisted candidates will be called for interview. If shortlisted, the applicant is required to bring along all originals of the documents uploaded and other relevant documents.</li>
          </ol>
         </div>
         <div class="text01">
          <div class="row">
           <div class="col-xs-6 xss">
            <div class="row">
             <div class="col-xs-3"><b>Application No. :</b><br /><font class="if" style="font-size:9px">(generated by the system)</font></div>
             <div class="col-xs-3 xss1">&nbsp;</div>
             <div class="col-xs-6"><input type="text" name="serialno" id="serialno" value="" class="text-box" readonly /></div>
            </div>
            <div class="row">
             <div class="col-xs-3"><b>Received on :</b><br /><font class="if" style="font-size:9px">(For office use)</font></div>
             <div class="col-xs-3 xss1">&nbsp;</div>
             <div class="col-xs-6"><input type="text" name="receivedon" id="receivedon" class="text-box" value="" readonly /></div>
            </div>
           </div>
           <div class="col-xs-6 imp1">
            <div class="imp">
             <div id="dvPreview"><p class="p"><b>PHOTO</b></p></div>          
                 <input name="profilephoto" id="fileupload" type="file" class="s_box" value="" required/>
            </div>
           </div>
          </div>
         </div>
         <div class="text1">
          <div class="row">
           <div class="col-xs-3">Post Applied for*</div>
           <div class="col-xs-3"><select name="postapplied" id="postapplied" class="text-box" required onClick="javascript:checkpost();">
                                                                <option value="PGT">PGT</option>
                                   								<option value="TGT">TGT</option>
                                                                <option value="PRT">PRT</option>
                                                                <option value="NURSERY TEACHER">NURSERY TEACHER</option>
                                 </select></div>
            <div class="col-xs-3">Subject*</div>
           <div class="col-xs-3"><input type="text" name="subject" id="subject" class="text-box" value="" required/></div>
             </div>
          <div class="row">
          <div class="col-xs-3">Name* :</div>
           <div class="col-xs-3"><input type="text" name="name" id="name" class="text-box" value="" required/></div>
           <div class="col-xs-3">Date of Birth*</div>
           <div class="col-xs-3"><input type="date" name="dob" id="dob" class="text-box" value="" required/></div>
             </div>
          <div class="row">
           <div class="col-xs-3">Nationality*</div>
           <div class="col-xs-3"><input type="text" name="nationality" id="nationality"  class="text-box" value="" required/></div>
           <div class="col-xs-3">Age* <br> <font class="if" style="font-size:9px">(as on 31 March 2017)</font></div>
           <div class="col-xs-3"> <input name="age" id="age" type="text"  class="text-box" value="" onClick="javascript:CalculateAgeInQC();" required /></div>
          </div>
          <div class="row">
           <div class="col-xs-3">Marital Status*</div>
           <div class="col-xs-3"><select name="maritalstatus" id="maritalstatus" class="text-box" required>
                                    <option value="SelectOne">Select One</option>
                                    <option value="Married">Married</option>
                                    <option value="Unmarried">Unmarried</option>
                                 </select>
           </div>
           <div class="col-xs-3">Gender*</div>
           <div class="col-xs-3"><select name="gender" id="gender" class="text-box" required>
                                     <option value="SelectOne">Select One</option>
                                     <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                 </select>
          </div>
          <div class="row">
           <div class="col-xs-3">Present Address*</div>
           <div class="col-xs-3"><textarea name="presentaddress" id="presentaddress"  class="text-box1" value="" rows="2" required></textarea></div>
           <div class="col-xs-3">Telephone No</div>
           <div class="col-xs-3"><input type="number" id="presenttelno" name="presenttelno"  class="text-box" value="" /></div>
          </div>
          <div class="row">
           <div class="col-xs-3">Mobile No*</div>
           <div class="col-xs-3"><input type="number" id="presentmobileno" name="presentmobileno"  class="text-box" value="" required/></div>
           <div class="col-xs-3">E-mail id*</div>
           <div class="col-xs-3"><input type="email" id="emailid" name="emailid"  class="text-box" value="" required/></div>
          </div>
          <div class="row">
           <div class="col-xs-3">Permanent Address<br /><font class="if" style="font-size:9px">(If different from Present Address)</font></div>
           <div class="col-xs-3"><textarea name="permanentaddress" id="permanentaddress"  class="text-box1" value="" rows="2"></textarea></div>
           <div class="col-xs-3">Telephone No</div>
           <div class="col-xs-3"><input type="number" id="permanenttelno" name="permanenttelno"  class="text-box" value="" /></div>
          </div>
          <div class="row">
           <div class="col-xs-3">Mobile No</div>
           <div class="col-xs-3"><input type="number" id="permanentmobileno" name="permanentmobileno"  class="text-box" value="" /></div>
           <div class="col-xs-3">Father's / Spouse's Name*</div>
           <div class="col-xs-3"><input type="text" name="father_spousename" id="father_spousename"  class="text-box" value="" required/></div>
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
             <div class="col-xs-3"><input type="text" name="childrenname1" id="childrenname1"  class="text-box" value="" /></div>
             <div class="col-xs-3" id="hidden">Date of Birth</div>
             <div class="col-xs-3"><input type="date" name="childrendob1" id="childrendob1"  class="text-box" value="" /></div>
             <div class="col-xs-3" id="hidden">Class</div>
             <div class="col-xs-3"><input type="text" name="childrenclass1" id="childrenclass1"  class="text-box" value="" /></div>
             <div class="col-xs-3" id="hidden">School</div>
             <div class="col-xs-3"><input type="text" name="childrenschool1" id="childrenschool1"  class="text-box" value="" /></div>
            </div>
            <div class="row">
             <div class="col-xs-1" id="hidden">2.</div>
             <div class="col-xs-3" id="hidden">Name</div>
             <div class="col-xs-3"><input type="text" name="childrenname2" id="childrenname2"  class="text-box" value="" /></div>
             <div class="col-xs-3" id="hidden">Date of Birth</div>
             <div class="col-xs-3"><input type="date" name="childrendob2" id="childrendob2"  class="text-box" value="" /></div>
             <div class="col-xs-3" id="hidden">Class</div>
             <div class="col-xs-3"><input type="text" name="childrenclass2" id="childrenclass2"  class="text-box" value="" /></div>
             <div class="col-xs-3" id="hidden">School</div>
             <div class="col-xs-3"><input type="text" name="childrenschool2" id="childrenschool2"  class="text-box" value="" /></div>
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
           <div class="col-xs-2"><input type="text" name="examination1" id="examination1"  class="text-box" value="" /></div>
           <div class="col-xs-1" id="hidden">Year</div>
           <div class="col-xs-1"><input type="text" name="year1" id="year1"  class="text-box" value="" /></div>
           <div class="col-xs-1" id="hidden">Marks/Grades</div>
           <div class="col-xs-1"><input type="text" name="marksGrades1" id="marksGrades1"  class="text-box" value="" /></div>
           <div class="col-xs-1" id="hidden">Division</div>
           <div class="col-xs-1"><input type="text" name="division1" id="division1"  class="text-box" value="" /></div>
           <div class="col-xs-1" id="hidden">Percentage</div>
           <div class="col-xs-1"><input type="text" name="percentage1" id="percentage1"  class="text-box" value="" /></div>
           <div class="col-xs-2" id="hidden">School / College Attended</div>
           <div class="col-xs-2"><input type="text" name="schoolCollegeAttended1" id="schoolCollegeAttended1"  class="text-box" value="" /></div>
           <div class="col-xs-2" id="hidden">University</div>
           <div class="col-xs-2"><input type="text" name="university1" id="university1"  class="text-box" value="" /></div>
           <div class="col-xs-2" id="hidden">Subject</div>
           <div class="col-xs-2"><input type="text" name="subjects1" id="subjects1"  class="text-box" value="" /></div>
          </div>
          <div class="row">
           <div class="xsx" id="hidden">2.</div>
           <div class="col-xs-2" id="hidden">Examination</div>
           <div class="col-xs-2"><input type="text" name="examination2" id="examination2"  class="text-box" value="" /></div>
           <div class="col-xs-1" id="hidden">Year</div>
           <div class="col-xs-1"><input type="text" name="year2" id="year2"  class="text-box" value="" /></div>
           <div class="col-xs-1" id="hidden">Marks/Grades</div>
           <div class="col-xs-1"><input type="text" name="marksGrades2" id="marksGrades2"  class="text-box" value="" /></div>
           <div class="col-xs-1" id="hidden">Division</div>
           <div class="col-xs-1"><input type="text" name="division2" id="division2"  class="text-box" value="" /></div>
           <div class="col-xs-1" id="hidden">Percentage</div>
           <div class="col-xs-1"><input type="text" name="percentage2" id="percentage2"  class="text-box" value="" /></div>
           <div class="col-xs-2" id="hidden">School / College Attended</div>
           <div class="col-xs-2"><input type="text" name="schoolCollegeAttended2" id="schoolCollegeAttended2"  class="text-box" value="" /></div>
           <div class="col-xs-2" id="hidden">University</div>
           <div class="col-xs-2"><input type="text" name="university2" id="university2"  class="text-box" value="" /></div>
           <div class="col-xs-2" id="hidden">Subject</div>
           <div class="col-xs-2"><input type="text" name="subjects2" id="subjects2"  class="text-box" value="" /></div>
          </div>
          <div class="row">
           <div class="xsx" id="hidden">3.</div>
           <div class="col-xs-2" id="hidden">Examination</div>
           <div class="col-xs-2"><input type="text" name="examination3" id="examination3"  class="text-box" value="" /></div>
           <div class="col-xs-1" id="hidden">Year</div>
           <div class="col-xs-1"><input type="text" name="year3" id="year3"  class="text-box" value="" /></div>
           <div class="col-xs-1" id="hidden">Marks/Grades</div>
           <div class="col-xs-1"><input type="text" name="marksGrades3" id="marksGrades3"  class="text-box" value="" /></div>
           <div class="col-xs-1" id="hidden">Division</div>
           <div class="col-xs-1"><input type="text" name="division3" id="division3"  class="text-box" value="" /></div>
           <div class="col-xs-1" id="hidden">Percentage</div>
           <div class="col-xs-1"><input type="text" name="percentage3" id="percentage3"  class="text-box" value="" /></div>
           <div class="col-xs-2" id="hidden">School / College Attended</div>
           <div class="col-xs-2"><input type="text" name="schoolCollegeAttended3" id="schoolCollegeAttended3"  class="text-box" value="" /></div>
           <div class="col-xs-2" id="hidden">University</div>
           <div class="col-xs-2"><input type="text" name="university3" id="university3"  class="text-box" value="" /></div>
           <div class="col-xs-2" id="hidden">Subject</div>
           <div class="col-xs-2"><input type="text" name="subjects3" id="subjects3"  class="text-box" value="" /></div>
          </div>
          <div class="row">
           <div class="xsx" id="hidden">4.</div>
           <div class="col-xs-2" id="hidden">Examination</div>
           <div class="col-xs-2"><input type="text" name="examination4" id="examination4"  class="text-box" value="" /></div>
           <div class="col-xs-1" id="hidden">Year</div>
           <div class="col-xs-1"><input type="text" name="year4" id="year4"  class="text-box" value="" /></div>
           <div class="col-xs-1" id="hidden">Marks/Grades</div>
           <div class="col-xs-1"><input type="text" name="marksGrades4" id="marksGrades4"  class="text-box" value="" /></div>
           <div class="col-xs-1" id="hidden">Division</div>
           <div class="col-xs-1"><input type="text" name="division4" id="division4"  class="text-box" value="" /></div>
           <div class="col-xs-1" id="hidden">Percentage</div>
           <div class="col-xs-1"><input type="text" name="percentage4" id="percentage4"  class="text-box" value="" /></div>
           <div class="col-xs-2" id="hidden">School / College Attended</div>
           <div class="col-xs-2"><input type="text" name="schoolCollegeAttended4" id="schoolCollegeAttended4"  class="text-box" value="" /></div>
           <div class="col-xs-2" id="hidden">University</div>
           <div class="col-xs-2"><input type="text" name="university4" id="university4"  class="text-box" value="" /></div>
           <div class="col-xs-2" id="hidden">Subject</div>
           <div class="col-xs-2"><input type="text" name="subjects4" id="subjects4"  class="text-box" value="" /></div>
          </div>
          <div class="row">
           <div class="xsx" id="hidden">5.</div>
           <div class="col-xs-2" id="hidden">Examination</div>
           <div class="col-xs-2"><input type="text" name="examination5" id="examination5"  class="text-box" value="" /></div>
           <div class="col-xs-1" id="hidden">Year</div>
           <div class="col-xs-1"><input type="text" name="year5" id="year5"  class="text-box" value="" /></div>
           <div class="col-xs-1" id="hidden">Marks/Grades</div>
           <div class="col-xs-1"><input type="text" name="marksGrades5" id="marksGrades5"  class="text-box" value="" /></div>
           <div class="col-xs-1" id="hidden">Division</div>
           <div class="col-xs-1"><input type="text" name="division5" id="division5"  class="text-box" value="" /></div>
           <div class="col-xs-1" id="hidden">Percentage</div>
           <div class="col-xs-1"><input type="text" name="percentage5" id="percentage5"  class="text-box" value="" /></div>
           <div class="col-xs-2" id="hidden">School / College Attended</div>
           <div class="col-xs-2"><input type="text" name="schoolCollegeAttended5" id="schoolCollegeAttended5"  class="text-box" value="" /></div>
           <div class="col-xs-2" id="hidden">University</div>
           <div class="col-xs-2"><input type="text" name="university5" id="university5"  class="text-box" value="" /></div>
           <div class="col-xs-2" id="hidden">Subject</div>
           <div class="col-xs-2"><input type="text" name="subjects5" id="subjects5"  class="text-box" value="" /></div>
          </div>
          <div class="row">
           <div class="xsx" id="hidden">6.</div>
           <div class="col-xs-2" id="hidden">Examination</div>
           <div class="col-xs-2"><input type="text" name="examination6" id="examination6"  class="text-box" value="" /></div>
           <div class="col-xs-1" id="hidden">Year</div>
           <div class="col-xs-1"><input type="text" name="year6" id="year6"  class="text-box" value="" /></div>
           <div class="col-xs-1" id="hidden">Marks/Grades</div>
           <div class="col-xs-1"><input type="text" name="marksGrades6" id="marksGrades6"  class="text-box" value="" /></div>
           <div class="col-xs-1" id="hidden">Division</div>
           <div class="col-xs-1"><input type="text" name="division6" id="division6"  class="text-box" value="" /></div>
           <div class="col-xs-1" id="hidden">Percentage</div>
           <div class="col-xs-1"><input type="text" name="percentage6" id="percentage6"  class="text-box" value="" /></div>
           <div class="col-xs-2" id="hidden">School / College Attended</div>
           <div class="col-xs-2"><input type="text" name="schoolCollegeAttended6" id="schoolCollegeAttended6"  class="text-box" value="" /></div>
           <div class="col-xs-2" id="hidden">University</div>
           <div class="col-xs-2"><input type="text" name="university6" id="university6"  class="text-box" value="" /></div>
           <div class="col-xs-2" id="hidden">Subject</div>
           <div class="col-xs-2"><input type="text" name="subjects6" id="subjects6"  class="text-box" value="" /></div>
          </div>
          <div class="row">
           <div class="xsx" id="hidden">7.</div>
           <div class="col-xs-2" id="hidden">Examination</div>
           <div class="col-xs-2"><input type="text" name="examination7" id="examination7"  class="text-box" value="" /></div>
           <div class="col-xs-1" id="hidden">Year</div>
           <div class="col-xs-1"><input type="text" name="year7" id="year7"  class="text-box" value="" /></div>
           <div class="col-xs-1" id="hidden">Marks/Grades</div>
           <div class="col-xs-1"><input type="text" name="marksGrades7" id="marksGrades7"  class="text-box" value="" /></div>
           <div class="col-xs-1" id="hidden">Division</div>
           <div class="col-xs-1"><input type="text" name="division7" id="division7"  class="text-box" value="" /></div>
           <div class="col-xs-1" id="hidden">Percentage</div>
           <div class="col-xs-1"><input type="text" name="percentage7" id="percentage7"  class="text-box" value="" /></div>
           <div class="col-xs-2" id="hidden">School / College Attended</div>
           <div class="col-xs-2"><input type="text" name="schoolCollegeAttended7" id="schoolCollegeAttended7"  class="text-box" value="" /></div>
           <div class="col-xs-2" id="hidden">University</div>
           <div class="col-xs-2"><input type="text" name="university7" id="university7"  class="text-box" value="" /></div>
           <div class="col-xs-2" id="hidden">Subject</div>
           <div class="col-xs-2"><input type="text" name="subjects7" id="subjects7"  class="text-box" value="" /></div>
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
           <div class="col-xs-3 xs5"><input type="text" name="institutionname1" id="institutionname1"  class="text-box" value="" /></div>
           <div class="col-xs-2" id="hidden">Post</div>
           <div class="col-xs-2"><input type="text" name="post1" id="post1"  class="text-box" value="" /></div>
           <div class="col-xs-1" id="hidden">Period(From Date)</div>
           <div class="col-xs-1"><input type="date" name="fromdate1" id="fromdate1"  class="text-box" value="" /></div>
           <div class="col-xs-1" id="hidden">Period(From Date)</div>
           <div class="col-xs-1"><input type="date" name="todate1" id="todate1"  class="text-box" value="" /></div>
           <div class="col-xs-1" id="hidden">Number of years / months</div>
           <div class="col-xs-1"><input type="text" name="noofyear_month1" id="noofyear_month1"  class="text-box" value=""/></div>
           <div class="col-xs-2" id="hidden">Subject Taught</div>
           <div class="col-xs-2"><input type="text" name="subject1" id="subject1"  class="text-box" value="" /></div>
           <div class="col-xs-1" id="hidden">Classe Taught</div>
           <div class="col-xs-1"><input type="text" name="class1" id="class1"  class="text-box" value="" /></div>
          </div>
          <div class="row">
           <div class="col-xs-1 xs1">2.</div>
           <div class="col-xs-3" id="hidden">Name of the Institution where served</div>
           <div class="col-xs-3 xs5"><input type="text" name="institutionname2" id="institutionname2"  class="text-box" value="" /></div>
           <div class="col-xs-2" id="hidden">Post</div>
           <div class="col-xs-2"><input type="text" name="post2" id="post2"  class="text-box" value="" /></div>
           <div class="col-xs-1" id="hidden">Period(From Date)</div>
           <div class="col-xs-1"><input type="date" name="fromdate2" id="fromdate2"  class="text-box" value="" /></div>
           <div class="col-xs-1" id="hidden">Period(From Date)</div>
           <div class="col-xs-1"><input type="date" name="todate2" id="todate2"  class="text-box" value="" /></div>
           <div class="col-xs-1" id="hidden">Number of years / months</div>
           <div class="col-xs-1"><input type="text" name="noofyear_month2" id="noofyear_month2"  class="text-box" value="" /></div>
           <div class="col-xs-2" id="hidden">Subject Taught</div>
           <div class="col-xs-2"><input type="text" name="subject2" id="subject2"  class="text-box" value="" /></div>
           <div class="col-xs-1" id="hidden">Classe Taught</div>
           <div class="col-xs-1"><input type="text" name="class2" id="class2"  class="text-box" value="" /></div>
          </div>
          <div class="row">
           <div class="col-xs-1 xs1">3.</div>
           <div class="col-xs-3" id="hidden">Name of the Institution where served</div>
           <div class="col-xs-3 xs5"><input type="text" name="institutionname3" id="institutionname3"  class="text-box" value="" /></div>
           <div class="col-xs-2" id="hidden">Post</div>
           <div class="col-xs-2"><input type="text" name="post3" id="post3"  class="text-box" value="" /></div>
           <div class="col-xs-1" id="hidden">Period(From Date)</div>
           <div class="col-xs-1"><input type="date" name="fromdate3" id="fromdate3"  class="text-box" value="" /></div>
           <div class="col-xs-1" id="hidden">Period(From Date)</div>
           <div class="col-xs-1"><input type="date" name="todate3" id="todate3"  class="text-box" value="" /></div>
           <div class="col-xs-1" id="hidden">Number of years / months</div>
           <div class="col-xs-1"><input type="text" name="noofyear_month3" id="noofyear_month3"  class="text-box" value="" /></div>
           <div class="col-xs-2" id="hidden">Subject Taught</div>
           <div class="col-xs-2"><input type="text" name="subject3" id="subject3"  class="text-box" value="" /></div>
           <div class="col-xs-1" id="hidden">Classe Taught</div>
           <div class="col-xs-1"><input type="text" name="class3" id="class3"  class="text-box" value="" /></div>
          </div>
          <div class="row">
           <div class="col-xs-1 xs1">4.</div>
           <div class="col-xs-3" id="hidden">Name of the Institution where served</div>
           <div class="col-xs-3 xs5"><input type="text" name="institutionname4" id="institutionname4"  class="text-box" value="" /></div>
           <div class="col-xs-2" id="hidden">Post</div>
           <div class="col-xs-2"><input type="text" name="post4" id="post4"  class="text-box" value="" /></div>
           <div class="col-xs-1" id="hidden">Period(From Date)</div>
           <div class="col-xs-1"><input type="date" name="fromdate4" id="fromdate4"  class="text-box" value="" /></div>
           <div class="col-xs-1" id="hidden">Period(From Date)</div>
           <div class="col-xs-1"><input type="date" name="todate4" id="todate4"  class="text-box" value="" /></div>
           <div class="col-xs-1" id="hidden">Number of years / months</div>
           <div class="col-xs-1"><input type="text" name="noofyear_month4" id="noofyear_month4"  class="text-box" value="" /></div>
           <div class="col-xs-2" id="hidden">Subject Taught</div>
           <div class="col-xs-2"><input type="text" name="subject4" id="subject4"  class="text-box" value="" /></div>
           <div class="col-xs-1" id="hidden">Classe Taught</div>
           <div class="col-xs-1"><input type="text" name="class4" id="class4"  class="text-box" value="" /></div>
          </div>
          <div class="row">
           <div class="col-xs-1 xs1">5.</div>
           <div class="col-xs-3" id="hidden">Name of the Institution where served</div>
           <div class="col-xs-3 xs5"><input type="text" name="institutionname5" id="institutionname5"  class="text-box" value="" /></div>
           <div class="col-xs-2" id="hidden">Post</div>
           <div class="col-xs-2"><input type="text" name="post5" id="post5"  class="text-box" value="" /></div>
           <div class="col-xs-1" id="hidden">Period(From Date)</div>
           <div class="col-xs-1"><input type="date" name="fromdate5" id="fromdate5"  class="text-box" value="" /></div>
           <div class="col-xs-1" id="hidden">Period(From Date)</div>
           <div class="col-xs-1"><input type="date" name="todate5" id="todate5"  class="text-box" value="" /></div>
           <div class="col-xs-1" id="hidden">Number of years / months</div>
           <div class="col-xs-1"><input type="text" name="noofyear_month5" id="noofyear_month5"  class="text-box" value="" /></div>
           <div class="col-xs-2" id="hidden">Subject Taught</div>
           <div class="col-xs-2"><input type="text" name="subject5" id="subject5"  class="text-box" value="" /></div>
           <div class="col-xs-1" id="hidden">Classe Taught</div>
           <div class="col-xs-1"><input type="text" name="class5" id="class5"  class="text-box" value="" /></div>
          </div>
         </div>
         <div class="text4">
          <div class="row">
           <div class="col-xs-3"><b>Total Experience</b></div>
           <div class="col-xs-3"><select name="totalexperience" id="totalexperience" class="text-box">
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
                                 </select>&nbsp;<font><b>Years</b></font></div>
           <div class="col-xs-3"><select name="experiencemonth" id="experiencemonth" class="text-box">
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
                                  </select>&nbsp;<font><b>Months</b></font></div>
           <div class="col-xs-3"><font><b>as on</b></font><input type="date" name="experiencedate" id="experiencedate"  class="text-box" value="" placeholder="dd/mm/yyyy" /></div>
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
           <div class="col-xs-2"><input type="number" name="workshopCourseYear1" id="workshopCourseYear1"  class="text-box" value="" /></div>
           <div class="col-xs-2" id="hidden">Duration</div>
           <div class="col-xs-2"><input type="text" name="workshopCourseDuration1" id="workshopCourseDuration1"  class="text-box" value="" /></div>
           <div class="col-xs-3" id="hidden">Institute</div>
           <div class="col-xs-3"><input type="text" name="workshopCourseInstitute1" id="workshopCourseInstitute1"  class="text-box" value="" /></div>
           <div class="col-xs-4" id="hidden">Name of the Workshop</div>
           <div class="col-xs-4"><input type="text" name="workshopCourseWorkshopname1" id="workshopCourseWorkshopname1"  class="text-box" value="" /></div>
          </div>
          <div class="row">
           <div class="col-xs-1">b)</div>
           <div class="col-xs-2" id="hidden">Year</div>
           <div class="col-xs-2"><input type="number" name="workshopCourseYear2" id="workshopCourseYear2"  class="text-box" value="" /></div>
           <div class="col-xs-2" id="hidden">Duration</div>
           <div class="col-xs-2"><input type="text" name="workshopCourseDuration2" id="workshopCourseDuration2"  class="text-box" value="" /></div>
           <div class="col-xs-3" id="hidden">Institute</div>
           <div class="col-xs-3"><input type="text" name="workshopCourseInstitute2" id="workshopCourseInstitute2"  class="text-box" value="" /></div>
           <div class="col-xs-4" id="hidden">Name of the Workshop</div>
           <div class="col-xs-4"><input type="text" name="workshopCourseWorkshopname2" id="workshopCourseWorkshopname2"  class="text-box" value="" /></div>
          </div>
          <div class="row">
           <div class="col-xs-1">c)</div>
           <div class="col-xs-2" id="hidden">Year</div>
           <div class="col-xs-2"><input type="number" name="workshopCourseYear3" id="workshopCourseYear3"  class="text-box" value="" /></div>
           <div class="col-xs-2" id="hidden">Duration</div>
           <div class="col-xs-2"><input type="text" name="workshopCourseDuration3" id="workshopCourseDuration3"  class="text-box" value="" /></div>
           <div class="col-xs-3" id="hidden">Institute</div>
           <div class="col-xs-3"><input type="text" name="workshopCourseInstitute3" id="workshopCourseInstitute3"  class="text-box" value="" /></div>
           <div class="col-xs-4" id="hidden">Name of the Workshop</div>
           <div class="col-xs-4"><input type="text" name="workshopCourseWorkshopname3" id="workshopCourseWorkshopname3"  class="text-box" value="" /></div>
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
           <div class="col-xs-2"><input type="text" id="adExPeriod1" name="adExPeriod1"  class="text-box" value="" /></div>
           <div class="col-xs-4" id="hidden">Designation</div>
           <div class="col-xs-4"><input type="text" id="adExdesignation1" name="adExdesignation1"  class="text-box" value="" /></div>
           <div class="col-xs-5" id="hidden">Responsibilities Handled</div>
           <div class="col-xs-5"><input type="text" id="adExResponsibility1" name="adExResponsibility1"  class="text-box" value="" /></div>
          </div>
          <div class="row">
           <div class="col-xs-1 xs1">b)</div>
           <div class="col-xs-2" id="hidden">Period</div>
           <div class="col-xs-2"><input type="text" id="adExPeriod2" name="adExPeriod2"  class="text-box" value="" /></div>
           <div class="col-xs-4" id="hidden">Designation</div>
           <div class="col-xs-4"><input type="text" id="adExdesignation2" name="adExdesignation2"  class="text-box" value="" /></div>
           <div class="col-xs-5" id="hidden">Responsibilities Handled</div>
           <div class="col-xs-5"><input type="text" id="adExResponsibility2" name="adExResponsibility2"  class="text-box" value="" /></div>
          </div>
         </div>
         <div class="text7">
          <div class="row">
           <div class="col-xs-3"><strong>Certification</strong> (if any)</div>
           <div class="col-xs-3"><input type="text" name="certification" id="certification"  class="text-box" value="" /></div>
           <div class="col-xs-3">Countries visited</div>
           <div class="col-xs-3 xs6"><input type="text" name="countriesVisited" id="countriesVisited"  class="text-box" value="" /></div>
          </div>
          <div class="row">
           <div class="col-xs-3 xs2">Knowledge of foreign language(s)</div>
           <div class="col-xs-3"><input type="text" name="foreginlanguage" id="foreginlanguage"  class="text-box" value="" /></div>
           <div class="col-xs-6">&nbsp;</div>
          </div>
          <div class="row">
           <div class="col-xs-3">Reason for leaving (last Organisation)</div>
           <div class="col-xs-3 xs6"><input type="text" name="terminationReason" id="terminationReason"  class="text-box" value="" /></div>
           <div class="col-xs-3">Salary & allowances last drawn: Scale</div>
           <div class="col-xs-3 xs6"><input type="text" name="terminationSalaryScale" id="terminationSalaryScale"  class="text-box" value="" /></div>
          </div>
          <div class="row">
           <div class="col-xs-3">Basic Salary (Per Month)</div>
           <div class="col-xs-3"><input type="text" name="terminationBasicSalary" id="terminationBasicSalary"  class="text-box" value="" /></div>
           <div class="col-xs-3">Plus allowances (Rs)(Per Month)</div>
           <div class="col-xs-3 xs6"><input type="text" name="terminationPlusAllowance" id="terminationPlusAllowance"  class="text-box" value="" /></div>
          </div>
          <div class="row">
           <div class="col-xs-3">Total Rs.(Per Month)</div>
           <div class="col-xs-3"><input type="text" name="terminationTotal" id="terminationTotal"  class="text-box" value="" /></div>
           <div class="col-xs-6">&nbsp;</div>
          </div>
         </div>
         <div class="text9">
          <div class="row">
           <div class="col-xs-12"><strong>Major achievements (if any)</strong></div>
           <div class="col-xs-4">a)&nbsp;<input type="text" name="majorAchievement1" id="majorAchievement1"  class="text-box" value="" /></div>
           <div class="col-xs-4">b)&nbsp;<input type="text" name="majorAchievement2" id="majorAchievement2"  class="text-box" value="" /></div>
           <div class="col-xs-4">c)&nbsp;<input type="text" name="majorAchievement3" id="majorAchievement3"  class="text-box" value="" /></div>
          </div>
         </div>
         <div class="text10">
          <div class="head2">Please mention any three extra curricular activities in which you can train students</div>
          <div class="row">
           <div class="col-xs-4">a)&nbsp;<input type="text" name="extracurricular1" id="extracurricular1"  class="text-box" value="" /></div>
           <div class="col-xs-4">b)&nbsp;<input type="text" name="extracurricular2" id="extracurricular2"  class="text-box" value="" /></div>
           <div class="col-xs-4">c)&nbsp;<input type="text" name="extracurricular3" id="extracurricular3"  class="text-box" value="" /></div>
          </div>
         </div>
         <div class="text11">
          <div class="head2">Name, Designation with Telephone / Mobile number and address of two references (Academic / Teaching) :</div>
          <div class="row">
           <div class="col-xs-6">
            <div class="he2"><strong>Reference</strong> (Person 1)</div>
             <div class="row">
              <div class="col-xs-6">Name*</div>
              <div class="col-xs-6"><input type="text" name="referencePersonName1" id="referencePersonName1"  class="text-box" value="" required /></div>
             </div>
             <div class="row">
              <div class="col-xs-6">Designation*</div>
              <div class="col-xs-6"><input type="text" name="referencePersonDesignation1" id="referencePersonDesignation1"  class="text-box" value="" required /></div>
             </div>
             <div class="row">
              <div class="col-xs-6">Telephone No. / Mobile*</div>
              <div class="col-xs-6"><input type="text" name="referencePersonTelNo1" id="referencePersonTelNo1"  class="text-box" value="" required /></div>
             </div>
             <div class="row">
              <div class="col-xs-6">Address*</div>
              <div class="col-xs-6"><input type="text" name="referencePersonAddress1" id="referencePersonAddress1"  class="text-box" value="" required /></div>
             </div>
           </div>
           <div class="col-xs-6">
            <div class="he2"><strong>Reference</strong> (Person 2)</div>
             <div class="row">
              <div class="col-xs-6">Name*</div>
              <div class="col-xs-6"><input type="text" name="referencePersonName2" id="referencePersonName2"  class="text-box" value="" required /></div>
             </div>
             <div class="row">
              <div class="col-xs-6">Designation*</div>
              <div class="col-xs-6"><input type="text" name="referencePersonDesignation2" id="referencePersonDesignation2"  class="text-box" value="" required /></div>
             </div>
             <div class="row">
              <div class="col-xs-6">Telephone No. / Mobile*</div>
              <div class="col-xs-6"><input type="text" name="referencePersonTelNo2" id="referencePersonTelNo2"  class="text-box" value="" required/></div>
             </div>
             <div class="row">
              <div class="col-xs-6">Address*</div>
              <div class="col-xs-6"><input type="text" name="referencePersonAddress2" id="referencePersonAddress2"  class="text-box" value="" required/></div>
             </div>
           </div>
          </div>
         </div>
         <div class="text12">
           <div class="head2">Documents to be Uploaded(Please note maximum file size allowed per upload is 250 KB)</div>
           <div>&nbsp;</div>
           <div class="row">
            <div class="col-xs-6 xsss"> 1. Age Proof* :</div>
            <div class="col-xs-6 xsss1"> <input type="file" name="F1"  id="F1" required><span style="color:red;" id="errorMessageF1"></span> </div>
           </div>
           <div class="row">
            <div class="col-xs-6 xsss"> 2. Class X Marksheet* :</div>
            <div class="col-xs-6 xsss1"> <input type="file" name="F2" id="F2" required><span style="color:red;" id="errorMessageF1"></span> </div>
           </div>
           <div class="row">
            <div class="col-xs-6 xsss"> 3. Class XII Marksheet* :</div>
            <div class="col-xs-6 xsss1"> <input type="file" name="F3"  id="F3" required><span style="color:red;" id="errorMessageF1"></span> </div>
           </div>
           <div class="row">
            <div class="col-xs-6 xsss"> 4. Graduation Marksheet* : </div>
            <div class="col-xs-6 xsss1"> <input type="file" name="F4" id="F4" required><span style="color:red;" id="errorMessageF1"></span> </div>
           </div>
           <div class="row">
            <div class="col-xs-6 xsss"> 5. Post Graduation Marksheet* :</div>
            <div class="col-xs-6 xsss1"> <input type="file" name="F5"  id="F5" required><span style="color:red;" id="errorMessageF1"></span> </div>
           </div>
           <div class="row">
            <div class="col-xs-6 xsss"> 6. B.Ed Marksheet : </div>
            <div class="col-xs-6 xsss1"> <input type="file" name="F6" id="F6" required><span style="color:red;" id="errorMessageF1"></span> </div>
           </div>
           <div class="row">
            <div class="col-xs-6 xsss"> 7. CTET Marksheet :</div>
            <div class="col-xs-6 xsss1"> <input type="file" name="F7"  id="F7"><span style="color:red;" id="errorMessageF1"></span> </div>
           </div>
          </div>
          <div class="text121">
           <div class="row">
            <div class="col-xs-3">The exact period after which you can join*<br>(if selected)</div>
            <div class="col-xs-3"><input type="text" name="exactPeriodjoin" id="exactPeriodjoin"  class="text-box" value="" /></div>
            <div class="col-xs-6" id="hidden">&nbsp;</div>
           </div>
           <div class="row">
            <div class="col-xs-3">Remarks (if any)</div>
            <div class="col-xs-3"><input type="text" name="remarks" id="remarks"  class="text-box" value="" ></div>
            <div class="col-xs-6" id="hidden">&nbsp;</div>
           </div>
         </div>
             
             Payment Mode:  &nbsp;&nbsp;
              <input type="radio" name="paymentMode" id="online" value="online" checked>Online Payment
             <input type="radio" name="paymentMode"  id="offline"  value="offline">Offline Payment

             <div id="oflinePaymenDescription">
        <div class="text100">
  <div class="head1">Payment Details</div>
    <div class="row">
     <div class="col-xs-3">Name of Bank:</div>
     <div class="col-xs-3"><input type="text" name="bankName" id="bankName" class="text-box" value=""></div>
     <div class="col-xs-3">Branch Name:</div>
      <div class="col-xs-3"><input type="text" name="branchName" id="branchName" class="text-box" value=""></div>
    </div>
    <div class="row">
      <div class="col-xs-3">Pay Order Date:</div>
      <div class="col-xs-3"><input type="date" name="payOrderDate" id="payOrderDate" class="text-box" value=""></div>
      <div class="col-xs-3">Pay Order No.:</div>
      <div class="col-xs-3"><input type="text" name="payOrderNo" id="payOrderNo" class="text-box" value=""></div>
    </div>
    <div class="row">
      <div class="col-xs-3">Amount:</div>
      <div class="col-xs-3"><input type="text" name="payAmount" id="payAmount" class="text-box" value="100" readonly="true"></div>
        <div class="col-xs-6">&nbsp;</div>
    </div>
    <div class="row">
     <div class="col-xs-6">
         <input type="checkbox" name="offlinePayment" id="offlinePayment" value="Off-Line Payment">&nbsp;Off-Line Payment
        </div>
    </div>
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

      
      </div>
    
      </div>
          <div class="row">
           <div class="col-xs-2">Date :</div>
           <?php $currentdate=date("d-m-Y"); ?>
           <div class="col-xs-3"><input typr="text" name="filling_date" value="<?php echo $currentdate;?>" readonly /></div>
           <div class="col-xs-2 hed1">&nbsp;</div>
          </div>
         </div>
          <div class="text15"> 
           <div align="center"><input type="submit" name="submit" id="submit" class="btn" /></div>
          </div>
         </form>
        </div>
        </body>
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

        </script>

        <script language="JavaScript" type="text/javascript">
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

     })

    </script>