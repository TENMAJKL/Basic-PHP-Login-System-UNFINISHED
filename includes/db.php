<?php // GalaxyCode Panel v1.0 by Marek_p

// Připojení k MySQL databázi pro ukládání dat o oživatelích

// #########################
$db_hostname = "x"; // Hostname vaší MySQL databáze, například localhost:3306
$db_username = "x"; // Uživatelské jméno účtu MySQL účtu s root právy pro správu databáze
$db_password = "x"; // Heslo k účtu výše
$db_database = "x"; // Jméno databáze (ne tabulky)
// #########################

// Doporučená struktura tabulky pro správné fungování:

// Jméno tabulky "users", sloupce:

  //  id         INT        A_I zaškrtnuté, množina libovolná, ale doporčuji min. 3
  //  username   VARCHAR    množina libovolná, ale určuje maximální počet písmen, doporučuji min. 15
  //  password   VARCHAR    množina libovolná, ale určuje maximální počet písmen, doporučuji min. 20
  //  credit     INT        množina libivolná, ale určuje maxicmální počet cifer, doporučuji min. 5
  //  rank       VARCHAR    množina libovolná, ale určuje maximální počet písmen, doporučuji min. 10

// Discord podpora: https://dsc.gg/galaxycode  nebo  🔥𝕄𝕒𝕣𝕖𝕜_𝕡🔥#4775

?>
