<?php

class freedom_level{

    private $id;
    private $description;
    private $create_stage;
    private $edit_stage;
    private $delete_stage;
    private $create_task;
    private $edit_task;
    private $delete_task;
    private $add_user;
    private $delete_user;
    private $edit_project;
    private $delete_project;

    public function __construct($id, $description, $crate_stage, $edit_stage, $delete_stage, $create_task, $edit_task, $delete_task, $add_user, $delete_user, $edit_project, $delete_project){
        $this->setId($id);
        $this->setDescription($description);
        $this->setCreate_stage($crate_stage);
        $this->setEdit_stage($edit_stage);
        $this->setDelete_stage($delete_stage);
        $this->setCreate_task($create_task);
        $this->setEdit_task($edit_task);
        $this->setDelete_task($delete_task);
        $this->setAdd_user($add_user);
        $this->setDelete_user($delete_user);
        $this->setEdit_project($edit_project);
        $this->setDelete_project($delete_project);
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
     * Get the value of edit_stage
     */ 
    public function getEdit_stage()
    {
        return $this->edit_stage;
    }

    /**
     * Set the value of edit_stage
     *
     * @return  self
     */ 
    public function setEdit_stage($edit_stage)
    {
        $this->edit_stage = $edit_stage;

        return $this;
    }

    /**
     * Get the value of delete_stage
     */ 
    public function getDelete_stage()
    {
        return $this->delete_stage;
    }

    /**
     * Set the value of delete_stage
     *
     * @return  self
     */ 
    public function setDelete_stage($delete_stage)
    {
        $this->delete_stage = $delete_stage;

        return $this;
    }

    /**
     * Get the value of create_task
     */ 
    public function getCreate_task()
    {
        return $this->create_task;
    }

    /**
     * Set the value of create_task
     *
     * @return  self
     */ 
    public function setCreate_task($create_task)
    {
        $this->create_task = $create_task;

        return $this;
    }

    /**
     * Get the value of edit_task
     */ 
    public function getEdit_task()
    {
        return $this->edit_task;
    }

    /**
     * Set the value of edit_task
     *
     * @return  self
     */ 
    public function setEdit_task($edit_task)
    {
        $this->edit_task = $edit_task;

        return $this;
    }

    /**
     * Get the value of delete_task
     */ 
    public function getDelete_task()
    {
        return $this->delete_task;
    }

    /**
     * Set the value of delete_task
     *
     * @return  self
     */ 
    public function setDelete_task($delete_task)
    {
        $this->delete_task = $delete_task;

        return $this;
    }

    /**
     * Get the value of add_user
     */ 
    public function getAdd_user()
    {
        return $this->add_user;
    }

    /**
     * Set the value of add_user
     *
     * @return  self
     */ 
    public function setAdd_user($add_user)
    {
        $this->add_user = $add_user;

        return $this;
    }

    /**
     * Get the value of delete_user
     */ 
    public function getDelete_user()
    {
        return $this->delete_user;
    }

    /**
     * Set the value of delete_user
     *
     * @return  self
     */ 
    public function setDelete_user($delete_user)
    {
        $this->delete_user = $delete_user;

        return $this;
    }

    /**
     * Get the value of edit_project
     */ 
    public function getEdit_project()
    {
        return $this->edit_project;
    }

    /**
     * Set the value of edit_project
     *
     * @return  self
     */ 
    public function setEdit_project($edit_project)
    {
        $this->edit_project = $edit_project;

        return $this;
    }

    /**
     * Get the value of delete_project
     */ 
    public function getDelete_project()
    {
        return $this->delete_project;
    }

    /**
     * Set the value of delete_project
     *
     * @return  self
     */ 
    public function setDelete_project($delete_project)
    {
        $this->delete_project = $delete_project;

        return $this;
    }

    /**
     * Get the value of create_stage
     */ 
    public function getCreate_stage()
    {
        return $this->create_stage;
    }

    /**
     * Set the value of create_stage
     *
     * @return  self
     */ 
    public function setCreate_stage($create_stage)
    {
        $this->create_stage = $create_stage;

        return $this;
    }
}

?>