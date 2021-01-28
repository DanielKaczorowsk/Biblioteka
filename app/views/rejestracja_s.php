<html>
  <head>
    <link rel="stylesheet" href="../../css/biblioteka.css"/>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../../js/zegar.js" async></script>
    <script src="../../js/Przewijanie.js" async></script>
    <script src="../../js/ladowanie.js" async></script>
  </head>
   <body>
     <div class="ladowanie">
 <img src="https://i.pinimg.com/originals/de/9e/b6/de9eb637d1dac9a77a7f3822ed57ce07.gif">
     </div>
     <header id=glownynaglowek>
 <nav id="dnaglowek">
       <a id="naglowek">Biblioteka</a>
 </nav>
 </header>
 <div>
   <form action="<?php $model;?>"  method="POST" autocomplete="on">
<input id="uzytkownik" placeholder="Nazwa Użytkownika" name="uzytkownik"></input></br></br>
<input id="email" placeholder="Email" name="email"></input></br></br>
<input id="haslo" placeholder="Hasło" name="haslo" type="password" autocomplete="on"></input></br></br>
<input id="phaslo" placeholder="Hasło" name="phaslo" type="password" autocomplete="on"></input></br>
<input id="przycisk" value="Wyślij" name="przycisk" type="submit">
   </form>
 </div>
   </body>
 </html>
