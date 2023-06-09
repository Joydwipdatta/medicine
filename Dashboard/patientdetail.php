<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Detail</title>
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
                <h4>Dr. Stranger</h4>
                <p>Dentist</p>
            </div>
            <div class="sidemenu">
                <ul>
                    <a href="index.php"> <li><ion-icon name="apps-outline" class="icond"></ion-icon>Dashboard</li></a>
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
                    <h1>Patient Detail</h1>
                </div>
                <div class="mainbutton">
                    <a href="appointment.php"> <button>All Appointments</button></a>
                </div>
                <div class="mainmenu">
                    <ul>
                        <a href="#"><li><ion-icon name="help-circle-outline" class="icond"></ion-icon>Help</li></a>
                        <a href="#"><li><ion-icon name="settings-outline" class="icond"></ion-icon>Setting</li></a>
                        <a href="drprofile.php"><li><ion-icon name="person-circle-outline" class="icond"></ion-icon>Profile</li></a>
                    </ul>
                </div>
            </div>
            
            <div class="mainbody">
                <section class="patientsection">
                
                    <div class="patientdetail">
                        <div class="patientnameimg">
                            <div><img src="img/woman-gde38d1257_1280.jpg" alt=""></div>
                            
                            <div class="pnameno">
                                <h3>Beth Maccoy</h3>
                                <p>+91-88373-02945</p>
                            </div>
                        </div>
                        <div class="pdetail">
                            <div>
                                <h5>Starting Time</h5>
                                <p>11:30</p>
                            </div>
                            
                            <div>
                                <h5>D.O.B</h5>
                                <p>02 April 1998</p>
                            </div>
                            <div>
                                <h5>Gender</h5>
                                <p>Female</p>
                            </div>
                            <div>
                                <h5>Last Appointment</h5>
                                <p>14 Feb 2022</p>
                            </div>
                            <div>
                                <h5>Register Date</h5>
                                <p>05 Aug 2022</p>
                            </div>
                            
                        </div>
                        <div class="psymptoms">
                            <h5>Symptoms</h5>
                            <p>Asthma, Hypertension, Asam Urat</p>
                        </div>
                    </div>
                
                    <div class="patientreport">
                        <h4>Patient Report</h4>
                        <form action="" method="">
                            <div class="drpatientid">
                                <div class="drid">
                                    
                                    <input type="hidden" name="" id="" value="mark@1234" readonly>
                                </div>
                                <div class="patientid">
                                    
                                    <input type="hidden" name="" id="" value="beth@1234" readonly>
                                </div>

                            </div>
                            <div class="drpatientid">
                                <div class="drid">
                                    
                                    <input type="hidden" name="" id="" value="Mark Stranger" readonly>
                                </div>
                                <div class="patientid">
                                    
                                    <input type="hidden" name="" id="" value="Beth Maccoy" readonly>
                                </div>

                            </div>
                            
                            
                            <div class="attends">
                                <input type="radio" id="" name="attendance" value="attend" required>
                                <label for="attend">Attend</label>
                            </div>
                            <div class="attends attendlast">
                                <input type="radio" id="notattend" name="attendance" value="notattend" class="notattend">
                                <label for="notattend">Not Attend</label>
                            </div><br><br><br>
                            <label for="suggestion">Suggestion</label><br>
                            <textarea name="suggestion" id="" cols="30" rows="4"></textarea><br>
                            <label for="Prescription">Upload Prescription</label><br>
                            <input type="file" name="prescription" id=""><br>
                            <input type="submit" value="Submit">
                        </form>
                    </div>

                </section>    
            </div>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>                                                    
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


</body>
</html>