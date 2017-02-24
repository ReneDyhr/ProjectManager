<?php
include_once '../config.php';
if(!INSTALLER){
    echo "<h1>INSTALLER IS DISABLED!</h1>";
    exit();
}

if(isset($_GET['install']) && $_GET['install']=="tables"){
    $Installer = new Installer();

    $Installer->createTableProjects();
    $Installer->createTableRoles();
    $Installer->createTableUsers();
    $Installer->createTableProjectUsers();
    $Installer->createTablePermissions();
    $Installer->createTableRolesPermissions();
    $Installer->createTableProjectTasks();
    $Installer->createTableProjectTodo();

    header("location:?install=demo");
}

if(isset($_GET['install']) && $_GET['install']=="demo"){
    $Installer = new Installer();

    $Installer->demoTableProjects();
    $Installer->demoTableRoles();
    $Installer->demoTableUsers($_SESSION['user'][0], $_SESSION['user'][1], $_SESSION['user'][2], $_SESSION['user'][3]);
    $Installer->demoTableProjectUsers();
    $Installer->demoTablePermissions();
    $Installer->demoTableRolesPermissions();
    $Installer->demoTableProjectTasks();
    $Installer->demoTableProjectTodo();

    header("location:?install=done");
}


if($_GET['install']=="done"){
    $data = file('../config.php');
    $data = array_map(function($data) {
        return stristr($data,"define( 'INSTALLER',   true );") ? "define( 'INSTALLER',   false );\n" : $data;
    }, $data);
    file_put_contents('../config.php', implode('', $data));
    
    header("location:/");
}

if(isset($_POST['save'])){

    try{
        $dbh = new pdo( "mysql:host={$_POST['databaseHost']};dbname={$_POST['databaseDatabase']}",
        $_POST['databaseName'],
        $_POST['databasePassword'],
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch(PDOException $ex){
        $errors[] = "Error in connection to database!";
    }

    $data = file('../config.php');
    $data = array_map(function($data) {
        return stristr($data,"define( 'DB_PREFIX',   '' );") ? "define( 'DB_PREFIX',   '{$_POST['databasePrefix']}' );\n" : $data;
    }, $data);
    file_put_contents('../config.php', implode('', $data));

    $data = file('../config.php');
    $data = array_map(function($data) {
        return stristr($data,"define( 'DB_NAME',     '' );") ? "define( 'DB_NAME',     '{$_POST['databaseDatabase']}' );\n" : $data;
    }, $data);
    file_put_contents('../config.php', implode('', $data));

    $data = file('../config.php');
    $data = array_map(function($data) {
        return stristr($data,"define( 'DB_USER',     '' );") ? "define( 'DB_USER',     '{$_POST['databaseName']}' );\n" : $data;
    }, $data);
    file_put_contents('../config.php', implode('', $data));

    $data = file('../config.php');
    $data = array_map(function($data) {
        return stristr($data,"define( 'DB_PASSWORD', '' );") ? "define( 'DB_PASSWORD', '{$_POST['databasePassword']}' );\n" : $data;
    }, $data);
    file_put_contents('../config.php', implode('', $data));

    $data = file('../config.php');
    $data = array_map(function($data) {
        return stristr($data,"define( 'DB_HOST',     '' );") ? "define( 'DB_HOST',     '{$_POST['databaseHost']}' );\n" : $data;
    }, $data);
    file_put_contents('../config.php', implode('', $data));

    $_SESSION['user'] = array($_POST['userFullName'], $_POST['userEmail'], Basics::hashPassword($_POST['userPassword']), $_POST['userGender']);
    header("location:?install=tables");

}


// $data = file('../config.php'); // reads an array of lines
// function replace_a_line($data) {
//     if (stristr($data, "define( 'DB_PREFIX',   'projects_' );")) {
//         return "replaement line!\n";
//     }
//     return $data;
// }
// $data = array_map('replace_a_line',$data);
// file_put_contents('../config.php', implode('', $data));


// $Installer->createTableProjects();
// $Installer->createTableRoles();
// $Installer->createTableUsers();
// $Installer->createTableProjectUsers();
// $Installer->createTablePermissions();
// $Installer->createTableRolesPermissions();
// $Installer->createTableProjectTasks();
// $Installer->createTableProjectTodo();


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


    <div class="container">
        <form method="post">
            <div class="row">
                <h1>Installer</h1>
                <div class="col-md-6">
                    <h2>Database</h2>

                    <div class="form-group">
                        <label>Prefix</label>
                        <input required value="project_" class="form-control" type="text" name="databasePrefix">
                    </div>
                    <div class="form-group">
                        <label>Host</label>
                        <input required value="localhost" class="form-control" type="text" name="databaseHost">
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input required class="form-control" type="text" name="databaseName">
                    </div>

                    <div class="form-group">
                        <label>Database</label>
                        <input required class="form-control" type="text" name="databaseDatabase">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input required class="form-control" type="password" name="databasePassword">
                    </div>
                </div>

                <div class="col-md-6">
                    <h2>User</h2>
                    <div class="form-group">
                        <label>Full Name</label>
                        <input required class="form-control" type="text" name="userFullName">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input required class="form-control" type="email" name="userEmail">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input required class="form-control" type="password" name="userPassword">
                    </div>

                    <div class="form-group">
                        <label>Gender</label>
                        <select name="userGender" class="form-control">
                            <option value="0">Male</option>
                            <option value="1">Female</option>
                        </select>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <input type="submit" value="Save" name="save" class="form-control btn btn-success">
                </div>
            </div>
        </form>
    </div>

</body>
</html>
