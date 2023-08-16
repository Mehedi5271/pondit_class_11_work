<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information Form</title>
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
        body{
           background-color: antiquewhite;
        }
    </style>
</head>
<body>
    <div class="container ">
    <h1>Student Information Form</h1>
    
    <form action="./store.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br> <br>
        
        <label for="roll">Roll:</label>
        <input type="text" id="roll" name="roll" required><br> <br>
        
        <label for="gender">Gender:</label>
       <input type="radio" name="gender" value="Male"> Male
       <input type="radio" name="gender" value="Female"> Female <br> <br>
        
        <button class="btn btn-success" type="submit">Submit</button>
    </form>

    </div>
    
</body>
</html>
