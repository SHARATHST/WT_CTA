<?php
include("connection.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Student Registration</title>
    </head>
    <style>
      a{
          text-decoration: none;
          color: black;
      }
      li {
  display: inline;
  border: solid black;
  padding-left: 70px;
  padding-right: 70px;
  
}


    </style>
    <body style="background-color:grey ;">
        <h2 style="text-align: center; background-color: grey;border: solid;">SDM COLLEGE OF ENGINEERING AND TECHNOLOGY</h2>
        <ul>
    <li><a href="HOMENEW.html">Home</a></li>
    <li><a href="Admissions.html">Admission</a></li>
    <li><a href="Acadamics">Acadamics</a></li>
    <li><a href="About.php">About</a></li>
    <li><a href="#contact">Contact</a></li>
        </ul>
        <form style="padding-left: 10px;background-color:gainsboro;padding-top: 5px;">
            <h3><u>Student Registration Form :</u></h3>
            <label><b>NAME :</b></label><br><br>
            <label>First Name :</label>
            <input type="text" name="firstname">
            <label>Middle Name :</label>
            <input type="text" name="middlename">
            <label>Last Name :</label>
            <input type="text" name="lastname"><br><br>
            <label><b>PARENTS DETAILS</b></label><br><br>
            <label>Father's Name</label>
            <input type="text" name="fathername">
            <label>Mother's Name</label>
            <input type="text" name="mothername"><br><br>
            <label><b>ADDRESS :</b></label>
            <textarea name="address"></textarea><br><br>
            <label><b>GENDER    :</b></label>
            <input type="radio" name="gender" value="Male">MALE
            <input type="radio" name="gender" value="FeMale">Female<br><br>
            <label><b>Date of Birth  :</b></label>
            <input type="date" name="dob"><br><br>
            <label><b>Admission Type :</b></label>
            <select name="admissiontype">
                <option value="Default">Select Admission Type</option>
            <option value="KCET" >KCET</option>
            <option value="COMEDK" >COMED-K</option>
            <option value="Managment" >Managment</option>
            </select><br><br>
            <label><b>Application ID :</b></label>
            <input type="text" name="applicationid"><br><br>
            <label><b>PASSWORD :</b></label>
            <input type="password" name="password"><br><br>
            <label><b>Repeat Password :</b></label>
            <input type="password" name="repeatpassword"><br><br>
            <label><b>COURSES :</b></label>
            <select name="branch">
            <option value="Default">Select Course</option>
            <option value="CSE">Computer Science And Engineering</option>
            <option value="EC">Electronic and Communication Engineering</option>
            <option value="ME">Mechanical Engineering</option>
            <option value="EEE">Electrical and Electronics Engineering </option>
            <option value="CIVIL">Civil Engineering</option>
            <option value="CE">Chemical Engineering</option>
            </select><br><br>
            <label><b>MARKS OBTAINED :</b></label><br><br>
            <label>10 th Marks :</label>
            <input type="number" name="10thmarks"> <br><br>
            <label>12 th Marks :</label>
            <input type="number" name="12thmarks"><br><br>
            <label>  Entrance Exam Marks :</label>
            <input type="number" name="eemarks"><br><br>
            <input type="checkbox">Remember me<br><br>
            <button style="background-color: green;border: darkgreen solid ;
            padding-left: 10px;padding-right: 10px;color: black;">Register</button>
            <button   style="background-color: red;border: darkred solid ;
            padding-left: 10px;padding-right: 10px;color: black;"><a href="HOMENEW.html" >Cancel</a></button>

        </form>
    </body>
</html>
<?php
$fname=$_GET['firstname'];
$mname=$_GET['middlename'];
$lname=$_GET['lastname'];
$fathername=$_GET['fathername'];
$mothername=$_GET['mothername'];
$address=$_GET['address'];
$gender=$_GET['gender'];
$dob=$_GET['dob'];
$atype=$_GET['admissiontype'];
$appid=$_GET['applicationid'];
$pwd=$_GET['password'];
$rpwd=$_GET['repeatpassword'];
$branch=$_GET['branch'];
$tenmarks=$_GET['10thmarks'];
$twelvemarks=$_GET['12thmarks'];
$eemarks=$_GET['eemarks'];


$query="insert into registration values ('$fname','$mname','$lname','$fathername','$mothername','$address','$gender','$dob','$atype','$appid','$pwd','$rpwd','$branch','$tenmarks','$twelvemarks','$eemarks')";
$data=mysqli_query($conn,$query);

?>

