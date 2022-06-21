function showHide() {
    let stats = document.getElementById('stats')

    if (stats.value == "Condemned") {
        document.getElementById('hidden-panel').style.display = 'block'
         document.getElementById('hidden-label').style.display = 'block'
    } else {
        document.getElementById('hidden-label').style.display = 'none'
        document.getElementById('hidden-panel').style.display = 'none'
    }
}

function VidTitle() {
    let stats = document.getElementById('vidtitle')

    if (vidtitle.value == "instructional") {
        document.getElementById('hidden-panel').style.display = 'block'
         document.getElementById('hidden-label').style.display = 'block'
         document.getElementById('hidden-label1').style.display = 'none'
        document.getElementById('hidden-panel1').style.display = 'none'
    }
    else if (vidtitle.value == "Repair") {
        document.getElementById('hidden-panel1').style.display = 'block'
         document.getElementById('hidden-label1').style.display = 'block'
         document.getElementById('hidden-label').style.display = 'none'
        document.getElementById('hidden-panel').style.display = 'none'
    } 
    else {
        document.getElementById('hidden-label').style.display = 'none'
        document.getElementById('hidden-panel').style.display = 'none'
        document.getElementById('hidden-label1').style.display = 'none'
        document.getElementById('hidden-panel1').style.display = 'none'
    }
}

var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];

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


