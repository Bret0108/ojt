// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];


var comment = document.getElementById("commentmodal");

var buton = document.getElementById("Remarks");


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

function actionTkn() {
    let actntkn = document.getElementById('Actntkn')

    if (actntkn.value == "In-house") {
        document.getElementById('hidden-panel1').style.display = 'block'
        document.getElementById('hidden-label1').style.display = 'block'
        document.getElementById('hidden-panel2').style.display = 'block'
        document.getElementById('hidden-label2').style.display = 'block'
        document.getElementById('hidden-label3').style.display = 'block'
        document.getElementById('hidden-panel3').style.display = 'block'
        document.getElementById('hidden-panel4').style.display = 'block'
        document.getElementById('hidden-label4').style.display = 'block'
         document.getElementById('hidden-panel5').style.display = 'block'
        document.getElementById('hidden-label5').style.display = 'block'
        document.getElementById('hidden-panel6').style.display = 'block'
        document.getElementById('hidden-label6').style.display = 'block'
        document.getElementById('hidden-label7').style.display = 'none'
        document.getElementById('hidden-panel7').style.display = 'none'
         document.getElementById('hidden-label8').style.display = 'none'
        document.getElementById('hidden-panel8').style.display = 'none'
         document.getElementById('hidden-label9').style.display = 'none'
        document.getElementById('hidden-panel9').style.display = 'none'
         document.getElementById('hidden-label10').style.display = 'none'
        document.getElementById('hidden-panel10').style.display = 'none'
         document.getElementById('hidden-label11').style.display = 'none'
        document.getElementById('hidden-panel11').style.display = 'none'
    }
     else if (actntkn.value == "Outside") {
        document.getElementById('hidden-label1').style.display = 'none'
        document.getElementById('hidden-panel1').style.display = 'none'
         document.getElementById('hidden-label2').style.display = 'none'
        document.getElementById('hidden-panel2').style.display = 'none'
         document.getElementById('hidden-label3').style.display = 'none'
         document.getElementById('hidden-label4').style.display = 'none'
        document.getElementById('hidden-panel4').style.display = 'none'
         document.getElementById('hidden-label5').style.display = 'none'
        document.getElementById('hidden-panel5').style.display = 'none'
         document.getElementById('hidden-label6').style.display = 'none'
        document.getElementById('hidden-panel6').style.display = 'none'
        document.getElementById('hidden-panel7').style.display = 'block'
        document.getElementById('hidden-label7').style.display = 'block'
        document.getElementById('hidden-panel8').style.display = 'block'
        document.getElementById('hidden-label8').style.display = 'block'
        document.getElementById('hidden-label9').style.display = 'block'
        document.getElementById('hidden-panel9').style.display = 'block'
        document.getElementById('hidden-panel10').style.display = 'block'
        document.getElementById('hidden-label10').style.display = 'block'
         document.getElementById('hidden-panel11').style.display = 'block'
        document.getElementById('hidden-label11').style.display = 'block'
    }  
    else {
        document.getElementById('hidden-label1').style.display = 'none'
        document.getElementById('hidden-panel1').style.display = 'none'
         document.getElementById('hidden-label2').style.display = 'none'
        document.getElementById('hidden-panel2').style.display = 'none'
         document.getElementById('hidden-label3').style.display = 'none'
         document.getElementById('hidden-label4').style.display = 'none'
        document.getElementById('hidden-panel4').style.display = 'none'
         document.getElementById('hidden-label5').style.display = 'none'
        document.getElementById('hidden-panel5').style.display = 'none'
         document.getElementById('hidden-label6').style.display = 'none'
        document.getElementById('hidden-panel6').style.display = 'none'
         document.getElementById('hidden-label7').style.display = 'none'
        document.getElementById('hidden-panel7').style.display = 'none'
         document.getElementById('hidden-label8').style.display = 'none'
        document.getElementById('hidden-panel8').style.display = 'none'
         document.getElementById('hidden-label9').style.display = 'none'
        document.getElementById('hidden-panel9').style.display = 'none'
         document.getElementById('hidden-label10').style.display = 'none'
        document.getElementById('hidden-panel10').style.display = 'none'
         document.getElementById('hidden-label11').style.display = 'none'
        document.getElementById('hidden-panel11').style.display = 'none'
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
}












