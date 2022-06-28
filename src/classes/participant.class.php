<?php

class participant{

    private $user_id;
    private $task_id;

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
}

?>