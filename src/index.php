<!DOCTYPE html>
<?php 
   include_once "db/default.inc.php";
   require_once "db/Connection.php";
   include_once "aluno.class.php";
   $title = "Lista de Marcas";
   $procurar = isset($_POST["procurar"]) ? $_POST["procurar"] : ""; 

?>
<html>
<head>
    <meta charset="UTF-8">
    <title> <?php echo $title; ?> </title>
    <script src="js/util.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form method="post">
    <fieldset>
        <legend>Procurar Alunos</legend>
        <input type="text"   name="procurar" id="procurar" size="37" value="<?php echo $procurar;?>">
        <input type="submit" name="acao"     id="acao">
        <br><br>
        <table>
	    <tr>
            <td><b>Id</b></td>
            <td><b>Nome</b></td>
            <td><b>N1</b></td> 
            <td><b>N2</b></td> 
            <td><b>N3</b></td> 
            <td><b>N4</b></td>
            <td><b>Média</b></td> 
            <td><b>Situação</b></td> 
        </tr>
        <?php
            $pdo = Conexao::getInstance(); 
            $consulta = $pdo->query("SELECT * FROM aluno 
                                     WHERE nome LIKE '$procurar%' 
                                     ORDER BY nome");
            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) { 
                $aluno = new Aluno($linha['id'], $linha['nome'], $linha['n1'], $linha['n2'], $linha['n3'], $linha['n4']);
        ?>
	    <tr><td><?php echo $aluno->getId();?></td>
            <td><?php echo $aluno->getNome();?></td>
            <td><a href="javascript:excluirRegistro('acaoAluno.php?acao=excluir&id=<?=$aluno->getId()?>')">Excluir</a></td>
	    </tr>
        <?php } ?>   
        </table>
        <a href="cadAluno.php">Adicionar</a>
    </fieldset>
    </form>
</body>
</html>
