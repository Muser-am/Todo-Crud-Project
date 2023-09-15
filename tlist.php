<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <title>NEW_TODOLIST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="http://kit.fontawesome.com/eb2cfeef2f.js" crossorigin="anonymous"></script>
</head>
<body class="bg-primary">
    <form action="insert.php" method="POST">
    <div class="container">
        <div class="row justify-content-center m-auto shadow bg-white mt-3 py-3 col-md-6">
            <h3 class="text-center text-primary font-monospace">TODO LIST</h3>  
            <div class="col-10">
                <input type="text" required name="list" class="form-control">
            </div>  
            <div class="col-2">
                <button class="btn btn-outline-primary"><i class="fa-solid fa-square-plus"></i></button>
            </div>
        </div>
    </div>
</form>

<!-- get data -->
<?php
include ("config.php");
$rawData= mysqli_query($conn, "select * from tabletodo");
?>

<div class= "container">
    <div class= "col-8 bg-white m-auto mt-3">
<table class="table">
    <tbody class="fs-3 text-primary shadow">
        <?php
        while($row = mysqli_fetch_array($rawData)){
        ?>
        <tr>
            <td><?php echo $row['list']?></td>
            <td style="width: 10%;"><a href= "/Projects/delete.php? id= <?php echo $row['id']?>" class="btn btn-outline-danger"><i class="fa-solid fa-delete-left"></i></a></td>
            <td style="width: 10%;"><a href= "/Projects/update.php? id= <?php echo $row['id']?>" class="btn btn-outline-success"><i class="fa-solid fa-pen-to-square"></i></a></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>
</div>
</div>
</body>
</html>