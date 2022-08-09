// Get the modal
var modal = document.getElementById("myModal");
var modal1 = document.getElementById("myModal1");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");
var btn1 = document.getElementById("myBtn1");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var span1 = document.getElementsByClassName("close1")[0];





function ODept() {
    let dept = document.getElementById('dept')

    if (dept.value == "OTHERS") {
        document.getElementById('hidden-panel').style.display = 'block'
         document.getElementById('hidden-label').style.display = 'block'
    } else {
        document.getElementById('hidden-label').style.display = 'none'
        document.getElementById('hidden-panel').style.display = 'none'
    }
}

function venueRoom() {
    let venue = document.getElementById('venue')

    if (venue.value == "OTHERS") {
        document.getElementById('hidden-panel1').style.display = 'block'
         document.getElementById('hidden-label1').style.display = 'block'
         document.getElementById('hidden-panel2').style.display = 'block'
         document.getElementById('hidden-label2').style.display = 'block'
    }
    else if(venue.value != "OTHERS" && venue.value != " " ){
      document.getElementById('hidden-label2').style.display = 'block'
        document.getElementById('hidden-panel2').style.display = 'block'
         document.getElementById('hidden-panel1').style.display = 'none'
         document.getElementById('hidden-label1').style.display = 'none'
    } 

    else {
        document.getElementById('hidden-panel1').style.display = 'none'
         document.getElementById('hidden-label1').style.display = 'none'
        document.getElementById('hidden-label2').style.display = 'none'
        document.getElementById('hidden-panel2').style.display = 'none'
    }
}

function pass() {
    let loCatIon = document.getElementById('LoCatIon')

    if (loCatIon.value == "TLTD_MAIN") {
        document.getElementById('hidden-panel1').style.display = 'block'
         document.getElementById('hidden-label1').style.display = 'block'
         document.getElementById('hidden-panel2').style.display = 'none'
         document.getElementById('hidden-label2').style.display = 'none'
          document.getElementById('hidden-panel3').style.display = 'none'
         document.getElementById('hidden-label3').style.display = 'none'
    }
    else if(loCatIon.value == "DENT_SCI"){
      document.getElementById('hidden-label2').style.display = 'block'
        document.getElementById('hidden-panel2').style.display = 'block'
         document.getElementById('hidden-panel1').style.display = 'none'
         document.getElementById('hidden-label1').style.display = 'none'
          document.getElementById('hidden-panel3').style.display = 'none'
         document.getElementById('hidden-label3').style.display = 'none'
    } 

    else if(loCatIon.value == "LAH_SUB_CENTER"){
        document.getElementById('hidden-panel3').style.display = 'block'
         document.getElementById('hidden-label3').style.display = 'block'
        document.getElementById('hidden-panel1').style.display = 'none'
         document.getElementById('hidden-label1').style.display = 'none'
        document.getElementById('hidden-label2').style.display = 'none'
        document.getElementById('hidden-panel2').style.display = 'none'
    }
    else{
       document.getElementById('hidden-panel1').style.display = 'none'
         document.getElementById('hidden-label1').style.display = 'none'
        document.getElementById('hidden-label2').style.display = 'none'
        document.getElementById('hidden-panel2').style.display = 'none'
         document.getElementById('hidden-panel3').style.display = 'none'
         document.getElementById('hidden-label3').style.display = 'none'
    }
}


// When the user clicks the button, open the modal 
function TnC() {
  modal.style.display = "block";
}


// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
  else if (event.target == modal1) {
    modal1.style.display = "none";
  }
}

function TnC1() {
  modal1.style.display = "block";
}

span1.onclick = function() {
  modal1.style.display = "none";
}















