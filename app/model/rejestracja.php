<?php
Class rejestracja extends pol{
public function __construct(){
  parent::__construct();
if(isset($_POST["uzytkownik"])) {
  $uzytkownik=trim($_POST['uzytkownik']);
  $email=trim($_POST['email']);
  $haslo=trim($_POST['haslo']);
  $phaslo=trim($_POST['phaslo']);
  if($uzytkownik!=""&&$haslo!=""&&$phaslo!=""&&$email!=""){
    if($haslo==$phaslo){
try{
  $sql='INSERT INTO uzytkownicy(uzytkownik,email,haslo)values(:uzytkownik,:email,:haslo)';
  $stmt=$this->pdo->prepare($sql);
  $stmt->bindParam(":uzytkownik",$uzytkownik, PDO::PARAM_STR);
  $stmt->bindParam(":email",$email,PDO::PARAM_STR);
  $stmt->bindParam(":haslo",$haslo,PDO::PARAM_STR);
  echo $haslo;
}catch (PDOException $e) {
      echo "Error : ".$e->getMessage();
    }
}else {
  echo "Hasla różnią się";
}
}
$result = $stmt->execute();
if($result!==false){
  echo "dodany uzytkownik";
}else{
  echo "blad";
}
$stmt->closeCursor();
unset($stmt);
$polaczenie = null;
}
}
}
$rejestracja = new rejestracja;
?>
