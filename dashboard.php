<?php
//string com o comando a ser executado

$shell    = \MTS\Factories::getDevices()->getLocalHost()->getShell('bash', true);
$return1  = $shell->exeCmd('iptables -L');

?>
<div>
    <textarea style="width: 100%; height: 500px;"><?php echo $return1;?></textarea>
</div>


<a href="cadastrar.php" class="btn btn-success">Cadastrar Regras</a>