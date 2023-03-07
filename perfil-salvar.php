<?php 
 // pega um número MICROTIME, arredonda (ROUND) e concatena com o último valor do array aonde está a extensão
 


include_once "conexao.php";

$nome = $_POST ['nome'];
$email = $_POST ['email'];
$profissao = $_POST ['profissao'];
$descricao = $_POST ['descricao'];
$instagram = $_POST ['instagram'];
$twitter = $_POST ['twitter'];
$facebook = $_POST ['facebook'];
$linkedin = $_POST ['linkedin'];
$youtube = $_POST ['youtube'];
$senha = $_POST ['senha'];
$fundo = $_POST ['fundo'];

//Nome foto - inicio
$pasta = "img/";
$nomeDoArquivo = $_FILES["foto"]["name"]; 
$extensao = explode(".",$nomeDoArquivo,);
$nomeNovo = $pasta . round(microtime(true)) . "." . end($extensao);
//Nome foto - fim

//upload da foto 
move_uploaded_file($_FILES["foto"]["tmp_name"], $nomeNovo);

$senha = md5($senha);

$sql = "INSERT into tb_perfil (nome,email,profissao,descricao,instagram,twitter,facebook,linkedin,youtube,senha,foto,fundo) VALUES('$nome','$email','$profissao','$descricao','$instagram','$twitter','$facebook','$linkedin','$youtube','$senha','$nomeNovo','$fundo')";
mysqli_query($conexao,$sql);
mysqli_close($conexao);

header('location: perfil-painel.php');
?>
