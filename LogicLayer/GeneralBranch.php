<?php

class GeneralBranch
{
    private $name;
    private $ID;


    public function __construct($name=NULL, $ID=NULL)
    {
        $this->name = $name;
        $this->ID = $ID;
    }


    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * @param mixed $ID
     */
    public function setID($ID)
    {
        $this->ID = $ID;
    }

}