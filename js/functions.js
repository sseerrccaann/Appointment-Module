/**
 * Created by Sercan on 9.4.2017.
 */

window.onload=dateAssign();
$body = $("body");

function dateAssign() {
    var date = new Date();
    var dayOfToday = date.getDate();
    var monthOfToday = date.getMonth();
    monthOfToday += 1;
    var yearOfToday = date.getFullYear();
    var strDate = yearOfToday;
    if (monthOfToday<10){
        strDate = strDate + "-0" + monthOfToday;
    }
    else {
        strDate = strDate + "-" + monthOfToday;
    }
    if(dayOfToday<10){
        strDate = strDate + "-0" + dayOfToday;
    }
    else {
        strDate = strDate + "-" + dayOfToday;
    }
    var str = date.toString("YYYY-MM-DD");
    document.getElementById('datepicker').value = strDate;
    document.getElementById('dene').value = strDate;
}
function progressChange(){
    var NAME = document.getElementById("progress-bar progress-bar-striped");
    var currentClass = NAME.className;
    if (currentClass == "progress-bar progress-bar-striped") { // Check the current class name
        NAME.className = "progress-bar progress-bar-warning";   // Set other class name
    } else {
        NAME.className = "progress-bar progress-bar-striped";  // Otherwise, use `second_name`
    }

}

