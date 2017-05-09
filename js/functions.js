var stepCount = 1;
window.onload=dateAssign();
$body = $("body");

function dateAssign() {
    var date = new Date();
    var dayOfToday = date.getDate();
    dayOfToday += 1;
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
    document.getElementById('datepicker').setAttribute('min',strDate);
    document.getElementById('datepicker').value = strDate;

}
function progressChange(){
    if (stepCount==1 ){
        document.getElementById("firstStep").className = "progress-bar progress-bar-success";
        document.getElementById("secondStep").className = "progress-bar progress-bar-striped active";
        document.getElementById("mainContainer").style.visibility="hidden";
        document.getElementById("mainContainerStep2").style.visibility="visible";
        stepCount += 1;
    }
    else if(stepCount==2){
        document.getElementById("secondStep").className = "progress-bar progress-bar-success";
        document.getElementById("thirdStep").className = "progress-bar progress-bar-striped active";
        document.getElementById("mainContainerStep2").style.visibility="hidden";
        document.getElementById("mainContainerStep3").style.visibility="visible";
        stepCount += 1;
    }
    else if(stepCount==3){
        var time = document.getElementById("dene").value;
        if(time!=""){
            document.getElementById("thirdStep").className = "progress-bar progress-bar-success";
            document.getElementById("fourthStep").className = "progress-bar progress-bar-striped active";
            document.getElementById("mainContainerStep3").style.visibility="hidden";
            document.getElementById("mainContainerStep4").style.visibility="visible";
            stepCount += 1;
        }
    }
    else if(stepCount==4){
        document.getElementById("fourthStep").className = "progress-bar progress-bar-success";
        document.getElementById("mainContainerStep4").style.visibility="hidden";
        document.getElementById("mainContainerStep5").style.visibility="visible";
        document.getElementById("resultMsg").style.visibility="visible";
        stepCount += 1;
    }


}

function deneme(value) {
    document.getElementById("dene").value = value;
    document.getElementById("dene").style.visibility = "hidden";
}
function takeAppointment(){

}

