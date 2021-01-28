$(document).ready(function(){
$(".przewijanie").on('click', function(event) {
  event.stopPropagation();
  event.stopImmediatePropagation();
  var hash = this.hash;
$('html, body').animate({
scrollTop: $(hash).offset().top
},900);
})
});
