<?php
	$pagTitulo="Inscrição | GenTech University";
	$pagDesc ="GenTech University - Graduação, Pós-Graduação, Extensão";
	$pagUrl = "inscricao/";
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
	<section id="inscricao">
		<div class="container">
			<h1 class="titulo"> Inscreva-se</h1>
			<form class="form-horizontal" action="cadastro.php" method="POST">
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required>
						</div>
						<div class="form-group">
							<input type="integer" class="form-control" name="cep" id="cep" placeholder="CEP">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="logradouro" id="logradouro" placeholder="Logradouro">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="bairro" id="bairro" placeholder="Bairro">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="uf" id="uf" placeholder="UF">
						</div>
						<div class="form-group">
							<input type="integer" class="form-control" name="cpf" id="cpf" placeholder="CPF" required>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<input type="integer" class="form-control" name="rg" id="rg" placeholder="RG" required>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="profissao" id="profissao" placeholder="Profissão" required>
						</div>
						<div class="form-group">
							<input type="email" class="form-control" name="emailpart" id="emailpart" placeholder="Email Particular" required>
						</div>
						<div class="form-group">
							<input type="email" class="form-control" name="emailprof" id="emailprof" placeholder="Email Profissional">
						</div>
						<div class="form-group">
							<input type="tel" class="form-control" name="telpart" id="telpart" placeholder="Telefone Particular" required>
						</div>
						<div class="form-group">
							<input type="tel" class="form-control" name="telprof" id="telprof" placeholder="Telefone Profissional">
						</div>
						<div class="form-group">
							<select class="form-control" name="curso" id="curso">
								<option value="" selected disabled>Curso</option>

								<option value="" disabled>------Graduação------</option>

								<option value="1">Administração</option>
								<option value="2">Design</option>
								<option value="3">Direito</option>
								<option value="4">Publicidade e Propaganda</option>
								<option value="5">Sistemas de Informação</option>

								<option value="" disabled>------Pós-Graduação------</option>

								<option value="6">Branding</option>
								<option value="7">Design de Interiores</option>
								<option value="8">Direito Civil e Processo Civil</option>
								<option value="9">Direito do Trabalho e Processo de Trabalhos</option>
								<option value="10">MBA em Gestão Estratégica de TI</option>

								<option value="" disabled>------Extensão------</option>

								<option value="11">Gestão Financeira</option>
								<option value="12">Montagem e Manutenção de Computadores</option>
								<option value="13">Petróleo e Gás</option>
								<option value="14">Rotinas Administrativas</option>
								<option value="15">Web Design</option>
							</select>
						</div>
					</div>
					<div class="form-group text-center">
						<input class="btn btn-geral hvr-grow" type="submit" value="Enviar" name="enviar" id="enviar">
					</div>
				</div>
			</form>
		</div>
	</section>

	<?php
		include_once("_footer.php");
	?>
</body>
</html>