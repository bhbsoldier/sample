<?php
session_start();
if(isset($_SESSION['$UserName'])){
	header('location:Admin/index.php');
} 
if(isset($_SESSION['$UserName_job'])){
	header('location:JobSeeker/index.php');
} 
if(isset($_SESSION['$UserName_emp'])){
	header('location:Employer/index.php');
} 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" />
    <meta name="robots" content="all,follow" />

    
    <title>BBSOLDIER PORTAL</title>
    
    <meta name="description" content="..." />
    <meta name="keywords" content="..." />
    <link rel="icon" type="image/png" href="./design/logo1.jpg">  



    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css" />
    <link rel="stylesheet" media="print" type="text/css" href="./css/print.css" />
    <link rel="stylesheet" media="aural" type="text/css" href="./css/aural.css" />
    <style type="text/css">
        
<!--
.style1 {
	color: #000066;
	font-weight: bold;
}
.style2 {
	font-size: medium;
	font-weight: bold;
}
-->
    </style>
  
</head>



<body id="www-url-cz">



<!-- Main -->
<div id="main" class="box">
<?php 
include "Header.php"
?>
<?php 
include "menu.php"
?>   
<!-- Page (2 columns) -->
    <div id="page" class="box">
    <div id="page-in" class="box">
<!-- Content -->
        <div id="content">

            <!-- Article -->

            <div class="article">


   <center>
    <h1>Register Here:</h1>
   



             <button type="submit" class="button" ><a href="EmployerReg.php">AS EMPLOYER</a></button>
             <button type="submit" class="button" ><a href="JobSeekerReg.php">AS JOBSEEKER</a></button>
           
   </center>
  <br>
  <br>
  <div class="container">
  <img src="design/main.jpg" alt="" width="500" height="300">
  <div class="text">
    <p>Welcome to the online Job Portal. It provides facility to the Job Seeker to search for various jobs as per his qualification. Here Job Seeker can register himself on the web portal and create his profile along with his educational information. Job Seeker can search various jobs and apply for the Job. This Portal is also designed for various employers who require to recruit employees in their organization. Employers can register themselves on the web portal and then upload information on various job vacancies in their organization. Employers can view the applications of Job Seekers and send call letters to the job seekers.</p>
  </div>
</div>

                <p> <span class="style2"></span></p>
              <p align="right">  /></p>
              <p class="btn-more box noprint">&nbsp;</p>
       

          </div> <!-- /article -->

       
            
        </div> <!-- /content -->

<?php
include "right.php"
?>

    </div> <!-- /page-in -->
    </div> <!-- /page -->

 
<?php
include "footer.php"
?>
</div> <!-- /main -->

</body>
</html>
