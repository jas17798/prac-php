<?php    
    // Allow the config 
    define('__CONFIG__', true);
    // Require the config
    require_once "inc/config.php" ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.10.1/dist/css/uikit.min.css" />
</head>
<body>
    <div class="uk-section uk-container uk-width-1-3"> 
      <?php  
            echo "Hello World - Today is - " . date('Y m d');

            
      ?>
      <a href="login.php">Login Here</a>
      <a href="register.php">Register Here</a>
      <br>
      <a href="pdf/Design_Patterns.pdf" target="_blank">View PDF</a>
      <a href="new.php">View New PDF Page</a>
    </div>

    <iframe frameborder="0" scrolling="no" style="border:0px" src="pdf/Design_Patterns.pdf" width="800" height=500 download="no">
    
    </iframe>
    <?php  require_once "footer.php" ; ?>
    
</body>
</html>