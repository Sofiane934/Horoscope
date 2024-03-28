<?php

function signe (){
    $signe=array(
        'Bélier'=>'Vous devrez faire les efforts les plus sérieux pour acquérir un bon niveau.',
        'Taureau'=>'Une de vos plus grandes qualités est la capacité de saisir les théories.',
        'Gémeaux'=>"De temps à autre, admettez que vous n'êtes pas seul à raissoner avec logique.",
        'Cancer'=>'La rapidité de votre intelligence risque de vous entraîner à négliger certains détails.',
        'Lion'=>'Un effort vers la patience et la persévérance sera pour vous grandement payant.',
        'Vierge'=>"Faites l'effort de vous concentrer.",
        'Balance'=>'Vous avez une forte tendance à choisir les solutions astucieuses.',
        'Scorpion'=>'Renoncez à imposez vos propres données et appliquez les méthodes apprises.',
        'Sagittaire'=>"Pardonnez avec aisance et sans ambiguïté, mais n'acceptez aucun extrême.",
        'Capricorne'=>"Une certaine facilité ne doit pas vous détourner de l'objectif.",
        'Verseau'=>"Ce travail vous demandera beaucoup d'ingéniosité.",
        'Poissons'=>'Votre esprit vif et limpide facilite la résolution des problèmes.',
        );
        return $signe;
}

/*function connexion(){
    $connexion=array(
        1=>array('toto'=>'1234'),
        2=>array('titi'=>'789'),
    );
    return $connexion;
}*/

function connexion(){
    $serveur='mysql:host=localhost:3306';
    $bdd='dbname=horoscope';
    $user='root';
    $mdp="";
    try{
        $db = new PDO ($serveur.';'.$bdd, $user, $mdp);
        $db->query("SET CHARACTER SET utf8");
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        return $db;
    }catch (Exception $e){
        echo "Impossible de se connecter à la base de donnée.";
        echo $e->getMessage();
        die();
    }
}

function executerRequete($sql,$params = null){
    if ($params == null) {
        $resultat = connexion()->query($sql); //exécution directe
    }
    return $resultat;
}

function getConexion($login,$mdp) {
    $sql="SELECT COUNT(*) FROM connexion WHERE login='$login' and mdp='$mdp'";
    var_dump($sql);
    return executerRequete($sql)->fetchAll();    
}

?>