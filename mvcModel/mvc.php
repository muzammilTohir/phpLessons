<?php
    include 'autoload.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ModelViewController</title>
</head>
<body>       
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<h1>Search</h1>
<div class="form__div">
<label>Enter an input for executing one action:</label><br>
<input type="text" name="num" placeholder="Search..">
</div>
<input type="submit"  value="Executing">
</form>

    <?php
         $control = new UsersController();
         $view = new UsersView();
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $input = $_POST['num'];
        switch ($input) {
            case 'getone':
             $view->showUser(1);
                break;
             case 'get':
                 $view->getAll('Sardor','Botirov');
                break;
             case 'set':
                 $control->createUser('NewUser','NewUserovich','0000-00-00');
                break;
             case 'update':
                 $control->updateUser('Sardor');
                break;
             case 'delete':
                 $control->deleteUser(6);
                break;
             case 'order':
                 $view->orderUser();
                 break;
            default:
                echo "Invalid input!";
                break;
        }
     }
    ?>
</body>
</html>