<?php
include  "connection.php";
 session_start();
include  "dsession.php";
?>


<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Appointment</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="bar">
        <div class="sidebar">
            <div class="profile">
                <img src="img/doc2.jpg" alt="">
                <h4>Dr.<?php echo $result['dname'] ?></h4>
                <p><?php echo $result['dspeciality'] ?></p>
            </div>
            <div class="sidemenu">
                <ul>
                    <a href="doctor.php"> <li><ion-icon name="apps-outline" class="icond"></ion-icon>Dashboard</li></a>
                    <a href="slot.php"><li><ion-icon name="calendar-outline" class="icond"></ion-icon>Slots</li></a>
                    <a href="#"><li class="active"> <ion-icon name="people-outline" class="icond"></ion-icon> Appointments</li></a>
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
                    <h1>All Appointments</h1>
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
                
                <div class="mbody"><div class="appointmentslotbox asb">
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
                            <div class="detail">
                                <a href="patientdetail.php"><button>Details</button> </a>
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
                            <div class="detail">
                                <a href="patientdetail.php"><button>Details</button> </a>
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
                            
                            <div class="detail">
                                <a href="patientdetail.php"><button>Details</button> </a>
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
                            <div class="detail">
                                <a href="patientdetail.php"><button>Details</button> </a>
                            </div>
                        </div>
                        <div class="patient">
                            <div class="patientimg">
                                <img src="img/woman-g2d5b2542b_1280.jpg" alt="">
                            </div>
                            <div class="patientdoc">
                                <h4>Barry Kade</h4>
                                <p>Medical Checkup</p>
                             </div>
                            <div class="time">
                                <h2>14:50</h2>
                            </div>
                            <div class="detail">
                                <a href="patientdetail.php"><button>Details</button> </a>
                            </div>
                        </div>
                        <div class="patient">
                            <div class="patientimg">
                                <img src="img/pexels-nathan-cowley-1300402.jpg" alt="">
                            </div>
                            <div class="patientdoc">
                                <h4>Mark Quil</h4>
                                <p>Medical Checkup</p>
                             </div>
                            <div class="time">
                                <h2>14:50</h2>
                            </div>
                            <div class="detail">
                                <a href="patientdetail.php"><button>Details</button> </a>
                            </div>
                        </div>
                        <div class="patient">
                            <div class="patientimg">
                                <img src="img/pexels-italo-melo-2379004.jpg" alt="">
                            </div>
                            <div class="patientdoc">
                                <h4>Biren Borra</h4>
                                <p>Medical Checkup</p>
                             </div>
                            <div class="time">
                                <h2>14:50</h2>
                            </div>
                            <div class="detail">
                                <a href="patientdetail.php"><button>Details</button> </a>
                            </div>
                        </div>


                    </div>
                </div></div> 

            </div>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>                                                    
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
   
        


</body>
</html>