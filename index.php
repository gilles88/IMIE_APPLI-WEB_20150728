<?php 
    include 'mvc/controller/User.class.php';
    include 'mvc/controller/Chauffeur.class.php';
    include 'mvc/controller/Gestionnaire.class.php';
    include 'mvc/model/User_manager.class.php';
    session_start(); 
    
    $data_user = array(
        array("nom"=>"Ryan", "prenom"=>"Schneider","email"=>"et.tristique@sociisnatoque.co.uk","password"=>"Nunc"),
        array("nom"=>"Ryan", "prenom"=>"Burton","email"=>"Nam.ligula@et.com","password"=>"feugiat."),
        array("nom"=>"Kibo", "prenom"=>"Hatfield","email"=>"ornare@malesuadaut.ca","password"=>"Ut"),
        array("nom"=>"Gary", "prenom"=>"Long","email"=>"lorem@ProinmiAliquam.edu","password"=>"est"),
        array("nom"=>"Eric", "prenom"=>"Montoya","email"=>"luctus.ut.pellentesque@Donec.edu","password"=>"mauris"),
        array("nom"=>"Lev", "prenom"=>"Nichols","email"=>"Integer.vitae.nibh@elementumsemvitae.co.uk","password"=>"Quisque"),
        array("nom"=>"Hunter", "prenom"=>"Carlson","email"=>"consectetuer@sit.com","password"=>"placerat,"),
        array("nom"=>"Mohammad", "prenom"=>"Cline","email"=>"nulla.Integer@ipsum.ca","password"=>"id"),
        array("nom"=>"Tanner", "prenom"=>"Clay","email"=>"eget.massa.Suspendisse@ultricesmaurisipsum.org","password"=>"Nam"),
        array("nom"=>"Raja", "prenom"=>"Walter","email"=>"Proin.ultrices@cursus.com","password"=>"felis")
    );

    // Génération d'objets user
    $users = array();
    $manager = new User_manager($users);
    for ($i=0; $i < 8 ; $i++) { 
        $user = new Chauffeur($data_user[$i]["prenom"],$data_user[$i]["nom"],$data_user[$i]["email"],$data_user[$i]["password"], 0);
        $users = $manager->add_user($user);
    }

    for ($i=8; $i < 10 ; $i++) { 
        $user = new Gestionnaire($data_user[$i]["prenom"],$data_user[$i]["nom"],$data_user[$i]["email"],$data_user[$i]["password"], 0);
        $users = $manager->add_user($user);
    }


    //Authentification
    if (isset($_POST) && !empty($_POST)) {
        extract($_POST);
        $utilsateur_connecte = $manager->auth_user($email, $pass);     
        if(isset($utilsateur_connecte) && ($utilsateur_connecte->get_statut())) {
            $_SESSION['session_user'] = $utilsateur_connecte;               
        }else{
            $_SESSION['session_user'] = false;
        }
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gilles - Öner [IMIE-APPLI WEB]</title>
    <link href="mvc/vue/css/bootstrap.min.css" rel="stylesheet">
    <link href="mvc/vue/css/style.css" rel="stylesheet">
</head>
<body>
    <div class="site">
        <?php             
            $session_user = $_SESSION['session_user'];

            if (isset($session_user) && !empty($session_user)) {                
                include("mvc/vue/includes/accueil.php");
            }else{
                include("mvc/vue/includes/form_auth.php");
            }
         ?>
    </div>
    <script src="mvc/vue/js/jquery.js"></script>
    <script src="mvc/vue/js/bootstrap.min.js"></script>    
</body>
</html>
