<?php
include "connection.php";
 session_start();
include "dsession.php";
?>

<?php
                                  
$_SESSION['duid'];
$duid=$_SESSION['duid'];
if(isset($_POST['submit'])){
  $dname=$_POST['name'];
  $dphone=$_POST['phone'];
  $demail=$_POST['email'];
  $dpassword=$_POST['password'];
  $dspeciality=$_POST['speciality'];
  $daddress=$_POST['address'];
   

  $query= "UPDATE `doctor` set dname='$dname',dphone='$dphone',demail='$demail',dpassword='$dpassword',
   dspeciality='$dspeciality',daddress='$daddress'  where duid='$duid'";
  $result=mysqli_query($connection,$query);
   if($result){
      header('location:dprofile.php');
      echo "updated successfully";
   }
   else{
      die(mysql_error($connection));
  }     
}
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Profile</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="bar">
        <div class="sidebar">
            <div class="profile">
                 <img src=".images/<?php echo $result['dimage'];?>" alt="">
                <h4>Dr.<?php  echo $result['dname']?></h4>
                <p><?php  echo $result['dspeciality']?></p>
            </div>
            <div class="sidemenu">
                <ul>
                    <a href="doctor.php"> <li><ion-icon name="apps-outline" class="icond"></ion-icon>Dashboard</li></a>
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
                    <h1>Profile</h1>
                </div>
                <div class="mainmenu">
                    <ul>
                        <a href="#"><li><ion-icon name="help-circle-outline" class="icond"></ion-icon>Help</li></a>
                        <a href="#"><li><ion-icon name="settings-outline" class="icond"></ion-icon>Setting</li></a>
                        <a href="#"><li class="mainmenuactive"><ion-icon name="person-circle-outline" class="icond"></ion-icon>Profile</li></a>
                    </ul>
                </div>
            </div>
            
            <div class="mainbody">
                
                <div class="profiledetails">

                    <div class="details">
                        <img src="images/<?php echo $result['dimage'];?>" alt="">
                        <h4><?php  echo $result['dname']?></h4>
                        
                        <h5><?php  echo $result['dspeciality']?></h5>
                        
                        <p>DR.ID: <?php  echo $result['duid']?></p>
                        <p>E-mail: <?php  echo $result['demail']?></p>
                        <p>Phone: <?php  echo $result['dphone']?></p>
                        <p class="draddr">Address: <?php  echo $result['daddress']?></p>
                        
                    </div>

                    <div class="editdetails">
                        <h4>Edit Details</h4>
                        <div class="editform">
                    
                            <form action="dprofile.php" method="POST" enctype="multipart/form-data">
                                <label for="name">Full Name</label>
                                <input type="text" name="name" id="" value="<?php  echo $result['dname']?>" placeholder="Enter full name" required>

                                <div class="drprofilegrid">

                                    <div>
                                        <label for="phone">Phone Number</label>
                                        <input type="tel" name="phone" id="" value="<?php  echo $result['dphone']?>" placeholder="Enter mobile number" pattern="^[6-9][0-9][0-9]{0,9}$" maxLength="10" required>
                                    </div>
                                    <div>
                                        <label for="email">Email</label>
                                        <input type="email" name="email" id="" value="<?php  echo $result['demail']?>" placeholder="Enter email" required>
                                    </div>
                                </div>
                                
                                
                                <label for="password">Password</label>
                                <input type="password" name="password" id="myInput" value="<?php  echo $result['dpassword']?>" placeholder="Enter password" required>
                                <input type="checkbox" onclick="myFunction()">Show Password
                                <div class="drprofilegrid">
                                    <div>
                                        <label for="speciality">Speciality</label>
                                        <select id="speciality" name="speciality">
                                    
                                            <option value="dentist">Dentist</option>
                                            <option value="Gynecologist/obstetrician">Gynecologist/obstetrician</option>
                                            <option value="General physician">General physician</option>
                                            <option value="Dermatology">Dermatology</option>
                                            <option value="Ear-Nose-Throat(ENT)">Ear-Nose-Throat(ENT)</option>
                                            <option value="Homoeopath">Homoeopath</option>
                                            <option value="Ayurveda">Ayurveda</option>
                                    
                                        </select>
                                    </div>
                                    <div>
                                        <label for="image">Change Image</label>
                                        <input type="file" name="image" id="">
                                    </div>
                                </div>
                                
                                <label for="address">Address</label>
                                <input type="text" name="address" id="" value="<?php  echo $result['daddress']?>" placeholder="Enter full address" required>
                                <br>
                                
                                <input type="submit" name="submit" value="Update">

                                
                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>                                                    
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


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

</body>
</html>