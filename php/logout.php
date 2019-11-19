<?php

session_start();

$_SESSION['login'] = "false";

header('Location: pagina-inicial.php');