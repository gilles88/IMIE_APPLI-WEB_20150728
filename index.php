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
        <nav>
            <a href="#" data-target="">Utilisateur</a>
            <a href="#" data-target="">Camions</a>
            <a href="#" data-target="">Missions</a>
            <span class="user_connect">Gilles Montmirel</span>
            <span class="nb_connect">24</span>
        </nav>

        <div class="content">
            
            <div class="head">
                <div class="search">
                    <div class="search_form">
                        <form action="">
                            <input type="text" class="form-control" placeholder="prénom" name="prenom">
                            <input type="text" class="form-control" placeholder="nom" name="nom">
                            <button class="btn btn-primary">Rechercher</button>
                        </form>
                    </div>
                    <a href="#">Add chauffeur</a>
                    <a href="#">Add gestionnaire</a>                    
                </div>
            </div>

            
        </div>
    </div>

    <div class="content-user none">
        content user
    </div>

    <div class="content-camion none">
        content camion
    </div>
    
    <div class="content-mission none">
        content camion
    </div>

    <script src="mvc/vue/js/jquery.js"></script>
    <script src="mvc/vue/js/bootstrap.min.js"></script>
    <script>
        jQuery(document).ready(function($) {
            
        });
    </script>
</body>
</html>
