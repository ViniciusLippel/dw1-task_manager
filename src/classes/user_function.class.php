<?php

include_once "../interfaces/table.interface.php";

class user_function implements Table{
    
    private $user_id;
    private $function_id;
    private $planning_board_id;

    public function __construct($user_id, $function_id, $planning_board_id){
        $this->setUser_id($user_id);
        $this->setFunction_id($function_id);
        $this->setPlanning_board_id($planning_board_id);
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

    // DB manipulation methods
	public function insertQuery(){
		return "INSERT INTO user_function (user_id, function_id, planning_board_id)
				VALUES ('".$this->getUser_id()."','".$this->getFunction_id()."','".$this->getPlanning_board_id()."')";
	}

	public function deleteQuery(){
		return "DELETE FROM user_function
				WHERE user_id = ".$this->getUser_id()." AND function_id = ".$this->getFunction_id()." AND planning_board_id = ".$this->getPlanning_board_id();
	}

    public function readQuery(){

	}

	public function updateQuery(){

	}
}

?>