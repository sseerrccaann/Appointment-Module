<?php
require_once ("LogicLayer/AppointmentManager.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MHRS PORTAL</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div id="container">
    <div id="headerContainer">
        <a href="http://www.saglik.gov.tr" target="_blank" class="logo"></a>
        <span class="owner">DEUCENG HOSPITAL</span>
        <span class="title">APPOINTMENT SYSTEM</span>
    </div>
    <div id="menuContainer">
        <a id="home" name="homeTab" href="/mhrsTest/index.php" class="">Home</a>
        <a id="list" name="listTab" href="/mhrsTest/Listing.php" class="selectedLink">List Appointments</a>
    </div>
    <div id="listContainer">
        <form>
            <table id="tblAppointments">
                <tbody>
                <tr>
                    <th>ID</th>
                    <th>Patient Name</th>
                    <th>Patient SSN</th>
                    <th>Doctor Name</th>
                    <th>Subbranch ID</th>
                </tr>
                <?php
                $appointmentsList = AppointmentManager::getPersonalAppointments("2012510");

                for($i = 0; $i < count($appointmentsList); $i++) {
                    ?>
                    <tr>
                        <td><?php echo $appointmentsList[$i]->getAppointmentId(); ?></td>
                        <td><?php echo $appointmentsList[$i]->getPatientName(); ?></td>
                        <td><?php echo $appointmentsList[$i]->getPatientSSN(); ?></td>
                        <td><?php echo $appointmentsList[$i]->getDoctorName(); ?></td>
                        <td><?php echo $appointmentsList[$i]->getSubID(); ?></td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </form>
    </div>
</div>
</body>

<script type="text/javascript" src="js/functions2.js"></script>

</html>

