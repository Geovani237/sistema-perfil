<?php include_once "header.php" ?>
<form action="perfil-salvar.php" method="post" enctype="multipart/form-data">
    <div>
        <label>Nome:
            <input placeholder="Nome" type="text" name="nome"></label><br>

        <label>E-mail:
            <input placeholder="E-mail" type="email" name="email"></label><br>

        <label>Profissão:
            <input placeholder="Profissão" type="text" name="profissao"></label><br>

        <p>
            <label>Descricão:</label>
            <textarea placeholder="Descrição" type="text" name="descricao"></textarea><br>
        </p>

        <label>Instagram:
            <input placeholder="Instagram" type="text" name="instagram"></label><br>

        <label>Twitter:
            <input placeholder="Twitter" type="text" name="twitter"></label><br>

        <label>Facebook:
            <input placeholder="Facebook" type="text" name="facebook"></label><br>

        <label>Linkedin:
            <input placeholder="Linkedin" type="text" name="linkedin"></label><br>

        <label>Youtube:
            <input placeholder="Youtube" type="text" name="youtube"></label><br>

        <label>Senha:
        <input placeholder="Senha" type="password" name="senha"></label><br>

        <label>Foto:</label>
        <input type="file" name="foto">
        <br>

        <label>Fundo:
            <input placeholder="Fundo" type="text" name="fundo"></label><br>

        <button type="submit">Entrar</button>
    </div>
</form>
<?php include_once "footer.php" ?>
