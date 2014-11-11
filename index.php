<!DOCTYPE HTML>
<html>
<head>
  <title></title>
  <meta charset="UTF-8">

</head>
<body>
  <?php $page_link = "second_page.php";
    $name = "Marge";
    $lastname = "Mölder";
    ?>
    <a href="<?php echo $page_link.'?name='.$name."&lastname=".$lastname ?>">2. page</a>
    <?php $example = array("name" => "Marge", "lastname" => "Mölder"); ?><br>
    <?php echo $_GET["test"]; ?>

</body>
</html>