<?php
include_once "sessao-login.php";
include_once "header.php";
include_once "menu.php";
?>
<main class="container">
    <div class="menu">
        <?php include_once  "menu.php"; ?>
    </div>
    <h1>Painel</h1>

    <a href="relatorio.php" class="btn btn-primary">Relatório</a>

    <table class="table table-hover">

        <tr>
            <td>Código</td>
            <td>Nome</td>
            <td>Profissão</td>
            <td>E-mail</td>
        </tr>
        <?php
        include_once "conexao.php";
        $buscarPainel = "select * from tb_perfil";
        $painelColum = mysqli_query($conexao, $buscarPainel);
        while ($coluna = mysqli_fetch_assoc($painelColum)) {
       
        ?>

        <tr>
            <td><?php echo $coluna['id'];?></td>
            <td><?php echo $coluna['nome'];?></td>
            <td><?php echo $coluna['profissao'];?></td>
            <td><?php echo $coluna['email'];?></td>
        </tr>
        <?php 
        }
        mysqli_close($conexao);
        ?>
    </table>


</main>
<?php include_once "footer.php" ?>;