<html>
 <head>
   <link rel="stylesheet" href="../../css/biblioteka.css"/>
   <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato"/>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="../../js/zegar.js" async></script>
   <script src="../../js/Przewijanie.js" async></script>
   <script src="../../js/ladowanie.js" async></script>
   <script>
  $(document).ready(function(){
  $(".ocena").on('click', function(gwiazda){
const ocena = $(this).data("id");
alert(ocena);
  })
});
   </script>
 </head>
  <body>
    <div class="ladowanie">
<img src="https://i.pinimg.com/originals/de/9e/b6/de9eb637d1dac9a77a7f3822ed57ce07.gif">
    </div>

    <header id=glownynaglowek>
<nav id="dnaglowek">
      <a id="naglowek">Biblioteka</a>
      <ul>
        <li><a>Sprawdz książkę</a><li>
        <li><a>Sprawdz swoją kartę</a><li>
        <li><a>Kontakt</a></li>
        <li><a href="logowanie.php">Logowanie</a></li>
</nav>
</header>
<div id="conteiner">
    <div id="tresc">
      <h1>Top Książek</h1>
    </br>
  </br>
      <a>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
      has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
      galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also
      the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
      Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</a>
    </div>
  </div>
    <div id="obrazek"></div>
</br>
</br>
<div id="conteiner">
<div id="tresc2">
<a>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also
the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</a>
</div>
<div class="gwiazdy">
  <a class="ocena" data-id="1"></a>
  <a class="ocena" data-id="2"></a>
  <a class="ocena" data-id="3"></a>
  <a class="ocena" data-id="4"></a>
  <a class="ocena" data-id="5"></a>
</div>


</div>
    <div id="stopka">
      <a id="godzina"></a>
      <a>Zapraszamy na nasze socjal media: </a>
      <a class="przewijanie" href="#naglowek">Przewiń w górę</a>
    </div>

  </body>
</html>
