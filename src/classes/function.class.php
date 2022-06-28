<?php

class function_{

    private $id;
    private $name;
    private $description;
    private $freedom_level_id;


    public function __construct($id, $name, $description, $freedom_level_id){
        $this->setId($id);
        $this->setName($name);
        $this->setDescription($description);
        $this->setFreedom_level_id($freedom_level_id);
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

    /**
     * Get the value of freedom_level_id
     */ 
    public function getFreedom_level_id()
    {
        return $this->freedom_level_id;
    }

    /**
     * Set the value of freedom_level_id
     *
     * @return  self
     */ 
    public function setFreedom_level_id($freedom_level_id)
    {
        $this->freedom_level_id = $freedom_level_id;

        return $this;
    }
}

?>