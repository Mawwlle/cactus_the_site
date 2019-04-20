window.onscroll = function() {scrollFunction()};

function scrollFunction() {

  if (document.body.scrollTop > 95 || document.documentElement.scrollTop > 95) {

    document.getElementById("bg-text").style.fontSize = "1rem";
    document.getElementById("bg-text").style.top = "0";
    document.getElementById("bg-text").style.border = "0";
    document.getElementById("bg-text").style.background= "rgb(255,255,255)"; 
    document.getElementById("bg-text").style.background= "rgba(255,255,255, 1)"; 
    document.getElementById("bg-text").style.color="#212121"; 
    document.getElementById("bg-text").style.width="100%";
    document.getElementById("bg-text").style.padding="5px";
    document.getElementById("bg-text").style.marginTop="13px";



  } else {

    //Нормальное положение
    
    document.getElementById("bg-text").style.marginTop="0px";
    document.getElementById("bg-text").style.padding="20px";
    document.getElementById("bg-text").style.width="300px";
    document.getElementById("bg-text").style.color="white"; 
    document.getElementById("bg-text").style.background= "rgb(0,0,0)"; 
    document.getElementById("bg-text").style.background= "rgba(0,0,0, 0.4)"; 
    document.getElementById("bg-text").style.border = "10px solid #f1f1f1";
    document.getElementById("bg-text").style.top= "50%";
    document.getElementById("bg-text").style.position= "fixed";
    document.getElementById("bg-text").style.fontSize = "60px";
  }
}