<?php
    include_once("conn.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    
    <form style="padding:10px" method="POST" action="post.php">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control col-sm-6" id="name" name="name" placeholder="Name">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
</body>
</html>