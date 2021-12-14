<?php
include_once('functions.php');
?>

<html>
	<head>
		<title>Tables de multiplication</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
	</head>

	<body class="d-flex align-items-center w-100">

    <div class="container d-flex align-items-center flex-column">
		  <h1 class="text-center text-uppercase mt-5">Tables de multiplication</h1>
      
      <button class="btn-t9 mt-5"><a href="?table=9" class="t9">Table de 9</a></button>
      
      <h2 class="mt-3 mb-3">Générer tables n x n</h2>
      
      <form method="GET" class="container d-flex justify-content-center flex-column">
        <input type="number" name="table" placeholder="n =" min="0" max="100" class="input-n mb-2">
        <input type="submit" value="Générer" class="input-sub">
      </form>
      <button type="button" class="btn-res"><a href="index.php">Reset</a></button>
      
      <?php 
      if (isset($_GET)) {
        if (isset ($_GET['table'])) { 
          $table = $_GET['table'];
          echo '<h2 class="mt-5">Table de ' . $table .'</h2>';
          createTable($table);
        }
      }
      ?>

    </div>

	</body>
</html>