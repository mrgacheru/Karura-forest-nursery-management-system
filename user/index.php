<?php
session_start();
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Login - php inventory management system</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="styles.css
    ">
</head>
<body>
<div id="loginbox">
<div class="main-content">
    </div>
        <div class="left-side" style="background-color: aqua; position: fixed; top: 0; bottom: 0;right: 50%; left: 0;background-image: url(wallpaperflare.com_wallpaper\ \(3\).jpg);">
            <p style="font-size: 60px; padding: 20px; color: rgb(105, 107, 7);margin: 20%;margin-top: 120px;" >KARURA FOREST TREE <span style="color: rgb(134, 125, 1);">NURSARY MANAGEMENT</span> SYSTEM</p>
            
            
        </div>
        <div  class="right-side" style="background: linear-gradient(to right, #FFFFF0, #F5F5DC); position: fixed; top: 0; bottom: 0;right: 0; left: 50%; "  >
                
            <img style="width: 200px; height: 200px;" src="tree-vector-icon-600nw-2459808977.webp" alt="">
            <p style="font-size: 30px;margin-bottom: 0px;margin-top: 0px;"><b>Hi, welcome back</b></p>
            <p style="font-size: 17px; margin-top: 0px;">please fill in your details to log in</p>
             <section>
                <form name="form1" class="form-vertical" action="" method="post">
                    <label for="username"> Username</label>
                    <input type="text" name="username" id="username" placeholder="Enter your username" required>
                    <label for="password">password</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password" required>
                    
                    
                  
                    
                    <input type="submit" name="submit1" value="login" class="btn-btn-success" style="height: 40px; border-radius: 7px;width: 400px;align-self: center;font-size: large;font-family: 'Times New Roman', Times, serif;background-color:rgb(46, 26, 1);color: antiquewhite;font-size: 20px;"/>
                    
                </form>

    <?php
    if (isset($_POST["submit1"])) {
        $username = mysqli_real_escape_string($link, $_POST["username"]);
        $password = mysqli_real_escape_string($link, $_POST["password"]);

        $count = 0;
        $res = mysqli_query($link, "select * from user_registration where username='$username' && password='$password' && role='user' && status='active'");
        $count = mysqli_num_rows($res);
        if ($count > 0) {
            $_SESSION["user"]=$username;
            ?>
            <script type="text/javascript">
                window.location = "dashboard.php";
            </script>
        <?php
        }
        else{
        ?>
            <div class="alert alert-danger">
                Invalid username or password, or account blocked by admin.
            </div>
            <?php

        }

    }


    ?>


</div>

<script src="js/jquery.min.js"></script>
<script src="js/matrix.login.js"></script>
</body>

</html>








