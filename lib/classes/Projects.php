<?php
class Projects{
    private $DB;
    public function __construct(){
        $this->DB = DB::getInstance();
    }

    public function createProject(int $user_id, string $name, string $deadline, longtext $description){
        $this->DB->query("INSERT INTO ".DB_PREFIX."projects (name, description, deadline)VALUES(?, ?, ?)", array($name, $description, $deadline));
        $this->DB->query("SELECT * FROM projects");
        $project_id = $this->DB->last();

        $this->DB->query("INSERT INTO ".DB_PREFIX."project_users (user_id, project_id)VALUES(?, ?)", array($user_id, $project_id));
    }

    public function getUserProjects(int $user_id){
        $query = $this->DB->query("SELECT * FROM ".DB_PREFIX."project_users WHERE user_id = ?", array($user_id))->results();
        return $query;
    }

    public function getProjectUsers(int $project_id){
        $query = $this->DB->query("SELECT * FROM ".DB_PREFIX."project_users WHERE project_id = ?", array($project_id))->results();
        return $query;
    }

    public function getProjects(int $project_id = 0){
        if($project_id==0){
            $query = $this->DB->query("SELECT * FROM ".DB_PREFIX."projects WHERE (status IN (0, 1) OR status IS NULL)")->results();
        }else{
            $query = $this->DB->query("SELECT * FROM ".DB_PREFIX."projects WHERE (status IN (0, 1) OR status IS NULL) AND id = ?", array($project_id))->results()[0];
        }
        return $query;
    }


    public function getProjectTotalTime(int $project_id, int $user_id){
        $query = $this->DB->query("SELECT sum(totaltime) as totaltime FROM ".DB_PREFIX."project_tasks WHERE (status IN (0, 1) OR status IS NULL)  AND project_id = ? AND user_id = ?", array($project_id, $user_id))->results()[0]->totaltime;
        return $query;
    }
}
