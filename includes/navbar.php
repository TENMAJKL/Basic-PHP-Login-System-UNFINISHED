<?php // GalaxyCode Panel v1.0 by Marek_p

$panelname = "GalaxyCode"; // Výchozí jméno, pokud není určeno v databázi
$currency = "💎"; // Výchozí jednotka kreditů

$username = $_SESSION["username"];
$password = $_SESSION["password"];
$rank = $_SESSION["rank"];
$id = $_SESSION["id"];

include("db.php");

$conn77 = new mysqli($db_hostname, $db_username, $db_password, $db_database);

if ($conn77->connect_error) {
    die("[ERROR] Nepodařilo se spojit s databází! <br> " . $conn77->connect_error);
}

$sql77 = "SELECT credit FROM users WHERE `id`='$id'";
$result77 = $conn77->query($sql77);

if($result77->num_rows > 0) {

    while($row = $result77->fetch_assoc()) {

        $credit = $row["credit"];

    }
}

// #####

$conn78 = new mysqli($db_hostname, $db_username, $db_password, $db_database);

if ($conn78->connect_error) {
    die("[ERROR] Nepodařilo se spojit s databází! <br> " . $conn78->connect_error);
}

$sql78 = "SELECT data FROM settings WHERE `name`='panelname'";
$result78 = $conn78->query($sql78);

if($result78->num_rows > 0) {

    while($row = $result78->fetch_assoc()) {

        $panelname = $row["data"];

    }
}

include("colors.php");

?>
<body>

<!-- ########## Body ############ -->

<!-- ########## Header ########## -->

<!-- ########## NavBar ########## -->

<div class="header">
    <h1><?php echo $panelname ?></h1> <!-- Hlavní Nadpis NavBaru -->
    <p><a href="../includes/logout.php"><i class="fa fa-sign-out" style="font-size:16px"></i> Odhlásit se</a></p> <!-- Odhlášení -->
</div>

<!-- ########## Konec NavBaru ##### -->

<!-- ########## SideBar ########### -->

<div class="sidenav">
    <a class="text1 bold" href="#"><i class="fa fa-sliders" style="font-size:17px"></i> 𝘼𝙙𝙢𝙞𝙣 𝙋𝙖𝙣𝙚𝙡</a> <!-- Nadpis SideBaru (Jméno zóny) -->
    <a class="text1 bold" href="#">Profil</a> <!-- Část s informacemi k Profilu -->
    <a class="text2" href="#"><i class="fa fa-user" style="font-size:17px"></i> Jméno: <?php echo $username ?> </a> <!-- Jméno přihlášeného uživatele -->
    <a class="text2" href="#"><i class="fa fa-tag" style="font-size:15px"></i> Rank: <?php

        if($rank == "admin") {
            echo "Admin";
        } else {
            echo "User";
        }

        ?></a> <!-- Pozice přihlášeného uživatele -->
    <a class="text2" href="#"><i class="fa fa-bank" style="font-size:15px"></i> Kredit: <?php echo $credit." ".$currency ?></a> <!-- Kredit přihlášeného uživatele -->
    <a class="text1 bold" href="#">Menu</a> <!-- Část s hlavním Menu -->
    <a class="text2" href="index.php"><i class="fa fa-tachometer" style="font-size:17px"></i> Dashboard </a> <!-- Odkaz na Dashboard -->
    <a class="text2" href="settings.php"><i class="fa fa-gear" style="font-size:17px"></i> Nastavení </a> <!-- Odkaz na Nastavení Panelu -->
    <a class="text2" href="users.php"><i class="fa fa-group" style="font-size:15px"></i> Uživatelé </a> <!-- Odkaz na správu Uživatelů -->
    <a class="text2" href="shop.php"><i class="fa fa-shopping-basket" style="font-size:15px"></i> Shop </a> <!-- Odkaz na nastavení E-Shopu -->

</div>

<!-- ########## Konec SideBaru ############## -->

<!-- ########## Konec Headeru ############### -->