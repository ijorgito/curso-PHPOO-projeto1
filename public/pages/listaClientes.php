                <h1>Lista de meus Clientes</h1>
                    <div class="jumbotron">
                        <?php
                        if(isset($_POST['cres'])){
                            ksort($clientes);
                        }elseif(isset($_POST['dec'])){
                            krsort($clientes);
                        }else{
                            ksort($clientes);
                        }
                        ?>
                        <form method="post">
                            <button class="btn btn-warning" type="submit" value="cres" name="cres">Ordem Crescente</button>
                            <button class="btn btn-warning " type="submit" value="dec" name="dec">Ordem Decrescente</button>
                        </form>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Nome</th>
                                    <th>Sobrenome</th>
                                    <th>E-mail</th>
                                    <th>Telefone</th>
                                    <th>Visualizar</th>
                                    <th>Editar</th>
                                    <th>Apagar</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($clientes as $key => $value) {
                                ?>
                                <tr>
                                <td><?php echo $value->getId();?></td>
                                <td><?php echo $value->getNome();?></td>
                                <td><?php echo $value->getSobrenome();?></td>
                                <td><?php echo $value->getEmail();?></td>
                                <td><?php echo $value->getTelefone();?></td>
                                <td><a href="./pages/visualizarCliente.php?<?php echo $value->getId();?>"><button class="btn btn-info " type="submit" name="visualizar" >Visualizar</button></a></td>
                                <td><a href="#"><button class="btn btn-primary disabled" type="submit" name="alterar" >Alterar</button></a></td>
                                <td><a href="#"><button class="btn btn-danger disabled" type="submit" name="deletar">Deletar</button></a></td>
                                </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div><!-- /jumbotron -->