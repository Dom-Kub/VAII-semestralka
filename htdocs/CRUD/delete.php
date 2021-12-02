<?php
require_once("db.php");

session_start();
$meno=$_SESSION['user'];
$query=mysqli_query($con,"DELETE FROM users where username='$meno'")or die(mysqli_error());
$row=mysqli_fetch_array($query);
session_destroy();
$con->close();
?>
<script type="text/javascript">
    alert("Konto bolo vymazané.");
    window.location = "login.php";
</script>
