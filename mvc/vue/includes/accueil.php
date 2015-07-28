<nav>
    <a href="#" data-target="" class="active">Utilisateur</a>
    <a href="#" data-target="">Camions</a>
    <a href="#" data-target="">Missions</a>
    <span class="user_connect"><?php echo $_SESSION['session_user']->get_prenom()." ".$_SESSION['session_user']->get_nom() ?></span>
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
                </form>
            </div>
            <a href="#">Add chauffeur</a>
            <a href="#">Add gestionnaire</a>                    
        </div>
    </div>

    <div class="content">
         <?php 
            if (isset($_GET) && !empty($_GET)) {
                extract($_GET);
                $users_found = $manager->search_user($nom, $prenom);
            }
            if (count($users_found)) { ?>
                <table>
                    <tr>
                        <td>Nom</td>
                        <td>Prénom</td>
                        <td>Mail</td>
                        <td>Métier</td>
                        <td>Actions</td>
                    </tr>
                    <?php 
                    for ($i=0; $i < count($users_found); $i++) {
                        $row = $users_found[$i]; ?>
                        <tr>
                            <td><?php print $row->get_nom(); ?></td>
                            <td><?php print $row->get_prenom(); ?></td>
                            <td><?php print $row->get_mail(); ?></td>
                            <td>
                                <?php print get_class($row); ?>
                            </td>
                            <td>
                                <button>Edit</button>
                                <button>Suppr</button>
                            </td>
                        </tr>
                        <?php 
                    }
                     ?>
                </table>
            <?php }
         ?>                    
    </div>
</div>

 
