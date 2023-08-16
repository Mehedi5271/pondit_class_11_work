<?php 

namespace Student\Controllers;
use PDO;
use PDOException;


class StudentController
{
    private $conn;
    public function __construct()   
     {
        try {
            session_start();
            $this->conn = new PDO("mysql:host=localhost;dbname=student", 'root', '');
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connected successfully"."<br>";
          } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
          }
     }

     public function index()
     {
 
       $query = "SELECT * FROM `info`";
       $stmt = $this->conn->prepare($query);
       $stmt->execute();
       return $stmt->fetchAll();
 
     }

     public function store(array $data)
     {
     
       try{
         $sql = "INSERT INTO `info` (`name`,`roll`,`gender`) VALUES (:name, :roll,:gender)";
         $stmt = $this->conn->prepare($sql);
         $stmt->execute([
            'name' => $data['name'],
            'roll' => $data['roll'],
            'gender' => $data['gender'],
         ]);
         $_SESSION['message']= 'created succesfully';
         header('location:./index.php');
       } catch(PDOException $e){
         echo $e->getMessage();
       }
       
     }
     public function show($id)
{
 $sql = "SELECT * FROM `info` WHERE id = $id";
 $stmt = $this->conn->prepare($sql);
 $stmt->execute();
 return $stmt->fetch();

}

public function update(array $data)
{
  try {
    $sql = "UPDATE `info` SET `name` = :name, `roll` = :roll, `gender` = :gender WHERE id = :id";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute([
       'name' => $data['name'],
       'roll' => $data['roll'],
       'gender' => $data['gender'],
       'id' => $data['id']
    ]);
    $_SESSION['message'] = 'Updated successfully';
    header('location: ./index.php');
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}

public function destroy( int $id)
{
  
  try {
    $sql = "DELETE FROM info WHERE id=$id";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    $_SESSION['message'] = 'Deleted successfully';
    header('location:./index.php');

  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}

}



?>