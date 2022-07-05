<?php

include_once "../interfaces/table.interface.php";

class task implements Table{

    private $id;
    private $stage_id;
    private $title;
    private $description;
    private $created_on;
    private $deadline;
    private $time_elapsed;
    private $creator_user_id;
    private $responsible_user_id;

    public function __construct($id, $stage_id, $title, $description, $created_on, $deadline, $time_elapsed, $creator_user_id, $responsible_user_id){
        $this->setId($id);
        $this->setStage_id($stage_id);
        $this->setTitle($title);
        $this->setDescription($description);
        $this->setCreated_on($created_on);
        $this->setDeadline($deadline);
        $this->setTime_elapsed($time_elapsed);
        $this->setCreator_user_id($creator_user_id);
        $this->setResponsible_user_id($responsible_user_id);
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
     * Get the value of stage_id
     */ 
    public function getStage_id()
    {
        return $this->stage_id;
    }

    /**
     * Set the value of stage_id
     *
     * @return  self
     */ 
    public function setStage_id($stage_id)
    {
        $this->stage_id = $stage_id;

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

    /**
     * Get the value of created_on
     */ 
    public function getCreated_on()
    {
        return $this->created_on;
    }

    /**
     * Set the value of created_on
     *
     * @return  self
     */ 
    public function setCreated_on($created_on)
    {
        $this->created_on = $created_on;

        return $this;
    }

    /**
     * Get the value of deadline
     */ 
    public function getDeadline()
    {
        return $this->deadline;
    }

    /**
     * Set the value of deadline
     *
     * @return  self
     */ 
    public function setDeadline($deadline)
    {
        $this->deadline = $deadline;

        return $this;
    }

    /**
     * Get the value of time_elapsed
     */ 
    public function getTime_elapsed()
    {
        return $this->time_elapsed;
    }

    /**
     * Set the value of time_elapsed
     *
     * @return  self
     */ 
    public function setTime_elapsed($time_elapsed)
    {
        $this->time_elapsed = $time_elapsed;

        return $this;
    }

    /**
     * Get the value of creator_user_id
     */ 
    public function getCreator_user_id()
    {
        return $this->creator_user_id;
    }

    /**
     * Set the value of creator_user_id
     *
     * @return  self
     */ 
    public function setCreator_user_id($creator_user_id)
    {
        $this->creator_user_id = $creator_user_id;

        return $this;
    }

    /**
     * Get the value of responsible_user_id
     */ 
    public function getResponsible_user_id()
    {
        return $this->responsible_user_id;
    }

    /**
     * Set the value of responsible_user_id
     *
     * @return  self
     */ 
    public function setResponsible_user_id($responsible_user_id)
    {
        $this->responsible_user_id = $responsible_user_id;

        return $this;
    }

    // DB manipulation methods
	public function insertQuery(){
		return "INSERT INTO task (stage_id, title, description, created_on, deadline, time_elapsed, creator_user_id, responsible_user_id)
				VALUES ('".$this->getStage_id()."','".$this->getTitle()."','".$this->getDescription()."','".$this->getCreated_on()."','".$this->getDeadline()."','".$this->getTime_elapsed()."','".$this->getCreator_user_id()."','".$this->getResponsible_user_id()."')";
	}

	public function deleteQuery(){
		return "DELETE FROM task
				WHERE id = ".$this->getId();
	}

    public function readQuery(){

	}

	public function updateQuery(){

	}
}

?>