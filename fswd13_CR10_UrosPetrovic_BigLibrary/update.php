<?php
require_once 'actions/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM libary WHERE id = {$id}";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
        
        $tittle = $data['tittle'];
        $picture = $data['picture'];
        $isbn = $data['isbn'];
        $description = $data['description'];
        $type = $data['type'];
        $firstName = $data['firstName'];
        $lastName = $data['lastName'];
        $publisherName = $data['publisherName'];
        $publisherAdress = $data['publisherAdress'];
        $date = $data['date'];
        $status = $data['status'];
    } else {
        header("location: error.php");
    }
    mysqli_close($connect);
} else {
    header("location: error.php");
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Edit Media</title>
        <?php require_once 'components/boot.php'?>
        <style type= "text/css">
            fieldset {
                margin: auto;
                width: 60% ;
            }  
            .img-thumbnail{
                width: 70px !important;
                height: 70px !important;
            } 
              
        </style>
    </head>
    <body>
        <?php require_once 'components/nav.php'?>
        <fieldset>
            
            <form action="actions/a_update.php"  method="post">
                <table class="table my-5">
                    <tr>
                        <th class='h3 fw-light'>Update request </th>
                        <td><img class='img-thumbnail' src='<?php echo $picture ?>' alt='<?php echo $tittle ?>'></td>
                    </tr>  
                    <tr>
                        <th>Title</th>
                        <td><input class='form-control' type="text" name="tittle"  value="<?php echo $tittle ?>" /></td>
                    </tr>    
                    <tr>
                        <th>Picture</th>
                        <td><input class='form-control' type="text" name= "picture" value="<?php echo $picture ?>" /></td>
                    </tr>
                    <tr>
                        <th>ISBN</th>
                        <td><input class='form-control' type="text" name="isbn"  value="<?php echo $isbn ?>" /></td>
                    </tr>    
                    <tr>
                        <th>Description</th>
                        <td><input class='form-control' type="text" name= "description" value="<?php echo $description ?>" /></td>
                    </tr>
                    <tr>
                        <th>Type</th>
                        <td><input class='form-control ' type="text" name="type"  placeholder="type" value="<?php echo $type ?>"/></td> 
                        
                    </tr>    
                    <tr>
                        <th>Author First Name</th>
                        <td><input class='form-control' type="text" name= "firstName" value="<?php echo $firstName ?>" /></td>
                    </tr>
                    <tr>
                        <th>Author Last Name</th>
                        <td><input class='form-control' type="text" name="lastName"  value="<?php echo $lastName ?>" /></td>
                    </tr>    
                    <tr>
                        <th>Publisher Name</th>
                        <td><input class='form-control' type="text" name= "publisherName" value="<?php echo $publisherName ?>" /></td>
                    </tr>
                    <tr>
                        <th>Publisher Address</th>
                        <td><input class='form-control' type="text" name= "publisherAdress" value="<?php echo $publisherAdress ?>" /></td>
                    </tr>
                    <tr>
                        <th>Publish Date</th>
                        <td><input class='form-control' type="date" name="date"  value="<?php echo $date ?>" /></td>
                    </tr>    
                    <tr>
                        <th>Status</th>
                        <td><input class='form-control ' type="text" name="status"  placeholder="Status" value="<?php echo $status ?>"/></td> 
                    </tr>  
                    <tr>
                        <input type= "hidden" name= "id" value= "<?php echo $data['id'] ?>" />
                        <td><button class="btn  btn-info" type= "submit"> update</button></td>
                        <td><a href= "index.php"><button class="btn btn-warning" type="button">back</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>