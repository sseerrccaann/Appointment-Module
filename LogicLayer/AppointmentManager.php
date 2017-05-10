<?php

require_once("DataLayer/DB.php");
require_once("Appointment.php");

class AppointmentManager
{
    public static function getPersonalAppointments($patientID){
        $db=new DB();
        $result = $db->getDataTable("select ID,PatientName,PatientSSN,SubBranchID,Appointment_InfoID,DoctorID,DoctorName from appointment where PatientSSN='$patientID'");
        $appointments = array();
        while($row=$result->fetch_assoc()){
            $appObj = new Appointment($row["ID"], $row["PatientName"], $row["PatientSSN"],$row["SubBranchID"],$row["Appointment_InfoID"],$row["DoctorID"],$row["DoctorName"]);
            array_push($appointments, $appObj);
        }
        return $appointments;
    }
    public static function getAppointments(){
        $db=new DB();
        $result = $db->getDataTable("select ID,PatientName,PatientSSN,SubBranchID,Appointment_InfoID,DoctorID,DoctorName from appointment");
        $appointments = array();
        while($row=$result->fetch_assoc()){
            $appObj = new Appointment($row["ID"], $row["PatientName"], $row["PatientSSN"],$row["SubBranchID"],$row["Appointment_InfoID"],$row["DoctorID"],$row["DoctorName"]);
            array_push($appointments, $appObj);
        }
        return $appointments;
    }
    public static function insertAppointment($patientName,$patientSSN,$doctorID,$doctorName,$subBranchID,$appointmentInfoID){
        $db = new DB();
        $success = $db->executeQuery("INSERT INTO appointment(PatientName, PatientSSN, SubBranchID,Appointment_InfoID,DoctorID,DoctorName) VALUES ('$patientName', '$patientSSN', '$subBranchID','$appointmentInfoID','$doctorID','$doctorName')");
        return $success;
    }
    public static function deleteAppointment($appointmentID){
        $db = new DB();
        $success = $db->executeQuery("DELETE FROM appointment WHERE ID='$appointmentID'");
        return $success;
    }
    public static function updateAppointmentByAdmin($id,$patientName,$doctorName,$branchName){
        $db = new DB();
        $success = $db->executeQuery("UPDATE appointment SET PatientName='$patientName',SubBranchID='$branchName',DoctorName='$doctorName' WHERE ID='$id'");
        return $success;
    }
}
?>