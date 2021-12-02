

<?php
require_once("db.php");
session_start();
$meno=$_SESSION['user'];
$query=mysqli_query($con,"SELECT * FROM users where username='$meno'")or die(mysqli_error());
$row=mysqli_fetch_array($query);

if(!isset($meno)) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Update</title>
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


    <form class="form" method="post" name="login">
        <h1 class="login-title">Zmena emailu</h1>
        <input type="text" class="login-input" name="email" required placeholder="Napis email" value="<?php echo $row['email']; ?>"></textarea>
        <input type="submit" value="Zmeniť" name="submit" class="login-button"/>

        <p class="link"> Ešte stále nemáte konto ? <a href="registration.php">Registrácia tu</a></p>
    </form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../HTML%20semestralka/script.js"> </script>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $query = "UPDATE users SET email = '$email'
                      WHERE username = '$meno'";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    ?>
    <script type="text/javascript">
        alert("Email zmenený.");
        window.location = "login.php";
    </script>
    <?php
}
?>
