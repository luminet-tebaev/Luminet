// When the user scrolls down 20px from the top of the document, slide down the navbar
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-50px";
    document.getElementById("navbar").style.background = "#0B0062";
    document.getElementById("menu-1").style.color = "white";
    document.getElementById("menu-2").style.color = "white";
    document.getElementById("menu-3").style.color = "white";

  }

}