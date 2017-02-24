<?php
class Installer{

    private $DB;
    public function __construct(){
        $this->DB = DB::getInstance();
    }

    public function createTableProjects(){
        $sql = "
        CREATE TABLE IF NOT EXISTS `".DB_PREFIX."projects` (
          `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
          `name` VARCHAR(255) NULL,
          `description` LONGTEXT NULL,
          `deadline` DATETIME NULL,
          `created` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
          `status` INT NULL COMMENT '0=active\n1=done\n2=deleted',
          PRIMARY KEY (`id`))
        ENGINE = InnoDB;
        ";
        $this->DB->query($sql);
        return true;
    }

    public function createTableRoles(){
        $sql = "
        CREATE TABLE IF NOT EXISTS `".DB_PREFIX."roles` (
          `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
          `name` VARCHAR(255) NULL,
          `created` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
          PRIMARY KEY (`id`))
        ENGINE = InnoDB;
        ";
        $this->DB->query($sql);
        return true;
    }


    public function createTableUsers(){
        $sql = "
        CREATE TABLE IF NOT EXISTS `".DB_PREFIX."users` (
          `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
          `role_id` BIGINT UNSIGNED NOT NULL,
          `name` VARCHAR(255) NULL,
          `email` VARCHAR(100) NULL,
          `password` VARCHAR(255) NULL,
          `birthdate` DATE NULL,
          `gender` INT NULL,
          `phone` VARCHAR(45) NULL,
          `address` VARCHAR(200) NULL,
          `about` LONGTEXT NULL,
          `status` INT NULL COMMENT '0=active\n1=disabled\n2=deleted',
          PRIMARY KEY (`id`))
        ENGINE = InnoDB;
        ";
        $this->DB->query($sql);
        return true;
    }


    public function createTableProjectUsers(){
        $sql = "
        CREATE TABLE IF NOT EXISTS `".DB_PREFIX."project_users` (
          `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
          `user_id` BIGINT UNSIGNED NOT NULL,
          `project_id` BIGINT UNSIGNED NOT NULL,
          `created` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
          PRIMARY KEY (`id`))
        ENGINE = InnoDB;
        ";
        $this->DB->query($sql);
        return true;
    }


    public function createTablePermissions(){
        $sql = "
        CREATE TABLE IF NOT EXISTS `".DB_PREFIX."permissions` (
          `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
          `name` VARCHAR(255) NULL,
          PRIMARY KEY (`id`))
        ENGINE = InnoDB;
        ";
        $this->DB->query($sql);
        return true;
    }


    public function createTableRolesPermissions(){
        $sql = "
        CREATE TABLE IF NOT EXISTS `".DB_PREFIX."roles_permissions` (
          `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
          `role_id` BIGINT NOT NULL,
          `permission_id` BIGINT UNSIGNED NOT NULL,
          PRIMARY KEY (`id`))
        ENGINE = InnoDB;
        ";
        $this->DB->query($sql);
        return true;
    }


    public function createTableProjectTasks(){
        $sql = "
        CREATE TABLE IF NOT EXISTS `".DB_PREFIX."project_tasks` (
          `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
          `project_id` BIGINT UNSIGNED NOT NULL,
          `user_id` BIGINT UNSIGNED NOT NULL,
          `name` VARCHAR(255) NULL,
          `start_time` DATETIME NULL,
          `end_time` DATETIME NULL,
          `totaltime` BIGINT UNSIGNED NOT NULL,
          `status` INT NULL COMMENT '0=active\n1=finished\n2=deleted',
          PRIMARY KEY (`id`))
        ENGINE = InnoDB;
        ";
        $this->DB->query($sql);
        return true;
    }

    public function createTableProjectTodo(){
        $sql = "
        CREATE TABLE IF NOT EXISTS `".DB_PREFIX."project_todo` (
          `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
          `project_id` BIGINT UNSIGNED NULL,
          `user_id` BIGINT UNSIGNED NULL,
          `name` VARCHAR(255) NULL,
          `status` INT NULL,
          PRIMARY KEY (`id`))
        ENGINE = InnoDB;
        ";
        $this->DB->query($sql);
        return true;
    }





    public function demoTableProjects(){
        $this->DB->query("INSERT INTO `".DB_PREFIX."projects` (name, description)VALUES(?, ?)", array("Demo Project", "This is a description"));
        return true;
    }

    public function demoTableRoles(){
        $this->DB->query("INSERT INTO `".DB_PREFIX."roles` (name)VALUES(?)", array("Administrator"));
        return true;
    }


    public function demoTableUsers($name, $email, $password, $gender){
        $this->DB->query("INSERT INTO `".DB_PREFIX."users` (role_id, name, email, password, gender)VALUES(?, ?, ?, ?, ?)", array(1, $name, $email, $password, $gender));
        return true;
    }


    public function demoTableProjectUsers(){
        $this->DB->query("INSERT INTO `".DB_PREFIX."project_users` (user_id, project_id)VALUES(?, ?)", array(1, 1));
        return true;
    }


    public function demoTablePermissions(){
        // $this->DB->query("INSERT INTO `".DB_PREFIX."roles` (name)VALUES(?)", array("Administrator"));
        return true;
    }


    public function demoTableRolesPermissions(){
        // $this->DB->query("INSERT INTO `".DB_PREFIX."roles` (name)VALUES(?)", array("Administrator"));
        return true;
    }


    public function demoTableProjectTasks(){
        $start_time = date("Y-m-d H:i:s");
        $end_time = date("Y-m-d H:i:s", strtotime('+2 hours'));
        $totaltime = Basics::secondsBetweenDates($start_time, $end_time);
        $this->DB->query("INSERT INTO `".DB_PREFIX."project_tasks` (project_id, user_id, name, start_time, end_time, totaltime)VALUES(?, ?, ?, ?, ?, ?)", array(1, 1, "Demo Task", $start_time, $end_time, $totaltime));
        return true;
    }

    public function demoTableProjectTodo(){
        $this->DB->query("INSERT INTO `".DB_PREFIX."project_todo` (project_id, user_id, name)VALUES(?, ?, ?)", array(1, 1, "Demo Todo"));
        return true;
    }



}
