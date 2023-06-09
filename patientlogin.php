<?php 
include "connection.php";
?>

<?php session_start(); ?>
<?php
if(!empty($_POST['submit'])){
    $puid=$_POST['uid'] ;
    $ppassword= $_POST['password'];


    $query="SELECT * FROM  patient WHERE puid='$puid' and ppassword='$ppassword'";
    $result=mysqli_query($connection,$query);
    $count=mysqli_num_rows($result);
    if($count >0){
      $_SESSION['puid']=$puid;
      header('location:/medicine/patient/patient.php');
    } else{
      echo "Login not successful";
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Medicine -- Patien Login</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <!-- nav bar-->
        <header class="navbar">
            <div class="logo">
                <h2><a href="index.php">Medicine</a></h2>
            </div>
            <div class="navmanu">
                <ul>
                    <a href="#"><li><ion-icon name="search-outline" class="iconp"></ion-icon>Find Doctor</li></a>
                    <li><button> <a href="patientlogin.php" class="navlink">Login / Signup</a></button></li>
                </ul>
            </div>
        </header>

        <!-- main section-->
        <div class="logsign">
            <a href="#" class="linkactive">Login</a>
            <a href="patientregister.php">Register</a>
        </div>
        <section class="drbody">
            
            <div class="drhead">
                <div class="heading">
                    <h1>Patient Login</h1>
                </div>
                <div class="pr">
                    <h4>Login as Doctor <a href="doctorlogin.php">Login Here</a></h4>
                </div>
            </div>
            <div class="dr">
                <div class="drimg plmg">
                    
                    <img src="img/medical-5840878.png" alt="">
                </div>
                <div class="drform">
                    
                    <form action="" method="POST" class="drfr">
                        
                        <label for="userid">User ID</label>
                        <input type="text" name="uid" id="" placeholder="Enter User ID" required>
                        <label for="password">Password</label>
                        <input type="password" name="password" id="myInput" placeholder="Enter password" required>
		            	<input type="checkbox" onclick="myFunction()" class="passhow"><span class="showpassword">Show Password</span>
                        
                        <input type="submit" name="submit" value="Login" class="logbutton">
                    </form>
                </div>
            </div>
        </section>


        
        <!-- footer -->

        <footer class="footer">
            <div class="footcontent">
                <div class="footcon">
                    
                    <ul>
                        <li class="foothead">Medicine</li>
                        <li>About</li>
                        <li>Blog</li>
                        <li>Careers</li>
                        <li>Press</li>
                        <li>Contact Us</li>
                    </ul>
                </div>
                <div class="footcon">
                    
                    <ul>
                        <li class="foothead">For patients</li>
                        <li>Search for doctors</li>
                        <li>Search for Clinics</li>
                        <li>Health app</li>
                        <li>About medicines</li>
                        <li>Read health article</li>
                    </ul>
                </div>
                <div class="footcon">
                    
                    <ul>
                        <li class="foothead">For doctors</li>
                        <li>Profile</li>
                        <li>For Clinics</li>
                        <li>Medicine pro</li>
                        
                    </ul>
                </div>
                <div class="footcon">
                    
                    <ul>
                        <li class="foothead">For hospitals</li>
                        <li>Insta by Medicine</li>
                        <li>Profile</li>
                        <li>Medicine Reach</li>
                        <li>Medicine Drive</li>
                        <li>Wellness Plans</li>
                    </ul>
                </div>
                <div class="footcon">
                    
                    <ul>
                        <li class="foothead">More</li>
                        <li>Help</li>
                        <li>Developers</li>
                        <li>Privacy Policy</li>
                        <li>Terms & Conditions</li>
                        <li>Healthcare Directory</li>
                    </ul>
                </div>
                <div class="footcon">
                    
                    <ul>
                        <li class="foothead">Social</li>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Linkeden</li>
                        <li>Youtube</li>
                        <li>Github</li>
                    </ul>
                </div>
            </div>
            <div class="footbottom">
                <h1>Medicine</h1>
                <p>Copyright © 2017, Medicine. All rights reserved.</p>
            </div>
        </footer>
	    <script>
            function myFunction() {
              var x = document.getElementById("myInput");
              if (x.type === "password") {
                x.type = "text";
              } else {
                x.type = "password";
              }
            }
        </script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>                                                    
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>