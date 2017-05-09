<?php
require_once ("LogicLayer/AppointmentManager.php");
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
        <a id="delete" name="deleteTab" href="/mhrsTest/admin.php" class="selectedLink">Arrange Appointment</a>
        <a id="addBranch" name="branchTab" href="/mhrsTest/adminBranch.php" class="">Manage Branch</a>
    </div>
    <div id="listContainer">
        <form action="" method="post">
            <table id="tblAppointments">
                <tbody>
                <tr>
                    <th >ID</th>
                    <th >Patient Name</th>
                    <th>Patient SSN</th>
                    <th >Doctor Name</th>
                    <th >Subbranch ID</th>
                    <th></th>
                </tr>
                <?php
                $appointmentsList = AppointmentManager::getPersonalAppointments("2012510");

                for($i = 0; $i < count($appointmentsList); $i++) {
                    ?>
                    <tr>
                        <td class="id"><?php echo $appointmentsList[$i]->getAppointmentId(); ?></td>
                        <td><?php echo $appointmentsList[$i]->getPatientName(); ?></td>
                        <td><?php echo $appointmentsList[$i]->getPatientSSN(); ?></td>
                        <td><?php echo $appointmentsList[$i]->getDoctorName(); ?></td>
                        <td><?php echo $appointmentsList[$i]->getSubID(); ?></td>
                        <td><input type='submit' class='adminDel' value='Delete'/></td>
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
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script>
    $(document).ready(function () {
        $(".adminDel").click(function() {
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
</body>
</html>
