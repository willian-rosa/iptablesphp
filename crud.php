<h1>IPTABLES</h1>

<form action="save.php" method="post">
    <div class="well">
        <table class="table">
            <thead>
            <tr>
                <th colspan="2"> EXECUCAO DE FIREWALL IPTABLES</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>TABELA</td>
                <td>
                    <select id="tabela" name="tabela">
                        <option value="filter">filter</option>
                        <option value="nat">nat</option>
                        <option value="mangle">mangle</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>CADEIA(Chain)</td>
                <td>
                    <input type="text" size="50" name="cadeia" value="">
                </td>
            </tr>
            <tr>
                <td>PROTOCOLO</td>
                <td>
                    <select id="protocolo" name="protocolo">
                        <option value="tcp" selected="tcp" >TCP</option>
                        <option value="udp">UDP</option>
                        <option value="icmp">ICMP</option>
                        <option value="all">TODOS</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>IP</td>
                <td><input type="text" size="11" maxlength="11" name="ip" id="ip" Value=""></td>
            </tr>
            <tr>
                <td>PORTA(max:65535)</td>
                <td><input type="text" size="11" maxlength="5" name="porta" value=""></td>
            </tr>
            <tr>
                <td>Permissoes(Target)</td>
                <td>
                    <select id="alvo" name="alvo">
                        <option value="ACCEPT" selected="selected">ACCEPT</option>
                        <option value="REJECT">REJECT</option>
                        <option value="all">TODOS</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="hidden" name="activar" value="1">
                    <button type="submit" class="btn btn-success">Success</button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</form>