<?php

class planning_board{
    
    private $id;
    private $project_id;
    private $name;
    private $description;

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
}

?>