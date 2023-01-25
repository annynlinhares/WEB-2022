<?php


include_once("helpers/url.php");
include_once("data/posts.php");
include_once("data/categories.php");


?>

<!DOCTYPE html>

<html lang="pt-br">

        <head>

      	   <meta charset="utf-8">
      	   <title>Nosso Blog PW</title>
      	   <meta name="viewport" content="width=device-width, intial-escale=1.0">

            <!- Estilo do projeto ->

            <link rel="stylesheet" type="text/css" href="<?= $BASE_URL ?>/css/style.css">

            <!- Google fonts ->

            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&family= :wght@200&family=Oswald:wght@300&family=Raleway:wght@300&display=swap" rel="stylesheet">

      	</head>

            <body>

                <header>
                 
                    <a href="<?=$BASE_URL ?>" id="logo">

                       <img src="<?=$BASE_URL ?>../Blog_Anny/img/logo.png" alt="Nosso Blog PW">

                    </a>
                  
                 <nav>
                     
                   <ul id="navbar">
                      
                      <li> <a href="<?=$BASE_URL ?>" class="nav-link"> Home </a> </li>
                      <li> <a href="############" class="nav-link"> Categoria </a> </li>
                      <li> <a href="############" class="nav-link"> Sobre </a> </li>
                      <li> <a href="############" class="nav-link"> Contato </a> </li>   

                   </ul>

                 </nav>      

                </header>

            </body>
      	