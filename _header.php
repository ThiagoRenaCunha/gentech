
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?=$SiteURL?>">
				<img src="<?=$SiteURL?>img/logo-menu-2.png" alt="" class="img-responsive logo">
			</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li class="hvr-underline-from-left"><a href="<?=$SiteURL?>">Home</a></li>
				<li class="hvr-underline-from-left"><a href="<?=$SiteURL?>quem-somos/">Quem Somos</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle hvr-underline-from-left" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cursos <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a class="hvr-underline-from-left" href="<?=$SiteURL?>cursos/graduacao/">Graduação</a></li>
						<li><a class="hvr-underline-from-left" href="<?=$SiteURL?>cursos/pos-graduacao/">Pós-Graduação</a></li>
						<li><a class="hvr-underline-from-left" href="<?=$SiteURL?>cursos/extensao/">Extensão</a></li>
					</ul>
				</li>
				<li class="hvr-underline-from-left"><a href="<?=$SiteURL?>contato-e-localizacao/">Contato e Localização</a></li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>