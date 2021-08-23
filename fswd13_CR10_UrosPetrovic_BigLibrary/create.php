<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php require_once 'components/boot.php'?>
        <title>Create Media</title>
        <style>
            fieldset {
                margin: auto;
                width: 60% ;
            }       
        </style>
    </head>
    <body>
    <?php require_once 'components/nav.php'?>
        <fieldset>
            <legend class='h3 my-5 text-center'>Create Media</legend>
            <form action="actions/a_create.php" method= "post">
                <table class='table'>
                  <tr>
                        <th>Title</th>
                        <td><input class='form-control' type="text" name="tittle"  placeholder="Media Title" /></td>
                    </tr>    
                    <tr>
                        <th>Image</th>
                        <td><input class='form-control' type="text" name= "picture" placeholder="Image URL" /></td>
                    </tr>
                    <tr>
                        <th>ISBN</th>
                        <td><input class='form-control' type="text" name="isbn"  placeholder="ISBN" /></td>
                    </tr>    
                    <tr>
                        <th>Description</th>
                        <td><input class='form-control' type="text" name= "description" placeholder="Description" /></td>
                    </tr>
                    <tr>                   
                    <th>Type: </th >                       
                            <td><input class='form-control' type="text" name= "type" placeholder="book cd or dvd" /></td>          
                   </tr>
                    <tr>
                        <th>Author First Name</th>
                        <td><input class='form-control' type="text" name= "firstName" placeholder="Author First Name" /></td>
                    </tr>
                    <tr>
                        <th>Author Last Name</th>
                        <td><input class='form-control' type="text" name="lastName"  placeholder="Author Last Name" /></td>
                    </tr>    
                    <tr>
                        <th>Publisher Name</th>
                        <td><input class='form-control' type="text" name= "publisherName" placeholder="Publisher Name" /></td>
                    </tr>
                    <tr>
                        <th>Publisher Address</th>
                        <td><input class='form-control' type="text" name= "publisherAdress" placeholder="Publisher Address" /></td>
                    </tr>
                    <tr>
                        <th>Publish Date</th>
                        <td><input class='form-control ' type="date" name="date"  placeholder="Publish Date" /></td>
                    </tr>    
                    <tr>
                        <th>Status</th>
                        <td><input class='form-control ' type="text" name="status"  placeholder="Status" /></td>
                    </tr>  
                    
                    <tr>
                        <td><button class='btn btn-success ' type="submit">Insert Media</button></td>
                        <td><a href="index.php"><button class='btn btn-warning' type="button">back</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>