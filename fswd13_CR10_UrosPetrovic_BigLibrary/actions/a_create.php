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

    $sql = "INSERT INTO libary (tittle, picture, isbn, description, type, firstName, lastName, publisherName, publisherAdress, date, status ) VALUES ('$tittle', '$picture', '$isbn', '$description', '$type', '$firstName', '$lastName', '$publisherName', '$publisherAdress', '$date', '$status')";

    if (mysqli_query($connect, $sql) === true) {
        $class = "success";
        $message = "The entry below was successfully created <br>
            <table class='table w-50'>
                <tr>
                    <td>$tittle</td>
                    <td>$picture</td>
                    <td>$isbn</td>
                    <td>$description</td>
                    <td>$type</td>
                    <td>$firstName</td>
                    <td>$lastName</td>
                    <td>$publisherName</td>
                    <td>$publisherAdress</td>
                    <td>$date</td>
                    <td>$status</td>
                </tr>
            </table>
            <hr>";
        
    } else {
        $class = "danger";
        $message = "Error while creating record. Try again: <br>" . $connect->error;
        
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
                <h1>Create request response</h1>
            </div>
            <div class="alert alert-<?=$class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <a href='../index.php'><button class="btn btn-primary" type='button'>Home</button></a>
            </div>
        </div>
    </body>
</html>