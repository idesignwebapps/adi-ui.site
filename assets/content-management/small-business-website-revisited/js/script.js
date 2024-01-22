// DECLARATIONS
var now = new Date();
var weekday = new Array(7);
weekday[0] = "Sunday";
weekday[1] = "Monday";
weekday[2] = "Tuesday";
weekday[3] = "Wednesday";
weekday[4] = "Thursday";
weekday[5] = "Friday";
weekday[6] = "Saturday";

// FUNCTION TO EXECUTE
var checkTime = function () {
    var today = weekday[now.getDay()];
    var currentDay = document.getElementById('day');
    var currentTime = document.getElementById('time');
    var currentStatus = document.getElementById('status');
    var dayOfWeek = now.getDay();
    var hour = now.getHours();
    var minutes = now.getMinutes();

    // AM-PM SUFFIX
    var suffix = hour >= 12 ? "PM" : "AM";

    // ADDING 0 TO SINGLE DIGIT MINUTES
    if (minutes < 10) {
        minutes = "0" + minutes
    };

    // CHECKING CURRENT DATE TIME WITH OPENING HOURS
    if ((dayOfWeek >= 1 && dayOfWeek <= 5) && (hour >= 6 && hour < 21)) {
        hour = ((hour + 11) % 12 + 1);
        currentDay.innerHTML = 'It\'s ' + today;
        currentTime.innerHTML = hour + ':' + minutes + suffix;
        currentStatus.innerHTML = 'Open till 9:00PM';
    }

    else if (dayOfWeek == 6 && (hour >= 7 && hour < 17)) {
        hour = ((hour + 11) % 12 + 1);
        currentDay.innerHTML = 'It\'s ' + today;
        currentTime.innerHTML = hour + ':' + minutes + suffix;
        currentStatus.innerHTML = 'Open till 5:00PM';
    }

    else if (dayOfWeek == 0 && (hour >= 11 && hour < 17)) {
        hour = ((hour + 11) % 12 + 1);
        currentDay.innerHTML = 'It\'s ' + today;
        currentTime.innerHTML = hour + ':' + minutes + suffix;
        currentStatus.innerHTML = 'Open till 5:00PM';
    }

    else {
        currentDay.innerHTML = 'Sorry, ';
        currentTime.innerHTML = 'we\'re Closed.';
        currentStatus.innerHTML = 'Check Timings.';
    }
};

// FUNCTION CALLING - EXECUTION
setInterval(checkTime, 0);
checkTime();