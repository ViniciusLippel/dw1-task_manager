<?php

include_once "../interfaces/table.interface.php";

class project implements Table{
    
    private $id;
    private $name;
    private $description;

    public function __construct($id, $name, $description){
        $this->setId($id);
        $this->setName($name);
        $this->setDescription($description);
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    // DB manipulation methods
	public function insertQuery(){
		return "INSERT INTO project (name, description)
				VALUES ('".$this->getName()."','".$this->getDescription()."')";
	}

	public function deleteQuery(){
		return "DELETE FROM project
				WHERE id = ".$this->getId();
	}

    public function readQuery(){

	}

	public function updateQuery(){

	}
}

?>