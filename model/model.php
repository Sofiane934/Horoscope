<?php
include 'model/data.php';

function getlesSignes(){
  $sign= signe();
  return $sign;
}


  

function getconnexion($login , $mdp) {
    $connexion = connexion();

    $flag=false;
      foreach($connexion as $v) {
            if(isset($v[$login]) && $mdp==$v[$login]) $flag=true;
      }
    return $flag;
}
function getleSigne($choix){
  $sign= signe();
  return $sign[$choix];
}