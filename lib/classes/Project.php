<?php
class Project{
    private $DB;
    public function __construct(){
        $this->DB = DB::getInstance();
    }
}
