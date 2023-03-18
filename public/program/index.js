
//javascript
var slideImg = document.getElementById("slideImg");

var images = new Array(
  "public/images/ss/dron-pic-unit3.png",
  "public/images/ss/changing-room.png",
  "public/images/ss/hplc.png",
  "public/images/ss/qc.png",
  "public/images/ss/qc-lab.png",
  "public/images/ss/stability.png",
  "public/images/ss/mfg-machine.png",
);
var len = images.length;
var i = 0;

function slider() {
  if (i > len - 1) {
    i = 0;
  }
  slideImg.src = images[i];
  i++;
  setTimeout('slider()', 3000);
}

//jQuery

$(document).ready(function(){

$('.animate-window').animate({opacity:'0'});



 $('#heading').animate({
  opacity: '1'
 },5000, function(){
  $('.animate-window').animate({
    opacity: '1'
  },1000)
  $('.menu-bg').animate({opacity: '1'})
  $('.dropbtn').animate({opacity: '1'},1000, function(){
  
    $('#front-content').animate({opacity: '1'}, function(){
      
      $('#arrowdown').animate({opacity: '1'})
    })
  });
 })



 $('#year, #prod, #prod-mfg').counterUp({
  
 });
  

 

 
  
  
  

});

