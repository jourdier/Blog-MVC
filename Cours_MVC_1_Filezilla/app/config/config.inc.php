<?php

	if(!defined("_BASE_URL")) die("Ressource interdite");
	
	define("PAGE_LANG", "fr");
	define("PAGE_CHARSET", "utf-8");

	define("DEFAULT_MODULE", "article");
	define("DEFAULT_ACTION", "index");

	define("PAGINATION_ARTICLES", 3);
	define("PAGINATION_USERS", 5);
	define("PAGINATION_COMMENTAIRES", 5);

	define("USER_ADMIN", 1);
	define("USER_LAMBDA", 0);

	define("SALT", "gt5zfgty7qg!yegh8");

	//Constante qui définit l'environnement
	define("ENV", "DEV");