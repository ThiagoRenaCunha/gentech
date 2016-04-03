<?php
	$pagTitulo="Home | GenTech University";
	$pagDesc ="GenTech - University | Graduação, Pós-Graduação, Extensão";
	$pagUrl = "";
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
		<!-- INICIO CARROSSEL -->
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner paddingTopo" role="listbox">
				<div class="item active">
					<img src="<?=$SiteURL?>img/banner1.png" alt="...">
					<div class="carousel-caption">
						<p>
							<a class="btn btn-geral hvr-grow" href="<?=$SiteURL?>inscricao.php">Inscreva-se</a>
						</p>
					</div>
				</div>
				<div class="item">
					<img src="<?=$SiteURL?>img/banner2.png" alt="...">
					<div class="carousel-caption">
						<p>
							<a class="btn btn-geral hvr-grow" href="<?=$SiteURL?>inscricao.php">Inscreva-se</a>
						</p>
					</div>
				</div>
				<div class="item">
					<img src="<?=$SiteURL?>img/banner3.png" alt="...">
					<div class="carousel-caption">
						<p>
							<a class="btn btn-geral hvr-grow" href="<?=$SiteURL?>inscricao.php">Inscreva-se</a>
						</p>
					</div>
				</div>
			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		<!-- FIM CARROSSEL -->
		<section id="a-universidade" class="paddingPadrao">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<h2 class="titulo">A Universidade</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti corporis suscipit magnam
						 accusantium, cum dicta assumenda possimus nam, quod expedita nesciunt? Quas laudantium, ipsam
						 laboriosam rem magni assumenda blanditiis, alias.</p>
						<a class="btn btn-geral hvr-grow" href="<?=$SiteURL?>quem-somos.php">Saiba mais</a>
					</div>
					<div class="col-sm-6">
						<img class="img-responsive" src="<?=$SiteURL?>img/logo-branco.png" alt="">
					</div>
				</div>
			</div>
		</section>
		<section id="cursosHome">
			<div class="container">
				<h2>Conheça Nossos Cursos</h2>
				<div class="row">
					<div class="col-sm-5">
						<img class="img-responsive" src="<?=$SiteURL?>img/logo-footer-2.png" alt="">
					</div>
					<div class="col-sm-7">
						<h3 class="titulo">Graduação</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa deserunt dolorem eius aliquid quos,
						 similique ab veniam qui sapiente commodi, libero possimus voluptate ipsum error culpa sequi.
						 Repudiandae, cumque, fugit.</p>
						<a class="btn btn-geral hvr-grow" href="<?=$SiteURL?>graduacao.php">Saiba mais</a>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-7">
						<h3 class="titulo">Pós-Graduação</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa deserunt dolorem eius aliquid quos,
						 similique ab veniam qui sapiente commodi, libero possimus voluptate ipsum error culpa sequi.
						 Repudiandae, cumque, fugit.</p>
						<a class="btn btn-geral hvr-grow" href="<?=$SiteURL?>pos-graduacao.php">Saiba mais</a>
					</div>
					<div class="col-sm-5">
						<img class="img-responsive" src="<?=$SiteURL?>img/logo-footer-2.png" alt="">
					</div>
				</div>
				<div class="row">
					<div class="col-sm-5">
						<img class="img-responsive" src="<?=$SiteURL?>img/logo-footer-2.png" alt="">
					</div>
					<div class="col-sm-7">
						<h3 class="titulo">Extensão</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa deserunt dolorem eius aliquid quos,
						 similique ab veniam qui sapiente commodi, libero possimus voluptate ipsum error culpa sequi.
						 Repudiandae, cumque, fugit.</p>
						<a class="btn btn-geral hvr-grow" href="<?=$SiteURL?>extensao.php">Saiba mais</a>
					</div>
				</div>
			</div>
		</section>
		<?php
			include("_footer.php");
		?>
	</body>
</html>