<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
/* MySQL settings - LOCALHOST */
define( 'DB_NAME',     'projectmanager' );
define( 'DB_USER',     'root' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST',     'localhost' );

date_default_timezone_set('Europe/Copenhagen');


spl_autoload_register(function ($class_name) {
    include 'lib/classes/'. $class_name . '.php';
});

$user_id=1;


$limit=10;
$page = 1;
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}
$limitT = (($page * $limit) - $limit);
$pagination = $limit;

function shorten_string($string, $wordsreturned){
    $retval = $string;
    $string = preg_replace('/(?<=\S,)(?=\S)/', ' ', $string);
    $string = str_replace("\n", " ", $string);
    $array = explode(" ", $string);
    if (count($array)<=$wordsreturned)
    {
        $retval = $string;
    }
    else
    {
        array_splice($array, $wordsreturned);
        $retval = implode(" ", $array)."...";
    }
    return $retval;
}

function slugify($text){
    $text = preg_replace('~[^\pL\d]+~u', '-', $text);
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    $text = preg_replace('~[^-\w]+~', '', $text);
    $text = trim($text, '-');
    $text = preg_replace('~-+~', '-', $text);
    $text = strtolower($text);
    if (empty($text)) {
        return 'n-a';
    }
    return $text;
}
