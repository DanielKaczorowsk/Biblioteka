$(document).ready(function() {
$( "form" ).submit(function(event) {
$.ajax({
  type: 'POST',
  url: 'rejestracja.php',
  data: $( this ).serialize(),
});
