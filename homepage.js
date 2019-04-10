var variable;
var image=0;

function changeImage() {
    
   
    if (image == 0) {
    document.getElementById("imagefirst").src="images/druga.jpg";
    
    image=1;
     
    } else {
        document.getElementById("imagefirst").src="images/prva.jpg";
        image=0;
    }
    
}

function loadScreen () {
  variable = setTimeout(showPage, 1500);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("content").style.display = "block";
}


