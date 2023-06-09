<?php 
include "connection.php";

?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Medicine | patient | Find doctor</title>
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
       
        <section class="finddoc">
            <div class="background">
                <div class="backcon">
                    <h1>Your home for health</h1>
                    <h4>Find and Book</h4>
                    <form action="">
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
                        
                        <input type="submit" value="Search">
                    </form>
                </div>
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

   
        

        <!-- articles section-->

        <section class="article findoc-article">
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


        <!-- javascript -->
        
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>                                                    
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    

    </body>
</html>