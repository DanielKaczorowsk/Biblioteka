<?php
require_once '../core/controller.php';
Class regcon extends controller{
  public function __construct(){
    $model="rejestracja";
    $view="rejestracja_s";
  parent::__construct($model,$view);
}
}
$regcon=new regcon;
 ?>
