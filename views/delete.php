<?php ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php

include './../vendor/autoload.php';

use Student\Controllers\StudentController;

$studentcontroller = new StudentController;

$id = $_GET['id'];
$studentcontroller->destroy($id);

?>
