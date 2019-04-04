<?php
// add_utilisateur.php for  in /home/selatn_r/application_DWEB/site
// 
// Made by SELATNI Ryad
// Login   <selatn_r@etna-alternance.net>
// 
// Started on  Fri Oct 21 16:18:02 2016 SELATNI Ryad
// Last update Sat Oct 22 13:31:08 2016 SELATNI Ryad
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
   <h3>Vous etes inscris</h3>
   <input type="button" name="lien fin" value="Back" onclick="self.location.href='monblog[selatn_r].html'"
   style="background-color:red" style="color:white; font-weight:bold"onclick>
   </body>
   </HTML>
   
<?php

require('../user_is_valid.php');
require('../fill_table.php');

function	new_users()
{
  if (word_pass($_POST['password']) == - 1)
    {
      echo "password invalid\n Between 8 and 16 letters";
      return 0;
    }
  $pass = word_pass($_POST['password']);
  add_in_users($_POST['login'],$pass,$_POST['email']);
}

new_users();

?>
