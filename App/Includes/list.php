<?php
    $results = '';
    foreach($worker as $worker){
        $results .= '<tr>
                        <td>'.(
                            $worker->wor_type == '0' ? 'Admin' :
                            ($worker->wor_type == "1" ? "Recepcao" :
                            ($worker->wor_type == "2" ? "Enfermagem" :
                            ($worker->wor_type == "3" ? "Med" :
                            ($worker->wor_type == "4" ? "Farmacia" :null))))
                            ).'</td>
                        <td>'.$worker->wor_name.'</td>
                        <td>'.$worker->wor_doc.'</td>
                        <td>
                            <a href="editworker.php?wor_id='.$worker->wor_id.'"><button type="button" class="btn btn-primary">Editar</button></a>
                            <a href="deleteworker.php?wor_id='.$worker->wor_id.'"><button type="button" class="btn btn-danger">Excluir</button></a>
                            
                        </td>
                    </tr>';
    }


?>
<main>
    <section class="mb-4">
        <a href="register.php">
            <button class="btn btn-primary">Novo Atendimento</button>
        </a>
    
        <a href="addworker.php">
            <button class="btn btn-primary">Adicionar Usuario</button>
        </a>
    </section>

    <section>
        <table class="table">
            <thead>
                <tr>
                    <th>Tipo</th>
                    <th>Nome</th>
                    <th>Documento</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?=$results?>
            </tbody>
        </table>
    </section>

</main>