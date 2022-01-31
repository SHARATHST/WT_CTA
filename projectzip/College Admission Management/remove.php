<!DOCTYPE html>
<html lang="en">
<head>
    <title>Delete</title>
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
    <centre>
    <div class="title">
        <span>Delete</span>
    </div>

    <div class="main">
        <div class="login">
            <form action="" method="post" name="login">
                <fieldset>
                    <legend class="heading">Delete</legend>
                    <input type="text" name="applicationid" placeholder="Application Id" autocomplete="off">
                    <button input type="submit" value="Delete">Delete</button>
                </fieldset>
            </form>    
        </div>
    </div>
    </centre>
</body>
</html>
<?php
error_reporting(0);
include("connection.php");
session_start();

    if(isset($_POST['applicationid'])) {
        $appl_name=$_POST['applicationid'];
        $password=$_POST['pswd'];

        $delete_sql=mysqli_query($conn,"DELETE from `registration` where `APPLICATIONID`='$appl_name'");
        if(!$delete_sql){
            echo '<script language="javascript">';
            echo 'alert("Not available")';
            echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("Deleted")';
            echo '</script>';
        }
    }
?>