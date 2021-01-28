<?php
Class pol{
  protected $pdo;
  protected $dns;
  protected $uzytkownik;
  protected $haslo;
  protected $con;
  protected $dane;
  public function __construct($dane="polaczenie.ini"){
    $con = parse_ini_file($dane,TRUE);
    $dns=$con['polaczenie']['dns'].
    ':host='.$con['polaczenie']['host'].
    ((!empty($con['polaczenie']['port'])) ? (';port=' . $con['polaczenie']['port']) : '').
    ';dbname='.$con['polaczenie']['baza'];
    $uzytkownik=$con['polaczenie']['uzytkownik'];
    $haslo=$con['polaczenie']['haslo'];
    try{
      $this->pdo = new pdo($dns,$uzytkownik,$haslo,array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
      //$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $error){
      echo 'Connection failed: ' . $error->getMessage();
    }
  }
}
?>
