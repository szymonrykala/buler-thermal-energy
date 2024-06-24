<?php

declare(strict_types=1);

if (!in_array($_SERVER["SERVER_NAME"], ["127.0.0.1", "localhost"])) {
    error_reporting(E_ERROR | E_PARSE);
}

$uri = $_SERVER["REQUEST_URI"];
// $query_string = $_SERVER["QUERY_STRING"];

$views_catalog = "./views/";

$view = match (true) {
    str_starts_with($uri, "/magazyny-energii") => "magazyny_energii.php",
    str_starts_with($uri, "/pompy-ciepla") => "pompy_ciepla.php",
    str_starts_with($uri, "/w-realizacji") => "w_realizacji.php",
    str_starts_with($uri, "/pomiary-trt") => "pomiary_trt.php",
    str_starts_with($uri, "/") => "index.php",
    true => "index.php"
};


require_once($views_catalog . $view);
