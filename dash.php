<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Project Worlds || DASHBOARD </title>
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
<script src="js/theme.js" type="text/javascript"></script>
<!--
<script>
$(function () {
    $(document).on( 'scroll', function(){
        console.log('scroll top : ' + $(window).scrollTop());
        if($(window).scrollTop()>=$(".logo").height())
        {
             $(".navbar").addClass("navbar-fixed-top");
        }

        if($(window).scrollTop()<$(".logo").height())
        {
             $(".navbar").removeClass("navbar-fixed-top");
        }
    });
});</script>
-->
</head>

<body style="background: var(--background);">
    
<div class="header">
    <div class="container">
        <div class="row" style="display: flex; align-items: center; width: 100%;">
            <div class="col-lg-6">
                <span class="logo">TestYourSkill</span>
            </div>
            <div class="col-md-6">
                 <?php
                 include_once 'dbConnection.php';
                session_start();
                $email=$_SESSION['email'];
                  if(!(isset($_SESSION['email']))){
                header("location:index.php");
                
                }
                else
                {
                $name = $_SESSION['name'];;
                
                include_once 'dbConnection.php';
                echo '<span class="pull-right top title1" style="display:flex; align-items:center;">
                <!-- Theme Toggle -->
                <a href="#" id="theme-toggle" class="btn" style="background: transparent; border: none; font-size: 20px; color: var(--text-main); margin-right: 15px;">
                    <span id="theme-toggle-icon" class="glyphicon glyphicon-moon"></span>
                </a>
                <span class="log1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Hello,</span> <a href="account.php" class="log log1" style="color:var(--primary)">'.$name.'</a>&nbsp;|&nbsp;<a href="logout.php?q=account.php" class="log" style="color:var(--text-muted)"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Signout</button></a></span>';
                }?>
            </div>
        </div>
    </div>
</div>

<!-- admin start-->

<!--navigation menu-->
<div class="container" style="margin-top: 20px; margin-bottom: 20px;">
<nav class="navbar navbar-default title1" style="background: rgba(255, 255, 255, 0.9) !important; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.5); border-radius: var(--radius-md); box-shadow: var(--shadow-lg);">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="dash.php?q=0"><b>Dashboard</b></a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li <?php if(@$_GET['q']==0) echo'class="active"'; ?>><a href="dash.php?q=0">Home<span class="sr-only">(current)</span></a></li>
        <li <?php if(@$_GET['q']==1) echo'class="active"'; ?>><a href="dash.php?q=1">User</a></li>
		<li <?php if(@$_GET['q']==2) echo'class="active"'; ?>><a href="dash.php?q=2">Ranking</a></li>
		<li <?php if(@$_GET['q']==3) echo'class="active"'; ?>><a href="dash.php?q=3">Feedback</a></li>
        <li class="dropdown <?php if(@$_GET['q']==4 || @$_GET['q']==5) echo'active"'; ?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Quiz<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="dash.php?q=4">Add Quiz</a></li>
            <li><a href="dash.php?q=5">Remove Quiz</a></li>
			
          </ul>
        </li>
		
      </ul>
          </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
<!--navigation menu closed-->
<div class="container"><!--container start-->
<div class="row">
<div class="col-md-12">
<!--home start-->

<?php if(@$_GET['q']==0) {

$result = mysqli_query($con,"SELECT * FROM quiz ORDER BY date DESC") or die('Error');
echo  '<div class="panel">
<h3 class="text-center" style="font-family:var(--font-heading); margin-bottom: 20px;">Quiz Management</h3>
<div class="table-responsive"><table class="table table-striped title1" style="vertical-align: middle;">
<tr style="color:var(--primary)"><td><b>S.N.</b></td><td><b>Topic</b></td><td><b>Total question</b></td><td><b>Marks</b></td><td><b>Time limit</b></td><td></td></tr>';
$c=1;
while($row = mysqli_fetch_array($result)) {
	$title = $row['title'];
	$total = $row['total'];
	$sahi = $row['sahi'];
    $time = $row['time'];
	$eid = $row['eid'];
$q12=mysqli_query($con,"SELECT score FROM history WHERE eid='$eid' AND email='$email'" )or die('Error98');
$rowcount=mysqli_num_rows($q12);	
if($rowcount == 0){
	echo '<tr><td>'.$c++.'</td><td>'.$title.'</td><td>'.$total.'</td><td>'.$sahi*$total.'</td><td>'.$time.'&nbsp;min</td>
	<td><b><a href="account.php?q=quiz&step=2&eid='.$eid.'&n=1&t='.$total.'" class="pull-right btn sub1" style="margin:0px;background:#99cc32"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Start</b></span></a></b></td></tr>';
}
else
{
echo '<tr style="color:var(--success)"><td>'.$c++.'</td><td>'.$title.'&nbsp;<span title="This quiz is already solve by you" class="glyphicon glyphicon-ok" aria-hidden="true"></span></td><td>'.$total.'</td><td>'.$sahi*$total.'</td><td>'.$time.'&nbsp;min</td>
	<td><b><a href="update.php?q=quizre&step=25&eid='.$eid.'&n=1&t='.$total.'" class="pull-right btn sub1" style="margin:0px;background:var(--secondary)"><span class="glyphicon glyphicon-repeat" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Restart</b></span></a></b></td></tr>';
}
}
$c=0;
echo '</table></div></div>';

}

//ranking start
if(@$_GET['q']== 2) 
{
$q=mysqli_query($con,"SELECT * FROM rank  ORDER BY score DESC " )or die('Error223');
echo  '<div class="panel title"><div class="table-responsive">
<table class="table table-striped title1" >
<tr style="color:red"><td><b>Rank</b></td><td><b>Name</b></td><td><b>Gender</b></td><td><b>College</b></td><td><b>Score</b></td></tr>';
$c=0;
while($row=mysqli_fetch_array($q) )
{
$e=$row['email'];
$s=$row['score'];
$q12=mysqli_query($con,"SELECT * FROM user WHERE email='$e' " )or die('Error231');
while($row=mysqli_fetch_array($q12) )
{
$name=$row['name'];
$gender=$row['gender'];
$college=$row['college'];
}
$c++;
echo '<tr><td style="color:#99cc32"><b>'.$c.'</b></td><td>'.$name.'</td><td>'.$gender.'</td><td>'.$college.'</td><td>'.$s.'</td><td>';
}
echo '</table></div></div>';}

?>


<!--home closed-->
<!--users start-->
<?php if(@$_GET['q']==1) {

$result = mysqli_query($con,"SELECT * FROM user") or die('Error');
echo  '<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
<tr style="color:var(--primary)"><td><b>S.N.</b></td><td><b>Name</b></td><td><b>Gender</b></td><td><b>College</b></td><td><b>Email</b></td><td><b>Mobile</b></td><td></td></tr>';
$c=1;
while($row = mysqli_fetch_array($result)) {
	$name = $row['name'];
	$mob = $row['mob'];
	$gender = $row['gender'];
    $email = $row['email'];
	$college = $row['college'];

	echo '<tr><td>'.$c++.'</td><td>'.$name.'</td><td>'.$gender.'</td><td>'.$college.'</td><td>'.$email.'</td><td>'.$mob.'</td>
	<td><a title="Delete User" href="update.php?demail='.$email.'"><b><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></b></a></td></tr>';
}
$c=0;
echo '</table></div></div>';

}?>
<!--user end-->

<!--feedback start-->
<?php if(@$_GET['q']==3) {
$result = mysqli_query($con,"SELECT * FROM `feedback` ORDER BY `feedback`.`date` DESC") or die('Error');
echo  '<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
<tr style="color:var(--primary)"><td><b>S.N.</b></td><td><b>Subject</b></td><td><b>Email</b></td><td><b>Date</b></td><td><b>Time</b></td><td><b>By</b></td><td></td><td></td></tr>';
$c=1;
while($row = mysqli_fetch_array($result)) {
	$date = $row['date'];
	$date= date("d-m-Y",strtotime($date));
	$time = $row['time'];
	$subject = $row['subject'];
	$name = $row['name'];
	$email = $row['email'];
	$id = $row['id'];
	 echo '<tr><td>'.$c++.'</td>';
	echo '<td><a title="Click to open feedback" href="dash.php?q=3&fid='.$id.'">'.$subject.'</a></td><td>'.$email.'</td><td>'.$date.'</td><td>'.$time.'</td><td>'.$name.'</td>
	<td><a title="Open Feedback" href="dash.php?q=3&fid='.$id.'"><b><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span></b></a></td>';
	echo '<td><a title="Delete Feedback" href="update.php?fdid='.$id.'"><b><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></b></a></td>

	</tr>';
}
echo '</table></div></div>';
}
?>
<!--feedback closed-->

<!--feedback reading portion start-->
<?php if(@$_GET['fid']) {
echo '<br />';
$id=@$_GET['fid'];
$result = mysqli_query($con,"SELECT * FROM feedback WHERE id='$id' ") or die('Error');
while($row = mysqli_fetch_array($result)) {
	$name = $row['name'];
	$subject = $row['subject'];
	$date = $row['date'];
	$date= date("d-m-Y",strtotime($date));
	$time = $row['time'];
	$feedback = $row['feedback'];
	
echo '<div class="panel"<a title="Back to Archive" href="update.php?q1=2"><b><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span></b></a><h2 style="text-align:center; margin-top:-15px;font-family: "Ubuntu", sans-serif;"><b>'.$subject.'</b></h1>';
 echo '<div class="mCustomScrollbar" data-mcs-theme="dark" style="margin-left:10px;margin-right:10px; max-height:450px; line-height:35px;padding:5px;"><span style="line-height:35px;padding:5px;">-&nbsp;<b>DATE:</b>&nbsp;'.$date.'</span>
<span style="line-height:35px;padding:5px;">&nbsp;<b>Time:</b>&nbsp;'.$time.'</span><span style="line-height:35px;padding:5px;">&nbsp;<b>By:</b>&nbsp;'.$name.'</span><br />'.$feedback.'</div></div>';}
}?>
<!--Feedback reading portion closed-->

<!--add quiz start-->
<?php
if(@$_GET['q']==4 && !(@$_GET['step']) ) {
echo ' 
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6 panel" style="background: white; border-radius: var(--radius-lg); box-shadow: var(--shadow-lg); padding: 30px;">
    <h2 class="text-center" style="font-family: var(--font-heading); color: var(--primary); margin-bottom: 20px; margin-top:0; font-weight: 700;">Enter Quiz Details</h2>
    <form class="form-horizontal" name="form" action="update.php?q=addquiz"  method="POST">
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label style="font-weight: 500; color: var(--text-main); margin-bottom: 5px;">Quiz Title</label>
  <div class="col-md-12" style="padding:0">
  <input id="name" name="name" placeholder="Enter Quiz title" class="form-control input-md" type="text" style="height: 45px;">
    
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label style="font-weight: 500; color: var(--text-main); margin-bottom: 5px;">Total Questions</label>
  <div class="col-md-12" style="padding:0">
  <input id="total" name="total" placeholder="Enter total number of questions" class="form-control input-md" type="number" style="height: 45px;">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label style="font-weight: 500; color: var(--text-main); margin-bottom: 5px;">Marks for Correct Answer</label>
  <div class="col-md-12" style="padding:0">
  <input id="right" name="right" placeholder="Enter marks on right answer" class="form-control input-md" min="0" type="number" style="height: 45px;">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label style="font-weight: 500; color: var(--text-main); margin-bottom: 5px;">Minus Marks for Wrong Answer</label>
  <div class="col-md-12" style="padding:0">
  <input id="wrong" name="wrong" placeholder="Enter minus marks on wrong answer without sign" class="form-control input-md" min="0" type="number" style="height: 45px;">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label style="font-weight: 500; color: var(--text-main); margin-bottom: 5px;">Time Limit (Minutes)</label>
  <div class="col-md-12" style="padding:0">
  <input id="time" name="time" placeholder="Enter time limit for test in minute" class="form-control input-md" min="1" type="number" style="height: 45px;">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label style="font-weight: 500; color: var(--text-main); margin-bottom: 5px;">Tag (for searching)</label>
  <div class="col-md-12" style="padding:0">
  <input id="tag" name="tag" placeholder="Enter #tag which is used for searching" class="form-control input-md" type="text" style="height: 45px;">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label style="font-weight: 500; color: var(--text-main); margin-bottom: 5px;">Description</label>
  <div class="col-md-12" style="padding:0">
  <textarea rows="4" cols="8" name="desc" class="form-control" placeholder="Write description here..." style="resize: vertical;"></textarea>  
  </div>
</div>


<div class="form-group">
  <div class="col-md-12" style="padding:0; margin-top:20px;"> 
    <input  type="submit" class="btn btn-primary sub1" value="Submit" class="btn btn-primary" style="height: 50px; font-size: 16px; width:100%;"/>
  </div>
</div>

</fieldset>
</form></div>';



}
?>
<!--add quiz end-->

<!--add quiz step2 start-->
<?php
if(@$_GET['q']==4 && (@$_GET['step'])==2 ) {
echo ' 
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6 panel" style="background: white; border-radius: var(--radius-lg); box-shadow: var(--shadow-lg); padding: 30px;">
<h2 class="text-center" style="font-family: var(--font-heading); color: var(--primary); margin-bottom: 20px; margin-top:0; font-weight: 700;">Enter Question Details</h2>
<form class="form-horizontal" name="form" action="update.php?q=addqns&n='.@$_GET['n'].'&eid='.@$_GET['eid'].'&ch=4 "  method="POST">
<fieldset>
';
 
 for($i=1;$i<=@$_GET['n'];$i++)
 {
echo '<b style="font-family:var(--font-heading);">Question number&nbsp;'.$i.'&nbsp;:</b><br />
<!-- Text input-->
<div class="form-group">
  <label style="font-weight: 500; color: var(--text-main); margin-bottom: 5px;">Question</label>
  <div class="col-md-12" style="padding:0">
  <textarea rows="3" cols="5" name="qns'.$i.'" class="form-control" placeholder="Write question number '.$i.' here..." style="resize:vertical;"></textarea>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label style="font-weight: 500; color: var(--text-main); margin-bottom: 5px;">Option A</label>
  <div class="col-md-12" style="padding:0">
  <input id="'.$i.'1" name="'.$i.'1" placeholder="Enter option a" class="form-control input-md" type="text" style="height:45px;">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label style="font-weight: 500; color: var(--text-main); margin-bottom: 5px;">Option B</label>
  <div class="col-md-12" style="padding:0">
  <input id="'.$i.'2" name="'.$i.'2" placeholder="Enter option b" class="form-control input-md" type="text" style="height:45px;">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label style="font-weight: 500; color: var(--text-main); margin-bottom: 5px;">Option C</label>
  <div class="col-md-12" style="padding:0">
  <input id="'.$i.'3" name="'.$i.'3" placeholder="Enter option c" class="form-control input-md" type="text" style="height:45px;">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label style="font-weight: 500; color: var(--text-main); margin-bottom: 5px;">Option D</label>
  <div class="col-md-12" style="padding:0">
  <input id="'.$i.'4" name="'.$i.'4" placeholder="Enter option d" class="form-control input-md" type="text" style="height:45px;">
    
  </div>
</div>
<br />
<b style="font-family:var(--font-heading);">Correct Answer</b>:<br />
<select id="ans'.$i.'" name="ans'.$i.'" placeholder="Choose correct answer " class="form-control input-md" style="height:45px;">
   <option value="a">Select answer for question '.$i.'</option>
  <option value="a">option a</option>
  <option value="b">option b</option>
  <option value="c">option c</option>
  <option value="d">option d</option> </select><br /><br />'; 
 }
    
echo '<div class="form-group">
  <div class="col-md-12" style="padding:0"> 
    <input  type="submit" class="btn btn-primary sub1" value="Submit Questions" class="btn btn-primary" style="height:50px; width:100%; font-size:16px;"/>
  </div>
</div>

</fieldset>
</form></div>';



}
?><!--add quiz step 2 end-->

<!--remove quiz-->
<?php if(@$_GET['q']==5) {

$result = mysqli_query($con,"SELECT * FROM quiz ORDER BY date DESC") or die('Error');
echo  '<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
<tr style="color:var(--secondary)"><td><b>S.N.</b></td><td><b>Topic</b></td><td><b>Total question</b></td><td><b>Marks</b></td><td><b>Time limit</b></td><td></td></tr>';
$c=1;
while($row = mysqli_fetch_array($result)) {
	$title = $row['title'];
	$total = $row['total'];
	$sahi = $row['sahi'];
    $time = $row['time'];
	$eid = $row['eid'];
	echo '<tr><td>'.$c++.'</td><td>'.$title.'</td><td>'.$total.'</td><td>'.$sahi*$total.'</td><td>'.$time.'&nbsp;min</td>
	<td><b><a href="update.php?q=rmquiz&eid='.$eid.'" class="pull-right btn sub1" style="margin:0px;background:#ff4d4d"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Remove</b></span></a></b></td></tr>';
}
$c=0;
echo '</table></div></div>';

}
?>


</div><!--container closed-->
</div></div>
</body>
</html>
