<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update</title>
    <style>button{
        background-color: yellow;   
        width: 100%;  
        align: center;
        color: black;   
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
    }
    fieldset{
        width: 50%;
    }
    button:hover {   
       opacity: 0.7;   
    }   
    input[type=text], input[type=password] {   
    width: 100%;   
    margin: 8px 0;  
    padding: 12px 20px;   
    display: inline-block;   
    border: 2px solid green;   
    box-sizing: border-box;   
    }  

    .container {   
    padding: 25px;   
    background-color: lightblue;  
    }
  </style>
</head>
<body>
<form action="" method="post" name="update" style="padding-left: 10px;background-color:gainsboro;padding-top: 5px;">
            <h3><u>Update Form :</u></h3>
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
            <button input type="submit" value="Update" style="background-color: green;border: darkgreen solid ;
            padding-left: 10px;padding-right: 10px;color: black;">Update</button>
            <button  style="background-color: red;border: darkred solid ;
            padding-left: 10px;padding-right: 10px;color: black;"><a href="HOMENEW.html" >Cancel</a></button>

        </form>
</body>
</html>

<?php
include("connection.php");
session_start();

if(isset($_POST['firstname'],$_POST['middlename'],$_POST['lastname'],$_POST['fathername'],$_POST['mothername'],$_POST['address'],$_POST['gender'],$_POST['dob'],$_POST['admissiontype'],$_POST['applicationid'],$_POST['password'],$_POST['repeatpassword'],$_POST['branch'],$_POST['10thmarks'],$_POST['12thmarks'],$_POST['eemarks'])) {

    $fname=$_POST['firstname'];
    $mname=$_POST['middlename'];
    $lname=$_POST['lastname'];
    $fathername=$_POST['fathername'];
    $mothername=$_POST['mothername'];
    $address=$_POST['address'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];
    $atype=$_POST['admissiontype'];
    $appid=$_POST['applicationid'];
    $pwd=$_POST['password'];
    $rpwd=$_POST['repeatpassword'];
    $branch=$_POST['branch'];
    $tenmarks=$_POST['10thmarks'];
    $twelvemarks=$_POST['12thmarks'];
    $eemarks=$_POST['eemarks'];
    
    
    
    $update_sql=mysqli_query($conn,"UPDATE `registration` SET `FIRSTNAME`='$fname',`MIDDLENAME`='$mname',`LASTNAME`='$lname',`FATHERNAME`='$fathername',`MOTHERNAME`='$mothername',`ADDRESS`='$address',`GENDER`='$gender',`DOB`='$dob',`ADMISSIONTYPE`='$atype',`APPLICATIONID`='$appid',`PASSWORD`='$pwd',`REPEATPASSWORD`='$rpwd',`BRANCH`='$branch',`10THMARKS`='$tenmarks',`12THMARKS`='$twelvemarks',`ENTRANCEMARKS`='$eemarks'  WHERE `PASSWORD`='$pwd' and `APPLICATIONID`='$appid'");
            
    
            if(!$update_sql){
                echo '<script language="javascript">';
                echo 'alert("Invalid Details")';
                echo '</script>';
            } else {
                echo '<script language="javascript">';
                echo 'alert("Updated")';
                echo '</script>';
            }
        }
?>