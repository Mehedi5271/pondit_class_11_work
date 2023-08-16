<?php ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>


<?php

include './../vendor/autoload.php';
use Student\Controllers\StudentController;

$studentcontroller = new StudentController;

$students = $studentcontroller->index();

// echo "<pre>";
// print_r($products);
   
?>




<?php 

if(isset($_SESSION['message'])){
    echo $_SESSION['message'];
    unset($_SESSION['message']);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        
        th {
            background-color: #f2f2f2;
        }
        .container{
            margin-top: 50px;
        }
        .btn{
            margin-left: 10px;
            margin-top: 10px;
        }
        
    
    </style>
</head>
<body>
    <div class="container">
<a class="btn btn-success" href="./create.php">Add New Student</a>
    <h1 style="text-align: center;">Student Information</h1>
    
    <table >
        <thead>
            <tr>
                <th>Name</th>
                <th>Roll</th>
                <th>Gender</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php 

$sl =0;
foreach($students as $student){ 

?>
            <tr>
                <td><?= $student['name'] ?></td>
                <td><?= $student['roll'] ?></td>
                <td><?= $student['gender'] ?></td>
                 
                <td class="btn btn-success" > <a style="text-decoration: none; color:white;" href="./show.php?id= <?= $student['id']?>">Show</a></td>
                <td class="btn btn-warning"><a style="text-decoration: none; color:white" href="./edit.php?id= <?= $student['id']?>">Edit</a></td>
                <td class="btn btn-danger" ><a style="text-decoration: none; color:white" href="./delete.php?id= <?= $student['id']?>">Delete</a></td>
                  
                  </td>  
               
            </tr>
        
            <!-- Add more rows for other students -->
        </tbody>
        <?php } ?>
    </table>

    </div>
</body>
</html>
