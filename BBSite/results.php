<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Barbells and Brews</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/results.css">
  <script src="js/prefixfree.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<header>
  <?php 
    include("nav.php");
  ?>
</header>

<div class="form">
  <form action="#" method="post">
    <select name="resultOption">
      <option value='results2016'>2016</option>
      <option value='results2015'>2015</option>
    </select>
    <input type="submit" name="submit" value="Get Results" />
  </form>
</div>

<?php
  $competition = "charlotte_sugarcreekbrewing_2016";
  if(isset($_POST['resultOption'])){
    if($_POST['resultOption']==='results2015'){
      $competition = "charlotte_sugarcreekbrewing_2015";
    }
    if($_POST['resultOption']==='results2016'){
      $competition = "charlotte_sugarcreekbrewing_2016";
    }
  }
  include("resultsTable.php")
?>

 
<?php 
  include("footer.php");
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="js/myscript.js"></script>
</body>
</html>
