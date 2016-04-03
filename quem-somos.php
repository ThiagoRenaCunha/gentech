<?php
	$pagTitulo="Quem Somos | GenTech University";
	$pagDesc ="GenTech University - Graduação, Pós-Graduação, Extensão";
	$pagUrl = "quem-somos/";
?>
<!DOCTYPE html>
<html lang="pt-BR">
	<?php
		include("_head.php");
	?>
<body>
	<?php
		include("_header.php");
	?>
	<section id="quem-somos" class="paddingTopo"></section>

	<section id="quem-somos" class="paddingPadrao">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="clearfix"></div>
					<h1 class="titSite">Quem <strong>Somos</strong></h1>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quia dignissimos dolorum quam,
						 eaque facilis recusandae, ipsam iure voluptatum minima non porro doloribus dolorem dolor animi!
						 Voluptate iure hic repudiandae!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores
						 quia dignissimos dolorum quam, eaque facilis recusandae, ipsam iure voluptatum minima non porro
						 doloribus dolorem dolor animi! Voluptate iure hic repudiandae!
					</p>
				</div>
				<div class="col-sm-6">
					<img class="img-responsive img-brain" src="<?=$SiteURL?>img/brain.png" alt="">
				</div>
			</div>
		</div>
	</section>
	<section id="missao" class="paddingPadrao">
		<div class="container">
			<div class="row text-center">
				<div class="col-sm-4">
					<img class="img-responsive center-block" src="<?=$SiteURL?>img/missao.png" alt="">
					<h2 class="text-center">Missão</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, dignissimos illum, molestias
					 voluptate, laudantium earum perspiciatis nisi quae, aliquam asperiores vero! Officiis cum natus
					 vitae rem, autem commodi odit expedita.</p>
				</div>
				<div class="col-sm-4">
					<img class="img-responsive center-block" src="<?=$SiteURL?>img/visao.png" alt="">
					<h2 class="text-center">Visão</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, dignissimos illum, molestias
					 voluptate, laudantium earum perspiciatis nisi quae, aliquam asperiores vero! Officiis cum natus
					 vitae rem, autem commodi odit expedita.</p>
				</div>
				<div class="col-sm-4">
					<img class="img-responsive center-block" src="<?=$SiteURL?>img/valores.png" alt="">
					<h2 class="text-center">Valores</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, dignissimos illum, molestias
					 voluptate, laudantium earum perspiciatis nisi quae, aliquam asperiores vero! Officiis cum natus
					 vitae rem, autem commodi odit expedita.</p>
				</div>
			</div>
		</div>
	</section>





	<?php
		include("_footer.php");
	?>
</body>
</html>