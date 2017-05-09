<?php

class Appointment_Info
{
    private $date;
    private $ID;
    private $time;

    /**
     * Appointment_Info constructor.
     * @param $date
     * @param $ID
     * @param $time
     */
    public function __construct($date=NULL, $ID=NULL, $time=NULL)
    {
        $this->date = $date;
        $this->ID = $ID;
        $this->time = $time;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
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

    /**
     * @return mixed
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param mixed $time
     */
    public function setTime($time)
    {
        $this->time = $time;
    }

}