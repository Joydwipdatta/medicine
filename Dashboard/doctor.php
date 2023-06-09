<?php  include "connection.php"; ?>
 <?php session_start();
  include "dsession.php";
 ?>
 <?php

 ?>



<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="bar">
        <div class="sidebar">
            <div class="profile">
                
                <img src="images/<?php $result['dimage']?>">
                <h4>Dr.<?php  echo $result['dname']?></h4>
                <p><?php  echo $result['dspeciality']?></p>
            </div>
            <div class="sidemenu">
                <ul>
                    <li class="active"><ion-icon name="apps-outline" class="icond"></ion-icon>Dashboard</li>
                    <a href="slot.php"><li><ion-icon name="calendar-outline" class="icond"></ion-icon>Slots</li></a>
                    <a href="appointment.php"><li> <ion-icon name="people-outline" class="icond"></ion-icon> Appointments</li></a>
                    <a href="history.php"><li><ion-icon name="receipt-outline" class="icond"></ion-icon>History</li></a>
                </ul>
                <ul class="bottommenu">
                    <a href="logout.php"><li><ion-icon name="log-out-outline" class="icond"></ion-icon>Logout</li></a>
                </ul>

            </div>
        </div>
        <div class="mainbar">
            <div class="topmain">
                <div class="mainh">
                    <h1>Dashboard</h1>
                </div>
                <div class="mainmenu">
                    <ul>

                        <a href="#"><li><ion-icon name="help-circle-outline" class="icond"></ion-icon>Help</li></a>
                        <a href="#"><li><ion-icon name="settings-outline" class="icond"></ion-icon>Setting</li></a>
                        <a href="dprofile.php"><li><ion-icon name="person-circle-outline" class="icond"></ion-icon>Profile</li></a>
                    </ul>
                </div>
            </div>
            
            <div class="mainbody">
                <div class="counter">
                    <div class="countbox">
                        <div class="counticon">
                            <ion-icon name="people-outline" class="counti counti1"></ion-icon>
                        </div>
                        <div class="countcon">
                            <p>Patients</p>
                            <h1>666</h1>
                        </div>   
                    </div>

                    <div class="countbox">
                        <div class="counticon">
                            <ion-icon name="newspaper-outline" class="counti counti2"></ion-icon>
                        </div>
                        <div class="countcon">
                            <p>Prescriptions</p>
                            <h1>518</h1>
                        </div>   
                    </div>

                    
                    
                    <div class="countbox">
                        <div class="counticon">
                            <ion-icon name="heart-outline" class="counti counti4"></ion-icon>
                        </div>
                        <div class="countcon">
                            <p>Treatments</p>
                            <h1>402</h1>
                        </div>   
                    </div>
                </div>

                <div class="appointmentslot">
                    <div class="appointment">
                        <div class="appointmenthead">
                            <h4>Today Appointments</h4>
                            <span><a href="appointment.php">See all</a></span>
                        </div>

                        <div class="appointmentslotbox">
                            <div class="appointmentbox">
                               <div class="patient">
                                    <div class="patientimg">
                                        <img src="img/happy-g3df13d974_1280.jpg" alt="">
                                    </div>
                                    <div class="patientdoc">
                                        <h4>Even Maccoy</h4>
                                        <p>Medical Checkup</p>
                                    </div>
                                    <div class="time">
                                        <h2>12:00</h2>
                                    </div>
                               </div>

                               <div class="patient">
                                    <div class="patientimg">
                                        <img src="img/portrait-3353699_1920.jpg" alt="">
                                    </div>
                                    <div class="patientdoc">
                                        <h4>Stive Henry</h4>
                                        <p>Medical Checkup</p>
                                     </div>
                                    <div class="time">
                                        <h2>12:30</h2>
                                    </div>
                                </div>

                                <div class="patient">
                                    <div class="patientimg">
                                        <img src="img/woman-gde38d1257_1280.jpg" alt="">
                                    </div>
                                    <div class="patientdoc">
                                        <h4>Beth Maccoy</h4>
                                        <p>Asthma, Hypertension</p>
                                     </div>
                                    <div class="time">
                                        <h2>11:30</h2>
                                    </div>
                                </div>

                                <div class="patient">
                                    <div class="patientimg">
                                        <img src="img/portrait-gbcb703dd7_1920.jpg" alt="">
                                    </div>
                                    <div class="patientdoc">
                                        <h4>Jhon Spectrup</h4>
                                        <p>Medical Checkup</p>
                                     </div>
                                    <div class="time">
                                        <h2>14:50</h2>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
     
                    <div class="slot">
                        <h4>My Slots</h4>
                        <?php
                        $_SESSION['duid'];
                        $duid=$_SESSION['duid'];

                       $query="SELECT * FROM `slots` WHERE duid='$duid'  ";    
                        $result=mysqli_query($connection,$query);
                        if($result){
                        while( $row=mysqli_fetch_assoc($result)){
                             $day=$row['day'];
                             $slot1=$row['slot1'];
                             $slot2=$row['slot2'];
                             $slot3=$row['slot3'];
                             $slot4=$row['slot4']; 
                             $slot5=$row['slot5'];
                             $slot6=$row['slot6'];
                             $slot7=$row['slot7'];
                             $slot8=$row['slot8'];
                             $slot9=$row['slot9'];
                            $slot10=$row['slot10'];

                   echo '  
                        
                        <button class="accordion" > '.$day.'<ion-icon name="chevron-down-outline" class="panelicon"></ion-icon></button>
                          <div class="panel">
                            <table>
                           
                                                     
                                <tr>
                                    <th>'.$slot1.'</th>                                    
                                    <th>'.$slot2.'</th>
                                    <th>'.$slot3.'</th>
                                    <th>'.$slot4.'</th>
                                    <th>'.$slot5.'</th>      
                                </tr>
                                <tr>
                                    <th>'.$slot6.'</th>                                    
                                    <th>'.$slot7.'</th>
                                    <th>'.$slot8.'</th>
                                    <th>'.$slot9.'</th>
                                    <th>'.$slot10.'</th>   
                                </tr>
                                   
                            </table>
            
                          </div>';
                        }
                     } 
                     ?> 
                      



                      
                        
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>                                                    
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;
        
        for (i = 0; i < acc.length; i++) {
          acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
              panel.style.display = "none";
            } else {
              panel.style.display = "block";
            }
          });
        }
    </script>
        

</body>
</html>