<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<title>Teach'r</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

		<link rel="stylesheet" href="framework/dist/main.css">
		<script src="framework/src/js/jquery-3.5.1.min.js"></script>
		<script src="framework/src/js/node_modules/jquery-resizable-dom/dist/jquery-resizable.min.js"></script>
		
        <link rel="stylesheet" href="framework/src/js/Trumbowyg-master/dist/ui/trumbowyg.min.css">
		<link rel="stylesheet" href="framework/src/js/Trumbowyg-master/dist/plugins/colors/ui/trumbowyg.colors.min.css">
		<link rel="stylesheet" href="framework/src/js/Trumbowyg-master/dist/plugins/emoji/ui/trumbowyg.emoji.min.css">
		<link rel="stylesheet" href="framework/src/js/Trumbowyg-master/dist/plugins/table/ui/trumbowyg.table.min.css">
		<link rel="stylesheet" href="framework/dist/site-pages.css">
        
        <script src="framework/src/js/Trumbowyg-master/dist/trumbowyg.min.js"></script>
		<script src="framework/src/js/Trumbowyg-master/dist/plugins/colors/trumbowyg.colors.min.js"></script>
		<script src="framework/src/js/Trumbowyg-master/dist/plugins/emoji/trumbowyg.emoji.min.js"></script>
		<script src="framework/src/js/Trumbowyg-master/dist/plugins/fontfamily/trumbowyg.fontfamily.min.js"></script>
		<script src="framework/src/js/Trumbowyg-master/dist/plugins/fontsize/trumbowyg.fontsize.min.js"></script>
		<script src="framework/src/js/Trumbowyg-master/dist/plugins/history/trumbowyg.history.min.js"></script>
		<script src="framework/src/js/Trumbowyg-master/dist/plugins/indent/trumbowyg.indent.min.js"></script>
		<script src="framework/src/js/Trumbowyg-master/dist/plugins/insertaudio/trumbowyg.insertaudio.min.js"></script>
		<script src="framework/src/js/Trumbowyg-master/dist/plugins/lineheight/trumbowyg.lineheight.min.js"></script>
		<script src="framework/src/js/Trumbowyg-master/dist/plugins/noembed/trumbowyg.noembed.min.js"></script>
		<script src="framework/src/js/Trumbowyg-master/dist/plugins/table/trumbowyg.table.min.js"></script>
		<script src="framework/src/js/Trumbowyg-master/dist/plugins/upload/trumbowyg.upload.min.js"></script>
		<script src="framework/src/js/Trumbowyg-master/dist/plugins/resizimg/trumbowyg.resizimg.min.js"></script>	

	</head>
	<body style="display: flex;">
		<header>
			<div class="row col-m-12">
								<div id="nav-top">
										<div class='nav-top-left'>
												<div class="logo col-s-3 col-m-2 col-l-2">
														<a href="/tableau-de-bord"><img class="col-s-9 col-m-9" src="../../framework/img/Logo teach'r.svg" width="50" height="60"></a>
												</div>
										</div>
										
										<div class="link-nav-bar col-s-2 col-m-2 col-l-pull-2">
												<a href="<?php echo $_SESSION['slug_accueil'][0]["slug"]; ?>" class="link-top-nav-front"><img src="../../framework/img/home.png" alt="Home button" width="19" height="18" />Mon site</a>
										</div>
										<div class="link-nav-bar col-m-2 col-l-pull-4">
												<a href="/apparence" class="link-top-nav-front"><img src="../../framework/img/add.png" alt="plus button" width="19" height="18">Créer</a>
										</div>
										<a href="profil" class="link-nav-bar col-s-2 col-m-2 col-l-1" style="cursor: pointer;">
                                                <?php echo $_SESSION['pseudo'];?>
                                                <?php if(file_exists($_SESSION['avatar']) && isset($_SESSION['avatar'])) {
                                                        ?>
                                                        <img src="<?= "../".$_SESSION['avatar'];?>" width="35" style='margin-left: 10px;'/>
                                                        <?php    
                                                        }else {
                                                        ?>
                                                        <img src="../public/img/default-avatar.jpg" width="35" style='margin-left: 10px;'/>
                                                        <?php
                                                        }
                                                        ?>
                                        </a>
								</div>
						</div>
						<div class="link-nav-bar col-s-2 col-m-2 col-l-pull-2">
							<a href="<?php echo $_SESSION['slug_accueil'][0]["slug"]; ?>" class="link-top-nav-front"><img src="../../framework/img/home.png" alt="Home button" width="19" height="18" />Mon site</a>
						</div>
						<div class="link-nav-bar col-m-2 col-l-pull-4">
							<a href="/apparence" class="link-top-nav-front"><img src="../../framework/img/add.png" alt="plus button" width="19" height="18">Créer</a>
						</div>

					</div>
			</div>
		</header>

		<main>
			<div id="nav-left-front" style="width: 40vh;">

				<p class="titre-menu-tpl">Texte</p>
				<div class="buttons-tpl">
					<button class="button-left-nav-front-tpl" onclick="addText()">Zone de texte</button>
					<button class="button-left-nav-front-tpl" onclick="addTitle()">Titre</button>
				</div>

				<hr class="separateur-tpl">

				<p class="titre-menu-tpl">Liens</p>
				<div class="buttons-tpl">
					<button class="button-left-nav-front-tpl" onclick="addLink()">Lien</button>
				</div>

				<hr class="separateur-tpl">

				<p class="titre-menu-tpl">Boutons</p>
				<div class="buttons-tpl">
					<button class="button-left-nav-front-tpl" onclick="addRedButton()">Rouge</button>
					<button class="button-left-nav-front-tpl" onclick="addDarkBlueButton()">Bleu foncé</button>
					<button class="button-left-nav-front-tpl" onclick="addBlackButton()">Noir</button>
					<button class="button-left-nav-front-tpl" onclick="addPinkButton()">Rose</button>
					<button class="button-left-nav-front-tpl" onclick="addGreenButton()">Vert</button>
					<button class="button-left-nav-front-tpl" onclick="addGreyButton()">Gris</button>					
				</div>

				<hr class="separateur-tpl">

				<p class="titre-menu-tpl">Menus</p>
				<div class="buttons-tpl">
					<button class="button-left-nav-front-tpl" onclick="addBlackNavigation()">Noir</button>
					<button class="button-left-nav-front-tpl" onclick="addDarkBlueNavigation()">Bleu foncé</button>
					<button class="button-left-nav-front-tpl" onclick="addSkyBlueNavigation()">Bleu ciel</button>
				</div>

				<hr class="separateur-tpl">

				<p class="titre-menu-tpl">Menus déroulants</p>
				<div class="buttons-tpl">
					<button class="button-left-nav-front-tpl" onclick="addDropDownMenuBlack()">Noir</button>
					<button class="button-left-nav-front-tpl" onclick="addDropDownMenuDarkBlue()">Bleu foncé</button>
					<button class="button-left-nav-front-tpl" onclick="addDropDownMenuSkyBlue()">Bleu ciel</button>
				</div>

				<hr class="separateur-tpl">

				<p class="titre-menu-tpl">Templates</p>
				<div class="buttons-tpl">
					<button class="button-left-nav-front-tpl" onclick="addTemplateUn()">Template 1</button>
					<button class="button-left-nav-front-tpl" onclick="addTemplateDeux()">Template 2</button>
				</div>
				
			</div>
			
			<div id="content">
				<?php include $this->view ?>
			</div>
		</main>
	</body>
</html>