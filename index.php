<?php
session_name("formulaires-php");
session_start();

// page par défaut
$page = "home";

if (isset($_GET["page"]))
    $page = $_GET["page"];

require_once "core/header.php";
// Affichage des pages
switch ($page) {
    case "home":
        require_once __DIR__ . "/core/modules/home.php";
        break;
    case "cv":
        require_once "core/modules/cv.php";
        break;
    case "porfolio":
        require_once "core/modules/porfolio.php";
        break;
    case "about":
        require_once "core/modules/about.php";
        break;
    case "contact":
        require_once "core/modules/contact.php";
        break;
    default:
        require_once "core/modules/404.php";
        break;
}

require_once "core/footer.php";
