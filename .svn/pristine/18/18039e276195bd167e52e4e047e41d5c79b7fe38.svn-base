<?php
// connexion.php for  in /home/selatn_r/application_DWEB/site
// 
// Made by SELATNI Ryad
// Login   <selatn_r@etna-alternance.net>
// 
// Started on  Fri Oct 21 19:57:23 2016 SELATNI Ryad
// Last update Sat Oct 22 13:31:33 2016 SELATNI Ryad
//
?>

<!DOCTYPE html>
<HTML>
  <head>
    <meta charset="utf-8" />
    <title>Maquette</title>
  </head>
  <link rel="stylesheet" href="css_maquette.css"/>
  <body>
   <div class="titre"><h1>Connexion</h1></div>
   
   <form action="connexion.php" method="post">
   <h3>Login : <input type="text" name="login">
   <br />
   Password : <input type="password" name="pwd"><br /></h3>
   <input type="submit" value="Connexion">
   </form>

    <input type="button" name="lien fin" value="Back" onclick="self.location.href='monblog[selatn_r].html'"
	   style="background-color:red" style="color:white; font-weight:bold"onclick>
  </body>
</HTML>

<?php
   require('users_exist.php');
if (isset($_POST['login']) && isset($_POST['pwd']) && users_is($_POST['login']) == 1)
  {echo"my_condition\n";
    session_start ();
    $_SESSION['login'] = $_POST['login'];
    $_SESSION['pwd'] = $_POST['pwd'];
    header ('location: summary.php');
  }
else 
  echo 'No login\n';
?>
