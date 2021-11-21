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
    <link rel="stylesheet" href="../css/admin/users.css"> <!-- Import CSS Souboru -->
    <title>GalaxyCode | Uživatelé</title> <!-- Jméno Karty v Prohlížeči -->

    <!-- ##### Konec Hlavičky ####### -->

</head>

<?php include("../includes/navbar.php"); ?>

  <div class="main">
    <div class="undertabs">
        <h1>Správa Uživatelů</h1> <!-- Nadpis Velké Karty -->
    </div>
    <div class="settings_card">
        <h1>Upravit Kredit</h1> <!-- Upravení Kreditů -->
        <form action="users.php" method="post">
            <input class="center" type="text" name="credit1" placeholder="💎Kredity" required><br>
            <input class="center" type="text" name="userid1" placeholder="📋ID Účtu" required><br>
            <input class="center" type="submit" name="submit1" value="Uložit"> <!-- Uložení -->
        </form>
    </div>
  <?php // ##### Upravení Kreditů ##### //

      if(isset($_POST["submit1"])) {

          $credit1 = $_POST["credit1"];
          $userid1 = $_POST["userid1"];

          include("../includes/db.php");

          $conn1 = new mysqli($db_hostname, $db_username, $db_password, $db_database);

          if ($conn1->connect_error) {
              die("[ERROR] Nepodařilo se spojit s databází! <br> " . $conn1->connect_error);
          }

          $sql1 = "UPDATE users SET credit='$credit1' WHERE id=$userid1";
          $result1 = $conn1->query($sql1);

      }
  ?>
    <div class="settings_card">
        <h1>Upravit Jméno</h1> <!-- Upravení Jména -->
        <form action="users.php" method="post">
            <input class="center" type="text" name="username2" placeholder="🔖Nové Jméno" required><br>
            <input class="center" type="text" name="userid2" placeholder="📋ID Účtu" required><br>
            <input class="center" type="submit" name="submit2" value="Uložit"> <!-- Uložení -->
        </form>
    </div>
      <?php // ##### Upravení Jména ##### //

      if(isset($_POST["submit2"])) {

          $username2 = $_POST["username2"];
          $userid2 = $_POST["userid2"];

          include("../includes/db.php");

          $conn2 = new mysqli($db_hostname, $db_username, $db_password, $db_database);

          if ($conn2->connect_error) {
              die("[ERROR] Nepodařilo se spojit s databází! <br> " . $conn2->connect_error);
          }

          $sql2 = "UPDATE users SET username='$username2' WHERE id=$userid2";
          $result2 = $conn2->query($sql2);
      }
      ?>
    <div class="settings_card">
        <h1>Upravit Heslo</h1> <!-- Upravení Hesla -->
        <form action="users.php" method="post">
            <input class="center" type="password" name="password3" placeholder="🔒Nové Heslo" required><br>
            <input class="center" type="text" name="userid3" placeholder="📋ID Účtu" required><br>
            <input class="center" type="submit" name="submit3" value="Uložit"> <!-- Uložení -->
        </form>
    </div>
      <?php // ##### Upravení Hesla ##### //

      if(isset($_POST["submit3"])) {

          $password3 = $_POST["password3"];
          $userid3 = $_POST["userid3"];

          include("../includes/db.php");

          $conn3 = new mysqli($db_hostname, $db_username, $db_password, $db_database);

          if ($conn3->connect_error) {
              die("[ERROR] Nepodařilo se spojit s databází! <br> " . $conn3->connect_error);
          }

          $sql3 = "UPDATE users SET password='$password3' WHERE id=$userid3";
          $result3 = $conn3->query($sql3);
      }
      ?>
    <div class="settings_card">
        <h1>Upravit Rank</h1> <!-- Upravení Ranku -->
        <form action="users.php" method="post">
            <input class="center" type="text" name="rank4" placeholder="👑Rank" required><br>
            <input class="center" type="text" name="userid4" placeholder="📋ID Účtu" required><br>
            <input class="center" type="submit" name="submit4" value="Uložit"> <!-- Uložení -->
        </form>
    </div>
      <?php // ##### Upravení Ranku ##### //

      if(isset($_POST["submit4"])) {

          $rank4 = $_POST["rank4"];
          $userid4 = $_POST["userid4"];

          include("../includes/db.php");

          $conn4 = new mysqli($db_hostname, $db_username, $db_password, $db_database);

          if ($conn4->connect_error) {
              die("[ERROR] Nepodařilo se spojit s databází! <br> " . $conn4->connect_error);
          }

          $sql4 = "UPDATE users SET rank='$rank4' WHERE id=$userid4";
          $result4 = $conn4->query($sql4);
      }
      ?>
    <div class="undertabs2">
        <h1>Seznam Uživatelů</h1> <!-- Nadpis Velké Karty -->
    </div>
    <table> <!-- Seznam Uživatelů -->
        <tr>
          <th>ID Účtu</th> 
          <th>Jméno</th>
          <th>Kredit</th>
          <th>Rank</th>
        </tr>
        <?php

        include("../includes/db.php");

        $conn = new mysqli($db_hostname, $db_username, $db_password, $db_database);

        if ($conn->connect_error) {
            die("[ERROR] Nepodařilo se spojit k databází! <br> " . $conn->connect_error);
        }

        $sql = "SELECT * FROM `users` WHERE 1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {

                 echo "<tr>";
                 echo "<td>".$row["id"]."</td>";
                 echo "<td>".$row["username"]."</td>";
                 echo "<td>".$row["credit"]."</td>";
                 echo "<td>".$row["rank"]."</td>";
                 echo "</tr>";
            }
        }
        ?>
      </table>
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