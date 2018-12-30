<?php
	$this->load->helper('url');
?>
<!DOCTYPE HTML>
<html lang="fr">
	<head>
		<title>Intranet du Laboratoire Galaxy-Swiss Bourdin</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="icon" type="image/x-icon" href="<?php echo img_url('favicon.ico');?>">
		<link rel="stylesheet" type="text/css" href="<?php echo css_url('styles.css');?>">
		<link rel="stylesheet" type="text/css" href="<?php echo jquery_url('jquery-ui-1.12.1/jquery-ui.min.css');?>">
		<script src="<?php echo jquery_url('jquery-1.12.4.min.js');?>"></script>
		<script src="<?php echo jquery_url('jquery-ui-1.12.1/jquery-ui.min.js');?>"></script>
		<script src="<?php echo jquery_url('jquery-ui-1.12.1/datepicker-fr.js');?>"></script>
		<script src="<?php echo jquery_url('plugins/jquery-mask-plugin/src/jquery.mask.min.js');?>"></script>
		<script src="<?php echo js_url('functions.js');?>"></script>
	</head>
	<body>
		<header>
			<div id="logo">
				<?php
					$img = '<img src="'.img_url('logo.png').'" alt="Laboratoire Galaxy-Swiss Bourdin" title="Laboratoire Galaxy-Swiss Bourdin">';
					$path = 'c_visiteur';
					echo anchor($path, $img);
				?>
			</div>
			<div id="titre">
				<h1>Gestion des frais de déplacements</h1>
			</div>
		</header>
		<aside>
			<div id="toggle-menu-container">
				<input class="toggle-menu" value="Menu &#9776;" onclick="displayMenu();" type="button"/>
			</div>
		</aside>
		<main>
			<div id="menu">
				<div id="menu-list">
					<div id="utilisateur-infos">
						<div id="utilisateur-groupe">Visiteur :</div>
						<div id="utilisateur-nom"><?php echo $this->session->userdata('prenom').' '.$this->session->userdata('nom');?></div>
						<?php echo anchor('c_visiteur/monCompte', 'Mon compte', 'class="utilisateur-smenu" title="Consulter mon compte"');?>
						<?php echo anchor('c_visiteur/deconnecter', 'Se déconnecter', 'class="utilisateur-smenu utilisateur-deconnexion" title="Déconnexion"');?>
					</div>
					<?php echo anchor('c_visiteur', 'Accueil', 'class="smenu" title="Page d\'accueil"');?>
					<?php echo anchor('c_visiteur/mesFiches', 'Mes fiches de frais', 'class="smenu" title="Consulter mes fiches de frais"');?>
				</div>
			</div>
			<div id="contenu">
				<?php echo $body;?>
			</div>
		</main>
		<footer>
			<div id="block">
			</div>
			<div id="copyright">
				<h5>Copyright &copy; 2009-<?php echo date("Y");?> Laboratoire Galaxy-Swiss Bourdin</h5>
			</div>
		</footer>
	</body>
</html> 