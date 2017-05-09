<?php

class Appointment
{
    private $appointmentId;
    private $patientName;
    private $patientSSN;
    private $subID;
    private $appointmentInfoID;
    private $doctorID;
    private $doctorName;

    function __construct($appointmentId=NULL,$patientName=NULL,$patientSSN=NULL,$subID=NULL,$appointmentInfoID=NULL,$doctorID=NULL,$doctorName=NULL)
    {
        $this->appointmentId=$appointmentId;
        $this->patientName=$patientName;
        $this->patientSSN=$patientSSN;
        $this->subID=$subID;
        $this->appointmentInfoID=$appointmentInfoID;
        $this->doctorID=$doctorID;
        $this->doctorName=$doctorName;
    }

    public function getAppointmentId()
    {
        return $this->appointmentId;
    }


    public function setAppointmentId($appointmentId)
    {
        $this->appointmentId = $appointmentId;
    }


    public function getPatientName()
    {
        return $this->patientName;
    }

    public function setPatientName($patientName)
    {
        $this->patientName = $patientName;
    }

    public function getPatientSSN()
    {
        return $this->patientSSN;
    }

    public function setPatientSSN($patientSSN)
    {
        $this->patientSSN = $patientSSN;
    }

    public function getSubID()
    {
        return $this->subID;
    }

    public function setSubID($subID)
    {
        $this->subID = $subID;
    }

    public function getAppointmentInfoID()
    {
        return $this->appointmentInfoID;
    }

    public function setAppointmentInfoID($appointmentInfoID)
    {
        $this->appointmentInfoID = $appointmentInfoID;
    }

    public function getDoctorID()
    {
        return $this->doctorID;
    }

    public function setDoctorID($doctorID)
    {
        $this->doctorID = $doctorID;
    }

    public function getDoctorName()
    {
        return $this->doctorName;
    }

    public function setDoctorName($doctorName)
    {
        $this->doctorName = $doctorName;
    }


}
?>