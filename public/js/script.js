<<<<<<< HEAD
=======
function test (){
  
}

>>>>>>> origin/master
function hidden() {
    document.getElementById('hidden').classList.add('hidden');
}

var count = 4;
 
function countDown(){
    var timer = document.getElementById("timer");
    if(count > 0){
        count--;
        timer.innerHTML = " in "+count+" seconds";
        setTimeout("countDown()", 1000);
    }else{
       // document.write(redirect);
        window.location.href = redirect;
    }
}

$(document).ready(function() {
    //toggle `popup` / `inline` mode
    $.fn.editable.defaults.mode = 'inline';     
    
    //make username editable
    $('#EditBName').editable({
        type: 'text',
    });
    
});

<<<<<<< HEAD
function goToToday(todaysMonthShort,todaysYear){
    var todaysMonth = todaysMonthShort;
    var todaysYear = todaysYear;
    
    if (todaysMonth <= 9) {
        todaysMonth = "0" + todaysMonth;
    }
    
    location.href = "http://localhost:8888/charm/public//pages/clients/c_calendar.php?month=" + todaysMonth + "&year=" +todaysYear+"#cal_jump";
}
function dateSelected (){
    location.href = "http://localhost:8888/charm/public//pages/clients/c_calendar.php#cal_jump";
}
function highlightToday (){
    document.getElementById('id1').style.color = 'red'
=======
function selectedDate(day,month,year){
    var day = day;
    var month = month;
    var year = year;
    
    if (day <= 9) {
        day = "0" + day;
    }
     if (month <= 9) {
        month = "0" + month;
    }
    
    document.getElementById("testOutput").innerHTML  
     ="Date selected: " +year+"-"+month+"-"+day;
}

function goToToday(todaysMonth,todaysYear){
    var todaysMonth = todaysMonth;
    var todaysYear = todaysYear;
    
     if (todaysMonth <= 9) {
        todaysMonth = "0" + todaysMonth;
    }
    
   /* document.getElementById("testOutput").innerHTML  
     ="TODAY'S MONTH: " + todaysMonth  + "<br>TODAY'S YEAR: " + todaysYear +"<br>" + window.location.href + "<br>" + "http://localhost:8888/charm/public//pages/clients/c_calendar.php?month=" + todaysMonth + "&year=" +todaysYear+"#cal_jump";*/
    
    location.href = "http://localhost:8888/charm/public//pages/clients/c_calendar.php?month=" + todaysMonth + "&year=" +todaysYear+"#cal_jump";
>>>>>>> origin/master
}