<?php include_once "header.php"?>
<form  method="post">
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
        <input type="text" name="instagram"></label><br>
        
        <label>Twitter:
        <input type="text" name="twitter"></label><br>

        <label>Facebook:
        <input type="text" name="facebook"></label><br>

        <label>Linkedin:
        <input type="text" name="linkedin"></label><br>

        <label>Youtube:
        <input type="text" name="youtube"></label><br>

        <label>Senha:
        <input type="password" name="senha"></label><br>

        <label>Foto:
        <input type="text" name="foto"></label><br>

        <label>Fundo:
        <input type="text" name="fundo"></label><br>
        <button type="submit">Entrar</button>
    </div>
</form>
<?php include_once "footer.php"?>