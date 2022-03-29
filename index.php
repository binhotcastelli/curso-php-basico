<?php
// importação das classes
require_once('classes/curso.php');

$cursos = array();

// adicionar c#
$curso = new Curso();
$curso->nome = "C#";
$curso->tipo = "Programação";
$curso->ativo = false;
array_push($cursos, $curso);

// adicionar MySQL
$curso = new Curso();
$curso->nome = "MySQL";
$curso->tipo = "Banco de dados";
array_push($cursos, $curso);

// adicionar Node JS
$curso = new Curso();
$curso->nome = "Node JS";
$curso->tipo = "Javascript";
array_push($cursos, $curso);

// adicionar React
$curso = new Curso();
$curso->nome = "React JS";
$curso->tipo = "Javascript";
array_push($cursos, $curso);
?>

<html>

<head>
  <title>Aula 3</title>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    header {
      display: flex;
      align-items: center;
      justify-content: flex-start;
      width: 100%;
      min-height: 60px;
      background-color: #9f9f9f;
      padding-left: 20px;
      margin-bottom: 20px;
    }

    div {
      padding: 20px;
    }
  </style>
</head>

<body>
  <?php include('_header.php'); ?>

  <div>
    <ul>
      <?php
      foreach ($cursos as $curso) {
        if ($curso->ativo == true) {
          echo "<li>" .  $curso->nome . " - <i>" . $curso->tipo . "</i></li>";
        }
      }
      ?>
    </ul>
  </div>
</body>

</html>