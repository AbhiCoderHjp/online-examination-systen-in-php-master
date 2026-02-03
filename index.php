<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Project Worlds || TEST YOUR SKILL </title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/style.css"> <!-- New Style Overrides -->
    
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"  type="text/javascript"></script>
    <script src="js/theme.js" type="text/javascript"></script>

    <?php if(@$_GET['w'])
    {echo'<script>alert("'.@$_GET['w'].'");</script>';}
    ?>
    <script>
    function validateForm() {var y = document.forms["form"]["name"].value;	var letters = /^[A-Za-z]+$/;if (y == null || y == "") {alert("Name must be filled out.");return false;}var z =document.forms["form"]["college"].value;if (z == null || z == "") {alert("college must be filled out.");return false;}var x = document.forms["form"]["email"].value;var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {alert("Not a valid e-mail address.");return false;}var a = document.forms["form"]["password"].value;if(a == null || a == ""){alert("Password must be filled out");return false;}if(a.length<5 || a.length>25){alert("Passwords must be 5 to 25 characters long.");return false;}
    var b = document.forms["form"]["cpassword"].value;if (a!=b){alert("Passwords must match.");return false;}}
    </script>


</head>

<body>
    
    <!-- Header -->
    <div class="header" style="background: transparent !important; box-shadow: none; height: auto; padding-top: 20px;">
        <div class="container" style="background: rgba(255, 255, 255, 0.9); backdrop-filter: blur(12px); border-radius: 50px; padding: 10px 30px; border: 1px solid rgba(255,255,255,0.5); box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);">
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <div>
                    <span class="logo">TestYourSkill</span>
                </div>
                <div>
                    <!-- Theme Toggle -->
                    <a href="#" id="theme-toggle" class="btn" style="background: transparent; border: none; font-size: 20px; color: var(--text-main); margin-right: 15px;">
                        <span id="theme-toggle-icon" class="glyphicon glyphicon-moon"></span>
                    </a>

                    <a href="#" class="btn sub1" data-toggle="modal" data-target="#myModal" style="border-radius: 30px; padding: 10px 25px; font-weight: 600; box-shadow: 0 4px 15px rgba(99, 102, 241, 0.3);">
                        <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;
                        Sign In
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Sign In Modal -->
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
                    <div class="form-group">
                      <div class="col-md-12">
                        <label style="font-weight: 500; color: var(--text-main); margin-bottom: 5px;">Email</label>
                        <input id="email" name="email" placeholder="Enter your email" class="form-control input-md" type="email">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-12">
                        <label style="font-weight: 500; color: var(--text-main); margin-bottom: 5px;">Password</label>
                        <input id="password" name="password" placeholder="Enter your password" class="form-control input-md" type="password">
                      </div>
                    </div>
                </fieldset>
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary sub1" style="margin:0 !important">Log in</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Main Content / Hero -->
    <div class="bg1">
        <div class="container">
            <div class="row display-flex" style="display: flex; flex-wrap: wrap; align-items: center;">
                
                <!-- Hero Text / Illustration Placeholder -->
                <div class="col-md-7">
                    <span style="color: var(--primary); font-weight: 600; text-transform: uppercase; letter-spacing: 1px; font-size: 14px; margin-bottom: 10px; display: block;">Online Testing Platform</span>
                    <h1 style="font-size: 56px; font-weight: 800; color: var(--text-main); margin-bottom: 24px; line-height: 1.1; letter-spacing: -1px;">
                        Master Your Skills <br><span style="background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Online Today.</span>
                    </h1>
                    <p style="font-size: 20px; color: var(--text-muted); margin-bottom: 40px; max-width: 90%; line-height: 1.6;">
                        Join thousands of students and take your knowledge to the next level. Participate in premium online exams, track your detailed progress, and achieve your career goals.
                    </p>
                    <div style="display: flex; gap: 15px;">
                        <a href="#myModal" data-toggle="modal" class="btn sub1" style="font-size: 18px; padding: 15px 35px; border-radius: 50px;">Get Started</a>
                        <a href="#developers" data-toggle="modal" class="btn" style="background: var(--surface); border: 2px solid var(--primary) !important; color: var(--primary); font-size: 18px; padding: 15px 35px; border-radius: 50px; font-weight: 600;">Learn More</a>
                    </div>
                </div>

                <!-- Sign Up Form -->
                <div class="col-md-4 col-md-offset-1 panel" style="background: white; border-radius: var(--radius-lg); box-shadow: var(--shadow-lg); padding: 30px;">
                    <h2 class="text-center" style="font-family: var(--font-heading); color: var(--primary); margin-bottom: 20px; font-weight: 700;">Sign Up</h2>
                    <form class="form-horizontal" name="form" action="sign.php?q=account.php" onSubmit="return validateForm()" method="POST">
                        <fieldset>
                            
                            <div class="form-group">
                              <label style="font-weight: 500; color: var(--text-main); margin-bottom: 5px;">Full Name</label>
                              <div class="col-md-12" style="padding:0">
                                <input id="name" name="name" placeholder="Enter your name" class="form-control input-md" type="text" style="height: 45px;">
                              </div>
                            </div>

                            <div class="form-group">
                              <label style="font-weight: 500; color: var(--text-main); margin-bottom: 5px;">Gender</label>
                              <div class="col-md-12" style="padding:0">
                                <select id="gender" name="gender" class="form-control input-md" style="height: 45px;">
                                   <option value="Male">Select Gender</option>
                                  <option value="M">Male</option>
                                  <option value="F">Female</option> 
                                </select>
                              </div>
                            </div>

                            <div class="form-group">
                              <label style="font-weight: 500; color: var(--text-main); margin-bottom: 5px;">College</label>
                              <div class="col-md-12" style="padding:0">
                                <input id="college" name="college" placeholder="Enter your college name" class="form-control input-md" type="text" style="height: 45px;">
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label style="font-weight: 500; color: var(--text-main); margin-bottom: 5px;">Email</label>
                              <div class="col-md-12" style="padding:0">
                                <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email" style="height: 45px;">
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label style="font-weight: 500; color: var(--text-main); margin-bottom: 5px;">Mobile</label>
                              <div class="col-md-12" style="padding:0">
                                  <input id="mob" name="mob" placeholder="Enter your mobile number" class="form-control input-md" type="number" style="height: 45px;">
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label style="font-weight: 500; color: var(--text-main); margin-bottom: 5px;">Password</label>
                              <div class="col-md-12" style="padding:0">
                                <input id="password" name="password" placeholder="Enter your password" class="form-control input-md" type="password" style="height: 45px;">
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label style="font-weight: 500; color: var(--text-main); margin-bottom: 5px;">Confirm Password</label>
                              <div class="col-md-12" style="padding:0">
                                <input id="cpassword" name="cpassword" placeholder="Confirm your password" class="form-control input-md" type="password" style="height: 45px;">
                              </div>
                            </div>
                            
                            <?php if(@$_GET['q7'])
                            { echo'<p style="color:red;font-size:15px;">'.@$_GET['q7'];}?>
                            
                            <div class="form-group">
                              <div class="col-md-12" style="padding:0; margin-top: 10px;"> 
                                <input type="submit" class="sub" value="Create Account" class="btn btn-primary" style="height: 50px; font-size: 16px;"/>
                              </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 box">
                    <a href="http://www.projectworlds/online-examination" target="_blank">About us</a>
                </div>
                <div class="col-md-3 box">
                    <a href="#" data-toggle="modal" data-target="#login">Admin Login</a>
                </div>
                <div class="col-md-3 box">
                    <a href="#" data-toggle="modal" data-target="#developers">Developers</a>
                </div>
                <div class="col-md-3 box">
                    <a href="feedback.php" target="_blank">Feedback</a>
                </div>
            </div>
        </div>
    </div>

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
        </div>
      </div>
    </div>

    <!--Modal for admin login-->
    <div class="modal fade" id="login">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title"><span style="color:var(--primary);font-family:'typo' ">LOGIN</span></h4>
          </div>
          <div class="modal-body title1">
                <div class="col-md-12">
                    <form role="form" method="post" action="admin.php?q=index.php">
                        <div class="form-group">
                            <label style="font-weight: 500; color: var(--text-main); margin-bottom: 5px;">Username</label>
                            <input type="text" name="uname" maxlength="20"  placeholder="Admin Username" class="form-control"/> 
                        </div>
                        <div class="form-group">
                            <label style="font-weight: 500; color: var(--text-main); margin-bottom: 5px;">Password</label>
                            <input type="password" name="password" maxlength="15" placeholder="Password" class="form-control"/>
                        </div>
                        <div class="form-group" align="center" style="margin-top: 20px;">
                            <input type="submit" name="login" value="Login" class="btn btn-primary sub1" style="width: 100%; height: 50px; font-size: 16px;" />
                        </div>
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

</body>
</html>
