<!DOCTYPE HTML>
<html>
<head>
  <title></title>
  <meta charset="UTF-8">

</head>
<body>
  <h1>1. page</h1>

	<?php
     $link_file = "second_page.php";
     $name = "Mölder";
    ?>
   
   <a href="<?php echo "{$link_file}?name={$name}"; ?>">Teisele lehele</a><br>
    <?php 
      print_r($_GET); echo "<br>";
      echo $_GET["firstname"];
      $jada = array("Marge", "Mölder"); echo "<br>";
      echo $jada[1];
    ?>
	</a>

</body>
</html>