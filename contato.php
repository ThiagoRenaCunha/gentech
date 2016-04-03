<?php
	$pagTitulo="Contato e Localização | GenTech University";
	$pagDesc ="GenTech University - Graduação, Pós-Graduação, Extensão";
	$pagUrl = "contato-e-localizacao/";
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

	<section id="contato" class="paddingTopo">
		<div class="container">
			<div class="col-sm-12">
				<h1 class="titSite">Contato e <strong>Localização</strong></h1>
			</div>
			<form class="form-horizontal" action="" method="POST">
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-5">
						<div class="form-group">
							<input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required>
						</div>

						<div class="form-group">
							<input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
						</div>

						<div class="form-group">
							<input type="tel" class="form-control" name="telefone" id="telefone" placeholder="Telefone"
								onkeypress="mascara(this, '## #####-####')" maxlength="13" required>
						</div>
					</div>

					<div class="col-md-1"></div>

					<div class="col-md-5">
						<div class="form-group">
							<input type="text" class="form-control" name="assunto" id="assunto" placeholder="Assunto" required>
						</div>
						<div class="form-group">
							<textarea class="form-control" name="mensagem" id="mensagem" placeholder="Mensagem" required></textarea>
						</div>
					</div>
				</div>
				<div class="form-group text-center">
					<input class="btn btn-geral hvr-grow" type="submit" value="Enviar" name="enviar" id="enviar">
				</div>
			</form>
		</div>
	</section>	





	<?php
		include("_footer.php");
	?>
</body>
</html>