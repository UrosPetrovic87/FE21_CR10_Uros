<?php 
require_once 'actions/db_connect.php';
$sql = "SELECT * FROM libary";
$result = mysqli_query($connect ,$sql);
$tbody=''; //this variable will hold the body for the table
if(mysqli_num_rows($result)  > 0) {     
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){         
        $tbody .= "
        <div class='col'>
        <div class='card h-100' style=''>
            <img src='".$row['picture']."' class='card-img-top' alt='...'>
                <div class='card-body'>
                    <h5 class='card-title'>" .$row['tittle']."</h5>
                    <p class='card-text'>" .$row['description']."</p>
                </div>
                <ul class='list-group list-group-flush'>
                    <li class='list-group-item'><span class='fw-bold'>Type:</span> " .$row['type']."</li>
                    <li class='list-group-item'><span class='fw-bold'>Authors first name:</span> " .$row['firstName']."</li>
                    <li class='list-group-item'><span class='fw-bold'>Authors last name:</span> " .$row['lastName']."</li>
                    <li class='list-group-item'><span class='fw-bold'>Publischer name:</span> ".$row['publisherName']."</li>
                    <li class='list-group-item'><span class='fw-bold'>Publischer adress:</span> ".$row['publisherAdress']."</li>
                    <li class='list-group-item'><span class='fw-bold'>Status:</span> " .$row['status']."</li>
                   
                </ul>
                <div class='card-body'>
                <a href='update.php?id=" .$row['id']."'><button class='btn btn-info me-2' type='button'>Update</button></a>
                <a href='delete.php?id=" .$row['id']."'><button class='btn btn-danger me-2' type='button'>Delete</button></a>
                </div>
                </div> 
                </div>";
    };
} else {
    $tbody =  "<tr><td colspan='5'><center>No Data Available </center></td></tr>";
}

mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Libary</title>
        <?php require_once 'components/boot.php'?>
    </head>
    <body class="">
        <?php require_once 'components/nav.php'?>
       
        <div class="container">   
            <p class='h3 my-5 text-center'>Media</p>

            <div class="row row-cols-1 g-3 my-3 row-cols-md-2 row-cols-lg-3 ">
                <?= $tbody;?>
            </div>
        </div>
    </body>
</html>