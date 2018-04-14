<?php
$template = 'templates/template.php';

function main() {
    model_hosts()->create();
    ob_start();
    ?>
    <table class="table table-condensed table-striped">
        <tr>
            <th>Nome</th>
            <th>Endereço</th>
            <th style="width: 150px">Remover</th>
        </tr>
        <?php foreach (model_hosts()->get() as $host): ?>
            <tr>
                <td><?= $host->nome ?></td>
                <td><?= $host->endereco ?></td>
                <td><?php button('Remover', 'click="remover(' . $host->id . ')" color="danger"', 12) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <?php
    $html = ob_get_contents();
    ob_end_clean();
    html('#tabela', $html);
}

function adicionar($form) {
    model_hosts()->fromArray($form)->insert();
    setValue('name=nome', '');
    setValue('name=endereco', '');
    focus('name=nome');
    main();
    notify('Adicionado com sucesso', 'success');
}

function remover($form) {
    model_hosts()->where([
        'id' => $form['post0']
    ])->delete();
    main();
    notify('Removido com sucesso', 'success');
}

function processar($form) {

    $conf = <<<CONF

Alias /bitnami/ "/opt/lampp/apache2/htdocs/"
Alias /bitnami "/opt/lampp/apache2/htdocs"

<Directory "/opt/lampp/apache2/htdocs">
    Options Indexes FollowSymLinks
    AllowOverride All
    Order allow,deny
    Allow from all
</Directory>
<VirtualHost *:80>
    ServerName localhost
    DocumentRoot /opt/lampp/htdocs
</VirtualHost>
            
CONF;
    $hosts = <<<H
127.0.0.1	localhost
127.0.1.1	felipe-A68F2P-M2

# The following lines are desirable for IPv6 capable hosts
::1     ip6-localhost ip6-loopback
fe00::0 ip6-localnet
ff00::0 ip6-mcastprefix
ff02::1 ip6-allnodes
ff02::2 ip6-allrouters

H;
    foreach (model_hosts()->get() as $host) {
        $conf .= <<<CONF

<VirtualHost *:80>
    ServerName $host->endereco
    DocumentRoot $host->nome
</VirtualHost>

CONF;
        $hosts .= '127.0.0.1    '.$host->endereco.PHP_EOL;
    }
    file_put_contents('/opt/lampp/apache2/conf/httpd.conf', $conf);
    file_put_contents('/etc/hosts', $hosts);

    $retorno = system('echo "123" | sudo -u root -S /opt/lampp/lampp reload');
    if ($retorno === false) {
        notify('Ocorreu um erro ao recarregar', 'error');
    } else {
        notify('Pronto');
    }
}
?>
<form init="main" class="row mt-3">
    <?php
    label_text('Root', 'nome', 12);
    label_text('Endereço', 'endereco', 12);
    button('Adicionar', 'click="adicionar()"', 10);
    button('Processar', 'click="processar()" color="success"', 2);
    ?>
</form>
<!--<pre>/bin/bash echo "123" | sudo -u root -S /opt/lampp/lampp reload</pre>-->
<form>
    <div id="tabela" class="mt-5">
    </div>
</form>
<?php
