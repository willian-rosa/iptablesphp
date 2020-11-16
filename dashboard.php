<?php
//string com o comando a ser executado
$cmdList = "sudo iptables -L";

//Execução do Comando
$resultCmdList = shell_exec($cmdList);

?>
<div>
    <textarea style="width: 100%; height: 500px;"><?php echo $resultCmdList;?></textarea>
</div>


<a href="cadastrar.php" class="btn btn-success">Cadastrar Regras</a>