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
            <h1 class="mb-0 site-logo"><a href="index.php" class="text-black h1 mb-0">@Heavy_Vehicles_Finds </a></h1>
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
         


<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'saikat');
$keyword=$_POST['keyword'];
$keyword1=$_POST['keyword1'];
$sql="SELECT * FROM vehicleuser WHERE place='$keyword' AND vehicletype='$keyword1'";
$result=$con->query($sql);
if($result->num_rows > 0)
{
	?>
	<table  border="2" bgcolor=FFF8DC>
	<tr>
	<td>
	<table border="2">
<tr style="font-family: tahoma,geneva,sans-serif;color: blue;">
<th>agency</th>
<th>owner</th>
<th>place</th>
<th>VEHICLE TYPE</th>
<th>VEHICLE NUMBER</th>
<th>DRIVER NAME</th>
<th>AVAILABLE FROM</th>
<th>AVAILABLE UPTO</th>
<th>AS OF NOW</th>
<th>Book</th>
</tr>
	<?php
while($row = $result->fetch_assoc()){
echo "<tr><td>". $row["agency"] ."</td>
<td>". $row["owner"] ."</td>
<td>". $row["place"] ."</td>
<td>". $row["vehicletype"] ."</td>
<td>". $row["vlicense"] ."</td>
<td>". $row["drivername"] ."</td>
<td>". $row["availablefrom"] ."</td>
<td>". $row["availableupto"] ."</td>
<td>". $row["asofnow"] ."</td>
<td><button><b><a href=userregistration.php>Enter</a></b></button></td></tr>";
}
}
else{
echo "<b>No Result...<a href='index.php'>try again</a></b>";
}
$con->close();
?>
</table>
</td>
</tr>
</table>		 
            
          

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