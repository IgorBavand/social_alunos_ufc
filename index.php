<?php
include('./conexao/conn.php');

//Verificar se está sendo passado na URL a página atual, senao é atribuido a pagina 
$pagina = (isset($_GET['pagina'])) ? $_GET['pagina'] : 1;

//Selecionar todos os cursos da tabela
$result_curso = "SELECT * FROM horarios";
$resultado_curso = mysqli_query($db, $result_curso);

//Contar o total de cursos
$total = mysqli_num_rows($resultado_curso);

//Seta a quantidade de cursos por pagina
$quantidade_pg = 5;

//calcular o número de pagina necessárias para apresentar os cursos
$num_pagina = ceil($total / $quantidade_pg);

//Calcular o inicio da visualizacao
$incio = ($quantidade_pg * $pagina) - $quantidade_pg;

//Selecionar os cursos a serem apresentado na página
$result = "SELECT * FROM horarios limit $incio, $quantidade_pg";
$resultado = mysqli_query($db, $result);
$total = mysqli_num_rows($resultado);
?>
<!DOCTYPE html>
<html>
    <head>
        <!-- https://codewithawa.com/posts/php-crud-create,-edit,-update-and-delete-posts-with-mysql-database1 -->
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <title>Horarios de estudos em grupo</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <style>
            td, th{
                color: aliceblue;
            }
            h1{
                text-align: center;
                font-family: cursive;
                color: aliceblue;
            }
            body {               
                font-size: 19px;
                background: url(./img/fundo.jpg) no-repeat center center fixed; 
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }

            tr:hover{
                background: background;
            }
            </style>

        </head>
        <body>
            <?php if (isset($_SESSION['message'])): ?>

                <div class="alert alert-success" role="alert">
                    <?php
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                    ?>
            </div>


        <?php endif ?>
        <h1>Horarios de estudo</h1>
    <center><a class="btn btn-success" href="cadHorario.php" role="button">Cadastrar novo horario</a><center>

            <table class="table table-bordered table-condensed ">
                <thead>
                    <tr id="teste">
                        <th>Tutor</th>
                        <th>Disciplina</th>
                        <th>Local</th>
                        <th>Data</th>
                        <th>Horario</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($res = mysqli_fetch_assoc($resultado)) { ?>
                        <tr>
                            <td><?php echo $res['tutor']; ?></td>
                            <td><?php echo $res['disciplina']; ?></td>
                            <td><?php echo $res['local']; ?></td>
                            <td><?php echo $res['data']; ?></td>
                            <td><?php echo $res['horario']; ?></td>

                            <td>
                                <a href="./conexao/conn.php?del=<?php echo $res['id']; ?>" class="btn btn-danger">Cancelar</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <?php
            //Verificar a pagina anterior e posterior
            $pagina_anterior = $pagina - 1;
            $pagina_posterior = $pagina + 1;
            ?>
            <nav class="text-center">
                <ul class="pagination">
                    <li>
                        <?php if ($pagina_anterior != 0) { ?>
                            <a href="index.php?pagina=<?php echo $pagina_anterior; ?>" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        <?php } else { ?>
                            <span aria-hidden="true">&laquo;</span>
                        <?php } ?>
                    </li>
                    <?php
                    //Apresentar a paginacao
                    for ($i = 1; $i < $num_pagina + 1; $i++) {
                        ?>
                        <li><a href="index.php?pagina=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                    <?php } ?>
                    <li>
                        <?php if ($pagina_posterior <= $num_pagina) { ?>
                            <a href="index.php?pagina=<?php echo $pagina_posterior; ?>" aria-label="Previous">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        <?php } else { ?>
                            <span aria-hidden="true">&raquo;</span>
                        <?php } ?>
                    </li>
                </ul>
            </nav>



            </body>
            </html>