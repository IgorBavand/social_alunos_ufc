<?php include('./conexao/conn.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <!-- https://codewithawa.com/posts/php-crud-create,-edit,-update-and-delete-posts-with-mysql-database1 -->
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <title>Cadastrar Horarios</title>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>


        <style>
            h1{
                text-align: center;
                font-family: cursive;
                color: aliceblue;
            }
            #tutorl, #disciplinal, #locall, #datal, #horariol{
                color: aliceblue;
                font-family: sans-serif;
            }

            body {               
                font-size: 19px;
                background: url(./img/fundo.jpg) no-repeat center center fixed; 
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
            table{
                width: 50%;
                margin: 30px auto;
                border-collapse: collapse;
                text-align: left;
            }
            tr {
                border-bottom: 1px solid #cbcbcb;
            }
            th, td{
                border: none;
                height: 30px;
                padding: 2px;
            }
            tr:hover {
                background: #F5F5F5;
            }

            form {
                width: 45%;
                margin: 50px auto;
                text-align: left;
                padding: 20px; 
                border: 1px solid #bbbbbb; 
                border-radius: 5px;
            }

            .input-group {
                margin: 10px 0px 10px 0px;
            }
            .input-group label {
                display: block;
                text-align: left;
                margin: 3px;
            }
            .input-group input {
                height: 30px;
                width: 93%;
                padding: 5px 10px;
                font-size: 16px;
                border-radius: 5px;
                border: 1px solid gray;
            }
           
            .edit_btn {
                text-decoration: none;
                padding: 2px 5px;
                background: #2E8B57;
                color: white;
                border-radius: 3px;
            }

            .del_btn {
                text-decoration: none;
                padding: 2px 5px;
                color: white;
                border-radius: 3px;
                background: #800000;
            }
            .msg {
                margin: 30px auto; 
                padding: 10px; 
                border-radius: 5px; 
                color: #3c763d; 
                background: #dff0d8; 
                border: 1px solid #3c763d;
                width: 50%;
                text-align: center;
            }
        </style>

         <script type="text/javascript" src="jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="jquery.mask.min.js"></script>
        <script type="text/javascript" src="mask/dist/jquery.mask.js"></script>
    </head>
    <body>
        <h1>Cadastrar novos horarios de estudo</h1>
        <form method="post" action="conexao/conn.php">
            <div class="form-group">
                <label id="locall" for="tutor">Tutor</label>
                <input type="text" class="form-control" name="tutor" id="tutor" placeholder="Tutor" required>
            </div>
            <div class="form-group">
                <label id="disciplinal" for="disciplina">Disciplina</label>
                <input type="text" class="form-control" name="disciplina" id="disciplina" placeholder="Disciplina" required>
            </div>
            <div class="form-group">
                <label id="locall" for="local">Local</label>
                <input type="text" class="form-control" id="local" name="local" placeholder="Local" required>
            </div>
            <div class="form-group">
                <label id="datal" for="data">Data</label>
                <input type="date" class="form-control" id="data" name="data" placeholder="Data" required>
            </div>
            <div class="form-group">
                <label id="horariol" for="horario">Horario</label>
                <input type="text" class="form-control" id="horario" name="horario" placeholder="Ex.: 13:30" required>
            </div>
            <a href="index.php" class="btn btn-danger">Cancelar</a>
            <button type="submit" name="cad" class="btn btn-success">Cadastrar</button>

        </form>

        <script>
            jQuery(function($){
            $("#horario").mask("99:99");
            
            });
        </script>
        
        
        
    
    

	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
        
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    </body>
</html>