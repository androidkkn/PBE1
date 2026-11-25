<?php 

require_once 'ClientePF.php';
require_once 'ClientePJ.php';


$c[0] = new ClientePF("CF", "teste@fisico.com", "123-123-123-00");
$c[1] = new ClientePJ("CJ", "teste@juridico.com", "123-123-123/0001-12"); 

foreach($c as $clientes){
    echo $clientes->getDados();
}
?>