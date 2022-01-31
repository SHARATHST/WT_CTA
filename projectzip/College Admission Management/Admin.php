<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin</title>
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
        <span>Admin</span>
    </div>

    <div class="main">
        <div class="login">
            <form action="" method="post" name="login">
                <fieldset>
                    <legend class="heading">Admin Login</legend>
                    <input type="text" name="userid" placeholder="User Name" autocomplete="off">
                    <input type="password" name="password" placeholder="Password" autocomplete="off">
                    <button input type="submit" value="Login">Login</button>
                </fieldset>
            </form>    
        </div>
    </div>
    </centre>
</body>
</html>

<?php
    include("connection.php");
    session_start();

    if (isset($_POST["userid"],$_POST["password"]))
    {
        $username=$_POST["userid"];
        $password=$_POST["password"];
        $sql = "SELECT userid FROM admin_login WHERE userid='$username' and password = '$password'";
        $result=mysqli_query($conn,$sql);

        // $row=mysqli_fetch_array($result);
        $count=mysqli_num_rows($result);
        
        if($count==1) {
            $_SESSION['login_user']=$username;
            header("Location:admincontrol.php");
        }else {
            echo '<script language="javascript">';
            echo 'alert("Invalid Username or Password")';
            echo '</script>';
        }
        
    }
?>

