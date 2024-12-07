  function printTime() {
    var d = new Date();
    var hours = d.getHours();
    var mins = d.getMinutes();
    var secs = d.getSeconds();
    var day = d.getDay();
    var date = d.getDate();
    var month = d.getMonth();
    var year = d.getFullYear();
    var meridian = hours >= 12 ? "pm" : "am";
    hours = hours % 12;
    hours = hours ? hours : 12;
   
    
        switch (day){
        
            case 1:
                day = "Monday";
                break;
            case 0:
                day = "Sunday";
                break;
            case 2:
                day = "Tuesday";
                break;
            case 3:
                day = "Wednesday";
                break;
            case 4:
                day = "Thursday";
                break;
            case 5:
                day = "Friday";
                break;
            case 6:
                day = "Saturday";
                break;
           }
    
    
        if(hours<10){
            hours = "0" + hours;
        }
        if(mins<10){
            
            mins = "0" + mins;
        }
        if(secs<10){

            secs = "0" + secs;
        }
   
   month = month + 1; 
   document.getElementById("clock").innerHTML = hours+":"+mins+":"+secs+" "+meridian;
document.getElementById("date").innerHTML = day + " - " + month + " / " + date + " / " + year;
}
setTimeout(printTime, 1);
setInterval(printTime, 1000);