<?php

define( 'MYSQL_HOST', 'localhost:3306' );
define( 'MYSQL_USER', 'root' );
define( 'MYSQL_PASSWORD', '' );
define( 'MYSQL_DB_NAME', 'clientes' );

try
{
     $PDO = new PDO( 'mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD );
}catch ( PDOException $e )
{
    echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="annymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Sistema de Acesso ao Banco de Dados</title>
    
</head>
<body style="background-color:pink;">
    <div class="container">
        <div class="row">
            <div class="col">
            <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">ID: </th>
                            <th scope="col">NOME: </th>
                            <th scope="col">ENDEREÇO: </th>
                            <th scope="col">BAIRRO: </th>
                            <th scope="col">CEP: </th>
                            <th scope="col">CIDADE: </th>
                            <th scope="col">ESTADO: </th>
                        </tr>
                    </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM clientes";
                            $result = $PDO->query($sql);
                            $rows = $result->fetchALL();
                            ?>
                            <tr>
                                <th scope="row"><?php echo $rows[0]['id'];?></th>
                                <td><?php echo $rows[0]['nome'];?></td>
                                <td><?php echo $rows[0]['endereco'];?></td>
                                <td><?php echo $rows[0]['bairro'];?></td>
                                <td><?php echo $rows[0]['cep'];?></td>
                                <td><?php echo $rows[0]['cidade'];?></td>
                                <td><?php echo $rows[0]['estado'];?></td>
                            </tr>
                            </tbody>
                    </table>
            </div>
        </div>
    </div>
</body>
</html>    