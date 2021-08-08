<?php
    include 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>PHP com BD</title>

</head>
<body>
    <div class=formulario>
        <form method="POST" action="salvar.php" id="formulario">
            <label for="nome">ID</label>
            <input type="text" name="id">
            <label for="nome">Nome</label>
            <input type="text" name="nome">
            <label for="nome">CPF</label>
            <input type="text" name="CPF">
            <label for="nome">Função</label>
            <input type="text" name="funcao">
            <input type="submit" value="Salvar dados">
        </form>
    </div>

    <table border="1" class="tabela">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Função</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
        <?php
        //Pesquisar dados preenchidos no banco
        $sql="SELECT * FROM `tb_pessoa`";
        //executar o comando sql 
        $resultados=mysqli_query($conexao,$sql);
        while($linha=$resultados->fetch_assoc()){
            echo "<tr>
                    <td>".$linha['pes_id']."</td>
                    <td>".$linha['pes_nome']."</td>
                    <td>".$linha['pes_CPF']."</td>
                    <td>".$linha['pes_funcao']."</td>
                    <td><img src='imagens/edit.png' width='24px'></td>
                    <td><img src='imagens/gnome_edit_delete.png' width='24px'></td>
                </tr>";

        }

        ?>
    </table>
</body>
</html>