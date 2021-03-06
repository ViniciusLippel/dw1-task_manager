<?php

include_once "../interfaces/table.interface.php";

class stage implements Table{

    private $id;
    private $planning_board_id;
    private $title;
    private $description;
    
    public function __construct($id, $planning_board_id, $title, $description){
        $this->setId($id);
        $this->setPlanning_board_id($planning_board_id);
        $this->setTitle($title);
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

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

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
		return "INSERT INTO stage (planning_board_id, title, description)
				VALUES ('".$this->getPlanning_board_id()."','".$this->getTitle()."','".$this->getDescription()."')";
	}

	public function deleteQuery(){
		return "DELETE FROM stage
				WHERE id = ".$this->getId();
	}

    public function readQuery(){

	}

	public function updateQuery(){

	}
}

?>