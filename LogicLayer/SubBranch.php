<?php

class SubBranch
{
    private $generalBranchID;
    private $name;
    private $ID;

    public function __construct($generalBranchID=NULL, $name=NULL, $ID=NULL)
    {
        $this->generalBranchID = $generalBranchID;
        $this->name = $name;
        $this->ID = $ID;
    }

    /**
     * @return null
     */
    public function getGeneralBranchID()
    {
        return $this->generalBranchID;
    }

    /**
     * @param null $generalBranchID
     */
    public function setGeneralBranchID($generalBranchID)
    {
        $this->generalBranchID = $generalBranchID;
    }

    /**
     * @return null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param null $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return null
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * @param null $ID
     */
    public function setID($ID)
    {
        $this->ID = $ID;
    }


}