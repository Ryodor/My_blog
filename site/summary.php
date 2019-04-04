<?php
// summary.php for  in /home/selatn_r/application_DWEB/site
// 
// Made by SELATNI Ryad
// Login   <selatn_r@etna-alternance.net>
// 
// Started on  Fri Oct 21 20:36:23 2016 SELATNI Ryad
// Last update Sat Oct 22 13:32:39 2016 SELATNI Ryad
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
   <div class="titre"><h1>Summary</h1></div>
 
   </body>
   </HTML>

   <h2>
<?php
   session_start ();
if (isset($_SESSION['login']) && isset($_SESSION['pwd']))
  echo 'Welcome '.$_SESSION['login'].'. Here you have access to all articles';
else
  header ('location: connexion.php');
?>
</h2>

<br />
<input type="button" name="inscription" value="Inscription" onclick="self.location.href='inscription.html'"
  style="background-color:red" style="color:white; font-weight:bold"onclick>
  <br />
  <input type="button" name="lien fin" value="Back" onclick="self.location.href='monblog[selatn_r].html'"
  style="background-color:red" style="color:white; font-weight:bold"onclick>