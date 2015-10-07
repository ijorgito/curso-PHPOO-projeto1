<h1>Visualizando o Cliente</h1>
<div class="jumbotron">
<?php

require_once "../bootstrap.php";
require_once "../pages/header.php";

require_once "clientes.php";

IF(isset($_GET)) {
    $codigo = array_keys($_GET);
    //print_r($codigo)."COD";
    foreach ($codigo as $key => $value) {
        $valor = $value-1;
		
		echo "<h1>CLIENTE: ".$clientes[$valor]->getNome()."</h1>"; 
		
		echo "<table class=\"table table-striped\">
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Nome</th>
									<th>CPF</th>
                                    <th>Sobrenome</th>
                                    <th>E-mail</th>
                                    <th>Telefone</th>
                                    <th>Endereço</th>
                                    <th>Bairro</th>
                                    <th>CEP</th>
									<th>Municipio</th>
									<th>UF</th>
                                </tr>
								</thead>
                            <tbody>";		

        echo "<tr>
		        <td><strong>".$clientes[$valor]->getId()."</strong></td>";
			echo "<td><strong>".$clientes[$valor]->getNome()." ".$clientes[$valor]->getSobrenome()."</strong></td>";
			echo "<td><strong>".$clientes[$valor]->getCpf()."</strong></td>";
			echo "<td><strong>".$clientes[$valor]->getEmail()."</strong></td>";
			echo "<td><strong>".$clientes[$valor]->getTelefone()."</strong></td>";
			echo "<td><strong>".$clientes[$valor]->getRua()." Nº".$clientes[$valor]->getNumero()."</strong></td>";
			echo "<td><strong>".$clientes[$valor]->getComplemento()."</strong></td>";
			echo "<td><strong>".$clientes[$valor]->getBairro()."</strong></td>";
			echo "<td><strong>".$clientes[$valor]->getCep()."</strong></td>";
			echo "<td><strong>".$clientes[$valor]->getMunicipio()."</strong></td>";
			echo "<td><strong>".$clientes[$valor]->getUf()."</strong></td>";
		echo " </tr> </tbody>
                </table>";
    }
}



?>
<a href="../index.php"><button class="btn btn-info " >Voltar</button></a>
</div><!-- /jumbotron -->

<?php require_once "../pages/footer.php"; ?>



