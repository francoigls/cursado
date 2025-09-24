<?php

 require_once("ClassUsuario.php");

 $objUsuario1 = new Usuario("Franco iglesias", "franco@info.com", "admin");

 echo $objUsuario1->getPerfil();