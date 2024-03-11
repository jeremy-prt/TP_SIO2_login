<?php
session_start();
require "Controller/controller.php";


if (isset($_GET["action"])) {
    if ($_GET["action"] == "hachage") {
        hachage();
    }
    if ($_GET["action"] == "createcompte") {
        createcompte($_POST["nom"], $_POST["motDePasse"]);
    }

    if ($_GET["action"] == "login") {
        logincompte($_POST["nom"], $_POST["motDePasse"]);
    }

} else {
    require "menu_principal.php";
}
