<?php

include_once "../interfaces/table.interface.php";

class planning_board implements Table{
    
    private $id;
    private $project_id;
    private $name;
    private $description;

    public function __construct($id, $project_id, $name, $description){
        $this->setId($id);
        $this->setProject_id($project_id);
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
     * Get the value of project_id
     */ 
    public function getProject_id()
    {
        return $this->project_id;
    }

    /**
     * Set the value of project_id
     *
     * @return  self
     */ 
    public function setProject_id($project_id)
    {
        $this->project_id = $project_id;

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
		return "INSERT INTO planning_board (project_id, name, description)
				VALUES ('".$this->getProject_id()."','".$this->getName()."','".$this->getDescription()."')";
	}

	public function deleteQuery(){
		return "DELETE FROM planning_board
				WHERE id = ".$this->getId();
	}

    public function readQuery(){

	}

	public function updateQuery(){

	}
}

?>