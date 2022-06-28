<?php

class stage{

    private $id;
    private $planning_board_id;
    private $title;
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
}

?>