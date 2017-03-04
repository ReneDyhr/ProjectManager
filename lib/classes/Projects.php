<?php
class Projects{
    private $DB;
    public function __construct(){
        $this->DB = DB::getInstance();
    }

    public function createProject(int $userId, $name, $deadline, $description){
        $this->DB->query("INSERT INTO ".DB_PREFIX."projects (name, description, deadline)VALUES(?, ?, ?)", array($name, $description, $deadline));
        $this->DB->query("SELECT * FROM ".DB_PREFIX."projects");
        $projectId = $this->DB->last()->id;
        $this->DB->query("INSERT INTO ".DB_PREFIX."project_users (user_id, project_id)VALUES(?, ?)", array($userId, $projectId));
        return true;
    }

    public function getUserProjects(int $userId){
        $query = $this->DB->query("SELECT * FROM ".DB_PREFIX."project_users WHERE user_id = ?", array($userId))->results();
        return $query;
    }

    public function checkUserToProject(int $userId, int $projectId){
        $this->DB->query("SELECT * FROM ".DB_PREFIX."project_users WHERE user_id = ? AND project_id = ?", array($userId, $projectId))->results();
        if($this->DB->count()>0){
            return true;
        }else{
            return false;
        }
    }

    public function getProjectUsers(int $projectId){
        $query = $this->DB->query("SELECT * FROM ".DB_PREFIX."project_users WHERE project_id = ?", array($projectId))->results();
        return $query;
    }

    public function getProjects(int $projectId = 0){
        if($projectId==0){
            $query = $this->DB->query("SELECT * FROM ".DB_PREFIX."projects WHERE (status IN (0, 1) OR status IS NULL)")->results();
        }else{
            $query = $this->DB->query("SELECT * FROM ".DB_PREFIX."projects WHERE (status IN (0, 1) OR status IS NULL) AND id = ?", array($projectId))->results()[0];
        }
        return $query;
    }


    public function getProjectTotalTime(int $projectId, int $userId){
        $query = $this->DB->query("SELECT sum(totaltime) as totaltime, count(*) as totaltasks FROM ".DB_PREFIX."project_tasks WHERE (status IN (0, 1) OR status IS NULL)  AND project_id = ? AND user_id = ?", array($projectId, $userId))->results()[0];
        return $query;
    }



    public function createTask(int $projectId, int $userId, $name){
        $start_time = date("Y-m-d H:i:s");
        $this->DB->query("INSERT INTO ".DB_PREFIX."project_tasks (project_id, user_id, name, start_time)VALUES(?, ?, ?, ?)", array($projectId, $userId, $name, $start_time));
        return true;
    }

    public function getTasks(int $projectId, int $taskId = 0){
        if($taskId==0){
            $query = $this->DB->query("SELECT * FROM ".DB_PREFIX."project_tasks WHERE project_id = ? ORDER BY id DESC", array($projectId))->results();
        }else{
            $query = $this->DB->query("SELECT * FROM ".DB_PREFIX."project_tasks WHERE project_id = ? AND id = ? ORDER BY status ASC", array($projectId, $taskId))->results()[0];
        }
        return $query;
    }

    public function stopTask(int $projectId, int $taskId){
        $startTime = $this->getTasks($projectId, $taskId)->start_time;
        $endTime = date("Y-m-d H:i:s");
        $this->DB->query("UPDATE ".DB_PREFIX."project_tasks SET status = 1, end_time = ?, totaltime = ? WHERE project_id = ? AND id = ?", array($endTime, Basics::secondsBetweenDates($startTime, $endTime),$projectId, $taskId));
        return true;
    }

    public function deleteTask(int $projectId, int $taskId){
        $startTime = $this->getTasks($projectId, $taskId)->start_time;
        $endTime = date("Y-m-d H:i:s");
        $this->DB->query("UPDATE ".DB_PREFIX."project_tasks SET status = 2, end_time = ?, totaltime = ? WHERE project_id = ? AND id = ?", array($endTime, Basics::secondsBetweenDates($startTime, $endTime),$projectId, $taskId));
        return true;
    }

    public function checkTask(int $projectId, int $taskId){
        $this->DB->query("SELECT * FROM ".DB_PREFIX."project_tasks WHERE project_id = ? AND id = ?", array($projectId, $taskId))->results();
        if($this->DB->count()>0){
            return true;
        }else{
            return false;
        }
    }
}
