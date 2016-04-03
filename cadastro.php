<?php

	include("connect.php");

	$nome 		= $_POST["nome"];
	$cep 		= $_POST["cep"];
	$logradouro = $_POST["logradouro"];
	$bairro 	= $_POST["bairro"];
	$cidade 	= $_POST["cidade"];
	$uf 		= $_POST["uf"];
	$cpf 		= $_POST["cpf"];
	$rg 		= $_POST["rg"];
	$profissao 	= $_POST["profissao"];
	$emailpart 	= $_POST["emailpart"];
	$emailprof 	= $_POST["emailprof"];
	$telpart 	= $_POST["telpart"];
	$telprof 	= $_POST["telprof"];
	$curso 		= $_POST["curso"];



	// if ($inserir_insc = true){
	// 	echo "<script>alert('Contato enviado com sucesso! Em breve estaremos respondendo.');history.go(-1) </script>";
	// }else{
	// 	echo "<script>alert('Não foi possível enviar o contato, tente mais tarde.');history.go(-1) </script>";
	// }





	$select_id_cpf = "SELECT cpf FROM tb_inscricao";
	$sql_select_cpf = mysqli_query($con, $select_id_cpf);

	$valida_cpf = mysqli_fetch_assoc($sql_select_cpf);

	if(!in_array ( $cpf ,  $valida_cpf )){
			$inserir_insc = "INSERT INTO tb_inscricao(nome, cpf, rg, profissao, email_particular, email_comercial, tel_particular, tel_comercial, id_curso)
			VALUES('$nome', '$cpf', '$rg', '$profissao', '$emailpart', '$emailprof', '$telpart', '$telprof', '$curso')";
		$sql_inserir_insc = mysqli_query($con, $inserir_insc);
		$inserir_id_insc = mysqli_insert_id($con);
	}else{
		echo "<script language='javascript'>alert('CPF já cadastrado!'); location.href='inscricao.php'</script>";
	}



	if($sql_inserir_insc){
		$inserir_cep = "INSERT INTO tb_cep (cep, logradouro, bairro, cidade, uf) 
			VALUES ('$cep', '$logradouro', '$bairro', '$cidade', '$uf');";
			$sql_inserir_insc = mysqli_query($con, $inserir_cep);
			$inserir_id_cep = mysqli_insert_id($con);


			$atualiza_usuario_cep = "UPDATE tb_inscricao SET id_cep = $inserir_id_cep WHERE = $inserir_id_insc";
			$sql_atualiza_usuario_cep = mysqli_query($con, $atualiza_usuario_cep);

			mysqli_close($con);
			echo "<script language='javascript'>alert('Cadastro finalizado!'); location.href='cadastroPdf.php?id=".$inserir_id_insc."'</script>";
	} else {
		echo "<script language='javascript'>alert('Cadastro não finalizado!'); location.href='inscricao.php'</script>";
	}





?>
