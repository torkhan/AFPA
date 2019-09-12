# AFPA-PHP
Cours php

## Types
- https://www.php.net/manual/fr/language.types.php

## Variables 
- https://www.php.net/manual/fr/language.variables.php

## Constantes
- https://www.php.net/manual/fr/language.constants.php

## Structures de base (if, while ...)
- https://www.php.net/manual/fr/language.control-structures.php

## Fonctions :
- Les fonctions définies par l'utilisateur : https://www.php.net/manual/fr/functions.user-defined.php
- Les arguments de fonction :  https://www.php.net/manual/fr/functions.arguments.php
- Les valeurs de retour : https://www.php.net/manual/fr/functions.returning-values.php
- Fonctions variables : https://www.php.net/manual/fr/functions.variable-functions.php
- Fonctions internes : https://www.php.net/manual/fr/functions.internal.php
- Fonctions anonymes : https://www.php.net/manual/fr/functions.anonymous.php


    // $req = $db->prepare("SELECT * FROM signit WHERE email = :email OR password1 = :password1");
    $req = $db->prepare("SELECT email, password1 FROM signit WHERE email = :email AND password1 = :password1");
    // changement des paramétres et controle des champs
    $req->bindParam(":email", $email, PDO::PARAM_STR);
    $req->bindParam(":password1", $pass);
    // execution de la requette

    $req->execute() ;

    while($data = $req->fetchObject()){
        //var_dump($data);
         echo '<p>'.$data->email.'  '.$data->password1.'  </p>';
