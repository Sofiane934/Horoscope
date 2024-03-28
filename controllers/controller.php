<?php
switch($action)
{ 
  
  case'reponse':
    {
        //var_dump($_REQUEST);
        $choix=$_REQUEST["horoscope"];
        $signe = getleSigne($choix);
        include 'views/reponse.php';
        break;
    }

  case 'connexion':
    {

      $login=$_REQUEST['login'];
      $mdp=$_REQUEST['mdp'];

      $flag=getconexion($login,$mdp);

      if($flag){
      $signe=getlesSignes();
      include 'views/choix.php';
      }
      else{
        include 'views/connexion.php';
      }
      break;
    } 

    case 'modifier' :
    {
      include 'views/admin.php';
      break;
    }

    case 'administrer' :
      {
        var_dump($_REQUEST);
        foreach($_REQUEST as $cle => $valeur){
          $signe[$cle] = $valeur;
        }
        break;
      }

    default:{
      include 'views/connexion.php';
    }  
}

