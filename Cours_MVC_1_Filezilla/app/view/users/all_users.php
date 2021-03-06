<?php if(!defined("_BASE_URL")) die("Ressource interdite"); ?>
<?php include("app/view/layout/header.inc.php"); ?>

	<div class="container-fluid all-articles">
		
		<h1>Liste des utilisateurs du blog</h1>


		<p class="container-fluid">Il y a <?= $nb_users[0] ?> utilisateurs dans la base de données</p>

		<?php
			//Pour chaque utilisateur du tableau
			foreach($users as $user)
			{?>
				<div class="container liste_users">

					<p>
						Login: <?= $user['user_login']; ?>
					</p>
					 <p>
					 	Adresse mail: <?= $user['user_email']; ?>
					 </p>
					 <p> 
					 	Pseudo: <?= $user['display_name']; ?>
					</p>

				</div>

			<?php } ?>
	</div>

	<?php paginate($nb_users, PAGINATION_USERS, 'users', 'all_users'); ?>

<?php include("app/view/layout/footer.inc.php"); ?>
