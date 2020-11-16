<?php
if(isset ($_POST['activar'])) {

    //captura as variaveis do formulario
    $tabela = $_POST['tabela'];
    $Cadeia = $_POST['cadeia'];
    $Protocolo = $_POST['protocolo'];
    $IP = $_POST['ip'];
    $Porta = $_POST['porta'];
    $Alvo = $_POST['alvo'];

//    var_dump('ds');exit;

    //string com o comando a ser executado
    $CMD = "sudo iptables -t $tabela -A $Cadeia -p $Protocolo -s $IP --dport $Porta -j $Alvo";

    //Execução do Comando
    $resultado = shell_exec($CMD);
    shell_exec($CMD);
    echo "<p><b>CMD QUE VAI SER EXECUTADO</b>:</p> $CMD";
    echo "<p><b>(CASO FALHE) TESTE O CMD NA CONSOLA PARA VERIFICA A SUA VALIDADE</b>:</p>";

    /* Verifa se foi devolvido alguma mensagem é mostra*/
    if(!empty($resultado)) {
        echo "<p><b>O CMD devolveu o seguinte</b>:</p> $resultado";
    }else {
        echo "<p><b>O CMD não devolveu NADA</b>:</p>";
    }
}
