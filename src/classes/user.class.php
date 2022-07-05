<?php

include_once "../interfaces/table.interface.php";

class user implements Table{

    private $id;
    private $name;
    private $email;
    private $birth_date;
    private $lgpd;

    public function __construct($id, $name, $email, $birth_date, $lgpd){
        $this->setId($id);
        $this->setName($name);
        $this->setEmail($email);
        $this->setBirth_date($birth_date);
        $this->setLgpd($lgpd);
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
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of birth_date
     */ 
    public function getBirth_date()
    {
        return $this->birth_date;
    }

    /**
     * Set the value of birth_date
     *
     * @return  self
     */ 
    public function setBirth_date($birth_date)
    {
        $this->birth_date = $birth_date;

        return $this;
    }

    /**
     * Get the value of lgpd
     */ 
    public function getLgpd()
    {
        return $this->lgpd;
    }

    /**
     * Set the value of lgpd
     *
     * @return  self
     */ 
    public function setLgpd($lgpd)
    {
        $this->lgpd = $lgpd;

        return $this;
    }

    // DB manipulation methods
	public function insertQuery(){
		return "INSERT INTO public.user (name, email, birth_date, lgpd)
				VALUES ('".$this->getName()."','".$this->getEmail()."','".$this->getBirth_date()."',".$this->getLgpd().")";
	}

	public function deleteQuery(){
		return "DELETE FROM public.user
				WHERE id = ".$this->getId();
	}

    public function readQuery(){

	}

	public function updateQuery(){

	}
}

?>