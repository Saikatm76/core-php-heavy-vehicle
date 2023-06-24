<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Heavy Vehicle Management System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/rangeslider.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar py-2 bg-white" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-11 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index.php" class="text-black h1 mb-0">@Finds_Heavy_Vehicles </a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active"><a href="index.php"><span>Home</span></a></li>
                <li><a href="about.php"><span>About</span></a></li>
                <li class="has-children">
                  <a href="homepage.php"><span>Agency LogIn</span></a>
                  <ul class="dropdown">
                    <li><a href="registration.php">Agency Registration</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>

  

    <div class="site-blocks-cover overlay" style="background-image: url(https://avatars.mds.yandex.net/get-pdb/911433/8a7ab980-7cdc-4f74-919d-ad31c619c37f/s1200);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div>
    <div class="col-md-10">
         

<link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script>
function check()
{

var email = document.getElementById("email").value;
var fname = document.getElementById("fname").value;
var lname = document.getElementById("lname").value;
var mobile = document.getElementById("mobile").value;
var rd1 = document.getElementById("male");
var rd2 = document.getElementById("female");
var chkpass = document.getElementById("chkpass").value;
var dob = document.getElementById("dob").value;
var image = document.getElementById("file").value;

var allowed = /^[A-Za-z\s]+$/;
var mobilepattern = /^[6-9][0-9]{9}$/;
var extention = image.substring(image.lastIndexOf('.') + 1).toLowerCase();


if (email.trim() == ""){
		document.getElementById("error").innerHTML="**Please Fill Your Email Field";
		return false;
		}
		else if (email.indexOf('@')<=0) {
		document.getElementById("error").innerHTML="**invalid @ position";
		return false;
		}
		else if (email.charAt(email.length-4)!='.') {
		document.getElementById("error").innerHTML="**invalid Email Id";
		return false;
		}
		else if (fname.trim() == "") {
		document.getElementById("error").innerHTML="**Please enter the All Field.";
		return false;
	    }
		else if(fname.length <3 || fname.length >30) {
		document.getElementById("error").innerHTML="**Owner Name Must have 3 to 30 Character.";
		return false;
		}
		else if(!fname.match(allowed)){
		document.getElementById("error").innerHTML="**Only Alphabets are Allowed in Owner Name.";
		return false;
		}
		else if (lname.trim() == "") {
		document.getElementById("error").innerHTML="**Please enter the Agency Name.";
		return false;
	    }
		else if(lname.length <3 || lname.length >30) {
		document.getElementById("error").innerHTML="**Agency Name Must have 3 to 30 Character.";
		return false;
		}
		else if(!lname.match(allowed)){
		document.getElementById("error").innerHTML="**Only Alphabets are Allowed in Agency Name.";
		return false;
		}
		else if (mobile.trim() == ""){
		document.getElementById("error").innerHTML="**Enter Your Mobile Number.";
		return false;
	    }
		else if (!mobile.match(mobilepattern)){
		document.getElementById("error").innerHTML="**Invalid Mobile Number.";
		return false;
		}
		else if (rd1.checked==false && rd2.checked==false){
		document.getElementById("error").innerHTML="**Please Select Your Gender";
		return false;
		}
		else if (dob.trim() == "") {
		document.getElementById("error").innerHTML="**Please Enter place .";
		return false;
	    }
		else if (chkpass.trim() == "") {
		document.getElementById("error").innerHTML="**please enter license number.";
		return false;
	    }
		else if (chkpass.length <3 || chkpass.length >30) {
		document.getElementById("error").innerHTML="**license number must have 3 character.";
		return false;
	    }
		else if(image == ""){
		document.getElementById("error").innerHTML="Upload an Image.";
		return false;
	    }
		else if(extention == "jpg" || extention == "jpeg" || extention == "png"){
		document.getElementById("error").innerHTML="";
		return true;
	    }
		else{
		document.getElementById("error").innerHTML="Only jpg and jpeg and png image allowed.";
		return false;
	    }
}
</script>
<!------ Include the above in your HEAD tag ---------->

   
        <div id="signupbox" style=" margin-top:25px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Agency Registration</div>
                                                   </div>  
                        <div class="panel-body" >
                            <form method='post' action='signin.php' id="signupform" class="form-horizontal" role="form" onsubmit="return check()" enctype="multipart/form-data">
                                
                                <div id="error" class="alert alert-danger" >
                                    <span></span>
                                </div>
                                    
                                
                                  
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email:</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email" placeholder="Email Address" id="email">
                                    </div>
                                </div>
								
								<div class="form-group">
                                    <label  class="col-md-3 control-label">Owner Name:</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="ownername" placeholder="Owner Name" id="fname">
                                    </div>
                                </div>
								
								<div class="form-group">
                                    <label class="col-md-3 control-label">Agency Name:</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="agency" placeholder="Agency Name" id="lname">
                                    </div>
                                </div>
								
								<div class="form-group">
                                    <label for="mobile" class="col-md-3 control-label">Mobile:</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="mobile" placeholder="mobile" id="mobile">
									</div>
                                </div>
								 
							    <div class="form-group">
                                   <label for="gender" class="col-md-3 control-label">Gender:</label>
                                    <div class="col-md-9">
									   <div class="form-control">
                                        <input type="radio" name="gender" id="male" value="male">Male
										<span style="margin-left:6px;"><input type="radio" name="gender" id="female" value="female">Female</span>
									   </div>
                                    </div>
						       </div>
							   
							   <div class="form-group">
                                    <label class="col-md-3 control-label">Place:</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="place" id="dob" placeholder="Place">
                                    </div>
                                </div>
							   
							  
								
								<div class="form-group">
                                    <label class="col-md-3 control-label">License:</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="owner" placeholder="License Number" id="chkpass">
                                    </div>
                                </div>
					
								 <div class="form-group">
                                    <label for="file" class="col-md-3 control-label">Photo:</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="file" placeholder="" id="file">
                                    </div>
                                </div>

                                    
                                    
               

                                <div class="form-group">
							        	<div class="col-md-offset-3 col-md-9">
                                    <!-- Button -->                                        
                                        <button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button>
                       
                                    </div>
                                </div>
                               
                 
                                
                            </form>
                         </div>
                    </div>

               
               
                
         </div> 
    </div>
    
            
          

        </div>
      </div>
    </div>
	</div>



    
              <div class="col-md-3">
                <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>
 
          
        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/rangeslider.min.js"></script>
  

  <script src="js/typed.js"></script>
            <script>
            var typed = new Typed('.typed-words', {
            strings: ["Vehicles"," Carrier"," Transporter"],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: true,
            showCursor: true
            });
            </script>

  <script src="js/main.js"></script>
    
  </body>
</html>