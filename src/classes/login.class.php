<?php

include_once "../interfaces/table.interface.php";

class login implements Table{

    private $user_id;
    private $password;


    public function __construct($user_id, $password){
        $this->setUser_id($user_id);
        $this->setPassword($password);
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
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    // DB manipulation methods
	public function insertQuery(){
		return "INSERT INTO login (user_id, password)
				VALUES ('".$this->getUser_id()."','".$this->getPassword()."')";
	}

	public function deleteQuery(){
		return "DELETE FROM login
				WHERE user_id = ".$this->getUser_id();
	}

    public function readQuery(){

	}

	public function updateQuery(){

	}
}

?>