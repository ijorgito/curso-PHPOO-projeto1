<?php

require_once __DIR__ . '/bootstrap.php';
require_once __DIR__ . '/pages/header.php';

$permission = array('/pages/vizualizarCliente', 'index.php');

if(empty($pagina)){
    require_once __DIR__ . '/pages/listaClientes.php';
}elseif($pagina == 'visualizarCliente'){
    require_once __DIR__ . '/pages/visualizarCliente.php';
}elseif(isset($pagina ) && in_array($pagina,$permission)!= $permission){
    require_once __DIR__ . '/pages/404.php';
}else{
    require_once __DIR__ . '/pages/listaClientes.php';
}

require_once __DIR__ . '/pages/footer.php';
