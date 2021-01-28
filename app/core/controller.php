<?php
require_once __DIR__.'/../polaczenie.php';
Class controller extends pol{
public function __construct($model="",$view=""){
  pol::__construct();
  $model="rejestracja";
  $view="rejestracja_s";
  require_once "../model/".$model.".php";
  require_once "../views/".$view.".php";
}
};
?>
