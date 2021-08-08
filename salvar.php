<?php
// conexão
include 'conexao.php';

//recebendo dados do formulário
$nome=$_POST['nome'];
$cpf=$_POST['CPF'];
$funcao=$_POST['funcao'];

//inserir os dados preenchidos no banco de dados
$sql="INSERT INTO `tb_pessoa` (`pes_id`, `pes_nome`, `pes_CPF`, `pes_funcao`) VALUES (NULL,
 '$nome', '$cpf', '$funcao');";

 //executar o comando sql 
 mysqli_query($conexao,$sql);
?>
<script type="text/javascript">
    alert("Salvo com sucesso!");
    window.location.href="index.php";
</script>