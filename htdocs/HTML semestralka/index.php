<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Assassin's Creed FanPage</title>
    <link href="AssassinLogo.png" rel="icon">
    <link href="CSS/index.css" rel="stylesheet">
    <link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" rel="stylesheet">





</head>
<main>

</main>
<body class="body">

<div class="container">
    <div class="row">
        </div>
        <div class="col-lg-12" style="top: -20px;">
            <img class="img shadow" src="IMGs/Index/Bez%20názvu.png"></a>
        </div>


    </div>
</div>

<?php
session_start();


$meno=$_SESSION['user'];


?>
<div class=" container linkStyle">
    <div class="row justify-content-center">
        <div class="col-lg-5 col-sm-12 col-md-12 col-xs-12 marBot center">    <!-- formatovanie obrazka   -->
            <a alt="Assassin's Creed" href="AC1_html/IntroAC.html">    <!-- po kliknuti ma presmeruje na druhu stranku   -->
                <img class="img shadow" src="IMGs/Index/AC1_link.png">
            </a>
        </div>
        <div class="col-lg-5 col-sm-12 col-md-12 col-xs-12 marBot center">    <!-- formatovanie obrazka   -->
            <a alt="Assassin's Creed II" href="AC2_html/introAC2.html">  <!-- po kliknuti ma presmeruje na druhu stranku   -->
                <img class="img shadow" src="IMGs/Index/AC2_link.png">
            </a>
        </div>
        <div class="col-lg-5 col-sm-12 col-md-12 col-xs-12 marBot center">    <!-- formatovanie obrazka   -->
            <a alt="Profil" href="profil.html">  <!-- po kliknuti ma presmeruje na druhu stranku   -->
                <img class="img shadow" src="IMGs/Index/AC2_Memory.png">
            </a>
        </div>
    </div>

</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="script.js"> </script>

</body>
</html>