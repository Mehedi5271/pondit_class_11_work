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
    <title>Insert</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<style>
    .container{
        margin-left: 250px;
        margin-top: 100px;
    }
    body{
        background-color: antiquewhite;
    }
</style>
</head>
<body>
    <div class="container">
        
    <div style="width: 500px; margin: 0 auto; "> 
    <h1>Update Information</h1>
    
    <form action="./update.php" method="post">
    <input type="hidden" name="id" value="<?= $student['id'] ?>">
    <label for="name">Name:</label>
        <input type="text" name="name" value="<?= $student['name'] ?>">  <br>  <br>
        <label for="name">Roll:</label>
        <input type="text" name="roll" value="<?= $student['roll'] ?>">  <br>  <br>
        <label for="name">Gender:</label>
        <input type="text" name="gender" value="<?= $student['gender'] ?>">  <br>  <br>
        <input class="btn btn-success" type="submit" value="Update">
        <a class="btn btn-primary" href="./index.php">All Student Information</a> <br> <br>

    </form>
    </div>
    </div>
    <br>
    
</body>
</html>