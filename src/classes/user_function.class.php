<?php

class user_function{
    
    private $user_id;
    private $function_id;
    private $planning_board_id;

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
     * Get the value of function_id
     */ 
    public function getFunction_id()
    {
        return $this->function_id;
    }

    /**
     * Set the value of function_id
     *
     * @return  self
     */ 
    public function setFunction_id($function_id)
    {
        $this->function_id = $function_id;

        return $this;
    }

    /**
     * Get the value of planning_board_id
     */ 
    public function getPlanning_board_id()
    {
        return $this->planning_board_id;
    }

    /**
     * Set the value of planning_board_id
     *
     * @return  self
     */ 
    public function setPlanning_board_id($planning_board_id)
    {
        $this->planning_board_id = $planning_board_id;

        return $this;
    }
}

?>