<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
define( 'INSTALLER',   false );
/* MySQL settings */
define( 'DB_PREFIX',   'project_' );
define( 'DB_NAME',     'projectmanager' );
define( 'DB_USER',     'root' );
define( 'DB_PASSWORD', 'root' );
define( 'DB_HOST',     'localhost' );

date_default_timezone_set('Europe/Copenhagen');


spl_autoload_register(function ($class_name) {
    include 'lib/classes/'. $class_name . '.php';
});

$user_id=1;

$Projects = new Projects();
$Account = new Account();

$limit=10;
$page = 1;
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}
$limitT = (($page * $limit) - $limit);
$pagination = $limit;
