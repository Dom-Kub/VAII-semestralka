<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div class="covers">
    <div class="cover" style="background:url('../HTML semestralka/galeria/1.jpg')"></div>
    <div class="cover" style="background:url('../HTML semestralka/galeria/2.jpg')"></div>
    <div class="cover" style="background:url('../HTML semestralka/galeria/3.jpg')"></div>
    <div class="cover" style="background:url('../HTML semestralka/galeria/4.jpg')"></div>
    <div class="cover" style="background:url('../HTML semestralka/galeria/5.jpg')"></div>
    <div class="cover" style="background:url('../HTML semestralka/galeria/6.jpg')"></div>
    <div class="cover" style="background:url('../HTML semestralka/galeria/7.jpg')"></div>
</div>
<?php
    require('db.php');

    if (isset($_REQUEST['username'])) {

        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>Vaša registrácia prebehla úspešne.</h3><br/>
                  <p class='link'>Kliknutím sem <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Chýbajúce údaje.</h3><br/>
                  <p class='link'>Klik sem k <a href='registration.php'>registrácií </a> znovu.</p>
                  </div>";
        }
    } else {
?>
        <form class="form" action="" method="post">
            <h1 class="login-title">Registration</h1>
            <input type="text" class="login-input" name="username" placeholder="Username" minlength="3" maxlength="10" required />
            <input type="email" class="login-input" name="email" placeholder="Email Adress" required/>
            <input type="password" class="login-input" name="password" placeholder="Password" minlength="3" maxlength="10" required/>
            <input type="submit" name="submit" value="Register" class="login-button"/>
            <p class="link">Already have an account? <a href="login.php">Login here</a></p>
        </form>
<?php
    }
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../HTML%20semestralka/script.js"> </script>
</body>
</html>
