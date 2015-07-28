<?php 
    include 'mvc/controller/User.class.php';
    include 'mvc/controller/User_manager.class.php';
    session_start(); 
    
    $users = array(); 
    
    $manager = new User_manager($users);
    
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
            if (isset($session_user) && $session_user != "") {                
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
