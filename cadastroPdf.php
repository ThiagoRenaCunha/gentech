<?php
include("connect.php");
include "fpdf/fpdf.php"; 

$id = $_GET['id'];

$procura_insc_query = "SELECT i.nome, i.id_insc, i.cpf, i.rg, c.nome AS 'curso', i.email_particular,
 i.tel_particular FROM tb_inscricao i, tb_curso c WHERE c.id_curso = i.id_curso AND id_insc = $id";
$sql = mysqli_query($con, $procura_insc_query);

$search = mysqli_fetch_assoc($sql);

$nome = $search['nome'];
$id = $search['id_insc'];
$cpf = $search['cpf'];
$rg = $search['rg'];
$curso = $search['curso'];
$email = $search['email_particular'];
$telefone = $search['tel_particular'];



$pdf = new FPDF();
$pdf->Open();
$pdf->AddPage();


$pdf->SetFont("Arial",'', 12);

$cabecalho = 'Teste';
$pdf->MultiCell(0,10,"Cartao de Confirmacao",1, 'C');
$pdf->MultiCell(0,20,"$nome ($id)",1, 'C');
$pdf->Ln(6);
$pdf->MultiCell(0,6,"CPF",1,'C');
$pdf->MultiCell(0,10,"$cpf",1, 'C');	
$pdf->Ln(2);
$pdf->MultiCell(0,6,"RG",1,'C');
$pdf->MultiCell(0,10,"$rg",1, 'C');	
$pdf->Ln(2);	
$pdf->Ln(2);
$pdf->MultiCell(0,6,"CURSO",1,'C');
$pdf->MultiCell(0,10,"$curso",1, 'C');	
$pdf->Ln(2);
$pdf->MultiCell(0,6,"EMAIL",1,'C');
$pdf->MultiCell(0,10,"$email",1, 'C');	
$pdf->Ln(2);
$pdf->MultiCell(0,6,"TELEFONE",1,'C');
$pdf->MultiCell(0,10,"$telefone",1, 'C');	
$pdf->Ln(2);




ob_clean(); // Limpa o buffer de saída

$pdf->Output();
exit;
?>