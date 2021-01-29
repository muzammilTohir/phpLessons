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
<form method="post" action="">
<label>Enter an input for getting one name:</label><br>
<input type = "number" name = "id" /><br>
<label>Enter an input for deleting one row:</label><br>
<input type = "number" name = "d_id" />
<input type="submit"  value="Done">
</form>

<?php
         $control = new UsersController();
         $view = new UsersView();
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $input = $_POST['num'];
        switch ($input) {
            case 'getone':
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $view->showUser($_POST["id"]);
                }
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
                 $control->deleteUser($_POST["d_id"]);
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