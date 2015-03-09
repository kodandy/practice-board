<?php
require_once __DIR__ . "/vendor/autoload.php";

Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem(__DIR__ . "/templates");
$twig = new Twig_Environment($loader);
$template = $twig->loadTemplate("index.html");
echo $template->render(array("msg" => "Hello, world!"));