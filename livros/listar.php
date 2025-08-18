<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    </head>
</head>
<body>
<?php 
 require 'conexao.php';
include_once 'pedaco.php';
      ?>


<?php


?>























<h2>Lista de Livros Disponiveis</h2>

<div class="container" > 
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">titulo</th>
                <th scope="col">genero</th>
                <th scope="col">autor</th>
                <th scope="col">ano</th>
                <th scope="col">paginas</th>
            </tr>
        </thead>
        <tbody>

  <?php
 $sql = "SELECT * FROM livros";
    $stmt = $pdo->query($sql);

    while ($livro = $stmt->fetch(PDO::FETCH_ASSOC)) { 

        echo "<tr>"
        echo "<th scope='row'>". $livro['id']."</th>";
        echo "<td>".$livro['titulo']."</td>";
        echo "<td> ".$livro['genero']."</td>";
        echo "<td>Machado de Assis</td>";
        echo "<td>1900</td>";
        echo " <td>338</td>";





        echo "<pre>", $livro['id'] , "<br>";
        echo "<pre>", $livro['titulo'] , "<br>";   
        echo "<pre>", $livro['genero'] , "<br>";
        echo "<pre>", $livro['autor'] , "<br>";   
        
        echo "</tr>"
    }


?>

            <tr>
                <th scope="row">1</th>
                <td>Dom casmuro</td>
                <td>Romance</td>
                <td>Machado de Assis</td>
                <td>1900</td>
                <td>338</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Dom casmuro</td>
                <td>Romance</td>
                <td>Machado de Assis</td>
                <td>1900</td>
                <td>338</td>
            </tr>
            
        </tbody>
    </table>
    <a href="index.php" class="btn btn-primary active" aria-current="page">Voltar</a>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>
 