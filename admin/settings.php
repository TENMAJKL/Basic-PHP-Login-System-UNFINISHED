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
    <link rel="stylesheet" href="../css/admin/settings.css"> <!-- Import CSS Souboru -->
    <title>GalaxyCode | Nastavení</title> <!-- Jméno Karty v Prohlížeči -->

    <!-- ##### Konec Hlavičky ####### -->

</head>

<?php include("../includes/navbar.php"); ?>


<!-- ########################################################################################### -->
  <div class="main">
    <div class="undertabs">
        <h1>Obecné Nastavení</h1> <!-- Nadpis Velké Karty -->
    </div>

      <!-- ########################################################################################### -->
    <div class="settings_card">
        <h1>Jméno Panelu</h1> <!-- Jméno Panelu -->
        <form action="settings.php" method="post">
            <input class="center" type="text" name="panelname" placeholder="🔖Jméno"><br>
            <input class="center" type="submit" name="submit1" value="Uložit">
        </form>
    </div>
      <?php // ### Jméno Panelu ### \\

      if(isset($_POST["submit1"])) {

          $panelname1 = $_POST["panelname"];
          include("../includes/db.php");

          $conn1 = new mysqli($db_hostname, $db_username, $db_password, $db_database);

          if ($conn1->connect_error) {
              die("[ERROR] Nepodařilo se spojit s databází! <br> " . $conn1->connect_error);
          }

          $sql1 = "UPDATE settings SET data='$panelname1' WHERE name='panelname'";
          $result1 = $conn1->query($sql1);

      }

      ?>
      <!-- ########################################################################################### -->
    <div class="settings_card">
      <h1>Pozadí Panelu</h1> <!-- Pozadí Panelu -->
      <form action="settings.php" method="post">
          <input class="center" type="text" name="panelbackground" placeholder="🎨HEX Kód"><br>
          <input class="center" type="submit" name="submit2" value="Uložit">
      </form>
    </div>
      <?php // ### Pozadí Panelu ### \\

      if(isset($_POST["submit2"])) {

          $panelbackground1 = $_POST["panelbackground"];
          include("../includes/db.php");

          $conn2 = new mysqli($db_hostname, $db_username, $db_password, $db_database);

          if ($conn2->connect_error) {
              die("[ERROR] Nepodařilo se spojit s databází! <br> " . $conn2->connect_error);
          }

          $sql2 = "UPDATE settings SET data='$panelbackground1' WHERE name='panelbackground'";
          $result2 = $conn2->query($sql2);

      }

      ?>
      <!-- ########################################################################################### -->
    <div class="settings_card">
      <h1>Pozadí Karet</h1> <!-- Pozadí Karet -->
      <form action="settings.php" method="post">
          <input class="center" type="text" name="cardbackground" placeholder="🎨HEX Kód"><br>
          <input class="center" type="submit" name="submit3" value="Uložit">
      </form>
    </div>
      <?php // ### Pozadí Karet ### \\

      if(isset($_POST["submit3"])) {

          $cardbackground1 = $_POST["cardbackground"];
          include("../includes/db.php");

          $conn3 = new mysqli($db_hostname, $db_username, $db_password, $db_database);

          if ($conn3->connect_error) {
              die("[ERROR] Nepodařilo se spojit s databází! <br> " . $conn3->connect_error);
          }

          $sql3 = "UPDATE settings SET data='$cardbackground1' WHERE name='cardbackground'";
          $result3 = $conn3->query($sql3);

      }

      ?>
      <!-- ########################################################################################### -->
    <div class="settings_card">
      <h1>Barva Textu</h1> <!-- Barva Textu -->
      <form action="settings.php" method="post">
          <input class="center" type="text" name="textcolor" placeholder="🎨HEX Kód"><br>
          <input class="center" type="submit" name="submit4" value="Uložit">
      </form>
    </div>
      <?php // ### Barva Textu ### \\

      if(isset($_POST["submit4"])) {

          $textcolor1 = $_POST["textcolor"];
          include("../includes/db.php");

          $conn4 = new mysqli($db_hostname, $db_username, $db_password, $db_database);

          if ($conn4->connect_error) {
              die("[ERROR] Nepodařilo se spojit s databází! <br> " . $conn4->connect_error);
          }

          $sql4 = "UPDATE settings SET data='$textcolor1' WHERE name='textcolor'";
          $result4 = $conn4->query($sql4);

      }

      ?>
      <!-- ########################################################################################### -->

    <div class="undertabs2">
      <h1>Nastavení Funkcí</h1> <!-- Nadpis Velké Karty -->
    </div>

      <!-- ########################################################################################### -->
    <div class="settings_card">
      <h1>Povolit Registraci</h1> <!-- Povolit Registraci -->
      <form action="settings.php" method="post">
          <input class="center" type="text" name="registerenabled" placeholder="⚙️ano / ne"><br>
          <input class="center" type="submit" name="submit5" value="Uložit">
      </form>
    </div>
      <?php // ### Povolit Registraci ### \\

      if(isset($_POST["submit5"])) {

          $registerenabled1 = $_POST["registerenabled"];
          include("../includes/db.php");

          $conn5 = new mysqli($db_hostname, $db_username, $db_password, $db_database);

          if ($conn5->connect_error) {
              die("[ERROR] Nepodařilo se spojit s databází! <br> " . $conn5->connect_error);
          }

          $sql5 = "UPDATE settings SET data='$registerenabled1' WHERE name='registerenabled'";
          $result5 = $conn5->query($sql5);

      }

      ?>
      <!-- ########################################################################################### -->
    <div class="settings_card">
      <h1>Povolit Kredity</h1> <!-- Povolit Kredity -->
      <form action="settings.php" method="post">
          <input class="center" type="text" name="creditsenabled" placeholder="⚙️Ano / Ne"><br>
          <input class="center" type="submit" name="submit6" value="Uložit">
      </form>
    </div>
      <?php // ### Povolit Kredity ### \\

      if(isset($_POST["submit6"])) {

          $creditsenabled1 = $_POST["creditsenabled"];
          include("../includes/db.php");

          $conn6 = new mysqli($db_hostname, $db_username, $db_password, $db_database);

          if ($conn6->connect_error) {
              die("[ERROR] Nepodařilo se spojit s databází! <br> " . $conn6->connect_error);
          }

          $sql6 = "UPDATE settings SET data='$creditsenabled1' WHERE name='creditsenabled'";
          $result6 = $conn6->query($sql6);

      }

      ?>
      <!-- ########################################################################################### -->
    <div class="settings_card">
      <h1>Jednotka Kreditů</h1> <!-- Jednotka Kreditů -->
      <form action="settings.php" method="post">
          <input class="center" type="text" name="currency" placeholder="💶Kč"><br>
          <input class="center" type="submit" name="submit7" value="Uložit">
      </form>
    </div>
      <?php // ### Jednotka Kreditů ### \\

      if(isset($_POST["submit7"])) {

          $currency1 = $_POST["currency"];
          include("../includes/db.php");

          $conn7 = new mysqli($db_hostname, $db_username, $db_password, $db_database);

          if ($conn7->connect_error) {
              die("[ERROR] Nepodařilo se spojit s databází! <br> " . $conn7->connect_error);
          }

          $sql7 = "UPDATE settings SET data='$currency1' WHERE name='currency'";
          $result7 = $conn7->query($sql7);

      }

      ?>
      <!-- ########################################################################################### -->
    <div class="settings_card">
      <h1>Povolit E-Shop</h1> <!-- Povolit E-Shop -->
      <form action="settings.php" method="post">
          <input class="center" type="text" name="eshopenabled" placeholder="⚙️ano / ne"><br>
          <input class="center" type="submit" name="submit8" value="Uložit">
      </form>
    </div>
      <?php // ### Povolit E-Shop ### \\

      if(isset($_POST["submit8"])) {

          $eshopenabled1 = $_POST["eshopenabled"];
          include("../includes/db.php");

          $conn8 = new mysqli($db_hostname, $db_username, $db_password, $db_database);

          if ($conn8->connect_error) {
              die("[ERROR] Nepodařilo se spojit s databází! <br> " . $conn8->connect_error);
          }

          $sql8 = "UPDATE settings SET data='$eshopenabled1' WHERE name='eshopenabled'";
          $result8 = $conn8->query($sql8);

      }

      ?>

  </div>

  <!-- ########## Konec Kart a astavení ########### -->

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