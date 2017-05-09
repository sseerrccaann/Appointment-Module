<?php

require_once("DataLayer/DB.php");
require_once("Appointment_Info.php");

class Appointment_InfoManager
{
    public static function insertAppointmentInfo($date,$time){
        $db = new DB();
        $success = $db->executeQuery("INSERT INTO appointmentinfo(date, time) VALUES ('$date', '$time')");
        return $success;
    }
    public static function getID($date,$time){
        $db=new DB();
        $result = $db->getDataTable("select ID,date,time from appointmentinfo where date='$date' and time='$time'");
        $appointmentinfo = array();
        while($row=$result->fetch_assoc()){
            $appObj = new Appointment_Info($row["date"], $row["ID"], $row["time"]);
            array_push($appointmentinfo, $appObj);
        }
        return $appointmentinfo;
    }
}
?>