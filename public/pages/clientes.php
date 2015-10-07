<?php

require_once "/var/www/html/OO/Projeto01/src/app/classes/Clientes.php";
 
use src\app\classes\Clientes as Clientes;

$clientes[0] = new Clientes(1, "Adriele", "Brito", "079.999.999-90", "cliente1@email.com.br", "8999-9999", "Porto Alegre", 1, "apto", "RG", "24400-000", "RG", "rg" );
$clientes[1] = new Clientes(2, "Cintia", "Silva", "567.799.999-99", "cliente2@email.com.br", "8999-9999", "Manaus", 1, "casa", "AM", "24400-000", "AM", "am" );
$clientes[2] = new Clientes(3, "Sergio", "Santos", "234.799.999-99", "cliente3@email.com.br", "8999-9999", "Minas", 1, "duplex", "MG", "24400-000", "MG", "mg" );
$clientes[3] = new Clientes(4, "Vinicius", "Primo", "435.799.999-99", "cliente4@email.com.br", "8999-9999", "Rio de Janeiro", 1, "Bloco 01 Sala 02", "RJ", "24400-000", "RJ", "rj" );
$clientes[4] = new Clientes(5, "Maurício", "Lima", "854.799.999-99", "cliente5@email.com.br", "8999-9999", "Macaé", 1, "casa", "RIo de Janeiro", "24400-000", "RJ", "rj" );
$clientes[5] = new Clientes(6, "Adalberto", "Tavares", "123.799.999-99", "cliente6@email.com.br", "9999-9999", "Rio das Ostras", 1, "casa", "RJ", "24400-000", "RJ", "rj" );
$clientes[6] = new Clientes(7, "Aline", "Hermida", "234.799.999-99", "cliente7@email.com.br", "9999-9999", "Paraná", 1, "casa", "PR", "24400-000", "PR", "pr" );
$clientes[7] = new Clientes(8, "Marcos", "Amaro", "643.799.999-99", "cliente8@email.com.br", "9999-9999", "Rio de Janeiro", 1, "Sobrado", "", "24400-000", "RJ", "rj" );
$clientes[8] = new Clientes(9, "Francisco", "Marini", "345.799.999-99", "cliente9@email.com.br", "9999-9999", "Salvador", 1, "casa", "SA", "24400-000", "SA", "sa" );
$clientes[9] = new Clientes(10, "Neto", "Queiroz", "000.799.999-99", "cliente10@email.com.br", "9999-9999", "Fortaleza", 1, null, "CE", "24400-000", "CE", "ce" );
