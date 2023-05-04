/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `duid` varchar(255) NOT NULL,
  `dname` varchar(255) NOT NULL,
  `puid` varchar(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `pdob` varchar(255) NOT NULL,
  `pgender` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `slot` varchar(255) NOT NULL,
  `lappointment` date NOT NULL,
  `bookingdate` date NOT NULL,
  `symptom` varchar(500) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

CREATE TABLE `doctor` (
  `did` int(11) NOT NULL AUTO_INCREMENT,
  `dname` varchar(255) NOT NULL,
  `dphone` varchar(100) NOT NULL,
  `demail` varchar(255) NOT NULL,
  `duid` varchar(255) NOT NULL,
  `dpassword` varchar(255) NOT NULL,
  `dspeciality` varchar(255) NOT NULL,
  `daddress` varchar(255) NOT NULL,
  `dimage` varchar(200) NOT NULL,
  PRIMARY KEY (`did`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

CREATE TABLE `patient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(255) NOT NULL,
  `pphone` varchar(20) NOT NULL,
  `pemail` varchar(255) NOT NULL,
  `puid` varchar(20) NOT NULL,
  `ppassword` varchar(100) NOT NULL,
  `pimage` varchar(255) NOT NULL,
  `pdob` varchar(255) NOT NULL,
  `pgender` enum('male','female') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

CREATE TABLE `preport` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dname` varchar(255) NOT NULL,
  `duid` varchar(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `puid` varchar(255) NOT NULL,
  `pdob` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `psymptom` varchar(255) NOT NULL,
  `lastappointment` varchar(255) NOT NULL,
  `atttended` enum('attend','notattend') NOT NULL,
  `attend` varchar(255) NOT NULL,
  `notattend` varchar(255) NOT NULL,
  `suggestion` varchar(255) NOT NULL,
  `pdf` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4;

CREATE TABLE `slots` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `duid` varchar(100) NOT NULL,
  `day` varchar(255) NOT NULL,
  `slot1` time NOT NULL,
  `slot2` time NOT NULL,
  `slot3` time NOT NULL,
  `slot4` time NOT NULL,
  `slot5` time NOT NULL,
  `slot6` time NOT NULL,
  `slot7` time NOT NULL,
  `slot8` time NOT NULL,
  `slot9` time NOT NULL,
  `slot10` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

INSERT INTO `appointment` (`id`, `duid`, `dname`, `puid`, `pname`, `pdob`, `pgender`, `day`, `slot`, `lappointment`, `bookingdate`, `symptom`, `image`) VALUES
(1, 'bishalAcharjee', 'bishal acharjee', '821y3218213', 'ram das', '1996-04-09', 'male', 'Wednesday', '10:00', '0000-00-00', '2022-09-21', 'hjakaksak', 'pexels-vickiido-4929516.jpg');
INSERT INTO `appointment` (`id`, `duid`, `dname`, `puid`, `pname`, `pdob`, `pgender`, `day`, `slot`, `lappointment`, `bookingdate`, `symptom`, `image`) VALUES
(3, 'joydeep1234', 'Joydeep Datta', '821y3218213', 'ram das', '1996-04-09', 'male', 'Friday', '13:00', '0000-00-00', '2022-09-23', 'iaoaioa', '');
INSERT INTO `appointment` (`id`, `duid`, `dname`, `puid`, `pname`, `pdob`, `pgender`, `day`, `slot`, `lappointment`, `bookingdate`, `symptom`, `image`) VALUES
(4, 'joydeep1234', 'Joydeep Datta', 'Bishal@12345', 'Bishal Saha', '1997-11-10', 'male', 'Wednesday', '12:00', '0000-00-00', '2022-09-15', 'jakakak', '');
INSERT INTO `appointment` (`id`, `duid`, `dname`, `puid`, `pname`, `pdob`, `pgender`, `day`, `slot`, `lappointment`, `bookingdate`, `symptom`, `image`) VALUES
(5, 'bishalAcharjee', 'bishal acharjee', 'Ragul6543210', 'Rahul saha', '1993-02-09', 'female', 'Monday', '16:00', '0000-00-00', '2022-09-19', 'nkjannak', 'itachi-uchiha-akatsuki-uhdpaper.com-4K-55.jpg'),
(9, 'bishalAcharjee', 'bishal acharjee', 'Ragul6543210', 'Rahul saha', '1993-02-09', 'female', 'Friday', '16:00', '0000-00-00', '2022-09-29', 'ajlalklakp;a', 'naruto-uzumaki-baryon-mode_3840x2160_xtrafondos.com.jpg'),
(10, 'bishalAcharjee', 'bishal acharjee', '821y3218213', 'ram das', '1996-04-09', 'male', 'Wednesday', '12:00', '0000-00-00', '2022-09-21', 'ajaljkla', 'Adobe Scan Sep 16, 2022.pdf'),
(11, 'joydeep1234', 'Joydeep Datta', '821y3218213', 'ram das', '1996-04-09', 'male', 'Wednesday', '12:00', '0000-00-00', '2022-09-19', 'lalalsa', 'LLP Registration (1).pdf');

INSERT INTO `doctor` (`did`, `dname`, `dphone`, `demail`, `duid`, `dpassword`, `dspeciality`, `daddress`, `dimage`) VALUES
(15, 'Goutam dhar', '987654132', 'goutam@email.com', 'goutam00', 'Goutam@123', 'General physician', 'ongc,agartala,tripura', 'images/pexels-george-negritsoyski-5331752.jpg');
INSERT INTO `doctor` (`did`, `dname`, `dphone`, `demail`, `duid`, `dpassword`, `dspeciality`, `daddress`, `dimage`) VALUES
(16, 'bishal acharjee', '8172717371', 'bishal@email.com', 'bishalAcharjee', 'Ba#12345678', 'Dentist', 'udaipur,gomati,tripura', 'images/pexels-vickiido-4929516.jpg');
INSERT INTO `doctor` (`did`, `dname`, `dphone`, `demail`, `duid`, `dpassword`, `dspeciality`, `daddress`, `dimage`) VALUES
(17, 'Joydeep Datta', '8837069137', 'joydeep@gamil.com', 'joydeep1234', 'Joydeep@98765', 'Dermatology', 'agrtala,tripura', 'images/pexels-marty-leloux-3921659.jpg');
INSERT INTO `doctor` (`did`, `dname`, `dphone`, `demail`, `duid`, `dpassword`, `dspeciality`, `daddress`, `dimage`) VALUES
(19, 'shyam das', '9812319313', 'shyam@email.com', 'shyam1234', 'Shyam@123456', 'Ear-Nose-Throat(ENT)', 'joynagar', 'pexels-david-garrison-2128807.jpg'),
(20, 'ram das', '8123131498', 'das@email.com', '2193193123', 'ramD@1323423442', 'Ayurveda', 'road', 'man.jpg'),
(22, 'Rajdip gope', '9862749888', 'rajdip123456666@email.com', 'rajdip1234', 'Rajdip@3214567', 'Gynecologist/obstetrician', 'bordowali,Agartala', 'pexels-vickiido-4929516.jpg'),
(23, 'Abhi Saha', '8837312356', 'abhi@gmail.com', 'abhi@12345', 'A@vgi3456788', 'General physician', 'Agartala,Tripura,799170', '');

INSERT INTO `patient` (`id`, `pname`, `pphone`, `pemail`, `puid`, `ppassword`, `pimage`, `pdob`, `pgender`) VALUES
(4, 'Rahul saha', '8843567901', 'rahul@email.com', 'Ragul6543210', 'Rahul@87654312', 'man.jpg', '1993-02-09', 'female');
INSERT INTO `patient` (`id`, `pname`, `pphone`, `pemail`, `puid`, `ppassword`, `pimage`, `pdob`, `pgender`) VALUES
(6, 'ram das', '8812371823', 'ram1234@gmail.com', '821y3218213', 'Ramd@654321', 'pexels-kampus-production-8381802.jpg', '1996-04-09', 'male');
INSERT INTO `patient` (`id`, `pname`, `pphone`, `pemail`, `puid`, `ppassword`, `pimage`, `pdob`, `pgender`) VALUES
(7, 'Bishal Saha', '9862145678', 'abc@gmail.com', 'Bishal@12345', 'Bishal@12345', '', '1997-11-10', 'male');

INSERT INTO `preport` (`id`, `dname`, `duid`, `pname`, `puid`, `pdob`, `gender`, `psymptom`, `lastappointment`, `atttended`, `attend`, `notattend`, `suggestion`, `pdf`) VALUES
(14, 'Joydeep Datta', 'joydeep1234', 'ram das', '821y3218213', '1996-04-09', 'male', 'aallaklalkala', '2022-10-20', 'attend', 'attend', '', 'jkakka', 'AADADADAAD.pdf');
INSERT INTO `preport` (`id`, `dname`, `duid`, `pname`, `puid`, `pdob`, `gender`, `psymptom`, `lastappointment`, `atttended`, `attend`, `notattend`, `suggestion`, `pdf`) VALUES
(15, 'Joydeep Datta', 'joydeep1234', 'ram das', '821y3218213', '1996-04-09', 'male', 'aallaklalkala', '2022-10-20', 'attend', 'attend', '', 'nhhkj', 'Online Cess Collection.docx');
INSERT INTO `preport` (`id`, `dname`, `duid`, `pname`, `puid`, `pdob`, `gender`, `psymptom`, `lastappointment`, `atttended`, `attend`, `notattend`, `suggestion`, `pdf`) VALUES
(28, 'Joydeep Datta', 'joydeep1234', 'ram das', '821y3218213', '1996-04-09', 'male', 'iaoaioa', '2022-09-23', 'attend', 'attend', '', 'akjnanla', 'joydeep.pdf');
INSERT INTO `preport` (`id`, `dname`, `duid`, `pname`, `puid`, `pdob`, `gender`, `psymptom`, `lastappointment`, `atttended`, `attend`, `notattend`, `suggestion`, `pdf`) VALUES
(29, 'Joydeep Datta', 'joydeep1234', 'ram das', '821y3218213', '1996-04-09', 'male', 'iaoaioa', '2022-09-23', 'attend', '0', '', 'ahhjaaa', 'joydeep.pdf');

INSERT INTO `slots` (`id`, `duid`, `day`, `slot1`, `slot2`, `slot3`, `slot4`, `slot5`, `slot6`, `slot7`, `slot8`, `slot9`, `slot10`) VALUES
(11, 'shyam1234', 'Monday', '10:30:00', '13:00:00', '12:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00');
INSERT INTO `slots` (`id`, `duid`, `day`, `slot1`, `slot2`, `slot3`, `slot4`, `slot5`, `slot6`, `slot7`, `slot8`, `slot9`, `slot10`) VALUES
(12, 'joydeep1234', 'Monday', '10:00:00', '10:30:00', '11:00:00', '11:30:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00');
INSERT INTO `slots` (`id`, `duid`, `day`, `slot1`, `slot2`, `slot3`, `slot4`, `slot5`, `slot6`, `slot7`, `slot8`, `slot9`, `slot10`) VALUES
(13, 'goutam00', 'Monday', '10:00:00', '11:00:00', '12:00:00', '13:00:00', '14:00:00', '15:00:00', '16:00:00', '17:00:00', '18:00:00', '19:00:00');


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;