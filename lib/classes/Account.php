<?php
class Account{
    private $DB;
    public function __construct(){
        $this->DB = DB::getInstance();
    }


    public function get(int $user_id = 0){
        if($user_id==0){
            $query = $this->DB->query("SELECT * FROM ".DB_PREFIX."users WHERE (status IN (0,1) OR status IS NULL)")->results();
        }else{
            $query = $this->DB->query("SELECT * FROM ".DB_PREFIX."users WHERE (status IN (0,1) OR status IS NULL) AND id = ?", array($user_id))->results()[0];
        }
        return $query;
    }

}
