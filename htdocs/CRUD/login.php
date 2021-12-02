<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="style.css"/>
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
    require_once("db.php");
    session_start();
    $meno=$_SESSION['user'];

    if(isset($meno)) {
        header("Location: ../HTML%20semestralka/index.php");
    }


    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {

        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);

        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $user = $username;
        $result = mysqli_query($con, $query) or die(mysqli_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {


            $_SESSION['user'] = $username;

            header("Location: ../HTML%20semestralka/index.php");

        } else {
            echo "<div class='form'>
                  <h3>Zlé zadané prihlasovacie meno/heslo.</h3><br/>
                  <p class='link'>Kliknutím sme prejdete na <a href='login.php'>Login</a>.</p>
                  </div>";
        }
    } else {

?>
    <form class="form" method="post" name="login">
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true" minlength="3" maxlength="10" required/>
        <input type="password" class="login-input" name="password" placeholder="Password" minlength="3" maxlength="10" required/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link"> Ešte stále nemáte konto ? <a href="registration.php">Registrácia tu</a></p>
  </form>
<?php
    }
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../HTML%20semestralka/script.js"> </script>
</body>
</html>
