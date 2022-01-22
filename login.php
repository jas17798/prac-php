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
        <form>
            <fieldset class="uk-fieldset">

                <legend class="uk-legend">Login</legend>

                <div class="uk-margin">
                    <div class="form-control">
                        <input class="uk-input" type="text" placeholder="Email">
                    </div>
                </div>
                <div class="uk-margin">
                    <div class="form-control">
                        <input class="uk-input" type="text" placeholder="Your Password">
                    </div>
                </div>
                <div class="uk-margin">
                    <div class="form-control">
                        <button class="uk-button uk-button-default">Login</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>

    <?php  require_once "footer.php" ; ?>
    
</body>
</html>