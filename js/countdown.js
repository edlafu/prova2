//  Redirection Counter
  

// Variable to hold request
// var data = [];
// $("#temporizador").submit(function(event) {
//     event.preventDefault();
//     data.push($(this).find('input[name="time"]').val());
//     alert("Dato Añadida");
// });

function processData() {
  // var data = document.getElementById("time").value; classmode
  var data = $("#time").val(); //jqery mode to acces an id in the html5
  // alert(data);
  alert (data);
  return data;

}
// function processData() {return(data)}; // Timer
  // var redirect = "/"; // Target URL

  // function countDown() {
  //   var timer = document.getElementById("timer"); // Timer ID3
  //   var time = document.getElementById("time");
  //   if (count > 0) {
  //     count--;
  //     timer.innerHTML = "Tu contador se ha puesto a " + count + " segundos."; // Timer Message
  //     setTimeout("countDown()", 1000); // aqui pasamos valores.
  //   } else {
  //     window.location.href = redirect;
  //   }
  // }
  var myTimer;
  var count = processData;

  function clock() {
      myTimer = setInterval(myClock, 1000);
      var c = processData; //Initially set to 1 hour
  
  
      function myClock() {
          --c
          var timer = document.getElementById("timer"); // donde mostraremos el contador
          var seconds = c % 60; // Seconds that cannot be written in minutes
          var secondsInMinutes = (c - seconds) / 60; // Gives the seconds that COULD be given in minutes
          var minutes = secondsInMinutes % 60; // Minutes that cannot be written in hours
          var hours = (secondsInMinutes - minutes) / 60;
          // Now in hours, minutes and seconds, you have the time you need.
          console.clear();
          console.log(hours + ":" + minutes + ":" + seconds)
          timer.innerHTML = "Tu contador se ha puesto a " + count + " segundos.";
          if (c == 0) {
              clearInterval(myTimer);
          }
      }
  }

  