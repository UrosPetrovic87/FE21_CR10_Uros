<?php
require_once 'db_connect.php';

if ($_POST) {    
    $tittle = $_POST['tittle'];
    $picture = $_POST['picture'];
    $isbn = $_POST['isbn'];
    $description = $_POST['description'];
    $type = $_POST['type'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $publisherName = $_POST['publisherName'];
    $publisherAdress = $_POST['publisherAdress'];
    $date = $_POST['date'];
    $status = $_POST['status'];
    $id = $_POST['id'];

 $sql = "UPDATE libary SET tittle = '$tittle', picture = '$picture', isbn = '$isbn', description = '$description', type = '$type', firstName = '$firstName', lastName = '$lastName', publisherName = '$publisherName', publisherAdress = '$publisherAdress', date = '$date', status = '$status'  WHERE id = {$id}";

     
    if (mysqli_query($connect, $sql) === TRUE) {
        $class = "success";
        $message = "The record was successfully updated";
    } else {
        $class = "danger";
        $message = "Error while updating record : <br>" . mysqli_connect_error();
    }
    mysqli_close($connect);    
} else {
    header("location: ../error.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Update</title>
        <?php require_once '../components/boot.php'?> 
    </head>
    <body>
        <div class="container">
            <div class="mt-3 mb-3">
                <h1>Update request response</h1>
            </div>
            <div class="alert alert-<?php echo $class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <p><?php echo ($uploadError) ?? ''; ?></p>
                <a href='../update.php?id=<?=$id;?>'><button class="btn btn-warning" type='button'>Back</button></a>
                <a href='../index.php'><button class="btn btn-success" type='button'>Home</button></a>
            </div>
        </div>
    </body>
</html>