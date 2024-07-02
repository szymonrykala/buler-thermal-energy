<?php

declare(strict_types=1);

require_once("./handlers/tools.php");
require_once("./components/generators.php");

$s = new Session("MAILING_SESSION");


if (!in_array($_SERVER["SERVER_NAME"], ["127.0.0.1", "localhost", "macbook-air.home"])) {
    error_reporting(E_ERROR | E_PARSE);
}

$uri = $_SERVER["REQUEST_URI"];
// $query_string = $_SERVER["QUERY_STRING"];

$views_catalog = "./pages/";

$view = match (true) {
    str_starts_with($uri, "/magazyny-energii") => "magazyny/index.php",
    str_starts_with($uri, "/pompy-ciepla") => "pompy/index.php",
    str_starts_with($uri, "/w-realizacji") => "w-realizacji/index.php",
    str_starts_with($uri, "/pomiary-trt") => "trt/index.php",
    str_starts_with($uri, "/") => "home/index.php",
    true => "index.php"
};

require_once($views_catalog . $view);
