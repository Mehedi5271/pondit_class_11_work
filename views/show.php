
<?php ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php

include './../vendor/autoload.php';

use Student\Controllers\StudentController;

$studentcontroller = new StudentController;

$student = $studentcontroller->show($_GET['id']);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<style>
    .container{
        margin-top: 50px;
        margin-left: 630px;
    }
    body{
        background-color: antiquewhite;
    }
</style>
</head>
<body>
    <div class="container">
<div class="card" style="width: 18rem;">
  <div class="card-header">
    Name: <?= $student['name'] ?>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Id: <?= $student['id'] ?> </li>
    <li class="list-group-item">Roll: <?= $student['roll'] ?> </li>
    <li class="list-group-item">Gender: <?= $student['gender'] ?></li>
    <li class="list-group-item"><a style="margin-left: 30px;" class="btn btn-primary" href="./index.php">All Student Information</a>
</li>
  </ul>
</div>

</div>
    
</body>
</html>

