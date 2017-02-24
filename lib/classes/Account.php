<?php
class Account{
    private $DB;
    public function __construct(){
        $this->DB = DB::getInstance();
    }


}
