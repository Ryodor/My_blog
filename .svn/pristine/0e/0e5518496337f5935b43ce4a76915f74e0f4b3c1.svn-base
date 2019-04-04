<?php
// user_is_valid.php for  in /home/selatn_r/DWEB-J3/selatn_r
// 
// Made by SELATNI Ryad
// Login   <selatn_r@etna-alternance.net>
// 
// Started on  Wed Oct 19 16:59:47 2016 SELATNI Ryad
// Last update Fri Oct 21 17:49:25 2016 SELATNI Ryad
//

function	login($pseudo)
{
  if (ctype_alnum($pseudo) == FALSE || isset($pseudo) == FALSE || strlen($pseudo) < 1)
    return -1;
  return 1;
}

function	cryptage($pass)
{
  $cle_taille = mcrypt_module_get_algo_key_size(MCRYPT_3DES);
  $iv_taille = mcrypt_get_iv_size(MCRYPT_3DES, MCRYPT_MODE_NOFB);
  $iv = mcrypt_create_iv($iv_taille, MCRYPT_RAND);

  $cle ="Cryptage Key I have to do more than twenty-four characters";
  $cle = substr($cle, 0, $cle_taille);

  $message_crypte = mcrypt_encrypt(MCRYPT_3DES, $cle, $pass, MCRYPT_MODE_NOFB, $iv);
  return $message_crypte;
}

function	word_pass($pass)
{
  if (isset($pass) == FALSE || strlen($pass) < 8 || strlen($pass) > 16)
    return - 1;
  $message_crypte = cryptage($pass);
  return $message_crypte;
}

function	email($mail)
{
  if (filter_var($mail, FILTER_VALIDATE_EMAIL) == FALSE)
    return - 1;
}