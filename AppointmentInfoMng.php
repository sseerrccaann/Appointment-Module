<?php
    require_once("LogicLayer/Appointment_InfoManager.php");
    require_once("LogicLayer/AppointmentManager.php");
    require_once ("LogicLayer/SubBranchManager.php");

    $errorMeesage = "";
    if(isset($_POST["date"]) && isset($_POST["time"])&&isset($_POST["patientName"])&&isset($_POST["patientSSN"])&&isset($_POST["doctorID"])&&isset($_POST["doctorName"])&&isset($_POST["branchName"])) {
        $date = $_POST["date"];
        $time = trim($_POST["time"]);
        $patientName = $_POST["patientName"];
        $patientSSN = $_POST["patientSSN"];
        $doctorID =$_POST["doctorID"];
        $doctorName = $_POST["doctorName"];
        $subBranchName = $_POST["branchName"];

        $errorMeesage = "";
        $result = Appointment_InfoManager::insertAppointmentInfo($date, $time);
        if(!$result) {
            $errorMeesage = "Yeni kullanıcı kaydı başarısız!";
        }
        $appointmentinfoList = Appointment_InfoManager::getID($date,$time);
        $appointmentInfoID = $appointmentinfoList[0]->getID();
        $subBranchList = SubBranchManager::getSubBranchID($subBranchName);
        $subBranchID = $subBranchList[2]->getID();
        $result = AppointmentManager::insertAppointment($patientName,$patientSSN,$doctorID,$doctorName,$subBranchID,$appointmentInfoID);
        if(!$result) {
            $errorMeesage = "Yeni kullanıcı kaydı başarısız!";
        }

    }
?>
