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
  if (data != null){
    clock(data);
  }
  // return data;
  }
///////////////////////////////////////////////////////////
  function clock(data) {
    console.log(data);
      myTimer = setInterval(myClock, 1000);
      var c = data; //Initially set to 1 hour
          
      function myClock() {
          c--;
          var timer = document.getElementById("timer"); // donde mostraremos el contador
          var seconds = c % 60; // Seconds that cannot be written in minutes
          var secondsInMinutes = (c - seconds) / 60; // Gives the seconds that COULD be given in minutes
          var minutes = secondsInMinutes % 60; // Minutes that cannot be written in hours
          var hours = (secondsInMinutes - minutes) / 60;
          // Now in hours, minutes and seconds, you have the time you need.
          console.clear();
          console.log(hours + ":" + minutes + ":" + seconds);
          timer.innerHTML = "Tu contador se ha puesto a "+hours+":"+minutes+":"+seconds+" segundos.";
          if (c == 0) {
              clearInterval(myTimer); // fin del temporizador.
          } 
      }
    }
/////////////////////////////////////////////////////////////
