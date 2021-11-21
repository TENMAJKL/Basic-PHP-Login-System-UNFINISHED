<?php // GalaxyCode Panel v1.0 by Marek_p

session_start();

if($_SESSION["isloggedin"] > 0) {

    if($_SESSION["rank"] == "admin") {

        $username = $_SESSION["username"];
        $password = $_SESSION["password"];
        $kredit = $_SESSION["kredit"];
        $rank = $_SESSION["rank"];
        $id = $_SESSION["id"];

    } else {
        header("Location: ../auth/login.php");
    }
} else {
    header("Location: ../auth/login.php");
}
?>
<!DOCTYPE html>
<html lang="cs"> <!-- Jazyk -->
<head>

    <!-- ##### Hlavičky ##### -->

    <meta charset="UTF-8"> <!-- Encoding -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Kompatibilita -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Responsibilita -->
    <link rel = "icon" href="images/logo.png" type ="image/x-icon">  <!-- Ikona v Kartě Prohlížeče -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- Fa Ikony -->
    <link rel="stylesheet" href="../css/admin/menu.css"> <!-- Import CSS Souboru -->
    <title>GalaxyCode | Admin</title> <!-- Jméno Karty v Prohlížeči -->

    <!-- ##### Konec Hlavičky ####### -->

</head>

<?php include("../includes/navbar.php"); ?>

  <div class="main">
    <div class="card">
        <h2>Uživatelů</h2> <!-- Celkem Uživatelů -->
        <p>Celkem » 1</p>
    </div>
    <div class="card">
        <h2>Kreditů</h2> <!-- Kreditů v oběhu -->
        <p>V Oběhu » 0</p>
    </div>
    <div class="card">
        <h2>Produktů</h2> <!-- Produktů v E-Shopu -->
        <p>V E-Shopu » 0</p>
    </div>
    <div class="card">
        <h2>Zisk</h2> <!-- Celkový Zisk -->
        <p>Celkem » 0 kč</p>
    </div>
    <div class="card">
        <h2>Výdaje</h2> <!-- Celkové Výdaje -->
        <p>Celkem » 0 kč</p>
    </div>
    <div class="undertabs">
        <h1>Nadpis</h1> <!-- Nadpis Velké Karty -->
        <p>Text</p> <!-- Text Velké Karty -->
    </div>
    <div class="infocard">
        <h1>Systém</h1> <!-- Nadpis karty o Systému -->
        <p>Verze » v1.0 Beta</p> <!-- Verze Systému -->
        <p>Autor » Marek_p</p> <!-- Mně tu pls nech xd -->
        <p>Vydáno » xx.xx.xxxx</p> <!-- Datum Vydání -->
    </div>
  </div>

  <!-- ########## Konec Kart a Statistik ########## -->

  <!-- ########## Konec Body ###################### -->

</body>

<?php include("../includes/colors.php") ?>

  <!-- ########## Scripty ######################### -->

<script type="text/javascript" src="vanilla-tilt.js"></script>
<script>

    VanillaTilt.init(document.querySelectorAll(""),{ // .card
        max: 25,
        speed: 400
    });

</script>

  <!-- ########## Konec Scriptů ################### -->

</html>