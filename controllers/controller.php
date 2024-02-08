<?php
switch($action)
{ 
  
  case'reponse':
    {
       //var_dump($_REQUEST);
        $key=$_REQUEST["horoscope"];
        include 'views/reponse.php';
        break;
    }

  case 'connexion':
    {
      $login=$_REQUEST['login'];
      $mdp=$_REQUEST['mdp'];
      $flag=false;

      foreach($connexion as $v) {
            if(isset($v[$login]) && $mdp==$v[$login]) $flag=true;
      }
      if($flag){
        include 'views/choix.php';
      }
      else{
        include 'views/connexion.php';
      }
      break;
    } 

    default:
    {include 'views/connexion.php';}  
}
?>

    
