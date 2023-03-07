<?php
require_once "dompdf/autoload.inc.php";

use Dompdf\Dompdf;

$dompdf = new Dompdf();


$conteudo = "";
$conteudo .= "<table border='2' style='background:lightblue'>";
$conteudo .= "<tr>";
$conteudo .= "<td>ID</td>";
$conteudo .= "<td>Nome</td>";
$conteudo .= "<td>E-mail</td>";
$conteudo .= "</tr>";

include_once "conexao.php";
$buscarPainel = "select * from tb_perfil";
$painelColum = mysqli_query($conexao, $buscarPainel);
while ($coluna = mysqli_fetch_assoc($painelColum)) {

    $conteudo .= "<tr>";
    $conteudo .= "<td> $coluna[id]</td>";
    $conteudo .= "<td> $coluna[nome]</td>";
    $conteudo .= "<td> $coluna[email]</td>";
    $conteudo .= "</tr>";
}


mysqli_close($conexao);

$conteudo .= "</table>";

$dompdf->loadHtml("$conteudo");

$dompdf->setPaper('A4','landscape');
$dompdf->render();
$dompdf->stream();

?>


<!-- $conteudo = "";
$conteudo .= "<table border='2' style='background:lightblue'>";
$conteudo .= "<tr>";
$conteudo .= "<td>Nome</td>";
$conteudo .= "<td>E-mail</td>";
$conteudo .= "<td>Cidade</td>";
$conteudo .= "</tr>";
$conteudo .= "<tr>";
$conteudo .= "<td> $coluna[nome]</td>";
$conteudo .= "<td> $coluna[email]</td>";
$conteudo .= "<td>Americana</td>";
$conteudo .= "</tr>";
$conteudo .= "<tr>";
$conteudo .= "<td> $coluna[nome]</td>";
$conteudo .= "<td> $coluna[email]</td>";
$conteudo .= "<td>SBO</td>";
$conteudo .= "</tr>";
$conteudo .= "</table>"; -->