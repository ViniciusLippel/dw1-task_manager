<?php

include_once "../interfaces/table.interface.php";

class participant implements Table{

    private $user_id;
    private $task_id;

    public function __construct($user_id, $task_id){
        $this->setUser_id($user_id);
        $this->setTask_id($task_id);
    }

    /**
     * Get the value of user_id
     */ 
    public function getUser_id()
    {
        return $this->user_id;
    }

    /**
     * Set the value of user_id
     *
     * @return  self
     */ 
    public function setUser_id($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * Get the value of task_id
     */ 
    public function getTask_id()
    {
        return $this->task_id;
    }

    /**
     * Set the value of task_id
     *
     * @return  self
     */ 
    public function setTask_id($task_id)
    {
        $this->task_id = $task_id;

        return $this;
    }

    // DB manipulation methods
	public function insertQuery(){
		return "INSERT INTO participant (user_id, task_id)
				VALUES ('".$this->getUser_id()."','".$this->getTask_id()."')";
	}

	public function deleteQuery(){
		return "DELETE FROM participant
				WHERE user_id = ".$this->getUser_id()." AND task_id = ".$this->getTask_id();
	}

    public function readQuery(){

	}

	public function updateQuery(){

	}
}

?>