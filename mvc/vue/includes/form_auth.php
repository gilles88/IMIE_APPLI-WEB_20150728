<form class="form-signin" method="POST">
	<h1 class="form-signin-heading text-muted">Se connecter</h1>
	<input type="text" class="form-control" name="email" placeholder="Email" required="" autofocus="">
	<input type="password" class="form-control" name="pass" placeholder="Mot de passe" required="">
	<button class="btn btn-lg btn-primary btn-block" type="submit">
		Se connecter
	</button>
</form>

<?php 
	if (isset($_POST) && !empty($_POST)) {
		extract($_POST);
		
	}
 ?>