##
## READ_ME.txt for  in /home/selatn_r/application_DWEB
## 
## Made by SELATNI Ryad
## Login   <selatn_r@etna-alternance.net>
## 
## Started on  Thu Oct 20 10:03:16 2016 SELATNI Ryad
## Last update Thu Oct 20 15:01:07 2016 SELATNI Ryad
##

STUCTURE BASE DE DONNEE : blog

-users	  -id_users;
	  -login;
	  -password;
	  -email;

-article  -id_art;
	  -titre;
	  -art_txt;
	  -picture;
	  -date_art;

-liked	  -id_art;
	  -id_users;
	  -like_art;

-comment  -id_com;
	  -id_users;
	  -id_art;
	  -com;



PAGES WEB : site

ACCEUIL : connexion -> connect users;
	  inscription -> formulaire;
	  error -> BAD_PAGE;

BAD_PAGE : again -> ACCEUIL;
	   quit -> google.com;

SUMMARY :  DB -> liste_art;
	   deconnexion -> ACCEUIL (quit database);
	   art_x -> ARTICLE_X;

ARTICLE :  DB -> art_x;
	   deconnexion -> ACCEUIL (quit database);
	   back -> SUMMARY;
