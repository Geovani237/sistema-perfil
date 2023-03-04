<?php 

$pasta = "img/";
//Montar o novo nome do arquivo
$nomeDoArquivo = $_FILES["foto"]["name"]; //pega o nome antigo
$extensao = explode(".",$nomeDoArquivo,);//quebra o nome antigo em array para poder pegar apenas a extensão
$nomeNovo = round(microtime(true)) . "." . end($extensao); // pega um número MICROTIME, arredonda (ROUND) e concatena com o último valor do array aonde está a extensão

//Montar o novo nome do arquivo!!!
echo $nomeNovo;
 

move_uploaded_file($_FILES["foto"]["tmp_name"], $pasta . $nomeNovo);

?>



