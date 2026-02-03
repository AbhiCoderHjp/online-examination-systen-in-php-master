<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Project Worlds || FEEDBACK </title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link rel="stylesheet" href="css/style.css"> <!-- Modern Style -->
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>

 <!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">


  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
 	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
	<!--alert message-->
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<!--alert message end-->

</head>

<body>

<!--header start-->
<div class="header">
    <div class="container">
        <div class="row" style="display: flex; align-items: center; width: 100%;">
            <div class="col-lg-6">
                <span class="logo">TestYourSkill</span>
            </div>
            <div class="col-md-2">
            </div>
            <div class="col-md-4">
                <?php
                include_once 'dbConnection.php';
                session_start();
                if((!isset($_SESSION['email']))){
                echo '<a href="#" class="pull-right sub1 btn title3" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;Signin</a>&nbsp;';}
                else
                {
                echo '<a href="logout.php?q=feedback.php" class="pull-right sub1 btn title3"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Signout</a>&nbsp;';}
                ?>

                <a href="index.php" class="pull-right btn sub1 title3"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Home</a>&nbsp;
            </div>
        </div>
    </div>
</div>

<!--sign in modal start-->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title1"><span style="color:var(--primary)">Log In</span></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="login.php?q=index.php" method="POST">
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="email"></label>  
  <div class="col-md-6">
  <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="password"></label>
  <div class="col-md-6">
    <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">
    
  </div>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary sub1" style="margin:0 !important">Log in</button>
		</fieldset>
</form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--sign in modal closed-->

<!--header end-->

<div class="bg1">
<div class="container">
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4 panel" style="background: white; min-height:430px; border-radius: var(--radius-lg); box-shadow: var(--shadow-lg); padding: 40px;">
<h2 align="center" style="font-family:var(--font-heading); color: var(--primary); margin-top: 0px; margin-bottom: 20px; font-weight: 700;">Feedback</h2>
<div style="font-size:14px">
<?php if(@$_GET['q'])echo '<span style="font-size:18px;"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;'.@$_GET['q'].'</span>';
else
{echo' 
<div class="text-center" style="margin-bottom:20px; color: var(--text-muted);">You can send us your feedback directly:</div>

<form role="form"  method="post" action="feed.php?q=feedback.php">

<!-- Text input-->
<div class="form-group">
  <label style="font-weight: 500; color: var(--text-main); margin-bottom: 5px;">Name</label>
  <input id="name" name="name" placeholder="Enter your name" class="form-control input-md" type="text" style="height: 45px;">
</div>

<!-- Text input-->
<div class="form-group">
  <label style="font-weight: 500; color: var(--text-main); margin-bottom: 5px;">Subject</label>
  <input id="subject" name="subject" placeholder="Enter subject" class="form-control input-md" type="text" style="height: 45px;">
</div>

<!-- Text input-->
<div class="form-group">
  <label style="font-weight: 500; color: var(--text-main); margin-bottom: 5px;">E-Mail address</label>
  <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email" style="height: 45px;">
</div>

<div class="form-group"> 
  <label style="font-weight: 500; color: var(--text-main); margin-bottom: 5px;">Feedback</label>
  <textarea rows="4" cols="8" name="feedback" class="form-control" placeholder="Write feedback here..." style="resize: vertical;"></textarea>
</div>

<div class="form-group" align="center" style="margin-top: 30px;">
<input type="submit" name="submit" value="Submit Feedback" class="btn btn-primary sub1" style="width: 100%; height: 50px; font-size: 16px;" />
</div>
</form>';}?>
</div><!--col-md-4 end-->
<div class="col-md-4"></div></div>
</div></div>
</div><!--container end-->


<!--Footer start-->
<div class="row footer">
<div class="col-md-3 box">
<a href="http://www.projectworlds.in/online-examination" target="_blank">About us</a>
</div>
<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#login">Admin Login</a></div>
<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#developers">Developers</a>

</div>
<div class="col-md-3 box">
<a href="feedback.php" target="_blank">Feedback</a></div></div>
<!-- Modal For Developers-->
<div class="modal fade title1" id="developers">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" style="font-family:'typo' "><span style="color:var(--primary)">Developers</span></h4>
      </div>
 	  
      <div class="modal-body">
        <p>
		<div class="row">
		<div class="col-md-4">
		 <img src="image/CAM00121.jpg" width=100 height=100 alt="Sunny Prakash Tiwari" class="img-rounded">
		 </div>
		 <div class="col-md-5">
		<a href="http://yugeshverma.blogspot.in" style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">Yugesh Verma</a>
		<h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+91 9165063741</h4>
		<h4 style="font-family:'typo' ">vermayugesh323@gmail.com</h4>
		<h4 style="font-family:'typo' ">Chhattishgarh insitute of management & Technology ,bhilai</h4></div></div>
		</p>
      </div>
    
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--Modal for admin login-->
	 <div class="modal fade" id="login">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><span style="color:var(--primary);font-family:'typo' ">LOGIN</span></h4>
      </div>
      <div class="modal-body title1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form role="form" method="post" action="admin.php?q=index.php">
<div class="form-group">
<input type="text" name="uname" maxlength="20"  placeholder="Admin user id" class="form-control"/> 
</div>
<div class="form-group">
<input type="password" name="password" maxlength="15" placeholder="Password" class="form-control"/>
</div>
<div class="form-group" align="center">
<input type="submit" name="login" value="Login" class="btn btn-primary sub1" />
</div>
</form>
</div><div class="col-md-3"></div></div>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--footer end-->


</body>
</html>
