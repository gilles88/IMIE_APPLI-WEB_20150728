<nav>
    <a href="#" data-target="" class="active">Utilisateur</a>
    <a href="#" data-target="">Camions</a>
    <a href="#" data-target="">Missions</a>
    <span class="user_connect"><?php echo $utilsateur_connecte->getPrenom()." ".$utilsateur_connecte->getNom() ?></span>
    <span class="nb_connect">24</span>
</nav>

<div class="content">
    
    <div class="head">
        <div class="search">
            <div class="search_form">
                <form action="" method="GET">
                    <input type="text" class="form-control" placeholder="prenom" name="prenom">
                    <input type="text" class="form-control" placeholder="nom" name="nom">
                    <button class="btn btn-primary">Rechercher</button>
                    <?php 
                        if (isset($_GET) && !empty($_GET)) {
                            extract($_GET);
                            $resultat = $manager->search_user($nom, $prenom);     
                            print_r($resultat); die();                            
                        }
                     ?>                    
                </form>
            </div>
            <a href="#">Add chauffeur</a>
            <a href="#">Add gestionnaire</a>                    
        </div>
    </div>
</div>

 
