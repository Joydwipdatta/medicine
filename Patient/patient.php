<?php
include "connection.php";
session_start();
include "psession.php";

?>


<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Medicine | patient</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;500&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" href="style3.css">
        <link rel="stylesheet" href="queries.css">
    </head>
    <body>
        <!-- nav bar-->
        <header class="navbar">
            <div class="logo">
                <a href="patient.php"><h2>Medicine</h2></a>
            </div>
            <div class="navmanu">
                <ul>

                    <a href="doctorlist.php"><li><ion-icon name="search-outline" class="iconp"></ion-icon>Find Doctor</li></a>
                    <a href="pprofile.php"><li><ion-icon name="person-circle-outline" class="iconp"></ion-icon>Profile</li></a>
                    <a href="logout.php"><li><ion-icon name="log-out-outline" class="iconp"></ion-icon>Logout</li></a>
                </ul>
            </div>
        </header>
        
        <section class="topbar">
            <div class="search">

          <?php
           if(isset($_POST['submit'])){
             $speciality=$_POST['speciality'];

             $query="SELECT * FROM `doctor` where dspeciality LIKE '%$search%' ";
             $result=mysqli_query($connection,$query);
              if($result){
                header('location:doctorlist.php');
              }
              else{
                echo "doctor not avilable";
              }

           }
          
          
          
          
          ?>
                <form action="" method="POST">
                    <span><ion-icon name="search-outline"></ion-icon></span>
                    <select id="speciality" name="speciality">
                        <option value="search">  Search speciality wise doctor </option>
                        <option value="dentist">Dentist</option>
                        <option value="Gynecologist">Gynecologist/obstetrician</option>
                        <option value="physician">General physician</option>
                        <option value="Dermatology">Dermatology</option>
                        <option value="ENT">Ear-Nose-Throat(ENT)</option>
                        <option value="Homoeopath">Homoeopath</option>
                        <option value="Ayurveda">Ayurveda</option>
                    
                    </select>
                
                    <input type="submit" name="submit"  value="Search">
                </form>            
            </div>
            <div class="searchcon">
                <p>Fed up of endless wait?</p>
                <h4>Look for Doctor</h4>
            </div>
        </section>


        <!-- Hero section-->
        <section class="hero">
            <div class="banner">
                <div class="leftbanner">
                    <h3>Medicine</h3>
                    <p>Choose the experts in end to end healthcare</p>
                    <h3>You are in safe hand</h3>
                    <button>Know more</button>

                </div>
                <div class="rightbanner">
                    <img src="img/hero-img.png" alt="hero_image">
                </div>
            </div>
        </section>

        <!-- service section-->
        <section class="service">
            <div class="services">
                <a href="#"><div class="servicebox">
                    <div class="serviceimg">
                        <img src="img/video-consult.jpg" alt="video consultation">
                    </div>
                    <div class="servicecon">
                        <h3>Video Consultation</h3>
                        <p>Instant Connect</p>
                    </div>
                </div></a>
                <a href="finddoc.html"><div class="servicebox">
                    <div class="serviceimg">
                        <img src="img/doc 1.jpg" alt="Find Doctors">
                    </div>
                    <div class="servicecon">
                        <h3>Find Doctors</h3>
                        <p>Confirmed appointments</p>
                    </div>
                </div></a>
                <a href="#"><div class="servicebox">
                    <div class="serviceimg">
                        <img src="img/med.jpg" alt="Medicines">
                    </div>
                    <div class="servicecon">
                        <h3>Medicines</h3>
                        <p>At your doorstep</p>
                    </div>
                </div></a>
                <a href="#"><div class="servicebox">
                    <div class="serviceimg">
                        <img src="img/leb.jpg" alt="Lab Tests">
                    </div>
                    <div class="servicecon">
                        <h3>Lab Tests</h3>
                        <p>Pickup at your home</p>
                    </div>
                </div></a>
                <a href=""> <div class="servicebox">
                    <div class="serviceimg">
                        <img src="img/ser.jpg" alt="Surgeries">
                    </div>
                    <div class="servicecon">
                        <h3>Surgeries</h3>
                        <p>Safe and trusted</p>
                    </div>
                </div>  </a>   
            </div>
        </section>

        <!-- health concern section-->

        <section class="health">

            <div class="health-top">
                <div class="health-top-left">
                    <h1>Consult top doctors online for any health concern</h1>
                    <p>Private online consultations with verified doctors in all specialists</p>
                </div>
                <div class="health-top-right">
                    <button>View All Specialitied</button>
                </div>
            </div>
            <div class="health-bottom">
                <div class="bottombox">
                    <div class="bottomimg">
                        <img src="img/stomach.png" alt="Stomach issue">
                    </div>
                    <div class="bottomcon">
                        <h5>Stomach & digestion</h5>
                        <h6>COUNSULT NOW</h6>
                    </div>
                </div>
                <div class="bottombox">
                    <div class="bottomimg">
                        <img src="img/brain.jpg" alt="Psychiatry">
                    </div>
                    <div class="bottomcon">
                        <h5>Psychiatry</h5>
                        <h6>COUNSULT NOW</h6>
                    </div>
                </div>
                <div class="bottombox">
                    <div class="bottomimg">
                        <img src="img/icon-g03e9bd790_1280.png" alt="Urology">
                    </div>
                    <div class="bottomcon">
                        <h5>Urology</h5>
                        <h6>COUNSULT NOW</h6>
                    </div>
                </div>
                <div class="bottombox">
                    <div class="bottomimg">
                        <img src="img/covid-5247929_1280.png" alt="Peadiatrics">
                    </div>
                    <div class="bottomcon">
                        <h5>Peadiatrics</h5>
                        <h6>COUNSULT NOW</h6>
                    </div>
                </div>
                <div class="bottombox">
                    <div class="bottomimg">
                        <img src="img/injection-g5ce9dd7f5_1280.png" alt="Dermatology">
                    </div>
                    <div class="bottomcon">
                        <h5>Dermatology</h5>
                        <h6>COUNSULT NOW</h6>
                    </div>
                </div>
                <div class="bottombox">
                    <div class="bottomimg">
                        <img src="img/analysis-g00fa89110_1920.jpg" alt="General physician">
                    </div>
                    <div class="bottomcon">
                        <h5>General physician</h5>
                        <h6>COUNSULT NOW</h6>
                    </div>
                </div>
            </div>
        </section>

        <!-- appointment section-->
        
        <section class="appointment">
            <div class="appointmenttop">
                <h1>Book an appointment for an in-clinic consultation</h1>
                <p>Find experienced doctors across all specialties</p>
            </div>

            <div class="appointmentbottom">

                <a href="doctorlist.html"><div class="appointmentbox">
                    <div class="appointmentimg">
                        <img src="img/dentist-428646_1920.jpg" alt="dentist">
                    </div>
                    <div class="appointmentcon">
                        <h5>Dentist</h5>
                        <p>Teething troubles? Schedule a dental checkup</p>
                    </div>
                </div></a>
                <div class="appointmentbox">
                    <div class="appointmentimg">
                        <img src="img/diet-695723_1920.jpg" alt="Dietitian Nutritation">
                    </div>
                    <div class="appointmentcon">
                        <h5>Dietitian/Nutritation</h5>
                        <p>Get guidance on eating right,weight management and sport nutritation </p>
                    </div>
                </div>
                <div class="appointmentbox">
                    <div class="appointmentimg">
                        <img src="img/doc 2.jpg" alt="physician">
                    </div>
                    <div class="appointmentcon">
                        <h5>General physician</h5>
                        <p>Find the right family doctor in your neighborhood</p>
                    </div>
                </div>
                <div class="appointmentbox">
                    <div class="appointmentimg">
                        <img src="img/examination-2458540_1920.jpg" alt="Peadiatrician">
                    </div>
                    <div class="appointmentcon">
                        <h5>Peadiatrician</h5>
                        <p>Child specialists and doctors for infant</p>
                    </div>
                </div>
            </div>
            
        </section>
        

        <!-- articles section-->

        <section class="article" id="article">
            <div class="articles">
                <div class="articletitle">
                    <div class="articleleftcon">
                        <h1>Read top articles from health experts</h1>
                        <p>Health articles that keep you informed about good health practices and achieve 
                            your goals.</p>
                        <button>See all articles</button>   
                    </div>
                </div>
                <div class="articlebox">
                    <div class="articleimg">
                        <img src="img/vaccination-1215279_1920.jpg" alt="CORONAVIRUS">
                    </div>
                    <div class="articlecon">
                        <h6>CORONAVIRUS</h6>
                        <h4>12 Coronavirus Myths and Facts That You Should Be Aware Of</h4>
                        <p>DR. Diana Borgio</p>
                    </div>
                </div>
                <div class="articlebox">
                    <div class="articleimg">
                        <img src="img/breakfast-1804457_1920.jpg" alt="VITAMINS & SUPPLEMENTS">
                    </div>
                    <div class="articlecon">
                        <h6>VITAMINS & SUPPLEMENTS</h6>
                        <h4>Eating Right to Build Immunity Against Cold and Viral Infections</h4>
                        <p>DR. Diana Borgio</p>
                    </div>
                </div>

            </div>
        </section>

        <!-- testimonial section -->

        <section class="testimonial">

            <div class="testimonialcon">
                <h1>What our users have to say</h1>
            </div>
            <div class="veiwbox">

                <div id="testimonials">
                    <div class="user">
                        <img src="img/happy-g3df13d974_1280.jpg" alt="user1">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                            when an unknown printer took a galley of type and scrambled it to make a type 
                            specimen book. 
                        </p>
                        <h5>Steve McCurry</h5>
                    </div>

                    <div class="user space">
                        <img src="img/woman-g2d5b2542b_1280.jpg" alt="user2">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                            when an unknown printer took a galley of type and scrambled it to make a type 
                            specimen book. It has survived not only five centuries, but also the leap into 
                            electronic typesetting, 
                        </p>
                        <h5>Riley Olie</h5>
                    </div>

                    <div class="user">
                        <img src="img/portrait-gbcb703dd7_1920.jpg" alt="user3">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                            when an unknown printer took a galley of type and scrambled it to make a type 
                            specimen book.
                        </p>
                        <h5>Jos Kean</h5>
                    </div>
                    
                </div>
                <div class="controls">
                    <span id="control1"></span>
                    <span id="control2" class="active"></span>
                    <span id="control3"></span>
                </div>
            </div>

        </section>

        <!-- Download app  section -->

        <section class="appdownload">
            <div class="app">
                <div class="appimg">
                    <img src="img/Untitled design (1).png" alt="app image">
                </div>
                <div class="appcon">
                    <h1>Download the app</h1>
                    <p>Access video consultation with India’s top doctors on the Practo app. Connect with 
                        doctors online, available 24/7, from the comfort of your home.</p>
                    <h5>Get the link to download the app</h5>
                    <form action="" class="form">
                        <span>+91</span>
                        <input type="number" placeholder="Enter phone number">
                        <input type="submit" value="Send SMS">
                    </form>
                    <div class="appbuttons">
                        <img src="img/google_play.webp" alt="google_play">
                        <img src="img/apple_store.webp" alt="apple_store">
                    </div>
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
                        <li><a href="#article"> Read health article</a></li>
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


        <!-- javascript -->
        <script>

            var testimonials = document.getElementById('testimonials');
            var control1 = document.getElementById('control1');
            var control2 = document.getElementById('control2');
            var control3 = document.getElementById('control3');

            control1.onclick=function(){
                testimonials.style.transform = "translateX(870px)";
                control1.classList.add("active");
                control2.classList.remove("active");
                control3.classList.remove("active");
            }

            control2.onclick=function(){
                testimonials.style.transform = "translateX(0px)";
                control1.classList.remove("active");
                control2.classList.add("active");
                control3.classList.remove("active");
            }

            control3.onclick=function(){
                testimonials.style.transform = "translateX(-870px)";
                control1.classList.remove("active");
                control2.classList.remove("active");
                control3.classList.add("active");
            }

        </script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>                                                    
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    

    </body>
</html>