function openTab(tabName) {
    var i;
    var x = document.getElementsByClassName("element_menu");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
      
    }
    document.getElementById(tabName).style.display = "block";}
    let nav=document.getElementsByClassName('nav')
      // nav.style.position="absolute"
 
