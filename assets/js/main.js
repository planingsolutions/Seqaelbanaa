let i=2;


$(document).ready(function(){
var radius = 200;
var fields = $('.itemDot');
var container = $('.dotCircle');
var width = container.width();
radius = width/2.5;

var height = container.height();
var angle = 0, step = (2*Math.PI) / fields.length;
fields.each(function() {
var x = Math.round(width/2 + radius * Math.cos(angle) - $(this).width()/2);
var y = Math.round(height/2 + radius * Math.sin(angle) - $(this).height()/2);
if(window.console) {
console.log($(this).text(), x, y);
}

$(this).css({
left: x + 'px',
top: y + 'px'
});
angle += step;
});


$('.itemDot').click(function(){

var dataTab= $(this).data("tab");
$('.itemDot').removeClass('active');
$(this).addClass('active');
$('.CirItem').removeClass('active');
$( '.CirItem'+ dataTab).addClass('active');
i=dataTab;

$('.dotCircle').css({
"transform":"rotate("+(360-(i-1)*36)+"deg)",
"transition":"2s"
});
$('.itemDot').css({
"transform":"rotate("+((i-1)*36)+"deg)",
"transition":"1s"
});


});

setInterval(function(){
var dataTab= $('.itemDot.active').data("tab");
if(dataTab>6||i>6){
dataTab=1;
i=1;
}
$('.itemDot').removeClass('active');
$('[data-tab="'+i+'"]').addClass('active');
$('.CirItem').removeClass('active');
$( '.CirItem'+i).addClass('active');
i++;


$('.dotCircle').css({
"transform":"rotate("+(360-(i-2)*36)+"deg)",
"transition":"2s"
});
$('.itemDot').css({
"transform":"rotate("+((i-2)*36)+"deg)",
"transition":"1s"
});

}, 5000);

});


$(".video-play").on('click', function(e) {
    e.preventDefault(); 
    var vidWrap = $(this).parent(),
        iframe = vidWrap.find('.video iframe'),
        iframeSrc = iframe.attr('src'),
        iframePlay = iframeSrc += "?autoplay=1";
    vidWrap.children('.video-thumbnail').fadeOut();
    vidWrap.children('.video-play').fadeOut();
    vidWrap.find('.video iframe').attr('src', iframePlay);


});
function changeToLTR(){
    $('body').removeClass('direction-rtl').addClass('direction-ltr')
  }
  
  function changeToRTL(){
    $('body').removeClass('direction-ltr').addClass('direction-rtl');
  }


  $(document).ready(function() {
    if (window.location.href.indexOf("ar") > -1) {
        document.documentElement.setAttribute("lang", 'ar');
    } else {
        document.documentElement.setAttribute("lang", 'en');
    }
});
if (window.location.href.indexOf("ar") > -1)
{  const slider = document.getElementById("slider");
let sliderPos
slider.addEventListener("input", function(e){
  sliderPos = e.target.value
  document.querySelector(".foreground-img").style.width = `calc(100% - ${sliderPos}%)`
  document.querySelector(".slider-button").style.right = `${sliderPos}%`
})
    
}