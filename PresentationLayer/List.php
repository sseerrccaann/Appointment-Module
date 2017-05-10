<?php
require_once ("LogicLayer/AppointmentManager.php");
require_once ("LogicLayer/Appointment_InfoManager.php");

$errorMeesage = "";
if(isset($_POST["id"])){
    $id=$_POST["id"];
    $result = AppointmentManager::deleteAppointment($id);
    if(!$result) {
        $errorMeesage = "Deletion was unsuccessfull";
    }
}
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
        <form action="" method="post">
            <table id="tblAppointments">
                <tbody>
                <tr>
                    <th>ID</th>
                    <th>Patient Name</th>
                    <th>Patient SSN</th>
                    <th>Doctor Name</th>
                    <th>Subbranch ID</th>
                    <th>Appointment Date</th>
                    <th>Appointment Time</th>
                    <th></th>
                </tr>
                <?php
                $appointmentsList = AppointmentManager::getPersonalAppointments("12344378912");

                for($i = 0; $i < count($appointmentsList); $i++) {
                    $appointmentInfoList = Appointment_InfoManager::getAppointmentInfo($appointmentsList[$i]->getAppointmentInfoID());
                    ?>
                    <tr>
                        <td class="id"><?php echo $appointmentsList[$i]->getAppointmentId(); ?></td>
                        <td><?php echo $appointmentsList[$i]->getPatientName(); ?></td>
                        <td><?php echo $appointmentsList[$i]->getPatientSSN(); ?></td>
                        <td><?php echo $appointmentsList[$i]->getDoctorName(); ?></td>
                        <td><?php echo $appointmentsList[$i]->getSubID(); ?></td>
                        <td class="appDateTd"><?php echo $appointmentInfoList[0]->getDate(); ?></td>
                        <td class="appTimeTd"><?php echo $appointmentInfoList[0]->getTime(); ?></td>
                        <td><button type='submit' class='userDelApp'><i class="glyphicon glyphicon-trash"></button></td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
            <input type="text" id="appId" name="id" style="visibility: hidden"/>
        </form>
    </div>
</div>
</body>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script>
    $(document).ready(function () {
        $(".userDelApp").click(function() {
            var $row = $(this).closest("tr");    // Find the row
            var id = $row.find(".id").text();
            //  var retType = "xml";// Find the text
            $("#appId").val(id);
            /* $.ajax({ // start an ajax POST
             type	: "post",
             url		: ,
             data	:  {
             "id": id,
             "format": retType,
             },
             success : function(reply) { // when ajax executed successfully
             console.log(reply);
             if(retType == "json") {
             $("#divCallResult").html( JSON.stringify(reply) );
             }
             else {
             $("#divCallResult").html( new XMLSerializer().serializeToString(reply) );
             }

             },
             error   : function(err) { // some unknown error happened
             console.log(err);
             alert(" There is an error! Please try again. " + err);
             }
             });*/
        });
    });

</script>
<script type="text/javascript" src="js/functions2.js"></script>

</html>

