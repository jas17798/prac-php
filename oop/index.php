<?php
    include_once("conn.php");

    $sql = "SELECT * FROM users";

    $res = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Index </title>
</head>
<body>
    <h1 class="text-center">Table Output</h1>
    <hr width="60%" width="bold">
    <div class="row" >
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
    <table class="table">
    <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($res->num_rows > 0) { 
            foreach($res as $r) { 
            ?>        
        <tr>
        <td><?= $r['id']?></td>
        <td><?= $r['name']?></td>
        <td>Edit</td>
        <td>Delete</td>
        </tr>
        <?php  } }  ?>
    </tbody>
    </table></div>
    <div class="col-sm-3"></div>

    </div>
</body>
</html>